<?php

class Mojito
{
    // property declaration
    public float $alcoholRate = 0.15;
    public array $ingredients = ["rum", "lime", "sparkling water", "mint", "sugar"];
    public int $price = 8;

    public function __construct(float $alcoholRate, array $ingredients, int $price)
      {
         $this->alcoholRate = $alcoholRate;
         $this->ingredients = $ingredients;
         $this->price = $price;
      }

}

?>