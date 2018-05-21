<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/20
 * Time: 13:28
 */

class ApiController extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
  }

  //调用该接口的时候最好要加上统计功能
  public function ApiResponse($code,$message,$data,$type="application/json"){

      $res=[
          'code'=>$code,
          'message'=>$message,
          'data'=>$data,
      ];
      if($this->input->get('callback')&&preg_match("/^[\w_]+$/", $this->input->get('callback'))){
          $this->output->set_header('Content-Type:text/javascript; charset=utf8');
          $this->output->set_header('Access-Control-Allow-Origin:*');
          $this->output->set_header('Access-Control-Max-Age:3628800');
          $this->output->set_header('Access-Control-Allow-Methods:GET, POST, PUT, DELETE');
      }else{
          $this->output->set_header($type);
      }
      $this->output
          ->set_output(json_encode($data));
  }
}