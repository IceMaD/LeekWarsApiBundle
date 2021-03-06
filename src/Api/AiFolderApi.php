<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Response\AiFolder\DeleteResponse;
use IceMaD\LeekWarsApiBundle\Response\AiFolder\RenameResponse;
use IceMaD\LeekWarsApiBundle\Response\AiFolder\ChangeFolderResponse;
use IceMaD\LeekWarsApiBundle\Response\AiFolder\NewResponse;

class AiFolderApi extends AbstractApi
{
    const BASE_URL = '/api/ai-folder';

    public function changeFolder(int $folderId, int $destinationParentFolderId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/change-folder/', [
            'body' => http_build_query([
                'folder_id' => $folderId,
                'dest_folder_id' => $destinationParentFolderId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => ChangeFolderResponse::class,
        ]);
    }

    public function delete(int $folderId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/delete/', [
            'body' => http_build_query([
                'folder_id' => $folderId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => DeleteResponse::class,
        ]);
    }

    public function new(int $parentFolderId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/new/', [
            'body' => http_build_query([
                'folder_id' => $parentFolderId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => NewResponse::class,
        ]);
    }

    public function rename(int $folderId, string $newName, string $token = null): PromiseInterface
    {
        return $this->client->postAsync('/api/ai-folder/rename/', [
            'body' => http_build_query([
                'folder_id' => $folderId,
                'new_name' => $newName,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => RenameResponse::class,
        ]);
    }
}
