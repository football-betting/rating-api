<?php declare(strict_types=1);

namespace App\Tests\Unit\Service;

use App\DataTransferObject\MatchDataProvider;
use App\DataTransferObject\ResponseMatchDataProvider;
use App\Service\MatchMapper;
use PHPUnit\Framework\TestCase;

class MatchMapperTest extends TestCase
{
    /**
     * @dataProvider provideDataProviders
     *
     * @param \App\DataTransferObject\MatchDataProvider $expectedTestMatchDataProvider
     * @param \App\DataTransferObject\ResponseMatchDataProvider $testResponseMatchDataProvider
     */
    public function testWithoutMissingProperty(
        MatchDataProvider $expectedTestMatchDataProvider,
        ResponseMatchDataProvider $testResponseMatchDataProvider
    ): void
    {
        $matchMapper = new MatchMapper();

        $matchDataProvider = $matchMapper($testResponseMatchDataProvider);

        self::assertSame($expectedTestMatchDataProvider->getEvent(), $matchDataProvider->getEvent());
        self::assertSame($expectedTestMatchDataProvider->getData()->getMatchId(), $matchDataProvider->getData()->getMatchId());
        self::assertSame($expectedTestMatchDataProvider->getData()->getTeam1(), $matchDataProvider->getData()->getTeam1());
        self::assertSame($expectedTestMatchDataProvider->getData()->getTeam2(), $matchDataProvider->getData()->getTeam2());
        self::assertSame($expectedTestMatchDataProvider->getData()->getDrawOdd(), $matchDataProvider->getData()->getDrawOdd());
        self::assertSame($expectedTestMatchDataProvider->getData()->getHomeTeamOdd(), $matchDataProvider->getData()->getHomeTeamOdd());
        self::assertSame($expectedTestMatchDataProvider->getData()->getAwayTeamOdd(), $matchDataProvider->getData()->getAwayTeamOdd());
    }

    /**
     * @dataProvider provideDataProviders
     *
     * @param \App\DataTransferObject\MatchDataProvider $expectedTestMatchDataProvider
     * @param \App\DataTransferObject\ResponseMatchDataProvider $testResponseMatchDataProvider
     */
    public function testWithNotExistingCountry(
        MatchDataProvider $expectedTestMatchDataProvider,
        ResponseMatchDataProvider $testResponseMatchDataProvider
    ): void
    {
        $matchMapper = new MatchMapper();
        $testResponseMatchDataProvider->setHomeTeam('TEST123');

        $this->expectException(\RuntimeException::class);
        $matchMapper($testResponseMatchDataProvider);
    }

    /**
     * @return array
     */
    public function provideDataProviders(): array
    {
        $matchDataProvider = new MatchDataProvider();
        $matchDataProvider->fromArray(
            [
                'event' => 'rating.api',
                'data' => [
                    'matchId' => 'FR-DE',
                    'team1' => 'FR',
                    'team2' => 'DE',
                    'drawOdd' => '1.2',
                    'homeTeamOdd' => '3.0',
                    'awayTeamOdd' => '2.4'
                ]
            ]
        );

        $responseMatchDataProvider = new ResponseMatchDataProvider();
        $responseMatchDataProvider->fromArray(
            [
                'homeTeam' => 'Frankreich',
                'awayTeam' => 'Deutschland',
                'homeTeamOdd' => '3.0',
                'awayTeamOdd' => '2.4',
                'draw' => '1.2'
            ]
        );

        return [
            [
                'expectedTestMatchDataProvider' => $matchDataProvider,
                'testResponseMatchDataProvider' => $responseMatchDataProvider
            ]
        ];
    }
}
