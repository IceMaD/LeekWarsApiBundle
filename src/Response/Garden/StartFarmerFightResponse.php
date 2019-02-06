<?php

namespace IceMaD\LeekWarsApiBundle\Response\Garden;

use IceMaD\LeekWarsApiBundle\Response\Response;

class StartFarmerFightResponse extends Response
{
    /**
     * @var int
     */
    private $fight;

    public function getFight(): int
    {
        return $this->fight;
    }

    public function setFight(int $fight): self
    {
        $this->fight = $fight;

        return $this;
    }
}
