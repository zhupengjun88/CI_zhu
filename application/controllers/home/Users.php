<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/18
 * Time: 18:36
 */
require_once APPPATH.'controllers\HomeController.php';
class Users extends HomeController
{
     //用户
     public function firsts(){
          $this->load->view('home/user/show');
     }
}