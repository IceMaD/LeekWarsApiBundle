<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;

class NotificationApi extends AbstractApi
{
    const BASE_URL = '/api/notification';

    public function getLastest(int $count, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-latest/';

        throw new NotImplementedException('getLastest');
    }

    public function read(int $notificationId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/read/';

        throw new NotImplementedException('read');
    }

    public function readAll(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/read-all/';

        throw new NotImplementedException('readAll');
    }
}
