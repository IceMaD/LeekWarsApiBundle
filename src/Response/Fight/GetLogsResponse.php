<?php

namespace IceMaD\LeekWarsApiBundle\Response\Fight;

use IceMaD\LeekWarsApiBundle\Response\Response;

class GetLogsResponse extends Response
{
    /**
     * @var array
     */
    private $logs;

    /**
     * @var int
     */
    private $habs;

    /**
     * @var int
     */
    private $talent;

    /**
     * @var array
     */
    private $leekTalents;

    public function getLogs(): array
    {
        return $this->logs;
    }

    public function setLogs(array $logs): self
    {
        $this->logs = $logs;

        return $this;
    }

    public function getHabs(): int
    {
        return $this->habs;
    }

    public function setHabs(int $habs): self
    {
        $this->habs = $habs;

        return $this;
    }

    public function getTalent(): int
    {
        return $this->talent;
    }

    public function setTalent(int $talent): self
    {
        $this->talent = $talent;

        return $this;
    }

    public function getLeekTalents(): array
    {
        return $this->leekTalents;
    }

    public function setLeekTalents(array $leekTalents): self
    {
        $this->leekTalents = $leekTalents;

        return $this;
    }
}
