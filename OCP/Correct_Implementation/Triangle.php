<?php

class Triangle implements ShapeInterface
{
  public $base;
  public $height;

  /**
   * Valor padrão do area_divider na fórmula da área
   */
  private $area_divider = 2;

  /**
   * Define a dimensão da base e da altura
   * @param float $base
   * @param float $height
   */
  public function __construct($base, $height)
  {
    $this->base = $base;
    $this->height = $height;
  }

  /**
   * Obtém o cálculo da área
   * @return float
   */
  public function area()
  {
    return ($this->base * $this->height) / $this->area_divider;
  }


}
