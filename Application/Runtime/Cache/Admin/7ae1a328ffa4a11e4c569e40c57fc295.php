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
<link rel="stylesheet" href="/Public/Plugin/uploadify/uploadify.css">
<style>
	#table td {
	 	 vertical-align:middle;
	}
	.uploadify-button {
	    background-color: transparent;
	    border: none;
	    padding: 0;
	}
	.uploadify:hover .uploadify-button {
	    background-color: transparent;
	}
</style>
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



                        <!-- <li <?php if((strtolower(CONTROLLER_NAME)) == "question"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Question/index');?>">
                                <i class="fa fa-comments"></i>
                                <span>问题列表</span>
                            </a>
                        </li>

                        <li class="dropdown show-on-hover <?php if(in_array(strtolower(CONTROLLER_NAME), ['article'])): ?>active<?php endif; ?>">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-file"></i>
                                <span>文章管理</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('Article/add');?>">
                                        <span>添加文章</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Article/index');?>">
                                        <span>文章列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if((strtolower(CONTROLLER_NAME)) == "admanage"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('AdManage/index');?>">
                                <i class="fa fa-desktop"></i>
                                <span>广告位管理</span>
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
                <div class="content-wrap bg-white" style="margin-top:1px;">
                    <div class="row">
                        <div class="portfolio-ajax" style="display: block;">
		                    <div class="header porfolio-controls" style="z-index:1;">
		                        <a <?php if($pre_id): ?>href="<?php echo U('Service/photo', ['id' => $service_id, 'pid' => $pre_id]);?>"<?php endif; ?> class="prev-portfolio-item <?php if(!$pre_id): ?>disabled<?php endif; ?>">
									前一张
								</a>
		                        <a href="javascript:;" class="close-view" data-toggle="modal" data-target=".bs-modal-sm">
									添加
								</a>
		                        <a <?php if($next_id): ?>href="<?php echo U('Service/photo', ['id' => $service_id, 'pid' => $next_id]);?>"<?php endif; ?> class="next-portfolio-item <?php if(!$next_id): ?>disabled<?php endif; ?>" >
								下一张
								</a>
		                    </div>
		                    <div class="portfolio-container">
		                        <div class="row">
		                            <div class="col-sm-offset-3 col-sm-7">
		                                <div class="portfolio-content">
		                                	<img id="photo" <?php if($photo): ?>src="/<?php echo ($photo["thumb"]); ?>"<?php else: ?>src="/Public/Default/images/no_image_350.jpg"<?php endif; ?> alt="">
										</div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
                    </div>
                </div>
            </section>
    </section>
</div>
<!-- modal start -->
<div class="modal fade bs-modal-sm" tabindex="-1" id="my-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title text-center" id="myModalLabel">尺寸：<?php echo ($size[0]); ?> * <?php echo ($size[1]); ?>px</h5>
            </div>
            <div class="modal-body">
                <form id="payment-form" method="post">
                    <div class="form-group">
                         <input type="file" name="face" id="upload" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-default btn-sm" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
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
<!-- page special js plugin here -->
<script type="text/javascript" src="/Public/Plugin/uploadify/jquery.uploadify.min.js"></script>
<script>
  $(function() {
	setTimeout(function() {
		 var sid = "<?php echo session_id();?>";
		 var service_id = "<?php echo ($service_id); ?>";
		    $('#upload').uploadify({
		      'swf'           :    "/Public/Plugin/uploadify/uploadify.swf",
		      'uploader'      :    "<?php echo U('Base/uploadServicePhoto');?>",
		      'buttonImage'   :    "/Public/Plugin/uploadify/browse-btn.png",
		      'width'         :    "120",
		      'height'        :    "30",
		      'fileTypeDesc'  :    "Image file",
		      'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
		      'formData'      :    {"session_id"  : sid, "service_id" : service_id},
		      'multi'         :     false,
		      'removeTimeout' :     1,
		      onUploadSuccess :     function(file, data, response) {
		        eval('var data = ' + data);
		        if (data.status == 1) {
		        	$('#photo').attr('src', "/"+data.thumb);
		        	$('#my-modal').modal('hide');
		        } else {
		        	alert('上传失败，请重试');
		        }
		      }
		    });
	}, 10);
  });
</script>
</body>
</html>