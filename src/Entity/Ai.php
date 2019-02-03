<?php

namespace IceMaD\LeekWarsApiBundle\Entity;

class Ai
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean;
     */
    private $valid = true;

    /**
     * @var InvalidScriptError|null
     */
    private $error = null;

    /**
     * @var string
     */
    private $code;

    /**
     * @var int|Folder
     */
    private $folder;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Ai
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Ai
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->valid;
    }

    /**
     * @param bool $valid
     *
     * @return Ai
     */
    public function setValid(bool $valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * @return InvalidScriptError|null
     */
    public function getError(): ?InvalidScriptError
    {
        return $this->error;
    }

    /**
     * @param InvalidScriptError|null $error
     *
     * @return Ai
     */
    public function setError(?InvalidScriptError $error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return Ai
     */
    public function setCode(string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): ?string
    {
        if (!$this->folder instanceof Folder) {
            return null;
        }

        return $this->folder->getPath().DIRECTORY_SEPARATOR.$this->getName();
    }

    /**
     * @return Folder|int
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @param Folder|int $folder
     *
     * @return Ai
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;

        return $this;
    }
}
