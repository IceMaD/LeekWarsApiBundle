<?php

namespace IceMaD\LeekWarsApiBundle\Entity;

class Composition
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $teamId;

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
    private $totalLevel;

    /**
     * @var int
     */
    private $totalPower;

    /**
     * @var int
     */
    private $talent;

    /**
     * @var int
     */
    private $fights;

    /**
     * @var int
     */
    private $emblemChanged;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function setTeamId(int $teamId): self
    {
        $this->teamId = $teamId;

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

    public function getTotalLevel(): int
    {
        return $this->totalLevel;
    }

    public function setTotalLevel(int $totalLevel): self
    {
        $this->totalLevel = $totalLevel;

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

    public function getFights(): int
    {
        return $this->fights;
    }

    public function setFights(int $fights): self
    {
        $this->fights = $fights;

        return $this;
    }

    public function getEmblemChanged(): int
    {
        return $this->emblemChanged;
    }

    public function setEmblemChanged(int $emblemChanged): self
    {
        $this->emblemChanged = $emblemChanged;

        return $this;
    }

    public function getTotalPower(): int
    {
        return $this->totalPower;
    }

    public function setTotalPower(int $totalPower): self
    {
        $this->totalPower = $totalPower;

        return $this;
    }
}
