<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    /**
     * @ORM\Column(type="integer", name="price_kg", nullable=true)
    */

    private $priceKg;

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
    
        /**
     * Get the value of priceKg
     */ 
    public function getPriceKg()
    {
        return $this->priceKg;
    }

    /**
     * Set the value of priceKg
     *
     * @return  self
     */ 
    public function setPriceKg($priceKg)
    {
        $this->priceKg = $priceKg;

        return $this;
    }
}
