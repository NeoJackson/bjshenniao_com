<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","headbody"); ?>
<?php include template("content","header_content"); ?>
<!-- 通栏幻灯大banner -->
<div id="slideBoxzb" class="slideBox_yhzb">
    <div class="bdzb">
        <ul>
            <li><div class="siteWidthzb"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=39"></script></div></li>
            <!--
            <li><div class="siteWidthzb"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=24"></script></div></li>
            <li><div class="siteWidthzb"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=24"></script></div></li>
            -->
        </ul>
    </div>
    <!--
    <div id="hdzb" class="hdzb">
        <ul><li class="onzb">1</li><li>2</li><li>3</li></ul>
    </div>
    -->
    <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
    <!--
    <a class="slideBox_prevzb" href="javascript:void(0)"></a>
    <a class="slideBox_nextzb" href="javascript:void(0)"></a>
    -->
</div>
<!--
<script>
    hm.app.toRun5();
</script>
-->
<div id="yhzbsp_content" class="yhzbsp_content">
    <div id="yhzbsp_contone" class="yhzbsp_contone">
        <div class="contone_zbsp">
            <p>
                <!-- 视频直播地址 -->
                <script>
                    if (navigator.userAgent.match(/iPod|iPhone|iPad|Android/i)) {
                        document.write('<video id="yhvideo" width="705" height="400" src="http://tp05.videocc.net/yhmd/yhmd/playlist.m3u8"  preload controls></video>');
                    }
                </script>
                <object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' width='705' height='400' id='03ed8207-8f8a-4e47-90ab-46578a813b49'><param name='movie' value='http://liveplayer.polyv.net/player/hsmvid6y/yhmd.swf'/><param name='allowscriptaccess' value='always' /><param name='allowfullscreen' value='true' /><embed src='http://liveplayer.polyv.net/player/hsmvid6y/yhmd.swf' width='705' height='400'  type='application/x-shockwave-flash' allowscriptaccess='always' name='03ed8207-8f8a-4e47-90ab-46578a813b49' allowfullscreen='true' /></embed></object>

            </p>
        </div>
        <div class="contone_botomzb">
            <div><?php include template("content","shareCode"); ?></div>
        </div>
    </div>
    <!-- 雍禾视频模版 视频列表 -->
    <div id="yhzbsp_conttwo" class="yhzbsp_conttwo">
        <div class="yhzbsp_conttwo_div" id="yhzbsp_conttwo_div">
            <img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_03.png" width="24" class="yhzbsp_conttwo_preivew" id="yhzbsp_conttwo_preivew" />
            <img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_05.png" width="24" class="yhzbsp_conttwo_next" id="yhzbsp_conttwo_next" />
            <div class="yhzbsp_conttwo_main" id="yhzbsp_conttwo_main">
                <ul id="yhzbsp_conttwo_main_ul" class="yhzbsp_conttwo_main_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a83a15873af98c8cf7914c691c6a5437&action=lists&catid=%24catid&order=updatetime+DESC&num=10&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1',)).'a83a15873af98c8cf7914c691c6a5437');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="220" /><p><?php echo str_cut($r[title],50,' ...');?></p></a></li>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
    </div>

    <div id="commondivzbhot" class="commondivzbhot">
        <img src="/statics/images/zhifa_cn_images/sdfsafaf_05.jpg" width="187" height="49" alt="本期发友会热点" />
        <div class="divzbhotdiv">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d26830840ae1009495c07fc61c114462&action=lists&catid=%24catid&order=updatetime+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1',)).'d26830840ae1009495c07fc61c114462');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $nfds=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="divzbhotdivcont" <?php if($nfds==0) { ?> style="display:block;" <?php } ?>>
                <h2><?php echo $r['title'];?></h2>
                <p class="hotdivcontp1" style="height:200px;"><?php echo $r['content'];?></p>
                <div class="xialap">
                    <div><img src="/statics/images/zhifa_cn_images/sdfsafaf_09.jpg" width="90" height="22" alt="详情下拉" /></div>
                </div>
            </div>
            <?php $nfds+=1;?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <ul id="divzbhotul" class="divzbhotul">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d26830840ae1009495c07fc61c114462&action=lists&catid=%24catid&order=updatetime+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1',)).'d26830840ae1009495c07fc61c114462');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><?php echo $r['title'];?></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>

        <div class="web_show">
            <div class="web_showLeft">
                <!--1新浪官方微博-->
                <iframe width="500" height="618" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=500&height=618&fansRow=2&ptype=1&speed=0&skin=1&isTitle=1&noborder=1&isWeibo=1&isFans=0&uid=1888690981&verifier=06903df6&dpc=1"></iframe>
            </div>

            <div class="web_showRight">
                <!--2腾讯官方微博-->
                <iframe frameborder="0" scrolling="no" src="http://show.v.t.qq.com/index.php?c=show&a=index&n=weibo002730&w=500&h=598&fl=2&l=8&o=29&co=0" width="500" height="598"></iframe>
            </div>
        </div>

    </div>
    <div class="navdivzb">
        <img src="<?php echo IMG_PATH;?>zhifa_cn_images/spzt_20.jpg" width="1000" height="92" />
    </div>
    <div class="commondivzb">
        <ul class="commondiv_list_right_ul2zb">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f4ee50a9bf132783daa4c07d0c9b3129&action=lists&catid=3&order=updatetime+DESC&num=3&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'3','order'=>'updatetime DESC','moreinfo'=>'1',)).'f4ee50a9bf132783daa4c07d0c9b3129');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'3','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $nbab=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li <?php if($nbab==0) { ?> class="list_right_ul2_activelizb" <?php } ?>>
            <span><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],50,' ...');?></a></span>
            <div class="commondiv_list_right_ul2_divzb">
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
        <div class="commondiv_content_seven_main_one_main_rightulzb">
            <p>发友推荐精品文章</p>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8ce6d0b6bf0e5d22961764e96530e848&action=lists&catid=51&order=updatetime+DESC&num=17&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'51','order'=>'updatetime DESC',)).'8ce6d0b6bf0e5d22961764e96530e848');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'51','order'=>'updatetime DESC','limit'=>'17',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],90,' ...');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="commondiv_content_three_main_dldivzb">
            <dl id="commondiv_content_three_main_dlzb" class="commondiv_content_three_main_dlzb">
                <dt>发友推荐雍禾植发专家团队</dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6df3dca534f0435b23d8996b864df99e&action=lists&catid=4&order=updatetime+DESC&num=9&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1',)).'6df3dca534f0435b23d8996b864df99e');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'9',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <dd><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],75,80);?>" alt="<?php echo $r['title'];?>"/><b><?php echo str_cut($r[title],20,'…');?></b></a></dd>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
        </div>
        <div class="productNavzb">
            <?php include template("content","productNav"); ?>
        </div>

        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a1b38fb2c568a2f1fca59e05335334b3&action=lists&catid=%24catid&order=updatetime+DESC&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php eval("\$arr=".$r[zbxcsj].";");?>
            <?php if(!empty($arr)) { ?>
                <div id="divzbhotimg" class="divzbhotimg">
                    <h3>发友会现场精彩瞬间</h3>
                    <img src="/statics/images/zhifa_cn_images/sdfsafaf_19.jpg" width="75" height="73" alt="上一张" class="divzbhotimgprve" />
                    <img src="/statics/images/zhifa_cn_images/sdfsafaf_16.jpg" width="74" height="73" alt="下一张" class="divzbhotimgnext" />
                    <div class="divzbhotimgcont">
                        <ul>
                            <?php $n=1;if(is_array($arr)) foreach($arr AS $val) { ?>
                            <li><img src="<?php echo $val['url'];?>" width="599" /></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>
                <script>
                    hm.app.toRun14();
                </script>
            <?php } ?>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>

<script>
    hm.app.toRun15();
    xialap();
</script>

<?php include template("content","footer"); ?>