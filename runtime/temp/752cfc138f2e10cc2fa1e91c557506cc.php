<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:101:"D:\Web\phpStudy\PHPTutorial\WWW\02.Frame\tp5.0-blog\public/../application/index\view\index\index.html";i:1533021304;s:90:"D:\Web\phpStudy\PHPTutorial\WWW\02.Frame\tp5.0-blog\application\index\view\common\app.html";i:1533025104;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>
        
           <?php echo $webName; ?>
        
    </title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header style="line-height:200px;">
    <h1 class="text-center">
        <a href="<?php echo url('/'); ?>"><?php echo $webName; ?></a>
    </h1>
    <hr><hr>
</header>


<div class='container'>
    <div class="row">
        <div class="col-sm-12">
            <?php if(is_array($posts) || $posts instanceof \think\Collection || $posts instanceof \think\Paginator): $i = 0; $__LIST__ = $posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo url('index/index/read',['id'=>$post->id]); ?>">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $post->title; ?>
                    </div>
                    <div class="panel-body">
                        <span>创建时间：<?php echo $post->create_time; ?></span>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </a>
        </div>
        <div class="col-sm-12 text-center" style="margin-top: 20px;">
            <?php echo $posts->render(); ?>
        </div>
    </div>
</div>



<script src="https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>