<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\Forrest1;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset1 extends Dataset
{
    protected array $datas = [
        'kms' => [15, 32, 60],
        'runners' => [2, 6, 4],
        'stop' => 147
    ];

    protected $result = 1449;
}