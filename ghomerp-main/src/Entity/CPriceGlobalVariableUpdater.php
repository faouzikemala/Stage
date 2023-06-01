<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CPriceGlobalVariableUpdater
 *
 * @ORM\Table(name="c_price_global_variable_updater")
 * @ORM\Entity
 */
class CPriceGlobalVariableUpdater
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
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parameters", type="text", length=65535, nullable=true)
     */
    private $parameters;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_variable", type="integer", nullable=false)
     */
    private $fkVariable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="update_interval", type="integer", nullable=true)
     */
    private $updateInterval = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="next_update", type="integer", nullable=true)
     */
    private $nextUpdate = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_status", type="text", length=65535, nullable=true)
     */
    private $lastStatus;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getParameters(): ?string
    {
        return $this->parameters;
    }

    public function setParameters(?string $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    public function getFkVariable(): ?int
    {
        return $this->fkVariable;
    }

    public function setFkVariable(int $fkVariable): self
    {
        $this->fkVariable = $fkVariable;

        return $this;
    }

    public function getUpdateInterval(): ?int
    {
        return $this->updateInterval;
    }

    public function setUpdateInterval(?int $updateInterval): self
    {
        $this->updateInterval = $updateInterval;

        return $this;
    }

    public function getNextUpdate(): ?int
    {
        return $this->nextUpdate;
    }

    public function setNextUpdate(?int $nextUpdate): self
    {
        $this->nextUpdate = $nextUpdate;

        return $this;
    }

    public function getLastStatus(): ?string
    {
        return $this->lastStatus;
    }

    public function setLastStatus(?string $lastStatus): self
    {
        $this->lastStatus = $lastStatus;

        return $this;
    }


}
