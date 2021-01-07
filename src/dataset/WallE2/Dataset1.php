<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\WallE2;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset1 extends Dataset
{
    protected array $datas = [
        'batterie' => 80,
        'cote' => 6,
        'dechets' => ["3,4", "6,5", "5,3", "3,3", "3,2", "6,3"],
        'chargeurs' => ["4,6", "6,1"]
    ];

    protected $result = 57;
}