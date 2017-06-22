<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>宇承后台管理平台</title>
    <!-- Bootstrap Core CSS -->
    <link href="/SingCms/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/SingCms/Public/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/SingCms/Public/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/SingCms/Public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href=".//SingCms/Public/css/sing/common.css" />
    <link rel="stylesheet" href=".//SingCms/Public/css/party/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href=".//SingCms/Public/css/party/uploadify.css">

    <!-- jQuery -->
    <script src="/SingCms/Public/js/jquery.js"></script>
    <script src="/SingCms/Public/js/bootstrap.min.js"></script>
    <script src="/SingCms/Public/js/dialog/layer.js"></script>
    <script src="/SingCms/Public/js/dialog.js"></script>
    <script type="text/javascript" src="/SingCms/Public/js/party/jquery.uploadify.js"></script>


    <link rel="stylesheet" href="/SingCms/Public/js/dialog/skin/layer.css"  media="all">

    <!--图片裁剪js  css-->
    <script src="/SingCms/Public/js/cropper.min.js"></script>
    <script src="/SingCms/Public/js/sitelogo.js"></script>
    <link href="/SingCms/Public/css/cropper.min.css" rel="stylesheet">
    <link href="/SingCms/Public/css/sitelogo.css" rel="stylesheet">

    <!--多图片上传-->
    <link rel="stylesheet" type="text/css" href="/SingCms/Public/upload/diyUpload/css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="/SingCms/Public/upload/diyUpload/css/diyUpload.css">
    <script type="text/javascript" src="/SingCms/Public/upload/diyUpload/js/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="/SingCms/Public/upload/diyUpload/js/diyUpload.js"></script>

</head>

    



<body>
<div id="wrapper">

    <?php
 $navs = D("Menu")->getAdminMenus(); $username = getLoginUsername(); foreach($navs as $k=>$v) { if($v['c'] == 'admin' && $username != 'admin') { unset($navs[$k]); } if($v['c'] == 'menu' && $username != 'admin') { unset($navs[$k]); } } $index = 'index'; ?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    
    <a class="navbar-brand" style="color:white;" >宇承内容管理平台</a>
  </div>
  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
    
    
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo getLoginUsername()?> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <a href="/SingCms/admin.php?c=admin&a=personal"><i class="fa fa-fw fa-user"></i> 个人中心</a>
        </li>
       
        <li class="divider"></li>
        <li>
          <a href="/SingCms/admin.php?c=login&a=loginout"><i class="fa fa-fw fa-power-off"></i> 退出</a>
        </li>
      </ul>
    </li>
  </ul>
  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav nav_list">
      <li <?php echo (getActive($index)); ?>>
        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> 首页</a>
      </li>
      <?php if(is_array($navs)): $i = 0; $__LIST__ = $navs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navo): $mod = ($i % 2 );++$i;?><li <?php echo (getActive($navo["c"])); ?>>
        <a href="<?php echo (getAdminMenuUrl($navo)); ?>"><i class="fa fa-fw fa-bar-chart-o"></i><?php echo ($navo["name"]); ?></a>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
  </div>
  <!-- /.navbar-collapse -->
</nav>
    <div id="page-wrapper">

        <div class="container-fluid" >

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="/SingCms/admin.php?c=content">案例管理</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-table"></i>案例列表
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div style="margin-bottom:15px;">
                <button  id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加 </button>
            </div>
            <div class="row">
                <form action="/SingCms/admin.php" method="get">

                    <input type="hidden" name="c" value="customer"/>
                    <input type="hidden" name="a" value="index"/>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input class="form-control" name="customer_name" type="text" value="" placeholder="输入搜索信息" />
                            <span class="input-group-btn">
                  <button id="sub_data" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-lg-6" style="width: 100%;">
                    <h3></h3>
                    <div class="table-responsive">
                        <form id="singcms-listorder">
                            <table class="table table-bordered table-hover singcms-table">
                                <thead>
                                <tr>
                                    <!--<th id="singcms-checkbox-all" width="10"><input type="checkbox"/></th>-->
                                    <!--<th width="14">排序</th>&lt;!&ndash;6.7&ndash;&gt;-->
                                    <!--<th>id</th>-->
                                    <th>案例名称</th>
                                    <th>案例简要</th>
                                    <th>案例描述</th>
                                    <th>封面图</th>
                                    <th>时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($customers)): $i = 0; $__LIST__ = $customers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$customer): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($customer["customer_name"]); ?></td>
                                        <td><?php echo ($customer["customer_subject"]); ?></td>
                                        <td><?php echo ($customer["customer_desc"]); ?></td>
                                        <td style="text-align: center;">
                                            <img src="<?php echo ($customer["thumb"]); ?>" style="height: 50px;width: 50px;">
                                        </td>
                                        <td><?php echo (date("Y-m-d H:i",$customer["create_time"])); ?></td>
                                        <td><span class="sing_cursor glyphicon glyphicon-edit" aria-hidden="true" id="singcms-edit" attr-id="<?php echo ($new["news_id"]); ?>" ></span>
                                            <a  id="singcms-delete"  attr-id="<?php echo ($new["news_id"]); ?>"  attr-message="删除">
                                                <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                            </a>
                                            <!--<a target="_blank" href="/SingCms/index.php?c=detail&a=view&id=<?php echo ($new["news_id"]); ?>" class="sing_cursor glyphicon glyphicon-eye-open" aria-hidden="true"  ></a>-->

                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                                </tbody>
                            </table>
                            <nav>

                                <!--<ul >-->
                                    <!--<?php echo ($pageres); ?>-->
                                <!--</ul>-->
                                <div class="pages">
                                    <?php echo ($pageres); ?>
                                </div>

                            </nav>
                            <div style="display: none">
                                <button  id="button-listorder" type="button" class="btn btn-primary dropdown-toggle" ><span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span>更新排序</button>
                            </div>
                        </form>
                        <div class="input-group" style="display: none">
                            <select class="form-control" name="position_id" id="select-push">
                                <option value="0">请选择推荐位进行推送</option>
                                <?php if(is_array($positions)): foreach($positions as $key=>$position): ?><option value="<?php echo ($position["id"]); ?>"><?php echo ($position["name"]); ?></option><?php endforeach; endif; ?>
                            </select>
                            <button id="singcms-push" type="button" class="btn btn-primary">推送</button>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.row -->



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script>
    var SCOPE = {
        'add_url' : '/SingCms/admin.php?c=customer&a=add',
    }
</script>
<script src="/SingCms/Public/js/admin/common.js"></script>



</body>

</html>