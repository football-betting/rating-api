<?php
declare(strict_types=1);
namespace App\DataTransferObject;

/**
 * Auto generated data provider
 */
final class ResponseMatchesDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var \App\DataTransferObject\ResponseMatchDataProvider[] */
    protected $matches = [];


    /**
     * @return \App\DataTransferObject\ResponseMatchDataProvider[]
     */
    public function getMatches(): array
    {
        return $this->matches;
    }


    /**
     * @param \App\DataTransferObject\ResponseMatchDataProvider[] $matches
     * @return ResponseMatchesDataProvider
     */
    public function setMatches(array $matches)
    {
        $this->matches = $matches;

        return $this;
    }


    /**
     * @return ResponseMatchesDataProvider
     */
    public function unsetMatches()
    {
        $this->matches = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasMatches()
    {
        return ($this->matches !== null && $this->matches !== []);
    }


    /**
     * @param \App\DataTransferObject\ResponseMatchDataProvider $ResponseMatch
     * @return ResponseMatchesDataProvider
     */
    public function addResponseMatch(ResponseMatchDataProvider $ResponseMatch)
    {
        $this->matches[] = $ResponseMatch; return $this;
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'matches' =>
          array (
            'name' => 'matches',
            'allownull' => false,
            'default' => '',
            'type' => '\\App\\DataTransferObject\\ResponseMatchDataProvider[]',
            'is_collection' => true,
            'is_dataprovider' => false,
            'isCamelCase' => false,
            'singleton' => 'ResponseMatch',
            'singleton_type' => '\\App\\DataTransferObject\\ResponseMatchDataProvider',
          ),
        );
    }
}
