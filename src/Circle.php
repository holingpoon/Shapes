<?php

namespace Shape;


class Circle extends Shape
{
  protected $circumference;

  protected $radius;

  public function __construct()
  {
    $this->circumference = $this->perimeter;
  }


}