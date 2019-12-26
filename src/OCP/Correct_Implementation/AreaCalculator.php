<?php

class AreaCalculator
{
  
  /**
   * Obtém o cálculo da soma de todas as áreas dos objetos inclusos no array
   * @param array $shapes
   * @return float
   */
  public function calculate($shapes = array())
  {
    $area = [];

    foreach ($shapes as $shape) {
      $area[] = $this->getCalculation($shape);
    }
    
    return array_sum($area);

  }

  /**
   * Obtém o cálculo da área através da interface
   * @param ShapeInterface
   * @return float
   */
  public function getCalculation(ShapeInterface $shapeInterface)
  {
    return $shapeInterface->area();
  }
}
