<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjetTaskTime
 *
 * @ORM\Table(name="projet_task_time", indexes={@ORM\Index(name="idx_projet_task_time_date", columns={"task_date"}), @ORM\Index(name="idx_projet_task_time_task", columns={"fk_task"}), @ORM\Index(name="idx_projet_task_time_datehour", columns={"task_datehour"})})
 * @ORM\Entity
 */
class ProjetTaskTime
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
     * @ORM\Column(name="fk_task", type="integer", nullable=false)
     */
    private $fkTask;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="task_date", type="date", nullable=true)
     */
    private $taskDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="task_datehour", type="datetime", nullable=true)
     */
    private $taskDatehour;

    /**
     * @var int|null
     *
     * @ORM\Column(name="task_date_withhour", type="integer", nullable=true)
     */
    private $taskDateWithhour = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="task_duration", type="float", precision=10, scale=0, nullable=true)
     */
    private $taskDuration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var float|null
     *
     * @ORM\Column(name="thm", type="float", precision=24, scale=8, nullable=true)
     */
    private $thm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="invoice_id", type="integer", nullable=true)
     */
    private $invoiceId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="invoice_line_id", type="integer", nullable=true)
     */
    private $invoiceLineId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
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
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkTask(): ?int
    {
        return $this->fkTask;
    }

    public function setFkTask(int $fkTask): self
    {
        $this->fkTask = $fkTask;

        return $this;
    }

    public function getTaskDate(): ?\DateTimeInterface
    {
        return $this->taskDate;
    }

    public function setTaskDate(?\DateTimeInterface $taskDate): self
    {
        $this->taskDate = $taskDate;

        return $this;
    }

    public function getTaskDatehour(): ?\DateTimeInterface
    {
        return $this->taskDatehour;
    }

    public function setTaskDatehour(?\DateTimeInterface $taskDatehour): self
    {
        $this->taskDatehour = $taskDatehour;

        return $this;
    }

    public function getTaskDateWithhour(): ?int
    {
        return $this->taskDateWithhour;
    }

    public function setTaskDateWithhour(?int $taskDateWithhour): self
    {
        $this->taskDateWithhour = $taskDateWithhour;

        return $this;
    }

    public function getTaskDuration(): ?float
    {
        return $this->taskDuration;
    }

    public function setTaskDuration(?float $taskDuration): self
    {
        $this->taskDuration = $taskDuration;

        return $this;
    }

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(?int $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getThm(): ?float
    {
        return $this->thm;
    }

    public function setThm(?float $thm): self
    {
        $this->thm = $thm;

        return $this;
    }

    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }

    public function setInvoiceId(?int $invoiceId): self
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    public function getInvoiceLineId(): ?int
    {
        return $this->invoiceLineId;
    }

    public function setInvoiceLineId(?int $invoiceLineId): self
    {
        $this->invoiceLineId = $invoiceLineId;

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

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }


}
