<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;
use IceMaD\LeekWarsApiBundle\Response\Fight\GetLogsResponse;

class FightApi extends AbstractApi
{
    const BASE_URL = '/api/fight';

    public function comment(int $fightId, string $comment, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/comment/';

        throw new NotImplementedException('comment');
    }

    public function getFight(int $fightId): PromiseInterface
    {
        return $this->client->getAsync(self::BASE_URL.'/get/', ['class' => GetFightResponse::class]);
    }

    public function getLog(int $fightId, string $token = null): PromiseInterface
    {
        $token = $token ?? $this->tokenStorage->getToken();

        return $this->client->getAsync(self::BASE_URL."/get-logs/$fightId/$token", ['class' => GetLogsResponse::class]);
    }
}
