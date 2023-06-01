<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CFormatCards
 * @ApiResource()
 * @ORM\Table(name="c_format_cards")
 * @ORM\Entity
 */
class CFormatCards
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
     * @ORM\Column(name="code", type="string", length=50, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="paper_size", type="string", length=20, nullable=false)
     */
    private $paperSize;

    /**
     * @var string
     *
     * @ORM\Column(name="orientation", type="string", length=1, nullable=false)
     */
    private $orientation;

    /**
     * @var string
     *
     * @ORM\Column(name="metric", type="string", length=5, nullable=false)
     */
    private $metric;

    /**
     * @var float
     *
     * @ORM\Column(name="leftmargin", type="float", precision=24, scale=8, nullable=false)
     */
    private $leftmargin;

    /**
     * @var float
     *
     * @ORM\Column(name="topmargin", type="float", precision=24, scale=8, nullable=false)
     */
    private $topmargin;

    /**
     * @var int
     *
     * @ORM\Column(name="nx", type="integer", nullable=false)
     */
    private $nx;

    /**
     * @var int
     *
     * @ORM\Column(name="ny", type="integer", nullable=false)
     */
    private $ny;

    /**
     * @var float
     *
     * @ORM\Column(name="spacex", type="float", precision=24, scale=8, nullable=false)
     */
    private $spacex;

    /**
     * @var float
     *
     * @ORM\Column(name="spacey", type="float", precision=24, scale=8, nullable=false)
     */
    private $spacey;

    /**
     * @var float
     *
     * @ORM\Column(name="width", type="float", precision=24, scale=8, nullable=false)
     */
    private $width;

    /**
     * @var float
     *
     * @ORM\Column(name="height", type="float", precision=24, scale=8, nullable=false)
     */
    private $height;

    /**
     * @var int
     *
     * @ORM\Column(name="font_size", type="integer", nullable=false)
     */
    private $fontSize;

    /**
     * @var float
     *
     * @ORM\Column(name="custom_x", type="float", precision=24, scale=8, nullable=false)
     */
    private $customX;

    /**
     * @var float
     *
     * @ORM\Column(name="custom_y", type="float", precision=24, scale=8, nullable=false)
     */
    private $customY;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPaperSize(): ?string
    {
        return $this->paperSize;
    }

    public function setPaperSize(string $paperSize): self
    {
        $this->paperSize = $paperSize;

        return $this;
    }

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function setOrientation(string $orientation): self
    {
        $this->orientation = $orientation;

        return $this;
    }

    public function getMetric(): ?string
    {
        return $this->metric;
    }

    public function setMetric(string $metric): self
    {
        $this->metric = $metric;

        return $this;
    }

    public function getLeftmargin(): ?float
    {
        return $this->leftmargin;
    }

    public function setLeftmargin(float $leftmargin): self
    {
        $this->leftmargin = $leftmargin;

        return $this;
    }

    public function getTopmargin(): ?float
    {
        return $this->topmargin;
    }

    public function setTopmargin(float $topmargin): self
    {
        $this->topmargin = $topmargin;

        return $this;
    }

    public function getNx(): ?int
    {
        return $this->nx;
    }

    public function setNx(int $nx): self
    {
        $this->nx = $nx;

        return $this;
    }

    public function getNy(): ?int
    {
        return $this->ny;
    }

    public function setNy(int $ny): self
    {
        $this->ny = $ny;

        return $this;
    }

    public function getSpacex(): ?float
    {
        return $this->spacex;
    }

    public function setSpacex(float $spacex): self
    {
        $this->spacex = $spacex;

        return $this;
    }

    public function getSpacey(): ?float
    {
        return $this->spacey;
    }

    public function setSpacey(float $spacey): self
    {
        $this->spacey = $spacey;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getFontSize(): ?int
    {
        return $this->fontSize;
    }

    public function setFontSize(int $fontSize): self
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    public function getCustomX(): ?float
    {
        return $this->customX;
    }

    public function setCustomX(float $customX): self
    {
        $this->customX = $customX;

        return $this;
    }

    public function getCustomY(): ?float
    {
        return $this->customY;
    }

    public function setCustomY(float $customY): self
    {
        $this->customY = $customY;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }


}
