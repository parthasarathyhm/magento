<?php
namespace Custom1\Mymodule2\Model;
use Magento\Framework\Model\AbstractModel;

class Test extends AbstractModel
{
    
    
    protected function _construct()
    {
        $this->_init('Custom1\Mymodule2\Model\ResourceModel\Test');
       
    }
}
