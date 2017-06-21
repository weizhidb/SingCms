<?php
/**
 * Created by PhpStorm.
 * User: thinkpad
 * Date: 2017/4/2
 * Time: 23:57
 */
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller{
    public function index(){
        $array1 = array(
            "name"=>"weizhi",

        );
        echo json_encode($array1);
    }
}