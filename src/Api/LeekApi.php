<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;

class LeekApi extends AbstractApi
{
    const BASE_URL = '/api/leek';

    public function addChip(int $leekId, int $chipId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/add-chip/';

        throw new NotImplementedException('addChip');
    }

    public function addWeapon(int $leekId, int $weaponId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/add-weapon/';

        throw new NotImplementedException('addWeapon');
    }

    public function create(string $name, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/create/';

        throw new NotImplementedException('create');
    }

    public function deleteRegister(int $leekId, string $key, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/delete-register/';

        throw new NotImplementedException('deleteRegister');
    }

    public function getLeek(int $leekId): PromiseInterface
    {
        $url = self::BASE_URL.'/get/';

        throw new NotImplementedException('getLeek');
    }

    public function getCount(): PromiseInterface
    {
        $url = self::BASE_URL.'/get-count/';

        throw new NotImplementedException('getCount');
    }

    public function getImage(int $leekId, float $scale): PromiseInterface
    {
        $url = self::BASE_URL.'/get-image/';

        throw new NotImplementedException('getImage');
    }

    public function getLevelPopup(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-level-popup/';

        throw new NotImplementedException('getLevelPopup');
    }

    public function getNextPrice(string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-next-price/';

        throw new NotImplementedException('getNextPrice');
    }

    public function getPrivate(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-private/';

        throw new NotImplementedException('getPrivate');
    }

    public function getRegisters(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-registers/';

        throw new NotImplementedException('getRegisters');
    }

    public function registerTournament(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/register-tournament/';

        throw new NotImplementedException('registerTournament');
    }

    public function removeAi(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/remove-ai/';

        throw new NotImplementedException('removeAi');
    }

    public function removeChip(int $chipId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/remove-chip/';

        throw new NotImplementedException('removeChip');
    }

    public function removeHat(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/remove-hat/';

        throw new NotImplementedException('removeHat');
    }

    public function removeWeapon(int $weaponId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/remove-weapon/';

        throw new NotImplementedException('removeWeapon');
    }

    public function renameCrystals(int $leekId, string $newName, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/rename-crystals/';

        throw new NotImplementedException('renameCrystals');
    }

    public function renameHabs(int $leekId, string $newName, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/rename-habs/';

        throw new NotImplementedException('renameHabs');
    }

    public function setAi(int $leekId, int $aiId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-ai/';

        throw new NotImplementedException('setAi');
    }

    public function setHat(int $leekId, int $hatId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-hat/';

        throw new NotImplementedException('setHat');
    }

    public function setInGarden(int $leekId, bool $inGarden, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-in-garden/';

        throw new NotImplementedException('setInGarden');
    }

    public function setPopupLevelSeen(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-popup-level-seen/';

        throw new NotImplementedException('setPopupLevelSeen');
    }

    public function setRegister(int $leekId, string $key, string $value, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/set-register/';

        throw new NotImplementedException('setRegister');
    }

    public function spendCapital(int $leekId, array $characteristics, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/spend-capital/';

        throw new NotImplementedException('spendCapital');
    }

    public function unregisterTournament(int $leekId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/unregister-tournament/';

        throw new NotImplementedException('unregisterTournament');
    }

    public function usePotion(int $leekId, int $potionId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/use-potion/';

        throw new NotImplementedException('usePotion');
    }
}
