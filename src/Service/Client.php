<?php declare(strict_types=1);

namespace App\Service;

class Client implements ClientInterface
{
    private string $crawlerUriLive;

    private string $crawlerUri;

    public function __construct(
        string $crawlerUri,
        string $crawlerUriLive
    )
    {
        $this->crawlerUri = $crawlerUri;
        $this->crawlerUriLive = $crawlerUriLive;
    }

    /**
     * @param bool $live
     *
     * @return array
     */
    public function __invoke(bool $live): array
    {
        $uri = $live ? $this->crawlerUriLive : $this->crawlerUri;

        $context = stream_context_create($this->getContextOpts());

        $file = file_get_contents($uri, false, $context);

        $htmlFile = new \DOMDocument();
        @$htmlFile->loadHTML($file);
        $xpath = new \DOMXPath($htmlFile);
        $nodes = $xpath->query('//td[@class="bets"]//table');

        $matches = [];
        /** @var \DOMElement $node */
        foreach ($nodes as $key => $node) {

            /** @var \DOMElement $item */
            foreach ($node->getElementsByTagName('tr')->getIterator() as $item) {

                /**
                 * @var int $subKey
                 * @var \DOMNode $odd
                 */
                foreach ($item->getElementsByTagName('strong')->getIterator() as $subKey => $odd) {
                    $property = match ($subKey) {
                        0 => 'homeTeamOdd',
                        1 => 'draw',
                        2 => 'awayTeamOdd'
                    };
                    $matches['matches'][$key][$property] = $odd->nodeValue;
                }

                try {
                    $matches['matches'][$key]['homeTeam'] = $item->getElementsByTagName('span')->item(0)->nodeValue;
                    $matches['matches'][$key]['awayTeam'] = $item->getElementsByTagName('span')->item(4)->nodeValue;
                } catch (\Exception) {
                    unset($matches['matches'][$key]);
                }
            }
        }

        return $matches;
    }

    /**
     * @return \string[][]
     */
    private function getContextOpts(): array
    {
        return [
            'http' => [
                'header' => "User-Agent:MyAgent/1.0\r\n"
            ]
        ];
    }
}
