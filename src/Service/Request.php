<?php declare(strict_types=1);

namespace App\Service;

use App\DataTransferObject\ResponseMatchesDataProvider;

class Request
{
    private ClientInterface $client;

    /**
     * @param \App\Service\ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param bool $live
     *
     * @return \App\DataTransferObject\ResponseMatchesDataProvider
     */
    public function __invoke(bool $live): ResponseMatchesDataProvider
    {
        $responseMatches = ($this->client)($live);

        $responseMatchesDataProvider = new ResponseMatchesDataProvider();
        $responseMatchesDataProvider->fromArray($responseMatches);

        return $responseMatchesDataProvider;
    }
}
