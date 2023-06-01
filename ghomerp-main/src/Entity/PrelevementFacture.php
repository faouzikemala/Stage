<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrelevementFacture
 *
 * @ORM\Table(name="prelevement_facture", indexes={@ORM\Index(name="idx_prelevement_facture_fk_prelevement_lignes", columns={"fk_prelevement_lignes"})})
 * @ORM\Entity
 */
class PrelevementFacture
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
     * @var int|null
     *
     * @ORM\Column(name="fk_facture", type="integer", nullable=true)
     */
    private $fkFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_facture_fourn", type="integer", nullable=true)
     */
    private $fkFactureFourn;

    /**
     * @var \PrelevementLignes
     *
     * @ORM\ManyToOne(targetEntity="PrelevementLignes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_prelevement_lignes", referencedColumnName="rowid")
     * })
     */
    private $fkPrelevementLignes;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkFacture(): ?int
    {
        return $this->fkFacture;
    }

    public function setFkFacture(?int $fkFacture): self
    {
        $this->fkFacture = $fkFacture;

        return $this;
    }

    public function getFkFactureFourn(): ?int
    {
        return $this->fkFactureFourn;
    }

    public function setFkFactureFourn(?int $fkFactureFourn): self
    {
        $this->fkFactureFourn = $fkFactureFourn;

        return $this;
    }

    public function getFkPrelevementLignes(): ?PrelevementLignes
    {
        return $this->fkPrelevementLignes;
    }

    public function setFkPrelevementLignes(?PrelevementLignes $fkPrelevementLignes): self
    {
        $this->fkPrelevementLignes = $fkPrelevementLignes;

        return $this;
    }


}
