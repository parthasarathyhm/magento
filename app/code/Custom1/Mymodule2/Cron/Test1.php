<?php
namespace Custom1\Mymodule2\Cron;

// use Psr\Log\LoggerInterface;

class Test1
{
//     /**
//      *
//      * @var LoggerInterface
//      */
//     protected $logger;
//      /**
//      *
//      * @param LoggerInterface $logger
//      */

//     public function __construct(LoggerInterface $logger,){
//         $this->logger= $logger;
//     }
//     /**
//      *
//      * @return void
//      */

     public function execute()
     {
   //   try{
   //      $this->logger->info("cron demo");
   //  }
   //  catch(\Exception $ex){
   //      $this->logger->info($ex->getMessage());
   //  }
   $current_date=date("YMd_his");
   $name_of_file='customer'.$current_date.'.csv';
   $header_data=array(
      'firstname',
      'lastname',
      'email',
      'telephone'
   );
   $header_data=array_combine($header_data,$header_data);
   $data=[];

   $data[]=$header_data;

   $data[]=[
      'firstname'=>'partha',
      'lastname'=>'sarathy',
      'email'=>'p@gmail.com',
      'telephone'=>'1234567890'
   ];

   $data[]=[
    'firstname'=>'abc',
    'lastname'=>'def',
    'email'=>'p@gmail.com',
    'telephone'=>'0987654321'
 ];

 $o_file=fopen('/var/www/html/magento/var/export/'.$name_of_file,'w');
      foreach($data as $fields){
        fputcsv($o_file,$fields);
      }

     }
}