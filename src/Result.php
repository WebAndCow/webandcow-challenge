<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

class Result
{
    private $result;
    private $tokenUrl;

    public function __construct(array $result, ?string $tokenUrl = null)
    {
        $this->result = $result;
        $this->tokenUrl = $tokenUrl;
    }

    public function __toString()
    {
        return sprintf(
            '%1$s : %2$s %3$s',
            ((bool) $this->result['success_game']) ? 'OK' : 'ERREUR',
            $this->result['message'],
            $this->tokenUrl ? '(' . $this->tokenUrl . ')' : ''
        );
    }
}
