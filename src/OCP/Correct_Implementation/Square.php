<?php

class Square implements ShapeInterface
{
  public $height;
  public $width;

  /**
   * Define a dimensão da largura e altura
   * @param float $width
   * @param float $height
   */
  public function __construct($width, $height)
  {
    $this->height = $height;
    $this->width = $width;
  }

  /**
   * Obtém o cálculo da área
   * @return float
   */
  public function area()
  {
    return $this->width * $this->height;
  }

}
