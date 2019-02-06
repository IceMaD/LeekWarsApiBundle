<?php

namespace IceMaD\LeekWarsApiBundle\Response\Farmer;

use IceMaD\LeekWarsApiBundle\Entity\Farmer;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetConnectedResponse extends Response
{
    /**
     * @var int
     */
    private $count;

    /**
     * @var Farmer[]
     */
    private $farmers;

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getFarmers(): array
    {
        return $this->farmers;
    }

    public function setFarmers(array $farmers): self
    {
        $this->farmers = $farmers;

        return $this;
    }
}
