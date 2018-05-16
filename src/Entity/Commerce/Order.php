<?php

namespace GlobalPhp\Entities\Entity\Commerce;

use GlobalPhp\Entities\Entity\EntityTrait;
use GlobalPhp\Entities\Entity\AddressInterface;
use GlobalPhp\Entities\Entity\OrganizationInterface;

use GlobalPhp\Entities\ValueObject\Date;
use GlobalPhp\Entities\ValueObject\MonetaryValue;
use GlobalPhp\Entities\ValueObject\Status;

/**
 * Order Entity implementation
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 */
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
     * @var Status
     */
    private $status;

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

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(Date $date)
    {
        $this->date = $date;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(Status $status)
    {
        $this->status = $status;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(MonetaryValue $totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer(CustomerInterface $customer)
    {
        $this->customer = $customer;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation(OrganizationInterface $location)
    {
        $this->location = $location;
    }

    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(AddressInterface $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(AddressInterface $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    public function getShipments()
    {
        return $this->shipments;
    }

    public function setShipments(array $shipments)
    {
        $this->shipments = $shipments;
    }

    public function addShipment(ShipmentInterface $shipment)
    {
        $this->shipments[] = $shipment;
    }

    public function getTransactions()
    {
        return $this->transactions;
    }

    public function setTransactions(array $transactions)
    {
        $this->transactions = $transactions;
    }

    public function addTransaction(TransactionInterface $transaction)
    {
        $this->transactions[] = $transaction;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems(array $items)
    {
        $this->items = $items;
    }

    public function addItem(OrderItemInterface $item)
    {
        $this->items[] = $item;
    }

}
