<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\WallE;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset1 extends Dataset
{
    protected array $datas = [
        'force' => 15,
        'vitesse' => 6,
        'batterie' => 97,
        'dechets' => [18, 6, 34, 31, 29]
    ];

    protected $result = 48;
}