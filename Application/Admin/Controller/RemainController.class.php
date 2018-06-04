<?php
namespace Admin\Controller;
use Think\Controller;
class RemainController extends Controller {
     Public function _initialize(){
        $value=session();
        if(!$value['id']){
            $this->redirect('Login/index');
        }
    }
    public function index(){
     $code=D('code');
     $result=$code->select();
      import('ORG.Util.Page');
       $num=count($result);
        $Page=new \Org\Util\Page($num,C('PAGESIZE'));
        $result1=$code->where()->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('result',$result1);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }
}