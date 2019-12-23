<?php

class Circle implements ShapeInterface
{
  public $radius;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function area()
  {
    return pi() * ($this->radius * $this->radius);
  }
}
