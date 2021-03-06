<?php

namespace Shape;

/**
 * Class Triangle
 * @package Shape
 */
class Triangle extends Shape
{
    /**
     * Base of a Triangle
     * @var float
     */
    private $base;

    /**
     * Height of a Triangle
     * @var float
     */
    private $height;

    /**
     * Creates a new Triangle.
     * @param float $base
     * @param float $height
     */
    public function __construct($base = 0.0, $height = 0.0)
    {
        parent::__construct();
        $this->base = $base;
        $this->height = $height;
        $this->setArea($this->base, $this->height);
        //echo "Constructing " . __CLASS__ . " of base " . $base . " and height " . $height . "<br />";
    }

    /**
     * Destroys a Triangle.
     */
    public function __destruct()
    {

        //echo 'This class "', __CLASS__, '" was destroyed!<br />';
        parent::__destruct();
    }

    /**
     * Sets the area of a Triangle
     *
     * @param float $base
     * @param float $height
     */
    public function setArea($base, $height)
    {
        $this->area = 0.5 * $base * $height;
    }

    /**
     * Set the perimeter of a Triangle.
     *
     * @param float $sideOne
     * @param float $sideTwo
     * @param float $sideThree
     */
    public function setPerimeter($sideOne, $sideTwo, $sideThree)
    {
        $this->perimeter = $sideOne + $sideTwo + $sideThree;
    }

}

//$triangle = new Triangle(5,10);

//echo $triangle->getArea() . '<br />';
