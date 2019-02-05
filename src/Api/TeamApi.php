<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;
use Symfony\Component\HttpFoundation\File\File;

class TeamApi extends AbstractApi
{
    const BASE_URL = '/api/team';

    public function acceptCandidacy(int $candidacyId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/accept-candidacy/';

        throw new NotImplementedException('acceptCandidacy');
    }

    public function banFarmer(int $famerId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/ban/';

        throw new NotImplementedException('banFarmer');
    }

    public function cancelCandidacy(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/cancel-candidacy/';

        throw new NotImplementedException('cancelCandidacy');
    }

    public function cancelCandidacyForTeam(int $teamId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/cancel-candidacy-for-team/';

        throw new NotImplementedException('cancelCandidacyForTeam');
    }

    public function changeDescription(string $description, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/change-description/';

        throw new NotImplementedException('changeDescription');
    }

    public function changeMemberGrade(int $memberId, string $newGrade, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/change-member-grade/';

        throw new NotImplementedException('changeMemberGrade');
    }

    public function changeOwner(int $newOwner, string $password, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/change-owner/';

        throw new NotImplementedException('changeOwner');
    }

    public function create(string $teamName, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/create/';

        throw new NotImplementedException('create');
    }

    public function createComposition(string $compositionName, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/create-composition/';

        throw new NotImplementedException('createComposition');
    }

    public function deleteComposition(int $compositionId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/delete-composition/';

        throw new NotImplementedException('deleteComposition');
    }

    public function dissolve(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/dissolve/';

        throw new NotImplementedException('dissolve');
    }

    public function getTeam(int $teamId): PromiseInterface
    {
        $url = self::BASE_URL.'/get/';

        throw new NotImplementedException('getTeam');
    }

    public function getConnected(int $teamId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-connected/';

        throw new NotImplementedException('getConnected');
    }

    public function getPrivate(int $teamId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-private/';

        throw new NotImplementedException('getPrivate');
    }

    public function moveLeek(int $leekId, int $toCompositionId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/move-leek/';

        throw new NotImplementedException('moveLeek');
    }

    public function quit(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/quit/';

        throw new NotImplementedException('quit');
    }

    public function registerTournament(int $compositionId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/register-tournament/';

        throw new NotImplementedException('registerTournament');
    }

    public function rejectCandidacy(int $candidacyId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/reject-candidacy/';

        throw new NotImplementedException('rejectCandidacy');
    }

    public function sendCandidacy(int $teamId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/send-candidacy/';

        throw new NotImplementedException('sendCandidacy');
    }

    public function setEmblem(int $teamId, File $emblem, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-emblem/';

        throw new NotImplementedException('setEmblem');
    }

    public function setOpened(bool $opened, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-opened/';

        throw new NotImplementedException('setOpened');
    }

    public function unregisterTournament(int $compositionId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/unregister-tournament/';

        throw new NotImplementedException('unregisterTournament');
    }
}
