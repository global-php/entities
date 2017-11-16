<?php

namespace GlobalPhp\Entities\Entity\EntityTrait;

use GlobalPhp\Entities\Entity\AddressInterface;
use GlobalPhp\Entities\ValueObject\EmailAddress;
use GlobalPhp\Entities\ValueObject\PhoneNumber;

trait PartyTrait
{
    use NamedTrait;

    /**
     * @var AddressInterface[]
     */
    private $addresses = [];

    /**
     * @var EmailAddress
     */
    private $emailAddress;

    /**
     * @var PhoneNumber
     */
    private $phoneNumber;

    /**
     * @return AddressInterface[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param AddressInterface[] $addresses
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @param AddressInterface $address
     */
    public function addAddress(AddressInterface $address)
    {
        $this->addresses[] = $address;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param PhoneNumber $phoneNumber
     */
    public function setPhoneNumber(PhoneNumber $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return EmailAddress
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param EmailAddress $emailAddress
     */
    public function setEmailAddress(EmailAddress $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

}
