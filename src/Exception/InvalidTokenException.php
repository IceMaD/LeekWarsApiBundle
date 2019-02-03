<?php

namespace IceMaD\LeekWarsApiBundle\Exception;

use IceMaD\LeekWarsApiBundle\Response\Response;

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
