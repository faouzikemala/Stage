<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectLang
 *
 * @ORM\Table(name="object_lang", uniqueConstraints={@ORM\UniqueConstraint(name="uk_object_lang", columns={"fk_object", "type_object", "property", "lang"})})
 * @ORM\Entity
 */
class ObjectLang
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
     * @ORM\Column(name="fk_object", type="integer", nullable=false)
     */
    private $fkObject = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type_object", type="string", length=32, nullable=false)
     */
    private $typeObject;

    /**
     * @var string
     *
     * @ORM\Column(name="property", type="string", length=32, nullable=false)
     */
    private $property;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=5, nullable=false)
     */
    private $lang = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true)
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkObject(): ?int
    {
        return $this->fkObject;
    }

    public function setFkObject(int $fkObject): self
    {
        $this->fkObject = $fkObject;

        return $this;
    }

    public function getTypeObject(): ?string
    {
        return $this->typeObject;
    }

    public function setTypeObject(string $typeObject): self
    {
        $this->typeObject = $typeObject;

        return $this;
    }

    public function getProperty(): ?string
    {
        return $this->property;
    }

    public function setProperty(string $property): self
    {
        $this->property = $property;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

        return $this;
    }


}
