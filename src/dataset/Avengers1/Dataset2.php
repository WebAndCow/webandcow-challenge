<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\Avengers1;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset2 extends Dataset
{
    protected array $datas = [
        'iron_man' => 4,
        'spiderman' => 6,
        'captain_america' => 6,
        'thor' => 2,
        'thanos' => 186
    ];

    protected $result = 25;
}