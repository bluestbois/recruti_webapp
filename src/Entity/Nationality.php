<?php

namespace App\Entity;

use App\Repository\NationalityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NationalityRepository::class)
 */
class Nationality
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
     * @ORM\ManyToMany(targetEntity=candidate::class, inversedBy="nationalities")
     */
    private $nationality;

    public function __construct()
    {
        $this->nationality = new ArrayCollection();
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

    /**
     * @return Collection|candidate[]
     */
    public function getNationality(): Collection
    {
        return $this->nationality;
    }

    public function addNationality(candidate $nationality): self
    {
        if (!$this->nationality->contains($nationality)) {
            $this->nationality[] = $nationality;
        }

        return $this;
    }

    public function removeNationality(candidate $nationality): self
    {
        $this->nationality->removeElement($nationality);

        return $this;
    }
    public function __toString()
    {
        return $this->title;
    }
}
