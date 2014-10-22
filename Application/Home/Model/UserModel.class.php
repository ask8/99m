<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {

    public function register($data)
    {
     		if (($data['userpwd'] != $data['userpwd2'] )|| ''==$data['userpwd'] ) {
                $info = array('status' =>0,'info'=>'两次密码不一致,或者为空',);
    			return $info;
    		}
    		if(!preg_match("/^[a-zA-Z_-]{4,20}$/", $data['username'])){
                $info = array('status' =>0,'info'=>'4~20位的英文，下划线或者减号');
                return $info;
    		}

            $isregistered=(count($this->where("uname='".$data['username']."'")->select())>0);
            if ($isregistered) {
                $info = array('status' =>0,'info'=>'改用户已经被注册，请另外选择用户名');
                return $info;
            }
    		//dump($_SERVER);

    		$data_arr['uname']=$data['username'];
    		$data_arr['upwd']=$data['userpwd'];
    		$data_arr['ip']= $_SERVER['REMOTE_ADDR'];
    		$data_arr['last_time']= time();

    		if(M('user')->add($data_arr)>0){
                $info = array('status' =>1,'info'=>'注册成功');
                return $info;
    		}else{
                $info = array('status' =>0,'info'=>'注册失败，原因未知');
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