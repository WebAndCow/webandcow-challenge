<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\Forrest1;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset4 extends Dataset
{
    protected array $datas = [
        'kms' => [95, 167, 202, 213, 248, 325, 384, 434, 480],
        'runners' => [2, 7, 7, 5, 7, 3, 7, 6, 2],
        'stop' => 576
    ];

    protected $result = 14271;
}