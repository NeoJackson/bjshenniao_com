<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- 列表页内容 -->
<div class="listcontent">
<div class="listcontent_div">
<!-- 列表页左侧内容 -->
<div class="listcontent_left">
    <?php include template("content","curPos"); ?>

    <div id="listcontent_left_content" class="listcontent_left_content">
        <h2><?php echo $title;?></h2>
        <p class="listcontent_left_content_p1"><?php echo $inputtime;?> &nbsp;&nbsp; 来源：<?php echo $copyfrom;?></p>
        <p class="listcontent_left_content_p2"><?php include template("content","shareCode"); ?></p>
        <ul class="listcontent_left_ul">
            <li class="secondli"><a title="头发种植" href="/al_tfzz/">头发种植</a></li>
            <li><a title="发际线调整" href="/al_fjxtz/">发际线调整</a></li>
            <li class="secondli"><a title="胡须种植" href="/al_hxzz/">胡须种植</a></li>
            <li><a title="鬓角种植" href="/al_bjzz/">鬓角种植</a></li>
            <li><a title="眉毛种植" href="/al_mmzz/">眉毛种植</a></li>
            <li class="secondli"><a title="疤痕植发" href="/al_bhzz/">疤痕植发</a></li>
            <li><a title="睫毛种植" href="/al_jmzz/">睫毛种植</a></li>
            <li class="secondli"><a title="美人尖种植" href="/al_mrjzz/">美人尖种植</a></li>
        </ul>
        <p class="listcontent_left_content_p3"><?php echo $content;?></p>
        <p class="listcontent_left_content_p4"><span>上一篇：</span><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></p>
        <p class="listcontent_left_content_p5"><span>下一篇：</span><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></p>
        <div class="list_banner">
            <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=26"></script>
        </div>
        <div id="xiangguanwenzhang" class="xiangguanwenzhang">
            <p class="xiangguanwenzhang_p1">相关文章</p>
            <ul class="xiangguanwenzhang_ul1">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=05d957adf6480d42eec35a65564542d8&action=relation&relation=%24relation&catid=%24catid&num=8&keywords=%24rs%5Bkeywords%5D&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'catid'=>$catid,'keywords'=>$rs[keywords],'moreinfo'=>'1','limit'=>'8',));}?>
                    <?php if($data) { ?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
                        <?php $n++;}unset($n); ?>
                    <?php } ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=637c117dffa75d8d7fc87890a715684c&action=lists&catid=%24catid&order=updatetime+ASC&num=8&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'updatetime ASC',)).'637c117dffa75d8d7fc87890a715684c');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'updatetime ASC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul id="xiangguanwenzhang_ul2" class="xiangguanwenzhang_ul2">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9fa8805e08d862b09549007992e423cf&action=lists&catid=35&order=updatetime+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'35','order'=>'updatetime DESC',)).'9fa8805e08d862b09549007992e423cf');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'35','order'=>'updatetime DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $sff=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li <?php if($sff==0) { ?> class="xiangguanwenzhang_ul2_activeli" <?php } ?>>
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                                <p class="xiangguanwenzhang_ul2_p1"><?php echo str_cut($r[title],40,' ...');?></p>
                                <p class="xiangguanwenzhang_ul2_p2"><?php echo str_cut($r[description],80,'');?><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" style="color:#ff6820;">……详情</a></p>
                            </a>
                        </li>
                    <?php $sff+=1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
    <!-- 列表页左侧共同底部内容 -->
    <?php include template("content","leftCommon"); ?>
</div>
<!-- 列表页右侧内容 -->
<?php include template("content","rightCommon"); ?>
</div>
</div>


<script>

    // 内容页 相关文章
    xiangguanwenzhang_ul2();

</script>

<?php include template("content","footer"); ?>