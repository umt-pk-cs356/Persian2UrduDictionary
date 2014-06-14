<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php bloginfo('title'); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <?php wp_head();?>
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="#"><b>PERSIAN DISTIONARY</a></h1>
                <h3>Online Dictionary</h3>

            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="menu">
        <ul>
            <li class="current_page_item"><a href="http://localhost/wordpress/">Dictionary</a></li>
            <li><a href="http://dynamo.dictionary.com/">Word Dynamo</a></li>
            <li><a href="http://www.reference.com/">Reference</a></li>
            <li><a href="http://translate.reference.com/">Translator</a></li>
            <li><a href="www.facebook.com">About Us</a></li>
            
        </ul>
    </div>
    <div id="menu">
        <?php wp_nav_menu(); ?>
    </div>
    <!-- end #menu -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">