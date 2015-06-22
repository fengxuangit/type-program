<?php

class LoginAction extends Action {
	public function index() {
		$this->display();
	}
	
	public function verity () {
		import('ORG.Util.Image');
		Image::buildImageVerify(1, 1, 'png', 48, 30);
	}
	
    public function login () {
    	if (!IS_POST) halt('非法访问');
    	
    	if(I('code', '' , 'md5') != $_SESSION['verify']){
    		$this->error('对不起，验证码错误');
    	}
    	
    	$username = I('username');
    	$password = I('password', '' ,  'md5');
    	
    
    	if(!!$result = M('admin')->where(array('username' => $username ))->find()){
    		if ($result['password'] != $password){
    			$this->error('对不起，用户名或密码错误');
    		}    		
    	}

    	
    	$_SESSION['uid'] = $result['id'];
    	$_SESSION['username'] = $result['username'];

    	$this->redirect('Admin/Index/index');
    }
}



?>