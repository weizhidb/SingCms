<?php
namespace Common\Model;
use Think\Model;

/**
 * 操作新闻所属的图片
 * @author  weizhi
 */
class NewsimgModel extends Model {
	private $_db = '';

	public function __construct() {
		$this->_db = M('news_img');
	}
    public function insert($data = array()) {
        if(!$data || !is_array($data)) {
            return 0;
        }
        return $this->_db->add($data);
    }

    public function selectAll(){
        return $this->_db->select();
    }

    public function find($id) {
        return $this->_db->where('news_id='.$id)->find();
    }

}
