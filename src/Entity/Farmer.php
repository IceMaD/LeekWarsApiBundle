<?php

namespace IceMaD\LeekWarsApiBundle\Entity;

class Farmer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $login;

    /**
     * @var Team
     */
    private $team;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $talent;

    /**
     * @var Leek[]
     */
    private $leeks;

    /**
     * @var int
     */
    private $avatarChanged;

    /**
     * @var int
     */
    private $talentMore;

    /**
     * @var int
     */
    private $victories;

    /**
     * @var int
     */
    private $draws;

    /**
     * @var int
     */
    private $defeats;

    /**
     * @var string
     */
    private $ratio;

    /**
     * @var bool
     */
    private $connected;

    /**
     * @var int
     */
    private $lastConnection;

    /**
     * @var int
     */
    private $registerDate;

    /**
     * @var Fight[]
     */
    private $fightHistory;

    /**
     * @var Tournament[]
     */
    private $tournaments;

    /**
     * @var bool
     */
    private $admin;

    /**
     * @var bool
     */
    private $moderator;

    /**
     * @var string
     */
    private $country;

    /**
     * @var Leek
     */
    private $godfather;

    /**
     * @var Leek[]
     */
    private $godsons;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $banned;

    /**
     * @var int
     */
    private $wonSoloTournaments;

    /**
     * @var int
     */
    private $wonFarmerTournaments;

    /**
     * @var int
     */
    private $wonTeamTournaments;

    /**
     * @var int
     */
    private $totalLevel;

    /**
     * @var int
     */
    private $leekCount;

    /**
     * @var int
     */
    private $inGarden;

    /**
     * @var int
     */
    private $fights;

    /**
     * @var ?string
     */
    private $github;

    /**
     * @var ?string
     */
    private $website;

    /**
     * @var int
     */
    private $forumMessages;

    /**
     * @var int
     */
    private $didactitielSeen;

    /**
     * @var bool
     */
    private $contributor;

    /**
     * @var int
     */
    private $trophies;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getTeam(): Team
    {
        return $this->team;
    }

    public function setTeam(Team $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getLeeks(): array
    {
        return $this->leeks;
    }

    public function setLeeks(array $leeks): self
    {
        $this->leeks = $leeks;

        return $this;
    }

    public function getAvatarChanged(): int
    {
        return $this->avatarChanged;
    }

    public function setAvatarChanged(int $avatarChanged): self
    {
        $this->avatarChanged = $avatarChanged;

        return $this;
    }

    public function getTalentMore(): int
    {
        return $this->talentMore;
    }

    public function setTalentMore(int $talentMore): self
    {
        $this->talentMore = $talentMore;

        return $this;
    }

    public function getVictories(): int
    {
        return $this->victories;
    }

    public function setVictories(int $victories): self
    {
        $this->victories = $victories;

        return $this;
    }

    public function getDraws(): int
    {
        return $this->draws;
    }

    public function setDraws(int $draws): self
    {
        $this->draws = $draws;

        return $this;
    }

    public function getDefeats(): int
    {
        return $this->defeats;
    }

    public function setDefeats(int $defeats): self
    {
        $this->defeats = $defeats;

        return $this;
    }

    public function getRatio(): float
    {
        return $this->ratio;
    }

    public function setRatio(float $ratio): self
    {
        $this->ratio = $ratio;

        return $this;
    }

    public function isConnected(): bool
    {
        return $this->connected;
    }

    public function setConnected(bool $connected): self
    {
        $this->connected = $connected;

        return $this;
    }

    public function getLastConnection(): int
    {
        return $this->lastConnection;
    }

    public function setLastConnection(int $lastConnection): self
    {
        $this->lastConnection = $lastConnection;

        return $this;
    }

    public function getRegisterDate(): int
    {
        return $this->registerDate;
    }

    public function setRegisterDate(int $registerDate): self
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    public function getFightHistory(): array
    {
        return $this->fightHistory;
    }

    public function setFightHistory(array $fightHistory): self
    {
        $this->fightHistory = $fightHistory;

        return $this;
    }

    public function getTournaments(): array
    {
        return $this->tournaments;
    }

    public function setTournaments(array $tournaments): self
    {
        $this->tournaments = $tournaments;

        return $this;
    }

    public function isAdmin(): bool
    {
        return $this->admin;
    }

    public function setAdmin(bool $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function isModerator(): bool
    {
        return $this->moderator;
    }

    public function setModerator(bool $moderator): self
    {
        $this->moderator = $moderator;

        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getGodfather(): Leek
    {
        return $this->godfather;
    }

    public function setGodfather(Leek $godfather): self
    {
        $this->godfather = $godfather;

        return $this;
    }

    public function getGodsons(): array
    {
        return $this->godsons;
    }

    public function setGodsons(array $godsons): self
    {
        $this->godsons = $godsons;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getBanned(): int
    {
        return $this->banned;
    }

    public function setBanned(int $banned): self
    {
        $this->banned = $banned;

        return $this;
    }

    public function getWonSoloTournaments(): int
    {
        return $this->wonSoloTournaments;
    }

    public function setWonSoloTournaments(int $wonSoloTournaments): self
    {
        $this->wonSoloTournaments = $wonSoloTournaments;

        return $this;
    }

    public function getWonFarmerTournaments(): int
    {
        return $this->wonFarmerTournaments;
    }

    public function setWonFarmerTournaments(int $wonFarmerTournaments): self
    {
        $this->wonFarmerTournaments = $wonFarmerTournaments;

        return $this;
    }

    public function getWonTeamTournaments(): int
    {
        return $this->wonTeamTournaments;
    }

    public function setWonTeamTournaments(int $wonTeamTournaments): self
    {
        $this->wonTeamTournaments = $wonTeamTournaments;

        return $this;
    }

    public function getTotalLevel(): int
    {
        return $this->totalLevel;
    }

    public function setTotalLevel(int $totalLevel): self
    {
        $this->totalLevel = $totalLevel;

        return $this;
    }

    public function getLeekCount(): int
    {
        return $this->leekCount;
    }

    public function setLeekCount(int $leekCount): self
    {
        $this->leekCount = $leekCount;

        return $this;
    }

    public function getInGarden(): int
    {
        return $this->inGarden;
    }

    public function setInGarden(int $inGarden): self
    {
        $this->inGarden = $inGarden;

        return $this;
    }

    public function getFights(): int
    {
        return $this->fights;
    }

    public function setFights(int $fights): self
    {
        $this->fights = $fights;

        return $this;
    }

    public function getGithub(): ?string
    {
        return $this->github;
    }

    public function setGithub(?string $github): self
    {
        $this->github = $github;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getForumMessages(): int
    {
        return $this->forumMessages;
    }

    public function setForumMessages(int $forumMessages): self
    {
        $this->forumMessages = $forumMessages;

        return $this;
    }

    public function getDidactitielSeen(): int
    {
        return $this->didactitielSeen;
    }

    public function setDidactitielSeen(int $didactitielSeen): self
    {
        $this->didactitielSeen = $didactitielSeen;

        return $this;
    }

    public function isContributor(): bool
    {
        return $this->contributor;
    }

    public function setContributor(bool $contributor): self
    {
        $this->contributor = $contributor;

        return $this;
    }

    public function getTrophies(): int
    {
        return $this->trophies;
    }

    public function setTrophies(int $trophies): self
    {
        $this->trophies = $trophies;

        return $this;
    }
}
