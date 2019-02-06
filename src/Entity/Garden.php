<?php

namespace IceMaD\LeekWarsApiBundle\Entity;

class Garden
{
    /**
     * @var int
     */
    private $fights;

    /**
     * @var int
     */
    private $maxFights;

    /**
     * @var bool
     */
    private $farmerEnabled;

    /**
     * @var bool
     */
    private $teamEnabled;

    /**
     * @var Composition[]
     */
    private $myCompositions;

    /**
     * @var Team
     */
    private $myTeam;

    /**
     * @var Fight[]
     */
    private $soloFights;

    /**
     * @var int
     */
    private $totalSoloFights;

    /**
     * @var int
     */
    private $maxSoloFights;

    /**
     * @var int
     */
    private $teamFights;

    /**
     * @var int
     */
    private $maxTeamFights;

    /**
     * @var int
     */
    private $battleRoyaleFights;

    /**
     * @var int
     */
    private $maxBattleRoyaleFights;

    /**
     * @var bool
     */
    private $battleRoyaleEnabled;

    public function getFights(): int
    {
        return $this->fights;
    }

    public function setFights(int $fights): self
    {
        $this->fights = $fights;

        return $this;
    }

    public function getMaxFights(): int
    {
        return $this->maxFights;
    }

    public function setMaxFights(int $maxFights): self
    {
        $this->maxFights = $maxFights;

        return $this;
    }

    public function isFarmerEnabled(): bool
    {
        return $this->farmerEnabled;
    }

    public function setFarmerEnabled(bool $farmerEnabled): self
    {
        $this->farmerEnabled = $farmerEnabled;

        return $this;
    }

    public function isTeamEnabled(): bool
    {
        return $this->teamEnabled;
    }

    public function setTeamEnabled(bool $teamEnabled): self
    {
        $this->teamEnabled = $teamEnabled;

        return $this;
    }

    public function getMyCompositions(): array
    {
        return $this->myCompositions;
    }

    public function setMyCompositions(array $myCompositions): self
    {
        $this->myCompositions = $myCompositions;

        return $this;
    }

    public function getMyTeam(): Team
    {
        return $this->myTeam;
    }

    public function setMyTeam(Team $myTeam): self
    {
        $this->myTeam = $myTeam;

        return $this;
    }

    public function getSoloFights(): array
    {
        return $this->soloFights;
    }

    public function setSoloFights(array $soloFights): self
    {
        $this->soloFights = $soloFights;

        return $this;
    }

    public function getTotalSoloFights(): int
    {
        return $this->totalSoloFights;
    }

    public function setTotalSoloFights(int $totalSoloFights): self
    {
        $this->totalSoloFights = $totalSoloFights;

        return $this;
    }

    public function getMaxSoloFights(): int
    {
        return $this->maxSoloFights;
    }

    public function setMaxSoloFights(int $maxSoloFights): self
    {
        $this->maxSoloFights = $maxSoloFights;

        return $this;
    }

    public function getTeamFights(): int
    {
        return $this->teamFights;
    }

    public function setTeamFights(int $teamFights): self
    {
        $this->teamFights = $teamFights;

        return $this;
    }

    public function getMaxTeamFights(): int
    {
        return $this->maxTeamFights;
    }

    public function setMaxTeamFights(int $maxTeamFights): self
    {
        $this->maxTeamFights = $maxTeamFights;

        return $this;
    }

    public function getBattleRoyaleFights(): int
    {
        return $this->battleRoyaleFights;
    }

    public function setBattleRoyaleFights(int $battleRoyaleFights): self
    {
        $this->battleRoyaleFights = $battleRoyaleFights;

        return $this;
    }

    public function getMaxBattleRoyaleFights(): int
    {
        return $this->maxBattleRoyaleFights;
    }

    public function setMaxBattleRoyaleFights(int $maxBattleRoyaleFights): self
    {
        $this->maxBattleRoyaleFights = $maxBattleRoyaleFights;

        return $this;
    }

    public function isBattleRoyaleEnabled(): bool
    {
        return $this->battleRoyaleEnabled;
    }

    public function setBattleRoyaleEnabled(bool $battleRoyaleEnabled): self
    {
        $this->battleRoyaleEnabled = $battleRoyaleEnabled;

        return $this;
    }
}
