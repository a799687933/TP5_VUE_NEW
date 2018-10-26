<?php
/**
 * run_cowstep模块微站定义
 *
 * @author a799687933
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

//// 应用目录
define('APP_PATH', __DIR__.'/tp5/application/');
//// 定义配置文件目录和应用目录同级
//
define('CONF_PATH', __DIR__.'/tp5/config/');
//
define('EXTEND_PATH', 'tp5/extend/');

// 加载微擎文件
require 'tp5/extend/weiqing/weiqing.php';

// 加载框架引导文件
require 'tp5/thinkphp/start.php';


use app\admin\controller\Hello;


class Run_cowstepModuleSite extends weiqing {


	public function doMobileIndex() {
//
      // $c=new Hello();
      // $c->index();
		//var_dump($c);
	//这个操作被定义用来呈现 功能封面
	}
	public function doWebStep_config() {

		  global $_W, $_GPC;
		  include "vue/header.html";
          include "vue/index.html";
		  //这个操作被定义用来呈现 管理中心导航菜单
	}
		public function doWebUsers() {
		  global $_W, $_GPC;
		  include "vue/header.html";
          include "vue/index.html";
	}
		public function doWebOrders() {
		//这个操作被定义用来呈现 管理中心导航菜单
	}
	

}