<?php
/**
 * Created by PhpStorm.
 * User: holingpoon
 * Date: 12/24/14
 * Time: 2:37 PM
 */

namespace Shape;

/**
 * Class Shape: Base class for all shapes.
 * @package Shape
 * @author Ho-Ling Poon
 */
class Shape
{
    protected $area;
    protected $perimeter;
    // public static $count = 0;

    protected function __construct()
    {
        //echo 'This class "', __CLASS__, '" was initiated!<br />';
    }

    protected function __destruct()
    {
        //echo 'This class "', __CLASS__, '" was destroyed!<br />';
    }

    public function __toString()
    {
        //echo "Using the toString method: ";
        return strval($this->getArea());
    }



    /**
     * Returns shape's area.
     * @return int
     */
    protected function getArea()
    {
        return $this->area;
    }
}