<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=255)
     * @Assert\NotBlank(message="this field must be full")
     */
    private $content;

    /**
     * @ORM\Column(type="date")
     */
    private $date;



    /**
     * @ORM\ManyToOne(targetEntity=Recruiter::class, inversedBy="comments")
     */
    private $Recruiter;

    /**
     * @ORM\ManyToOne(targetEntity=Candidate::class, inversedBy="comments")
     */
    private $Candidate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rating;

    /**
     * @ORM\ManyToOne(targetEntity=Post::class, inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Post;

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

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

    public function getCandidate(): ?Candidate
    {
        return $this->Candidate;
    }

    public function setCandidate(?Candidate $Candidate): self
    {
        $this->Candidate = $Candidate;

        return $this;
    }

    public function getPost(): ?Post
    {
        return $this->Post;
    }

    public function setPost(?Post $Post): self
    {
        $this->Post = $Post;

        return $this;
    }
}
