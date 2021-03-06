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
<link rel="stylesheet" href="/Public/Plugin/uploadify/uploadify.css">
<!-- page special css plugin here -->
<style type="text/css">
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
            <div class="content-wrap">
                <div class="row">
                	<div class="col-lg-12">
                 	<section class="panel">
                      <header class="panel-heading"><?php echo ($titleL1); ?></header>
                      <div class="panel-body">
                          <form class="form-horizontal bordered-group" role="form" action="<?php echo U('Service/editHandle');?>" method="post">
                              
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label"><span class="red">* </span>名称</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="name" value="<?php echo ($data["name"]); ?>" placeholder="服务联盟名称" class="form-control" id="inputEmail3">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-sm-2 control-label"><span class="red">* </span>简介</label>
                                  <div class="col-sm-8">
                                      <textarea name="intro" class="form-control" placeholder="简介"><?php echo ($data["intro"]); ?></textarea>
                                  </div>
                              </div> 

                              <div class="form-group">
                                  <label for="inputEmail5" class="col-sm-2 control-label">联系电话</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="phone"  value="<?php echo ($data["phone"]); ?>"  id="inputEmail5" placeholder="联系电话">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="inputEmail5" class="col-sm-2 control-label">邮箱</label>
                                  <div class="col-sm-8">
                                      <input type="email" class="form-control"   value="<?php echo ($data["email"]); ?>" name="email" placeholder="邮箱" id="inputEmail5">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="inputEmail5" class="col-sm-2 control-label">地址</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" value="<?php echo ($data["addr"]); ?>"  name="addr" id="inputEmail5" placeholder="地址">
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="inputEmail5" class="col-sm-2 control-label">微信</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control"  value="<?php echo ($data["weixin"]); ?>"  name="weixin" id="inputEmail5" placeholder="微信账号">
                                  </div>
                              </div>
                              
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">微信二维码</label>
                                  <div class="col-sm-2">
                                  	<img id="no-image" height="200" width="200" <?php if(!$data['thumb']): ?>src="/Public/Default/images/no_image.jpg" <?php else: ?>src="/<?php echo ($data["thumb"]); ?>"<?php endif; ?> >
                                  </div>
                                  <div class="col-sm-8" style="margin-top:20px;">
                                      <input type="file" name="face" id="upload" />
                                      <p class="help-block no-margin">图片格式：jpg、jpeg、gif、png<br>参考尺寸(px)：<span style="color:red; font-size:14px;"><?php echo ($size[0]); ?> * <?php echo ($size[1]); ?></span></p>
                                  </div>
                              </div>
                              <input type="hidden" name="thumb"  value="<?php echo ($data["thumb"]); ?>"  id="thumb">
                              <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
                              <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-6">
                                    <button type="submit" class="btn btn-success">保存</button>
                                    <button type="button" class="btn btn-default" onclick="history.go(-1)">返回</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </section>
                 </div>
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
<!-- page special js plugin here -->
<script type="text/javascript" src="/Public/Plugin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="/Public/Plugin/layer/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/js/init_uploadify.js"></script>
<script>
  var sid = "<?php echo session_id();?>";
  var url = "<?php echo U('Base/uploadImage');?>";
  var number = 201;
  uploadImage(url, number, sid, "ad/");

  $('form').submit(function () {
    if ($('input[name=name]').val() == '') {
      layer.msg('服务联盟名称不能为空');
      return false;
    }
  })
</script>
</body>
</html>