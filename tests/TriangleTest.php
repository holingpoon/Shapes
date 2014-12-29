<?php
/**
 * Created by PhpStorm.
 * User: holingpoon
 * Date: 12/28/14
 * Time: 4:39 PM
 */

namespace Shape;


class TriangleTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->triangle = new Triangle(5,10);
    }

    public function testNewTriangle()
    {
        $this->assertInstanceOf('Shape\Triangle', $this->triangle);
    }

    public function testGetArea()
    {
        $this->assertEquals(50, $this->triangle->getArea());
    }

    public function testSetArea()
    {
        $this->triangle->setArea(6,10);
        $this->assertEquals(60, $this->triangle->getArea());
    }

}