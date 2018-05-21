<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/18
 * Time: 18:45
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers\AdminController.php';
class AdminUsers extends AdminController
{
   public function shows(){
//       $this->load->helper('url');
       $this->load->view('admin/users/login');
//       echo"<pre>";var_dump($_SERVER['SCRIPT_FILENAME']);
   }
}