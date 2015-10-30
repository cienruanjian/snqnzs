<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="wb:webmaster" content="52f14c1aa569ba24" />
<title>首页 - <?php echo C('SITE_NAME');?></title>
<link href="/Public/Home/css/jswhl.css" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/yx_rotaion.css" type="text/css" rel="stylesheet" />
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
  <div id="Middle">
    <div id="Middle_left">
      <div id="mgny">
        <img src="/Public/Home/images/3.jpg" width="133" height="50" />
      </div>
      <div id="mgnt295">

        <div class="yx-rotaion">
        <ul class="rotaion_list">
           <?php if(is_array($ad)): foreach($ad as $key=>$v): ?><li><a <?php if($v['url']): ?>target="_blank" href="<?php echo ($v["url"]); ?>"<?php endif; ?>><img width="520"  height="295" src="/<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["desc"]); ?>" /></a></li><?php endforeach; endif; ?>
        </ul>
      </div>
      </div>
      <div id="mgnt_Title">
        <div class="h20"></div>
        <div class="clear1"></div>
        <?php if(is_array($articles)): foreach($articles as $key=>$v): ?><p><a href="<?php echo U('Article/detail', ['id' => $v['id']]);?>"><?php echo (mb_substr($v["title"], 0, 35, 'utf-8')); ?></a></p><?php endforeach; endif; ?> 
      </div>
      <div class="clear"></div>
    </div>
    <div id="Middle_right">
      <div id="right_Title">
        <p>
          <a href="http://sn.gz.qnzs.youth.cn/question/ask/s/0/l/0" target="_blank"><img src="/Public/Home/images/4.jpg" width="130" height="50" /></a>
        </p>
        <span><a href="http://sn.gz.qnzs.youth.cn/question/ask/s/0/l/0" target="__blank">更多>></a></span>
      </div>
      <div id="Middle_mwpw">
        <div id="ggrh">
          <div class="clear1"></div>
         
          <?php if(is_array($newestQuestions)): foreach($newestQuestions as $key=>$v): ?><div class="ggrh1">
            <?php if($v['r_a_username'] != '' ): ?><h3><?php echo ($v["r_a_username"]); ?>答：<?php echo ($v["r_q_title"]); ?></h3><?php endif; ?>
            
            <p>
              <img src="/Public/Home/images/10.jpg" width="34" height="35" />
              <span><?php echo ($v["r_q_addname"]); ?>：</span>
              <?php if($v['r_q_description']): echo ($v["r_q_description"]); ?>
              <?php else: ?>
                <?php echo ($v["r_q_title"]); endif; ?>
            </p>
            <?php if($v['r_a_username']): ?><p class="geth">
                <img src="<?php echo ($v["r_a_avatar"]); ?>" width="30" height="30" />
                <span><?php echo ($v["r_a_username"]); ?></span>：<?php echo ($v["r_a_content"]); ?>　<a target="_blank" href="http://sn.gz.qnzs.youth.cn/index/show/id/<?php echo ($v["r_q_id"]); ?>">查看全文>></a>
              </p><?php endif; ?>
            
            <p class="geth1">
              <a href="#">
                <img src="/Public/Home/images/12.jpg" width="27" height="25" />
              </a><?php echo ($v["r_q_agree"]); ?>　|　<?php echo (date("Y-m-d H:i:s", $v["r_q_added"])); ?>
            </p>
          </div><?php endforeach; endif; ?>
        </div>
        <div class="clear1"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div id="ol100">
      <div class="Middle_lm">
        <div class="Middle_Tie">
          <p><a href="<?php echo U('MicroCircle/index');?>">更多>></a></p>
          <a href="<?php echo U('MicroCircle/publish');?>" class="sqwq-wyfb"><img src="/Public/Home/images/wyfb.jpg" alt="" /></a>
          <h3><img src="/Public/Home/images/5.jpg" width="132" height="50" /></h3>
        </div>
        <div class="Middle_Tie1">
          <div id="lma">
            <div class="h20"></div>
            <?php if(is_array($circles)): foreach($circles as $key=>$v): ?><p><a href="<?php echo U('MicroCircle/detail', ['id' => $v['id']]);?>"><?php echo (mb_substr($v["title"], 0, 16, 'utf-8')); ?></a></p><?php endforeach; endif; ?> 
          </div>
        </div>
      </div>
      <div class="Middle_lm" style="margin-left:15px; margin-right:15px;">
        <div class="Middle_Tie">
          <p><a href="http://sn.gz.qnzs.youth.cn/search/expert/s/0/l/0" target="_blank">更多>></a></p>
          <h3>
            <img src="/Public/Home/images/6.jpg" width="129" height="50" />
          </h3>
        </div>
        <div class="Middle_Tie1">
          <div id="fnpe">
            <?php if(is_array($experts)): foreach($experts as $key=>$v): ?><div <?php if($key % 2 == 0): ?>class="fnpe1"<?php else: ?>class="fnpe1 fnpe1-1"<?php endif; ?>>
                <div class="fnpe1_1">
                  <img src="<?php echo ($v["avatar"]); ?>" width="47" height="45" />
                </div>
                <div class="fnpe2">
                  <h3><?php echo ($v["name"]); ?></h3>
                  <p><span>标签：</span><?php echo ($v["tags"]); ?></p>
                </div>
              </div><?php endforeach; endif; ?>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="Middle_lm">
        <div class="Middle_Tie">
            <p><a href="http://sn.gz.qnzs.youth.cn/index/list/s/0/l/0" target="_blank">更多>></a></p>
            <h3><img src="/Public/Home/images/7.jpg" width="134" height="50" /></h3>
        </div>
       
        <div class="Middle_Tie1" id="hot">
          <?php if(is_array($hotQuestions)): foreach($hotQuestions as $key=>$v): ?><div class="rvgk">
              <div class="rvgk1">
                <img src="<?php echo ($v["r_q_avatar"]); ?>" width="49" height="48" />
              </div>
              <div class="rvgk2">
                <h3><a target="_blank" href="http://sn.gz.qnzs.youth.cn/index/show/id/<?php echo ($v["r_q_id"]); ?>"><?php echo ($v["r_q_title"]); ?></a></h3>
                <p><?php echo ($v["r_q_description"]); ?></p>
              </div>
              <div class="clear"></div>
            </div><?php endforeach; endif; ?>
        </div>
        <div class="clear1"></div>
      </div>
      <div class="clear1"></div>
    </div>
      <div id="img_1">
        <img src="/Public/Home/images/16.jpg" width="1024" height="81" />
      </div>
      <div id="tmfm00">
        <div id="tmfm">
         <iframe width="667" height="509"  frameborder="0" scrolling="no" src="http://widget.weibo.com/livestream/listlive.php?language=zh_cn&width=667&height=509&uid=2707274663&skin=1&refer=1&appkey=2537213708&pic=0&titlebar=1&border=1&publish=1&atalk=1&recomm=0&at=0&atopic=%E9%9D%92%E5%B9%B4%E4%B9%8B%E5%A3%B0%C2%B7%E6%80%9D%E5%8D%97&ptopic=%E9%9D%92%E5%B9%B4%E4%B9%8B%E5%A3%B0%C2%B7%E6%80%9D%E5%8D%97&dpc=1"></iframe>
        </div>
        <div id="tmfm1">
          <div class="tmfm-on">
            <img src="/Public/Home/images/erweima.jpg" alt="" />
          </div>
          <div class="tmfm-in">
            <a href="http://www.sinan.gov.cn/?Temp=Sinanbmindex&GID=000100030045" target="_blank">
              <img src="/Public/Home/images/siqingjiayuan.jpg" alt="" />
            </a>
          </div>
          <div class="clear1"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!--低陪  开始-->
  <div id="foot">
   <div id="foot1">
   <p>Copyright 2015-2016 共青团思南县委 All Rights Reserved<br/>
地址：贵州省铜仁市思南县府后街县委机关大院团县委办公室   电话：0856-7222312  技术支持：慈恩软件
</p>
</div>
</div>
  <!--低陪  结束-->
  <script src="/Public/Home/js/jquery.min.js"></script>
  <script src="/Public/Home/js/jquery.yx_rotaion.js"></script>

  <script>
    $(".yx-rotaion").yx_rotaion({auto:true});
    //滚动
    setInterval("move()", 3000);
    function move() {
      var oDiv = $('.ggrh1:eq(0)');
      oDiv.clone().appendTo('#ggrh');
      oDiv.fadeOut('slow', function() {
        $(this).remove();
      });
    }

    setInterval("move2()", 3000);
    function move2() {
      var oDiv = $('.rvgk:eq(0)');
      oDiv.clone().appendTo('#hot');
      oDiv.fadeOut('slow', function() {
        $(this).remove();
      });
    }
  </script>
</body>
</html>