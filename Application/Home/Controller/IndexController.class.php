<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo header("Access-Control-Allow-Origin:*");
        $res = M('TagList')->select();
        $this->ajaxReturn($res);
    }

    public function getListWithTagId(){
        echo header("Access-Control-Allow-Origin:*");
        $res = M('BookList')->where(array('tag_id'=>$_GET['id']))->order("comment desc")->limit(40)->select();
        $this->ajaxReturn($res);
    }
}