<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatureRepository::class)
 */
class Candidature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Candidate::class, inversedBy="candidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Candidate;

    /**
     * @ORM\ManyToOne(targetEntity=Job::class, inversedBy="candidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Job;

    /**
     * @ORM\ManyToOne(targetEntity=Freelance::class, inversedBy="candidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Freelance;

    /**
     * @ORM\ManyToMany(targetEntity=Test::class, inversedBy="candidatures")
     */
    private $Test;

    /**
     * @ORM\Column(type="integer")
     */
    private $score;

    public function __construct()
    {
        $this->Test = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCandidate(): ?Candidate
    {
        return $this->Candidate;
    }

    public function setCandidate(?Candidate $Candidate): self
    {
        $this->Candidate = $Candidate;

        return $this;
    }

    public function getJob(): ?Job
    {
        return $this->Job;
    }

    public function setJob(?Job $Job): self
    {
        $this->Job = $Job;

        return $this;
    }

    public function getFreelance(): ?Freelance
    {
        return $this->Freelance;
    }

    public function setFreelance(?Freelance $Freelance): self
    {
        $this->Freelance = $Freelance;

        return $this;
    }

    /**
     * @return Collection|Test[]
     */
    public function getTest(): Collection
    {
        return $this->Test;
    }

    public function addTest(Test $test): self
    {
        if (!$this->Test->contains($test)) {
            $this->Test[] = $test;
        }

        return $this;
    }

    public function removeTest(Test $test): self
    {
        $this->Test->removeElement($test);

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }
   }
