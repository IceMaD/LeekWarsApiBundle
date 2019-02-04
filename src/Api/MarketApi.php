<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;

class MarketApi extends AbstractApi
{
    const BASE_URL = '/api/market';

    public function buyCrystals(int $itemId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/buy-crystals/';

        throw new NotImplementedException('buyCrystals');
    }

    public function buyHabs(int $itemId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/buy-habs/';

        throw new NotImplementedException('buyHabs');
    }

    public function getItemTemplates(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-item-templates/';

        throw new NotImplementedException('getItemTemplates');
    }

    public function sellHabs(int $itemId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/sell-habs/';

        throw new NotImplementedException('sellHabs');
    }
}
