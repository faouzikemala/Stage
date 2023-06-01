<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocietePerentity
 *
 * @ORM\Table(name="societe_perentity", uniqueConstraints={@ORM\UniqueConstraint(name="uk_societe_perentity", columns={"fk_soc", "entity"})}, indexes={@ORM\Index(name="idx_societe_perentity_fk_soc", columns={"fk_soc"})})
 * @ORM\Entity
 */
class SocietePerentity
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
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

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

    public function getFkSoc(): ?int
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?int $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

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
