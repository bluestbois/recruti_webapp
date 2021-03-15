<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="This field must be filled")
     */
    private $statement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="This field must be filled")
     */
    private $answerA;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="This field must be filled")
     */
    private $answerB;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="This field must be filled")
     */
    private $answerC;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="This field must be filled")
     */
    private $rightAnswer;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Type(type={"integer"},message="This field must be filled with an integer")
     * @Assert\NotBlank(message="This field must be filled with an integer")
     */
    private $points;

    /**
     * @ORM\ManyToOne(targetEntity=Test::class, inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Test;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatement(): ?string
    {
        return $this->statement;
    }

    public function setStatement(string $statement): self
    {
        $this->statement = $statement;

        return $this;
    }

    public function getAnswerA(): ?string
    {
        return $this->answerA;
    }

    public function setAnswerA(string $answerA): self
    {
        $this->answerA = $answerA;

        return $this;
    }

    public function getAnswerB(): ?string
    {
        return $this->answerB;
    }

    public function setAnswerB(string $answerB): self
    {
        $this->answerB = $answerB;

        return $this;
    }

    public function getAnswerC(): ?string
    {
        return $this->answerC;
    }

    public function setAnswerC(string $answerC): self
    {
        $this->answerC = $answerC;

        return $this;
    }

    public function getRightAnswer(): ?int
    {
        return $this->rightAnswer;
    }

    public function setRightAnswer(int $rightAnswer): self
    {
        $this->rightAnswer = $rightAnswer;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getTest(): ?Test
    {
        return $this->Test;
    }

    public function setTest(?Test $Test): self
    {
        $this->Test = $Test;

        return $this;
    }
}
