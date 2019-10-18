<?php

namespace Adidas;

use Clothes\ClothesInterface;

class AdidasClothes implements ClothesInterface
{
    protected $price = 1000;

    public function salePrice()
    {
        return $this->price *0.15;
    }
}