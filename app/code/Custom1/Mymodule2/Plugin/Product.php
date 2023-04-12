<?php
    
    namespace Custom1\Mymodule2\Plugin;

    class Product
    {
        public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
            return "pluged ".$result; // Adding Apple in product name
        }
    }
