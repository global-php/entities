<?php

namespace GlobalPhp\Entities\Entity;

use GlobalPhp\Entities\Entity\EntityTrait\PartyTrait;

use GlobalPhp\Entities\ValueObject\PhoneNumber;
use GlobalPhp\Entities\ValueObject\Url;

class Organization implements OrganizationInterface
{
    use EntityTrait, PartyTrait;

    /**
     * @var string
     */
    private $industry;

    /**
     * @var string
     */
    private $employeesRange;

    /**
     * @var string
     */
    private $chamberOfCommerce;

    /**
     * @var string
     */
    private $cocRegistrationNumber;

    /**
     * @var string
     */
    private $vatNumber;

    /**
     * @var PhoneNumber
     */
    private $faxNumber;

    /**
     * @var Url
     */
    private $website;

    /**
     * @var OrganizationInterface
     */
    private $parentOrganization;

    /**
     * @var OrganizationInterface[]
     */
    private $subsidiaryOrganizations = [];

    public function getIndustry()
    {
        return $this->industry;
    }

    public function setIndustry(string $industry)
    {
        $this->industry = $industry;
    }

    public function getEmployeesRange()
    {
        return $this->employeesRange;
    }

    public function setEmployeesRange(string $employeesRange)
    {
        $this->employeesRange = $employeesRange;
    }

    public function getChamberOfCommerce()
    {
        return $this->chamberOfCommerce;
    }

    public function setChamberOfCommerce(string $chamberOfCommerce)
    {
        $this->chamberOfCommerce = $chamberOfCommerce;
    }

    public function getCocRegistrationNumber()
    {
        return $this->cocRegistrationNumber;
    }

    public function setCocRegistrationNumber(string $cocRegistrationNumber)
    {
        $this->cocRegistrationNumber = $cocRegistrationNumber;
    }

    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    public function setVatNumber(string $vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(PhoneNumber $faxNumber)
    {
        $this->faxNumber = $faxNumber;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite(Url $website)
    {
        $this->website = $website;
    }

    public function getParentOrganization()
    {
        return $this->parentOrganization;
    }

    public function setParentOrganization(OrganizationInterface $parentOrganization)
    {
        $this->parentOrganization = $parentOrganization;
    }

    public function getSubsidiaryOrganizations()
    {
        return $this->subsidiaryOrganizations;
    }

    public function setSubsidiaryOrganizations(array $subsidiaryOrganizations)
    {
        $this->subsidiaryOrganizations = $subsidiaryOrganizations;
    }

    public function addSubsidiaryOrganization(OrganizationInterface $subsidiaryOrganization)
    {
        $this->subsidiaryOrganizations[] = $subsidiaryOrganization;
    }

}