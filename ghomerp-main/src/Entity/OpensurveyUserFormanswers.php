<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpensurveyUserFormanswers
 *
 * @ORM\Table(name="opensurvey_user_formanswers")
 * @ORM\Entity
 */
class OpensurveyUserFormanswers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_survey", type="integer", nullable=false)
     */
    private $fkUserSurvey;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_question", type="integer", nullable=false)
     */
    private $fkQuestion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reponses", type="text", length=65535, nullable=true)
     */
    private $reponses;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFkUserSurvey(): ?int
    {
        return $this->fkUserSurvey;
    }

    public function setFkUserSurvey(int $fkUserSurvey): self
    {
        $this->fkUserSurvey = $fkUserSurvey;

        return $this;
    }

    public function getFkQuestion(): ?int
    {
        return $this->fkQuestion;
    }

    public function setFkQuestion(int $fkQuestion): self
    {
        $this->fkQuestion = $fkQuestion;

        return $this;
    }

    public function getReponses(): ?string
    {
        return $this->reponses;
    }

    public function setReponses(?string $reponses): self
    {
        $this->reponses = $reponses;

        return $this;
    }


}
