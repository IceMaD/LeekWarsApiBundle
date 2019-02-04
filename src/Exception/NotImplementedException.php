<?php

namespace IceMaD\LeekWarsApiBundle\Exception;

class NotImplementedException extends \Exception
{
    public function __construct(string $method)
    {
        parent::__construct("$method is not implemented yer");
    }
}
