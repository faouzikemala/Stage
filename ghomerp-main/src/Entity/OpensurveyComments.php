<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpensurveyComments
 *
 * @ORM\Table(name="opensurvey_comments", indexes={@ORM\Index(name="idx_id_sondage", columns={"id_sondage"}), @ORM\Index(name="idx_id_comment", columns={"id_comment"})})
 * @ORM\Entity
 */
class OpensurveyComments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comment", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComment;

    /**
     * @var string
     *
     * @ORM\Column(name="id_sondage", type="string", length=16, nullable=false, options={"fixed"=true})
     */
    private $idSondage;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="usercomment", type="text", length=65535, nullable=true)
     */
    private $usercomment;

    public function getIdComment(): ?int
    {
        return $this->idComment;
    }

    public function getIdSondage(): ?string
    {
        return $this->idSondage;
    }

    public function setIdSondage(string $idSondage): self
    {
        $this->idSondage = $idSondage;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getUsercomment(): ?string
    {
        return $this->usercomment;
    }

    public function setUsercomment(?string $usercomment): self
    {
        $this->usercomment = $usercomment;

        return $this;
    }


}
