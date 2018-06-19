<?php

namespace GlobalPhp\Entities\ValueObject;

class Dimensions implements ValueObjectInterface
{
    use ValueObjectTrait;

    const SEPARATOR = ' x ';

    /**
     * @var UnitOfMeasure
     */
    private $width;

    /**
     * @var UnitOfMeasure
     */
    private $height;

    /**
     * @var UnitOfMeasure
     */
    private $depth;

    /**
     * @param string|string[]|int[]|float[]|UnitOfMeasure[] $value
     */
    public function __construct($value)
    {
        $width = $height = $depth = null;
        if (is_string($value)) {
            @list($width, $height, $depth) = array_map('trim', explode(trim(self::SEPARATOR), $value, 3));
        } elseif (is_array($value)) {
            @list($width, $height, $depth) = array_values($value);
        }
        $this->width = $width instanceof UnitOfMeasure ? $width : new UnitOfMeasure($width);
        $this->height = $height instanceof UnitOfMeasure ? $height : new UnitOfMeasure($height);
        $this->depth = $depth instanceof UnitOfMeasure ? $depth : new UnitOfMeasure($depth);
    }

    /**
     * @return float[]
     */
    public function getValue()
    {
        return [
            $this->width->getValue(),
            $this->height->getValue(),
            $this->depth->getValue(),
        ];
    }

    /**
     * @return UnitOfMeasure
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string|int|float|UnitOfMeasure $width
     * @return static
     */
    public function withWidth($width)
    {
        $newDimensions = clone $this;
        $newDimensions->width = $width instanceof UnitOfMeasure ? $width : new UnitOfMeasure($width);
        return $newDimensions;
    }

    /**
     * @return UnitOfMeasure
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string|int|float|UnitOfMeasure $height
     * @return static
     */
    public function withHeight($height)
    {
        $newDimensions = clone $this;
        $newDimensions->height = $height instanceof UnitOfMeasure ? $height : new UnitOfMeasure($height);
        return $newDimensions;
    }

    /**
     * @return UnitOfMeasure
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param string|int|float|UnitOfMeasure $depth
     * @return static
     */
    public function withDepth($depth)
    {
        $newDimensions = clone $this;
        $newDimensions->depth = $depth instanceof UnitOfMeasure ? $depth : new UnitOfMeasure($depth);
        return $newDimensions;
    }

    /**
     * @param string $separator
     * @return string
     */
    public function __toString($separator = self::SEPARATOR)
    {
        return implode($separator, array_filter($this->getValue()));
    }

}