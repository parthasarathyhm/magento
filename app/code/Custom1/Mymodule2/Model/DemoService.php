<?php
namespace Custom1\Mymodule2\Model;
use Magento\Customer\Model\GroupFactory;

/**
 * @api
 */
class DemoService implements \Custom1\Mymodule2\Api\DemoInterface
{
    protected $_group;
    public function __construct(
        GroupFactory $group
    )
    {
        $this->_group=$group;
    }
    /**
     * Gets name
     *
     * @return string
     */
    public function getProfile(){
        return[[
            'firstname' => 'Partha',
            'lastname'  => 'sarathy',
            'email'     => 'partha@gmail.com',
            'telephone' => '1234567890',
            'city'      => 'Marathahalli',
            'state'     => 'Karnataka',
            'Country'   => 'India'

        ],
        [
            'firstname' => 'nishan',
            'lastname'  => 'poojary',
            'email'     => 'nis@gmail.com',
            'telephone' => '1234567890',
            'city'      => 'Marathahalli',
            'state'     => 'Karnataka',
            'Country'   => 'India'

        ],
        [
            'firstname' => 'shashanth',
            'lastname'  => 'jogi',
            'email'     => 'shashanth@gmail.com',
            'telephone' => '1234567890',
            'city'      => 'Marathahalli',
            'state'     => 'Karnataka',
            'Country'   => 'India'

        ]  
    ];
    }
    /**
     * set data
     *
     * @param string[] $postdata
     * @return array
     */

    public function setCustomList($postdata){

        try{
            $data=[
                'customer_group_code'=>$postdata['groupName'],
                'tax_class_id'=>3
            ];
            $group=$this->_group->create();
            $group->setData($data);
            $group->save();

            return[
                'groupId'=>15,
                'groupName'=>"TeamF"
            ];
        }
        catch(\Throwable $th){
            $th->getMessage();
        }

    }

    

}
