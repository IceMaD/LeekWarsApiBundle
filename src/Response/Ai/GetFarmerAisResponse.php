<?php

namespace IceMaD\LeekWarsApiBundle\Response\Ai;

use IceMaD\LeekWarsApiBundle\Entity\Ai;
use IceMaD\LeekWarsApiBundle\Entity\Folder;
use IceMaD\LeekWarsApiBundle\Response\Response;

class GetFarmerAisResponse extends Response
{
    /**
     * @var Ai[]
     */
    private $ais = [];

    /**
     * @var Folder[]
     */
    private $folders = [];

    /**
     * @return Ai[]
     */
    public function getAis(): array
    {
        return $this->ais;
    }

    /**
     * @param Ai[] $ais
     *
     * @return GetFarmerAisResponse
     */
    public function setAis(array $ais)
    {
        $this->ais = $ais;

        return $this;
    }

    /**
     * @return Folder[]
     */
    public function getFolders(): array
    {
        return $this->folders;
    }

    /**
     * @param Folder[] $folders
     *
     * @return GetFarmerAisResponse
     */
    public function setFolders(array $folders)
    {
        $this->folders = $folders;

        return $this;
    }
}
