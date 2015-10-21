<?php

namespace Admin\Controller;

/**
 * 服务管理
 * @author yuwei
 *
 */
class ServiceController extends BaseController {
    public function _initialize () {
        parent::_initialize();
        $this->titleL1 = "服务管理";
    }
    /**
     * 列表
     */
    public function index () {
        $Model = M('Service');
        $this->lists  = $Model->limit(20)->select();
        $this->display();
    }

    public function add() {
        $sizeArr = C('THUMB_SIZE');
        $this->size = $sizeArr[201];
        $this->titleL1 = "添加服务联盟";
        $this->display();
    }

    public function addHandle() {

        $Model = M('Service');
        $Model->create();
        if (!$Model->name) $this->error('服务联盟名称不能为空');
        if ($Model->add()){
            $this->redirect('Service/index');
        } else {
            $this->error('添加失败');
        }
    }
    public function edit () {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $sizeArr = C('THUMB_SIZE');
        $this->size = $sizeArr[201];
        $this->data = M('Service')->where(array('id' => $id))->find();
        $this->display();
    }
    public function editHandle() {

         $Model = M('Service');
        $Model->create();
        if (!$Model->name) $this->error('服务联盟名称不能为空');
        if ($Model->save()){
            $this->redirect('Service/index');
        } else {
            $this->error('保存失败');
        }
    }
    /**
     * 图片
     */
    public function photo () {
        $sizeArr = C('THUMB_SIZE');
        $this->size = $sizeArr[202];
        $id = I('id', 0, 'intval'); //服务联盟id
        if (!$id) $this->error('参数错误');
        $this->service_id = $id;
        $pid   = I('pid', 0, 'intval'); //图片id
        $model = M('ServicePhoto');
        if ($pid) {
            $photo = $model->where(['id' => $pid])->find();
        } else {
            $photo = $model->where(['service_id' => $id])->order('id asc')->limit(1)->find();
        }
        //存在图片
        if ($photo) {
            $pid = $photo['id'];
            //上一篇
            $pre_id = $model->where("id<".$pid." and service_id=".$id)->order('id desc')->limit('1')->getField('id');
            $this->assign('pre_id',$pre_id);
            //下一篇
            $next_id = $model->where("id>".$pid." and service_id=".$id)->order('id asc')->limit('1')->getField('id');
            $this->assign('next_id',$next_id);
            $this->assign('photo', $photo);
        }
        $this->display();
    }

    public function del() {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        if (M('Service')->where(array('id' => $id))->delete()) {
            $photo = M('ServicePhoto')->where(array('service_id' => $id))->select();
            if ($photo) {
                foreach ($photo as $key => $v) {
                    @unlink ($v['thumb']);
                }
                M('ServicePhoto')->where(array('service_id' => $id))->delete();
            }
            $this->redirect('Service/index');
        } else {
            $this->error('删除失败');
        }
    }


}