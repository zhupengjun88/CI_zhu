<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/18
 * Time: 18:34
 */

class AdminController extends MY_Controller
{

    //是否需要登录
    private $_needLogin=false;
    public function __construct()
    {
        parent::__construct();

//        //获取用户对象
//        $this->userTool=
//
//        //需要登录的话，判断权限
//        if($this->_needLogin&&$this->userTool->getId()){
//
//        }else{
//
//        }
        if(!$this->session->name){
            redirect('admin/Users/login');
        }
    }

    /**
     * 需要登录
     * @access public
     * @return void
     */
    public function needLogin()
    {
        $this->_needLogin = true;
    }
}