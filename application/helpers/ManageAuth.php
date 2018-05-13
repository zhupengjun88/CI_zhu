<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/11
 * Time: 16:24
 */

/** * * 后台权限拦截钩子 *
 * @link http://www.php-chongqing.com *
 * @author bing.peng *
 *
 *
 * 使用说明：我们通过正则表达匹配，凡是以manage打头的url都是需要登陆后才能访问的。
 *
 */
class ManageAuth
{
    private $CI;
    public function __construct()
    {
        $this->CI = &get_instance();
    }
    /**     * 权限认证     */
    public function auth() {
        $this->CI->load->helper('url');
        if ( preg_match("/manage.*/i", uri_string()) ) {
            // 需要进行权限检查的URL
            $this->CI->load->library('session');
            if( !$this->CI->session->userdata('username') ) {
                // 用户未登陆
                redirect('login');
                return;
            }
        }
    }
}