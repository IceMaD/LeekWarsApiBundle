<?php

namespace IceMaD\LeekWarsApiBundle\Response;

abstract class Response
{
    /**
     * @var bool
     */
    protected $success;

    /**
     * @var string
     */
    protected $error;

    /**
     * @var string|null
     */
    protected $phpSessId;

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     *
     * @return Response
     */
    public function setSuccess(bool $success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @return string
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string $error
     *
     * @return Response
     */
    public function setError(string $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getPhpSessId(): ?string
    {
        return $this->phpSessId;
    }

    public function setPhpSessId(?string $phpSessId): self
    {
        $this->phpSessId = $phpSessId;

        return $this;
    }
}
