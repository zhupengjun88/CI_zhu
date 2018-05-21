<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/20
 * Time: 0:32
 */
require_once APPPATH.'controllers\ApiController.php';
class Users extends ApiController
{
     public function sign_up(){
         $data=array();
         $data=[
             'status'=>1,
             'message'=>'success',
             'data'=>['foo'=>'bar'],
         ];
         $this->ApiResponse(8852,'success',$data);
     }
}