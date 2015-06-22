<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$this->display();
    }
    
    public function reg() {
    	if(!IS_POST) 
    		$this->redirect("Index/index");
    	
		$data = array(
				'user' => I('user'),
				'passwd' => md5(I('passwd')),
				'class' => I('class'),
		);
		
	
// 		if(!!!$result = M('user')->where("user = $data[user]")->find()){
// 			$this->error("对不起，已存在此用户名，请用其他用户名注册");
// 		}
    	if(M('user')->data($data)->add()){
    		$this->success("注册成功", U("Index/Index/index"));
    		$_SESSION['class'] = $data['class'];
    		$_SESSION['user'] = $data['user'];
    	}else {
    		$this->error("注册失败", U("Index/Index/index"));
    	}

    	
    }
    
    public function type() {
//     	$value = trim($_POST['username']);
//     	if (empty($value)){
//     		$this->redirect('Index/Index/index');
//     	}
    	$result = M('user')->where(array('user' => I('username')))->select();
    	//echo $result[0]['passwd']== I('password', '', 'md5');die(0);
    	if($result[0]['passwd'] != I('password', '', 'md5'))  {
    		$this->error("对不起,用户名密码错误", U('Index/Index/index'));
    	}


    	
    	$this->user = $result[0]['user'];
    	$_SESSION[userid] = $result[0]['id'];
    	$this->class = $result[0]['class'];
    	
	   	$result  = M('article')->select();
	   	$idarr = array();
	   	$i = 0;
	   	
		foreach ($result as $key=>$value) {
			$idarr[$i++] =  $result[$key]['id'];
		}
		$id = array_rand($idarr);

		$this->id = $idarr[$id]; 
		
		$this->arrid = $id;

		$text = M('article')->where("id = $idarr[$id]")->select();
		$this->text = $text[0]['text'];
		
    	$this->display();
    }
    
    public function end () {

    	$data = array(
    	);
    	$id =  I("id");
    	$text = M('article')->where("id =$id")->select();
		
		$data['zql'] = I('zql');
		$data['speed'] = I('arrid');
		
		$db = M();
		$sql = "update user set zql={$data['zql']} , speed={$data['speed']} where id={$_SESSION['userid']}";

		
		$list = $db->query($sql);
		
		if(!$list) 
			if(mysql_errno()) echo mysql_error();
		
    	$this->display();
    }
    
    
    
    
    
    
}