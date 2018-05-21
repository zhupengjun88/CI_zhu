<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/19
 * Time: 19:30
 */

class Errors extends CI_Controller{
    public function error_403(){
         $this->load->view('admin/users/error_403');
    }

}