<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\Collection1;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset1 extends Dataset
{
    protected array $datas = [
        'exemplaires' => [50000, 50000, 2000, 2000, 50000, 100, 2000, 2000, 50000, 2000, 50000, 2000, 100, 2000, 2000, 50000, 2000],
        'cotes' => [1, 0.8, 0.6, 1.2, 0.8, 4, 0.6, 1, 0.8, 0.6, 0.8, 1.2, 4, 0.8, 1, 1.2, 1]
    ];

    protected $result = 156;
}