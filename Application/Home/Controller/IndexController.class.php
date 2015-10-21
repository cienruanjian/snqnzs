<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function index(){
    	$this->_getAd();
        $this->_getNewestQuestions();
    	$this->_getHotQuestions();
        $this->_getExpert();
        $this->_getArticle();
        $this->_getCircle();
    	$this->display();
    }

    private function _getArticle() {
        $this->articles = M('Article')->where(['type' => 1, 'status' => 1])->order('hot desc, sort asc')->limit(9)->field('id, title')->select();
    }

    private function _getCircle() {
        $this->circles = M('MicroCircle')->where(['status' => 1])->order('id desc')->limit(13)->field('id, title')->select();
    }

    private function _getAd() {

    	$this->ad = M("Ad")->where(['status' => 1])->order('sort, id desc')->limit(5)->select();
    }

    private function _getNewestQuestions() {
    	$questions = file_get_contents("http://sns.qnzs.youth.cn/provinceapi/getcontent/o/16204");
    	$questions = json_decode($questions);
    	if ($questions->code == 210) {
    		$questions = $questions->data;
    		foreach ($questions as &$value) {
    			$value = (array) $value;
    		}
    		$this->newestQuestions = $questions;
    	}	
    }

    private function _getHotQuestions() {
        $questions = file_get_contents("http://sns.qnzs.youth.cn/provinceapi/gethotques/o/16204");
        $questions = json_decode($questions);
        if ($questions->code == 210) {
            $questions = $questions->data;
            foreach ($questions as &$value) {
                $value = (array) $value;
            }
            $this->hotQuestions = $questions;
        }   
    }

    private function _getExpert() {
        $questions = file_get_contents("http://sns.qnzs.youth.cn/provinceapi/getexpert/o/16204");
        $questions = json_decode($questions);
        if ($questions->code == 210) {
            $questions = $questions->data;
            foreach ($questions as &$value) {
                $value = (array) $value;
            }
            $this->experts = $questions;
        }   
    }

}