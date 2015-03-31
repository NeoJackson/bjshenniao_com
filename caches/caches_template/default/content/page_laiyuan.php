<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_page"); ?>
<div id="content_page" class="content_page">
	<div class="page-col-left">
    	<h1>来院路线</h1>
    	<ul class="nav_content">
        	<?php $n=1;if(is_array($arrchild_arr)) foreach($arrchild_arr AS $cid) { ?>
                <li<?php if($catid==$cid) { ?> class="cur"<?php } ?>><a href="<?php echo $CATEGORYS[$cid]['url'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
			<?php $n++;}unset($n); ?>
        </ul>
    </div>
    <div class="page-col-auto">
    	<img src="<?php echo IMG_PATH;?>zhifa_cn_images/about_ad.jpg" width="750" />
    	<h1 class="page-title"><?php echo $title;?></h1>
        <div class="page-content">
        	    <?php echo $content;?>
        </div>
    </div>
 </div>
<?php include template("content","footer"); ?>