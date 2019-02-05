<?php

namespace IceMaD\LeekWarsApiBundle\Response\Ai;

use IceMaD\LeekWarsApiBundle\Entity\Ai;
use IceMaD\LeekWarsApiBundle\Response\Response;

class NewResponse extends Response
{
    /**
     * @var Ai
     */
    private $ai;

    /**
     * @return Ai
     */
    public function getAi(): Ai
    {
        return $this->ai;
    }

    /**
     * @param Ai $ai
     *
     * @return NewResponse
     */
    public function setAi(Ai $ai)
    {
        $this->ai = $ai;

        return $this;
    }
}
