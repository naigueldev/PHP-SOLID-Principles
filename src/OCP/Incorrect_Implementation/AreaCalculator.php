<?php

class AreaCalculator
{
  protected $shapes;

  public function __construct($shapes = array()){
    $this->shapes = $shapes;
  }

  public function calculate()
  {
    $area = [];

    foreach ($this->shapes as $shape) {
      if (is_a($shape, 'Square')){
        $area[] = $shape->width * $shape->height;
      }else if (is_a($shape, 'Circle')) {
        $area[] = pi() * ($shape->radius * $shape->radius);
      }else if (is_a($shape, 'Triangle')) {
        $area[] = ($shape->height * $shape->base) / 2;
      }
    }

    return array_sum($area);

  }
}
