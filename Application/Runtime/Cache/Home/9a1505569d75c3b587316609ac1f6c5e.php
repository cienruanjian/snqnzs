<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我要发表 - <?php echo C('SITE_NAME');?></title>
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
    <div id="Timea"><img src="/Public/Home/images/24.jpg" width="128" height="50" /></div>
    <div id="geuj">
      <form action="<?php echo U('MicroCircle/add');?>">
        <table width="100%" border="0" cellspacing="0">
          <tr>
            <td width="8%" height="70">昵称：</td>
            <td width="92%">
              <input name="nickname" type="text" class="mmn">
            </td>
          </tr>
          <tr>
            <td height="67">邮箱：</td>
            <td><input name="email" type="email" class="mmn"></td>
          </tr>
          <tr>
            <td height="66"><span style="color:red;">*</span>标题：</td>
            <td><input name="title" type="text" class="mmn"></td>
          </tr>
          <tr>
            <td height="46" colspan="2"><span style="color:red;">*</span>正文：您可以在以下编辑框中输入正文，上传图片，插入微视频以及排版</td>
            </tr>
          <tr>
            <td height="390" colspan="2">
              <textarea name="content"  id="ue-content"></textarea>
            </td>
            </tr>
          <tr>
            <td height="100" colspan="2"><input name="" type="submit" value="提　交" class="mmn1"></td>
            </tr>
        </table>
      </form>
    </div>
  </div>
  <div class="clear1"></div>
</div>

<!--中间结束-->
<div id="foot">
   <div id="foot1">
   <p>Copyright 2015-2016 共青团思南县委 All Rights Reserved<br/>
地址：贵州省铜仁市思南县府后街县委机关大院团县委办公室   电话：0856-7222312  技术支持：慈恩软件
</p>
</div>
</div>
<script src="/Public/Admin/vendor/jquery-1.11.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Plugin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Plugin/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Plugin/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/Public/Plugin/layer/layer.js"></script>

<script type="text/javascript">
  //实例化编辑器
  UE.getEditor('ue-content');
  $('form').submit(function() {
    var _this = $(this);
    if ($('input[name=title]').val() == "") {
      layer.msg('请输入标题~');
      return false;
    }
    if ($('textarea[name=content]').val() == "") {
      layer.msg('内容不能为空');
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
            window.location.href = "<?php echo U('MicroCircle/index');?>";
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