<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\Crypto2;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset1 extends Dataset
{
    protected array $datas = [
        'depart' => 6369,
        'chemin' => ["+++", "+++", "+++", "+++", "+++", "--", "--", "--", "+", "+", "+"]
    ];

    protected $result = 6842;
}