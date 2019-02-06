<?php

namespace IceMaD\LeekWarsApiBundle\Response\Garden;

use IceMaD\LeekWarsApiBundle\Entity\Composition;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetCompositionOpponentsResponse extends Response
{
    /**
     * @var Composition[]
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
