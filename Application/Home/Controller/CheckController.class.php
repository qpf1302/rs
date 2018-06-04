<?php
namespace Home\Controller;
use Think\Controller;
class CheckController extends Controller {
     public function index(){
     	$stuname=I('username');
    	$stuid=I('stuid');
    	$wechatid=I('wechatid');
      if($stuname=="" || $stuid=="" || $wechatid==""){
        $this->redirect('Check/information');
      }
    	date_default_timezone_set('PRC');
    	$time=date('Y-m-d',time());
    	$history=D('history');
    	$condition1['stuid']=$stuid;
    	$a=$history->where($condition1)->find();
    	if($a){
    		$this->redirect('Check/stuid',$a);  //学号已经领取过
    	}
    	$condition2['wechartid']=$wechatid;
    	$b=$history->where($condition2)->find();
    	if($b){
    		$this->redirect('Check/wechatid',$b); //微信号已经领取过
    	}

$stu=D('stu');
$condition3['username']=$stuname;
$condition3['stuid']=$stuid;
$d=$stu->where($condition3)->select();
if(!$d){
	$this->redirect('Check/error'); // 学号或姓名错误
}

    	$condition4['time']=$time;
    	$c=$history->where($condition4)->select();
    	$count=count($c);
    	$rules=D('rules');
    	$num=$rules->getField('num');
    	if($count>=$num){
    		$this->redirect('Check/large'); //当日领取人数已经达到上限
    	}
    	$code=D('code');
    	$rsma=$code->order('num asc')->limit(1)->getField('val');
    	$condition5['val']=$rsma;
    	$de=$code->where($condition5)->delete();
    	$add['stuid']=$stuid;
    	$add['wechartid']=$wechatid;
    	$add['time']=$time;
    	$add['val']=$rsma;
    	$result=$history->add($add);
       $count1=$count+1;
    	if($de=="" || $result==""){
      $this->redirect('Check/unknown');//未知原因领取失败，联系管理员
    }
      $this->assign('count',$count1);
        $this->assign('rsma',$rsma);
        $this->display(); //领取成功
    }
   public function stuid(){
   	$return['stuid']=I('get.stuid');
   	$return['time']=I('get.time');
   	$return['val']=I('get.val');
   	$this->assign('return',$return);
   	$this->display();
   }
   public function wechatid(){
   	$return['stuid']=I('get.stuid');
   	$return['time']=I('get.time');
   	$return['val']=I('get.val');
   	$this->assign('return',$return);
   	$this->display();
   }
   public function large(){
   	$rules=D('rules');
    	$detail=$rules->select();
    	$this->assign('detail',$detail);
   	$this->display();
   }
   public function error(){
   	$this->display();
   }
   public function unknown(){
   	$this->display();
   }
   public function information(){
    $this->display();
   }
}