<?php
class ManageAction extends CommonAction {
	public function index () {
		import('ORG.Util.Page');
		$page = new Page(M('article')->count(), 5);
		$limit = $page->firstRow.','.$page->listRows;
	
	
		$wish = M('article')->order('id desc')->limit($limit)->select();
		$this->page = $page->show();
	
		$this->assign('article' , $wish)->display();
	}
	
	public function add() {
		$this->display();
	}
	
	public function addattr () {
		$data = array(
				'text' => I('content'),
		);
	
		
		if(!!$id = M('article')->data($data)->add()) {
			$this->success('添加成功', U('Admin/Manage/index'));
		}else {
			$this->error('对不起，添加失败');
		}
		
	}
	
	public function delete () {
		$id = I('id' , '' , 'intval');

		if(M('article')->delete($id)){
			$this->success('删除成功' , U('Admin/Manage/index'));
		}else{
			$this->error('删除失败');
		}
	
	
	}
	
	public function grades () {
		import('ORG.Util.Page');
		$page = new Page(M('user')->count(), 2);
		$limit = $page->firstRow.','.$page->listRows;
		$wish = M('user')->order('id desc')->limit($limit)->select();
		$this->page = $page->show();
		
		if(!!$result = M("user")->order("zql desc,speed desc")->select()) {
			$this->order = $result;
		}
		
		$this->display();
	}
	
	
	
}
?>