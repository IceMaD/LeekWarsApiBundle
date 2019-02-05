<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;

class RankingApi extends AbstractApi
{
    const BASE_URL = '/api/ranking';

    public function getFun(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/fun';

        throw new NotImplementedException('getFun');
    }

    public function getRanking(string $category, string $order, string $page): PromiseInterface
    {
        $url = self::BASE_URL.'/get/';

        throw new NotImplementedException('getRanking');
    }

    public function getFarmerRank(int $farmerId, string $order): PromiseInterface
    {
        $url = self::BASE_URL.'/get-farmer-rank/';

        throw new NotImplementedException('getFarmerRank');
    }

    public function getHomeRanking(): PromiseInterface
    {
        $url = self::BASE_URL.'/get-home-ranking';

        throw new NotImplementedException('getHomeRanking');
    }

    public function getLeekRank(int $leekId, string $order): PromiseInterface
    {
        $url = self::BASE_URL.'/get-leek-rank/';

        throw new NotImplementedException('getLeekRank');
    }

    public function getTeamRank(int $teamId, string $order): PromiseInterface
    {
        $url = self::BASE_URL.'/get-team-rank/';

        throw new NotImplementedException('getTeamRank');
    }

    public function search(string $query, bool $searchLeeks, bool $searchFarmers, bool $searchTeams): PromiseInterface
    {
        $url = self::BASE_URL.'/search/';

        throw new NotImplementedException('search');
    }
}
