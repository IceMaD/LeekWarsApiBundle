<?php

namespace IceMaD\LeekWarsApiBundle\Api;

class MiscApi extends AbstractApi
{
    const APIS_TODO = [
        '/changelog/get-last/language',
        '/changelog/get/language',
        '/chip/get-all',
        '/chip/get-templates',
        '/constant/get-all',
        '/country/get-all',
        '/function/get-all',
        '/function/get-categories',
        '/hat/get-all',
        '/hat/get-templates',
        '/history/get-farmer-history/farmer_id',
        '/history/get-leek-history/leek_id',
        '/lang/get/file/lang',
        '/leek-wars/version',
        '/potion/get-all',
        '/service/get-all/token',
        '/summon/get-templates',
        '/tournament/comment/tournament_id/comment/token',
        '/tournament/get/tournament_id/token',
        '/weapon/get-all',
        '/weapon/get-templates',
    ];
}
