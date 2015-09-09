<?php

namespace Shape;

use \Mockery;

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

    public function testMock()
    {
      $mock = Mockery::mock('Square');
      $mock->shouldReceive('getHeight')->andReturn(0)->mock();
    }
}
