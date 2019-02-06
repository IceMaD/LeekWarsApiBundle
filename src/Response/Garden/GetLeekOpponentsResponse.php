<?php

namespace IceMaD\LeekWarsApiBundle\Response\Garden;

use IceMaD\LeekWarsApiBundle\Entity\Leek;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetLeekOpponentsResponse extends Response
{
    /**
     * @var Leek[]
     */
    private $opponents;

    public function getOpponents(): array
    {
        return $this->opponents;
    }

    public function setOpponents(array $opponents): self
    {
        $this->opponents = $opponents;

        return $this;
    }
}
