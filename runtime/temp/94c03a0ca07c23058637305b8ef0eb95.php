<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:100:"D:\Web\phpStudy\PHPTutorial\WWW\02.Frame\tp5.0-blog\public/../application/index\view\index\read.html";i:1533034139;s:90:"D:\Web\phpStudy\PHPTutorial\WWW\02.Frame\tp5.0-blog\application\index\view\common\app.html";i:1533025104;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>
        
    <?php echo $post->title; ?> - <?php echo $webName; ?>

    </title>

    <meta name="keywords" content="
<?php echo $post->title; ?>
">
    <meta name="description" content="
<?php echo mb_substr($post->content,0,120); ?>
">

    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header style="line-height:200px;">
    <h1 class="text-center">
        <a href="<?php echo url('/'); ?>"><?php echo $webName; ?></a>
    </h1>
    <hr><hr>
</header>


<div class="col-sm-12">
    <form action="" method="post" class="form-horizontal">

        <div class="form-group">
            <label class="control-label col-sm-1">标 题：</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" placeholder="标题(title)" value="<?php echo $post->title; ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1">内 容：</label>
            <div class="col-sm-10">
            	<textarea name="content" class="form-control" placeholder="正文内容 (article_content)" rows="30" cols="30"><?php echo $post->content; ?>
                </textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1">创建时间：</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" placeholder="时间信息(temporal_information)" value="<?php echo $post->create_time; ?>">
            </div>
        </div>
    </form>
    <hr>
    <hr>
</div>

<div class="col-sm-12">
    <form method="post" action="<?php echo url('index/comment/save',['id'=>$post->id]); ?>" method="post" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-1">内 容：</label>
            <div class="col-sm-10">
            	<textarea name="content" class="form-control" placeholder="评论内容 (comment_content)" rows="4" >
                </textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-1"></label>
            <div class="col-sm-11 col-sm-offset-1">
                <button type="submit" class="btn btn-primary"> 提交评论 </button>
            </div>
        </div>
    </form>
</div>
<?php if(is_array($post->getShowComments()) || $post->getShowComments() instanceof \think\Collection || $post->getShowComments() instanceof \think\Paginator): $i = 0; $__LIST__ = $post->getShowComments();if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?>
<div class="col-sm-10 col-sm-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $comment->create_time; ?>： 路人甲 说：
        </div>
        <div class="panel-body">
                <span style="text-indent: 2em;">
                    <?php echo $comment->content; ?>
                </span>
        </div>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
<div class="col-sm-10 col-sm-offset-1">
    <?php echo $post->getShowComments()->render(); ?>
</div>


<script src="https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>