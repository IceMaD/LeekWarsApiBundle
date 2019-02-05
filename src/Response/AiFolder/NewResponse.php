<?php

namespace IceMaD\LeekWarsApiBundle\Response\AiFolder;

use IceMaD\LeekWarsApiBundle\Response\Response;

class NewResponse extends Response
{
    /**
     * @var int
     */
    private $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return NewResponse
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
}
