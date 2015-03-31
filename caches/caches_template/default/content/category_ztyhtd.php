<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","headbody"); ?>
<?php include template("content","header_content"); ?>
<!-- 通栏幻灯大banner -->
<div id="slideBox" class="slideBox_yh">
    <div class="bd">
        <ul>
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=29"></script></div></li>
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
<div class="ztyhtd_cont">
    <div id="ztyhtd_contOne" class="ztyhtd_conOne">
        <div class="ztyhtd_head">
            <h2><div class="headdiv1"></div>雍禾团队•成就完美<div class="headdiv2"></div></h2>
            <p class="headp1">makes perfect hair transplant effect</p>
            <p class="headp2">
                目前，雍禾植发的专家团，由15名主任级植发医师，5名药理学博士，总共20余名专家组成。其中，他们在雍禾植发技术研究院和雍禾植发毛囊干细胞实验室两处技术研发基地，从事科研工作。雍禾植发每个分院的植发专家，除了日常的植发手术外，也参与技术研发工作，真正的做到理论与临床结合。此外，在雍禾植发，只有具备一千名以上成功植发案例后，植发专家及其医护团队，才能被选派到各个分院，以先进技术和丰富经验，为每一位脱发患者种植完美效果。
            </p>
        </div>
        <div id="ztyhtd_Onediv" class="ztyhtd_Onediv">
            <img src="/statics/images/zhifa_cn_images/ffef_12.jpg" alt="上一个" width="12" height="23" class="Onedivprev" />
            <img src="/statics/images/zhifa_cn_images/ffef_15.jpg" alt="上一个" width="12" height="23" class="Onedivnext" />
            <div id="ztyhtd_Onediv2" class="ztyhtd_Onediv2">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d46af214e8041661ef647114d0b119ac&action=lists&catid=4&order=updatetime+DESC&num=7&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1',)).'d46af214e8041661ef647114d0b119ac');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'7',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img width="100" height="125" src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" /></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div id="ztyhtd_Onediv3" class="ztyhtd_Onediv3">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d46af214e8041661ef647114d0b119ac&action=lists&catid=4&order=updatetime+DESC&num=7&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1',)).'d46af214e8041661ef647114d0b119ac');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'7',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $sfsd=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="Onediv3_left" <?php if($sfsd==0) { ?> style="display:block;" <?php } ?>>
            <p class="Onediv3leftp"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="188" height="273" alt="<?php echo $r['title'];?>" /></a></p>
            <p class="Onediv3leftp1">
                <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank" class="Onediv3leftp1a1">
                    <?php echo str_cut($r[title],15,'');?>
                    <span class="Onediv3leftp1span1"><?php echo str_cut($r[zhicheng],12,'');?></span>
                    <span class="Onediv3leftp1span2">Senior Expert</span>
                </a>
                <a href="#" title="在线咨询" class="Onediv3leftp1a2">在线咨询</a>
                <a href="#" title="立即预约" class="Onediv3leftp1a3">立即预约</a>
            </p>
            <p class="Onediv3leftp2">★ <?php echo str_cut($r[rongyu1],60,'…');?></p>
            <p class="Onediv3leftp3">★ <?php echo str_cut($r[rongyu2],60,'…');?></p>
            <p class="Onediv3leftp4">★ <?php echo str_cut($r[rongyu3],60,'…');?></p>
            <p class="Onediv3leftp5">★ <?php echo str_cut($r[rongyu4],60,'…');?></p>
            <p class="Onediv3leftp6"><?php echo str_cut($r[shangchangxianmu],150,'…');?></p>
            <p class="Onediv3leftp7">专家介绍</p>
            <p class="Onediv3leftp8"><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[zhuanjiajieshao],430,'…');?></a></p>
        </div>
        <?php $sfsd+=1;?>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="Onediv3_right">
            <ul>
                <li><img src="/statics/images/zhifa_cn_images/ffef_24.jpg" width="155" height="166" /></li>
                <li><img src="/statics/images/zhifa_cn_images/ffef_26.jpg" width="221" height="176" /></li>
                <li style="margin-top:-8px;"><img src="/statics/images/zhifa_cn_images/ffef_28.jpg" width="155" height="137" /></li>
                <li><img src="/statics/images/zhifa_cn_images/ffef_30.jpg" width="221" height="215" /></li>
                <li style="margin-top:-83px;"><img src="/statics/images/zhifa_cn_images/ffef_40.jpg" width="155" height="142" /></li>
                <li><img src="/statics/images/zhifa_cn_images/ffef_43.jpg" width="221" height="58"  /></li>
            </ul>
        </div>
    </div>
</div>

<div id="ztyhtd_contTwo" class="ztyhtd_conTwo">
    <div class="ztyhtd_head">
        <h2><div class="headdiv1"></div>患者心声•感受锐变<div class="headdiv2"></div></h2>
        <p class="headp1">makes perfect hair transplant effect</p>
        <p class="headp2">
            这里是发友的心声，感受他们不同的植发曲折经历和神奇的植发效果。这里我们剪辑了一些雍禾植发发友的感言片段，你可以从中感触他们的心路历程，脱发的烦恼，选择植发机构的谨慎，植发后的期待与喜悦……我们也期待你不再为脱发而苦恼。
        </p>
    </div>
    <div class="contTwodiv">
        <a href="/hzxsjdal/" class="contTwodiva"><img src="/statics/images/zhifa_cn_images/ffef_47.jpg" width="213" height="182" /></a>
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fc91cf5c05a27957ae2573a5f0834ac3&action=lists&catid=98&order=updatetime+DESC&num=5&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'98','order'=>'updatetime DESC',)).'fc91cf5c05a27957ae2573a5f0834ac3');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'98','order'=>'updatetime DESC','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">• <?php echo str_cut($r[title],70,'');?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <br />
            <a href="/hzxsjdal/" style="color:#a04c02;padding-top:20px;font-size:13px;">更多案例>>></a>
        </ul>
        <img src="/statics/images/zhifa_cn_images/ffef_50.jpg" width="202" height="166" style="margin-top:10px;" />
    </div>
</div>

<div id="ztyhtd_contThree" class="ztyhtd_conThree">
    <div class="ztyhtd_head">
        <h2><div class="headdiv1"></div>学术探讨•专家荣誉<div class="headdiv2"></div></h2>
        <p class="headp1">makes perfect hair transplant effect</p>
        <p class="headp2">
            他们一如既往地坚持无痛、零风险、自然无痕的植发理念，帮助求美者获得最好的植发效果；始终关注全球顶尖植发医疗科技与理念，不断探索植发的先进手段，与国内外植发专家交流学习；持续进行科研攻关，多次在国内外重要学术会议上发表对植发界具有重大影响的论文，得到国内外专家的肯定与推崇，获奖实至名归……
        </p>
    </div>
    <ul class="ztyhtd_threeul">
        <li><img src="/statics/images/zhifa_cn_images/ffef_54.jpg" width="347" height="231" /></li>
        <li><img src="/statics/images/zhifa_cn_images/ffef_56.jpg" width="336" height="142" /></li>
        <li><img src="/statics/images/zhifa_cn_images/ffef_60.jpg" width="336" height="89" /></li>
        <li style="margin-top:-142px;"><img src="/statics/images/zhifa_cn_images/ffef_58.jpg" width="295" height="166" /></li>
        <li><img src="/statics/images/zhifa_cn_images/ffef_62.jpg" width="295" height="211" /></li>
        <li style="margin-top:-145px;"><img src="/statics/images/zhifa_cn_images/ffef_66.jpg" width="248" height="147" /></li>
        <li style="margin-top:-145px;margin-left:10px;"><img src="/statics/images/zhifa_cn_images/ffef_68.jpg" width="420" height="147" /></li>
    </ul>
    <ul class="ztyhtd_threeul2">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a417626cec2859b15efbe1eedd808927&action=lists&catid=99&order=updatetime+DESC&num=7&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'99','order'=>'updatetime DESC',)).'a417626cec2859b15efbe1eedd808927');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'99','order'=>'updatetime DESC','limit'=>'7',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" target="_blank">• <?php echo str_cut($r[title],70,'');?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <p class="ztyhtd_threep">
        2013年首届中韩国际整形美容大会在中国北京盛大召开吗，自始开起来中韩医疗美容学术交流和务实合作的宏渠。众所周知，韩国已经拥有足以引领世界整形与美容时尚理念、技术的医美产业。而中国拥有着世界范围内最大的整形美容市场机遇。伴随中韩两国合作的加深，中韩在医疗美容产业的合作已然成为必然趋势。
    </p>
</div>

<div id="ztyhtd_contFour" class="ztyhtd_conFour">
    <div class="ztyhtd_head">
        <h2><div class="headdiv1"></div>发友推荐精品文章<div class="headdiv2"></div></h2>
        <p class="headp1">makes perfect hair transplant effect</p>
        <p class="headp2">
            植发，一项新鲜事物，发友们在决定植发的过程中，从疑惑、寻找解答、确信无误、选择医院、植发专家……最后成功完成形象锐变，离不开对植发科普知识的不断深入的认识。以下是他们建议推荐的与植发相关的精品文章。
        </p>
    </div>
    <ul class="confourul1">
        <li><img src="/statics/images/zhifa_cn_images/ffef_74.jpg" width="107" height="160" alt="步骤一检查" />通过临床经验与专业检测仪器为植发分期并检测毛囊情况，以选择植发技术。</li>
        <li><img src="/statics/images/zhifa_cn_images/ffef_76.jpg" width="109" height="160" alt="步骤二设计" />通过与发友面诊，根据各人的气质、五官、形象设计发际线位置形状，为确保术后自然与美观。</li>
        <li><img src="/statics/images/zhifa_cn_images/ffef_78.jpg" width="107" height="160" alt="步骤三取发" />通过FUE技术取发，单根取发避免了疼痛，也让疤痕变得微乎其微。</li>
        <li><img src="/statics/images/zhifa_cn_images/ffef_80.jpg" width="108" height="160" alt="步骤四分离" />在高倍显微镜下通过技术进行分离，保证了毛囊的完整和成活率。</li>
        <li><img src="/statics/images/zhifa_cn_images/ffef_82.jpg" width="109" height="160" alt="步骤五种植" />通过“显微分离单体毛囊培植再生术”种植到脱发区，保证大限度的有效利用毛囊。</li>
        <li><img src="/statics/images/zhifa_cn_images/ffef_84.jpg" width="108" height="160" alt="步骤六术后" />术后根据个人情况不同，会为发友定制个性化的维养方案，定期回访，确保每根毛发都能健康的生长。</li>
    </ul>
    <div class="confourdiv">
        <div class="content_seven_main_one_main_rightul">
            <p>发友推荐精品文章</p>
            <ul style="margin-right:20px;margin-top:0px;">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=04284409a0b8b5448f1c81d5a5c2ab0e&action=lists&catid=51&order=updatetime+DESC&num=12&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'51','order'=>'updatetime DESC',)).'04284409a0b8b5448f1c81d5a5c2ab0e');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'51','order'=>'updatetime DESC','limit'=>'12',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],40,' ...');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
</div>

</div>

<script>
    hm.app.toRun9();
    ztyhtd_Onediv3();
</script>
<?php include template("content","footer"); ?>