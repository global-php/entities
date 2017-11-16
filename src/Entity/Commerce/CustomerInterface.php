<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\AddressInterface;
use GlobalPhp\Entities\Entity\EntityInterface;

use GlobalPhp\Entities\ValueObject\EmailAddress;
use GlobalPhp\Entities\ValueObject\PhoneNumber;

interface CustomerInterface extends EntityInterface
{

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName(string $name);

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
     * @return EmailAddress
     */
    public function getEmailAddress();

    /**
     * @param EmailAddress $emailAddress
     */
    public function setEmailAddress(EmailAddress $emailAddress);

}