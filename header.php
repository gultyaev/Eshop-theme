<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body>
   
   <header>
<!--
    <div class="logo">
            <a href="<?php echo home_url();?>" alt="<?php bloginfo('name');?>"
            title="<?php bloginfo('name');?>"><img src="<?php bloginfo('template_url');?>/images/logo.png" /></a>
    </div>
-->
       <div class="title">
           <h1 class="site-title"><a href="/" alt="Главная" title="Главная"><?php bloginfo('name') ?></a></h1>
           <h2 class="site-descr"><?php bloginfo('description') ?></h2>
       </div>
   </header>
   
   <div class="menu-show">Меню</div>
    <nav class="main-navigation clear-fix">
       <?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
    </nav>
    