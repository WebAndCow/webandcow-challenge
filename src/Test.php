<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

final class Test
{
    public function resolveWith(SolutionInterface $solution): Result
    {
        $dataSet = self::getDatasetClass();

        echo '<h3>Données d\'entrée</h3>';
        dump($dataSet->getData());

        echo '<hr /><h3>Résultat attendu</h3>';
        dump($dataSet->getResult());

        echo '<hr /><h3>Votre code</h3>';

        return $this->test($solution->apply($this->getDataGame()));
    }

    private function getDataGame(): array
    {
        $dataSet = self::getDatasetClass();
        
        return $dataSet->getData();
    }

    private function test(Response $response): Result
    {
        $dataSet = self::getDatasetClass();

        $data['success_game'] = false;
        $data['message'] = 'Le résultat envoyé n\'est pas le même que celui attendu.<br />';
        if ($response->getResponse() == $dataSet->getResult()) {
            $data['success_game'] = true;
            $data['message'] = 'Le résultat envoyé est le même que celui attendu.<br />';
        }
        
        $data['message'] .= 'Résultat envoyé : ' . $response->getResponse();
        return new Result($data);
    }

    private static function getDatasetClass()
    {
        $codeChallenge = substr($_GET['challenge'], strrpos($_GET['challenge'], '/' ) + 1);
        $datasetClass = '\WebAndCow\ChallengeBootstrap\\' . $codeChallenge . '\Dataset\Dataset' . ($_ENV['TEST_DATASET_NUM'] ?? 1);
        
        if (!class_exists($datasetClass)) {
            throw new \Exception('Mauvaise valeur dans la variable d\'environnement TEST_DATASET_NUM');
        }

        return new $datasetClass;
    }
}