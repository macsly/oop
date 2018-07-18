<?php
namespace ShopProduct;
/**
 * Created by PhpStorm.
 * User: syv
 * Date: 18.07.2018
 * Time: 14:22
 */
abstract class shopProductWriter extends \ShopProduct
{
    protected $products = array();

    public function addProduct( \ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}