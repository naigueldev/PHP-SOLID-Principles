<?php

class Square implements ShapeInterface
{
  public $height;
  public $width;

  public function __construct($width, $height)
  {
    $this->height = $height;
    $this->width = $width;
  }

  public function area()
  {
    return $this->width * $this->height;
  }

}
