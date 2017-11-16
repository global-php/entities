<?php

namespace GlobalPhp\Entities\Entity;

use GlobalPhp\Entities\ValueObject\Country;
use GlobalPhp\Entities\ValueObject\GeoLocation;
use GlobalPhp\Entities\ValueObject\PhoneNumber;

class Address implements AddressInterface
{
    use EntityTrait;

    /**
     * @var string
     */
    private $unit;

    /**
     * @var integer
     */
    private $floor;

    /**
     * @var string
     */
    private $building;

    /**
     * @var string
     */
    private $street;

    /**
     * @var integer
     */
    private $houseNumber;

    /**
     * @var string
     */
    private $houseNumberAddition;

    /**
     * @var string
     */
    private $district;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $province;

    /**
     * @var string
     */
    private $state;

    /**
     * @var Country
     */
    private $country;

    /**
     * @var string
     */
    private $continent;

    /**
     * @var PhoneNumber
     */
    private $phoneNumber;

    /**
     * @var PhoneNumber
     */
    private $faxNumber;

    /**
     * @var GeoLocation
     */
    private $geoLocation;

    public function getUnit()
    {
        return $this->unit;
    }

    public function setUnit(string $unit)
    {
        $this->unit = $unit;
    }

    public function getFloor()
    {
        return $this->floor;
    }

    public function setFloor(int $floor)
    {
        $this->floor = $floor;
    }

    public function getBuilding()
    {
        return $this->building;
    }

    public function setBuilding(string $building)
    {
        $this->building = $building;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(int $houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    public function getHouseNumberAddition()
    {
        return $this->houseNumberAddition;
    }

    public function setHouseNumberAddition(string $houseNumberAddition)
    {
        $this->houseNumberAddition = $houseNumberAddition;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function setDistrict(string $district)
    {
        $this->district = $district;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion(string $region)
    {
        $this->region = $region;
    }

    public function getProvince()
    {
        return $this->province;
    }

    public function setProvince(string $province)
    {
        $this->province = $province;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(string $state)
    {
        $this->state = $state;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(Country $country)
    {
        $this->country = $country;
    }

    public function getContinent()
    {
        return $this->continent;
    }

    public function setContinent(string $continent)
    {
        $this->continent = $continent;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(PhoneNumber $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(PhoneNumber $faxNumber)
    {
        $this->faxNumber = $faxNumber;
    }

    public function getGeoLocation()
    {
        return $this->geoLocation;
    }

    public function setGeoLocation(GeoLocation $geoLocation)
    {
        $this->geoLocation = $geoLocation;
    }

}
