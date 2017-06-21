<?php
namespace Common\Model;
use Think\Model;

/**
 * 案例操作
 * @author  singwa
 */
class CustomerModel extends Model {
	private $_db = '';

	public function __construct() {
		$this->_db = M('customer');
	}
    public function insert($data = array()) {
        if(!$data || !is_array($data)) {
            return 0;
        }
        $data['create_time']  = time();
        return $this->_db->add($data);
    }

    public function selectAll(){
        return $this->_db->select();
    }



    public function findById($id) {
        $data = $this->_db->where('id='.$id)->find();
        return $data;
    }

    public function getCustomers($data,$page,$pageSize=10) {
        $conditions = $data;
        if(isset($data['customer_name']) && $data['customer_name']) {
            $conditions['customer_name'] = array('like','%'.$data['customer_name'].'%');
        }
        $offset = ($page - 1) * $pageSize;
        $list = $this->_db->where($conditions)
            ->order('id desc')
            ->limit($offset,$pageSize)
            ->select();

        return $list;

    }

    public function getProductsCount(){
        return $this->_db->count();
    }


}
