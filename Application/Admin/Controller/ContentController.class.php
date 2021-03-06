<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

/**
 * 文章内容管理
 */
class ContentController extends CommonController {

    public function index() {
        $conds = array();
        $title = $_GET['title'];
        if($title) {
            $conds['title'] = $title;
        }
        if($_GET['catid']) {
            $conds['catid'] = intval($_GET['catid']);
        }

        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = 10;

        $news = D("News")->getNews($conds,$page,$pageSize);
        $count = D("News")->getNewsCount($conds);

//        $res  =  new \Think\Page($count,$pageSize);
//        $pageres = $res->show();

        $p = getpage($count,$pageSize);
        $pageres = $p->show();

        $positions = D("Position")->getNormalPositions();
        $this->assign('pageres',$pageres);
        $this->assign('news',$news);
        $this->assign('positions', $positions);

        $this->assign('webSiteMenu',D("Menu")->getBarMenus());
        $this->display();
    }
    public function add(){
        if($_POST) {
            if(!isset($_POST['title']) || !$_POST['title']) {
                return show(0,'标题不存在');
            }
            if(!isset($_POST['subject']) || !$_POST['subject']) {
                return show(0,'摘要不存在');
            }
            if(!isset($_POST['catid']) || !$_POST['catid']) {
                return show(0,'所属栏目不存在');
            }
            if(!isset($_POST['file1']) || !$_POST['file1']) {
                return show(0,'没有上传图片');
            }
//            if(!isset($_POST['keywords']) || !$_POST['keywords']) {
//                return show(0,'关键字不存在');
//            }
//            if(!isset($_POST['content']) || !$_POST['content']) {
//                return show(0,'content不存在');
//            }

            $_POST['thumb'] = $_POST['file1'];

            if($_POST['news_id']) {
                return $this->save($_POST);
            }
            $newsId = D("News")->insert($_POST);
            if($newsId) {
                $newsImgData['news_id'] = $newsId;
                if($_POST['file1'] != ""){
                    $newsImgData['imgpath'] = $_POST['file1'];
                    $cId = D("Newsimg")->insert($newsImgData);
                }
                if($_POST['file2'] != ""){
                    $newsImgData['imgpath'] = $_POST['file2'];
                    $cId = D("Newsimg")->insert($newsImgData);
                }
                if($_POST['file3'] != ""){
                    $newsImgData['imgpath'] = $_POST['file3'];
                    $cId = D("Newsimg")->insert($newsImgData);
                }

                if($cId){
                    return show(1,'新增成功');
                }else{
                    return show(1,'主表插入成功，副表插入失败');
                }


            }else{
                return show(0,'新增失败');
            }

        }else {

            $webSiteMenu = D("Menu")->getBarMenus();

            $titleFontColor = C("TITLE_FONT_COLOR");
            $copyFrom = C("COPY_FROM");
            $this->assign('webSiteMenu', $webSiteMenu);
            $this->assign('titleFontColor', $titleFontColor);
            $this->assign('copyfrom', $copyFrom);
            $this->display();
        }
    }

    public function edit() {
        $newsId = $_GET['id'];
        if(!$newsId) {
            // 执行跳转
            $this->redirect('/admin.php?c=content');
        }
        $news = D("News")->find($newsId);
        if(!$news) {
            $this->redirect('/admin.php?c=content');
        }
        $newsContent = D("NewsContent")->find($newsId);
        if($newsContent) {
            $news['content'] = $newsContent['content'];
        }

        $webSiteMenu = D("Menu")->getBarMenus();
        $this->assign('webSiteMenu', $webSiteMenu);
        $this->assign('titleFontColor', C("TITLE_FONT_COLOR"));
        $this->assign('copyfrom', C("COPY_FROM"));

        $this->assign('news',$news);
        $this->display();
    }

    public function save($data) {
        $newsId = $data['news_id'];
        unset($data['news_id']);

        try {
            $id = D("News")->updateById($newsId, $data);
            $newsContentData['content'] = $data['content'];
            $condId = D("NewsContent")->updateNewsById($newsId, $newsContentData);
            if($id === false || $condId === false) {
                return show(0, '更新失败');
            }
            return show(1, '更新成功');
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }

    }
    public function setStatus() {
        try {
            if ($_POST) {
                $id = $_POST['id'];
                $status = $_POST['status'];
                if (!$id) {
                    return show(0, 'ID不存在');
                }
                $res = D("News")->updateStatusById($id, $status);
                if ($res) {
                    return show(1, '操作成功');
                } else {
                    return show(0, '操作失败');
                }
            }
            return show(0, '没有提交的内容');
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }
    }

    public function listorder() {
        $listorder = $_POST['listorder'];
        $jumpUrl = $_SERVER['HTTP_REFERER'];
        $errors = array();
        try {
            if ($listorder) {
                foreach ($listorder as $newsId => $v) {
                    // 执行更新
                    $id = D("News")->updateNewsListorderById($newsId, $v);
                    if ($id === false) {
                        $errors[] = $newsId;
                    }
                }
                if ($errors) {
                    return show(0, '排序失败-' . implode(',', $errors), array('jump_url' => $jumpUrl));
                }
                return show(1, '排序成功', array('jump_url' => $jumpUrl));
            }
        }catch (Exception $e) {
            return show(0, $e->getMessage());
        }
        return show(0,'排序数据失败',array('jump_url' => $jumpUrl));
    }

    public function push() {
        $jumpUrl = $_SERVER['HTTP_REFERER'];
        $positonId = intval($_POST['position_id']);
        $newsId = $_POST['push'];

        if(!$newsId || !is_array($newsId)) {
            return show(0, '请选择推荐的文章ID进行推荐');

        }
        if(!$positonId) {
            return show(0, '没有选择推荐位');
        }
        try {
            $news = D("News")->getNewsByNewsIdIn($newsId);
            if (!$news) {
                return show(0, '没有相关内容');
            }

            foreach ($news as $new) {
                $data = array(
                    'position_id' => $positonId,
                    'title' => $new['title'],
                    'thumb' => $new['thumb'],
                    'news_id' => $new['news_id'],
                    'status' => 1,
                    'create_time' => $new['create_time'],
                );
                $position = D("PositionContent")->insert($data);
            }
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }

        return show(1, '推荐成功',array('jump_url'=>$jumpUrl));


    }

        //    保存图片
        public function savepic(){
            if ((($_FILES["avatar_file"]["type"] == "image/gif")
                    || ($_FILES["avatar_file"]["type"] == "image/jpeg")
                    || ($_FILES["avatar_file"]["type"] == "image/pjpeg")
                    || ($_FILES["avatar_file"]["type"] == "image/png"))
                /*&& ($_FILES["avatar_file"]["size"] < 20000)*/)
            {
                if ($_FILES["avatar_file"]["error"] > 0)
                {
                    echo "Return Code: " . $_FILES["avatar_file"]["error"] . "<br />";
                }
                else
                {
                    echo "Upload: " . $_FILES["avatar_file"]["name"] . "<br />";
                    echo "Type: " . $_FILES["avatar_file"]["type"] . "<br />";
                    echo "Size: " . ($_FILES["avatar_file"]["size"] / 1024) . " Kb<br />";
                    echo "Temp file: " . $_FILES["avatar_file"]["tmp_name"] . "<br />";

                    if (file_exists("upload/" . $_FILES["avatar_file"]["name"]))
                    {
                        echo $_FILES["avatar_file"]["name"] . " already exists. ";
                    }
                    else
                    {
                        move_uploaded_file($_FILES["avatar_file"]["tmp_name"],
                            "upload/" . $_FILES["avatar_file"]["name"]);
                        echo "Stored in: " . "upload/" . $_FILES["avatar_file"]["name"];
                    }
                }
            }
            else
            {
                echo "Invalid file";
            }
        }
}