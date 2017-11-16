<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityTrait;
use GlobalPhp\Entities\Entity\AddressInterface;
use GlobalPhp\Entities\Entity\OrganizationInterface;
use GlobalPhp\Entities\ValueObject\Date;
use GlobalPhp\Entities\ValueObject\MonetaryValue;

class Order implements OrderInterface
{
    use EntityTrait;

    /**
     * @var string
     */
    private $number;

    /**
     * @var Date
     */
    private $date;

    /**
     * @var MonetaryValue
     */
    private $totalAmount;

    /**
     * @var CustomerInterface
     */
    private $customer;

    /**
     * @var OrganizationInterface
     */
    private $location;

    /**
     * @var AddressInterface
     */
    private $billingAddress;

    /**
     * @var AddressInterface
     */
    private $shippingAddress;

    /**
     * @var ShipmentInterface[]
     */
    private $shipments;

    /**
     * @var TransactionInterface[]
     */
    private $transactions;

    /**
     * @var OrderItemInterface[]
     */
    private $items;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
    }

    /**
     * @return Date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Date $date
     */
    public function setDate(Date $date)
    {
        $this->date = $date;
    }

    /**
     * @return MonetaryValue
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param MonetaryValue $totalAmount
     */
    public function setTotalAmount(MonetaryValue $totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return CustomerInterface
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param CustomerInterface $customer
     */
    public function setCustomer(CustomerInterface $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return OrganizationInterface
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param OrganizationInterface $location
     */
    public function setLocation(OrganizationInterface $location)
    {
        $this->location = $location;
    }

    /**
     * @return AddressInterface
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param AddressInterface $billingAddress
     */
    public function setBillingAddress(AddressInterface $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return AddressInterface
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param AddressInterface $shippingAddress
     */
    public function setShippingAddress(AddressInterface $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return ShipmentInterface[]
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * @param ShipmentInterface[] $shipments
     */
    public function setShipments(array $shipments)
    {
        $this->shipments = $shipments;
    }

    /**
     * @param ShipmentInterface $shipment
     */
    public function addShipment(ShipmentInterface $shipment)
    {
        $this->shipments[] = $shipment;
    }

    /**
     * @return TransactionInterface[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param TransactionInterface[] $transactions
     */
    public function setTransactions(array $transactions)
    {
        $this->transactions = $transactions;
    }

    /**
     * @param TransactionInterface $transaction
     */
    public function addTransaction(TransactionInterface $transaction)
    {
        $this->transactions[] = $transaction;
    }

    /**
     * @return OrderItemInterface[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param OrderItemInterface[] $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    /**
     * @param OrderItemInterface $item
     */
    public function addItem(OrderItemInterface $item)
    {
        $this->items[] = $item;
    }

}
