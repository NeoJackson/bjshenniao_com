<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","headbody"); ?>
<?php include template("content","header_content"); ?>
<!-- 通栏幻灯大banner -->
<div id="slideBox" class="slideBox_yh">
    <div class="bd">
        <ul>
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=28"></script></div></li>
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

<div id="ztalcont_one" class="ztalcont_one">
    <div class="cont_head">
        <p class="cont_headp1">RESURGENT</p>
        <p class="cont_headp2">雍禾植发<span>案例</span></p>
        <p class="cont_headp3"></p>
        <div class="cont_headdiv">
            <img src="/statics/images/zhifa_cn_images/abcef_07.jpg" width="44" />
            <p class="cont_headp4">脱发，不仅带了的形象的变化，不少发友每天都要接受讥讽、嘲笑、歧视……这里是发友的心声，感受他们不同的植发曲折经历和神奇的植发效果。这里我们剪辑了一些雍禾植发发友的感言片段，你可以从中感触他们的心路历程，脱发的烦恼，选择植发机构的谨慎，植发后的期待与喜悦……我们也期待你不再为脱发而苦恼。</p>
        </div>
    </div>
    <div id="ztalcont_left" class="ztalcont_left">
        <ul>
            <li>2级植发案例</li>
            <li>3级植发案例</li>
            <li>4级植发案例</li>
            <li>5级植发案例</li>
            <li>6-7级植发案例</li>
            <li>头发加密案例</li>
            <li>眉毛种植案例</li>
            <li>睫毛种植案例</li>
            <li>鬓角种植案例</li>
            <li>胡须种植案例</li>
            <li>女性植发案例</li>
            <li>疤痕植发案例</li>
            <li>美人尖种植案例</li>
        </ul>
        <img src="/statics/images/zhifa_cn_images/abcef_14.jpg" width="210" />
    </div>
    <div class="ztalcont_right" style="display:block;">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c551b968715dcf79600b3817b8bb89dd&action=lists&catid=77&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'77','order'=>'listorder DESC','moreinfo'=>'1',)).'c551b968715dcf79600b3817b8bb89dd');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'77','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">

            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bf1935db8775f739381b319b457fb472&action=lists&catid=78&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'78','order'=>'listorder DESC','moreinfo'=>'1',)).'bf1935db8775f739381b319b457fb472');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'78','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=867f1139cb0e9dd68a2d71a3da06c7fb&action=lists&catid=79&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'79','order'=>'listorder DESC','moreinfo'=>'1',)).'867f1139cb0e9dd68a2d71a3da06c7fb');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'79','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c31772e5ab6903bdbc9df1eba608f7d&action=lists&catid=80&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'80','order'=>'listorder DESC','moreinfo'=>'1',)).'0c31772e5ab6903bdbc9df1eba608f7d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'80','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b27ca21deed198aebbe08a068903e346&action=lists&catid=81&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'81','order'=>'listorder DESC','moreinfo'=>'1',)).'b27ca21deed198aebbe08a068903e346');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'81','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ccf21ad139a4db2f2cf12cc220a2d496&action=lists&catid=82&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'82','order'=>'listorder DESC','moreinfo'=>'1',)).'ccf21ad139a4db2f2cf12cc220a2d496');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'82','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=efacadb9cc8826276dace0b0760ae9a1&action=lists&catid=83&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'83','order'=>'listorder DESC','moreinfo'=>'1',)).'efacadb9cc8826276dace0b0760ae9a1');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'83','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=841f951a0815a4ef19ec2d1b210f8d15&action=lists&catid=84&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'84','order'=>'listorder DESC','moreinfo'=>'1',)).'841f951a0815a4ef19ec2d1b210f8d15');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'84','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d338d9202ca16ce5428f2d0b6bbffaf&action=lists&catid=85&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'85','order'=>'listorder DESC','moreinfo'=>'1',)).'2d338d9202ca16ce5428f2d0b6bbffaf');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'85','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f37bf477b2459ce2439626ceb5a94876&action=lists&catid=86&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'86','order'=>'listorder DESC','moreinfo'=>'1',)).'f37bf477b2459ce2439626ceb5a94876');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'86','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=67519c5b6b8499c54bc28cfb2a24adb6&action=lists&catid=87&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'87','order'=>'listorder DESC','moreinfo'=>'1',)).'67519c5b6b8499c54bc28cfb2a24adb6');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'87','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b3d4ed623cb05235d770585732783119&action=lists&catid=88&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'88','order'=>'listorder DESC','moreinfo'=>'1',)).'b3d4ed623cb05235d770585732783119');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'88','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <div class="ztalcont_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6e33f23d097613ffee47af28726bf91f&action=lists&catid=89&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'89','order'=>'listorder DESC','moreinfo'=>'1',)).'6e33f23d097613ffee47af28726bf91f');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'89','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalrightimg">
            <div><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="400" height="280" /></a></div>
        </div>
        <div class="rightpmiddlep">
            <p class="ztalcont_right_p1"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者感言：<?php echo str_cut($r[huanzheganyan],350,'');?></a></p>
            <p class="ztalcont_right_p2"><a href="#">立即改变形象</a></p>
            <p class="ztalcont_right_p3"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">患者故事：<?php echo str_cut($r[huanzhegushi],350,'');?></a></p>
        </div>
        <div class="rightuldl">
            <!--<img src="/statics/images/zhifa_cn_images/adfdsf_03.png" width="34" class="uldlprevimg" />-->
            <!--<img src="/statics/images/zhifa_cn_images/abcdefg_06.png" width="34" class="uldlnext" />-->
            <!--<ul>-->
            <!--<li><img src="<?php echo $r['qianimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['qianimg2'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg1'];?>" width="140" height="130" /></li>-->
            <!--<li><img src="<?php echo $r['houimg2'];?>" width="140" height="130" /></li>-->
            <!--</ul>-->
            <div class="rightuldlimg">
                <img src="<?php echo $r['qhimg'];?>" alt="<?php echo $r['title'];?>" width="310" height="300" />
            </div>
            <dl>
                <dt><?php echo str_cut($r[title],50,'');?></dt>
                <dd>姓名：<b><?php echo str_cut($r[xinming],50,'');?></b></dd>
                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'');?></b></dd>
                <dd>年龄：<b><?php echo str_cut($r[nianling],20,'');?></b></dd>
                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'');?></b></dd>
                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'');?></b></dd>
                <dd>植发时间：<b><?php echo str_cut($r[zhifashijian],20,'');?></b></dd>
                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],20,'');?></b></dd>
                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],20,'');?></b></dd>
            </dl>
            <div class="ztalrightfenx">
                <p><?php include template("content","shareCode"); ?></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

</div>

<div id="ztalcont_two" class="ztalcont_two">
    <div class="cont_head">
        <p class="cont_headp1">RESURGENT</p>
        <p class="cont_headp2">雍禾发友<span>心声</span></p>
        <p class="cont_headp3"></p>
        <div class="cont_headdiv">
            <img src="/statics/images/zhifa_cn_images/abcef_18.jpg" width="44" />
            <p class="cont_headp4">也许你在植发前，会有各种担忧：害怕疼痛，担心效果不好，头发长出来了会不会再掉，我非得用植发的方式才能治好脱发吗……这些是发友们在雍禾植发的真实感受记录，从中我们可以身临其境感受植发的细节，各种疑虑和不安可以得到有效解答，植发过程其实很轻松。</p>
        </div>
    </div>
    <div id="ztalcont_twoleft" class="ztalcont_twoleft">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aac419f05d18a1717f98b983281fd0be&action=lists&catid=91&order=listorder+DESC&num=8&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'91','order'=>'listorder DESC','moreinfo'=>'1',)).'aac419f05d18a1717f98b983281fd0be');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'91','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $sdfa=0;?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="ztalleftuldiv" <?php if($sdfa==0) { ?> style="display: block;" <?php } ?>>
        <h2><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],50,'');?></a></h2>
        <p><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[description],350,'');?></a></p>
    </div>
    <?php $sdfa+=1;?>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <div id="ztalleftul" class="ztalleftul">
        <img src="/statics/images/zhifa_cn_images/abcef_22.jpg" width="17" alt="上一个" class="ztalleftulprive" />
        <img src="/statics/images/zhifa_cn_images/abcef_25.jpg" width="17" alt="下一个" class="ztalleftulnext" />
        <div class="ztalleftuldiv2">
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aac419f05d18a1717f98b983281fd0be&action=lists&catid=91&order=listorder+DESC&num=8&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'91','order'=>'listorder DESC','moreinfo'=>'1',)).'aac419f05d18a1717f98b983281fd0be');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'91','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><span></span><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
</div>
<div id="ztalcont_tworight" class="ztalcont_tworight">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=325ce4f2139d8d07afd1e7d686404f39&action=lists&catid=92&order=listorder+DESC&num=8&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'92','order'=>'listorder DESC','moreinfo'=>'1',)).'325ce4f2139d8d07afd1e7d686404f39');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'92','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    <?php $ndsf=0;?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="ztalrightuldiv" <?php if($ndsf==0) { ?> style="display:block;" <?php } ?>>
    <h2><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><div class="h2adiv1"></div><?php echo str_cut($r[title],50,'');?><div class="h2adiv2"></div></a></h2>
    <p><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[description],350,'');?></a></p>
</div>
<?php $ndsf+=1;?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<ul id="ztalrightul" class="ztalrightul">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=325ce4f2139d8d07afd1e7d686404f39&action=lists&catid=92&order=listorder+DESC&num=8&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'92','order'=>'listorder DESC','moreinfo'=>'1',)).'325ce4f2139d8d07afd1e7d686404f39');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'92','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    <?php $ndsf=0;?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <li <?php if($ndsf==0) { ?> class="activeztalli" <?php } ?>><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
    <?php $ndsf+=1;?>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
</div>
</div>

<div id="ztalcont_three" class="ztalcont_three">
    <div class="cont_head">
        <p class="cont_headp1">RESURGENT</p>
        <p class="cont_headp2">雍禾专家<span>忠告</span></p>
        <p class="cont_headp3"></p>
        <div class="cont_headdiv">
            <img src="/statics/images/zhifa_cn_images/abcef_37.jpg" width="44" />
            <p class="cont_headp4">很多发友对植发的认识有各种各样的误解和错误观念，如何让发友们了解植发的效果和植发需要了解的科普知识，是我们作为植发医生应尽的义务之一，以便于发友们做出正确的判断和决定。同时也从科学角度告知发友们，如何选择和识别植发医院和专家，避免不必要的经济损失和心理不适。</p>
        </div>
    </div>
    <div class="ztalthree_divleft">
        <div class="divleftnav">
            <img src="/statics/images/zhifa_cn_images/abcef_40.jpg" width="281" alt="" />
        </div>
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=886958b89f2d975b5bba6574a7d4b734&action=lists&catid=3&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'3','order'=>'listorder DESC','moreinfo'=>'1',)).'886958b89f2d975b5bba6574a7d4b734');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'3','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">▪ <?php echo str_cut($r[title],50,'');?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="ztalthree_divmiddle">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a90a7551df1e470889316f620a56fd47&action=lists&catid=93&order=listorder+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'93','order'=>'listorder DESC','moreinfo'=>'1',)).'a90a7551df1e470889316f620a56fd47');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'93','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $ndsf=0;?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="divmiddlediv" <?php if($ndsf==0) { ?> style="display:block;" <?php } ?>>
        <h2><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><div class="h2adiv3"></div><?php echo str_cut($r[title],30,'');?><div class="h2adiv4"></div></a></h2>
        <p><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[description],350,'');?></a></p>
    </div>
    <?php $ndsf+=1;?>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <ul id="divmiddleul" class="divmiddleul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a90a7551df1e470889316f620a56fd47&action=lists&catid=93&order=listorder+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'93','order'=>'listorder DESC','moreinfo'=>'1',)).'a90a7551df1e470889316f620a56fd47');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'93','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $ndsf=0;?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li <?php if($ndsf==0) { ?> class="activemiddleulli" <?php } ?>><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],50,'');?></a></li>
        <?php $ndsf+=1;?>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>
<div class="ztalthree_divright">
    <div class="divrightnav">
        <img src="/statics/images/zhifa_cn_images/abcef_43.jpg" width="317" alt="" />
    </div>
</div>
<div class="ztalthree_divbottom">
    <dl>
        <dt><div class="dldtdiv1"></div>发友疑问解答<div class="dldtdiv2"></div></dt>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c56a98d7ef19f10158c096180768ba9c&action=lists&catid=94&order=listorder+DESC&num=4&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'94','order'=>'listorder DESC','moreinfo'=>'1',)).'c56a98d7ef19f10158c096180768ba9c');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'94','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <dd><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],50,'');?></a></dd>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </dl>
</div>
</div>

<div id="ztalcont_four" class="ztalcont_four">
    <div class="cont_head">
        <p class="cont_headp1">RESURGENT</p>
        <p class="cont_headp2">植发<span>保障协议</span></p>
        <p class="cont_headp3"></p>
        <div class="cont_headdiv">
            <img src="/statics/images/zhifa_cn_images/abcef_80.jpg" width="44" />
            <p class="cont_headp4">植发市场鱼龙混杂，植发技术不合格、服务质量差、乱收费、口头许诺事后不兑现、过度医疗……很多发友求美心切，仓促决定从而上当受骗，带来重大损失。为了让发友们能够放心明白植发，也使植发行业进行自律，扭转不正之风，雍禾率先在植发界倡导诚信服务的新举措——透明医疗签约植发。</p>
        </div>
    </div>
    <div class="ztalcont_fourhead">
        <h2>透明医疗<b>五大保障</b></h2>
        <p class="fourheadp1">雍禾植发，率先在植发业内倡导透明医疗/签约协议植发，推出植发五大保障，解决发友后顾之忧。</p>
        <p class="fourheadp2">YongHe hair transplant, take the lead in hair transplant hair transplant industry promote transparent medical/signed agreement launched five hair, solve trouble back at home</p>
    </div>
    <dl>
        <dt><img src="/statics/images/zhifa_cn_images/abcef_60.jpg" alt="透明医疗签约植发" /></dt>
        <dd><img src="/statics/images/zhifa_cn_images/abcef_62.jpg" alt="全国联保协议" /></dd>
        <dd><img src="/statics/images/zhifa_cn_images/abcef_64.jpg" alt="医师亲珍手术协议" /></dd>
        <dd><img src="/statics/images/zhifa_cn_images/abcef_66.jpg" alt="术前术后收费协议" /></dd>
        <dd><img src="/statics/images/zhifa_cn_images/abcef_72.jpg" alt="手术预约金保障协议" /></dd>
        <dd><img src="/statics/images/zhifa_cn_images/abcef_73.jpg" alt="毛囊成活率保障协议" /></dd>
        <dd><img src="/statics/images/zhifa_cn_images/abcef_74.jpg" alt="质量管理体系启动仪式" /></dd>
    </dl>
    <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c0926e5ebb17b9ea15fe5138dd7f9a06&action=lists&catid=95&order=listorder+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'95','order'=>'listorder DESC','moreinfo'=>'1',)).'c0926e5ebb17b9ea15fe5138dd7f9a06');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'95','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">▪ <?php echo str_cut($r[title],50,'');?><span class="ulliadiv"></span></a><p>[<?php echo date('Y.m.d',$r[inputtime]);?>]</p></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>

<div id="ztalcont_five" class="ztalcont_five">
    <div class="cont_head">
        <p class="cont_headp1">RESURGENT</p>
        <p class="cont_headp2">植发<span>媒体报道</span></p>
        <p class="cont_headp3"></p>
        <div class="cont_headdiv">
            <img src="/statics/images/zhifa_cn_images/5png_03.jpg" width="44" />
            <p class="cont_headp4">诚信是企业的生命，也是每个医院的生命。中国的植发医院存在或大或小的诚信问题，而作为植发业的领导品牌，雍禾一直是加强自身的诚信建设，以此推动整个行业的诚信服务。雍禾因为诚信，吸引广大患者；雍禾因为诚信，吸引众多媒体。下面的舆情观察是众媒体聚焦雍禾诚信植发的事。</p>
        </div>
    </div>

    <ul>
        <li><img src="/statics/images/zhifa_cn_images/abcef_84.jpg" /></li>
        <li><img src="/statics/images/zhifa_cn_images/abcef_86.jpg" /></li>
        <li><img src="/statics/images/zhifa_cn_images/abcef_88.jpg" /></li>
        <li><img src="/statics/images/zhifa_cn_images/abcef_89.jpg" /></li>
        <li><img src="/statics/images/zhifa_cn_images/abcef_93.jpg" /></li>
        <li><img src="/statics/images/zhifa_cn_images/abcef_95.jpg" /></li>
        <li><img src="/statics/images/zhifa_cn_images/abcef_96.jpg" /></li>
    </ul>
</div>

<script>
    ztalcont_left();
    hm.app.toRun8();
    ztalrightul();
    ztalleftul();
    divmiddleul();
</script>

<?php include template("content","footer"); ?>