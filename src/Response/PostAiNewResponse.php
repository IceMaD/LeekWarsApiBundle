<?php

namespace IceMaD\LeekWarsApiBundle\Response;

use IceMaD\LeekWarsApiBundle\Entity\Ai;

class PostAiNewResponse extends Response
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
     * @return PostAiNewResponse
     */
    public function setAi(Ai $ai)
    {
        $this->ai = $ai;

        return $this;
    }
}
