<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActioncommResources
 *
 * @ORM\Table(name="actioncomm_resources", uniqueConstraints={@ORM\UniqueConstraint(name="uk_actioncomm_resources", columns={"fk_actioncomm", "element_type", "fk_element"})}, indexes={@ORM\Index(name="idx_actioncomm_resources_fk_element", columns={"fk_element"})})
 * @ORM\Entity
 */
class ActioncommResources
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
     * @var int
     *
     * @ORM\Column(name="fk_actioncomm", type="integer", nullable=false)
     */
    private $fkActioncomm;

    /**
     * @var string
     *
     * @ORM\Column(name="element_type", type="string", length=50, nullable=false)
     */
    private $elementType;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_element", type="integer", nullable=false)
     */
    private $fkElement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answer_status", type="string", length=50, nullable=true)
     */
    private $answerStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mandatory", type="smallint", nullable=true)
     */
    private $mandatory;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transparency", type="smallint", nullable=true, options={"default"="1"})
     */
    private $transparency = '1';

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkActioncomm(): ?int
    {
        return $this->fkActioncomm;
    }

    public function setFkActioncomm(int $fkActioncomm): self
    {
        $this->fkActioncomm = $fkActioncomm;

        return $this;
    }

    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    public function setElementType(string $elementType): self
    {
        $this->elementType = $elementType;

        return $this;
    }

    public function getFkElement(): ?int
    {
        return $this->fkElement;
    }

    public function setFkElement(int $fkElement): self
    {
        $this->fkElement = $fkElement;

        return $this;
    }

    public function getAnswerStatus(): ?string
    {
        return $this->answerStatus;
    }

    public function setAnswerStatus(?string $answerStatus): self
    {
        $this->answerStatus = $answerStatus;

        return $this;
    }

    public function getMandatory(): ?int
    {
        return $this->mandatory;
    }

    public function setMandatory(?int $mandatory): self
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    public function getTransparency(): ?int
    {
        return $this->transparency;
    }

    public function setTransparency(?int $transparency): self
    {
        $this->transparency = $transparency;

        return $this;
    }


}
