<?php

namespace Custom1\Mymodule2\Controller\Index;

use Magento\Framework\App\Action\Context;
use Custom1\Mymodule2\Model\Test;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Test
     */
    
     protected $_test;

    public function __construct(
        Context $context,
        Test $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }
    public function execute()
    {
        $request_data = $this->getRequest()->getParams();
        $data = [
            'empid'=>$request_data['empid'],
            'fname'=>$request_data['fname'],
            'lname'=>$request_data['lname'],
            'email'=>$request_data['email'],
            'cname'=>$request_data['cname'],
            'dpt'=>$request_data['dpt'],
            'ocp'=>$request_data['ocp'],
            'mbl'=>$request_data['mbl'],
            'adrs'=>$request_data['adrs'],
            'jd'=>$request_data['jd'],
            'db'=>$request_data['db']
        ];
        // print_r($data);
        $test = $this->_test;
        
        $test->setData($data);
        $test->save();
        
        if ($test->getId()) {
            $this->messageManager->addSuccessMessage(__('data saved.'));
        } else {
            $this->messageManager->addErrorMessage(__('data not saved.'));
        }
        
        $resultRedirect = $this->resultRedirectFactory->create();
        
        $resultRedirect->setPath('mymodule2/index/index');
        
        return $resultRedirect;
    }
}
