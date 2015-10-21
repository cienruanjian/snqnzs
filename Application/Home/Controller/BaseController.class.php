<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    
    public function _initialize() {

    	$this->_getServiceList();
    }

    private function _getServiceList() {

    	$this->serviceList = M('Service')->field('id, name')->limit(8)->select();
    }
}