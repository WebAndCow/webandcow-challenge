<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

class Response implements \JsonSerializable
{
    private $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function jsonSerialize()
    {
        return ['reponse' => $this->response];
    }

    public function getResponse()
    {
        return $this->response;
    }
}
