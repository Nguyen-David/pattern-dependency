<?php
require_once 'Clothes\ClothesInterface.php';
use Clothes\ClothesInterface;

require_once 'Adidas\AdidasClothes.php';
use Adidas\AdidasClothes;

require_once 'Nike\NikeClothes.php';
use Nike\NikeClothes;

require_once 'Puma\PumaClothes.php';
use Puma\PumaClothes;

class App
{
    private $class;

    public function __construct(ClothesInterface $someClass)
    {
        $this->class = $someClass;
    }

    public function getPrice()
    {
        return $this->class->salePrice();
    }

}

$obj = new App(new NikeClothes());
echo $obj->getPrice();

