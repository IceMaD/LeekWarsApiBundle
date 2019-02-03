<?php

namespace IceMaD\Bundle\LeekWarsApiBundle\Exception;

use IceMaD\Bundle\LeekWarsApiBundle\Response\Response;

class InvalidTokenException extends \Exception
{
    /**
     * @var Response
     */
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }
}
