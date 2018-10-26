<?php
/**
 * run_cowstep支付宝小程序接口定义
 *
 * @author a799687933
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Run_cowstepModuleAliapp extends WeModuleAliapp {
	public function doPageTest(){
		global $_GPC, $_W;
		// 此处开发者自行处理
		include $this->template('test');
	}
}