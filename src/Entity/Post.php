<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @ORM\Column(type="text", length=255)
     * @Assert\NotBlank
     */
    private $description;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $views;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NOC;

    /**
     * @ORM\ManyToOne(targetEntity=Recruiter::class, inversedBy="posts")
     */
    private $Recruiter;

    /**
     * @ORM\ManyToOne(targetEntity=Candidate::class, inversedBy="posts")
     */
    private $Candidate;

    /**
     * @ORM\ManyToOne(targetEntity=Forum::class, inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Forum;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, mappedBy="Post")
     */
    private $tags;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="Post", orphanRemoval=true)
     */
    private $comments;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creatAt;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->comments = new ArrayCollection();
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


    public function getViews(): ?int
    {
        return $this->views;
    }

    public function setViews(int $views): self
    {
        $this->views = $views;

        return $this;
    }



    public function getNOC(): ?int
    {
        return $this->NOC;
    }

    public function setNOC(int $NOC): self
    {
        $this->NOC = $NOC;

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

    public function getForum(): ?Forum
    {
        return $this->Forum;
    }

    public function setForum(?Forum $Forum): self
    {
        $this->Forum = $Forum;

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $tag->addPost($this);
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tags->removeElement($tag)) {
            $tag->removePost($this);
        }

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setPost($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getPost() === $this) {
                $comment->setPost(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->title . "__" . $this->id;
    }

    public function getCreatAt(): ?\DateTimeInterface
    {
        return $this->creatAt;
    }

    public function setCreatAt(\DateTimeInterface $creatAt): self
    {
        $this->creatAt = $creatAt;

        return $this;
    }
    public  function getAvgRating()
    {
        $sum = array_reduce($this->comments->toArray(), function($total, $comment) {
            return $total + $comment->getRating();
        },0);

        if(count($this->comments)>0) return $sum / count($this->comments);

        return 0;
    }

    //*  /**
    //  * @return string|null
    //  */
    // public function getFilename(): ?string
    // {
    //      return $this->filename;
    //  }

    // /**
    //  * @param string|null $filename
    // * @return Post
    // */
    // public function setFilename(?string $filename): Post
    // {
    //     $this->filename = $filename;
    //   return $this;
    //  }

    // /**
    // * @return file|null
    //  */
    // public function getImageFile(): ?file
    // {
    //     return $this->imageFile;
    //  }

    //  /**
    //   * @param file|null $imageFile
    //  * @return Post
    // */
    // public function setImageFile(?file $imageFile): Post
    // {
    //    $this->imageFile = $imageFile;
    //     return $this;
    //  }


}
