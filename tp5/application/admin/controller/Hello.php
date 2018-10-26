<?php


namespace app\admin\controller;

use think\Request;
use think\Db;
use think\Controller;
//use app\common\adapter\AuthAdapter;
use app\common\controller\Common;
use think\Loader;


class Hello extends Common
{
    public function  index()
    {
    	$data['SYSTEM_NAME']=12221;
    // return $this->success('登录成功');
     //$this->redirect('https://www.baidu.com/');
        return 1000;
    	//echo(66);
       
    }
}
?>