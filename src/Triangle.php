<?php
/**
 * Created by PhpStorm.
 * User: holingpoon
 * Date: 12/27/14
 * Time: 5:05 PM
 */
namespace Shape;

/**
 * Class Triangle
 * @package Shape
 */
class Triangle extends Shape
{
    private $base;
    private $height;


    public function __construct($base = 0, $height = 0)
    {
        parent::__construct();
        $this->base = $base;
        $this->height = $height;
        $this->setArea($this->base, $this->height);
        //echo "Constructing " . __CLASS__ . " of base " . $base . " and height " . $height . "<br />";
    }

    public function __destruct()
    {

        //echo 'This class "', __CLASS__, '" was destroyed!<br />';
        parent::__destruct();
    }

    /**
     * @param $a
     * @param $b
     */
    public function setArea($base, $height)
    {
        $this->area = $base * $height;
    }

    /**
     * Expose triangle's area.
     * @return int
     */
    public function getArea()
    {
        return $this->area;
    }
}

//$triangle = new Triangle(5,10);

//echo $triangle->getArea() . '<br />';