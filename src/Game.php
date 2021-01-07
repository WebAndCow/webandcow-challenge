<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

final class Game
{
    private const BASE_URL = 'https://code-challenge.webandcow.com/';
    private const LAUNCH_URL = 'games/launch/%1$s/%2$s'; // %1$s : key, %2$s : codeEngin
    private const INIT_URL = 'games/init/%s'; // %s : token
    private const PUSH_URL = 'games/push/%1$s/%2$s'; // %1$s : token, %2$s : $reponse in base64
    private const TOKEN_URL = 'games/story/%1$s';
    
    private $token;

    public function resolveWith(SolutionInterface $solution): Result
    {
        return $this->push($solution->apply($this->getDatasGame()));
    }

    private function getDatasGame(): array
    {
        $data = $this->requestApi(sprintf(self::LAUNCH_URL, $_ENV['WEBANDCOW_API_KEY'], $_ENV['WEBANDCOW_CHALLENGE_CODE']));
        $this->token = $data['token'];

        $data = $this->requestApi(sprintf(self::INIT_URL, $this->token));

        return $data['game'];
    }

    private function push(Response $response): Result
    {
        $dataPlayer = base64_encode(json_encode($response));
        $data = $this->requestApi(sprintf(self::PUSH_URL, $this->token, $dataPlayer));
        
        $tokenUrl = sprintf(self::BASE_URL . self::TOKEN_URL, $this->token);

        return new Result($data, $tokenUrl);
    }

    private function requestApi(string $url): array
    {
        $data = file_get_contents(self::BASE_URL . $url);
        $data = json_decode($data, true);

        if (!$data['success']) {
            throw new \Exception('Error when contacting API -- ' . print_r($data['errors'], true));
        }

        assert(isset($data['data']));

        return $data['data'];
    }
}
