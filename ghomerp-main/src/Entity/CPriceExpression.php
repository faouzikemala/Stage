<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CPriceExpression
 *
 * @ORM\Table(name="c_price_expression")
 * @ORM\Entity
 */
class CPriceExpression
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
     * @ORM\Column(name="title", type="string", length=20, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="expression", type="string", length=255, nullable=false)
     */
    private $expression;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getExpression(): ?string
    {
        return $this->expression;
    }

    public function setExpression(string $expression): self
    {
        $this->expression = $expression;

        return $this;
    }


}
