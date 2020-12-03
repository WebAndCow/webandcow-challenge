<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

interface SolutionInterface
{
    public function apply(array $data): Response;
}
