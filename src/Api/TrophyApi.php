<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;

class TrophyApi extends AbstractApi
{
    const BASE_URL = '/api/trophy';

    public function getAdmin(string $lang, string $token = null, string $superToken = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-admin/';

        throw new NotImplementedException('getAdmin');
    }

    public function getAll(): PromiseInterface
    {
        $url = self::BASE_URL.'/get-all';

        throw new NotImplementedException('getAll');
    }

    public function getCategories(): PromiseInterface
    {
        $url = self::BASE_URL.'/get-categories';

        throw new NotImplementedException('getCategories');
    }

    public function getFarmerTrophies(int $farmerId, string $lang, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-farmer-trophies/farmer_id/lang/token';

        throw new NotImplementedException('getFarmerTrophies');
    }

    public function unlock(int $trophyId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/unlock/';

        throw new NotImplementedException('unlock');
    }
}
