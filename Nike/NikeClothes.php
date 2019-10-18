<?php

namespace Nike;
use Clothes\ClothesInterface;

class NikeClothes implements ClothesInterface
{
    protected $price = 1500;

    public function salePrice()
    {
        return $this->price *0.85;
    }
}
