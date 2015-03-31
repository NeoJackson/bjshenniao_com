<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","headbody"); ?>
<?php include template("content","header_content"); ?>
<!-- 通栏幻灯大banner -->
<div id="slideBox" class="slideBox_yh">
    <div class="bd">
        <ul>
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=27"></script></div></li>
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
<div id="yhsp_content" class="yhsp_content">
    <div id="yhsp_contone" class="yhsp_contone">
        <div class="contone_sp">
            <p><?php echo $shipin;?></p>
        </div>
        <div class="contone_ptext">
            <img src="/statics/images/zhifa_cn_images/spzt_08-2.jpg" />
            <p>雍禾植发历经十五年风雨，一路走来有坎坷、有辉煌，这里记载着他们曾经辉煌的瞬间，这里汇集了他们回馈社会的点滴。或许您不经意间进入这个网站，或许您对雍禾略知一二，无论您通过哪种方式进来，相信这里一定有您意想不到的惊喜。</p>
            <p>雍禾新闻动态，一个让你对雍禾进行全方位了解的窗口，看央视报道雍禾大事件，听雍禾牵手公益肩负社会使命的心灵呼唤。速速了解，与发友来一次跨国之旅，考察国内外植发行情，赶快加入，说不定下一个发友赴欧美就是你！</p>
        </div>
        <div class="contone_botom">
            <div><?php include template("content","shareCode"); ?></div>
            <span><a href="#"><img src="/statics/images/zhifa_cn_images/ztsp_03.png" width="51" /></a></span>
        </div>
    </div>
    <!-- 雍禾视频模版 视频列表 -->
    <div id="yhsp_conttwo" class="yhsp_conttwo">
        <div class="yhsp_conttwo_div" id="yhsp_conttwo_div">
            <img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_03.png" width="24" class="yhsp_conttwo_preivew" id="yhsp_conttwo_preivew" />
            <img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_05.png" width="24" class="yhsp_conttwo_next" id="yhsp_conttwo_next" />
            <div class="yhsp_conttwo_main" id="yhsp_conttwo_main">
                <ul id="yhsp_conttwo_main_ul" class="yhsp_conttwo_main_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a83a15873af98c8cf7914c691c6a5437&action=lists&catid=%24catid&order=updatetime+DESC&num=10&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1',)).'a83a15873af98c8cf7914c691c6a5437');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="220" /><p><?php echo str_cut($r[title],50,' ...');?></p></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
    </div>
    <script>
        hm.app.toRun7();
    </script>
    <div class="navdiv">
        <img src="<?php echo IMG_PATH;?>zhifa_cn_images/spzt_20.jpg" width="1000" height="92" />
    </div>
    <div class="commondiv">
        <ul class="commondiv_list_right_ul2">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e1982780d047e57dc857db56c654faf9&action=lists&catid=3&order=updatetime+DESC&num=3&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'3','order'=>'updatetime DESC',)).'e1982780d047e57dc857db56c654faf9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'3','order'=>'updatetime DESC','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $nbab=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li <?php if($nbab==0) { ?> class="list_right_ul2_activeli" <?php } ?>>
            <span><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],50,' ...');?></a></span>
            <div class="commondiv_list_right_ul2_div">
                <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                    <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" />
                    <h3><?php echo str_cut($r[title],50,' ...');?></h3>
                    <p><?php echo str_cut($r[description],280,'');?><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" style="color:#ff6820;">……详细</a></p>
                </a>
            </div>
            </li>
            <?php $nbab+=1;?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div class="commondiv_content_seven_main_one_main_rightul">
            <p>发友推荐精品文章</p>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8ce6d0b6bf0e5d22961764e96530e848&action=lists&catid=51&order=updatetime+DESC&num=17&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'51','order'=>'updatetime DESC',)).'8ce6d0b6bf0e5d22961764e96530e848');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'51','order'=>'updatetime DESC','limit'=>'17',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],90,' ...');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="commondiv_content_three_main_dldiv">
            <dl id="commondiv_content_three_main_dl" class="commondiv_content_three_main_dl">
                <dt>发友推荐雍禾植发专家团队</dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6df3dca534f0435b23d8996b864df99e&action=lists&catid=4&order=updatetime+DESC&num=9&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1',)).'6df3dca534f0435b23d8996b864df99e');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'9',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <dd><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],75,80);?>" alt="<?php echo $r['title'];?>"/><b><?php echo str_cut($r[title],20,'…');?></b></a></dd>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>
        <div class="productNav">
            <?php include template("content","productNav"); ?>
        </div>
    </div>
</div>

<?php include template("content","footer"); ?>