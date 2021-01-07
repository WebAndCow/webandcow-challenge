<?php

declare(strict_types=1);

namespace WebAndCow\Challenge\DataSet\Pokemon1;

use WebAndCow\Challenge\Dataset\Dataset;

final class Dataset1 extends Dataset
{
    protected array $datas = [
        'types' => ["Psychique", "Glace", "Herbe", "Eau", "Herbe", "Eau", "Feu", "Insecte", "Feu", "Eau", "Feu", "Eau", "Feu", "Eau", "Eau", "Herbe"]
    ];

    protected $result = 3;
}