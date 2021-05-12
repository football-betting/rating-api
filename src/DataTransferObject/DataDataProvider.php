<?php
declare(strict_types=1);
namespace App\DataTransferObject;

/**
 * Auto generated data provider
 */
final class DataDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $matchId;

    /** @var string */
    protected $team1;

    /** @var string */
    protected $team2;

    /** @var string */
    protected $homeTeamOdd;

    /** @var string */
    protected $awayTeamOdd;

    /** @var string */
    protected $drawOdd;


    /**
     * @return string
     */
    public function getMatchId(): string
    {
        return $this->matchId;
    }


    /**
     * @param string $matchId
     * @return DataDataProvider
     */
    public function setMatchId(string $matchId)
    {
        $this->matchId = $matchId;

        return $this;
    }


    /**
     * @return DataDataProvider
     */
    public function unsetMatchId()
    {
        $this->matchId = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasMatchId()
    {
        return ($this->matchId !== null && $this->matchId !== []);
    }


    /**
     * @return string
     */
    public function getTeam1(): string
    {
        return $this->team1;
    }


    /**
     * @param string $team1
     * @return DataDataProvider
     */
    public function setTeam1(string $team1)
    {
        $this->team1 = $team1;

        return $this;
    }


    /**
     * @return DataDataProvider
     */
    public function unsetTeam1()
    {
        $this->team1 = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasTeam1()
    {
        return ($this->team1 !== null && $this->team1 !== []);
    }


    /**
     * @return string
     */
    public function getTeam2(): string
    {
        return $this->team2;
    }


    /**
     * @param string $team2
     * @return DataDataProvider
     */
    public function setTeam2(string $team2)
    {
        $this->team2 = $team2;

        return $this;
    }


    /**
     * @return DataDataProvider
     */
    public function unsetTeam2()
    {
        $this->team2 = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasTeam2()
    {
        return ($this->team2 !== null && $this->team2 !== []);
    }


    /**
     * @return string
     */
    public function getHomeTeamOdd(): string
    {
        return $this->homeTeamOdd;
    }


    /**
     * @param string $homeTeamOdd
     * @return DataDataProvider
     */
    public function setHomeTeamOdd(string $homeTeamOdd)
    {
        $this->homeTeamOdd = $homeTeamOdd;

        return $this;
    }


    /**
     * @return DataDataProvider
     */
    public function unsetHomeTeamOdd()
    {
        $this->homeTeamOdd = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasHomeTeamOdd()
    {
        return ($this->homeTeamOdd !== null && $this->homeTeamOdd !== []);
    }


    /**
     * @return string
     */
    public function getAwayTeamOdd(): string
    {
        return $this->awayTeamOdd;
    }


    /**
     * @param string $awayTeamOdd
     * @return DataDataProvider
     */
    public function setAwayTeamOdd(string $awayTeamOdd)
    {
        $this->awayTeamOdd = $awayTeamOdd;

        return $this;
    }


    /**
     * @return DataDataProvider
     */
    public function unsetAwayTeamOdd()
    {
        $this->awayTeamOdd = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasAwayTeamOdd()
    {
        return ($this->awayTeamOdd !== null && $this->awayTeamOdd !== []);
    }


    /**
     * @return string
     */
    public function getDrawOdd(): string
    {
        return $this->drawOdd;
    }


    /**
     * @param string $drawOdd
     * @return DataDataProvider
     */
    public function setDrawOdd(string $drawOdd)
    {
        $this->drawOdd = $drawOdd;

        return $this;
    }


    /**
     * @return DataDataProvider
     */
    public function unsetDrawOdd()
    {
        $this->drawOdd = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasDrawOdd()
    {
        return ($this->drawOdd !== null && $this->drawOdd !== []);
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'matchId' =>
          array (
            'name' => 'matchId',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'team1' =>
          array (
            'name' => 'team1',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'team2' =>
          array (
            'name' => 'team2',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'homeTeamOdd' =>
          array (
            'name' => 'homeTeamOdd',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'awayTeamOdd' =>
          array (
            'name' => 'awayTeamOdd',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'drawOdd' =>
          array (
            'name' => 'drawOdd',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
        );
    }
}
