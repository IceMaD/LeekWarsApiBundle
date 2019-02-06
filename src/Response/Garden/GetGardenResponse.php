<?php

namespace IceMaD\LeekWarsApiBundle\Response\Garden;

use IceMaD\LeekWarsApiBundle\Entity\Garden;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetGardenResponse extends Response
{
    /**
     * @var Garden
     */
    private $garden;

    public function getGarden(): Garden
    {
        return $this->garden;
    }

    public function setGarden(Garden $garden): self
    {
        $this->garden = $garden;

        return $this;
    }
}
