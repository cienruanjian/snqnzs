<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends BaseController {

	public function index() {
		$type = I('type', 0 , 'intval');
		$type = $type ? $type : 1;
		$model = M('Article');
		$where = ['type' => $type];
		$count = $model->where($where)->count();
		$Page  = new \Think\Page($count,15);
		$Page->setConfig('next','下一页');
		$Page->setConfig('prev','上一页');
		
		$show  = $Page->show();
		$this->article = $model->where($where)->field('id, title, desc, thumb, create_at')->order('sort, id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('page',$show);
		$this->display();
	}

	public function detail() {
		$id = I('id', 0, 'intval');
		if (!$id) {
			$this->error('参数错误');
		}
		M('Article')->where(['id' => $id])->setInc('click', 1);
		$this->article = M('Article')->where(['id' => $id])->find();
		$this->display();
	}
}