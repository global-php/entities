<?php

namespace GlobalPhp\Entities\Entity;

use GlobalPhp\Entities\ValueObject\Country;
use GlobalPhp\Entities\ValueObject\GeoLocation;
use GlobalPhp\Entities\ValueObject\PhoneNumber;

interface AddressInterface extends EntityInterface
{

    /**
     * @return string
     */
    public function getUnit();

    /**
     * @param string $unit
     */
    public function setUnit(string $unit);

    /**
     * @return int
     */
    public function getFloor();

    /**
     * @param int $floor
     */
    public function setFloor(int $floor);

    /**
     * @return string
     */
    public function getBuilding();

    /**
     * @param string $building
     */
    public function setBuilding(string $building);

    /**
     * @return string
     */
    public function getStreet();

    /**
     * @param string $street
     */
    public function setStreet(string $street);

    /**
     * @return int
     */
    public function getHouseNumber();

    /**
     * @param int $houseNumber
     */
    public function setHouseNumber(int $houseNumber);

    /**
     * @return string
     */
    public function getHouseNumberAddition();

    /**
     * @param string $houseNumberAddition
     */
    public function setHouseNumberAddition(string $houseNumberAddition);

    /**
     * @return string
     */
    public function getDistrict();

    /**
     * @param string $district
     */
    public function setDistrict(string $district);

    /**
     * @return string
     */
    public function getPostalCode();

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string $city
     */
    public function setCity(string $city);

    /**
     * @return string
     */
    public function getRegion();

    /**
     * @param string $region
     */
    public function setRegion(string $region);

    /**
     * @return string
     */
    public function getProvince();

    /**
     * @param string $province
     */
    public function setProvince(string $province);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $state
     */
    public function setState(string $state);

    /**
     * @return Country
     */
    public function getCountry();

    /**
     * @param Country $country
     */
    public function setCountry(Country $country);

    /**
     * @return string
     */
    public function getContinent();

    /**
     * @param string $continent
     */
    public function setContinent(string $continent);

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber();

    /**
     * @param PhoneNumber $phoneNumber
     */
    public function setPhoneNumber(PhoneNumber $phoneNumber);

    /**
     * @return PhoneNumber
     */
    public function getFaxNumber();

    /**
     * @param PhoneNumber $faxNumber
     */
    public function setFaxNumber(PhoneNumber $faxNumber);

    /**
     * @return GeoLocation
     */
    public function getGeoLocation();

    /**
     * @param GeoLocation $geoLocation
     */
    public function setGeoLocation(GeoLocation $geoLocation);

}