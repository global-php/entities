<?php

namespace GlobalPhp\Entities\Entity;

use GlobalPhp\Entities\Entity\AddressInterface;
use GlobalPhp\Entities\ValueObject\EmailAddress;
use GlobalPhp\Entities\ValueObject\PhoneNumber;
use GlobalPhp\Entities\ValueObject\Url;

interface OrganizationInterface extends EntityInterface
{

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getIndustry();

    /**
     * @param string $industry
     */
    public function setIndustry($industry);

    /**
     * @return string
     */
    public function getEmployeesRange();

    /**
     * @param string $employeesRange
     */
    public function setEmployeesRange($employeesRange);

    /**
     * @return string
     */
    public function getChamberOfCommerce();

    /**
     * @param string $chamberOfCommerce
     */
    public function setChamberOfCommerce($chamberOfCommerce);

    /**
     * @return string
     */
    public function getCocRegistrationNumber();

    /**
     * @param string $cocRegistrationNumber
     */
    public function setCocRegistrationNumber($cocRegistrationNumber);

    /**
     * @return string
     */
    public function getVatNumber();

    /**
     * @param string $vatNumber
     */
    public function setVatNumber($vatNumber);

    /**
     * @return AddressInterface[]
     */
    public function getAddresses();

    /**
     * @param AddressInterface[] $addresses
     */
    public function setAddresses(array $addresses);

    /**
     * @param AddressInterface $address
     */
    public function addAddress(AddressInterface $address);

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
     * @return Url
     */
    public function getWebsite();

    /**
     * @param Url $website
     */
    public function setWebsite(Url $website);

    /**
     * @return EmailAddress
     */
    public function getEmailAddress();

    /**
     * @param EmailAddress $emailAddress
     */
    public function setEmailAddress(EmailAddress $emailAddress);

    /**
     * @return OrganizationInterface
     */
    public function getParentOrganization();

    /**
     * @param OrganizationInterface $parentOrganization
     */
    public function setParentOrganization(OrganizationInterface $parentOrganization);

    /**
     * @return OrganizationInterface[]
     */
    public function getSubsidiaryOrganizations();

    /**
     * @param OrganizationInterface[] $subsidiaryOrganizations
     */
    public function setSubsidiaryOrganizations(array $subsidiaryOrganizations);

    /**
     * @param OrganizationInterface $subsidiaryOrganization
     */
    public function addSubsidiaryOrganization(OrganizationInterface $subsidiaryOrganization);

}