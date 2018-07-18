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
class XmlProductWriter extends shopProductWriter
{
    public function write()
    {
        $writer = new XMLWriter();
        $writer->openMemory();
        $writer->startDocument('1.0','UTF-8');
        $writer->startElement("products");
            foreach($this->products as $shopProduct){
                $writer->startElement("product");
                $writer->writeAttribute("title",$shopProduct->getTitle());
                    $writer->startElement("summary");
                    $writer->text($shopProduct->getSummaryLine());
                    $writer->endElement(); //summary
                $writer->endElement(); //product
            }
            $writer->endElement(); //products
        $writer->endDocument();
        print $writer->flush();
    }
}