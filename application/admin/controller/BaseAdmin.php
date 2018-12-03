<?php
/**
 * BaseAdmin.php
 * 朵朵科技
 * 官方网址 www.dd371.com
 * ===============================
 * @uses ECHO
 * @date 2018.11.29
 * @version 1.0
 *
 * **/
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Sever;

class BaseAdmin extends Controller{
    function _initialize(){
        if (!defined('CONTROLLER_NAME')) {
            define('CONTROLLER_NAME', $this->request->controller());
        }
        if (!defined('ACTION_NAME')) {
            define('ACTION_NAME', $this->request->action());
        }
        if(empty(session('uid'))){
            $this->redirect("login/index");
        }
        $sys=db('sys')->where("id=1")->find();
        $this->assign("sys",$sys);
        
        $admin=db('admin')->where("id=1")->find();
        $this->assign("admin",$admin);
        
        $this->logs=new Sever();
       
       
    }
}