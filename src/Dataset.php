<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

class Dataset
{
    public function getDatas(): array
    {
        return $this->datas;
    }

    public function getResult(): string
    {
        return $this->result;
    }
}