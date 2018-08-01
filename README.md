ThinkPHP 5.0 - Payer.Irelia_blog
===============

[![Total Downloads](https://poser.pugx.org/topthink/think/downloads)](https://packagist.org/packages/topthink/think)
[![Latest Stable Version](https://poser.pugx.org/topthink/think/v/stable)](https://packagist.org/packages/topthink/think)
[![Latest Unstable Version](https://poser.pugx.org/topthink/think/v/unstable)](https://packagist.org/packages/topthink/think)
[![License](https://poser.pugx.org/topthink/think/license)](https://packagist.org/packages/topthink/think)

博客基于Thinphp5.0.14版本与Bootstrap3.3.7版本进行开发，面向开发自己博客的朋友，内容包含前台后台（详细阅读下表，评估是否合适用于自己），未来预期会加入更多内容。


The blog was developed on the basis of Thinkphp5.0.14 and Bootstrap3.3.7.It is aimed at the friends who develop their own blog. The content includes the front and back stage (read the following table and evaluate where it is appropriate for them)，and more content is expected to be added in the future.

前端部分：
+ 公共页面与内容页面分离
+ 标题、关键字、描述动态提取
+ 文章列表
+ 文章详细内容
+ 评论列表与评论提交

Front end:
+ Separation of public and content pages
+ Dynamic extraction of title, keyword, and description
+ Article list
+ Article details
+ Comment list adn comment submission

后台部分：
+ 登录检测模块单独写出方法
+ 对于内容的统计
+ 文章标签（具体用于模型一对多关联）
+ behavior.钩子的应用
+ 文章编辑（增加、修改、删除、查找）
+ 回复功能与审核回复（具体用于模型多对多关联）
+ 网站设置相关

Back stage end:
+ The login module writes the method separately
+ Statistics on content
+ Article label(for model one-to-many correlation)
+ Behavior.Application of hooks
+ Article editing(add,modify,delete,find)
+ Reply function and audit reply(for model many-to-many correlation)
+ Website settings related

> ThinkPHP5的运行环境要求PHP7.0以上。<br>
> ThinkPHP5's operating enviromment requires PHP7.0 above.

详细开发文档参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)<Br>
Refer to the detailed development documentation

## 目录结构 (directory structure)

当前的目录结构如下：<br>
The current directory structure is as follows:

~~~
www  WEB部署目录（或者子目录）
├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  │  └─model           模型目录
│  ├─backend            后台模块目录
│  │  ├─controller      控制器目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  ├─behaviors          行为钩子目录
│  ├─index              后台模块目录
│  │  ├─controller      控制器目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  │
│  ├─command.php        命令行工具配置文件
│  ├─common.php         公共函数文件
│  ├─config.php         公共配置文件
│  ├─route.php          路由配置文件
│  ├─tags.php           应用行为扩展定义文件
│  └─database.php       数据库配置文件
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Think类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
│
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
~~~

> router.php用于php自带webserver支持，可用于快速测试
> 切换到public目录后，启动命令：php -S localhost:8888  router.php
> 上面的目录结构和名称是可以改变的，这取决于你的入口文件和配置参数。

> router.php is used for PHP's own webserver support and can be used for quick testing
After 
> switches to the public directory, the launch command is php-s localhost:8888 router.php
The directory structure and name above 
> can be changed, depending on your entry file and configuration parameters.

## 使用方法 (usage)

下载压缩包或者使用Git进行包下载，放到你的环境中。推荐ngnix 或者 apache + mysql +php7.0.<br>
Download the compressed package or use Git to download the package and put it in your environment.Ngnix or apache + mysql +php7.0 is recommended.

### 项目创建 (Project creation)

*   项目根目录,命令行: php think migrate:run 执行数据库创建
*   项目根目录,命令行: php think seed:run 执行数据库填充

### 项目创建 (Project creation)
* Project root directory, command line: PHP think migrate:run performs database creation
* Project root, command line: PHP think seed:run performs database filling

### 更多命令 (More command)
> migrate:breakpoint;断点<br>
> migrate:create;创建<br> 
> migrate:rollback;回滚<br>
> seed:create;seed创建 

### 关于 (About)
数据库迁移工具在开发手册中可以找到，具体编写内容请到migration官方查找编写命令<br>
The database migration tool can be found in the development manual. For details, please go to the migration official search and write the command

作者-王大狗<br>
Author - wang da dog
"#blog_backend"
