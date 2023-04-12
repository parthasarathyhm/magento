<?php
    
    namespace Custom1\Mymodule2\Plugin;

    class Cart
    {
        public function beforeAddProduct(
            \Magento\Checkout\Model\Cart $subject,
            $productInfo,
            $requestInfo = null
        ) {
            $requestInfo['qty'] = 2; // increasing quantity to 5
            return array($productInfo, $requestInfo);
        }
    }
