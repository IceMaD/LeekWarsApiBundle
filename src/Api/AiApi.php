<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Entity\Ai;
use IceMaD\LeekWarsApiBundle\Entity\Folder;
use IceMaD\LeekWarsApiBundle\Guzzle\Client;
use IceMaD\LeekWarsApiBundle\Response\GetAiResponse;
use IceMaD\LeekWarsApiBundle\Response\GetFarmerAisResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiChangeFolderResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiDeleteResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiNewResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiRenameResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiSaveResponse;
use IceMaD\LeekWarsApiBundle\Storage\TokenStorage;
use Symfony\Component\Serializer\SerializerInterface;

class AiApi
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var TokenStorage
     */
    private $tokenStorage;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(Client $client, TokenStorage $tokenStorage, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->tokenStorage = $tokenStorage;
        $this->serializer = $serializer;
    }

    public function getFarmerAIs(): PromiseInterface
    {
        $token = $this->tokenStorage->getToken();

        return $this->client->getAsync("/api/ai/get-farmer-ais/$token", ['class' => GetFarmerAisResponse::class]);
    }

    public function getAI(int $id): PromiseInterface
    {
        $token = $this->tokenStorage->getToken();

        return $this->client->getAsync("/api/ai/get/$id/$token", ['class' => GetAiResponse::class])
            ->then(function (GetAiResponse $response) {
                return $response->getAi();
            });
    }

    public function createAi(Ai $ai)
    {
        $token = $this->tokenStorage->getToken();

        $data = [
            'folder_id' => $ai->getFolder()->getId(),
            'v2' => 'false',
            'token' => $token,
        ];

        return $this->client->postAsync('/api/ai/new/', [
            'body' => http_build_query($data),
            'class' => PostAiNewResponse::class,
        ])
            ->then(function (PostAiNewResponse $response) use ($ai) {
                $ai->setId($response->getAi()->getId());

                return $ai;
            });
    }

    public function updateAiCode(Ai $ai, string $code): PromiseInterface
    {
        $token = $this->tokenStorage->getToken();

        $data = [
            'ai_id' => $ai->getId(),
            'code' => $code,
            'token' => $token,
        ];

        return $this->client->postAsync('/api/ai/save/', [
            'body' => http_build_query($data),
            'class' => PostAiSaveResponse::class,
        ])
            ->then(function (PostAiSaveResponse $response) use ($code, $ai) {
                $ai->setCode($code);

                if ($response->isAiValid()) {
                    $ai->setValid(true);
                } else {
                    $ai->setValid(false);
                    $ai->setError($response->getAiError());
                }

                return $ai;
            });
    }

    public function renameAi(Ai $ai, string $name): PromiseInterface
    {
        $token = $this->tokenStorage->getToken();

        $data = [
            'ai_id' => $ai->getId(),
            'new_name' => $name,
            'token' => $token,
        ];

        return $this->client->postAsync('/api/ai/rename/', [
            'body' => http_build_query($data),
            'class' => PostAiRenameResponse::class,
        ])
            ->then(function () use ($name, $ai) {
                $ai->setName($name);

                return $ai;
            });
    }

    public function deleteAi(Ai $ai): PromiseInterface
    {
        $token = $this->tokenStorage->getToken();

        $data = [
            'ai_id' => $ai->getId(),
            'token' => $token,
        ];

        return $this->client->postAsync('/api/ai/delete/', [
            'body' => http_build_query($data),
            'class' => PostAiDeleteResponse::class,
        ])
            ->then(function () use ($ai) {
                $ai->getFolder()->removeAi($ai);
            });
    }

    public function changeFolder(Ai $ai, Folder $folder)
    {
        $token = $this->tokenStorage->getToken();

        $data = [
            'ai_id' => $ai->getId(),
            'folder_id' => $folder->getId(),
            'token' => $token,
        ];

        return $this->client->postAsync('/api/ai/change-folder/', [
            'body' => http_build_query($data),
            'class' => PostAiChangeFolderResponse::class,
        ])
            ->then(function () use ($ai, $folder) {
                $ai->getFolder()->removeAi($ai);
                $folder->addAi($ai);

                return $ai;
            });
    }
}
