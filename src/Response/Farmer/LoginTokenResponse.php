<?php

namespace IceMaD\LeekWarsApiBundle\Response\Farmer;

use IceMaD\LeekWarsApiBundle\Entity\Farmer;
use IceMaD\LeekWarsApiBundle\Response\Response;

class LoginTokenResponse extends Response
{
    /**
     * @var Farmer
     */
    private $farmer;

    /**
     * @var string
     */
    private $token;

    /**
     * @return Farmer
     */
    public function getFarmer(): Farmer
    {
        return $this->farmer;
    }

    /**
     * @param Farmer $farmer
     *
     * @return LoginTokenResponse
     */
    public function setFarmer(Farmer $farmer)
    {
        $this->farmer = $farmer;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return LoginTokenResponse
     */
    public function setToken(string $token)
    {
        $this->token = $token;

        return $this;
    }
}
