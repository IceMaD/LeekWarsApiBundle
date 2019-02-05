<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;

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
        $url = self::BASE_URL.'/get/';

        throw new NotImplementedException('comment');
    }

    public function getLog(int $fightId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-logs/';

        throw new NotImplementedException('comment');
    }
}
