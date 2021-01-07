<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\Dataset;

class Dataset
{
    public function getDatas(): array
    {
        return $this->datas;
    }

    public function getResult()
    {
        return $this->result;
    }
}