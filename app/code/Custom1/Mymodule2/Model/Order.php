<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Custom1\Mymodule2\Block\Order;


class Order 
{
    protected function _canCancel()
    {
        return "function overrided in order!";
    }

   
}