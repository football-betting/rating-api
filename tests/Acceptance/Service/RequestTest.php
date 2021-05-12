<?php declare(strict_types=1);

namespace App\Tests\Acceptance\Service;

use App\Service\Client;
use App\Service\Request;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpClient\MockHttpClient;

class RequestTest extends KernelTestCase
{
    private const TOTAL_MATCHES_GROUP_STAGE = 36;
    private const COMPETITION_NAME = 'European Championship';

    public function testSuccessfulWithoutLiveFlag(): void
    {
        self::bootKernel();

        /** @var Request $request */
        $request = self::$container->get(Request::class);

        $responseMatchesDataProvider = $request(false);

        self::assertNotNull($responseMatchesDataProvider);
    }

    /*
    public function testWithLiveFlag()
    {
        self::bootKernel();

        /** @var Request $request */
        //$request = self::$container->get(Request::class);

        //$responseMatchesDataProvider = $request(true);

        //@todo live flag
        //self::assertSame(self::COMPETITION_NAME, $competitionDataProvider->getCompetition()->getName());
    //}


    public function testWithWrongUrlAndToken(): void
    {
        $client = new Client( '', '');
        $request = new Request($client);

        $this->expectException(\ValueError::class);

        $request(false);
    }
}
