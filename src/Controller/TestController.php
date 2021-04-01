<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Test;
use App\Entity\TestCategorie;
use App\Form\TestType;
use App\Form\TestUploadType;
use App\Repository\TestRepository;
use PhpOffice\PhpSpreadsheet\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test")
 */
class TestController extends AbstractController
{
    /**
     * @Route("/", name="test_index", methods={"GET"})
     * @param TestRepository $testRepository
     * @return Response
     */
    public function index(TestRepository $testRepository): Response
    {
        return $this->render('test/index.html.twig', [
            'tests' => $testRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="test_new", methods={"GET","POST"})
     * @param Request $request
     * @param Request $r
     * @return Response
     * @throws Exception
     */
    public function new(Request $request, Request $r): Response
    {
        $test = new Test();

        $form = $this->createForm(TestType::class, $test);
        $upload = $this->createForm(TestUploadType::class);

        $upload->handleRequest($r);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($test);
            $entityManager->flush();

            return $this->redirectToRoute('test_index');
        }

        if ($upload->isSubmitted() && $upload->isValid()) {

            $file = $upload->get("File")->getData();
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = transliterator_transliterate(
                'Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()',
                $originalFilename
            );
            $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

            $file->move(
                $this->getParameter('files_directory'),
                $newFilename
            );

            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('uploads/files/'.$newFilename);
            $sheet = $spreadsheet->getActiveSheet();
            $EM = $this->getDoctrine()->getManager();

            $test->setTitle($sheet->getCell('A1')->getValue());
            $test->setDescription($sheet->getCell('B1')->getValue());
            $test->addCategorie(
                $this
                    ->getDoctrine()
                    ->getRepository(TestCategorie::class)
                    ->findOneBy(['name' => $sheet->getCell('C1')->getValue()])
            );
            $EM->persist($test);
            $EM->flush();

            for($i = 1; $i < $sheet->getHighestDataRow('A'); $i++){
                $i++;
                $question = new Question();
                $question->setStatement($sheet->getCell('A'.$i)->getValue());
                $question->setAnswerA($sheet->getCell('B'.$i)->getValue());
                $question->setAnswerB($sheet->getCell('C'.$i)->getValue());
                $question->setAnswerC($sheet->getCell('D'.$i)->getValue());
                $question->setRightAnswer($sheet->getCell('E'.$i)->getValue() - 1);
                $question->setPoints($sheet->getCell('F'.$i)->getValue());
                $question->setTest($test);
                $i--;

                $EM->persist($question);
                $EM->flush();
            }

            return $this->redirectToRoute('test_index');
        }

        return $this->render('test/new.html.twig', [
            'test' => $test,
            'form' => $form->createView(),
            'upload' => $upload->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="test_show", methods={"GET"})
     * @param Test $test
     * @return Response
     */
    public function show(Test $test): Response
    {
        return $this->render('test/show.html.twig', [
            'test' => $test,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="test_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Test $test
     * @return Response
     */
    public function edit(Request $request, Test $test): Response
    {
        $form = $this->createForm(TestType::class, $test);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('test_index');
        }

        return $this->render('test/edit.html.twig', [
            'test' => $test,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="test_delete", methods={"DELETE"})
     * @param Request $request
     * @param Test $test
     * @return Response
     */
    public function delete(Request $request, Test $test): Response
    {
        if ($this->isCsrfTokenValid('delete'.$test->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($test);
            $entityManager->flush();
        }

        return $this->redirectToRoute('test_index');
    }
}
