<?php

namespace Shape;

use \Mockery;

class CircleTest extends \PHPUnit_Framework_TestCase {

  /**
   * @expectedException \UnexpectedValueException
   */
  public function setUp()
  {
    $this->circle = new Circle(1);
  }

  public function testCircle()
  {
    $this->circle = new Circle(1);
    $circum = 2 * pi();
    $this->assertEquals($circum, $this->circle->getCircumference());

  }

}