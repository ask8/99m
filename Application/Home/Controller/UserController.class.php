<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    public function index(){
        $this->show();
    }

    public function login()
    {
        //echo "string";
        $data= I('post.');
        $un=$data['username'];
        $up=$data['userpwd'];
        $this->ajaxReturn(D('User')->login($un,$up));
        //dump(D('User')->login($un,$up));
    }


    public function register()
    {
    	if (IS_POST) {
    		$data= I('post.');
    		//dump($data);
    		$this->ajaxReturn(D('User')->register($data),'JSON');

    	}else{
    		$this->show();
    	}
    }

    public function about()
    {
        if (IS_POST){
            $data=I('post.');
            //echo D('User')->about($data);
            $this->ajaxReturn(D('User')->about($data));
        }else{
            $this->show();
        }
    }
}