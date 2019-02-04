<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;

class GardenApi extends AbstractApi
{
    const BASE_URL = '/api/garden';

    public function getGarden(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get/';

        throw new NotImplementedException('getGarden');
    }

    public function getCompositionOpponents(int $compositionId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-composition-opponents/';

        throw new NotImplementedException('getCompositionOpponents');
    }

    public function getFarmerChallenge(int $targetId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-farmer-challenge/';

        throw new NotImplementedException('getFarmerChallenge');
    }

    public function getFarmerOpponents(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-farmer-opponents/';

        throw new NotImplementedException('getFarmerOpponents');
    }

    public function getLeekOpponents(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-leek-opponents/';

        throw new NotImplementedException('getLeekOpponents');
    }

    public function getSoloChallenge(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-solo-challenge/leek_id/token';

        throw new NotImplementedException('getSoloChallenge');
    }

    public function startFarmerChallenge(int $targetId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/start-farmer-challenge/';

        throw new NotImplementedException('postStartFarmerChallenge');
    }

    public function startFarmerFight(int $targetId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/start-farmer-fight/';

        throw new NotImplementedException('postStartFarmerFight');
    }

    public function startSoloChallenge(int $leekId, int $targetId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/start-solo-challenge/';

        throw new NotImplementedException('postStartSoloChallenge');
    }

    public function startSoloFight(int $leekId, int $targetId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/start-solo-fight/';

        throw new NotImplementedException('postStartSoloFight');
    }

    public function startTeamFight(int $compositionId, int $targetId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/start-team-fight/';

        throw new NotImplementedException('postStartTeamFight');
    }
}
