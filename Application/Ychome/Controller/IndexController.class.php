<?php
namespace Ychome\Controller;
use Think\Controller;

class IndexController extends CommonController {
    public function index(){
        //3代表本站 4代表行业
        $data['catid']="3";
        $page = 1;
        $pageSize = 3;

        $localnews = D("News")->getNews($data,$page,$pageSize);
        $this->assign('localnews', $localnews);

        $data['catid']="4";
        $pageSize = 4;
        $hangyenews = D("News")->getNews($data,$page,$pageSize);
        $this->assign('hangyenews', $hangyenews);

//        获取所有的产品分类
        $productclassifys = D("ProductClassify")->getProductClassify(null,1,9);
        $this->assign('productclassifys', $productclassifys);

//        产品滚动图
//        第一组九个
        $products1 = D("Product")->getProducts(null,1,9);
        $products2 = D("Product")->getProducts(null,2,9);
        $this->assign('products1', $products1);
        $this->assign('products2', $products2);


//        获取客户案例数据
        $customer1 = D("Customer")->getCustomers(null,1,1);
        $customers = D("Customer")->getCustomers(null,1,5);
        $this->assign('customer1', $customer1);
        $this->assign('customers', $customers);

        $this->display();
    }



}