<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\Poker1;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset3 extends Dataset
{
    protected array $datas = [
        'mains' => ["7 4 2 2 dame", "valet 8 8 8 8", "2 2 7 dame 7", "5 6 4 valet 2", "as 9 4 7 valet", "dame 3 roi valet as", "as 8 roi 5 dame", "10 4 roi 10 5", "9 as 3 3 6", "3 4 5 8 3", "as valet 10 6 10", "5 roi 2 9 8", "dame 8 5 9 7", "10 5 2 7 2", "8 as 4 4 2", "4 8 6 as 2", "as 8 2 10 7", "2 roi 9 as valet"]
    ];

    protected $result = 254;
}