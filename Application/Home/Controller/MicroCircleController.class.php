<?php
namespace Home\Controller;
class MicroCircleController extends BaseController {
    public function index() {
        $model = M('MicroCircle');
        $where = ['status' => 1];
        $count = $model->where($where)->count();
        $Page  = new \Think\Page($count,15);
        $Page->setConfig('next','下一页');
        $Page->setConfig('prev','上一页');
        $show  = $Page->show();
        $this->lists = $model->where($where)->field('id, title, create_at')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);
        $this->display();
    }

    public function publish() {

    	$this->display();
    }

    public function detail() {
        $id = I('id', 0, 'intval');
        M('MicroCircle')->where(['id' => $id])->setInc('click', 1);
        $data = M('MicroCircle')->where(['id' => $id])->find();
        $data['comments'] = M('Comment')->where(['comment_for' => $data['id']])->limit(20)->order('id desc')->select();
        $this->data = $data;
    	$this->display();
    }

    public function add() {
    	if (!IS_AJAX) {
    		echo json_encode(['status' => 0, 'msg' =>"非法操作"]);
    		exit;
    	} 
    	$model = M('MicroCircle');
    	$model->create();
    	$model->content = $_POST['content'];
    	$model->create_at = time();
    	if (!$model->title || !$model->content) {
    		echo json_encode(['status' => 0, 'msg' =>"标题和内容必填"]);
    		exit;
    	}
    	if ($model->add()) {
    		echo json_encode(['status' => 1, 'msg' =>"发布成功"]);
    	} else {
    		echo json_encode(['status' => 0, 'msg' =>"服务器繁忙，请稍后再试~"]);
    	}
    }

    public function comment() {
       if (!IS_AJAX) {
            echo json_encode(['status' => 0, 'msg' =>"非法操作"]);
            exit;
        } 
        $model = M('Comment');
        $model->create();
        $model->content = $_POST['content'];
        $model->create_at = time();
        if (!$model->comment_for || !$model->content) {
            echo json_encode(['status' => 0, 'msg' =>"提交内容错误"]);
            exit;
        }
        if ($model->add()) {
            echo json_encode(['status' => 1, 'msg' =>"评论成功"]);
        } else {
            echo json_encode(['status' => 0, 'msg' =>"服务器繁忙，请稍后再试~"]);
        }
    }

}