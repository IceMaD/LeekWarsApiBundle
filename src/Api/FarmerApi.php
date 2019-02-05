<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;
use IceMaD\LeekWarsApiBundle\Response\PostLoginTokenResponse;
use Symfony\Component\HttpFoundation\File\File;

class FarmerApi extends AbstractApi
{
    const BASE_URL = '/api/farmer';

    public function acceptTerms(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/accept-terms/';

        throw new NotImplementedException('postAcceptTerms');
    }

    public function activate(int $farmerId, string $code): PromiseInterface
    {
        $url = self::BASE_URL.'/activate/';

        throw new NotImplementedException('postActivate');
    }

    public function changeCountry(string $countryCode, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/change-country/';

        throw new NotImplementedException('postChangeCountry');
    }

    public function changePassword(string $oldPassword, string $newPassword, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/change-password/';

        throw new NotImplementedException('postChangePassword');
    }

    public function disconnect(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/disconnect/';

        throw new NotImplementedException('postDisconnect');
    }

    public function getFarmer(int $farmerId): PromiseInterface
    {
        $url = self::BASE_URL.'/get/';

        throw new NotImplementedException('getFarmer');
    }

    public function getConnected(): PromiseInterface
    {
        $url = self::BASE_URL.'/get-connected/';

        throw new NotImplementedException('getConnected');
    }

    public function getFromToken(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-from-token/';

        throw new NotImplementedException('getConnected');
    }

    public function login(string $login, string $password, bool $keepConnected = false): PromiseInterface
    {
        $url = self::BASE_URL.'/login/';

        throw new NotImplementedException('postLogin');
    }

    public function loginToken(string $login, string $password): PromiseInterface
    {
        return $this->client->postAsync(
            '/api/farmer/login-token/',
            [
                'body' => http_build_query(
                    [
                        'login' => $login,
                        'password' => $password,
                    ]
                ),
                'class' => PostLoginTokenResponse::class,
            ]
        );
    }

    public function register(
        string $login,
        string $password,
        string $email,
        string $leekName,
        string $godFather = null
    ): PromiseInterface {
        $url = self::BASE_URL.'/register/';

        throw new NotImplementedException('postRegister');
    }

    public function registerTournament($token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/register-tournament/';

        throw new NotImplementedException('postRegisterTournament');
    }

    public function setAvatar(File $file, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-avatar/';

        throw new NotImplementedException('postSetAvatar');
    }

    public function setGithub(string $github, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-github/';

        throw new NotImplementedException('postSetGithub');
    }

    public function setInGarden(bool $inGarden, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-in-garden/';

        throw new NotImplementedException('postSetInGarden');
    }

    public function setWebsite(string $website, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-website/';

        throw new NotImplementedException('postSetWebsite');
    }

    public function unregister(string $password, bool $deleteForumMessages, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/unregister/';

        throw new NotImplementedException('postUnregister');
    }

    public function unregisterTournament(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/unregister-tournament/';

        throw new NotImplementedException('postUnregisterTournament');
    }

    public function update(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/update/';

        throw new NotImplementedException('postUpdate');
    }
}
