<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- 主页内容部分 -->
<div id="content" class="content">
<!-- 主页内容第一部分 -->
<div id="content_one" class="content_one">
    <!-- 内容幻灯片 -->
    <div class="content_one_div">
        <div id="content_one_ul_main" class="content_one_ul_main">
            <ul id="content_one_ul_main_ul" class="content_one_ul_main_ul">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=829f64ea13dc9badc4fbbde7e4dc52c9&action=position&posid=18&order=listorder+DESC&num=8&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'18','order'=>'listorder DESC',)).'829f64ea13dc9badc4fbbde7e4dc52c9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $bms=0;?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li <?php if($bms==0) { ?> class="content_one_ul_main_ul_activeli" <?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],335,335);?>" alt="<?php echo $r['title'];?>"/></a></li>
                <?php $bms+=1;?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <div class="content_one_ul_main_pre" id="content_one_ul_main_pre"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_03.png" alt="上一页"/></div>
            <div class="content_one_ul_main_next" id="content_one_ul_main_next"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_05.png" alt="下一页"/></div>
        </div>
        <ul id="content_one_ul" class="content_one_ul">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=829f64ea13dc9badc4fbbde7e4dc52c9&action=position&posid=18&order=listorder+DESC&num=8&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'18','order'=>'listorder DESC',)).'829f64ea13dc9badc4fbbde7e4dc52c9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $bmsa=0;?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li <?php if($bmsa==0) { ?> class="content_one_ul_activeli" <?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
            <?php $bmsa+=1;?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>


    <!-- 内容新闻推荐列表 -->
    <div class="content_one_ul2_div">
        <ul id="content_one_ul2" class="content_one_ul2">
            <li class="content_one_ul2_activeli"><a href="/zxbd/">雍禾新闻</a></li>
            <li><a href="/rdht/">热点话题</a></li>
            <li><a href="/fygz/">发友关注</a></li>
        </ul>

        <div id="content_one_ul2_main" class="content_one_ul2_main">
            <ul id="content_one_ul2_main_ul11" class="content_one_ul2_main_ul">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=96fbc5388a3ae5dc59d9de3e8c8181ac&action=lists&catid=6&order=listorder+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'6','order'=>'listorder DESC',)).'96fbc5388a3ae5dc59d9de3e8c8181ac');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','order'=>'listorder DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li <?php if($numbs==0) { ?> class="content_one_ul2_main_ul_activeli" <?php } ?>>
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                                <h3><?php echo str_cut($r[title],65,'…');?></h3>
                                <p><?php echo str_cut($r[description],200,'…');?><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" style="color:#ff6820;">【...详细】</a></p>
                            </a>
                        </li>
                    <?php $numbs=$numbs+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>

            <ul class="content_one_ul2_main_ul" style="display:none;">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=99ec51b52e82b676544b76593bc6330e&action=lists&catid=49&order=listorder+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'49','order'=>'listorder DESC',)).'99ec51b52e82b676544b76593bc6330e');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'49','order'=>'listorder DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li <?php if($numbs==0) { ?> class="content_one_ul2_main_ul_activeli" <?php } ?>>
                        <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                            <h3><?php echo str_cut($r[title],65,'…');?></h3>
                            <p><?php echo str_cut($r[description],200,'…');?><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" style="color:#ff6820;">【...详细】</a></p>
                        </a>
                        </li>
                    <?php $numbs=$numbs+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>

            <ul class="content_one_ul2_main_ul" style="display:none;">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9a03b81db809b3a9129ef0c26fbc9ad9&action=lists&catid=50&order=listorder+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'50','order'=>'listorder DESC',)).'9a03b81db809b3a9129ef0c26fbc9ad9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'50','order'=>'listorder DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li <?php if($numbs==0) { ?> class="content_one_ul2_main_ul_activeli" <?php } ?>>
                        <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                            <h3><?php echo str_cut($r[title],65,'…');?></h3>
                            <p><?php echo str_cut($r[description],200,'…');?><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>" style="color:#ff6820;">【...详细】</a></p>
                        </a>
                        </li>
                    <?php $numbs=$numbs+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <!-- 内容新闻推荐列表中的广告 -->
            <div class="banner_nav">
                <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=17"></script>
            </div>
        </div>
    </div>
    <!-- 内容新闻右侧  -->
    <p class="content_one_right_p">业界公认的雍禾成就</p>
    <div id="content_one_right" class="content_one_right">
        <div class="content_one_right_div">
            <ul id="content_one_right_ul" class="content_one_right_ul">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=41f1ecf4036c0d46b27e653a649dfa4b&action=position&posid=22&order=listorder+DESC&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'22','order'=>'listorder DESC',)).'41f1ecf4036c0d46b27e653a649dfa4b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'listorder DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],200,120);?>" alt="<?php echo $r['title'];?>"/><h3 style="line-height:30px;color:#333;font-weight:normal;"><?php echo str_cut($r[title],35,'');?></h3></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
    <img src="<?php echo IMG_PATH;?>zhifa_cn_images/k_03.png" id="content_one_right_ul_next" style="cursor:pointer;position:relative;left:0px;top:10px;z-index:200;"/>

    <!-- 主页通栏广告 -->
    <div class="content_one_nav">
        <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=18"></script>
    </div>
</div>
<!-- 主页内容第二部分 -->
<div id="content_two" class="content_two">
    <ul id="content_two_ul" class="content_two_ul">
        <li class="content_two_ul_activeli">前沿植发技术</li>
        <li>独特技术优势</li>
        <li>权威学者评说</li>
        <li>权威组织认证</li>
        <li>承诺签约治疗</li>
        <li>雍禾植发过程</li>
        <li>领先技术设备</li>
    </ul>
    <div class="content_two_ul_main">
        <div class="content_two_ul_main_div content_two_ul_main_1">
            <p class="classp1">植发手术是一种新鲜事物，很多人以为，脱发的解决办法就是吃药、抹药......如果毛囊已萎缩死亡，此时吃药抹药等是没有任何作用的，唯有植发方法是解决之道，那植发是怎么回事呢？</p>
            <p class="classp2">植发手术的原理</p>
            <p class="classp3">
                植发是通过外科手术方式，从患者头部后枕处取下部分健康的毛囊组织（通常每侧移植40-50根即可），用显微镜技术将健康的毛囊和毛胚分离，之后放到低温营养液培养，再按一定的规律将培养好的毛囊种植到需要植发的部位。
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;这些移植后的毛发可保持原有的生长特性，继续在新部位生长，从而达到补充毛发数量和修改局部毛发分布形态的目的，从而达到美观的效果。通常手术种植的植发可以保持终身，故植发术脱落唯一而彻底的治疗方法。
            </p>
            <p class="classp4"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" alt="在线咨询"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" alt="网络预约"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_03.png" style="margin-left:20px;" /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_05.png" style="margin-left:20px;" /></a></p>
            <p class="classp5"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/sd_03.jpg" /></p>
            <p class="classp6">FUE-APL2.0无痕植发技术</p>
            <p class="classp7">
                FUE-APL2.0无痕植发技术，是继FUT、FUE后，第三个被国际植发业认可的植发技术。拥有2项毛囊干细胞培养及激活等专利技术，解决大面积脱发患者毛囊稀缺的问题；采用自主研发的雍禾APL2.0探头，其精密度更加适合中国人的毛囊直径，避免毛囊损伤；所使用的植发手术器械均采用自主研发的一次性器械，避免医源性交叉感染。
                雍禾植发获得国际标准化组织ISO9001；2008的权威认证。<br />
                2010年。国际ISO组织抽样雍禾植发1257例作评估调查；男性毛发移植手术743例（其中胡须种植75例，鬓角种植59例，加密移植129例）；女性毛发移植手术514例（其中美人尖74例，睫毛种植116例，眉毛种植98例），均获得满意疗效。
            </p>
            <p class="classp8">
                <dl class="classp8dl">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2ea40ccb37865fb1ba35c5316f150166&action=lists&catid=70&order=listorder+DESC&num=3&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'70','order'=>'listorder DESC','moreinfo'=>'1',)).'2ea40ccb37865fb1ba35c5316f150166');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'70','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                        <?php $nums=0;?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <dd><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"  <?php if($nums==0) { ?> class="atcivedd" <?php } ?>><?php echo str_cut($r[title],35,'...');?></a></dd>
                        <?php $nums=$nums+1;?>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </dl>
                <dl class="classp8dl2">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=643a5163a9519a3cc1b8b5a43762d770&action=lists&catid=70&order=listorder+ASC&num=3&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'70','order'=>'listorder ASC','moreinfo'=>'1',)).'643a5163a9519a3cc1b8b5a43762d770');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'70','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                        <?php $nums=0;?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <dd><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"  <?php if($nums==0) { ?> class="atcivedd" <?php } ?>><?php echo str_cut($r[title],35,'...');?></a></dd>
                        <?php $nums=$nums+1;?>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </dl>
            </p>
        </div>
        <div class="content_two_ul_main_div content_two_ul_main_2">
            <div class="content_two_ul_main_2_left">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/af_06.jpg" />
                <p class="class2p1">十几年的成功临床案例，无一例投诉，摒弃传统手术的缺陷，术后效果满意度VI级。毛囊侵害性最小，出血更少，恢复速度更快，单次可植发5000单位。手术成功率达到100%，成活率达到98%，有效保证种植效果，永不脱落。</p>
                <p class="class2p2"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" alt="在线咨询"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" alt="网络预约"/></a></p>
            </div>
            <div class="content_two_ul_main_2_middle">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/af_03.jpg" />
                <dl class="classdl">
                    <dt>雍禾植发技术亮点</dt>
                    <dd>1、国际认证植发单位</dd>
                    <dd>2、雍禾植发专利技术</dd>
                    <dd>3、国际尖端植发设备</dd>
                    <dd>4、自主研发植发手术器械</dd>
                    <dd>5、行业质量标准体系</dd>
                </dl>
            </div>
            <div class="content_two_ul_main_2_right">
                <p class="class2p3">
                    <h3>1、安全微创 无痛无痕</h3>
                    <p>摒弃传统手术缺陷，无需后枕部切取皮条，不开刀，采用局部浸润麻醉，安全无痛；直接提取毛囊，术后供毛囊区和手术移植区无疤痕，避免传统PUNCH、MINI-MIC技术、FUE技术术后有疤痕，效果不自然的弊端。</p>
                </p>
                <p class="class2p3">
                    <h3>2、独特的雍禾植发APL2.0探头，不损伤毛囊</h3>
                    <p>采用精密度最适合中国人毛囊直径的雍禾APL2.0探头，微动力提取毛囊，避免了传统手术人工提取造成的毛囊损伤，提升了毛囊的成活率，取发速度大约比传统的FUE提高3到5倍。</p>
                </p>
                <p class="class2p3">
                    <h3>3、种植效果自然疏密有致</h3>
                    <p>相比过去切取皮瓣移植毛发，无痕植发能够按照毛发的正常生长方向和分部单个种植毛囊，效果更自然，种植的头发将永久不脱落，比传统手术效果更浓密，满意度100%。</p>
                </p>
                <p class="class2p3">
                    <h3>4、融合面部美学设计协调面部轮廓</h3>
                    <p>根据中国人的面部美学特征设计，融入面部轮廓理念，根据个人的头型，脸型，气质和年龄等特点的设计发际线，修复改变脸型形成“三庭五眼”，可任意梳理发型，实现每个人的完美蜕变。</p>
                </p>
            </div>
        </div>
        <div class="content_two_ul_main_div content_two_ul_main_3">
            <div class="content_two_ul_main_3_left">
                <h3>植发界权威学者评说</h3>
                <p class="class3p1">来自美国约翰·霍普金斯医院的代表希望引进我院的FUE-APL2.0无痕植发技术，解决大量在美华裔的脱发问题。</p>
                <p class="class3p2">美国宾夕法尼亚大学的植发专家George·Cotsarelis博士指出：FUE-APL2.0无痕植发技术是目前全球植发界最先进的植发技术之一，是继FUT、FUE后，第三个被国际植发行业认可的植发技术。</p>
                <p class="class3p3">美国哥伦比亚大学医疗中心（CUMC）An-gela·Christiano教授在参加本次学术会议后在《自然医学》杂志上撰文指出：FUE-APL2.0无痕植发技术中运用毛囊干细胞技术，给严重脱发患者带来新希望。</p>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/fe_07.jpg" style="top:110px;left:10px;" />
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/fe_10.jpg" style="top:120px;left:120px;"/>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/fe_24.jpg" style="top:270px;left:40px;"/>
            </div>
            <div class="content_two_ul_main_3_middle">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aee99a70530a955044519874fa8b29fa&action=lists&catid=71&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'71','order'=>'listorder DESC','moreinfo'=>'1',)).'aee99a70530a955044519874fa8b29fa');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'71','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
                            <img src="<?php echo $r['thumb'];?>" style="padding:20px 0;width:336px;height:112px;" />
                            <h3><?php echo str_cut($r[title],70,'...');?></h3>
                        </a>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <p class="class3p4">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=602f12d9e8cfeb8faeb3fe7164aae32c&action=lists&catid=71&order=listorder+DESC&num=3&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'71','order'=>'listorder DESC','moreinfo'=>'1',)).'602f12d9e8cfeb8faeb3fe7164aae32c');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'71','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" width="111" height="77" /></a>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </p>
                <dl class="classdl">
                    <dt><a href="/qwxzps/">雍禾植发应邀参加相关权威学术会议（更多）</a></dt>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=602f12d9e8cfeb8faeb3fe7164aae32c&action=lists&catid=71&order=listorder+DESC&num=3&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'71','order'=>'listorder DESC','moreinfo'=>'1',)).'602f12d9e8cfeb8faeb3fe7164aae32c');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'71','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <dd><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],70,'...');?></a></dd>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </dl>
            </div>
            <div class="content_two_ul_main_3_right">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aee99a70530a955044519874fa8b29fa&action=lists&catid=71&order=listorder+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'71','order'=>'listorder DESC','moreinfo'=>'1',)).'aee99a70530a955044519874fa8b29fa');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'71','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <p class="class3p5"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[description],970,'...');?></a></p>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="content_two_ul_main_div content_two_ul_main_4">
            <div class="content_two_ul_main_4_left">
                <h3>雍禾植发多项新技术获得众多权威组织认证</h3>
                <p class="class4p1">
                    2010年10月，雍禾植发技术元救援获得国际标准化组织ISO9001:2008权威认证的植发技术。
                    2011年，雍禾植发技术研究院成立了毛囊干细胞实验室。经过多中心协作联合研发，成功研发出2项植发新技术，并通过了中华人民共和国国家知识产权局审核颁布证书。
                    2010年12月30日，中央电视台及其他权威媒体对雍禾植发发布的“行业质量标准体系”进行系列跟踪报道。该标准高于现行植发行业国家的质量标准。
                </p>
                <p class="class4p2"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/res_06.jpg" /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/re_08.jpg" /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/re_10.jpg" /></p>
                <p class="class4p3"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" alt="在线咨询"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" alt="网络预约"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_03.png" style="margin-left:20px;" /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_05.png" style="margin-left:20px;" /></a></p>
            </div>
            <div class="content_two_ul_main_4_right" id="content_two_ul_main_4_right">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/rea_03.jpg" id="content_two_ul_main_4_right_prev" class="content_two_ul_main_4_right_prev" />
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/rea_05.jpg" id="content_two_ul_main_4_right_next" class="content_two_ul_main_4_right_next" />
                <div id="content_two_ul_main_4_right_huandeng" class="content_two_ul_main_4_right_huandeng">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a2f8f6306939ac99bf36e719c524a896&action=lists&catid=72&order=listorder+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'72','order'=>'listorder DESC','moreinfo'=>'1',)).'a2f8f6306939ac99bf36e719c524a896');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'72','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" width="390" height="227" /></a></li>
                            <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
                <ul class="content_two_ul_main_4_right_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a2f8f6306939ac99bf36e719c524a896&action=lists&catid=72&order=listorder+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'72','order'=>'listorder DESC','moreinfo'=>'1',)).'a2f8f6306939ac99bf36e719c524a896');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'72','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],50,'...');?></a></li>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div class="content_two_ul_main_div content_two_ul_main_5">
            <div id="content_two_ul_main_5_left" class="content_two_ul_main_5_left">
                <h3>权威媒体透明化监督</h3>
                <ul class="content_two_ul_main_5_left_ul">
                    <li class="content_two_ul_main_5_left_ul_activeli">
                        <p class="main_5_left_ul_p"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_09.jpg" />价格公开透明</p>
                        <div class="content_two_ul_main_5_left_ul_div">
                            <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_25.jpg" />
                            <div class="content_two_ul_main_5_left_ul_div2">
                                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_28.jpg" />
                                <p class="main_5_left_ul_p2">雍禾植发做为专业医疗机构承诺患者就诊除取植发手术费用和检测、材料费以外，绝不做其他任何误导患者收费项目或服务。</p>
                                <ul class="left_ul_div2ul">
                                    <li>血液检测费：共150元/人</li>
                                    <li>手术材料费：共300元/人</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p class="main_5_left_ul_p"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_13.jpg" />手术过程透明化操作</p>
                        <div class="content_two_ul_main_5_left_ul_div">
                            <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_26.jpg" />
                            <div class="content_two_ul_main_5_left_ul_div2">
                                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_28.jpg" />
                                <p class="main_5_left_ul_p2">发友在植发手术前可指定医护人员为其手术，手术全程透明化操作，决不出现临时或中途更换医生的现象，最大限度的保证术后效果。</p>
                                <ul class="left_ul_div2ul">
                                    <li>血液检测费：共150元/人</li>
                                    <li>手术材料费：共300元/人</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p class="main_5_left_ul_p"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_15.jpg" />毛囊数量公开透明</p>
                        <div class="content_two_ul_main_5_left_ul_div">
                            <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_27.jpg" />
                            <div class="content_two_ul_main_5_left_ul_div2">
                                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_28.jpg" />
                                <p class="main_5_left_ul_p2">雍禾植发专注毛发移植十余年，因为专注，所以专业，作为专业的毛发种植机构，手术期间提取的毛囊数量可由患者当场数，决不谎报数量，从中牟利。</p>
                                <ul class="left_ul_div2ul">
                                    <li>血液检测费：共150元/人</li>
                                    <li>手术材料费：共300元/人</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p class="main_5_left_ul_p"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_20.jpg" />权威媒体透明化监督</p>
                        <div class="content_two_ul_main_5_left_ul_div">
                            <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_2s8.jpg" />
                            <div class="content_two_ul_main_5_left_ul_div2">
                                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_28.jpg"/>
                                <p class="main_5_left_ul_p2">为了将 “透明医疗”的理念做到最好，雍禾植发主动接受权威媒体和社会舆论的双重监督，力争做到言行一致，最终惠及每一位手术的发友。</p>
                                <ul class="left_ul_div2ul">
                                    <li>血液检测费：共150元/人</li>
                                    <li>手术材料费：共300元/人</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content_two_ul_main_5_right">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_03.jpg" />
                <ul id="content_two_ul_main_5_right_ul" class="content_two_ul_main_5_right_ul">
                    <li><img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_31.jpg" /><p>全国联保协议</p></li>
                    <li style="background:#fbe7b6;"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_33.jpg" /><p>医师亲诊/手术协议</p></li>
                    <li><img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_35.jpg" /><p>术前术后收费协议</p></li>
                    <li style="background:#fbe7b6;"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_37.jpg" /><p>退还预约金协议</p></li>
                    <li><img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_39.jpg" /><p>毛囊成活率协议</p></li>
                </ul>
                <div class="content_two_ul_main_5_right_div" id="content_two_ul_main_5_right_div">
                    <p class="marin_5_right_divp">为方便术后患者就近复诊，凭此协议，术后患者可在雍禾植发任何一家分院享受到相同的术后服务。</p>
                    <p class="marin_5_right_divp"style="display:block;">为推行“透明医疗，签约植发”的服务理念，雍禾植发术前签订医师亲诊手术协议，保证植发手术全程监控、可视、公开，切实保障术后毛囊的成活率。</p>
                    <p class="marin_5_right_divp">为最大限度的保障患者权益，杜绝植发术前、术后向患者推销手术之外的收费产品或服务现象发生，特此签订术前术后收费协议，让患者清清楚楚手术，明明白白治疗。</p>
                    <p class="marin_5_right_divp">为保障发友在雍禾植发任意分院缴纳的手术预约金安全有效特签订此协议，若发友最终未选择雍禾植发进行手术，预约金将全额返还，决不以任何理由将预约金扣留。</p>
                    <p class="marin_5_right_divp">为保障植发效果，让术后患者有据可查，特签署此协议，保证患者在术后12个月内出现毛囊成活率低的问题可由雍禾植发免费修复或退还手术费用以及向行政管理机构投诉的权力。</p>
                </div>
                <a class="marin_5_right_diva" href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" /></a>
            </div>
        </div>
        <div class="content_two_ul_main_div content_two_ul_main_6">
            <ul>
                <li><img src="<?php echo IMG_PATH;?>zhifa_cn_images/rq_03.jpg" />
                    <h3>步骤一：检查</h3>
                    <p>通过毛囊检测仪确定脱发等级以及毛囊情况，选择合适的植发技术。</p>
                </li>
                <li><img src="<?php echo IMG_PATH;?>zhifa_cn_images/rq_05.jpg" />
                    <h3>步骤二：设计</h3>
                    <p>根据发友的气质、五官、形象及其需求设计出最佳的造型，确保术后的美观自然。</p>
                </li>
                <li><img src="<?php echo IMG_PATH;?>zhifa_cn_images/rq_07.jpg" />
                    <h3>步骤三：取发</h3>
                    <p>利用进口的提取设备进行单体毛囊提取，精准快速，种植头发毛囊存活高。</p>
                </li>
                <li><img src="<?php echo IMG_PATH;?>zhifa_cn_images/rq_09.jpg" />
                    <h3>步骤四：分离</h3>
                    <p>“通过显微分离术”进行毛囊在分离，可以最大限度的保证毛囊得到最高的利用，同时确保毛囊具有较高的存活。</p>
                </li>
                <li><img src="<?php echo IMG_PATH;?>zhifa_cn_images/rq_11.jpg" />
                    <h3>步骤五：种植</h3>
                    <p>根据预定的设计方案，按照一定的角度、深度、密度进行毛囊种植，保证毛囊存活率及术后自然及美观。</p>
                </li>
                <li><img src="<?php echo IMG_PATH;?>zhifa_cn_images/rq_13.jpg" />
                    <h3>步骤六：护理</h3>
                    <p>头发种植后会根据个人情况的不同，为每一位发友定制个性化的养护方案，定期回访，确保毛囊能够。</p>
                </li>
            </ul>
        </div>
        <div class="content_two_ul_main_div content_two_ul_main_7">
            <div class="content_two_ul_main_7_left">
                <h3>雍禾植发多项创新设备为无痕植发奠定基础</h3>
                <p class="content_two_ul_main_7_left_p">北京雍禾植发技术研究院中，从十几年前，率先从美国引进先进的植发设备，并将无痕植发技术及器械进行整体改良，积极自主研发出适合国内人群植发的医疗器械，推出了令植发界瞩目的植发器械设备。</p>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/yu_14.jpg" />
                <dl class="content_two_ul_main_7_left_dl">
                    <dt>雍植禾发领设先备</dt>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=61e47fe9b782d265d85a408e1ed5f590&action=lists&catid=73&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'73','order'=>'listorder DESC','moreinfo'=>'1',)).'61e47fe9b782d265d85a408e1ed5f590');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'73','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <dd><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],70,'...');?></a></dd>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </dl>
            </div>
            <div id="content_two_ul_main_7_right" class="content_two_ul_main_7_right">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/er_06.jpg" class="content_two_ul_main_7_right_prev" id="content_two_ul_main_7_right_prev" alt="上一张" />
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/yu_10.jpg" class="content_two_ul_main_7_right_next" id="content_two_ul_main_7_right_next" alt="下一张" />
                <div class="content_two_ul_main_7_right_div">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20e33182a05b83147ce6de01e16ce7ae&action=lists&catid=73&order=listorder+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'73','order'=>'listorder DESC','moreinfo'=>'1',)).'20e33182a05b83147ce6de01e16ce7ae');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'73','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" width="180" height="120" /></a></li>
                            <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
                <div id="content_two_ul_main_7_right_divmain_div">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20e33182a05b83147ce6de01e16ce7ae&action=lists&catid=73&order=listorder+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'73','order'=>'listorder DESC','moreinfo'=>'1',)).'20e33182a05b83147ce6de01e16ce7ae');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'73','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                        <?php $nds=0;?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <div <?php if($nds==0) { ?> style="display:block;" <?php } ?> class="content_two_ul_main_7_right_divmain">
                                <div class="right_divmain_img"><img src="<?php echo $r['thumb'];?>" width="290" height="232" alt="<?php echo str_cut($r[title],50,'...');?>"/></div>
                                <h3><?php echo str_cut($r[title],60,'...');?></h3>
                                <p><?php echo str_cut($r[description],820,'...');?></p>
                            </div>
                        <?php $nds+=1;?>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- 主页内容第三部分 -->
<div id="content_three" class="content_three">
    <div class="content_three_nav_top">
        <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=19"></script>
    </div>
    <div class="content_three_div">
        <div class="content_three_maindiv">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f70d03702b2d4620f1c9db9b9dbea1f8&action=lists&catid=4&order=updatetime+DESC&num=8&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1',)).'f70d03702b2d4620f1c9db9b9dbea1f8');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $nums=0;?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div class="content_three_main" <?php if($nums==0) { ?> style="display:inline-block;" <?php } ?>>
                        <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],240,290);?>" width="240" height="290"/></a>
                        <p class="content_three_main_p1"><b><?php echo str_cut($r[title],20,'…');?></b><?php echo str_cut($r[zhicheng],30,'…');?><a href="#">【咨询 | 预约】</a></p>
                        <ul class="content_three_main_ul">
                            <li><?php echo str_cut($r[rongyu1],60,'…');?></li>
                            <li><?php echo str_cut($r[rongyu2],60,'…');?></li>
                            <li><?php echo str_cut($r[rongyu3],60,'…');?></li>
                            <li><?php echo str_cut($r[rongyu4],60,'…');?></li>
                            <li><?php echo str_cut($r[rongyu5],60,'…');?></li>
                        </ul>
                        <p class="content_three_main_p2"><b>擅长项目</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[shangchangxianmu],280,'…');?></a></p>
                        <p class="content_three_main_p3"><b><br />专家介绍</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[zhuanjiajieshao],430,'…');?></a></p>
                    </div>
                <?php $nums=$nums+1;?>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="content_three_main_dldiv">
            <dl id="content_three_main_dl" class="content_three_main_dl">
                <dt>发友推荐雍禾植发专家团队</dt>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f70d03702b2d4620f1c9db9b9dbea1f8&action=lists&catid=4&order=updatetime+DESC&num=8&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1',)).'f70d03702b2d4620f1c9db9b9dbea1f8');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'4','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <dd><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],75,80);?>" alt="<?php echo $r['title'];?>"/><b><?php echo str_cut($r[title],20,'…');?></b></a></dd>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </dl>
            <p class="content_three_main_p4"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" /></a><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" /></a></p>
        </div>
    </div>
    <div class="content_three_nav_bottom">
        <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=20"></script>
    </div>
</div>
<!-- 主页内容第四部分 -->
<div id="content_four" class="content_four">
    <div class="content_four_div">
        <ul id="content_four_ul" class="content_four_ul">
            <li class="content_four_ul_activeli">头发种植</li>
            <li>眉毛种植</li>
            <li>发际线调整</li>
            <li>疤痕种植</li>
            <li>胡须种植</li>
            <li>睫毛种植</li>
            <li>鬓角种植</li>
            <li>美人尖种植</li>
        </ul>
        <div id="content_four_ul_main1" class="content_four_ul_main" style="display:block;">
            <div class="content_four_ul_main_m">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7f2f986b6a5631f7ec24ef97ef54d444&action=position&posid=31&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'31','order'=>'listorder DESC','moreinfo'=>'1',)).'7f2f986b6a5631f7ec24ef97ef54d444');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'31','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div <?php if($numbs==0) { ?> style="display:block;" <?php } ?> class="content_four_ul_main_left">
                        <div class="content_four_ul_main_left_div1">
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],440,250);?>" title="<?php echo $r['url'];?>" width="440" height="250" /></a>
                            <p class="content_four_ul_main_left_p1"><b>患者感言：</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p2"><a href="#">立即改变形象</a></p>
                        </div>
                        <div class="content_four_ul_main_left_div2">
                            <dl>
                                <dt><?php echo str_cut($r[title],30,'...');?></dt>
                                <dd>姓名：<b><?php echo str_cut($r[name],20,'...');?></b></dd>
                                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'...');?></b></dd>
                                <dd>年龄：<b><?php echo str_cut($r[age],20,'...');?></b></dd>
                                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'...');?></b></dd>
                                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'...');?></b></dd>
                                <dd>植发时间：<b><?php echo str_cut($r[zhifatime],20,'...');?></b></dd>
                                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],18,'...');?></b></dd>
                                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],18,'...');?></b></dd>
                            </dl>
                            <p class="content_four_ul_main_left_p3">他的故事</p>
                            <p class="content_four_ul_main_left_p4">患者感言：<a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p5"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_119.jpg"/></p>
                        </div>
                    </div>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <ul id="content_four_ul_main_ul1" class="content_four_ul_main_ul">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7f2f986b6a5631f7ec24ef97ef54d444&action=position&posid=31&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'31','order'=>'listorder DESC','moreinfo'=>'1',)).'7f2f986b6a5631f7ec24ef97ef54d444');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'31','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li <?php if($numbs==0) { ?> class="content_four_ul_main_ul_activeli" <?php } ?>>
                        <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                            <img class="content_four_ul_main_ul_activeli_img"  src="<?php echo $r['xiaotuoxiang'];?>" alt="<?php echo $r['title'];?>"/>
                            <p>
                                <b><?php echo str_cut($r[name],15,'...');?></b><?php echo str_cut($r[age],5,'...');?>岁
                            <p><?php echo str_cut($r[shiyongjishu],50,'...');?></p>
                            </p>
                        </a>
                        </li>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div id="content_four_ul_main2" class="content_four_ul_main">
            <div class="content_four_ul_main_m">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7e4229c0f8d49dc6d1dcc06fbdb383e6&action=position&posid=32&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'32','order'=>'listorder DESC','moreinfo'=>'1',)).'7e4229c0f8d49dc6d1dcc06fbdb383e6');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'32','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div <?php if($numbs==0) { ?> style="display:block;" <?php } ?> class="content_four_ul_main_left content_four_ul_main_left2">
                        <div class="content_four_ul_main_left_div1">
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],440,250);?>" title="<?php echo $r['title'];?>" width="440" height="250" /></a>
                            <p class="content_four_ul_main_left_p1"><b>患者感言：</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p2"><a href="#">立即改变形象</a></p>
                        </div>
                        <div class="content_four_ul_main_left_div2">
                            <dl>
                                <dt><?php echo str_cut($r[title],30,'...');?></dt>
                                <dd>姓名：<b><?php echo str_cut($r[name],20,'...');?></b></dd>
                                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'...');?></b></dd>
                                <dd>年龄：<b><?php echo str_cut($r[age],20,'...');?></b></dd>
                                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'...');?></b></dd>
                                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'...');?></b></dd>
                                <dd>植发时间：<b><?php echo str_cut($r[zhifatime],20,'...');?></b></dd>
                                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],18,'...');?></b></dd>
                                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],18,'...');?></b></dd>
                            </dl>
                            <p class="content_four_ul_main_left_p3">他的故事</p>
                            <p class="content_four_ul_main_left_p4">患者感言：<a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p5"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_119.jpg"/></p>
                        </div>
                    </div>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <ul id="content_four_ul_main_ul2" class="content_four_ul_main_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7e4229c0f8d49dc6d1dcc06fbdb383e6&action=position&posid=32&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'32','order'=>'listorder DESC','moreinfo'=>'1',)).'7e4229c0f8d49dc6d1dcc06fbdb383e6');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'32','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li <?php if($numbs==0) { ?> class="content_four_ul_main_ul_activeli" <?php } ?>>
                    <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                        <img class="content_four_ul_main_ul_activeli_img"  src="<?php echo $r['xiaotuoxiang'];?>" alt="<?php echo $r['title'];?>"/>
                        <p>
                            <b><?php echo str_cut($r[name],15,'...');?></b><?php echo str_cut($r[age],5,'...');?>岁
                        <p><?php echo str_cut($r[shiyongjishu],50,'...');?></p>
                        </p>
                    </a>
                    </li>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div id="content_four_ul_main3" class="content_four_ul_main">
            <div class="content_four_ul_main_m">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5f77b4e730108cdc405a0fc4bc4ca1e7&action=position&posid=33&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'33','order'=>'listorder DESC','moreinfo'=>'1',)).'5f77b4e730108cdc405a0fc4bc4ca1e7');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'33','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <div <?php if($numbs==0) { ?> style="display:block;" <?php } ?> class="content_four_ul_main_left content_four_ul_main_left3">
                            <div class="content_four_ul_main_left_div1">
                                <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],440,250);?>" title="<?php echo $r['title'];?>" width="440" height="250" /></a>
                                <p class="content_four_ul_main_left_p1"><b>患者感言：</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                                <p class="content_four_ul_main_left_p2"><a href="#">立即改变形象</a></p>
                            </div>
                            <div class="content_four_ul_main_left_div2">
                                <dl>
                                    <dt><?php echo str_cut($r[title],30,'...');?></dt>
                                    <dd>姓名：<b><?php echo str_cut($r[name],20,'...');?></b></dd>
                                    <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'...');?></b></dd>
                                    <dd>年龄：<b><?php echo str_cut($r[age],20,'...');?></b></dd>
                                    <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'...');?></b></dd>
                                    <dd>职业：<b><?php echo str_cut($r[zhiye],20,'...');?></b></dd>
                                    <dd>植发时间：<b><?php echo str_cut($r[zhifatime],20,'...');?></b></dd>
                                    <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],18,'...');?></b></dd>
                                    <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],18,'...');?></b></dd>
                                </dl>
                                <p class="content_four_ul_main_left_p3">他的故事</p>
                                <p class="content_four_ul_main_left_p4">患者感言：<a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                                <p class="content_four_ul_main_left_p5"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_119.jpg"/></p>
                            </div>
                        </div>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <ul id="content_four_ul_main_ul3" class="content_four_ul_main_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5f77b4e730108cdc405a0fc4bc4ca1e7&action=position&posid=33&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'33','order'=>'listorder DESC','moreinfo'=>'1',)).'5f77b4e730108cdc405a0fc4bc4ca1e7');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'33','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li <?php if($numbs==0) { ?> class="content_four_ul_main_ul_activeli" <?php } ?>>
                    <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                        <img class="content_four_ul_main_ul_activeli_img"  src="<?php echo $r['xiaotuoxiang'];?>" alt="<?php echo $r['title'];?>"/>
                        <p>
                            <b><?php echo str_cut($r[name],15,'...');?></b><?php echo str_cut($r[age],5,'...');?>岁
                        <p><?php echo str_cut($r[shiyongjishu],50,'...');?></p>
                        </p>
                    </a>
                    </li>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div id="content_four_ul_main4" class="content_four_ul_main">
            <div class="content_four_ul_main_m">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d8da3838061742aee8fa9e0ccd6fa49a&action=position&posid=34&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'34','order'=>'listorder DESC','moreinfo'=>'1',)).'d8da3838061742aee8fa9e0ccd6fa49a');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'34','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div <?php if($numbs==0) { ?> style="display:block;" <?php } ?> class="content_four_ul_main_left content_four_ul_main_left4">
                        <div class="content_four_ul_main_left_div1">
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],440,250);?>" title="<?php echo $r['title'];?>" width="440" height="250" /></a>
                            <p class="content_four_ul_main_left_p1"><b>患者感言：</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p2"><a href="#">立即改变形象</a></p>
                        </div>
                        <div class="content_four_ul_main_left_div2">
                            <dl>
                                <dt><?php echo str_cut($r[title],30,'...');?></dt>
                                <dd>姓名：<b><?php echo str_cut($r[name],20,'...');?></b></dd>
                                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'...');?></b></dd>
                                <dd>年龄：<b><?php echo str_cut($r[age],20,'...');?></b></dd>
                                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'...');?></b></dd>
                                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'...');?></b></dd>
                                <dd>植发时间：<b><?php echo str_cut($r[zhifatime],20,'...');?></b></dd>
                                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],18,'...');?></b></dd>
                                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],18,'...');?></b></dd>
                            </dl>
                            <p class="content_four_ul_main_left_p3">他的故事</p>
                            <p class="content_four_ul_main_left_p4">患者感言：<a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p5"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_119.jpg"/></p>
                        </div>
                    </div>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <ul id="content_four_ul_main_ul4" class="content_four_ul_main_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d8da3838061742aee8fa9e0ccd6fa49a&action=position&posid=34&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'34','order'=>'listorder DESC','moreinfo'=>'1',)).'d8da3838061742aee8fa9e0ccd6fa49a');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'34','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                        <?php $numbs=0;?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li <?php if($numbs==0) { ?> class="content_four_ul_main_ul_activeli" <?php } ?>>
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                                <img class="content_four_ul_main_ul_activeli_img"  src="<?php echo $r['xiaotuoxiang'];?>" alt="<?php echo $r['title'];?>"/>
                                <p>
                                    <b><?php echo str_cut($r[name],15,'...');?></b><?php echo str_cut($r[age],5,'...');?>岁
                                <p><?php echo str_cut($r[shiyongjishu],50,'...');?></p>
                                </p>
                            </a>
                            </li>
                        <?php $numbs=$nubms+1;?>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div id="content_four_ul_main5" class="content_four_ul_main">
            <div class="content_four_ul_main_m">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b948fd2f231af9c1e0cc73262e53f07e&action=position&posid=35&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'35','order'=>'listorder DESC','moreinfo'=>'1',)).'b948fd2f231af9c1e0cc73262e53f07e');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'35','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div <?php if($numbs==0) { ?> style="display:block;" <?php } ?> class="content_four_ul_main_left content_four_ul_main_left5">
                        <div class="content_four_ul_main_left_div1">
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],440,250);?>" title="<?php echo $r['title'];?>" width="440" height="250" /></a>
                            <p class="content_four_ul_main_left_p1"><b>患者感言：</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p2"><a href="#">立即改变形象</a></p>
                        </div>
                        <div class="content_four_ul_main_left_div2">
                            <dl>
                                <dt><?php echo str_cut($r[title],30,'...');?></dt>
                                <dd>姓名：<b><?php echo str_cut($r[name],20,'...');?></b></dd>
                                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'...');?></b></dd>
                                <dd>年龄：<b><?php echo str_cut($r[age],20,'...');?></b></dd>
                                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'...');?></b></dd>
                                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'...');?></b></dd>
                                <dd>植发时间：<b><?php echo str_cut($r[zhifatime],20,'...');?></b></dd>
                                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],18,'...');?></b></dd>
                                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],18,'...');?></b></dd>
                            </dl>
                            <p class="content_four_ul_main_left_p3">他的故事</p>
                            <p class="content_four_ul_main_left_p4">患者感言：<a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p5"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_119.jpg"/></p>
                        </div>
                    </div>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <ul id="content_four_ul_main_ul5" class="content_four_ul_main_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b948fd2f231af9c1e0cc73262e53f07e&action=position&posid=35&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'35','order'=>'listorder DESC','moreinfo'=>'1',)).'b948fd2f231af9c1e0cc73262e53f07e');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'35','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li <?php if($numbs==0) { ?> class="content_four_ul_main_ul_activeli" <?php } ?>>
                    <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                        <img class="content_four_ul_main_ul_activeli_img"  src="<?php echo $r['xiaotuoxiang'];?>" alt="<?php echo $r['title'];?>"/>
                        <p>
                            <b><?php echo str_cut($r[name],15,'...');?></b><?php echo str_cut($r[age],5,'...');?>岁
                        <p><?php echo str_cut($r[shiyongjishu],50,'...');?></p>
                        </p>
                    </a>
                    </li>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
           </div>
        </div>
        <div id="content_four_ul_main6" class="content_four_ul_main">
            <div class="content_four_ul_main_m">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=28a593bab0610a3ca03916906ceb1b19&action=position&posid=36&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'36','order'=>'listorder DESC','moreinfo'=>'1',)).'28a593bab0610a3ca03916906ceb1b19');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'36','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div <?php if($numbs==0) { ?> style="display:block;" <?php } ?> class="content_four_ul_main_left content_four_ul_main_left6">
                        <div class="content_four_ul_main_left_div1">
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],440,250);?>" title="<?php echo $r['title'];?>" width="440" height="250" /></a>
                            <p class="content_four_ul_main_left_p1"><b>患者感言：</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p2"><a href="#">立即改变形象</a></p>
                        </div>
                        <div class="content_four_ul_main_left_div2">
                            <dl>
                                <dt><?php echo str_cut($r[title],30,'...');?></dt>
                                <dd>姓名：<b><?php echo str_cut($r[name],20,'...');?></b></dd>
                                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'...');?></b></dd>
                                <dd>年龄：<b><?php echo str_cut($r[age],20,'...');?></b></dd>
                                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'...');?></b></dd>
                                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'...');?></b></dd>
                                <dd>植发时间：<b><?php echo str_cut($r[zhifatime],20,'...');?></b></dd>
                                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],18,'...');?></b></dd>
                                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],18,'...');?></b></dd>
                            </dl>
                            <p class="content_four_ul_main_left_p3">他的故事</p>
                            <p class="content_four_ul_main_left_p4">患者感言：<a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p5"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_119.jpg"/></p>
                        </div>
                    </div>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <ul id="content_four_ul_main_ul6" class="content_four_ul_main_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=28a593bab0610a3ca03916906ceb1b19&action=position&posid=36&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'36','order'=>'listorder DESC','moreinfo'=>'1',)).'28a593bab0610a3ca03916906ceb1b19');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'36','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li <?php if($numbs==0) { ?> class="content_four_ul_main_ul_activeli" <?php } ?>>
                    <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                        <img class="content_four_ul_main_ul_activeli_img"  src="<?php echo $r['xiaotuoxiang'];?>" alt="<?php echo $r['title'];?>"/>
                        <p>
                            <b><?php echo str_cut($r[name],15,'...');?></b><?php echo str_cut($r[age],5,'...');?>岁
                        <p><?php echo str_cut($r[shiyongjishu],50,'...');?></p>
                        </p>
                    </a>
                    </li>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div id="content_four_ul_main7" class="content_four_ul_main">
            <div class="content_four_ul_main_m">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4208012eceab17ae2f0640f104d7173a&action=position&posid=37&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'37','order'=>'listorder DESC','moreinfo'=>'1',)).'4208012eceab17ae2f0640f104d7173a');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div <?php if($numbs==0) { ?> style="display:block;" <?php } ?> class="content_four_ul_main_left content_four_ul_main_left7">
                        <div class="content_four_ul_main_left_div1">
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],440,250);?>" title="<?php echo $r['title'];?>" width="440" height="250" /></a>
                            <p class="content_four_ul_main_left_p1"><b>患者感言：</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p2"><a href="#">立即改变形象</a></p>
                        </div>
                        <div class="content_four_ul_main_left_div2">
                            <dl>
                                <dt><?php echo str_cut($r[title],30,'...');?></dt>
                                <dd>姓名：<b><?php echo str_cut($r[name],20,'...');?></b></dd>
                                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'...');?></b></dd>
                                <dd>年龄：<b><?php echo str_cut($r[age],20,'...');?></b></dd>
                                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'...');?></b></dd>
                                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'...');?></b></dd>
                                <dd>植发时间：<b><?php echo str_cut($r[zhifatime],20,'...');?></b></dd>
                                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],18,'...');?></b></dd>
                                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],18,'...');?></b></dd>
                            </dl>
                            <p class="content_four_ul_main_left_p3">他的故事</p>
                            <p class="content_four_ul_main_left_p4">患者感言：<a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p5"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_119.jpg"/></p>
                        </div>
                    </div>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <ul id="content_four_ul_main_ul7" class="content_four_ul_main_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4208012eceab17ae2f0640f104d7173a&action=position&posid=37&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'37','order'=>'listorder DESC','moreinfo'=>'1',)).'4208012eceab17ae2f0640f104d7173a');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li <?php if($numbs==0) { ?> class="content_four_ul_main_ul_activeli" <?php } ?>>
                    <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                        <img class="content_four_ul_main_ul_activeli_img"  src="<?php echo $r['xiaotuoxiang'];?>" alt="<?php echo $r['title'];?>"/>
                        <p>
                            <b><?php echo str_cut($r[name],15,'...');?></b><?php echo str_cut($r[age],5,'...');?>岁
                        <p><?php echo str_cut($r[shiyongjishu],50,'...');?></p>
                        </p>
                    </a>
                    </li>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div id="content_four_ul_main8" class="content_four_ul_main">
            <div class="content_four_ul_main_m">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=445be9ba512f0fc71266476305d2d6bf&action=position&posid=38&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'38','order'=>'listorder DESC','moreinfo'=>'1',)).'445be9ba512f0fc71266476305d2d6bf');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'38','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div <?php if($numbs==0) { ?> style="display:block;" <?php } ?> class="content_four_ul_main_left content_four_ul_main_left8">
                        <div class="content_four_ul_main_left_div1">
                            <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],440,250);?>" title="<?php echo $r['title'];?>" width="440" height="250" /></a>
                            <p class="content_four_ul_main_left_p1"><b>患者感言：</b><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p2"><a href="#">立即改变形象</a></p>
                        </div>
                        <div class="content_four_ul_main_left_div2">
                            <dl>
                                <dt><?php echo str_cut($r[title],30,'...');?></dt>
                                <dd>姓名：<b><?php echo str_cut($r[name],20,'...');?></b></dd>
                                <dd>实用技术：<b><?php echo str_cut($r[shiyongjishu],20,'...');?></b></dd>
                                <dd>年龄：<b><?php echo str_cut($r[age],20,'...');?></b></dd>
                                <dd>种植单位：<b><?php echo str_cut($r[zhongzhidanwei],20,'...');?></b></dd>
                                <dd>职业：<b><?php echo str_cut($r[zhiye],20,'...');?></b></dd>
                                <dd>植发时间：<b><?php echo str_cut($r[zhifatime],20,'...');?></b></dd>
                                <dd>脱发级别：<b><?php echo str_cut($r[tuofajibie],18,'...');?></b></dd>
                                <dd>植发专家：<b><?php echo str_cut($r[zhifazhuanjia],18,'...');?></b></dd>
                            </dl>
                            <p class="content_four_ul_main_left_p3">他的故事</p>
                            <p class="content_four_ul_main_left_p4">患者感言：<a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[huanzheganyan],220,'...');?></a></p>
                            <p class="content_four_ul_main_left_p5"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_119.jpg"/></p>
                        </div>
                    </div>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <ul id="content_four_ul_main_ul8" class="content_four_ul_main_ul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=445be9ba512f0fc71266476305d2d6bf&action=position&posid=38&order=listorder+DESC&num=5&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'38','order'=>'listorder DESC','moreinfo'=>'1',)).'445be9ba512f0fc71266476305d2d6bf');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'38','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $numbs=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li <?php if($numbs==0) { ?> class="content_four_ul_main_ul_activeli" <?php } ?>>
                    <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                        <img class="content_four_ul_main_ul_activeli_img"  src="<?php echo $r['xiaotuoxiang'];?>" alt="<?php echo $r['title'];?>"/>
                        <p>
                            <b><?php echo str_cut($r[name],15,'...');?></b><?php echo str_cut($r[age],5,'...');?>岁
                        <p><?php echo str_cut($r[shiyongjishu],50,'...');?></p>
                        </p>
                    </a>
                    </li>
                    <?php $numbs=$nubms+1;?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- 主页内容第五部分 -->
<div id="content_five" class="content_five">
    <div class="content_five_div" id="content_five_div">
        <img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_03.png" width="24" class="content_five_preivew" id="content_five_preivew" />
        <img src="<?php echo IMG_PATH;?>zhifa_cn_images/s_05.png" width="24" class="content_five_next" id="content_five_next" />
        <div class="content_five_main" id="content_five_main">
            <ul id="content_five_main_ul" class="content_five_main_ul">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3c71364535e0be1167d32c8a81361064&action=lists&catid=60&order=updatetime+DESC&num=10&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'60','order'=>'updatetime DESC','moreinfo'=>'1',)).'3c71364535e0be1167d32c8a81361064');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'60','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="220" /><p><?php echo str_cut($r[title],50,' ...');?></p></a></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
</div>

<!-- 主页内容第六部分 -->
<div id="content_six" class="content_six">
    <!-- 主页通栏广告 -->
    <div class="content_six_nav">
        <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=21"></script>
    </div>
</div>

<!-- 主页内容第七部分 -->
<div id="content_seven" class="content_seven">
<div id="content_seven_main_one" class="content_seven_main_one">
<ul id="content_seven_main_one_ulleft" class="content_seven_main_one_ulleft">
    <li class="content_seven_main_one_ulleft_activeli"><a title="#" href="#">头发种植</a></li>
    <li><a title="#" href="#">眉毛种植</a></li>
    <li><a title="#" href="#">发际线调整</a></li>
    <li><a title="#" href="#">疤痕植发</a></li>
    <li><a title="#" href="#">胡须种植</a></li>
    <li><a title="#" href="#">睫毛种植</a></li>
    <li><a title="#" href="#">鬓角种植</a></li>
    <li><a title="#" href="#">美人尖种植</a></li>
</ul>
<div style="display:block;" class="content_seven_main_one_ulleft_main">
    <div class="content_seven_main_one_ulleft_main_div0">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d7ae6e8d5326ffd7a869b0b5ef692fd1&action=lists&catid=9&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'9','order'=>'updatetime DESC','moreinfo'=>'1',)).'d7ae6e8d5326ffd7a869b0b5ef692fd1');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
                <h2><?php echo str_cut($r[title],50,' ...');?></h2>
                <p class="content_seven_main_one_ulleft_main_p1"><?php echo str_cut($r[description],180,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
            </a>
        <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <ul class="content_seven_main_one_ulleft_main_ul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=477e315c3b499a2b0f5b4152eb5620be&action=lists&catid=9&order=updatetime+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'9','order'=>'updatetime DESC','moreinfo'=>'1',)).'477e315c3b499a2b0f5b4152eb5620be');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="content_seven_main_one_ulleft_main_div">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d7ae6e8d5326ffd7a869b0b5ef692fd1&action=lists&catid=9&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'9','order'=>'updatetime DESC','moreinfo'=>'1',)).'d7ae6e8d5326ffd7a869b0b5ef692fd1');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
                    <img src="<?php echo $r['thumb'];?>" width="230" height="170" />
                    <b><?php echo str_cut($r[title],40,' ...');?></b>
                    <p class="content_seven_main_one_ulleft_main_p2"><?php echo str_cut($r[description],120,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
                </a>
                <p class="content_seven_main_one_ulleft_p">
                    <a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png"/></a>
                </p>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<div class="content_seven_main_one_ulleft_main">
    <div class="content_seven_main_one_ulleft_main_div0">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f6d2fab704b1c46bd709238dec1afdab&action=lists&catid=10&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'10','order'=>'updatetime DESC','moreinfo'=>'1',)).'f6d2fab704b1c46bd709238dec1afdab');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
        <h2><?php echo str_cut($r[title],50,' ...');?></h2>
        <p class="content_seven_main_one_ulleft_main_p1"><?php echo str_cut($r[description],180,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
    </a>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <ul class="content_seven_main_one_ulleft_main_ul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ca6590d7b5100d258b67dda01e7b9fe4&action=lists&catid=10&order=updatetime+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'10','order'=>'updatetime DESC','moreinfo'=>'1',)).'ca6590d7b5100d258b67dda01e7b9fe4');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="content_seven_main_one_ulleft_main_div">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f6d2fab704b1c46bd709238dec1afdab&action=lists&catid=10&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'10','order'=>'updatetime DESC','moreinfo'=>'1',)).'f6d2fab704b1c46bd709238dec1afdab');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <img src="<?php echo $r['thumb'];?>" width="230" height="170" />
            <b><?php echo str_cut($r[title],40,' ...');?></b>
            <p class="content_seven_main_one_ulleft_main_p2"><?php echo str_cut($r[description],120,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <p class="content_seven_main_one_ulleft_p">
            <a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png"/></a>
        </p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<div class="content_seven_main_one_ulleft_main">
    <div class="content_seven_main_one_ulleft_main_div0">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0dcbdca0222037ee455b1488787eda54&action=lists&catid=17&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'17','order'=>'updatetime DESC','moreinfo'=>'1',)).'0dcbdca0222037ee455b1488787eda54');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <h2><?php echo str_cut($r[title],50,' ...');?></h2>
            <p class="content_seven_main_one_ulleft_main_p1"><?php echo str_cut($r[description],180,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <ul class="content_seven_main_one_ulleft_main_ul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=472a9042935a9b048aefb77541c12c24&action=lists&catid=17&order=updatetime+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'17','order'=>'updatetime DESC','moreinfo'=>'1',)).'472a9042935a9b048aefb77541c12c24');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="content_seven_main_one_ulleft_main_div">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0dcbdca0222037ee455b1488787eda54&action=lists&catid=17&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'17','order'=>'updatetime DESC','moreinfo'=>'1',)).'0dcbdca0222037ee455b1488787eda54');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <img src="<?php echo $r['thumb'];?>" width="230" height="170" />
            <b><?php echo str_cut($r[title],40,' ...');?></b>
            <p class="content_seven_main_one_ulleft_main_p2"><?php echo str_cut($r[description],120,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <p class="content_seven_main_one_ulleft_p">
            <a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png"/></a>
        </p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<div class="content_seven_main_one_ulleft_main">
    <div class="content_seven_main_one_ulleft_main_div0">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1d20b07b6f408bfa3849dc0ff1c947a9&action=lists&catid=13&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'13','order'=>'updatetime DESC','moreinfo'=>'1',)).'1d20b07b6f408bfa3849dc0ff1c947a9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'13','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
        <h2><?php echo str_cut($r[title],50,' ...');?></h2>
        <p class="content_seven_main_one_ulleft_main_p1"><?php echo str_cut($r[description],180,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
    </a>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <ul class="content_seven_main_one_ulleft_main_ul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=63801b00dc2af2f56cd799662242cb5b&action=lists&catid=13&order=updatetime+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'13','order'=>'updatetime DESC','moreinfo'=>'1',)).'63801b00dc2af2f56cd799662242cb5b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'13','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="content_seven_main_one_ulleft_main_div">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1d20b07b6f408bfa3849dc0ff1c947a9&action=lists&catid=13&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'13','order'=>'updatetime DESC','moreinfo'=>'1',)).'1d20b07b6f408bfa3849dc0ff1c947a9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'13','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <img src="<?php echo $r['thumb'];?>" width="230" height="170" />
            <b><?php echo str_cut($r[title],40,' ...');?></b>
            <p class="content_seven_main_one_ulleft_main_p2"><?php echo str_cut($r[description],120,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <p class="content_seven_main_one_ulleft_p">
            <a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png"/></a>
        </p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<div class="content_seven_main_one_ulleft_main">
    <div class="content_seven_main_one_ulleft_main_div0">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=13343d906966b30a84c8d5bd296203a4&action=lists&catid=14&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'14','order'=>'updatetime DESC','moreinfo'=>'1',)).'13343d906966b30a84c8d5bd296203a4');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <h2><?php echo str_cut($r[title],50,' ...');?></h2>
            <p class="content_seven_main_one_ulleft_main_p1"><?php echo str_cut($r[description],180,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <ul class="content_seven_main_one_ulleft_main_ul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b20d327ad5d119994f8e9c941439ef8b&action=lists&catid=14&order=updatetime+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'14','order'=>'updatetime DESC','moreinfo'=>'1',)).'b20d327ad5d119994f8e9c941439ef8b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="content_seven_main_one_ulleft_main_div">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=13343d906966b30a84c8d5bd296203a4&action=lists&catid=14&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'14','order'=>'updatetime DESC','moreinfo'=>'1',)).'13343d906966b30a84c8d5bd296203a4');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <img src="<?php echo $r['thumb'];?>" width="230" height="170" />
            <b><?php echo str_cut($r[title],40,' ...');?></b>
            <p class="content_seven_main_one_ulleft_main_p2"><?php echo str_cut($r[description],120,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <p class="content_seven_main_one_ulleft_p">
            <a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png"/></a>
        </p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<div class="content_seven_main_one_ulleft_main">
    <div class="content_seven_main_one_ulleft_main_div0">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3179eb16ade3d1e056a373378daa971d&action=lists&catid=11&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'11','order'=>'updatetime DESC','moreinfo'=>'1',)).'3179eb16ade3d1e056a373378daa971d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <h2><?php echo str_cut($r[title],50,' ...');?></h2>
            <p class="content_seven_main_one_ulleft_main_p1"><?php echo str_cut($r[description],180,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <ul class="content_seven_main_one_ulleft_main_ul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=eb7e991bfc5f2eab8f7abfa5aead3013&action=lists&catid=11&order=updatetime+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'11','order'=>'updatetime DESC','moreinfo'=>'1',)).'eb7e991bfc5f2eab8f7abfa5aead3013');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="content_seven_main_one_ulleft_main_div">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3179eb16ade3d1e056a373378daa971d&action=lists&catid=11&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'11','order'=>'updatetime DESC','moreinfo'=>'1',)).'3179eb16ade3d1e056a373378daa971d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <img src="<?php echo $r['thumb'];?>" width="230" height="170" />
            <b><?php echo str_cut($r[title],40,' ...');?></b>
            <p class="content_seven_main_one_ulleft_main_p2"><?php echo str_cut($r[description],120,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <p class="content_seven_main_one_ulleft_p">
            <a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png"/></a>
        </p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<div class="content_seven_main_one_ulleft_main">
    <div class="content_seven_main_one_ulleft_main_div0">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79dc33b13aa4cfd5c8557dddeffe8332&action=lists&catid=15&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'15','order'=>'updatetime DESC','moreinfo'=>'1',)).'79dc33b13aa4cfd5c8557dddeffe8332');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
        <h2><?php echo str_cut($r[title],50,' ...');?></h2>
        <p class="content_seven_main_one_ulleft_main_p1"><?php echo str_cut($r[description],180,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
    </a>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <ul class="content_seven_main_one_ulleft_main_ul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=91991170326e9beb8eec5540b762bb76&action=lists&catid=15&order=updatetime+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'15','order'=>'updatetime DESC','moreinfo'=>'1',)).'91991170326e9beb8eec5540b762bb76');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="content_seven_main_one_ulleft_main_div">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79dc33b13aa4cfd5c8557dddeffe8332&action=lists&catid=15&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'15','order'=>'updatetime DESC','moreinfo'=>'1',)).'79dc33b13aa4cfd5c8557dddeffe8332');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <img src="<?php echo $r['thumb'];?>" width="230" height="170" />
            <b><?php echo str_cut($r[title],40,' ...');?></b>
            <p class="content_seven_main_one_ulleft_main_p2"><?php echo str_cut($r[description],120,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <p class="content_seven_main_one_ulleft_p">
            <a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png"/></a>
        </p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<div class="content_seven_main_one_ulleft_main">
    <div class="content_seven_main_one_ulleft_main_div0">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7e8c93dc521ac2467b214019e844f68a&action=lists&catid=16&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'16','order'=>'updatetime DESC','moreinfo'=>'1',)).'7e8c93dc521ac2467b214019e844f68a');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <h2><?php echo str_cut($r[title],50,' ...');?></h2>
            <p class="content_seven_main_one_ulleft_main_p1"><?php echo str_cut($r[description],180,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <ul class="content_seven_main_one_ulleft_main_ul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b5037602d09ecffea3b7fd4e39dc6b6c&action=lists&catid=16&order=updatetime+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'16','order'=>'updatetime DESC','moreinfo'=>'1',)).'b5037602d09ecffea3b7fd4e39dc6b6c');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],70,' ...');?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="content_seven_main_one_ulleft_main_div">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7e8c93dc521ac2467b214019e844f68a&action=lists&catid=16&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'16','order'=>'updatetime DESC','moreinfo'=>'1',)).'7e8c93dc521ac2467b214019e844f68a');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
            <img src="<?php echo $r['thumb'];?>" width="230" height="170" />
            <b><?php echo str_cut($r[title],40,' ...');?></b>
            <p class="content_seven_main_one_ulleft_main_p2"><?php echo str_cut($r[description],120,' ...');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
        </a>
        <p class="content_seven_main_one_ulleft_p">
            <a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png"/></a>
        </p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<div class="content_seven_main_one_main_rightul">
    <p>发友推荐精品文章</p>
    <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=04284409a0b8b5448f1c81d5a5c2ab0e&action=lists&catid=51&order=updatetime+DESC&num=12&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'51','order'=>'updatetime DESC',)).'04284409a0b8b5448f1c81d5a5c2ab0e');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'51','order'=>'updatetime DESC','limit'=>'12',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],40,' ...');?></a></li>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>
</div>
<!-- 主页通栏广告 -->
<div class="content_seven_nav">
    <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=22"></script>
</div>
<div id="content_seven_main_two" class="content_seven_main_two">
    <div class="content_seven_main_two_left">
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5b7785da37ef35dcd0c96bebbd7718a4&action=position&posid=39&order=listorder+DESC&num=4&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'39','order'=>'listorder DESC',)).'5b7785da37ef35dcd0c96bebbd7718a4');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'39','order'=>'listorder DESC','limit'=>'4',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                            <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="250" height="130"/>
                            <p><?php echo str_cut($r[title],50,' ...');?></p>
                        </a>
                    </li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="content_seven_main_two_right">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7713a05ef96ba02e6331cf49d7a1cd4f&action=lists&catid=33&order=updatetime+DESC&num=1&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'33','order'=>'updatetime DESC','moreinfo'=>'1',)).'7713a05ef96ba02e6331cf49d7a1cd4f');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>">
                    <h2><?php echo str_cut($r[title],50,' ...');?></h2>
                    <p><?php echo str_cut($r[description],180,'');?><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="color:#ff6820;">……详细</a></p>
                </a>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d4b38a4d89360493f9da478e68cc6208&action=lists&catid=33&order=updatetime+DESC&num=6&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'33','order'=>'updatetime DESC','moreinfo'=>'1',)).'d4b38a4d89360493f9da478e68cc6208');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],80,' ...');?></a></li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>
<!--
<div id="content_seven_main_three" class="content_seven_main_three">
    <dl>
        <dt><a href="/qwmtbd/" title="权威媒体报道"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/t_03.png" alt="权威媒体报道" /></a></dt>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ed6ba52e7196e6b9a6651603a5f22462&action=lists&catid=34&order=updatetime+DESC&num=16&cache=3600&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'34','order'=>'updatetime DESC','moreinfo'=>'1',)).'ed6ba52e7196e6b9a6651603a5f22462');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'34','order'=>'updatetime DESC','moreinfo'=>'1','limit'=>'16',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <dd><a title="<?php echo $r['title'];?>" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="100" height="35" /></a></dd>
            <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </dl>
</div>
-->
</div>

<!-- 主页内容第八部分 -->
<div id="centent_eight" class="centent_eight">
    <dl class="centent_eight_dl">
        <dt><a href="#" title="来院路线"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_03.png" alt="来院路线"/><br />来院路线</a></dt>
        <dd><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_10.png" alt="公交路线"/></dd>
        <dd><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_12.png" alt="地铁路线"/></dd>
        <dd><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_14.png" alt="火车路线"/></dd>
        <dd><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_16.png" alt="飞机路线"/></dd>
        <dd><img src="<?php echo IMG_PATH;?>zhifa_cn_images/u_05.png" alt="400.888.6667"/><br /><span>400.888.6667</span></dd>
    </dl>
    <div id="centent_eight_div" class="centent_eight_div">
        <ul class="centent_eight_div_ul">
            <li class="centent_eight_div_ul_activeli">北京雍禾</li>
            <li>上海雍禾</li>
            <li>广州雍禾</li>
            <li>深圳雍禾</li>
            <li>成都雍禾</li>
            <li>武汉雍禾</li>
            <li style="border:none;">沈阳雍禾</li>
        </ul>
    </div>
    <div id="centent_eight_div2" class="content_eight_div2">
        <div style="display:block;" class="beijing">
            <div class="beijingdiv1">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc1.png" width="265" alt="北京雍禾"/>
                <b>雍禾植发技术研究院北京旗舰院</b>
                <p> 北京市朝阳区三里屯SOHO五号五楼<a href="#" style="color:#ff6820;">……详细</a></p>
            </div>
            <div class="beijingdiv2">
                <b>雍禾植发技术研究院北京旗舰院</b>
                <p>北京市朝阳区三里屯SOHO五号五楼<a href="#" style="color:#ff6820;">……详细</a></p>
                <div class="dianji">
                    <p class="dianjip1"><a href="#">点击查看详情</a></p>
                    <p class="dianjip2"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" width="90"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" width="100"/></a></p>
                    <p class="dianjip3">扫描二维码，发送地址<br /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" width="118" height="118" /></p>
                </div>
            </div>
            <div class="beijingdiv3">
                <p class="beijingdiv3p1">雍禾植发分院遍布全国主要城市</p>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_166.jpg" width="405" height="328" />
                <div>
                    <p class="beijingdiv3p2">北京雍禾</p>
                    <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc1.png" width="132" height="70" />
                    <p>北京市朝阳区三里屯<br />SOHO五号商城五层<br />电话: 010-85988114</p>
                </div>
            </div>
        </div>
        <div class="beijing">
            <div class="beijingdiv1">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc2.png" width="265" alt="上海雍禾"/>
                <b>雍禾植发技术研究院上海直营院</b>
                <p>上海市黄浦区斜土东路291号<a href="#" style="color:#ff6820;">……详细</a></p>
            </div>
            <div class="beijingdiv2">
                <b>雍禾植发技术研究院上海直营院</b>
                <p>上海市黄浦区斜土东路291号<a href="#" style="color:#ff6820;">……详细</a></p>
                <div class="dianji">
                    <p class="dianjip1"><a href="#">点击查看详情</a></p>
                    <p class="dianjip2"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" width="90"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" width="100"/></a></p>
                    <p class="dianjip3">扫描二维码，发送地址<br /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" width="118" height="118" /></p>
                </div>
            </div>
            <div class="beijingdiv3">
                <p class="beijingdiv3p1">雍禾植发分院遍布全国主要城市</p>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_166.jpg" width="405" height="328" />
                <div>
                    <p class="beijingdiv3p2">上海雍禾</p>
                    <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc2.png" width="132" height="70" />
                    <p>上海市黄浦区斜土东路291号<br />电话: 021-32093352<br />32093353</p>
                </div>
            </div>
        </div>
        <div class="beijing">
            <div class="beijingdiv1">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc3.png" width="265" alt="广州雍禾"/>
                <b>雍禾植发技术研究院广州直营院</b>
                <p>广州市天河区黄埔大道中141号方豪酒店二楼<a href="#" style="color:#ff6820;">……详细</a></p>
            </div>
            <div class="beijingdiv2">
                <b>雍禾植发技术研究院广州直营院</b>
                <p>广州市天河区黄埔大道中141号方豪酒店二楼<a href="#" style="color:#ff6820;">……详细</a></p>
                <div class="dianji">
                    <p class="dianjip1"><a href="#">点击查看详情</a></p>
                    <p class="dianjip2"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" width="90"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" width="100"/></a></p>
                    <p class="dianjip3">扫描二维码，发送地址<br /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" width="118" height="118" /></p>
                </div>
            </div>
            <div class="beijingdiv3">
                <p class="beijingdiv3p1">雍禾植发分院遍布全国主要城市</p>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_166.jpg" width="405" height="328" />
                <div>
                    <p class="beijingdiv3p2">广州雍禾</p>
                    <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc3.png" width="132" height="70" />
                    <p>广州市天河区黄埔大道中<br />141号方豪酒店二楼<br />电话: 020-85609006/9007</p>
                </div>
            </div>
        </div>
        <div class="beijing">
            <div class="beijingdiv1">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc4.png" width="265" alt="深圳雍禾"/>
                <b>雍禾植发技术研究院深圳直营院</b>
                <p>深圳市福田区深南大道6007号安徽大厦四楼408<a href="#" style="color:#ff6820;">……详细</a></p>
            </div>
            <div class="beijingdiv2">
                <b>雍禾植发技术研究院深圳直营院</b>
                <p>深圳市福田区深南大道6007号安徽大厦四楼408<a href="#" style="color:#ff6820;">……详细</a></p>
                <div class="dianji">
                    <p class="dianjip1"><a href="#">点击查看详情</a></p>
                    <p class="dianjip2"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" width="90"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" width="100"/></a></p>
                    <p class="dianjip3">扫描二维码，发送地址<br /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" width="118" height="118" /></p>
                </div>
            </div>
            <div class="beijingdiv3">
                <p class="beijingdiv3p1">雍禾植发分院遍布全国主要城市</p>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_166.jpg" width="405" height="328" />
                <div>
                    <p class="beijingdiv3p2">深圳雍禾</p>
                    <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc4.png" width="132" height="70" />
                    <p>深圳市福田区深南大道<br />6007号安徽大厦四楼408<br />电话: 0755-82190177<br />82190187</p>
                </div>
            </div>
        </div>
        <div class="beijing">
            <div class="beijingdiv1">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc5.png"  width="265"  alt="成都雍禾"/>
                <b>雍禾植发技术研究院成都直营院</b>
                <p>成都武侯区武侯祠大街266号华达商城二楼（高升桥十字路口）<a href="#" style="color:#ff6820;">……详细</a></p>
            </div>
            <div class="beijingdiv2">
                <b>雍禾植发技术研究院成都直营院</b>
                <p>成都武侯区武侯祠大街266号华达商城二楼（高升桥十字路口）<a href="#" style="color:#ff6820;">……详细</a></p>
                <div class="dianji">
                    <p class="dianjip1"><a href="#">点击查看详情</a></p>
                    <p class="dianjip2"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" width="90"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" width="100"/></a></p>
                    <p class="dianjip3">扫描二维码，发送地址<br /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" width="118" height="118" /></p>
                </div>
            </div>
            <div class="beijingdiv3">
                <p class="beijingdiv3p1">雍禾植发分院遍布全国主要城市</p>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_166.jpg" width="405" height="328" />
                <div>
                    <p class="beijingdiv3p2">成都雍禾</p>
                    <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc5.png" width="132" height="70" />
                    <p>武侯区武侯祠大街266号华达<br />商城二楼（高升桥十字路口）<br />电话: 028-87011449<br />87011448</p>
                </div>
            </div>
        </div>
        <div class="beijing">
            <div class="beijingdiv1">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc6.png" width="265" alt="武汉雍禾"/>
                <b>雍禾植发技术研究院武汉直营院</b>
                <p>武汉市江汉区发展大道179号天梨豪园（帝逸花园）B栋1-2层<a href="#" style="color:#ff6820;">……详细</a></p>
            </div>
            <div class="beijingdiv2">
                <b>雍禾植发技术研究院武汉直营院</b>
                <p>武汉市江汉区发展大道179号天梨豪园（帝逸花园）B栋1-2层<a href="#" style="color:#ff6820;">……详细</a></p>
                <div class="dianji">
                    <p class="dianjip1"><a href="#">点击查看详情</a></p>
                    <p class="dianjip2"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" width="90"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" width="100"/></a></p>
                    <p class="dianjip3">扫描二维码，发送地址<br /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" width="118" height="118" /></p>
                </div>
            </div>
            <div class="beijingdiv3">
                <p class="beijingdiv3p1">雍禾植发分院遍布全国主要城市</p>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_166.jpg" width="405" height="328" />
                <div>
                    <p class="beijingdiv3p2">武汉雍禾</p>
                    <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc6.png" width="132" height="70" />
                    <p>武汉市江汉区发展大道<br />179号天梨豪园(帝逸花园)<br />B栋1-2层<br />电话: 027-85577996</p>
                </div>
            </div>
        </div>
        <div class="beijing">
            <div class="beijingdiv1">
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc7.png" width="265" alt="沈阳雍禾"/>
                <b>雍禾植发技术研究院沈阳直营院</b>
                <p>沈阳市铁西区云峰北街34—1号5-6号门<a href="#" style="color:#ff6820;">……详细</a></p>
            </div>
            <div class="beijingdiv2">
                <b>雍禾植发技术研究院沈阳直营院</b>
                <p>沈阳市铁西区云峰北街34—1号5-6号门<a href="#" style="color:#ff6820;">……详细</a></p>
                <div class="dianji">
                    <p class="dianjip1"><a href="#">点击查看详情</a></p>
                    <p class="dianjip2"><a href="#"><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_08.png" width="90"/><img src="<?php echo IMG_PATH;?>zhifa_cn_images/m_09.png" width="100"/></a></p>
                    <p class="dianjip3">扫描二维码，发送地址<br /><img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_173.jpg" width="118" height="118" /></p>
                </div>
            </div>
            <div class="beijingdiv3">
                <p class="beijingdiv3p1">雍禾植发分院遍布全国主要城市</p>
                <img src="<?php echo IMG_PATH;?>zhifa_cn_images/a_166.jpg" width="405" height="328" />
                <div>
                    <p class="beijingdiv3p2">沈阳雍禾</p>
                    <img src="<?php echo IMG_PATH;?>zhifa_cn_images/abc7.png" width="132" height="70" />
                    <p>沈阳市铁西区云峰北街<br />34—1号5-6号门<br />电话: 024-31317635</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // 主页内容第一部分 内容幻灯片
    content_one();

    // 首页 内容新闻推荐列表
    content_one_ul2();

    // 首页 内容新闻右侧 业界公认的雍禾成就
    content_one_right_ul();

    // 主页内容第二部分
    content_two();

    content_two_ul_main_5_left();
    content_two_ul_main_5_right_ul();

    // 主页内容第三部分 发友推荐雍禾植发专家团队
    content_three_main_dl();

    // 主页内容第四部分
    content_four();

    // 主页内容第四部分 每个案例切换
    content_four_ul_main_ul1();
    content_four_ul_main_ul2();
    content_four_ul_main_ul3();
    content_four_ul_main_ul4();
    content_four_ul_main_ul5();
    content_four_ul_main_ul6();
    content_four_ul_main_ul7();
    content_four_ul_main_ul8();


    hm.app.toRun();
    hm.app.toRun2();

    content_two_ul_main_7_right();
    // 主页内容第五部分
    hm.app.toRun3();

    // 主页内容第七部分
    content_seven();

    // 主页内容第八部分
    centent_eight_div();

</script>
<?php include template("content","footer"); ?>