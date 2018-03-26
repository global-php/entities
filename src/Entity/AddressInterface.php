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
    public function getName();

    /**
     * @param string $unit
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getUnit();

    /**
     * @param string $unit
     */
    public function setUnit($unit);

    /**
     * @return int
     */
    public function getFloor();

    /**
     * @param int $floor
     */
    public function setFloor($floor);

    /**
     * @return string
     */
    public function getBuilding();

    /**
     * @param string $building
     */
    public function setBuilding($building);

    /**
     * @return string
     */
    public function getStreet();

    /**
     * @param string $street
     */
    public function setStreet($street);

    /**
     * @return int
     */
    public function getHouseNumber();

    /**
     * @param int $houseNumber
     */
    public function setHouseNumber($houseNumber);

    /**
     * @return string
     */
    public function getHouseNumberAddition();

    /**
     * @param string $houseNumberAddition
     */
    public function setHouseNumberAddition($houseNumberAddition);

    /**
     * @return string[]
     */
    public function getAddressLines();

    /**
     * @param string[] $addressLines
     */
    public function setAddressLines(array $addressLines);

    /**
     * @param string $addressLine
     */
    public function addAddressLine($addressLine);

    /**
     * @return string
     */
    public function getDistrict();

    /**
     * @param string $district
     */
    public function setDistrict($district);

    /**
     * @return string
     */
    public function getPostalCode();

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string $city
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getRegion();

    /**
     * @param string $region
     */
    public function setRegion($region);

    /**
     * @return string
     */
    public function getProvince();

    /**
     * @param string $province
     */
    public function setProvince($province);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $state
     */
    public function setState($state);

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
    public function setContinent($continent);

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