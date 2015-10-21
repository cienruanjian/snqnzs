<?php
namespace Home\Controller;
class ServiceController extends BaseController {
    public function index() {

    	$id = I('id', 0, 'intval');
    	$id = $id ? $id : 1;
    	$data = M('Service')->where(array('id' => $id))->find();
    	if (!$data) {
    		$this->error('参数错误');
    	}
    	$data['photo'] = M('ServicePhoto')->where(array('service_id' => $data['id']))->order('id desc')->limit(3)->select();
    	$this->data = $data;
    	$this->display();
    }
}