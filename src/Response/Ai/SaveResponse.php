<?php

namespace IceMaD\LeekWarsApiBundle\Response\Ai;

use IceMaD\LeekWarsApiBundle\Entity\InvalidScriptError;
use IceMaD\LeekWarsApiBundle\Response\Response;

class SaveResponse extends Response
{
    /**
     * @var array
     */
    private $result;

    /**
     * @return array
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param array $result
     *
     * @return SaveResponse
     */
    public function setResult(array $result)
    {
        $this->result = $result[0];

        return $this;
    }

    public function isAiValid()
    {
        return 3 === count($this->result);
    }

    public function getAiError(): InvalidScriptError
    {
        if ($this->isAiValid()) {
            return null;
        }

        return new InvalidScriptError($this->result);
    }
}
