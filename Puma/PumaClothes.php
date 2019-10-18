<?php

namespace Puma;

use Clothes\ClothesInterface;

class PumaClothes implements ClothesInterface
{
    protected $price = 2000;

    public function salePrice()
    {
        return $this->price *0.85;
    }
}