<?php
/**
 * Created by PhpStorm.
 * User: holingpoon
 * Date: 1/12/15
 * Time: 4:52 PM
 */

namespace Shape;


class SquareTest extends \PHPUnit_Framework_TestCase {

    /**
     * @expectedException \UnexpectedValueException
     */
    public function setUp()
    {
        $this->square = new Square(1,1);
    }

    /**
     * @expectedException \UnexpectedValueException
     */
    public function testWidthShouldNotBeNegative()
    {
        $this->square = new Square(-1, 1);
    }

    /**
     * @expectedException \UnexpectedValueException
     */
    public function testHeightShouldNotBeNegative()
    {
      $this->square = new Square(1, -1);
    }

    public function testSquareDestructor()
    {
      $this->square = null;
      $this->assertNull($this->square);
    }

    public function testSetPerimeter()
    {
      $this->square->setPerimeter();
      $perimeter = 2 * $this->square->getWidth() + 2 * $this->square->getHeight();
      $this->assertSame($perimeter, $this->square->getPerimeter());
    }
}
