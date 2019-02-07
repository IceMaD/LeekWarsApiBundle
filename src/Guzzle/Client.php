<?php

namespace IceMaD\LeekWarsApiBundle\Guzzle;

use IceMaD\LeekWarsApiBundle\Exception\InvalidTokenException;
use IceMaD\LeekWarsApiBundle\Exception\RequestFailedException;
use IceMaD\LeekWarsApiBundle\Response\Response;
use IceMaD\LeekWarsApiBundle\Storage\TokenStorage;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

class Client extends \GuzzleHttp\Client
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var TokenStorage
     */
    private $tokenStorage;

    public function __construct(array $config = [], TokenStorage $tokenStorage, SerializerInterface $serializer)
    {
        $config['base_uri'] = 'https://leekwars.com:443/api';
        $config['headers'] = [
            'User-Agent' => 'Guzzle LeekTools',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => 'application/json',
        ];

        parent::__construct($config);

        $this->serializer = $serializer;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @throws \Exception
     */
    public function requestAsync($method, $uri = '', array $options = [])
    {
        if (!isset($options['class'])) {
            throw new \Exception('Missing class option in API request');
        }

        if (!is_subclass_of($options['class'], Response::class)) {
            throw new \Exception('class option should be a sublcass of '.Response::class);
        }

        return parent::requestAsync($method, $uri, $options)
            ->then(function (ResponseInterface $response) use ($options) {
                $phpSessId = null;

                foreach ($response->getHeader('Set-Cookie') as $cookie) {
                    if (preg_match('/^PHPSESSID=.*$/', $cookie, $matches)) {
                        $phpSessId = $cookie;
                        break;
                    }
                }

                return $this->serializer->deserialize($response->getBody()->getContents(), $options['class'], 'json', [
                    AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => 'true',
                ])
                    ->setPhpSessId($phpSessId);
            })
            ->then(function (Response $response) {
                if (!$response->isSuccess()) {
                    if (!'wrong_token' === $response->getError()) {
                        throw new InvalidTokenException($response);
                    }

                    throw new RequestFailedException($response);
                }

                return $response;
            });
    }
}
