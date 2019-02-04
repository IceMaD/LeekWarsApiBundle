<?php

namespace IceMaD\LeekWarsApiBundle\Api;

use GuzzleHttp\Promise\PromiseInterface;
use IceMaD\LeekWarsApiBundle\Exception\NotImplementedException;

class MessageApi extends AbstractApi
{
    const BASE_URL = '/api/message';

    public function createConversation(int $farmerId, string $message, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/create-conversation/';

        throw new NotImplementedException('createConversation');
    }

    public function getLatestConversations(int $count, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-latest-conversations/';

        throw new NotImplementedException('getLatestConversations');
    }

    public function getMessages(int $conversationId, int $count, int $page, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/get-messages/';

        throw new NotImplementedException('getMessages');
    }

    public function quitConversation(int $conversationId, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/quit-conversation/';

        throw new NotImplementedException('quitConversation');
    }

    public function sendMessage(int $conversationId, string $message, string $token = null): PromiseInterface
    {
        $url = self::BASE_URL.'/send-message/';

        throw new NotImplementedException('sendMessage');
    }
}
