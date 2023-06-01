<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpensurveyFormquestions
 *
 * @ORM\Table(name="opensurvey_formquestions")
 * @ORM\Entity
 */
class OpensurveyFormquestions
{
    /**
     * @var int
     *
     * @ORM\Column(name="rowid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_sondage", type="string", length=16, nullable=true)
     */
    private $idSondage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="text", length=65535, nullable=true)
     */
    private $question;

    /**
     * @var string|null
     *
     * @ORM\Column(name="available_answers", type="text", length=65535, nullable=true)
     */
    private $availableAnswers;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getIdSondage(): ?string
    {
        return $this->idSondage;
    }

    public function setIdSondage(?string $idSondage): self
    {
        $this->idSondage = $idSondage;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAvailableAnswers(): ?string
    {
        return $this->availableAnswers;
    }

    public function setAvailableAnswers(?string $availableAnswers): self
    {
        $this->availableAnswers = $availableAnswers;

        return $this;
    }


}
