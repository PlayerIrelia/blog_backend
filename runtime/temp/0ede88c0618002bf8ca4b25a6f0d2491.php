<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:103:"D:\Web\phpStudy\PHPTutorial\WWW\02.Frame\tp5.0-blog\public/../application/backend\view\post\create.html";i:1532876080;s:92:"D:\Web\phpStudy\PHPTutorial\WWW\02.Frame\tp5.0-blog\application\backend\view\common\app.html";i:1532959121;}*/ ?>
<!DOCTYPE html>
<html lang="ch">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>后台管理</title>
    <!-- Bootstrap Core CSS -->
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/static/admin/css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="/static/admin/css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/static/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">切换导航(Toggle navigation)</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">后台管理</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 管理员 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li>-->
                            <!--<a href="#"><i class="fa fa-fw fa-user"></i> 用户(Profile)</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="#"><i class="fa fa-fw fa-envelope"></i> 邮 件(Inbox)</a>-->
                        <!--</li>-->
                        <li>
                            <a href="<?php echo url('backend/account/index'); ?>"><i class="fa fa-fw fa-gear"></i> 修改密码</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo url('backend/login/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> 注销(Log Out)</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li id="Dashboard" class="">
                        <a href="<?php echo url('/admin'); ?>"><i class="fa fa-fw fa-dashboard"></i> 主面板 (Dashboard)</a>
                    </li>
                    <li id="Tags" class="">
                        <a href="<?php echo url('/admin/tag/index'); ?>"><i class="fa fa-fw fa-dashboard"></i> 标签管理 (Tags)</a>
                    </li>
                    <li id="Article" class="">
                        <a href="<?php echo url('/admin/post/index'); ?>"><i class="fa fa-fw fa-dashboard"></i> 文章管理 (Article)</a>
                    </li>
                    <li id="Comment" class="">
                        <a href="<?php echo url('/admin/comment/index'); ?>"><i class="fa fa-fw fa-dashboard"></i> 回复管理 (Comment)</a>
                    </li>
                    <li id="Setting" class="">
                        <a href="<?php echo url('/admin/setting'); ?>"><i class="fa fa-fw fa-dashboard"></i> 系统配置 (Setting)</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                
					
<script>	
	document.getElementById("Article").className = "active";
</script>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Article Management <small> (文章管理) </small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Article management
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="col-sm-12">
	<form action="" method="post" class="form-horizontal">
    
    	<div class="form-group">
        	<label class="control-label col-sm-1">标 题：</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" placeholder="请输入标题">
            </div>
        </div>
        
        <div class="form-group">
        	<label class="control-label col-sm-1">标 签：</label>
            <div class="col-sm-10">
                <?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?>
                <label style="margin-top:8px">
                    <input type="checkbox" name="tags[]" value="<?php echo $tag->id; ?>">&nbsp;&nbsp;<?php echo $tag->name; ?>
                </label>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
      
        <div class="form-group">
        	<label class="control-label col-sm-1">内 容：</label>
            <div class="col-sm-10">
            	<textarea name="content" class="form-control" placeholder="请输入内容" rows="30" cols="30">
                </textarea>
             </div>
        </div>
        
         <div class="form-group">
         	<label class="control-label col-sm-1"></label>
        	<div class="col-sm-11 col-sm-offset-2">
            	<button type="submit" class="btn btn-primary"> 添 加 </button>
            </div>
        </div>
        
    </form>
</div>

	
                    
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <!-- jQuery -->
    <script src="/static/admin/js/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="/static/admin/js/bootstrap.min.js"></script>
    
    <!-- Morris Charts JavaScript -->
    <script src="/static/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="/static/admin/js/plugins/morris/morris.min.js"></script>
    <script src="/static/admin/js/plugins/morris/morris-data.js"></script>
    
</body>
</html>