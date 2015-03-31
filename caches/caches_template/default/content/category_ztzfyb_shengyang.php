<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","headbody"); ?>
<?php include template("content","header_content"); ?>
<!-- 通栏幻灯大banner -->
<div id="slideBox" class="slideBox_yh">
    <div class="bd">
        <ul>
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=34"></script></div></li>
            <!--
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=24"></script></div></li>
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=24"></script></div></li>
            -->
        </ul>
    </div>
    <!--
    <div id="hd" class="hd">
        <ul><li class="on">1</li><li>2</li><li>3</li></ul>
    </div>
    -->
    <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
    <!--
    <a class="slideBox_prev" href="javascript:void(0)"></a>
    <a class="slideBox_next" href="javascript:void(0)"></a>
    -->
</div>
<!--
<script>
    hm.app.toRun5();
</script>
-->

<div id="ztzfyb_contOne" class="ztzfyb_contOne">
    <div class="ztzfyb_oneleft">
        <div class="oneleftp1"><h3>今日要闻</h3><span>Today's focus</span><a href="/syjryw/" title="更多今日要闻">更多</a></div>
        <div class="oneleftdiv1">
            <dl>
                <dt><a href="/shengyangyb/" title="沈阳雍禾">沈阳雍禾</a></dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=efab3fba63e65bc2d049d73f9460753a&action=lists&catid=192&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'192','order'=>'updatetime DESC',)).'efab3fba63e65bc2d049d73f9460753a');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'192','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <dd>
                    <h2><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],65,'');?></a></h2>
                    <p>
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],145,'');?></a>&nbsp;&nbsp;
                        <a href="<?php echo $r['url'];?>" title="更多"><img src="/statics/images/zhifa_cn_images/wwfff_03.jpg" width="13" height="13" alt="更多" /></a>
                    </p>
                </dd>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>
    </div>
    <div class="ztzfyb_onemiddle">
        <h3>发友会视频</h3>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=948d62d670afef8f761a3e8c0837c78b&action=lists&catid=193&order=updatetime+DESC&num=1&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'193','order'=>'updatetime DESC',)).'948d62d670afef8f761a3e8c0837c78b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'193','order'=>'updatetime DESC','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="211" height="200" alt="<?php echo $r['title'];?>" /></a>
        <p class="onemiddlep1"><b>时间：</b> <a><?php echo date('Y年m月d日',$r[inputtime]);?></a></p>
        <p class="onemiddlep2"><b>概要：</b> <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <p class="onemiddlep4"><b><a href="/syfyhsp/" title="更多发友会视频">查看更多>>></a></p>
    </div>
    <div class="ztzfyb_oneright">
        <h3>手术视频</h3>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=955037e1d67d342f3eae850c1dcdd3b2&action=lists&catid=194&order=updatetime+DESC&num=1&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'194','order'=>'updatetime DESC',)).'955037e1d67d342f3eae850c1dcdd3b2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'194','order'=>'updatetime DESC','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="300" height="200" alt="<?php echo $r['title'];?>" /></a>
        <span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],70,'');?></a></span>
        <p class="rightp1"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="ztzfyb_onebottom">
        <img src="/statics/images/zhifa_cn_images/gsssg_10.jpg" width="1001" height="102" alt="sss" />
    </div>
</div>

<div id="ztzfyb_contTwo" class="ztzfyb_contTwo">
    <div class="ztzfyb_twoNav">
        <div class="twoNavleft">
            <h3>发友案例</h3>
            <p>Case base <a href="/syfyal/" title="更多">更多</a></p>
        </div>
        <ul id="ztzfyb_contTwoul">
            <li>头发种植</li>
            <li>眉毛种植</li>
            <li>睫毛种植</li>
            <li>头发加密</li>
            <li>发际线调整</li>
            <li>疤痕植发</li>
            <li>胡须种植</li>
            <li>鬓角种植</li>
            <li>美人尖种植</li>
            <li>女性植发</li>
        </ul>
        <a href="/syfyal/" title="更多"><img src="/statics/images/zhifa_cn_images/wwfff_03.jpg" width="13" height="13" class="twoNavaimg" alt="更多" /></a>
    </div>
    <div class="ztzfyb_twoDiv" style="display:block;">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f8eb888b64b20b2bf3181856cb2fc751&action=lists&catid=196&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'196','order'=>'updatetime DESC','moreinfo'=>'1',)).'f8eb888b64b20b2bf3181856cb2fc751');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'196','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/sywhfyal_tfzz/" title="更多头发种植案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/sywhfyal_tfzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=db9d64016dd4017208da6242c61e4631&action=lists&catid=196&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'196','order'=>'updatetime DESC',)).'db9d64016dd4017208da6242c61e4631');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'196','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/sywhfyal_tfzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3c5a3c45dbfd6c5632252424bfb17736&action=lists&catid=197&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'197','order'=>'updatetime DESC','moreinfo'=>'1',)).'3c5a3c45dbfd6c5632252424bfb17736');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'197','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/syfyal_mmzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/syfyal_mmzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d496a81b4b7bba5c890f91e50cbbd01&action=lists&catid=197&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'197','order'=>'updatetime DESC',)).'2d496a81b4b7bba5c890f91e50cbbd01');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'197','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/syfyal_mmzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd23568b6daa4e2b4675d1d7cf2b0484&action=lists&catid=198&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'198','order'=>'updatetime DESC','moreinfo'=>'1',)).'cd23568b6daa4e2b4675d1d7cf2b0484');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'198','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/syfyal_jmzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/syfyal_jmzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a3a6433054fc3da1e82a086710283579&action=lists&catid=198&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'198','order'=>'updatetime DESC',)).'a3a6433054fc3da1e82a086710283579');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'198','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/syfyal_jmzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=abcda507539c090aa68f0dd320073077&action=lists&catid=199&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'199','order'=>'updatetime DESC','moreinfo'=>'1',)).'abcda507539c090aa68f0dd320073077');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'199','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/syfyal_tfjm/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/syfyal_tfjm/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ea0dcf7a80ba66dd368f89672a016b9f&action=lists&catid=199&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'199','order'=>'updatetime DESC',)).'ea0dcf7a80ba66dd368f89672a016b9f');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'199','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/syfyal_tfjm/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=09f99bf80a420e65ba8508c6ca732e7c&action=lists&catid=200&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'200','order'=>'updatetime DESC','moreinfo'=>'1',)).'09f99bf80a420e65ba8508c6ca732e7c');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'200','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/syfyal_fjxtz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/syfyal_fjxtz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6f96d7b7d7018a68a8e80bc8b926dc64&action=lists&catid=200&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'200','order'=>'updatetime DESC',)).'6f96d7b7d7018a68a8e80bc8b926dc64');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'200','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/syfyal_fjxtz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bd1e9ef80dec1209ef13815d6c23de5d&action=lists&catid=201&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'201','order'=>'updatetime DESC','moreinfo'=>'1',)).'bd1e9ef80dec1209ef13815d6c23de5d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'201','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/syfyal_bhzf/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/syfyal_bhzf/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6b3f0bd1ab27c18bc2b79f86ffa40b7d&action=lists&catid=201&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'201','order'=>'updatetime DESC',)).'6b3f0bd1ab27c18bc2b79f86ffa40b7d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'201','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/syfyal_bhzf/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e93cb49acb71e533a6ec1e2351e9f625&action=lists&catid=202&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'202','order'=>'updatetime DESC','moreinfo'=>'1',)).'e93cb49acb71e533a6ec1e2351e9f625');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'202','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/syfyal_hxzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/shfyal_hxzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=438c687a83f7cfa14ab10610b5040ee0&action=lists&catid=202&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'202','order'=>'updatetime DESC',)).'438c687a83f7cfa14ab10610b5040ee0');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'202','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/syfyal_hxzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=503dbb1200a3f2b548ea8c778a0929a5&action=lists&catid=203&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'203','order'=>'updatetime DESC','moreinfo'=>'1',)).'503dbb1200a3f2b548ea8c778a0929a5');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'203','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/syfyal_bjzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/syfyal_bjzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8e6be8be983c7b51f46d2d9e56b72854&action=lists&catid=203&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'203','order'=>'updatetime DESC',)).'8e6be8be983c7b51f46d2d9e56b72854');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'203','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/syfyal_bjzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0d8568f128144383a6c39ea29ffa36a3&action=lists&catid=204&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'204','order'=>'updatetime DESC','moreinfo'=>'1',)).'0d8568f128144383a6c39ea29ffa36a3');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'204','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/syfyal_mrjzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/syfyal_mrjzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=eea053a498df44202639a01c52c00d84&action=lists&catid=204&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'204','order'=>'updatetime DESC',)).'eea053a498df44202639a01c52c00d84');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'204','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/syfyal_mrjzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=498a67653196065c054c812aa6b88231&action=lists&catid=205&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'205','order'=>'updatetime DESC','moreinfo'=>'1',)).'498a67653196065c054c812aa6b88231');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'205','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="twoDiv_top">
            <div class="twoDivtopimg">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altleft'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altmiddle'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['altright'];?>" width="225" height="280" alt="<?php echo $r['title'];?>" /></a>
            </div>
            <p class="twodivtopp1"><?php echo $r['xinming'];?></p>
            <p class="twodivtopp2"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
            <p class="twodivtopp3">
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="149" height="94" alt="<?php echo $r['title'];?>" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/syfyal_nxzf/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/syfyal_nxzf/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f3a832f64c2d116046191666e1367242&action=lists&catid=205&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'205','order'=>'updatetime DESC',)).'f3a832f64c2d116046191666e1367242');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'205','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/syfyal_nxzf/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

</div>

<div id="ztzfyb_contThree" class="ztzfyb_contThree">
    <div class="contThreeLeft">
        <div class="threeNavleft">
            <h3>植发专家</h3>
            <p>Hair transplant experts  <a href="/syyb_zfzj/" title="更多">更多</a></p>
        </div>
        <div class="contThreeLeftdiv" id="contThreeLeftdiv">
            <img src="/statics/images/zhifa_cn_images/s_03.png" id="contThreeLeftdiv_prev" class="contThreeLeftdiv_prev" />
            <img src="/statics/images/zhifa_cn_images/s_05.png" id="contThreeLeftdiv_next" class="contThreeLeftdiv_next" />
            <div id="contThreeLeftdiv_huandeng" class="contThreeLeftdiv_huandeng">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=069a5578eea067d595c6212b36e61241&action=lists&catid=206&order=updatetime+DESC&num=10&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'206','order'=>'updatetime DESC','moreinfo'=>'1',)).'069a5578eea067d595c6212b36e61241');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'206','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="188" height="273" alt="<?php echo $r['title'];?>" class="bspandivaimg" /></a>
                        <p class="threeleftullip1">
                            <b><?php echo $r['title'];?></b>
                            <span><?php echo $r['zhicheng'];?></span>
                        <div class="p1div">Senior Expert </div>
                        <a href="#"><img src="/statics/images/zhifa_cn_images/ztk_14.png" width="59" height="22" alt="立即预约" class="bspandivaimg1" /></a>
                        <a href="#"><img src="/statics/images/zhifa_cn_images/ztk_16.png" width="59" height="22" alt="在线咨询" class="bspandivaimg2" /></a>
                        </p>
                        <p class="threeleftullip2">★ <?php echo str_cut($r[rongyu1],'60','');?></p>
                        <p class="threeleftullip3">★ <?php echo str_cut($r[rongyu2],'60','');?></p>
                        <p class="threeleftullip4">★ <?php echo str_cut($r[rongyu3],'60','');?></p>
                        <p class="threeleftullip5">★ <?php echo str_cut($r[rongyu4],'60','');?></p>
                        <p class="threeleftullip6">
                            <img src="/statics/images/zhifa_cn_images/ffef_32.jpg" width="47" height="37" alt="擅长项目" />
                            <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[shangchangxianmu],95,'...');?></a>
                        </p>
                        <p class="threeleftullip7">专家介绍</p>
                        <p class="threeleftullip8"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[zhuanjiajieshao],545,'...');?></a></p>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
    </div>
    <div class="contThreeRight">
        <div class="threeNavRight">
            <h3>热点关注</h3>
        </div>
        <ul id="threeRightul" class="threeRightul">
            <li class="activeThreeulli">热点文章</li>
            <li>植发技术</li>
        </ul>
        <div id="threeRightol" class="threeRightol">
            <ol class="threeRightol1" style="display:block;">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1ee6670bd4343273c1825e7d5424f492&action=lists&catid=207&order=updatetime+DESC&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'207','order'=>'updatetime DESC',)).'1ee6670bd4343273c1825e7d5424f492');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'207','order'=>'updatetime DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],65,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ol>
            <ol class="threeRightol2">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=66646ccfa5e63c83f157506d4c7481f9&action=lists&catid=3&order=updatetime+DESC&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'3','order'=>'updatetime DESC',)).'66646ccfa5e63c83f157506d4c7481f9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'3','order'=>'updatetime DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],65,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ol>
        </div>
        <ul class="threeRightul2">
            <li class="Rightul2li1"><a href="#" title="#">治疗脱发植发手术还是药?</a></li>
            <li class="Rightul2li2"><a href="#" title="#">植发手术安全吗？</a></li>
            <li class="Rightul2li3"><a href="#" title="#">治疗脱发植发手术还是药?</a></li>
            <li class="Rightul2li4"><a href="#" title="#">植发手术安全吗？</a></li>
        </ul>
    </div>
</div>

<div id="ztzfyb_contFour" class="ztzfyb_contFour">
    <div class="contFourNavleft">
        <h3>分院内景</h3>
        <p>The hospital interior  <a href="/yyjs/" title="更多">更多</a></p>
    </div>
    <img src="/statics/images/zhifa_cn_images/sysss.jpg" width="1000" height="445" />
</div>

<div id="ztzfyb_contFive" class="ztzfyb_contFive">
    <h3>雍禾植发  专业值得信赖</h3>
    <p>
        雍禾植发技术研究院创建于1999年，是国内植发行业的开拓者，也是中国最早拥有自主创新FUE技术的植发中心。2002年，国际毛发论坛 上Rassman博士提出了毛囊单位抽取术（FUE，follicular unit extraction)传入我国，虽然对脱发的治疗达到相对完美的阶段，但该技术使用设备是基于欧美人的毛囊特性而设计，应用于亚洲人时存在缺陷（相比较于欧洲人细软的毛囊，中国人毛囊较为粗、硬）。经过数年的钻研和不断的论证，2009年雍禾植发专家团队协同美国、日本和韩国著名植发专家成功研发出FUE-APL2.0无痕植发技术，并于2010年成功申请专利，并获得ISO国际质量管理体系认证，从此，中国人乃至整个亚洲人有了适合自己的植发技术。
    </p>
    <ul>
        <li>★ 国际植发协会(ISHRS)会员单位</li>
        <li>★ ISO 9001:2008权威认证植发机构</li>
        <li>★ 亚洲荣誉植发大会会员(TISHRS)</li>
        <li>★ CCTV报告雍禾质量标准系单位</li>
        <li>★ 2项国家专利技术单位</li>
        <li>★ 5大植发保证协议单位</li>
    </ul>
</div>

<script>
    ztzfyb_contTwo();
    threeRightul();
    hm.app.toRun14();
</script>
<?php include template("content","footer"); ?>