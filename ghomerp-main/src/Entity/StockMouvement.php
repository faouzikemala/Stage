<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StockMouvement
 *
 * @ORM\Table(name="stock_mouvement", indexes={@ORM\Index(name="idx_stock_mouvement_fk_entrepot", columns={"fk_entrepot"}), @ORM\Index(name="idx_stock_mouvement_fk_product", columns={"fk_product"})})
 * @ORM\Entity
 */
class StockMouvement
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datem", type="datetime", nullable=true)
     */
    private $datem;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=false)
     */
    private $fkProduct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch", type="string", length=128, nullable=true)
     */
    private $batch;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="eatby", type="date", nullable=true)
     */
    private $eatby;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sellby", type="date", nullable=true)
     */
    private $sellby;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_entrepot", type="integer", nullable=false)
     */
    private $fkEntrepot;

    /**
     * @var float|null
     *
     * @ORM\Column(name="value", type="float", precision=10, scale=0, nullable=true)
     */
    private $value;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_mouvement", type="smallint", nullable=true)
     */
    private $typeMouvement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inventorycode", type="string", length=128, nullable=true)
     */
    private $inventorycode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_project", type="integer", nullable=true)
     */
    private $fkProject;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_origin", type="integer", nullable=true)
     */
    private $fkOrigin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origintype", type="string", length=32, nullable=true)
     */
    private $origintype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=false)
     */
    private $fkProjet = '0';

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getDatem(): ?\DateTimeInterface
    {
        return $this->datem;
    }

    public function setDatem(?\DateTimeInterface $datem): self
    {
        $this->datem = $datem;

        return $this;
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

    public function getBatch(): ?string
    {
        return $this->batch;
    }

    public function setBatch(?string $batch): self
    {
        $this->batch = $batch;

        return $this;
    }

    public function getEatby(): ?\DateTimeInterface
    {
        return $this->eatby;
    }

    public function setEatby(?\DateTimeInterface $eatby): self
    {
        $this->eatby = $eatby;

        return $this;
    }

    public function getSellby(): ?\DateTimeInterface
    {
        return $this->sellby;
    }

    public function setSellby(?\DateTimeInterface $sellby): self
    {
        $this->sellby = $sellby;

        return $this;
    }

    public function getFkEntrepot(): ?int
    {
        return $this->fkEntrepot;
    }

    public function setFkEntrepot(int $fkEntrepot): self
    {
        $this->fkEntrepot = $fkEntrepot;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTypeMouvement(): ?int
    {
        return $this->typeMouvement;
    }

    public function setTypeMouvement(?int $typeMouvement): self
    {
        $this->typeMouvement = $typeMouvement;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getInventorycode(): ?string
    {
        return $this->inventorycode;
    }

    public function setInventorycode(?string $inventorycode): self
    {
        $this->inventorycode = $inventorycode;

        return $this;
    }

    public function getFkProject(): ?int
    {
        return $this->fkProject;
    }

    public function setFkProject(?int $fkProject): self
    {
        $this->fkProject = $fkProject;

        return $this;
    }

    public function getFkOrigin(): ?int
    {
        return $this->fkOrigin;
    }

    public function setFkOrigin(?int $fkOrigin): self
    {
        $this->fkOrigin = $fkOrigin;

        return $this;
    }

    public function getOrigintype(): ?string
    {
        return $this->origintype;
    }

    public function setOrigintype(?string $origintype): self
    {
        $this->origintype = $origintype;

        return $this;
    }

    public function getModelPdf(): ?string
    {
        return $this->modelPdf;
    }

    public function setModelPdf(?string $modelPdf): self
    {
        $this->modelPdf = $modelPdf;

        return $this;
    }

    public function getFkProjet(): ?int
    {
        return $this->fkProjet;
    }

    public function setFkProjet(int $fkProjet): self
    {
        $this->fkProjet = $fkProjet;

        return $this;
    }


}
