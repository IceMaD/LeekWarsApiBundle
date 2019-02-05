<?php

namespace IceMaD\LeekWarsApiBundle\Response\Ai;

use IceMaD\LeekWarsApiBundle\Entity\Ai;
use IceMaD\LeekWarsApiBundle\Response\Response;

class RenameResponse extends Response
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
     * @return RenameResponse
     */
    public function setAi(Ai $ai): self
    {
        $this->ai = $ai;

        return $this;
    }
}
