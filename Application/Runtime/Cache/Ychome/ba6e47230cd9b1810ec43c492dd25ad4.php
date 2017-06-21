<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>首页</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
  <link rel="stylesheet" href="/SingCms/Public/YcHome//css/amazeui.css"/>
  <link rel="stylesheet" href="/SingCms/Public/YcHome//css/style.css"/>

  <script type="text/javascript" src="/SingCms/Public/YcHome//js/banner1.js"></script>

  <link rel="stylesheet" href="/SingCms/Public/YcHome//css/lrtk.css"/>


  <script src="/SingCms/Public/YcHome//js/jquery.min.js"></script>
  <script src="/SingCms/Public/YcHome//js/jquery.SuperSlide.2.1.1.js"></script>


  <script src="/SingCms/Public/YcHome//js/amazeui.min.js"></script>
  <script src="/SingCms/Public/YcHome//js/scroll.js"></script>

  <!--多图片上传-->
  <link rel="stylesheet" type="text/css" href="Public/upload/diyUpload/css/webuploader.css">
  <link rel="stylesheet" type="text/css" href="Public/upload/diyUpload/css/diyUpload.css">
  <script type="text/javascript" src="Public/upload/diyUpload/js/webuploader.html5only.min.js"></script>
  <script type="text/javascript" src="Public/upload/diyUpload/js/diyUpload.js"></script>

</head>
<body>


<style type="text/css">
  /* css 重置 */
  *{margin:0; padding:0; list-style:none; }
  /*body{ background:#fff; font:normal 12px/22px 宋体;  }*/
  /*img{ border:0;  }*/
  a{ text-decoration:none; color:#333;  }

  a:hover{ color:#1974A1;  }
  /*.js{width:90%; margin:10px auto 0 auto; }*/
  /*.js p{ padding:5px 0; font-weight:bold; overflow:hidden;  }*/
  /*.js p span{ float:right; }*/
  /*.js p span a{ color:#f00; text-decoration:underline;   }*/
  /*.js textarea{ height:50px;  width:98%; padding:5px; border:1px solid #ccc; border-top:2px solid #aaa;  border-left:2px solid #aaa;  }*/

  /* 本例子css */
  /*.multipleLine{ overflow:hidden; position:relative; width:615px;  border:1px solid #ccc;  float: left; }
  .multipleLine .hd{ overflow:hidden;  height:30px; background:#f4f4f4; padding:0 10px;  }
  .multipleLine .hd .prev,.multipleLine .hd .next{ display:block;  width:9px; height:5px; float:right; margin-right:5px; margin-top:10px;  overflow:hidden;
       cursor:pointer; background:url("img/icoUp.gif") no-repeat;}
  .multipleLine .hd .next{ background:url("img/icoDown.gif") no-repeat;  }
  .multipleLine .hd ul{ float:right; overflow:hidden; zoom:1; margin-top:10px; zoom:1; }
  .multipleLine .hd ul li{ float:left;  width:9px; height:9px; overflow:hidden; margin-right:5px; text-indent:-999px; cursor:pointer; background:url("img/icoCircle.gif") 0 -9px no-repeat; }
  .multipleLine .hd ul li.on{ background-position:0 0; }
  .multipleLine .bd{ padding:10px; height:432px; overflow:hidden;  }
  .multipleLine .bd ul{ overflow:hidden; zoom:1; margin-bottom:10px;  }
  .multipleLine .bd ul li{ margin:0 8px; float:left; _display:inline; overflow:hidden; text-align:center;  }
  .multipleLine .bd ul li .pic{ text-align:center; }
  .multipleLine .bd ul li .pic img{ width:120px; height:90px; display:block;  padding:2px; border:1px solid #ccc; width: 180px;
height: 150px;}
  .multipleLine .bd ul li .pic a:hover img{ border-color:#999;  }
  .multipleLine .bd ul li .title{ line-height:54px; font-size: 2rem;width: 5em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;  }
  */

  /* 本例子css */
  .multipleLine{ overflow:hidden; position:relative; width:450px;  border:1px solid #ccc;  margin-top: 10px ; }
  .multipleLine .hd{ overflow:hidden;  height:30px; background:#f4f4f4; padding:0 10px;  }
  .multipleLine .hd .prev,.multipleLine .hd .next{ display:block;  width:9px; height:5px; float:right; margin-right:5px; margin-top:10px;  overflow:hidden;
    cursor:pointer; background:url("/SingCms/Public/YcHome//img/icoUp.gif") no-repeat;}
  .multipleLine .hd .next{ background:url("/SingCms/Public/YcHome//img/icoDown.gif") no-repeat;  }
  .multipleLine .hd ul{ float:right; overflow:hidden; zoom:1; margin-top:10px; zoom:1; }
  .multipleLine .hd ul li{ float:left;  width:9px; height:9px; overflow:hidden; margin-right:5px; text-indent:-999px; cursor:pointer; background:url("/SingCms/Public/YcHome//img/icoCircle.gif") 0 -9px no-repeat; }
  .multipleLine .hd ul li.on{ background-position:0 0; }
  .multipleLine .bd{ padding:10px; height:420px; overflow:hidden;  }
  .multipleLine .bd ul{ overflow:hidden; zoom:1; margin-bottom:10px;  }
  .multipleLine .bd ul li{ margin:0 8px; float:left; _display:inline; overflow:hidden; text-align:center;  }
  .multipleLine .bd ul li .pic{ text-align:center; }
  .multipleLine .bd ul li .pic img{ width:126px; height:100px; display:block;  padding:2px; border:1px solid #ccc; }
  .multipleLine .bd ul li .pic a:hover img{ border-color:#999;  }
  .multipleLine .bd ul li .title{ line-height:34px; font-size: 1.3rem; width: 5em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap; }



</style>



<header class="am-topbar header">
  <div class="am-container-1">
    <div class="left hw-logo">
      <img class=" logo" src="/SingCms/Public/YcHome//img/HENGWANG.png"></img>
      <img class="word" src="/SingCms/Public/YcHome//img/hw-word.png"></img>
    </div>
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
            class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">


      <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
        <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
          <li class="hw-menu-index"><a href="/SingCms/?m=YcHome&c=Index&a=index">首页</a></li>
          <!--<li><a href="product-show.html">产品展示 </a></li>-->
          <li class="hw-menu-product"><a href="/SingCms/?m=YcHome&c=Product&a=index">产品展示</a></li>
          <!--<li><a href="service-center.html">服务中心 </a></li>-->
          <li class="hw-menu-news"><a href="/SingCms/?m=YcHome&c=News&a=index">新闻动态 </a></li>
          <li class="hw-menu-about"><a href="/SingCms/?m=YcHome&c=Aboutus&a=index">关于我们</a></li>
          <li class="hw-menu-zhaoping"><a href="/SingCms/?m=YcHome&c=Recruit&a=index">招贤纳士 </a></li>
        </ul>
      </div>

    </div>
  </div>
</header>





<div class="toppic">
  <div class="am-container-1">
    <div class="toppic-title left">
      <i class="am-icon-newspaper-o toppic-title-i"></i>
      <span class="toppic-title-span">新闻详情</span>
      <p>News Information</p>
    </div>
    <div class="right toppic-progress">
      <span><a href="/SingCms/?m=YcHome&c=News&a=index" class="w-white">新闻动态</a></span>
      <i class=" am-icon-arrow-circle-right w-white"></i>
      <span><a href="/SingCms/?m=YcHome&c=Newsinform&a=index" class="w-white">新闻详情</a></span>
    </div>
  </div>
</div>

<div class="am-container-1 margin-t30">
  <div class="words-title ">
    <span>关于召开2015全国互联网工作年会的通知</span>
    <div>2015-12-29</div>
  </div>
</div>

<div class="solution-inform">
  <div class=" solution-inform-content-all">
    <div class="solution-inform-content">
      <!--<p class="inform-content-p">华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，</p>-->
      <div class="solution-inform-content-img">
        <img src="/SingCms/Public/YcHome//img/inform.png"/>
        <div class="clear"></div>
      </div>
      <p class="solution-inform-content-words">(一) 业务管理预受理单据
        1) 预受理单据用于需要上门取货的客户及货物信息的录入。预受理单据可以由发货客户远程录入，也可以由业务员录入。录入的预受理单据信息主要包括以下内容：
        2) 发货人信息；收货人信息；终点站、到站、付款方式是否保险（保价费）及
        3) 货物信息：货物名称、货物包装、件数、运费。
        4) 预受理单支持多种条件组合查询。
      </p>

      <p class="solution-inform-content-words">
        醒信息后，可以点击进入进行预受理派车操作（录入车号、默认司机信息（姓名、电话），提交派车）。
        2) 也可以通过查询客户名称、可以通过日期实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，</br>
      </p>

      <p class="solution-inform-content-words">(一) 业务管理预受理单据
        1) 预受理单据用于需要上门取货的客户及货物信息的录入。预受理单据可以由发货客户远程录入，也可以由业务员录入。录入的预受理单据信息主要包括以下内容：
        2) 发货人信息；收货人信息；终点站、到站、付款方式是否保险（保价费）及
        3) 货物信息：货物名称、货物包装、件数、运费。
        4) 预受理单支持多种条件组合查询。
      </p>

      <p class="solution-inform-content-words">
        醒信息后，可以点击进入进行预受理派车操作（录入车号、默认司机信息（姓名、电话），提交派车）。
        2) 也可以通过查询客户名称、可以通过日期实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，</br>
      </p>



    </div>
  </div>
</div>

<script>
  $('.hw-menu .hw-menu-news').addClass("hw-menu-active");
</script>




<footer class="footer ">

    <ul>

        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title" style="margin-bottom: 10px;font-size: 16px;">联系我们</div>
            <div class="part-5-words2">
                <span>地址:安徽省合肥市经济开发区桃花工业园汤口路与泰山路交口以南安徽省远信管件有限公司2幢车间</span>
                <span>电话:15856993974(涂先生)</span>
                <span>邮箱:965256718@qq.com</span>
            </div>
        </li>
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
            <div class="part-5-title">相关链接</div>
            <div class="part-5-words2">
                <ul class="part-5-words2-ul">
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="solutions.html">解决方案</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="product-show.html">产品展示</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="customer-case.html">客户案例</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="service-center.html">服务中心</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="about-us.html">关于我们</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="recruit.html">招贤纳士</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </li>
        <div class="clear"></div>
    </ul>

</footer>


</body>

</html>