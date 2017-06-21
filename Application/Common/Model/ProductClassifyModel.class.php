<?php
namespace Common\Model;
use Think\Model;

/**
 * 产品分类model操作
 * @author  weizhi
 */
class ProductClassifyModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('product_classify');
    }

    public function insert($data = array()) {
        if(!is_array($data) || !$data) {
            return 0;
        }
        return $this->_db->add($data);
    }


    public function selectAll(){
        return $this->_db->order('id desc')->select();
    }

    public function getProductClassify($data,$page,$pageSize=10) {
        $conditions = $data;

        $offset = ($page - 1) * $pageSize;
        $list = $this->_db->where($conditions)
            ->order('id desc')
            ->limit($offset,$pageSize)
            ->select();

        return $list;

    }

}
