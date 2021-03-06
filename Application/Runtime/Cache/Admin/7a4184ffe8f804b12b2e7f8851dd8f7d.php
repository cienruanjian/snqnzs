<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta name="description" content="后台管理系统">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

    <title><?php echo ($titleL1); ?> - <?php echo C('BACKEND_NAME');?></title>
    <link rel="stylesheet" href="/Public/Admin/vendor/offline/theme.css">
    <link rel="stylesheet" href="/Public/Admin/vendor/pace/theme.css">


    <link rel="stylesheet" href="/Public/Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/Admin/css/animate.min.css">

    <link rel="stylesheet" href="/Public/Admin/css/panel.css">

    <link rel="stylesheet" href="/Public/Admin/css/skins/palette.1.css" id="skin">
    <link rel="stylesheet" href="/Public/Admin/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="/Public/Admin/css/main.css">
    <link rel="stylesheet" href="/Public/Admin/css/common.css">
    


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/Public/Admin/vendor/modernizr.js"></script>
<!-- page special css plugin here -->
</head>
<body>
    <div class="app">
        <header class="header header-fixed navbar">
            <div class="brand">
                <a href="javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
                <a href="<?php echo U('Index/index');?>" class="navbar-brand text-white">
                    <i class="fa fa-stop mg-r-sm"></i>
                    <span class="heading-font">
						青年之声<b>管理系统</b>
					</span>
                </a>
            </div>
            <form class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group">
                    <button class="btn no-border no-margin bg-none no-pd-l" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" class="form-control no-border no-padding search" placeholder="">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right off-right">
                <li class="hidden-xs">
                    <a href="javascript:;">
						欢迎您，<?php echo session('login');?>
					</a>
                </li>
                <li class="notifications dropdown hidden-xs">
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <div class="badge badge-top bg-danger animated flash">0</div>
                    </a>
                </li>
                <li class="quickmenu">
                    <a href="javascript:;" data-toggle="dropdown"  style="font-size:18px;">
                        <i class="fa fa-user"></i>
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        
                        <li>
                            <a href="<?php echo U('My/index');?>">修改密码</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Login/logout');?>">退出</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>

        <section class="layout">

            <aside class="sidebar canvas-left">

                <nav class="main-navigation">
                    <ul>
                        <li <?php if((strtolower(CONTROLLER_NAME)) == "index"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Index/index');?>">
                                <i class="fa fa-coffee"></i>
                                <span>控制台</span>
                            </a>
                        </li>

                         <li <?php if((strtolower(CONTROLLER_NAME)) == "admanage"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('AdManage/index');?>">
                                <i class="fa fa-desktop"></i>
                                <span>广告管理</span>
                            </a>
                        </li>

                        <li <?php if((strtolower(CONTROLLER_NAME)) == "acticle"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Article/index');?>">
                                <i class="fa fa-file"></i>
                                <span>文章管理</span>
                            </a>
                        </li>

                        <li <?php if((strtolower(CONTROLLER_NAME)) == "service"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Service/index');?>">
                                <i class="fa fa-dribbble"></i>
                                <span>服务联盟</span>
                            </a>
                        </li>

                        <li <?php if((strtolower(CONTROLLER_NAME)) == "microcircle"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('MicroCircle/index');?>">
                                <i class="fa fa-circle"></i>
                                <span>思春微圈</span>
                            </a>
                        </li>




                        <!-- <li <?php if((strtolower(CONTROLLER_NAME)) == "question"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Question/index');?>">
                                <i class="fa fa-comments"></i>
                                <span>问题列表</span>
                            </a>
                        </li>

                        <li class="dropdown show-on-hover <?php if(in_array(strtolower(CONTROLLER_NAME), ['service'])): ?>active<?php endif; ?>">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-dribbble"></i>
                                <span>服务联盟</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('Service/add');?>">
                                        <span>添加联盟</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Service/index');?>">
                                        <span>联盟列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li <?php if((strtolower(CONTROLLER_NAME)) == "category"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Category/index');?>">
                                <i class="fa fa-gears"></i>
                                <span>类别设置</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->


                <footer>
                    <div class="about-app pd-md animated pulse">
                        <span>
							<b><?php echo C('BACKEND_NAME');?></b>&#32;响应式布局。
						</span>
                    </div>
                    <div class="footer-toolbar pull-left">
                        <a href="javascript:;" class="pull-left help">
                            <i class="fa fa-question-circle"></i>
                        </a>
                        <a href="javascript:;" class="toggle-sidebar pull-right hidden-xs">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>
                </footer>

            </aside>
        <section class="main-content">
        	<header class="header header-fixed navbar bg-default">
                <ul class="nav navbar-nav pull-left">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ($titleL2); ?><b class="mg-l-xs fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('Article/index', array('type' => 1));?>">同心同声</a>
                        </ul>
                    </li>
                </ul>
                <div class="pull-left">
                    <a href="<?php echo U('Article/add', array('type' => $_GET['type']));?>" class="btn btn-xs btn-success navbar-text" style="margin-left:2px">添加</a>
                </div>
                <div class="pull-right">
                    <p class="navbar-text pull-left mg-r-xs">
                        显示方式:
                    </p>
                    <div class="btn-group view-options mg-r-md" data-toggle="buttons">
                        <label class="btn btn-primary btn-sm btn-rounded navbar-btn no-margin" data-view="grid">
                            <input type="radio" name="options" id="option1">
                            <i class="fa fa-th"></i>
                        </label>
                        <label class="btn btn-primary btn-rounded navbar-btn btn-sm  active" data-view="list">
                            <input type="radio" name="options" id="option2">
                            <i class="fa fa-list"></i>
                        </label>
                    </div>
                </div>
            </header>
            <div class="content-wrap">
                <div class="row">
                	<!-- content start -->
                	 <div class="switcher view-list">
                            <div class="row feed no-margin">
                                <?php if(!empty($list)): if(is_array($list)): foreach($list as $key=>$v): ?><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 switch-item filter-<?php echo ($v["cate_id"]); ?>">
    	                                    <section class="panel <?php if(!$v['thumb']): ?>bg-warning<?php endif; ?>">
    	                                    	<?php if($v['thumb']): ?><div class="thumb">
    		                                            <img class="img-responsive" alt="Responsive image" src="/<?php echo ($v["thumb"]); ?>">
    		                                        </div><?php endif; ?>
    	                                        <div class="panel-body">
    	                                            <div class="switcher-content">
    	                                                <p>
    	                                                	<?php echo ($v["title"]); ?> &nbsp;&nbsp;&nbsp;<span class="text-default"><?php echo (date("Y-m-d", $v["create_at"])); ?></span>
    	                                                </p>
    	                                                <p><?php echo (mb_substr($v["desc"], 0, 60, 'UTF-8')); ?>...</p>
    	                                                <ul class="text-muted list-style-none" style="font-size:14px;">
    	                                                	<a href="<?php echo U('Article/edit', ['id' => $v['id']]);?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="编辑"><span class="fa fa-edit text-success"></span></a>
    	                                                	<a class="del" href="<?php echo U('Article/del', ['type' => $v['type'],'id' => $v['id']]);?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="删除"><span class="fa fa-trash-o text-success"></span></a>
    	                                                </ul>
    	                                                
    	                                            </div>
    	                                        </div>
    	                                    </section>
    	                                </div><?php endforeach; endif; ?>
                                <?php else: ?>
                                    <h4 style="color:#999; text-align:center; margin-top:50px;">暂时没有内容~</h4><?php endif; ?>
                            </div>
                        </div>
                	<!-- content end -->
                	<!-- page -->
                		<section class="panel bg-none">
                			<div class="page">
                				<?php echo ($page); ?>
                			</div>
                			<div style="clear:both;"></div>
                       </section>
                	<!-- page-end -->
                </div>
            </div>
        </section>
    </section>
</div>
<script src="/Public/Admin/vendor/jquery-1.11.1.min.js"></script>
<script src="/Public/Admin/bootstrap/js/bootstrap.js"></script>
<script src="/Public/Admin/vendor/jquery.easing.min.js"></script>
<script src="/Public/Admin/vendor/jquery.placeholder.js"></script>
<script src="/Public/Admin/vendor/fastclick.js"></script>

<script src="/Public/Admin/vendor/offline/offline.min.js"></script>
<script src="/Public/Admin/vendor/pace/pace.min.js"></script>
<script src="/Public/Admin/js/off-canvas.js"></script>
<script src="/Public/Admin/js/main.js"></script>
<script src="/Public/Admin/js/panel.js"></script>

<script src="/Public/Admin/js/components.js"></script>
<script src="/Public/Admin/vendor/slider/bootstrap-slider.js"></script>
<script src="/Public/Admin/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="/Public/Admin/js/feed.js"></script>

<script src="/Public/Admin/js/common.js"></script> 
  
</body>
</html>