<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;

class TestLeekApi extends AbstractApi
{
    const BASE_URL = '/api/test-leek';

    public function getAll(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-all/';

        throw new NotImplementedException('getAll');
    }

    public function delete(int $testLeekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/delete/';

        throw new NotImplementedException('delete');
    }

    public function new(string $name, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/new/';

        throw new NotImplementedException('new');
    }

    public function update(int $testLeekId, array $data, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/update/id/data/';

        throw new NotImplementedException('update');
    }
}
