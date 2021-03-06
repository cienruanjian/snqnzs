<?php

namespace Admin\Controller;
use Think\Page;
/**
 * 思青微圈
 * @author yuwei
 */
class MicroCircleController extends BaseController{
    public function _initialize () {
        parent::_initialize();
        $this->titleL1 = "思青微圈";
    }
    /**
     * 列表
     */
    public function index () {
        $model = M('MicroCircle');
        $count = $model->where($where)->count();
        $Page  = new Page($count,C('PAGE_SIZE') ? C('PAGE_SIZE') : 15);
        $Page->setConfig('prev','«');
        $Page->setConfig('next','»');
        $show  = $Page->show();
        $lists = $model->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->field('id, title, nickname, create_at, email, status')->select();
        $this->assign('lists', $lists);
        $this->assign('page',$show);
        $this->display();
    }

    //内容页
    public function detail () {
        $this->content = M('MicroCircle')->where(['id' => I('id')])->getField('content');
        $this->display();
    }

    /**
     * 删除
     */
    public function del() {
        $id = I('id', 0, 'intval');
        $model = M('MicroCircle');
        if (!$id) $this->error('参数错误');
        if ($model->where(['id' => $id])->delete()) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    public function check(){
        $id = I('id', 0, 'intval');
        if (!IS_AJAX || !$id) return false;
        $set = I('set', 0, 'intval'); 
        $set = $set ? $set : 0;
        echo M('MicroCircle')->where(['id' => $id])->setField('status', $set);
    }

    //编辑
    public function edit() 
    {
      
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->titleL2 = "编辑";
        $data = M('MicroCircle')->where(['id'=> $id])->find();
        $this->data = $data;
        $this->display();
    }

    //编辑数据处理
    public function editHandle() 
    {
       
        $model = M('MicroCircle');
        $model->create();
        if (I('create_at'))
            $model->create_at = strtotime(I('create_at'));
        $model->content = $_POST['content'];
        if (!$model->title) $this->error('标题不能为空');
        if (!$model->content) $this->error('内容不能为空');
        if ($model->save()) {
            $this->redirect('MicroCircle/index', array('p' => I('p')));
        } else {
            $this->error('内容未修改');
        }
    }

}