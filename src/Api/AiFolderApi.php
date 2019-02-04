<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Response\PostAiFolderDeleteResponse;
use IceMaD\LeekWarsApiBundle\Response\PostAiFolderRenameResponse;
use IceMaD\LeekWarsApiBundle\Response\PostFolderChangeFolderResponse;
use IceMaD\LeekWarsApiBundle\Response\PostFolderNewResponse;

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
            'class' => PostFolderChangeFolderResponse::class,
        ]);
    }

    public function delete(int $folderId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/delete/', [
            'body' => http_build_query([
                'folder_id' => $folderId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => PostAiFolderDeleteResponse::class,
        ]);
    }

    public function new(int $parentFolderId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/new/', [
            'body' => http_build_query([
                'folder_id' => $parentFolderId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'class' => PostFolderNewResponse::class,
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
            'class' => PostAiFolderRenameResponse::class,
        ]);
    }
}
