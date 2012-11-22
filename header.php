<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php Options::out('title'); ?></title>
    <?php print $theme->header(); ?>
  </head>
  <body class="<?php print $theme->body_class(); ?>" data-spy="scroll" data-target=".sidenav" data-offset="0">

    <nav id="mainmenu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="navbar-inner">
        <div class="container">

          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="nav-collapse">
            <a href="<?php Site::out_url('habari'); ?>" class="brand"><?php Options::out('title'); ?></a>

            <ul class="nav">
              <li<?php print $_SERVER['REQUEST_URI'] == '/' ? ' class="active"' : ''; ?>><a href="<?php Site::out_url('habari'); ?>"><?php _e('Home'); ?></a></li>
              <?php foreach ($pages as $page) : ?>
                <li class="<?php print $page->onPage ? 'active' : ''; ?>"><a href="<?php print $page->permalink; ?>" title="<?php print $page->title; ?>"><?php print $page->title; ?></a></li>
              <?php endforeach; ?>
            </ul>

            <?php print $theme->area('nav'); ?>
          </div>

        </div>
      </div>
    </nav>

    <header id="nameplate" role="banner" class="hero-unit">
      <div class="container">
        <div class="row">
          <div class="span8">
            <hgroup>
              <h1 class="logo"><a href="<?php Site::out_url('habari'); ?>" rel="home"><?php Options::out('title'); ?></a></h1>
              <h2 class="tagline"><?php Options::out('tagline'); ?></h2>
            </hgroup>
          </div>
          <div class="span4">
            <div id="android"></div>
          </div>
        </div>
      </div>
    </header>
