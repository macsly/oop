<?php

namespace ShopProduct;

use ShopProduct\shopProductWriter;
use XMLWriter;
/**
 * Created by PhpStorm.
 * User: syv
 * Date: 18.07.2018
 * Time: 14:25
 */
class TextProductWriter{
    public function write(){
        $str = "ТОВАРЫ:\n";
        foreach($this->products as $shopProduct){
            $str .= $shopProduct->getSummaryLine(). "\n";
        }
        print $str;
    }
}