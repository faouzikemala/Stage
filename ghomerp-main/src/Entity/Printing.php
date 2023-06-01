<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Printing
 *
 * @ORM\Table(name="printing")
 * @ORM\Entity
 */
class Printing
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
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_name", type="text", length=65535, nullable=false)
     */
    private $printerName;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_location", type="text", length=65535, nullable=false)
     */
    private $printerLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="printer_id", type="string", length=255, nullable=false)
     */
    private $printerId;

    /**
     * @var int
     *
     * @ORM\Column(name="copy", type="integer", nullable=false, options={"default"="1"})
     */
    private $copy = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=16, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="driver", type="string", length=16, nullable=false)
     */
    private $driver;

    /**
     * @var int|null
     *
     * @ORM\Column(name="userid", type="integer", nullable=true)
     */
    private $userid;

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

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getPrinterName(): ?string
    {
        return $this->printerName;
    }

    public function setPrinterName(string $printerName): self
    {
        $this->printerName = $printerName;

        return $this;
    }

    public function getPrinterLocation(): ?string
    {
        return $this->printerLocation;
    }

    public function setPrinterLocation(string $printerLocation): self
    {
        $this->printerLocation = $printerLocation;

        return $this;
    }

    public function getPrinterId(): ?string
    {
        return $this->printerId;
    }

    public function setPrinterId(string $printerId): self
    {
        $this->printerId = $printerId;

        return $this;
    }

    public function getCopy(): ?int
    {
        return $this->copy;
    }

    public function setCopy(int $copy): self
    {
        $this->copy = $copy;

        return $this;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getDriver(): ?string
    {
        return $this->driver;
    }

    public function setDriver(string $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(?int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }


}
