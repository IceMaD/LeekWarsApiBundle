<?php

namespace IceMaD\LeekWarsApiBundle\Response\Garden;

use IceMaD\LeekWarsApiBundle\Entity\Leek;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetSoloChallengeResponse extends Response
{
    /**
     * @var Leek
     */
    private $leek;

    /**
     * @var int
     */
    private $challenges;

    public function getLeek(): Leek
    {
        return $this->leek;
    }

    public function setLeek(Leek $leek): self
    {
        $this->leek = $leek;

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
