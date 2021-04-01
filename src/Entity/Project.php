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

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $color;

    /**
     * @ORM\OneToMany(targetEntity=Member::class, mappedBy="Project")
     */
    private $members;

    /**
     * @ORM\OneToMany(targetEntity=Calendar::class, mappedBy="Project")
     */
    private $calendars;

    public function __construct()
    {
        $this->Candidate = new ArrayCollection();
        $this->freelances = new ArrayCollection();
        $this->members = new ArrayCollection();
        $this->calendars = new ArrayCollection();
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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Collection|Member[]
     */
    public function getMembers(): Collection
    {
        return $this->members;
    }

    public function addMember(Member $member): self
    {
        if (!$this->members->contains($member)) {
            $this->members[] = $member;
            $member->setProject($this);
        }

        return $this;
    }

    public function removeMember(Member $member): self
    {
        if ($this->members->removeElement($member)) {
            // set the owning side to null (unless already changed)
            if ($member->getProject() === $this) {
                $member->setProject(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Calendar[]
     */
    public function getCalendars(): Collection
    {
        return $this->calendars;
    }

    public function addCalendar(Calendar $calendar): self
    {
        if (!$this->calendars->contains($calendar)) {
            $this->calendars[] = $calendar;
            $calendar->setProject($this);
        }

        return $this;
    }

    public function removeCalendar(Calendar $calendar): self
    {
        if ($this->calendars->removeElement($calendar)) {
            // set the owning side to null (unless already changed)
            if ($calendar->getProject() === $this) {
                $calendar->setProject(null);
            }
        }

        return $this;
    }
}
