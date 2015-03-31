<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","headbody"); ?>
<?php include template("content","header_content"); ?>
<!-- 通栏幻灯大banner -->
<div id="slideBox" class="slideBox_yh">
    <div class="bd">
        <ul>
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=35"></script></div></li>
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
        <div class="oneleftp1"><h3>今日要闻</h3><span>Today's focus</span><a href="/whjryw/" title="更多今日要闻">更多</a></div>
        <div class="oneleftdiv1">
            <dl>
                <dt><a href="/wuhanyb/" title="武汉雍禾">武汉雍禾</a></dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=baaf0ff3beafcd5ebab1d86341572e5b&action=lists&catid=176&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'176','order'=>'updatetime DESC',)).'baaf0ff3beafcd5ebab1d86341572e5b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'176','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c6e9798c0677c5ff897f09d0ac99b720&action=lists&catid=177&order=updatetime+DESC&num=1&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'177','order'=>'updatetime DESC',)).'c6e9798c0677c5ff897f09d0ac99b720');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'177','order'=>'updatetime DESC','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="211" height="200" alt="<?php echo $r['title'];?>" /></a>
        <p class="onemiddlep1"><b>时间：</b> <a><?php echo date('Y年m月d日',$r[inputtime]);?></a></p>
        <p class="onemiddlep2"><b>概要：</b> <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[description],420,'...');?></a></p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <p class="onemiddlep4"><b><a href="/whfyhsp/" title="更多发友会视频">查看更多>>></a></p>
    </div>
    <div class="ztzfyb_oneright">
        <h3>手术视频</h3>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fd62e39c3dcc0a469f9e6f4eddca7efa&action=lists&catid=178&order=updatetime+DESC&num=1&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'178','order'=>'updatetime DESC',)).'fd62e39c3dcc0a469f9e6f4eddca7efa');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'178','order'=>'updatetime DESC','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
            <p>Case base <a href="/whfyal/" title="更多">更多</a></p>
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
        <a href="/whfyal/" title="更多"><img src="/statics/images/zhifa_cn_images/wwfff_03.jpg" width="13" height="13" class="twoNavaimg" alt="更多" /></a>
    </div>
    <div class="ztzfyb_twoDiv" style="display:block;">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7a8f4fcd88e1c93cb9b9ff9e6e9f809b&action=lists&catid=180&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'180','order'=>'updatetime DESC','moreinfo'=>'1',)).'7a8f4fcd88e1c93cb9b9ff9e6e9f809b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'180','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whwhfyal_tfzz/" title="更多头发种植案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whwhfyal_tfzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a94031e4dd36eb22dcab627ea908b7e2&action=lists&catid=180&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'180','order'=>'updatetime DESC',)).'a94031e4dd36eb22dcab627ea908b7e2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'180','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whwhfyal_tfzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=440a78a31225be0ed78c4142277dd2ed&action=lists&catid=181&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'181','order'=>'updatetime DESC','moreinfo'=>'1',)).'440a78a31225be0ed78c4142277dd2ed');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'181','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whfyal_mmzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whfyal_mmzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1ba9b224c3b81b6e9d679f3c2d7b9726&action=lists&catid=181&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'181','order'=>'updatetime DESC',)).'1ba9b224c3b81b6e9d679f3c2d7b9726');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'181','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whfyal_mmzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a26c567f14d820c92812a46412a43585&action=lists&catid=182&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'182','order'=>'updatetime DESC','moreinfo'=>'1',)).'a26c567f14d820c92812a46412a43585');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'182','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whfyal_jmzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whfyal_jmzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2035be2d91fd5f972bcd144886cf10d4&action=lists&catid=182&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'182','order'=>'updatetime DESC',)).'2035be2d91fd5f972bcd144886cf10d4');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'182','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whfyal_jmzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5a2873962e16b84bf4d036940206a9a3&action=lists&catid=183&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'183','order'=>'updatetime DESC','moreinfo'=>'1',)).'5a2873962e16b84bf4d036940206a9a3');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'183','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whfyal_tfjm/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whfyal_tfjm/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4045e5cab3b553d0a36db9c2df12851d&action=lists&catid=183&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'183','order'=>'updatetime DESC',)).'4045e5cab3b553d0a36db9c2df12851d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'183','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whfyal_tfjm/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d2a1abb6da5244a4fb9b497e19642e63&action=lists&catid=184&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'184','order'=>'updatetime DESC','moreinfo'=>'1',)).'d2a1abb6da5244a4fb9b497e19642e63');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'184','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whfyal_fjxtz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whfyal_fjxtz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7660e0536afe9c694237d393be4c4382&action=lists&catid=184&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'184','order'=>'updatetime DESC',)).'7660e0536afe9c694237d393be4c4382');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'184','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whfyal_fjxtz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=abb43b79522ce320d698ee5148187db8&action=lists&catid=185&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'185','order'=>'updatetime DESC','moreinfo'=>'1',)).'abb43b79522ce320d698ee5148187db8');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'185','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whfyal_bhzf/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whfyal_bhzf/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1fdbd14433d0c7d0e5af25cb2c19bb30&action=lists&catid=185&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'185','order'=>'updatetime DESC',)).'1fdbd14433d0c7d0e5af25cb2c19bb30');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'185','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whfyal_bhzf/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a8389e0f6745788b141cce4ce96c5759&action=lists&catid=186&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'186','order'=>'updatetime DESC','moreinfo'=>'1',)).'a8389e0f6745788b141cce4ce96c5759');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'186','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whfyal_hxzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whfyal_hxzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=40c6ee006340ae82a99c40a13f64ed7f&action=lists&catid=186&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'186','order'=>'updatetime DESC',)).'40c6ee006340ae82a99c40a13f64ed7f');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'186','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whfyal_hxzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd1325d3fa2998afc15a356ea5af0258&action=lists&catid=187&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'187','order'=>'updatetime DESC','moreinfo'=>'1',)).'cd1325d3fa2998afc15a356ea5af0258');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'187','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whfyal_bjzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whfyal_bjzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0fb400f32dfdb48dbfc69aad5dd571b4&action=lists&catid=187&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'187','order'=>'updatetime DESC',)).'0fb400f32dfdb48dbfc69aad5dd571b4');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'187','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whfyal_bjzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fd09086ddf1f99b0dfd0bce07014ea3c&action=lists&catid=188&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'188','order'=>'updatetime DESC','moreinfo'=>'1',)).'fd09086ddf1f99b0dfd0bce07014ea3c');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'188','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whfyal_mrjzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whfyal_mrjzz/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=52e9ce36c6634056f79803e57e2fe40b&action=lists&catid=188&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'188','order'=>'updatetime DESC',)).'52e9ce36c6634056f79803e57e2fe40b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'188','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whfyal_mrjzz/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
        </div>
        <div class="twoDivnav">
            <img src="/statics/images/zhifa_cn_images/gsssg_35.jpg" width="1000" height="104" alt="aaa" />
        </div>
    </div>

    <div class="ztzfyb_twoDiv">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1e530b3f1f90a3e3a13c38149ed25dfd&action=lists&catid=189&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'189','order'=>'updatetime DESC','moreinfo'=>'1',)).'1e530b3f1f90a3e3a13c38149ed25dfd');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'189','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <a href="/whfyal_nxzf/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_23.jpg" width="96" height="83" alt="更多案例" /></a>
            </p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="twoDiv_bottom">
            <a href="/whfyal_nxzf/" title="更多案例"><img src="/statics/images/zhifa_cn_images/gsssg_30.jpg" width="216" height="126" alt="经典案例" class="twoDivbottomimg" /></a>
            <a href="#" title="#"><img src="/statics/images/zhifa_cn_images/gsssg_32.jpg" width="460" height="126" alt="手术案例现场直播" class="twoDivbottomimg2" /></a>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3cf5a7fc493e2b5680d13588e868b4d6&action=lists&catid=189&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'189','order'=>'updatetime DESC',)).'3cf5a7fc493e2b5680d13588e868b4d6');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'189','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">▪ <?php echo str_cut($r[title],60,'');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <a href="/whfyal_nxzf/" title="更多案例" class="twoDivbottoma">更多案例 >>></a>
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
            <p>Hair transplant experts  <a href="/whyb_zfzj/" title="更多">更多</a></p>
        </div>
        <div class="contThreeLeftdiv" id="contThreeLeftdiv">
            <img src="/statics/images/zhifa_cn_images/s_03.png" id="contThreeLeftdiv_prev" class="contThreeLeftdiv_prev" />
            <img src="/statics/images/zhifa_cn_images/s_05.png" id="contThreeLeftdiv_next" class="contThreeLeftdiv_next" />
            <div id="contThreeLeftdiv_huandeng" class="contThreeLeftdiv_huandeng">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b1ea74bfc50c900bc333de229b563a3e&action=lists&catid=190&order=updatetime+DESC&num=10&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'190','order'=>'updatetime DESC','moreinfo'=>'1',)).'b1ea74bfc50c900bc333de229b563a3e');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'190','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ca1d7aa90df83874de5d7f584c9dc61f&action=lists&catid=190&order=updatetime+DESC&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'190','order'=>'updatetime DESC',)).'ca1d7aa90df83874de5d7f584c9dc61f');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'190','order'=>'updatetime DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
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
    <img src="/statics/images/zhifa_cn_images/hwsss.jpg" width="1000" height="445" />
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