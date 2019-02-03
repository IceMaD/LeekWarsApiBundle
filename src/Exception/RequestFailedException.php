<?php

namespace IceMaD\Bundle\LeekWarsApiBundle\Exception;

use IceMaD\Bundle\LeekWarsApiBundle\Response\Response;

class RequestFailedException extends \Exception
{
    /**
     * @var Response
     */
    private $response;

    public function __construct(Response $response)
    {
        parent::__construct($response->getError(), 0);

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
