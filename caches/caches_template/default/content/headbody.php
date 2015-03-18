<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link href="<?php echo CSS_PATH;?>/zhifa_cn_css/YHreset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo CSS_PATH;?>/zhifa_cn_css/YHindex.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo JS_PATH;?>/zhifa_cn_js/YHindex.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>/zhifa_cn_js/jquery1.42.min.js"></script>
</head>
<body>