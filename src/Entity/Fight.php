<?php

namespace IceMaD\LeekWarsApiBundle\Entity;

class Fight
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $date;

    /**
     * @var int
     */
    private $year;

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $context;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $winner;

    /**
     * @var Leek[]
     */
    private $leeks1;

    /**
     * @var Leek[]
     */
    private $leeks2;

    /**
     * @var Farmer[]
     */
    private $farmers1;

    /**
     * @var Farmer[]
     */
    private $farmers2;

    /**
     * @TODO class
     *
     * @var array
     */
    private $data;

    /**
     * @TODO class
     *
     * @var array
     */
    private $report;

    /**
     * @var Comment[]
     */
    private $comments;

    /**
     * @var int
     */
    private $tournament;

    /**
     * @var int
     */
    private $views;

    /**
     * @var string
     */
    private $team1Name;

    /**
     * @var string
     */
    private $team2Name;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getContext(): int
    {
        return $this->context;
    }

    public function setContext(int $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getWinner(): int
    {
        return $this->winner;
    }

    public function setWinner(int $winner): self
    {
        $this->winner = $winner;

        return $this;
    }

    public function getLeeks1(): array
    {
        return $this->leeks1;
    }

    public function setLeeks1(array $leeks1): self
    {
        $this->leeks1 = $leeks1;

        return $this;
    }

    public function getLeeks2(): array
    {
        return $this->leeks2;
    }

    public function setLeeks2(array $leeks2): self
    {
        $this->leeks2 = $leeks2;

        return $this;
    }

    public function getFarmers1(): array
    {
        return $this->farmers1;
    }

    public function setFarmers1(array $farmers1): self
    {
        $this->farmers1 = $farmers1;

        return $this;
    }

    public function getFarmers2(): array
    {
        return $this->farmers2;
    }

    public function setFarmers2(array $farmers2): self
    {
        $this->farmers2 = $farmers2;

        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getReport(): array
    {
        return $this->report;
    }

    public function setReport(array $report): self
    {
        $this->report = $report;

        return $this;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments(array $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getTournament(): int
    {
        return $this->tournament;
    }

    public function setTournament(int $tournament): self
    {
        $this->tournament = $tournament;

        return $this;
    }

    public function getViews(): int
    {
        return $this->views;
    }

    public function setViews(int $views): self
    {
        $this->views = $views;

        return $this;
    }

    public function getTeam1Name(): string
    {
        return $this->team1Name;
    }

    public function setTeam1Name(string $team1Name): self
    {
        $this->team1Name = $team1Name;

        return $this;
    }

    public function getTeam2Name(): string
    {
        return $this->team2Name;
    }

    public function setTeam2Name(string $team2Name): self
    {
        $this->team2Name = $team2Name;

        return $this;
    }
}
