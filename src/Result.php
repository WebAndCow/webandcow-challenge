<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

class Result
{
    private $result;
    private $isSuccess;
    private $token;
    private $message;

    public function __construct(string $token, array $result)
    {
        $this->token = $token;
        $this->result = $result;
        $this->isSuccess = (bool) $result['success_game'];
        $this->message = $result['message'];
    }

    public function __toString()
    {
        return sprintf('%1$s : %2$s', $this->isSuccess ? 'OK' : 'ERREUR', $this->message);
    }
}
