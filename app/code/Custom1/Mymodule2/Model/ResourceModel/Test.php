<?php
namespace Custom1\Mymodule2\Model\ResourceModel;


class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    
    
    protected function _construct()
    {
        $this->_init('emp_table','entity_id');
       
    }
}
