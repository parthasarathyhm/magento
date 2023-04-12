<?php

namespace Custom1\Mymodule2\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;


class store implements ResolverInterface{
    public function resolve(
    Field $field,
    $context,
    ResolveInfo $info,
    array $value=null,
    array $args=null
    )
    {  
        //  storing users information
        $stores = [
            [
            "firstname"=>"partha",
            "lastname"=>"sarathy",
            "email"=>"p@embitel.com",
            "telephone"=>"1234567890",
            "city"=>"Bangalore",
            "state"=>"Karnataka",
            "Country"=>"India",
            ],
            [
            "firstname"=>"ab",
            "lastname"=>"cd",
            "email"=>"a@gmail.com",
            "telephone"=>"2526271826",
            "city"=>"marathahalli",
            "state"=>"Karnataka",
            "Country"=>"India",
            ],
            [
            "firstname"=>"nishan",
            "lastname"=>"poojary",
            "email"=>"n@gmail.com",
            "telephone"=>"2517283946",
            "city"=>"whitefield",
            "state"=>"karnataka",
            "Country"=>"India",
            ],
            
            ];
            return[
                'total_count'=>count($stores),
                'Userdetails'=>$stores
            ];
    }
}