<?php

namespace IceMaD\LeekWarsApiBundle\Response\Garden;

use IceMaD\LeekWarsApiBundle\Entity\Farmer;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetFarmerChallengeResponse extends Response
{
    /**
     * @var Farmer
     */
    private $farmer;

    /**
     * @var int
     */
    private $challenges;

    public function getFarmer(): Farmer
    {
        return $this->farmer;
    }

    public function setFarmer(Farmer $farmer): self
    {
        $this->farmer = $farmer;

        return $this;
    }

    public function getChallenges(): int
    {
        return $this->challenges;
    }

    public function setChallenges(int $challenges): self
    {
        $this->challenges = $challenges;

        return $this;
    }
}
