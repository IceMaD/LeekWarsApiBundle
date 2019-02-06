<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Response\Garden\GetCompositionOpponentsResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\GetFarmerChallengeResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\GetFarmerOpponentsResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\GetGardenResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\GetLeekOpponentsResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\GetSoloChallengeResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\StartFarmerChallengeResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\StartFarmerFightResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\StartSoloChallengeResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\StartSoloFightResponse;
use IceMaD\LeekWarsApiBundle\Response\Garden\StartTeamFightResponse;

class GardenApi extends AbstractApi
{
    const BASE_URL = '/api/garden';

    public function getGarden(string $token = null): PromiseInterface
    {
        $token = $token ?? $this->tokenStorage->getToken();

        return $this->client->getAsync(self::BASE_URL."/get/$token", ['class' => GetGardenResponse::class]);
    }

    public function getCompositionOpponents(int $compositionId, string $token = null): PromiseInterface
    {
        $token = $token ?? $this->tokenStorage->getToken();

        return $this->client->getAsync(self::BASE_URL."/get-composition-opponents/$compositionId/$token", ['class' => GetCompositionOpponentsResponse::class]);
    }

    public function getFarmerChallenge(int $targetId, string $token = null): PromiseInterface
    {
        $token = $token ?? $this->tokenStorage->getToken();

        return $this->client->getAsync(self::BASE_URL."/get-farmer-challenge/$targetId/$token", ['class' => GetFarmerChallengeResponse::class]);
    }

    public function getFarmerOpponents(string $token = null): PromiseInterface
    {
        $token = $token ?? $this->tokenStorage->getToken();

        return $this->client->getAsync(self::BASE_URL."/get-farmer-opponents/$token", ['class' => GetFarmerOpponentsResponse::class]);
    }

    public function getLeekOpponents(int $leekId, string $token = null): PromiseInterface
    {
        $token = $token ?? $this->tokenStorage->getToken();

        return $this->client->getAsync(self::BASE_URL."/get-leek-opponents/$leekId/$token", ['class' => GetLeekOpponentsResponse::class]);
    }

    public function getSoloChallenge(int $leekId, string $token = null): PromiseInterface
    {
        $token = $token ?? $this->tokenStorage->getToken();

        return $this->client->getAsync(self::BASE_URL."/get-solo-challenge/$leekId/$token", ['class' => GetSoloChallengeResponse::class]);
    }

    public function startFarmerChallenge(int $targetId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/start-farmer-challenge/', [
            'class' => StartFarmerChallengeResponse::class,
            'body' => http_build_query([
                'target_id' => $targetId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
        ]);
    }

    public function startFarmerFight(int $targetId, string $sessId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/start-farmer-fight/', [
            'class' => StartFarmerFightResponse::class,
            'body' => http_build_query([
                'target_id' => $targetId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'headers' => [
                'Cookie' => [$sessId],
            ],
        ]);
    }

    public function startSoloChallenge(int $leekId, int $targetId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/start-solo-challenge/', [
            'class' => StartSoloChallengeResponse::class,
            'body' => http_build_query([
                'leek_id' => $leekId,
                'target_id' => $targetId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
        ]);
    }

    public function startSoloFight(int $leekId, int $targetId, string $sessId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/start-solo-fight/', [
            'class' => StartSoloFightResponse::class,
            'body' => http_build_query([
                'leek_id' => $leekId,
                'target_id' => $targetId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'headers' => [
                'Cookie' => [$sessId],
            ],
        ]);
    }

    public function startTeamFight(int $compositionId, int $targetId, string $sessId, string $token = null): PromiseInterface
    {
        return $this->client->postAsync(self::BASE_URL.'/start-team-fight/', [
            'class' => StartTeamFightResponse::class,
            'body' => http_build_query([
                'composition_id' => $compositionId,
                'target_id' => $targetId,
                'token' => $token ?? $this->tokenStorage->getToken(),
            ]),
            'headers' => [
                'Cookie' => [$sessId],
            ],
        ]);
    }
}
