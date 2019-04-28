<?php


namespace Philcross\GetAddress\Responses;


class ExpandedAddress
{
    /**
     * @var string[]
     */
    protected $formattedAddress;

    /**
     * @var string
     */
    protected $thoroughfare;

    /**
     * @var string
     */
    protected $building_name;

    /**
     * @var string
     */
    protected $sub_building_name;

    /**
     * @var string
     */
    protected $sub_building_number;

    /**
     * @var string
     */
    protected $building_number;

    /**
     * @var string
     */
    protected $line_1;

    /**
     * @var string
     */
    protected $line_2;

    /**
     * @var string
     */
    protected $line_3;

    /**
     * @var string
     */
    protected $line_4;

    /**
     * @var string
     */
    protected $locality;

    /**
     * @var string
     */
    protected $town_or_city;

    /**
     * @var string
     */
    protected $county;

    /**
     * @var string
     */
    protected $district;

    /**
     * @var string
     */
    protected $country;

    /**
     * @return string[]
     */
    public function getFormattedAddress()
    {
        return $this->formattedAddress;
    }

    /**
     * @return string
     */
    public function getThoroughfare()
    {
        return $this->thoroughfare;
    }

    /**
     * @return string
     */
    public function getBuildingName()
    {
        return $this->building_name;
    }

    /**
     * @return string
     */
    public function getSubBuildingName()
    {
        return $this->sub_building_name;
    }

    /**
     * @return string
     */
    public function getSubBuildingNumber()
    {
        return $this->sub_building_number;
    }

    /**
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->building_number;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
        return $this->line_1;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
        return $this->line_2;
    }

    /**
     * @return string
     */
    public function getLine3()
    {
        return $this->line_3;
    }

    /**
     * @return string
     */
    public function getLine4()
    {
        return $this->line_4;
    }

    /**
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @return string
     */
    public function getTownOrCity()
    {
        return $this->town_or_city;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param array $data
     */
    public function fillFromArray(array $data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}