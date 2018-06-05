<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    public function checklogin(){
        $username=I('username');
         $password=I('password');
        if(!$username){
            $this->error('用户名不能为空');
        }
        if(!$password){
            $this->error('密码不能为空');
        }
        $admin=D('admin');
        $condition['username']=$username;
        $condition['password']=$password;
        $result=$admin->where($condition)->find();
        if($result){
           session('username',$result['username']);
           session('id',$result['userid']);
            $this->success('登陆成功',U('Index/index'));
            return;
        }
        $this->error('用户名或密码错误');

    }
}