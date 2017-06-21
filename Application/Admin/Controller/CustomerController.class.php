<?php
/**
 * 后台菜单相关
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

class CustomerController extends CommonController {
    

    public function index() {
        $page = $_GET['p'];
        if(!isset($page)){
            $page = 1;
        }
        $name = $_GET['customer_name'];
        if($name){
            $data['customer_name'] = $name;
        }
        $customers = D("Customer")->getCustomers($data,$page,10);
        $this->assign("customers",$customers);
    	$this->display();
    }

    public function add(){
        if(IS_POST) {
            if(!isset($_POST['customer_name']) || !$_POST['customer_name']) {
                return show(0, '产品名称不能为空');
            }
            if(!isset($_POST['customer_subject']) || !$_POST['customer_subject']) {
                return show(0, '摘要不能为空');
            }
            if(!isset($_POST['customer_desc']) || !$_POST['customer_desc']) {
                return show(0, '内容不能为空');
            }
            if(!isset($_POST['file1']) || !$_POST['file1']) {
                return show(0, '上传图片不能为空');
            }

            $_POST['thumb'] = $_POST['file1'];

            $id = D("Customer")->insert($_POST);
            if(!$id) {
                return show(0, '新增失败');
            }
            return show(1, '新增成功');
        }
        $this->display();
    }




}