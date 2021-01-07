<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\WallE2;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset2 extends Dataset
{
    protected array $datas = [
        'batterie' => 84,
        'cote' => 7,
        'dechets' => ["4,2", "6,6", "5,4", "2,6", "6,4", "2,1", "5,6", "2,2"],
        'chargeurs' => ["3,7", "7,4"]
    ];

    protected $result = 26;
}