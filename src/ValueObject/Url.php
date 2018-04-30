<?php

namespace GlobalPhp\Entities\ValueObject;

/**
 * URL Value Object
 *
 * @author Jochem Klaver <global-php@7ochem.nl>
 * @see parse_url()
 * @see http://php.net/parse-url
 * @see https://en.wikipedia.org/wiki/Uniform_Resource_Identifier
 */
class Url implements ValueObjectInterface
{
    use ValueObjectTrait;

    /**
     * @var string|null
     */
    private $scheme;

    /**
     * @var bool
     */
    private $isSchemeSlashed = false;

    /**
     * @var string
     */
    private $host = '';

    /**
     * @var int|null
     */
    private $port;

    /**
     * @var string|null
     */
    private $user;

    /**
     * @var string|null
     */
    private $pass;

    /**
     * @var string|null
     */
    private $path;

    /**
     * @var string|null
     */
    private $query;

    /**
     * @var string|null
     */
    private $fragment;

    /**
     * URL Value Object constructor
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
     * @todo `getX` and `withX` for all parts
     * @todo `getQueryParts()` using {@see parse_str()}
     */

    /**
     * @param string|string[] $value
     */
    private function extractParts($value)
    {
        // $value is an array of string parts
        if (is_array($value)) {
            $partNames = ['scheme', 'host', 'port', 'user', 'pass', 'path', 'query', 'fragment'];
            $validParts = array_intersect_key($value, array_fill_keys($partNames, ''));
            if (0 === count($validParts)) {
                throw new \InvalidArgumentException('Passed URL value array does not contain any valid parts');
            }
            foreach ($partNames as $partName) {
                if (array_key_exists($partName, $value)) {
                    $this->$partName = $value[$partName];
                }
            }
            return;
        }

        // $value must be a string
        if (!is_string($value)) {
            throw new \InvalidArgumentException('Passed URL value is not a string or array of parts');
        }
        $value = ltrim($value);
        if ('' === $value) {
            throw new \InvalidArgumentException('Passed URL value is empty');
        }

        // Extract parts
        $parts = parse_url($value);
        if (false === $parts) {
            throw new \InvalidArgumentException('Passed URL value is invalid');
        }
        foreach ($parts as $partName => $partValue) {
            $this->$partName = $partValue;
        }
        $this->isSchemeSlashed = (strpos($value, '//') === 0
            || $this->scheme && strpos($value, $this->scheme . '://') === 0);
    }

    /**
     * @param null|string $component
     * @return string
     */
    private function combineParts($component = null)
    {
        switch ($component) {
            case 'scheme':
                return ($this->scheme ? $this->scheme . ':' : '')
                    . ($this->isSchemeSlashed ? '//' : '');

            case 'authority':
                if (!$this->host) {
                    return '';
                }
                return ($this->user ?? '')
                    . ($this->pass ? ':' . $this->pass : '')
                    . ($this->user || $this->pass ? '@' : '')
                    . $this->host
                    . (is_int($this->port) ? ':' . $this->port : '');

            case 'path':
                return $this->path ?? '';

            case 'query':
                return $this->query ? '?' . $this->query : '';

            case 'fragment':
                return $this->fragment ? '#' . $this->fragment : '';

            case null:
                return $this->combineParts('scheme')
                    . $this->combineParts('authority')
                    . $this->combineParts('path')
                    . $this->combineParts('query')
                    . $this->combineParts('fragment');

            default:
                throw new \InvalidArgumentException('Unknown component argument');
        }
    }

}
