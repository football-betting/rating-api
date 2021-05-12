<?php
declare(strict_types=1);
namespace App\DataTransferObject;

/**
 * Auto generated data provider
 */
final class ResponseMatchDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var string */
    protected $homeTeamOdd;

    /** @var string */
    protected $draw;

    /** @var string */
    protected $awayTeamOdd;

    /** @var string */
    protected $homeTeam;

    /** @var string */
    protected $awayTeam;


    /**
     * @return string
     */
    public function getHomeTeamOdd(): string
    {
        return $this->homeTeamOdd;
    }


    /**
     * @param string $homeTeamOdd
     * @return ResponseMatchDataProvider
     */
    public function setHomeTeamOdd(string $homeTeamOdd)
    {
        $this->homeTeamOdd = $homeTeamOdd;

        return $this;
    }


    /**
     * @return ResponseMatchDataProvider
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
    public function getDraw(): string
    {
        return $this->draw;
    }


    /**
     * @param string $draw
     * @return ResponseMatchDataProvider
     */
    public function setDraw(string $draw)
    {
        $this->draw = $draw;

        return $this;
    }


    /**
     * @return ResponseMatchDataProvider
     */
    public function unsetDraw()
    {
        $this->draw = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasDraw()
    {
        return ($this->draw !== null && $this->draw !== []);
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
     * @return ResponseMatchDataProvider
     */
    public function setAwayTeamOdd(string $awayTeamOdd)
    {
        $this->awayTeamOdd = $awayTeamOdd;

        return $this;
    }


    /**
     * @return ResponseMatchDataProvider
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
    public function getHomeTeam(): string
    {
        return $this->homeTeam;
    }


    /**
     * @param string $homeTeam
     * @return ResponseMatchDataProvider
     */
    public function setHomeTeam(string $homeTeam)
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }


    /**
     * @return ResponseMatchDataProvider
     */
    public function unsetHomeTeam()
    {
        $this->homeTeam = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasHomeTeam()
    {
        return ($this->homeTeam !== null && $this->homeTeam !== []);
    }


    /**
     * @return string
     */
    public function getAwayTeam(): string
    {
        return $this->awayTeam;
    }


    /**
     * @param string $awayTeam
     * @return ResponseMatchDataProvider
     */
    public function setAwayTeam(string $awayTeam)
    {
        $this->awayTeam = $awayTeam;

        return $this;
    }


    /**
     * @return ResponseMatchDataProvider
     */
    public function unsetAwayTeam()
    {
        $this->awayTeam = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasAwayTeam()
    {
        return ($this->awayTeam !== null && $this->awayTeam !== []);
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
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
          'draw' =>
          array (
            'name' => 'draw',
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
          'homeTeam' =>
          array (
            'name' => 'homeTeam',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'awayTeam' =>
          array (
            'name' => 'awayTeam',
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
