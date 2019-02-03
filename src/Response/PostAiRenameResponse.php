<?php

namespace IceMaD\LeekWarsApiBundle\Response;

use IceMaD\LeekWarsApiBundle\Entity\Ai;

class PostAiRenameResponse extends Response
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
     * @return PostAiRenameResponse
     */
    public function setAi(Ai $ai): self
    {
        $this->ai = $ai;

        return $this;
    }
}
