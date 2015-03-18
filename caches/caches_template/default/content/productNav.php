<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!-- 植发项目导航  -->
<div id="pro_nav" class="pro_nav">
    <dl id="pro_nav_dl" class="pro_nav_dl">
        <dt><a href="/dyzfxm/" title="植发项目"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/h_03.jpg" alt="植发项目" /></a></dt>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=37525f898bb9210d2258c7c5cd7f1197&action=category&catid=52&num=13&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'52','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'13',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <dd>
            <h2><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><img src="<?php echo $r['image'];?>" alt="<?php echo $r['catname'];?>" /><b><?php echo $r['catname'];?></b></a></h2>
        </dd>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </dl>
</div>