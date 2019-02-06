<?php

namespace IceMaD\LeekWarsApiBundle\Response\Garden;

use IceMaD\LeekWarsApiBundle\Entity\Farmer;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetFarmerOpponentsResponse extends Response
{
    /**
     * @var Farmer[]
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
