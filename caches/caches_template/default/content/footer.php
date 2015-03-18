<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!-- 靠近尾部 的荣誉资质合作机构等部分  -->
<div id="zhizirongyu" class="zhizirongyu">
    <ul id="zhizirongyu_ul" class="zhizirongyu_ul">
        <li class="zhizirongyu_ul_liactive"><a href="#">合作机构</a></li>
        <li><a href="#">机构荣誉</a></li>
        <li><a href="#" style="border-right:none;">顶尖设备</a></li>
    </ul>
    <div id="zhizirongyu_content" class="zhizirongyu_content">
        <ul style="display:block;" class="zhizirongyu_content_ul">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5108c2f58078b772d85ff194f95b8bbb&action=lists&catid=22&order=updatetime+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'22','order'=>'updatetime DESC','moreinfo'=>'1',)).'5108c2f58078b772d85ff194f95b8bbb');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img width="180" src="<?php echo $r['thumb'];?>"/></a></li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <ul class="zhizirongyu_content_ul">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=87d91170dddd191d60d50ff123fb7fcc&action=lists&catid=23&order=updatetime+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'23','order'=>'updatetime DESC','moreinfo'=>'1',)).'87d91170dddd191d60d50ff123fb7fcc');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'23','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img width="180" src="<?php echo $r['thumb'];?>"/></a></li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <ul class="zhizirongyu_content_ul">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc48f64071d0df7ce0fa9250cfa9caab&action=lists&catid=24&order=updatetime+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'24','order'=>'updatetime DESC','moreinfo'=>'1',)).'dc48f64071d0df7ce0fa9250cfa9caab');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'24','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img width="180" src="<?php echo $r['thumb'];?>"/></a></li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>

<!-- 尾部 -->
<div id="footer" class="footer">
    <div id="footer_nav" class="footer_nav">
        <ul id="footer_nav_ul" class="footer_nav_ul">
            <li><a href="<?php echo siteurl($siteid);?>" title="雍禾植发">雍禾首页</a></li>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=522dcf79f84779c8c187ca374072cc0d&action=category&catid=0&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
                <?php $ns=0;?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>" <?php if($ns==7) { ?> style="border-right:none;" <?php } ?> ><?php echo $r['catname'];?></a></li>
                <?php $ns=$ns+1;?>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div id="footer_info" class="footer_info">
        <div id="footer_logo" class="footer_logo">
            <a href="/" title="雍禾植发"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/YHlogo_footer.png" width="118" alt="雍禾植发" /></a>
        </div>
        <div id="footer_p" class="footer_p">
            <p>版权声明：本网站商标及图片属北京雍禾美度门诊部，未经授权请勿复制及转载。</p>
            <p>网站内容声明：本网站信息仅供参考，不能作为诊疗及医疗依据。</p>
            <p>Copyright ©2015 雍禾植发 京ICP备11041313号 </p>
            <p>免费咨询热线：400-888-6667</p>
        </div>
        <ul id="footer_ul" class="footer_ul">
            <li><a href="#">北京雍禾</a></li>
            <li><a href="#">广州雍禾</a></li>
            <li><a href="#">武汉雍禾</a></li>
            <li><a href="#">上海雍禾</a></li>
            <li><a href="#">深圳雍禾</a></li>
            <li><a href="#">成都雍禾</a></li>
        </ul>
    </div>
    <div id="page"></div>
</div>

</body>
</html>