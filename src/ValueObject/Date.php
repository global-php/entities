<?php

namespace GlobalPhp\Entities\ValueObject;

/**
 * Date value object
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 * @see \DateTimeImmutable
 * @see http://php.net/datetimeimmutable
 */
class Date implements ValueObjectInterface
{

    /**#@+
     * DateTime format constants
     * @var string
     */
    const SQL_DATETIME = 'Y-m-d H:i:s';
    const ISO8601 = \DateTime::ISO8601;
    /**#@-*/

    /**
     * @var \DateTimeImmutable
     */
    private $dateTime;

    /**
     * ValueObjectAbstract constructor
     *
     * @param \DateTimeImmutable|\DateTime|\DateTimeInterface|string|int $value
     */
    public function __construct($value)
    {
        $this->dateTime = static::createDateTimeImmutableFromMixed($value);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->getIso8601();
    }

    /**
     * @param \DateTimeImmutable|\DateTime|\DateTimeInterface|string|int $value
     * @return static
     */
    public function withValue($value)
    {
        $newDateObject = clone $this;
        $newDateObject->dateTime = static::createDateTimeImmutableFromMixed($value);
        return $newDateObject;
    }

    /**
     * @param \DateTimeImmutable|\DateTime|\DateTimeInterface|string|int $value
     * @return \DateTimeImmutable
     */
    private static function createDateTimeImmutableFromMixed($value)
    {
        /** @var \DateTimeInterface $value */
        if ($value instanceof \DateTimeImmutable) {
            return $value;
        }
        if ($value instanceof \DateTime) {
            return \DateTimeImmutable::createFromMutable($value);
        }
        if ($value instanceof \DateTimeInterface) {
            return new \DateTimeImmutable($value->format(static::ISO8601));
        }
        /** @var string|int $value */
        return new \DateTimeImmutable($value);
    }

    /**
     * @return string
     */
    public function getIso8601()
    {
        return $this->dateTime->format(static::ISO8601);
    }

    /**
     * @param string $iso8601
     * @return static
     */
    public function withIso8601($iso8601)
    {
        $newDateObject = clone $this;
        $newDateObject->dateTime = \DateTimeImmutable::createFromFormat(\DateTime::ISO8601, $iso8601);
        return $newDateObject;
    }

    /**
     * @return string
     */
    public function getSqlDateTime()
    {
        return $this->dateTime->format(static::SQL_DATETIME);
    }

    /**
     * @param string $sqlDatetime
     * @return static
     */
    public function withSqlDateTime($sqlDatetime)
    {
        $newDateObject = clone $this;
        $newDateObject->dateTime = \DateTimeImmutable::createFromFormat(static::SQL_DATETIME, $sqlDatetime);
        return $newDateObject;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->dateTime->getTimestamp();
    }

    /**
     * @param int $timestamp
     * @return static
     */
    public function withTimestamp($timestamp)
    {
        $newDateObject = clone $this;
        $newDateObject->dateTime = $newDateObject->dateTime->setTimestamp($timestamp);
        return $newDateObject;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }

}
