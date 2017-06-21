<?php
namespace Common\Model;
use Think\Model;

/**
 * 用户组操作
 * @author  singwa
 */
class ProductModel extends Model {
	private $_db = '';

	public function __construct() {
		$this->_db = M('product');
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

    public function getProducts($data,$page,$pageSize=10) {
        $conditions = $data;

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
