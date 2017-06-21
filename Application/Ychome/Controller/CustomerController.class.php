<?php
namespace Ychome\Controller;
use Think\Controller;

class CustomerController extends CommonController {
    public function index(){
//        $customerId = $_GET['id'];

//        获取所有的产品分类
        $customers = D("Customer")->getCustomers(null,1,10);
        $this->assign('customers', $customers);
        $this->display();
    }

    public function toinform(){
        $customerId = $_GET['id'];
        $customer = D("Customer")->findById($customerId);
        $this->assign('customer', $customer);

        $this->display();
    }

}