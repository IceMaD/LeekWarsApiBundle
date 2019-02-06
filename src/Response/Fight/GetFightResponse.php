<?php

namespace IceMaD\LeekWarsApiBundle\Response\Fight;

use IceMaD\LeekWarsApiBundle\Entity\Fight;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetFightResponse extends Response
{
    /**
     * @var Fight
     */
    private $fight;

    public function getFight(): Fight
    {
        return $this->fight;
    }

    public function setFight(Fight $fight): self
    {
        $this->fight = $fight;

        return $this;
    }
}
