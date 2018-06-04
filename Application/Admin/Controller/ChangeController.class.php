<?php
namespace Admin\Controller;
use Think\Controller;
class ChangeController extends Controller {
     Public function _initialize(){
        $value=session();
        if(!$value['id']){
            $this->redirect('Login/index');
        }
    }
    public function index(){
        $admin=D('admin');
        $result=$admin->select();
        $this->assign('result',$result);
       $this->display();
    }
    public function change(){
        $admin=D('admin');
        $username=I('username');
        $password=I('password');
        if($username=="" || $password==""){
            $this->error('用户名或密码不能为空');
        }
        $value=session();
        $id=$value['id'];
        $condition['userid']=$id;
        $change['username']=$username;
        $change['password']=$password;
        $result=$admin->where($condition)->save($change);
        if($result){
            $this->success('修改成功');
        }$this->error('请做出修改');
    }
}