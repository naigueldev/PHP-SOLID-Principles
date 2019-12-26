<?php

class Circle implements ShapeInterface
{
  public $radius;

  /**
   * Define a dimensão do raio
   * @param float $radius
  */
  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  /**
   * Obtém o cálculo da área
   * @return float
  */
  public function area()
  {
    return pi() * ($this->radius * $this->radius);
  }
}
