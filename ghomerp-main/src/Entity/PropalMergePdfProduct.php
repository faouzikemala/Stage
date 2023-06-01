<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PropalMergePdfProduct
 *
 * @ORM\Table(name="propal_merge_pdf_product")
 * @ORM\Entity
 */
class PropalMergePdfProduct
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
     * @ORM\Column(name="fk_product", type="integer", nullable=false)
     */
    private $fkProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=200, nullable=false)
     */
    private $fileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=5, nullable=true)
     */
    private $lang;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_mod", type="integer", nullable=false)
     */
    private $fkUserMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datec", type="datetime", nullable=false)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

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

    public function getFkProduct(): ?int
    {
        return $this->fkProduct;
    }

    public function setFkProduct(int $fkProduct): self
    {
        $this->fkProduct = $fkProduct;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getFkUserAuthor(): ?int
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(?int $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

        return $this;
    }

    public function getFkUserMod(): ?int
    {
        return $this->fkUserMod;
    }

    public function setFkUserMod(int $fkUserMod): self
    {
        $this->fkUserMod = $fkUserMod;

        return $this;
    }

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(\DateTimeInterface $datec): self
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
