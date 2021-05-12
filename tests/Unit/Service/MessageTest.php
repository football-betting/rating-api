<?php declare(strict_types=1);

namespace App\Tests\Unit\Service;

use App\DataTransferObject\DataDataProvider;
use App\DataTransferObject\MatchDataProvider;
use App\Service\Message;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;

class MessageTest extends TestCase
{
    public function testSend(): void
    {
        $messageBusStub = new class implements MessageBusInterface {
            public \stdClass $message;

            public function dispatch($message, array $stamps = []): Envelope
            {
                $this->message = $message;
                return new Envelope(new \stdClass());
            }
        };

        $message = new Message($messageBusStub);

        $testDataProvider = $this->getTestDataProvider();

        $message->send($testDataProvider);

        $messageResponse = new MatchDataProvider();
        $messageResponse->fromArray(get_object_vars($messageBusStub->message));

        self::assertSame($messageResponse->getEvent(), $testDataProvider->getEvent());
        self::assertSame($messageResponse->getData()->getMatchId(), $testDataProvider->getData()->getMatchId());
        self::assertSame($messageResponse->getData()->getTeam1(), $testDataProvider->getData()->getTeam1());
        self::assertSame($messageResponse->getData()->getTeam2(), $testDataProvider->getData()->getTeam2());
        self::assertSame($messageResponse->getData()->getDrawOdd(), $testDataProvider->getData()->getDrawOdd());
        self::assertSame($messageResponse->getData()->getHomeTeamOdd(), $testDataProvider->getData()->getHomeTeamOdd());
        self::assertSame($messageResponse->getData()->getAwayTeamOdd(), $testDataProvider->getData()->getAwayTeamOdd());
    }

    /**
     * @return \App\DataTransferObject\MatchDataProvider
     */
    private function getTestDataProvider(): MatchDataProvider
    {
        return (new MatchDataProvider())
            ->setEvent('rating.api')
            ->setData(
                (new DataDataProvider())
                    ->setMatchId('FR-DE')
                    ->setTeam1('FR')
                    ->setTeam2('DE')
                    ->setDrawOdd('1.2')
                    ->setAwayTeamOdd('3.0')
                    ->setHomeTeamOdd('2.4')
            );
    }
}
