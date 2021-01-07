<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

use WebAndCow\Challenge\Utility;

final class Test
{
    public function resolveWith(SolutionInterface $solution): Result
    {
        return $this->test($solution->apply($this->getDatasGame()));
    }

    private function getDatasGame(): array
    {
        $datasetClass = self::getDatasetClass();
        $dataSet = new $datasetClass;
        
        return $dataSet->getDatas();
    }

    private function test(Response $response): Result
    {
        $datasetClass = self::getDatasetClass();
        $dataSet = new $datasetClass;

        $data['success_game'] = false;
        $data['message'] = 'Le résultat envoyé n\'est pas le même que celui attendu.<br />';
        if ($response->getResponse() == $dataSet->getResult()) {
            $data['success_game'] = true;
            $data['message'] = 'Le résultat envoyé est le même que celui attendu.<br />';
        }
        
        $data['message'] .= '
            Résultat envoyé : ' . $response->getResponse() . '<br />
            Résultat attendu : ' . $dataSet->getResult();
        return new Result($data);
    }

    private static function getDatasetClass()
    {
        if (!isset($_ENV['WEBANDCOW_TEST_DATASET'])) {
            throw new \Exception('Missing WEBANDCOW_TEST_DATASET environment variable');
        }

        $datasetClass = '\WebAndCow\ChallengeBootstrap\DataSet\\' . Utility::toPascalCase($_ENV['WEBANDCOW_CHALLENGE_CODE']) . '\\' . $_ENV['WEBANDCOW_TEST_DATASET'];
        
        if (!class_exists($datasetClass)) {
            throw new \Exception('Bad WEBANDCOW_TEST_DATASET environment variable');
        }

        return $datasetClass;
    }
}