<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpensurveyUserStuds
 *
 * @ORM\Table(name="opensurvey_user_studs", indexes={@ORM\Index(name="idx_opensurvey_user_studs_nom", columns={"nom"}), @ORM\Index(name="idx_opensurvey_user_studs_id_users", columns={"id_users"}), @ORM\Index(name="idx_opensurvey_user_studs_id_sondage", columns={"id_sondage"})})
 * @ORM\Entity
 */
class OpensurveyUserStuds
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_users", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsers;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=64, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="id_sondage", type="string", length=16, nullable=false)
     */
    private $idSondage;

    /**
     * @var string
     *
     * @ORM\Column(name="reponses", type="string", length=100, nullable=false)
     */
    private $reponses;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    public function getIdUsers(): ?int
    {
        return $this->idUsers;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
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

    public function getReponses(): ?string
    {
        return $this->reponses;
    }

    public function setReponses(string $reponses): self
    {
        $this->reponses = $reponses;

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


}
