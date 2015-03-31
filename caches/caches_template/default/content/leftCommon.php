<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <div id="kehuanli" class="kehuanli">
        <p class="kehuanli_p">雍禾案例<span>（未经本人同意，不得转载）</span></p>
        <img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_06.jpg" width="23" id="kehuanli_yhanli_prew" class="kehuanli_yhanli_prew"/>
        <img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_09.jpg" width="23" id="kehuanli_yhanli_next" class="kehuanli_yhanli_next" />
        <div class="kehuanli_yhanli_div" id="kehuanli_yhanli_div">
            <ul id="kehuanli_yhanli" class="kehuanli_yhanli">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=069293ace74ef9f9c50d155fbdb22e1f&action=position&posid=26&order=listorder+DESC&num=10&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'26','order'=>'listorder DESC','moreinfo'=>'1',)).'069293ace74ef9f9c50d155fbdb22e1f');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'26','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="280" height="160" /></a><h3><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],'40','...');?></a></h3><p><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],'180','...');?></a></p></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>

    <div class="yhxwjj_dldiv">
        <dl id="yhxwjj" class="yhxwjj">
            <dt>雍禾新闻聚焦</dt>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3e078ff4482d9ed4b5f74f27f4cea15b&action=lists&catid=33&order=listorder+DESC&num=1&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'33','order'=>'listorder DESC',)).'3e078ff4482d9ed4b5f74f27f4cea15b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'listorder DESC','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <dd class="yhxwjj_dd1">
                        <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                            <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="253" height="150" />
                            <h3><?php echo str_cut($r[title],65,' ...');?></h3>
                            <p><?php echo str_cut($r[description],220,' ...');?></p>
                        </a>
                    </dd>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9c3c0adbc4273df95ab2c957f48a4aaa&action=lists&catid=6&order=listorder+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'6','order'=>'listorder DESC',)).'9c3c0adbc4273df95ab2c957f48a4aaa');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','order'=>'listorder DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <dd class="yhxwjj_dd2"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></dd>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </dl>
    </div>

    <div class="laiyuanluxian_div">
        <ul id="laiyuanluxian" class="laiyuanluxian">
            <li class="laiyuanluxian_activeli"><a title="#" href="#">北京雍禾</a></li>
            <li><a title="#" href="#">上海雍禾</a></li>
            <li><a title="#" href="#">广州雍禾</a></li>
            <li><a title="#" href="#">深圳雍禾</a></li>
            <li><a title="#" href="#">成都雍禾</a></li>
            <li><a title="#" href="#">武汉雍禾</a></li>
            <li><a title="#" href="#">沈阳雍禾</a></li>
        </ul>
        <div class="laiyuanluxian_main">
            <ul style="display:block;" class="laiyuanluxian_main_ul">
                <li class="laiyuanluxian_main_ul_li1"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_03.png" alt="来院路线" style="margin-top:10px;"/><br/>来院路线</li>
                <li class="laiyuanluxian_main_ul_li2">北京市朝阳区三里屯SOHO五号五楼</li>
                <li class="laiyuanluxian_main_ul_li3"><a href="#">点击查看详情</a></li>
                <li class="laiyuanluxian_main_ul_li4"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/jj_03.jpg" alt="400-888-6667"/>&nbsp;&nbsp;400-888-6667</li>
                <li class="laiyuanluxian_main_ul_li5"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/kk_03.jpg" alt="在线咨询"/><b>在线咨询<span>CONSULTING</span></b></a></li>
                <p class="laiyuanluxian_main_ul_p"><b>扫描二维码<br />发送地址</b><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" /></p>
            </ul>
            <ul class="laiyuanluxian_main_ul">
                <li class="laiyuanluxian_main_ul_li1"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_03.png" alt="来院路线" style="margin-top:10px;"/><br/>来院路线</li>
                <li class="laiyuanluxian_main_ul_li2">上海市黄浦区斜土东路291号</li>
                <li class="laiyuanluxian_main_ul_li3"><a href="#">点击查看详情</a></li>
                <li class="laiyuanluxian_main_ul_li4"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/jj_03.jpg" alt="400-888-6667"/>&nbsp;&nbsp;400-888-6667</li>
                <li class="laiyuanluxian_main_ul_li5"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/kk_03.jpg" alt="在线咨询"/><b>在线咨询<span>CONSULTING</span></b></a></li>
                <p class="laiyuanluxian_main_ul_p"><b>扫描二维码<br />发送地址</b><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" /></p>
            </ul>
            <ul class="laiyuanluxian_main_ul">
                <li class="laiyuanluxian_main_ul_li1"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_03.png" alt="来院路线" style="margin-top:10px;"/><br/>来院路线</li>
                <li class="laiyuanluxian_main_ul_li2">广州市天河区黄埔大道中141号方豪酒店二楼</li>
                <li class="laiyuanluxian_main_ul_li3"><a href="#">点击查看详情</a></li>
                <li class="laiyuanluxian_main_ul_li4"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/jj_03.jpg" alt="400-888-6667"/>&nbsp;&nbsp;400-888-6667</li>
                <li class="laiyuanluxian_main_ul_li5"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/kk_03.jpg" alt="在线咨询"/><b>在线咨询<span>CONSULTING</span></b></a></li>
                <p class="laiyuanluxian_main_ul_p"><b>扫描二维码<br />发送地址</b><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" /></p>
            </ul>
            <ul class="laiyuanluxian_main_ul">
                <li class="laiyuanluxian_main_ul_li1"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_03.png" alt="来院路线" style="margin-top:10px;"/><br/>来院路线</li>
                <li class="laiyuanluxian_main_ul_li2">深圳市福田区深南大道6007号安徽大厦四楼408</li>
                <li class="laiyuanluxian_main_ul_li3"><a href="#">点击查看详情</a></li>
                <li class="laiyuanluxian_main_ul_li4"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/jj_03.jpg" alt="400-888-6667"/>&nbsp;&nbsp;400-888-6667</li>
                <li class="laiyuanluxian_main_ul_li5"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/kk_03.jpg" alt="在线咨询"/><b>在线咨询<span>CONSULTING</span></b></a></li>
                <p class="laiyuanluxian_main_ul_p"><b>扫描二维码<br />发送地址</b><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" /></p>
            </ul>
            <ul class="laiyuanluxian_main_ul">
                <li class="laiyuanluxian_main_ul_li1"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_03.png" alt="来院路线" style="margin-top:10px;"/><br/>来院路线</li>
                <li class="laiyuanluxian_main_ul_li2">成都武侯区武侯祠大街266号华达商城二楼（高升桥十字路口）</li>
                <li class="laiyuanluxian_main_ul_li3"><a href="#">点击查看详情</a></li>
                <li class="laiyuanluxian_main_ul_li4"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/jj_03.jpg" alt="400-888-6667"/>&nbsp;&nbsp;400-888-6667</li>
                <li class="laiyuanluxian_main_ul_li5"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/kk_03.jpg" alt="在线咨询"/><b>在线咨询<span>CONSULTING</span></b></a></li>
                <p class="laiyuanluxian_main_ul_p"><b>扫描二维码<br />发送地址</b><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" /></p>
            </ul>
            <ul class="laiyuanluxian_main_ul">
                <li class="laiyuanluxian_main_ul_li1"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_03.png" alt="来院路线" style="margin-top:10px;"/><br/>来院路线</li>
                <li class="laiyuanluxian_main_ul_li2">武汉市江汉区发展大道179号天梨豪园（帝逸花园）B栋1-2层</li>
                <li class="laiyuanluxian_main_ul_li3"><a href="#">点击查看详情</a></li>
                <li class="laiyuanluxian_main_ul_li4"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/jj_03.jpg" alt="400-888-6667"/>&nbsp;&nbsp;400-888-6667</li>
                <li class="laiyuanluxian_main_ul_li5"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/kk_03.jpg" alt="在线咨询"/><b>在线咨询<span>CONSULTING</span></b></a></li>
                <p class="laiyuanluxian_main_ul_p"><b>扫描二维码<br />发送地址</b><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" /></p>
            </ul>
            <ul class="laiyuanluxian_main_ul">
                <li class="laiyuanluxian_main_ul_li1"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_03.png" alt="来院路线" style="margin-top:10px;"/><br/>来院路线</li>
                <li class="laiyuanluxian_main_ul_li2">沈阳市铁西区云峰北街34—1号5-6号门</li>
                <li class="laiyuanluxian_main_ul_li3"><a href="#">点击查看详情</a></li>
                <li class="laiyuanluxian_main_ul_li4"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/jj_03.jpg" alt="400-888-6667"/>&nbsp;&nbsp;400-888-6667</li>
                <li class="laiyuanluxian_main_ul_li5"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/kk_03.jpg" alt="在线咨询"/><b>在线咨询<span>CONSULTING</span></b></a></li>
                <p class="laiyuanluxian_main_ul_p"><b>扫描二维码<br />发送地址</b><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" /></p>
            </ul>
        </div>
    </div>

    <script>
        // 列表页左侧共同底部内容 雍禾案例
        hm.app.toRun4();

        // 列表页左侧共同底部内容 来院路线
        laiyuanluxian();

    </script>