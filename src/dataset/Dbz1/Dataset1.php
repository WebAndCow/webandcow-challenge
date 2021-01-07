<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\Dbz1;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset1 extends Dataset
{
    protected array $datas = [
        'ennemis' => [568, 800, 1113, 1283],
        'vegeta' => 143,
        'niveau' => 1
    ];

    protected $result = '518 5';
}