<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/19
 * Time: 18:56
 */
require_once APPPATH.'controllers\AdminController.php';
class Users extends CI_Controller
{
    //权限错误页面
    public function sign(){
        $this->load->view('admin/users/sign');
//        echo"ssss";
//        echo site_url('api/users/sign_up');
    }

    public function login(){
        $this->load->view('admin/users/login');
//        echo"ssss";
    }
}