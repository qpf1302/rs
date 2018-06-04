<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $rules=D('rules');
       $begindate=strtotime($rules->getField('date1'));
       $enddate=strtotime($rules->getField('date2'));
       $begintime=strtotime($rules->getField('time1'));
       $endtime=strtotime($rules->getField('time2'));
      $nowtime=time();
       $time=strtotime(date('Y-m-d',time()));
       $num=$rules->getField('num');
      $outtime=$rules->getField('outtime');
       if($time >= $begindate && $time <= $enddate && $nowtime >= $begintime && $nowtime <= $endtime){
        $this->assign('outtime',$outtime);
        $this->assign('num',$num);
        $this->display();
       }else{
        $this->redirect('Timeout/index');}
      
    }
}