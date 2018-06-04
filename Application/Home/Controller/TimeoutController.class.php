<?php
namespace Home\Controller;
use Think\Controller;
class TimeoutController extends Controller {
    public function index(){
    	$rules=D('rules');
    	$detail=$rules->select();
    	$this->assign('detail',$detail);
    	$this->display();
    }
}