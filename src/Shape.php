<?php

namespace Shape;

/**
 * Class Shape: Base class for all shapes.
 * @package Shape
 * @author Ho-Ling Poon
 */
abstract class Shape
{
    /**
     * Area of a Shape.
     * @var float
     */
    protected $area;
    /**
     * Perimeter of a Shape.
     * @var float
     */
    protected $perimeter;
    // public static $count = 0;

    /**
     * Creates a Shape
     */
    protected function __construct()
    {
        echo 'This class "', __CLASS__, '" was initiated!<br />';
    }

    /**
     * Destroys a Shape
     */
    protected function __destruct()
    {
        echo 'This class "', __CLASS__, '" was destroyed!<br />';
    }

    /**
     * Returns shape's area.
     * @return int
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Returns shape's perimeter
     * @return mixed
     */
    public function getPerimeter()
    {
        return $this->perimeter;
    }
}
