<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {

    protected $_validate = array(
        array('uname',"/^[\d\w]{4,20}$/",'用户名必须是4~20位的英文'), // 在新增的时候验证name字段是否唯一
        array('upwd',"/^([\w\d]{8,10})$/",'密码必须8～10位'),
    );
    public function register($data)
    {
    		$data_arr['uname']=$data['username'];
    		$data_arr['upwd']=$data['userpwd'];
    		$data_arr['ip']= $_SERVER['REMOTE_ADDR'];
    		$data_arr['last_time']= time();
            
            if (!$this->create($data_arr,1)){
                //exit($this->getError());
                $info = array('status' =>0,'info'=>$this->getError());
                return $info;
            }else{
                $info = array('status' =>1,'info'=>'注册成功');
                return $info;
            }


    }

    public function about($data)
    {
        $ds=$this->where("uname = '".$data['username']."'")->select();
            if (count($ds)>0) {
                return '用户存在';
             } else
             {
                return '用户不存在';
             }
    }

    public function login($un,$up)
    {

        if (!$un) { $result=array('status' => 0, 'info' => '用户名不能为空');return $result; } 
        if (!$up) {$result=array('status' => 0, 'info' => '密码不能为空'); return $result;} 

        $loginsql= "uname='{$un}' and upwd='{$up}'";
        $logindata = $this->where($loginsql)->find();

        //echo $this->_sql();
        //var_dump($logindata) ;

        if ($logindata == null ){
            $result=array('status' => 0, 'info' => '登录失败！'); return $result;
        }else{
            $result=array('status' => 1, 'info' => '登入成功'); return $result;
        }
    }
}