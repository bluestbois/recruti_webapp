<?php

namespace App\Entity;

use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=TagRepository::class)
 */
class Tag
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
     * @Assert\Type(type={"string"})
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="This field must be filled")
     * @Assert\Type(type={"string","integer"})
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Post::class, inversedBy="tags")
     */
    private $Post;

    /**
     * @ORM\ManyToMany(targetEntity=Freelance::class, mappedBy="Tag")
     */
    private $freelances;

    public function __construct()
    {
        $this->Post = new ArrayCollection();
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

    /**
     * @return Collection|Post[]
     */
    public function getPost(): Collection
    {
        return $this->Post;
    }

    public function addPost(Post $post): self
    {
        if (!$this->Post->contains($post)) {
            $this->Post[] = $post;
        }

        return $this;
    }

    public function removePost(Post $post): self
    {
        $this->Post->removeElement($post);

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
            $freelance->addTag($this);
        }

        return $this;
    }

    public function removeFreelance(Freelance $freelance): self
    {
        if ($this->freelances->removeElement($freelance)) {
            $freelance->removeTag($this);
        }

        return $this;
    }

    public function __toString(){
        return $this->title;
    }
}
