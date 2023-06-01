<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CZiptown
 *
 * @ORM\Table(name="c_ziptown", uniqueConstraints={@ORM\UniqueConstraint(name="uk_ziptown_fk_pays", columns={"zip", "town", "fk_pays"})}, indexes={@ORM\Index(name="idx_c_ziptown_fk_county", columns={"fk_county"}), @ORM\Index(name="idx_c_ziptown_zip", columns={"zip"}), @ORM\Index(name="idx_c_ziptown_fk_pays", columns={"fk_pays"})})
 * @ORM\Entity
 */
class CZiptown
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
     * @ORM\Column(name="code", type="string", length=5, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=false)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=180, nullable=false)
     */
    private $town;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var \CDepartements
     *
     * @ORM\ManyToOne(targetEntity="CDepartements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_county", referencedColumnName="rowid")
     * })
     */
    private $fkCounty;

    /**
     * @var \CCountry
     *
     * @ORM\ManyToOne(targetEntity="CCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_pays", referencedColumnName="rowid")
     * })
     */
    private $fkPays;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(string $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getFkCounty(): ?CDepartements
    {
        return $this->fkCounty;
    }

    public function setFkCounty(?CDepartements $fkCounty): self
    {
        $this->fkCounty = $fkCounty;

        return $this;
    }

    public function getFkPays(): ?CCountry
    {
        return $this->fkPays;
    }

    public function setFkPays(?CCountry $fkPays): self
    {
        $this->fkPays = $fkPays;

        return $this;
    }


}
