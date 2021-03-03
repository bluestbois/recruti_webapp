<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Recruiter::class, inversedBy="projects")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Recruiter;

    /**
     * @ORM\ManyToMany(targetEntity=Candidate::class, inversedBy="projects")
     */
    private $Candidate;

    /**
     * @ORM\OneToMany(targetEntity=Freelance::class, mappedBy="Project", orphanRemoval=true)
     */
    private $freelances;

    public function __construct()
    {
        $this->Candidate = new ArrayCollection();
        $this->freelances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
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

    public function getRecruiter(): ?Recruiter
    {
        return $this->Recruiter;
    }

    public function setRecruiter(?Recruiter $Recruiter): self
    {
        $this->Recruiter = $Recruiter;

        return $this;
    }

    /**
     * @return Collection|Candidate[]
     */
    public function getCandidate(): Collection
    {
        return $this->Candidate;
    }

    public function addCandidate(Candidate $candidate): self
    {
        if (!$this->Candidate->contains($candidate)) {
            $this->Candidate[] = $candidate;
        }

        return $this;
    }

    public function removeCandidate(Candidate $candidate): self
    {
        $this->Candidate->removeElement($candidate);

        return $this;
    }

    /**
     * @return Collection|Freelance[]
     */
    public function getFreelances(): Collection
    {
        return $this->freelances;
    }

    public function addFreelance(Freelance $freelance): self
    {
        if (!$this->freelances->contains($freelance)) {
            $this->freelances[] = $freelance;
            $freelance->setProject($this);
        }

        return $this;
    }

    public function removeFreelance(Freelance $freelance): self
    {
        if ($this->freelances->removeElement($freelance)) {
            // set the owning side to null (unless already changed)
            if ($freelance->getProject() === $this) {
                $freelance->setProject(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->title;
    }
}
