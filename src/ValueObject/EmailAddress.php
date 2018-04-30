<?php

namespace GlobalPhp\Entities\ValueObject;

/**
 * Email Address Value Object
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 */
class EmailAddress implements ValueObjectInterface
{
    use ValueObjectTrait;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $localPart = '';

    /**
     * @var string
     */
    private $domain = '';

    /**
     * Email Address Value Object constructor
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->extractParts($value);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->combineParts();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return static
     */
    public function withName($name)
    {
        $newEmailAddress = clone $this;
        $newEmailAddress->name = $name;
        return $newEmailAddress;
    }

    /**
     * @return string
     */
    public function getLocalPart()
    {
        return $this->localPart;
    }

    /**
     * @param string $localPart
     * @return static
     */
    public function withLocalPart($localPart)
    {
        $newEmailAddress = clone $this;
        $newEmailAddress->localPart = $localPart;
        return $newEmailAddress;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return static
     */
    public function withDomain($domain)
    {
        $newEmailAddress = clone $this;
        $newEmailAddress->domain = $domain;
        return $newEmailAddress;
    }

    /**
     * @param string|string[] $value
     */
    private function extractParts($value)
    {
        // $value is an array of string parts
        if (is_array($value)) {
            if (!array_key_exists('name', $value) && !array_key_exists('local_part', $value)
                && !array_key_exists('domain', $value)) {
                throw new \InvalidArgumentException('Passed email address value array does not contain any valid parts');
            }
            if (array_key_exists('name', $value)) {
                $this->name = $value['name'];
            }
            if (array_key_exists('local_part', $value)) {
                $this->localPart = $value['local_part'];
            }
            if (array_key_exists('domain', $value)) {
                $this->domain = $value['domain'];
            }
            return;
        }

        // $value must be a string
        if (!is_string($value)) {
            throw new \InvalidArgumentException('Passed email address value is not a string or array of parts');
        }
        $value = trim($value);
        if ('' === $value) {
            throw new \InvalidArgumentException('Passed email address value is empty');
        }

        // Handle '"Display Name" <local-part@domain>' format
        if ('>' === substr($value, -1)) {
            if (false === strpos($value, '<')) {
                throw new \InvalidArgumentException('Invalid email address value of format \'"Display Name" <local-part@domain>\'');
            }
            if ('"' === substr($value, 0, 1)) {
                if (false === strpos($value, '"', 1)) {
                    throw new \InvalidArgumentException('Invalid display name in email address value of format \'"Display Name" <local-part@domain>\'');
                }
                $this->name = substr($value, 1, strpos($value, '"', 1) - 1);
                $value = substr(ltrim(substr($value, strpos($value, '"', 1) + 1)), 1, -1);
            } else {
                $this->name = rtrim(substr($value, 0, strpos($value, '<')));
                $value = substr($value, strpos($value, '<') + 1, -1);
            }
        }

        // Extract local part and domain ('local-part@domain')
        if (false === strrpos($value, '@')) {
            throw new \InvalidArgumentException('Invalid email address value: value does not contain @-symbol');
        }

        $this->domain = substr($value, strrpos($value, '@') + 1);
        $this->localPart = substr($value, 0, strrpos($value, '@'));

        return;
    }

    /**
     * @return string
     */
    private function combineParts()
    {
        return sprintf(
            $this->name !== '' ? '"%s" <%s@%s>' : '%s%s@%s',
            $this->name,
            $this->localPart,
            $this->domain
        );
    }

}
