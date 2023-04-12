<?php
namespace Custom1\Mymodule2\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    
    
    protected function _construct()
    {
        $this->_init(
            'Custom1\Mymodule2\Model\Test',
            'Custom1\Mymodule2\Model\ResourceModel\Test'
        );
       
    }
}
