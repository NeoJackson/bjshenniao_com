<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- 通栏幻灯大banner -->
<div id="slideBox" class="slideBox">
    <div class="bd">
        <ul>
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=14"></script></div></li>
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=15"></script></div></li>
            <li><div class="siteWidth"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=16"></script></div></li>
        </ul>
    </div>
    <div id="hd" class="hd">
        <ul><li class="on">1</li><li>2</li><li>3</li></ul>
    </div>
    <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
    <a class="slideBox_prev" href="javascript:void(0)"></a>
    <a class="slideBox_next" href="javascript:void(0)"></a>
</div>
<script>
    hm.app.toRun5();
</script>