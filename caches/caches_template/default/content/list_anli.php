<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- 列表页内容 -->
<div class="listcontent">
<div class="listcontent_div">
<!-- 列表页左侧内容 -->
<div class="listcontent_left">
    <?php include template("content","curPos"); ?>
    <div class="list_banner">
        <a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/f_03.jpg"/></a>
    </div>
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
    <ul class="listcontent_left_ul2">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ee4fa27e346f4aa4e43f4dd48214315&action=lists&catid=%24catid&order=updatetime+DESC&num=10&cache=3600&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'updatetime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'updatetime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><h2><?php echo str_cut($r[title],80,' ...');?></h2></a>
                <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><p><?php echo str_cut($r[description],380,' ...');?></p></a>
                <p class="listcontent_left_ul2_p1"><?php include template("content","shareCode"); ?></p>
            </li>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <?php include template("content","fenYe"); ?>
    <!-- 列表页左侧共同底部内容 -->
    <?php include template("content","leftCommon"); ?>
</div>
<!-- 列表页右侧内容 -->
<?php include template("content","rightCommon"); ?>
</div>
</div>

<?php include template("content","footer"); ?>