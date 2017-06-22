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
    <script src="//SingCms/Public/js/kindeditor/kindeditor-all.js"></script>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="/SingCms/admin.php?c=product">产品管理</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> 产品添加
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">

                    <form class="form-horizontal" id="singcms-form">

                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">产品名称:</label>
                            <div class="col-sm-5">
                                <input type="text" name="product_name" class="form-control" id="inputname" placeholder="请填写产品名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">摘要:</label>
                            <div class="col-sm-5">
                                <input type="text" name="product_subject" class="form-control" id="inputname" placeholder="请填写摘要">
                            </div>
                        </div>
                        <!--<div class="form-group">-->
                            <!--<label for="inputname" class="col-sm-2 control-label">缩图:</label>-->
                            <!--<div class="col-sm-5">-->
                                <!--<input id="file_upload"  type="file" multiple="true" >-->
                                <!--<img style="display: none" id="upload_org_code_img" src="" width="150" height="150">-->
                                <!--<input id="file_upload_image" name="product_pic" type="hidden" multiple="true" value="">-->
                            <!--</div>-->
                        <!--</div>-->

                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">所属分类:</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="product_classify_id">
                                    <?php if(is_array($productClassifys)): foreach($productClassifys as $key=>$productClassify): ?><option value="<?php echo ($productClassify["id"]); ?>"><?php echo ($productClassify["product_classify_name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">内容:</label>
                            <div class="col-sm-5">
                                <textarea class="input js-editor" id="editor_singcms" name="product_desc" rows="20" style="width: 100%;height: 150px;"></textarea>
                            </div>
                        </div>
                        <!--图片上传-->
                        <div id="uploadMultiPic" style="width: 870px;min-height: 200px;background: #F1F1DB;text-align: center;margin-left: 50px;margin-bottom: 20px;">

                            <div id="upload" ></div>
                            <input type="text" name="file1" class="cfiel1" value="" style="display: none;">
                            <input type="text" name="file2" class="cfiel2" value="" style="display: none;">
                            <input type="text" name="file3" class="cfiel3" value="" style="display: none;">
                        </div>

                       

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-default" id="singcms-button-submit">提交</button>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<script>
    var SCOPE = {
        'save_url' : '/SingCms/admin.php?c=product&a=saveproduct',
        'jump_url' : '/SingCms/admin.php?c=product',
    };

</script>
<!-- /#wrapper -->
<script src="//SingCms/Public/js/admin/image.js"></script>
<script>
    // 6.2
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_singcms',{
            uploadJson : '/SingCms/admin.php?c=image&a=kindupload',
            afterBlur : function(){this.sync();}, //
        });
    });
</script>


<script type="text/javascript">

    /*
     * 服务器地址,成功返回,失败返回参数格式依照jquery.ajax习惯;
     * 其他参数同WebUploader
     */

    $('#upload').diyUpload({
        url:'/SingCms/Public/upload/server/fileupload.php',
        //最大上传的文件数量,
        fileNumLimit:3,
        //单个文件大小(单位字节);
        fileSingleSizeLimit:50000 * 1024,
        success:function( data ) {
//      var dataObj = JSON.parse(data._raw);
//      console.info( data._raw );
            console.info( data._raw );
            upload_file(data._raw);
        },
        error:function( err ) {
            console.info( err );
        }
    });

    function upload_file(path){
//    alert("/SingCms/Public/upload/server/"+path);
//    $(".imgtest").attr("src","/SingCms/Public/upload/server/"+path);
        var path_tmp = "/SingCms/Public/upload/server/"+path;
        if($(".cfiel1").attr("value") == ""){
            $(".cfiel1").attr("value",path_tmp);
        }else if($(".cfiel2").attr("value") == ""){
            $(".cfiel2").attr("value",path_tmp);
        }else if($(".cfiel3").attr("value") == ""){
            $(".cfiel3").attr("value",path_tmp);
        }

    }
</script>
<script src="/SingCms/Public/js/admin/common.js"></script>



</body>

</html>