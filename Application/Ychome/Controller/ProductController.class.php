<?php
namespace Ychome\Controller;
use Think\Controller;

class ProductController extends CommonController {
    public function index(){
        $productclassifyId = $_GET['id'];

//        获取所有的产品分类
        $productclassifys = D("ProductClassify")->getProductClassify(null,1,9);
        $this->assign('productclassifys', $productclassifys);

        if(!isset($productclassifyId)){
            $productclassifyId =  $productclassifys[0]['id'];
        }

        $data['product_classify_id'] = $productclassifyId;
        $productsbyId = D("Product")->getProducts($data,1,10);
        $this->assign('productsbyId', $productsbyId);
        $this->assign('productid', $productclassifyId);

        $this->display();
    }

    public function toinform(){
        $productId = $_GET['id'];
        $product = D("Product")->findById($productId);
        $this->assign('product', $product);

        $this->display();
    }

}