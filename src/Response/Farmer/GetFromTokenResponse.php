<?php

namespace IceMaD\LeekWarsApiBundle\Response\Farmer;

use IceMaD\LeekWarsApiBundle\Entity\Farmer;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetFromTokenResponse extends Response
{
    /**
     * @var Farmer
     */
    private $farmer;

    public function getFarmer(): Farmer
    {
        return $this->farmer;
    }

    public function setFarmer(Farmer $farmer): self
    {
        $this->farmer = $farmer;

        return $this;
    }
}
