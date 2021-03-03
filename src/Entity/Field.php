<?php

namespace App\Entity;

use App\Repository\FieldRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FieldRepository::class)
 */
class Field
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
     * @ORM\OneToMany(targetEntity=Recruiter::class, mappedBy="field")
     */
    private $fieldOfActivity;

    public function __construct()
    {
        $this->fieldOfActivity = new ArrayCollection();
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
     * @return Collection|Recruiter[]
     */
    public function getFieldOfActivity(): Collection
    {
        return $this->fieldOfActivity;
    }

    public function addFieldOfActivity(Recruiter $fieldOfActivity): self
    {
        if (!$this->fieldOfActivity->contains($fieldOfActivity)) {
            $this->fieldOfActivity[] = $fieldOfActivity;
            $fieldOfActivity->setField($this);
        }

        return $this;
    }

    public function removeFieldOfActivity(Recruiter $fieldOfActivity): self
    {
        if ($this->fieldOfActivity->removeElement($fieldOfActivity)) {
            // set the owning side to null (unless already changed)
            if ($fieldOfActivity->getField() === $this) {
                $fieldOfActivity->setField(null);
            }
        }

        return $this;
    }

    public function __toString(){
        return $this->title;
    }
}
