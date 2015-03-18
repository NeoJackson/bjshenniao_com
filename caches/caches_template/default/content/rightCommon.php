<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="listcontent_right">
    <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank" class="listcontent_right_form">
        <input type="hidden" name="m" value="search"/>
        <input type="hidden" name="c" value="index"/>
        <input type="hidden" name="a" value="init"/>
        <input type="hidden" name="typeid" value="<?php echo $typeid;?>"/>
        <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
        <?php $search_model = getcache('search_model_'.$siteid, 'search');?>

        <select name="typeid" id="typeid">
            <?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
            <option value="<?php echo $v['typeid'];?>"><?php echo $v['name'];?></option>
            <?php $n++;}unset($n); ?>
        </select>

        <input type="text" name="q" id="q" class="listcontent_right_form_text" />
        <input type="submit" class="listcontent_right_form_submit" value=""/>
    </form>


    <div id="hottujian" class="hottujian">
        <ul id="hottujian_ul1" class="hottujian_ul1">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3e078ff4482d9ed4b5f74f27f4cea15b&action=lists&catid=33&order=listorder+DESC&num=1&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'33','order'=>'listorder DESC',)).'3e078ff4482d9ed4b5f74f27f4cea15b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'listorder DESC','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"/></a></li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <dl id="hottujian_dl" class="hottujian_dl">
        <dt>热点推荐</dt>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=80f592d5b6f71b85e4948c3587d497e6&action=lists&catid=6&order=updatetime+DESC&num=5&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'6','order'=>'updatetime DESC',)).'80f592d5b6f71b85e4948c3587d497e6');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','order'=>'updatetime DESC','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $nbs=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <dd <?php if($nbs==0) { ?> class="hottujian_dl_activedd" <?php } ?>>
                    <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],55,' ...');?></a>
                    <p ><?php echo date('Y-m-d',$r[inputtime]);?></p>
                </dd>
            <?php $nbs+=1;?>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </dl>
    <dl id="zhifatuandui_dl" class="zhifatuandui_dl">
        <dt>发友推荐雍禾植发专家团队<a href="/zfzj/">more</a></dt>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cdf314b3b80966499dd3a60228931264&action=lists&catid=4&order=updatetime+DESC&num=6&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'4','order'=>'updatetime DESC',)).'cdf314b3b80966499dd3a60228931264');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'4','order'=>'updatetime DESC','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <dd>
                    <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="77" height="80"/><p><?php echo str_cut($r[title],20,' ...');?></p></a>
                </dd>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </dl>


    <!-- 列表页右则 内容幻灯片 -->
    <div class="content_one_div_list">
        <div id="content_one_ul_main_list" class="content_one_ul_main_list">
            <ul id="content_one_ul_main_ul_list" class="content_one_ul_main_ul_list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=829f64ea13dc9badc4fbbde7e4dc52c9&action=position&posid=18&order=listorder+DESC&num=8&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'18','order'=>'listorder DESC',)).'829f64ea13dc9badc4fbbde7e4dc52c9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $bms=0;?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li <?php if($bms==0) { ?> class="content_one_ul_main_ul_activeli" <?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],335,335);?>" alt="<?php echo $r['title'];?>"/></a></li>
                <?php $bms+=1;?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <div class="content_one_ul_main_pre_list" id="content_one_ul_main_pre_list"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_03.png" alt="上一页"/></div>
            <div class="content_one_ul_main_next_list" id="content_one_ul_main_next_list"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_05.png" alt="下一页"/></div>
        </div>
        <ul id="content_one_ul_list" class="content_one_ul_list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=829f64ea13dc9badc4fbbde7e4dc52c9&action=position&posid=18&order=listorder+DESC&num=8&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'18','order'=>'listorder DESC',)).'829f64ea13dc9badc4fbbde7e4dc52c9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $bmsa=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li <?php if($bmsa==0) { ?> class="content_one_ul_activeli" <?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
            <?php $bmsa+=1;?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>

    <ul id="list_right_ul2" class="list_right_ul2">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=45c37d2d5113044f92af37b7064691cb&action=lists&catid=3&order=updatetime+DESC&num=5&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'3','order'=>'updatetime DESC',)).'45c37d2d5113044f92af37b7064691cb');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'3','order'=>'updatetime DESC','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $nbab=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li <?php if($nbab==0) { ?> class="list_right_ul2_activeli" <?php } ?>>
                <span><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],50,' ...');?></a></span>
                <div class="list_right_ul2_div">
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
    <dl id="zhifaproduct" class="zhifaproduct">
        <dt><a title="种植项目" href="/dyzfxm/"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/h_03.jpg" alt="种植项目"/></a></dt>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e8a9ebe844ba634ab02bb12b93e17f83&action=category&catid=52&num=12&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'52','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'12',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <dd><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><h2><?php echo $r['catname'];?></h2></a></dd>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </dl>
</div>


<script>

    // 列表页右侧 内容幻灯片
    content_one2();

    // 列表页右侧内容 热点推荐
    hottujian_dl();

    // 列表页右侧内容
    // list_right_ul2();

</script>