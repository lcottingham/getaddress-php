<?php


namespace Philcross\GetAddress\Responses;


class ExpandedAddressResponse
{
    /**
     * Latitude
     *
     * @var float
     */
    protected $latitude;

    /**
     * Longitude
     *
     * @var float
     */
    protected $longitude;

    /**
     * Postcode
     *
     * @var string
     */
    protected $postcode;

    /**
     * @var ExpandedAddress[]
     */
    protected $expandedAddresses;

    /**
     * ExpandedAddressResponse constructor.
     *
     * @param float $latitude
     * @param float $longitude
     * @param string $postcode
     * @param ExpandedAddress[] $expandedAddresses
     */
    public function __construct($latitude, $longitude, $postcode, array $expandedAddresses)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->postcode = $postcode;
        $this->expandedAddresses = $expandedAddresses;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @return ExpandedAddress[]
     */
    public function getExpandedAddresses()
    {
        return $this->expandedAddresses;
    }
}