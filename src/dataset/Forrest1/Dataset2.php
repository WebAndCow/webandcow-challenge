<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\Forrest1;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset2 extends Dataset
{
    protected array $datas = [
        'kms' => [82, 172, 224, 305, 354],
        'runners' => [6, 6, 4, 3, 5],
        'stop' => 452
    ];

    protected $result = 6195;
}