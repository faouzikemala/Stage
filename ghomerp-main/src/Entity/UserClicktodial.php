<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserClicktodial
 *
 * @ORM\Table(name="user_clicktodial")
 * @ORM\Entity
 */
class UserClicktodial
{
    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=32, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass", type="string", length=64, nullable=true)
     */
    private $pass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="poste", type="string", length=20, nullable=true)
     */
    private $poste;

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(?string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(?string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }


}
