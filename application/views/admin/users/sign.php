<?php
/**
 * Created by PhpStorm.
 * User: zhupengjun
 * Date: 2018/5/20
 * Time: 0:06
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url()."static/admin/"?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?= base_url()."static/admin/"?>css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="<?= base_url()."static/admin/"?>css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="<?= base_url()."static/admin/"?>css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="<?= base_url()."static/admin/"?>js/jquery-1.10.2.min.js"></script>
    <!--clock init-->
</head>
<body>
<!--/login-->

<div class="error_page">
    <!--/login-top-->

    <div class="error-top up">
        <h2 class="inner-tittle page">Augment</h2>
        <div class="login">
            <h3 class="inner-tittle t-inner">Sign Up</h3>
            <form>
                <input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
                <input type="password" value="Password" class="pass1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                <input type="password" value="Password" class="pass2" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                <div class="submit">
                    <input type="submit" onclick="return myFunction()" value="Sign up" >
                </div>
                <div class="clearfix"></div>
                <div class="buttons">
                    <ul>
                        <li><a href="#" class="hvr-sweep-to-right">Sign up</a></li>
                        <li class="or"><h6>OR</h6></li>
                        <li class="lost"><a href="#" class="hvr-sweep-to-left">Sign up</a> </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="new">
                    <p class="sign up">Do you have an account yet ? <a href="login.html"> Login here.</a></p>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>

    </div>

    <!--//login-top-->
</div>
<!--//login-->
<!--footer section start-->
<div class="footer sign">
    <div class="error-btn">
        <a class="read fourth" href="index.html">Return to Home</a>
    </div>
    <p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
</div>
<!--footer section end-->
<!--/404-->
<!--js -->
<script type="text/javascript">
    var url="<?= site_url('api/users/sign_up');?>";
</script>
<script src="<?= base_url()."static/admin/"?>js/jquery.nicescroll.js"></script>
<script src="<?= base_url()."static/admin/"?>js/users.js"></script>
<script src="<?= base_url()."static/admin/"?>js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url()."static/admin/"?>js/bootstrap.min.js"></script>
</body>
</html>
