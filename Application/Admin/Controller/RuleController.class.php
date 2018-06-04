<?php
namespace Admin\Controller;
use Think\Controller;
class RuleController extends Controller {
     Public function _initialize(){
        $value=session();
        if(!$value['id']){
            $this->redirect('Login/index');
        }
    }
    public function index(){
     $rules=D('rules');
     $result=$rules->select();
     $this->assign('result',$result);
     $this->display();
    }
    public function addrules(){
        $rules=D('rules');
        $date1=I('date1');
        $date2=I('date2');
        $num=I('num');
        $time1=I('time1');
        $time2=I('time2');
        $outtime=I('outtime');
        if($date1=="" || $date2=="" || $num=="" || $time1==""|| $time2=="" || $outtime==""){
            $this->error("所有信息不能为空");
        }
        $search['id']=1;
        $condition['date1']=$date1;
         $condition['date2']=$date2;
          $condition['num']=$num;
           $condition['time1']=$time1;
            $condition['time2']=$time2;
            $condition['outtime']=$outtime;
            $result=$rules->where($search)->save($condition);
            if($result){
                $this->success('保存成功');
            }$this->error('请做出修改');
    }
}