<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTva
 *
 * @ORM\Table(name="c_tva", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_tva_id", columns={"fk_pays", "code", "taux", "recuperableonly"})})
 * @ORM\Entity
 */
class CTva
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
     * @ORM\Column(name="fk_pays", type="integer", nullable=false)
     */
    private $fkPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=true)
     */
    private $code = '';

    /**
     * @var float
     *
     * @ORM\Column(name="taux", type="float", precision=10, scale=0, nullable=false)
     */
    private $taux;

    /**
     * @var string
     *
     * @ORM\Column(name="localtax1", type="string", length=20, nullable=false)
     */
    private $localtax1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="localtax1_type", type="string", length=10, nullable=false)
     */
    private $localtax1Type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="localtax2", type="string", length=20, nullable=false)
     */
    private $localtax2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="localtax2_type", type="string", length=10, nullable=false)
     */
    private $localtax2Type = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="recuperableonly", type="integer", nullable=false)
     */
    private $recuperableonly = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=128, nullable=true)
     */
    private $note;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSell;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuy;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkPays(): ?int
    {
        return $this->fkPays;
    }

    public function setFkPays(int $fkPays): self
    {
        $this->fkPays = $fkPays;

        return $this;
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

    public function getTaux(): ?float
    {
        return $this->taux;
    }

    public function setTaux(float $taux): self
    {
        $this->taux = $taux;

        return $this;
    }

    public function getLocaltax1(): ?string
    {
        return $this->localtax1;
    }

    public function setLocaltax1(string $localtax1): self
    {
        $this->localtax1 = $localtax1;

        return $this;
    }

    public function getLocaltax1Type(): ?string
    {
        return $this->localtax1Type;
    }

    public function setLocaltax1Type(string $localtax1Type): self
    {
        $this->localtax1Type = $localtax1Type;

        return $this;
    }

    public function getLocaltax2(): ?string
    {
        return $this->localtax2;
    }

    public function setLocaltax2(string $localtax2): self
    {
        $this->localtax2 = $localtax2;

        return $this;
    }

    public function getLocaltax2Type(): ?string
    {
        return $this->localtax2Type;
    }

    public function setLocaltax2Type(string $localtax2Type): self
    {
        $this->localtax2Type = $localtax2Type;

        return $this;
    }

    public function getRecuperableonly(): ?int
    {
        return $this->recuperableonly;
    }

    public function setRecuperableonly(int $recuperableonly): self
    {
        $this->recuperableonly = $recuperableonly;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

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

    public function getAccountancyCodeSell(): ?string
    {
        return $this->accountancyCodeSell;
    }

    public function setAccountancyCodeSell(?string $accountancyCodeSell): self
    {
        $this->accountancyCodeSell = $accountancyCodeSell;

        return $this;
    }

    public function getAccountancyCodeBuy(): ?string
    {
        return $this->accountancyCodeBuy;
    }

    public function setAccountancyCodeBuy(?string $accountancyCodeBuy): self
    {
        $this->accountancyCodeBuy = $accountancyCodeBuy;

        return $this;
    }


}
