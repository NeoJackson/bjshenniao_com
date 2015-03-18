<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>/zhifa_cn_css/YHreset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>/zhifa_cn_css/YHindex.css" rel="stylesheet" type="text/css" />

</head>
<body>

<!-- 头部 -->
<div id="header" class="header">
    <!-- 顶部导航 -->
    <div id="top_nav" class="top_nav">
        <ul id="top_nav_ul" class="top_nav_ul">
            <li><a href="<?php echo siteurl($siteid);?>" title="雍禾植发">雍禾首页</a></li>
            <li><a href="/yyjs/" title="医院介绍">医院介绍</a></li>
            <li><a href="/dyzfxm/zzxm_tfzz/" title="植发项目">植发项目</a></li>
            <li><a href="/zfjs/" title="植发技术">植发技术</a></li>
            <li><a href="/zfzj/" title="植发专家">植发专家</a></li>
            <li><a href="/zfal/" title="植发案例">植发案例</a></li>
            <li><a href="/zxbd/" title="最新报道">最新报道</a></li>
            <li><a href="/zfxm/" title="植发科谱">植发科谱</a></li>
            <li style="background-image:none;" ><a href="/dylylx/bjyh/" title="来院路线">来院路线</a></li>
        </ul>
    </div>
    <!-- LOGO部分 -->
    <div id="YHlogo" class="YHlogo">
        <dl id="YHlogo_dl" class="YHlogo_dl">
            <dt><h1><a href="/" title="雍禾植发,中国第一家植发专科医院"><img class="YHlogo_img1" src="<?php echo IMG_PATH;?>zhifa_cn_images/YHlogo.png" alt="雍禾植发,中国第一家植发专科医院" /></a><img src="<?php echo IMG_PATH;?>zhifa_cn_images/f_03.png" height="96" /></h1></dt>
            <dd>国际植发协会(ISHRS)会员单位</dd>
            <dd>ISO 9001:2008权威认证植发机构</dd>
            <dd>亚洲荣誉植发大会会员(TISHRS)</dd>
            <dd>CCTV报告雍禾质量标准系单位</dd>
            <dd>2项国家专利技术单位</dd>
            <dd>5大植发保证协议单位</dd>
        </dl>
        <p class="YHlogo_p"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/f_03.png" /><img class="YHlogo_img2" src="<?php echo IMG_PATH;?>zhifa_cn_images/e_03.png" alt="全天候24小时:400-888-6667" style="padding-left:10px;" /><b>400-888-6667</b></p>
    </div>
</div>
