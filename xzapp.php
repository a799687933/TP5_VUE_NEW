<?php
/**
 * run_cowstep熊掌号接口定义
 *
 * @author a799687933
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Run_cowstepModuleXzapp extends WeModuleXzapp {
	public function doPageTest(){
		global $_GPC, $_W;
		// 此处开发者自行处理
		include $this->template('test');
	}

}