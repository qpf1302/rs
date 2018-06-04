<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	 Public function _initialize(){
		$value=session();
		if(!$value['id']){
			 $this->redirect('Login/index');
		}
	}
    public function index(){
        $history=D('history');
        $result=$history->select();
        import('ORG.Util.Page');
        $num=count($result);
        $Page=new \Org\Util\Page($num,C('PAGESIZE'));
        $result1=$history->where()->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $show = $Page->show();
        $this->assign('result',$result1);
        $this->assign('page',$show);
        $this->display();
    }
    public function search(){
    	$stuid=trim(I('stuid'));
    	$condition['stuid']=$stuid;
    	$history=D('history');
        $result=$history->where($condition)->select();
        import('ORG.Util.Page');
        $num=count($result);
        $Page=new \Org\Util\Page($num,C('PAGESIZE'));
        $result1=$history->where($condition)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $show = $Page->show();
        $this->assign('result',$result1);
        $this->assign('page',$show);
        $this->display('Index:index');
    }
    public function delete(){
    	$id=I('id');
    	$condition['id']=$id;
    	$history=D('history');
    	$result=$history->where($condition)->delete();
    	if($result){
    		$this->success();
    	}$this->error();
    }
    public function destroy(){
    	$re=session(null); 
    	$this->success('退出成功',U('Login/index'));
    }
}