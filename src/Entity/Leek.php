<?php

namespace IceMaD\LeekWarsApiBundle\Entity;

class Leek
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $level;

    /**
     * @var int
     */
    private $talent;

    /**
     * @var int
     */
    private $skin;

    /**
     * @var ?int
     */
    private $hat;

    /**
     * @var int
     */
    private $fights;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getTalent(): int
    {
        return $this->talent;
    }

    public function setTalent(int $talent): self
    {
        $this->talent = $talent;

        return $this;
    }

    public function getSkin(): int
    {
        return $this->skin;
    }

    public function setSkin(int $skin): self
    {
        $this->skin = $skin;

        return $this;
    }

    public function getHat(): ?int
    {
        return $this->hat;
    }

    public function setHat(?int $hat): self
    {
        $this->hat = $hat;

        return $this;
    }

    public function getFights(): int
    {
        return $this->fights;
    }

    public function setFights(int $fights): self
    {
        $this->fights = $fights;

        return $this;
    }
}
