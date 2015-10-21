<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>同心同声 - <?php echo C('SITE_NAME');?></title>
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

<div id="mnmf00">
  <div id="mnmf001">
       <div id="Timea">
      <img src="/Public/Home/images/3.jpg" width="133" height="50" /> </div>
      <?php if(!empty($article)): if(is_array($article)): foreach($article as $key=>$v): ?><div class="Timea1">
           <div class="Timea1_img"><a href="<?php echo U('Article/detail', array('id' => $v['id']));?>"><img src="/<?php echo ($v["thumb"]); ?>" width="225" height="152" /></a></div>
           <div class="Timea1_Title">
               <h3><a href="<?php echo U('Article/detail', array('id' => $v['id']));?>"><?php echo ($v["title"]); ?></a></h3>
               <p class="lli"><?php echo (date(Y/m/d, $v["create_at"])); ?></p>
               <p><?php echo ($v["desc"]); ?>...<a href="<?php echo U('Article/detail', array('id' => $v['id']));?>"> 查看全文 &raquo;</a></p>
           </div>
          </div><?php endforeach; endif; ?>
      <?php else: ?>
          <h3 style="text-align:center; color:#ccc; padding:100px;">暂无内容</h3><?php endif; ?>
    
 <div class="clear1"></div>   
    <div id="hhgh">
        <?php echo ($page); ?>
    </div>
    
  </div>
  
<div class="clear1"></div>
</div>


<!--中间  结束-->
<div id="foot">
   <div id="foot1">
   <p>Copyright 2015-2016 共青团思南县委 All Rights Reserved<br/>
地址：贵州省铜仁市思南县府后街县委机关大院团县委办公室   电话：0856-7222312  技术支持：慈恩软件
</p>
</div>
</div>
</body>
</html>