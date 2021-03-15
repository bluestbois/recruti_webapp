<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="This field must be filled")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="This field must be filled")
     *  @Assert\GreaterThan("today")
     */
    private $startDate;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="This field must be filled")
     *  @Assert\GreaterThan("+2 days")
     *
     */
    private $endDate;

    /**
     * @ORM\ManyToMany(targetEntity=EventType::class, inversedBy="events")
     */
    private $Type;

    /**
     * @ORM\Column(type="integer")
     */
    private $NOP;

    /**
     * @ORM\ManyToMany(targetEntity=Candidate::class, inversedBy="events")
     */
    private $Candidate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    public function __construct()
    {
        $this->Type = new ArrayCollection();
        $this->Candidate = new ArrayCollection();
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

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Collection|EventType[]
     */
    public function getType(): Collection
    {
        return $this->Type;
    }

    public function addType(EventType $type): self
    {
        if (!$this->Type->contains($type)) {
            $this->Type[] = $type;
        }

        return $this;
    }

    public function removeType(EventType $type): self
    {
        $this->Type->removeElement($type);

        return $this;
    }

    public function getNOP(): ?int
    {
        return $this->NOP;
    }

    public function setNOP(int $NOP): self
    {
        $this->NOP = $NOP;

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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function __toString(){
        return $this->title;
    }
}
