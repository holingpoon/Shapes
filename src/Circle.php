<?php

namespace Shape;


class Circle extends Shape
{
  protected $radius;

  public function __construct($radius = 0)
  {
    if ($radius < 0) {

    }
    $this->perimeter = 2 * pi() * $radius;
  }

  public function __destruct()
  {

  }

  public function getCircumference() {
    return $this->perimeter;
  }

}