<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

class Response
{
    private $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function __serialize()
    {
        return ['reponse' => $this->response];
    }
}
