<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intracommreport
 *
 * @ORM\Table(name="intracommreport")
 * @ORM\Entity
 */
class Intracommreport
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
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=30, nullable=false)
     */
    private $ref;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_declaration", type="string", length=32, nullable=true)
     */
    private $typeDeclaration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="periods", type="string", length=32, nullable=true)
     */
    private $periods;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mode", type="string", length=32, nullable=true)
     */
    private $mode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_xml", type="text", length=65535, nullable=true)
     */
    private $contentXml;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_export", type="string", length=10, nullable=true)
     */
    private $typeExport;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true)
     */
    private $tms;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getTypeDeclaration(): ?string
    {
        return $this->typeDeclaration;
    }

    public function setTypeDeclaration(?string $typeDeclaration): self
    {
        $this->typeDeclaration = $typeDeclaration;

        return $this;
    }

    public function getPeriods(): ?string
    {
        return $this->periods;
    }

    public function setPeriods(?string $periods): self
    {
        $this->periods = $periods;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getContentXml(): ?string
    {
        return $this->contentXml;
    }

    public function setContentXml(?string $contentXml): self
    {
        $this->contentXml = $contentXml;

        return $this;
    }

    public function getTypeExport(): ?string
    {
        return $this->typeExport;
    }

    public function setTypeExport(?string $typeExport): self
    {
        $this->typeExport = $typeExport;

        return $this;
    }

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

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
