<?php
namespace Ychome\Controller;
use Think\Controller;

class NewsController extends CommonController {
    public function index(){
        $catId = $_GET['catid'];
        if(!isset($catId)){
            $catId = 3;
        }
        $data['catid']=$catId;
        $page = $_GET['page'];
        $pageSize = 15;
        if(!isset($page)){
            $page = 1;
        }

        $news = D("News")->getNews($data,$page,$pageSize);
        $newscount = D("News")->getNewsCount($data);
        if($newscount == 0){
            $totalpage = 0;
            $currentpage = 0;
        }else{
            if($newscount / $pageSize == 0){
                $totalpage = $newscount / $pageSize;
            }else{
                $totalpage = ceil($newscount / $pageSize);
            }
            $currentpage = 1;
        }

        $this->assign('news', $news);
        $this->assign('catId', $catId);
        $this->assign('totalpages', $totalpage);
        $this->assign('currentpage', $currentpage);
        $this->display();
    }
    public function toinform(){
        $newsId = $_GET['id'];
        $newsInform = D("News")->find($newsId);

//        $newsImgs= D("Newsimg")->find($newsId);
//
//
        $newsdescription = $newsInform['description'];
        $thumb = $newsInform['thumb'];
        $this->assign('newsdescription',$newsdescription);
        $this->assign('thumb',$thumb);
        $this->assign('title',$newsInform['title']);
        $this->assign('createtime',$newsInform['create_time']);
        $this->display();
    }


}