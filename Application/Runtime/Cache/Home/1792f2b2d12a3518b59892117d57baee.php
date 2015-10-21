<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($data["name"]); ?> - <?php echo C('SITE_NAME');?></title>
<link href="/Public/Home/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--头陪  开始-->
<div id="head_top">
    <div id="head_top1">
        <div id="logo"><a href="/"><img src="/Public/Home/images/logo.png" width="224" height="86" /></a></div>
        
        <div id="new1">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="<?php echo U('Article/index');?>">同心同声</a></li>
                <li><a href="<?php echo U('MicroCircle/index');?>">思青微圈</a></li>
                <li><a href="http://sn.gz.qnzs.youth.cn/question/ask/s/0/l/0" target="_blank">我要提问</a></li>
                <li><a href="http://sn.gz.qnzs.youth.cn/index/list/s/0/l/0" target="_blank">热点问题</a></li>
                <li><a href="http://sn.gz.qnzs.youth.cn/search/expert/s/0/l/0" target="_blank">专家推荐</a></li>
               
            </ul>
      </div>
      
      <div id="iymm">
         <a href="http://sns.qnzs.youth.cn/user/login/" target="_blank">注册</a>
         <a href="http://sns.qnzs.youth.cn/user/login/" target="_blank">登录</a>
      </div>
    </div>
    <div id="head_top2">
    
    </div>
    <div id="head_new">
        <div id="head_new1">
            <ul>
                <?php if(is_array($serviceList)): foreach($serviceList as $key=>$v): ?><li><a href="<?php echo U('Service/index', array('id' => $v['id']));?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
</div>
<!--头陪  结束-->
<div class="clear1"></div>
<div class="h40"></div> 

<!--中间  开始-->

<div id="mnmf000">
  	<div id="buje" style="padding-bottom:10px;">
        <div id="buje1">
          <h3><?php echo ($data["name"]); ?></h3>
          <p><?php echo ($data["intro"]); ?></p>
    	</div>
	    <?php if($data['photo']): ?><div id="buje1">
		        <h3>联盟图片</h3>
		        <div id="bu_img">
		        <?php if(is_array($data['photo'])): foreach($data['photo'] as $key=>$v): ?><p><img src="/<?php echo ($v["thumb"]); ?>" width="291" height="209" /></p><?php endforeach; endif; ?>
		      </div>
		    </div><?php endif; ?>
        <div id="buje1">
            <h3>联系联盟</h3>
          <div id="jnyt">
               <p>联系电话：<?php echo ($data["phone"]); ?></p>
               <p>邮箱：<?php echo ($data["email"]); ?></p>
               <p>地址：<?php echo ($data["addr"]); ?></p>
               <p>微信号：<?php echo ($data["weixin"]); ?></p>
            </div>
            <div id="jnyt1">
               <i><img <?php if($data['thumb']): ?>src="/<?php echo ($data["thumb"]); ?>"<?php else: ?> src="/Public/Default/images/no_image_350.jpg" style="border:1px solid #fff"<?php endif; ?> width="120" height="120" /></i>
               <p><?php echo ($data["name"]); ?></p>
               <p>扫一扫，关注我们</p>
               <p>地址：<?php echo ($data["addr"]); ?></p>
               <p>微信号：<?php echo ($data["weixin"]); ?></p>
          </div>
        </div> 
        <div class="clear1"></div>
    </div>
<div class="clear1"></div>
</div>


<!--中间  结束-->
<!--低陪  开始-->
<div id="foot">
   <div id="foot1">
   <p>Copyright 2015-2016 共青团思南县委 All Rights Reserved<br/>
地址：贵州省铜仁市思南县府后街县委机关大院团县委办公室   电话：0856-7222312  技术支持：慈恩软件
</p>
</div>
</div>
</body>
</html>