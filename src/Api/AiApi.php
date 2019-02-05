<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;
use IceMaD\LeekWarsApiBundle\Response\Ai\GetAiResponse;
use IceMaD\LeekWarsApiBundle\Response\Ai\GetFarmerAisResponse;
use IceMaD\LeekWarsApiBundle\Response\Ai\ChangeFolderResponse;
use IceMaD\LeekWarsApiBundle\Response\Ai\DeleteResponse;
use IceMaD\LeekWarsApiBundle\Response\Ai\NewResponse;
use IceMaD\LeekWarsApiBundle\Response\Ai\RenameResponse;
use IceMaD\LeekWarsApiBundle\Response\Ai\SaveResponse;

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
            'class' => ChangeFolderResponse::class,
        ]);
    }

    public function delete(int $aiId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/delete/', [
            'body' => http_build_query([
                'ai_id' => $aiId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => DeleteResponse::class,
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
                'v2' => $v2 ? 'true' : 'false',
                'token' => $token || $this->tokenStorage->getToken(),
            ]),
            'class' => NewResponse::class,
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
            'class' => RenameResponse::class,
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
            'class' => SaveResponse::class,
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
