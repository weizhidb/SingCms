<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

class ProductController extends CommonController {


    public function index() {
        $page = $_GET['p'];
        if(!isset($page)){
            $page = 1;
        }
        $products = D("Product")->getProducts(null,$page,10);
        $this->assign("products",$products);
        $productClassify = D("ProductClassify")->selectAll();
        $this->assign("productClassifys",$productClassify);


        $count = D("Product")->getProductsCount();
//        $res  =  new \Think\Page($count,10);
//        $pageres = $res->show();
        $p = getpage($count,10);
        $pageres = $p->show();

        $positions = D("Position")->getNormalPositions();
        $this->assign('pageres',$pageres);

        $this->display();
    }

    public function add() {
        $this->assign("nav","增加产品分类");
        $this->display();
    }

    //    保存产品分类
    public function saveclassfy(){
        // 保存数据
        if(IS_POST) {

            if(!isset($_POST['name'])) {
                return show(0, '分类不能为空');
            }
            $data['product_classify_name'] = $_POST['name'];

            $id = D("ProductClassify")->insert($data);
            if(!$id) {
                return show(0, '新增失败');
            }
            return show(1, '新增成功');
        }
        $this->display();
    }

    public function addproduct() {
        $this->assign("nav","增加产品");
        if($_POST) {

        }
        $productClassify = D("ProductClassify")->selectAll();
        $this->assign("productClassifys",$productClassify);
        $this->display();
    }

    public function saveproduct(){
        // 保存数据
        if(IS_POST) {

            if(!isset($_POST['product_name']) || !$_POST['product_name']) {
                return show(0, '产品名称不能为空');
            }
            if(!isset($_POST['product_subject']) || !$_POST['product_subject']) {
                return show(0, '摘要不能为空');
            }
            if(!isset($_POST['product_desc']) || !$_POST['product_desc']) {
                return show(0, '内容不能为空');
            }
            if(!isset($_POST['file1']) || !$_POST['file1']) {
                return show(0, '上传图片不能为空');
            }

            $_POST['thumb'] = $_POST['file1'];

            $id = D("Product")->insert($_POST);
            if(!$id) {
                return show(0, '新增失败');
            }
            return show(1, '新增成功');
        }
        $this->display();
    }

}