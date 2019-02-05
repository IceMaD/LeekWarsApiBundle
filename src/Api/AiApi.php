<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;
use IceMaD\LeekWarsApiBundle\Response\GetAiResponse;
use IceMaD\LeekWarsApiBundle\Response\GetFarmerAisResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiChangeFolderResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiDeleteResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiNewResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiRenameResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiSaveResponse;

class AiApi extends AbstractApi
{
    const BASE_URL = '/api/ai';

    public function changeFolder(int $aiId, int $folderId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/change-folder/', [
            'body' => http_build_query([
                'ai_id' => $aiId,
                'folder_id' => $folderId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => PostAiChangeFolderResponse::class,
        ]);
    }

    public function delete(int $aiId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/delete/', [
            'body' => http_build_query([
                'ai_id' => $aiId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => PostAiDeleteResponse::class,
        ]);
    }

    public function getAi(int $aiId, string $token = null): PromiseInterface
    {
        $token = $token ?? $this->tokenStorage->getToken();

        return $this->client->getAsync(self::BASE_URL."/get/$aiId/$token", ['class' => GetAiResponse::class]);
    }

    public function getFarmerAis(string $token = null): PromiseInterface
    {
        $token = $token ?? $this->tokenStorage->getToken();

        return $this->client->getAsync(self::BASE_URL."/get-farmer-ais/$token", ['class' => GetFarmerAisResponse::class]);
    }

    public function new(int $folderId, bool $v2 = false, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/new/', [
            'body' => http_build_query([
                'folder_id' => $folderId,
                'v2' => (string) $v2,
                'token' => $token || $this->tokenStorage->getToken(),
            ]),
            'class' => PostAiNewResponse::class,
        ]);
    }

    public function rename(int $aiId, string $newName, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/rename/', [
            'body' => http_build_query([
                'ai_id' => $aiId,
                'new_name' => $newName,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => PostAiRenameResponse::class,
        ]);
    }

    public function save(int $aiId, string $code, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/save/', [
            'body' => http_build_query([
                'ai_id' => $aiId,
                'code' => $code,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => PostAiSaveResponse::class,
        ]);
    }

    public function test(int $aiId, int $leekId, array $bots, string $type, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/test/';

        throw new NotImplementedException('test');
    }

    public function testNew(string $data, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/test-new/';

        throw new NotImplementedException('testNew');
    }

    public function testV2(string $data, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/test-v2/';

        throw new NotImplementedException('testV2');
    }
}
