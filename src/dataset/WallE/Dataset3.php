<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\WallE;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset3 extends Dataset
{
    protected array $datas = [
        'force' => 17,
        'vitesse' => 11,
        'batterie' => 90,
        'dechets' => [13, 11, 33, 24, 15, 13, 10, 9, 6, 11, 9, 15, 6, 28, 22]
    ];

    protected $result = 21;
}