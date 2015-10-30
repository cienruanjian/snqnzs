<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($data["title"]); ?> - <?php echo C('SITE_NAME');?></title>
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
       <div id="Timea" style="height:73px;"><p><?php echo ($data["title"]); ?></p></div>
       <div id="tgk">
          <p><?php echo ((isset($data["nickname"]) && ($data["nickname"] !== ""))?($data["nickname"]):"匿名"); ?> &nbsp;&nbsp;&nbsp;发布时间 <?php echo (date("Y/m/d", $data["create_at"])); ?>&nbsp;&nbsp;&nbsp;点击数：<?php echo ($data["click"]); ?></p>
       </div>
    <div id="geuj">
    <div class="clear1"></div>
        <div id="mwpw123">
          <?php echo ($data["content"]); ?>
        </div>
        <div id="gaga">
           
        </div>
        
        
        <div id="gaga1">
          <form action="<?php echo U('MicroCircle/comment');?>" method="post">
          <table style="100%" border="0" cellspacing="0">
            <tr>
              <td colspan="4"><h3>参与评论</h3></td>
            </tr>
            <tr>
              <td height="14" colspan="4"><div id="xg"></div></td>
            </tr>
            <tr>
              <td  colspan="4" height="48">昵称： <input name="nickname" type="text" class="mmn2"></td>
              
            </tr>

            <tr>
              <td height="124" colspan="4">
               <textarea class="mmn3" name="content" cols="" rows=""></textarea>
              </td>
            </tr>

          <tr>
            <td colspan="4" align="right">
                <input name="" type="submit" value="发表" class="mmn4">
            </td>
          </tr>
            
          <?php if(!empty($data['comments'])): if(is_array($data['comments'])): foreach($data['comments'] as $key=>$v): ?><tr>
              <td height="24" colspan="4"><div id="xg"></div></td>
            </tr>

            <tr>
              <td height="49" colspan="3"><?php echo ($v["content"]); ?>！</td>
              <td width="8%">&nbsp;</td>
            </tr>
            <tr>
              <td height="56" colspan="4"><div align="right"><span><?php echo ((isset($v["nickname"]) && ($v["nickname"] !== ""))?($v["nickname"]):"匿名"); ?> 发表于：<?php echo (date("Y-m-d", $v["create_at"])); ?></span></div></td>
            </tr><?php endforeach; endif; ?>
          <?php else: ?>
            <tr>
              <td height="24" colspan="4"><div id="xg"></div></td>
            </tr>

            <tr>
              <td height="49" colspan="4" style="color:#999;">暂无评论~</td>
            </tr><?php endif; ?>
          </table>
          <input type="hidden" name="comment_for" value="<?php echo ($data["id"]); ?>" />
          </form>
      </div>
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
<script src="/Public/Admin/vendor/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/Public/Plugin/layer/layer.js"></script>

<script type="text/javascript">
  $('form').submit(function() {
    var _this = $(this);
    if ($('textarea[name=content]').val() == "") {
      layer.msg('请输入内容~');
      return false;
    }
    $.ajax({
      url        : _this.attr('action'),
      method     : "post",
      data       : _this.serialize(),
      dataType   : 'json',
      beforeSend : function() {
        layer.load(1);
      },
      success    : function(data) {
        layer.closeAll('loading');
        var data = eval(data);
        if (data.status) {
          layer.msg(data.msg, function() {
            window.location.reload();
          });
        } else {
          layer.msg(data.msg);
        }
      }
    });
    return false;
  });
</script>
</body>
</html>