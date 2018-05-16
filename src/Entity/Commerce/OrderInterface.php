<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\AddressInterface;
use GlobalPhp\Entities\Entity\EntityInterface;
use GlobalPhp\Entities\Entity\OrganizationInterface;

use GlobalPhp\Entities\ValueObject\Date;
use GlobalPhp\Entities\ValueObject\MonetaryValue;
use GlobalPhp\Entities\ValueObject\Status;

/**
 * Order Entity interface
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 */
interface OrderInterface extends EntityInterface
{

    /**
     * @return string
     */
    public function getNumber();

    /**
     * @param string $number
     */
    public function setNumber($number);

    /**
     * @return Date
     */
    public function getDate();

    /**
     * @param Date $date
     */
    public function setDate(Date $date);

    /**
     * @return Status
     */
    public function getStatus();

    /**
     * @param Status $status
     */
    public function setStatus(Status $status);

    /**
     * @return MonetaryValue
     */
    public function getTotalAmount();

    /**
     * @param MonetaryValue $totalAmount
     */
    public function setTotalAmount(MonetaryValue $totalAmount);

    /**
     * @return CustomerInterface
     */
    public function getCustomer();

    /**
     * @param CustomerInterface $customer
     */
    public function setCustomer(CustomerInterface $customer);

    /**
     * @return OrganizationInterface
     */
    public function getLocation();

    /**
     * @param OrganizationInterface $location
     */
    public function setLocation(OrganizationInterface $location);

    /**
     * @return AddressInterface
     */
    public function getBillingAddress();

    /**
     * @param AddressInterface $billingAddress
     */
    public function setBillingAddress(AddressInterface $billingAddress);

    /**
     * @return AddressInterface
     */
    public function getShippingAddress();

    /**
     * @param AddressInterface $shippingAddress
     */
    public function setShippingAddress(AddressInterface $shippingAddress);

    /**
     * @return ShipmentInterface[]
     */
    public function getShipments();

    /**
     * @param ShipmentInterface[] $shipments
     */
    public function setShipments(array $shipments);

    /**
     * @param ShipmentInterface $shipment
     */
    public function addShipment(ShipmentInterface $shipment);

    /**
     * @return TransactionInterface[]
     */
    public function getTransactions();

    /**
     * @param TransactionInterface[] $transactions
     */
    public function setTransactions(array $transactions);

    /**
     * @param TransactionInterface $transaction
     */
    public function addTransaction(TransactionInterface $transaction);

    /**
     * @return OrderItemInterface[]
     */
    public function getItems();

    /**
     * @param OrderItemInterface[] $items
     */
    public function setItems(array $items);

    /**
     * @param OrderItemInterface $item
     */
    public function addItem(OrderItemInterface $item);

}