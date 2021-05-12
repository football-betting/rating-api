<?php declare(strict_types=1);

namespace App\Service;

use App\DataTransferObject\DataDataProvider;
use App\DataTransferObject\MatchDataProvider;
use App\DataTransferObject\ResponseMatchDataProvider;
use App\IsoCodeConfig;
use DateTime;
use RuntimeException;

class MatchMapper
{
    private const EVENT = 'rating.api';
    private const HYPHEN = '-';

    /**
     * @param \App\DataTransferObject\ResponseMatchDataProvider $responseMatchDataProvider
     *
     * @return \App\DataTransferObject\MatchDataProvider
     */
    public function __invoke(ResponseMatchDataProvider $responseMatchDataProvider): MatchDataProvider
    {
        $matchDataProvider = new MatchDataProvider();
        $dataDataProvider = new DataDataProvider();

        $dataDataProvider
            ->setMatchId($this->getMatchId($responseMatchDataProvider))
            ->setTeam1($this->getCountryIsCode($responseMatchDataProvider->getHomeTeam()))
            ->setTeam2($this->getCountryIsCode($responseMatchDataProvider->getAwayTeam()))
            ->setDrawOdd($responseMatchDataProvider->getDraw())
            ->setHomeTeamOdd($responseMatchDataProvider->getHomeTeamOdd())
            ->setAwayTeamOdd($responseMatchDataProvider->getAwayTeamOdd());

        $matchDataProvider
            ->setEvent(self::EVENT)
            ->setData(
                $dataDataProvider
            );

        return $matchDataProvider;
    }

    /**
     * @param \App\DataTransferObject\ResponseMatchDataProvider $responseMatchDataProvider
     *
     * @return string
     */
    private function getMatchId(ResponseMatchDataProvider $responseMatchDataProvider): string
    {
        return
            $this->getCountryIsCode($responseMatchDataProvider->getHomeTeam()) .
            self::HYPHEN .
            $this->getCountryIsCode($responseMatchDataProvider->getAwayTeam());
    }

    /**
     * @param string $countryName
     *
     * @return string
     */
    private function getCountryIsCode(string $countryName): string
    {
        if (isset(IsoCodeConfig::ISO_CODES[$countryName])) {
            return IsoCodeConfig::ISO_CODES[$countryName];
        }

        throw new RuntimeException(sprintf('ISO Code not found for countryName: %s', $countryName));
    }
}
