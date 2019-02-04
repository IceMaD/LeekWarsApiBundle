<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use IceMaD\LeekWarsApiBundle\Guzzle\Client;
use IceMaD\LeekWarsApiBundle\Storage\TokenStorage;
use Symfony\Component\Serializer\SerializerInterface;

abstract class AbstractApi
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var TokenStorage
     */
    protected $tokenStorage;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    public function __construct(Client $client, TokenStorage $tokenStorage, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->tokenStorage = $tokenStorage;
        $this->serializer = $serializer;
    }
}
