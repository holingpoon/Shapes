<?php

namespace Shape;


class Square extends Shape {

    private $width;
    private $height;

    public function __construct($width = 0, $height = 0)
    {
        if ($width < 0) {
            throw new \UnexpectedValueException('$width should not be a negative value.');
        } else if ($height < 0) {
            throw new \UnexpectedValueException('$height should not be a negative value.');
        }
        $this->width = $width;
        $this->height = $height;
    }

    public function __destruct()
    {
        parent::__destruct();
    }

    public function getWidth()
    {
      return $this->width;
    }

    public function getHeight()
    {
      return $this->height;
    }

    public function setPerimeter()
    {
        $this->perimeter = 2 * $this->width + 2 * $this->height;
    }

    public function getPerimeter()
    {
      return $this->perimeter;
    }
}
