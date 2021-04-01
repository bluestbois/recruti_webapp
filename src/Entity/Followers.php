<?php

namespace App\Entity;

use App\Repository\FollowersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FollowersRepository::class)
 */
class Followers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idRecruiter;

    /**
     * @ORM\Column(type="integer")
     */
    private $idFollower;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRecruiter(): ?int
    {
        return $this->idRecruiter;
    }

    public function setIdRecruiter(int $idRecruiter): self
    {
        $this->idRecruiter = $idRecruiter;

        return $this;
    }

    public function getIdFollower(): ?int
    {
        return $this->idFollower;
    }

    public function setIdFollower(int $idFollower): self
    {
        $this->idFollower = $idFollower;

        return $this;
    }
}
