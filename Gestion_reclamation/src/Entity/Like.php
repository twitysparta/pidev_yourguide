<?php

namespace App\Entity;

use App\Repository\LikeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=LikeRepository::class)
 * @ORM\Table(name="`like`")
 */
class Like
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank (message ="nom is required")
     */
    private $nom_like;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank (message ="rate is required")
     */
    private $rate;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank (message ="note is required")
     */
    private $note;
     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commentaire", mappedBy="like")
     */
    private $commentaire;
      
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    public function setCommentaire( $like): void
    {
        $this->like = $commentaire;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomLike(): ?string
    {
        return $this->nom_like;
    }

    public function setNomLike(string $nom_like): self
    {
        $this->nom_like = $nom_like;

        return $this;
    }

    public function getRate(): ?string
    {
        return $this->rate;
    }

    public function setRate(string $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }
}
