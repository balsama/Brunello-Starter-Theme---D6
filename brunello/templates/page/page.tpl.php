<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
  <head>
    
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <!--[if IE 7]><link type="text/css" rel="stylesheet" media="all" href="/sites/betterforyou.com/themes/bfy/css/ie7.css" /><![endif]-->
    <!--[if IE 8]><link type="text/css" rel="stylesheet" media="all" href="/sites/betterforyou.com/themes/bfy/css/ie8.css" /><![endif]-->
  </head>

  <body class="<?php print $body_classes; ?>">

    <div id="page">

      <!-- ______________________ HEADER _______________________ -->
      <div id="header">
        <?php print $header; ?>
        <div id="logo-title">
        </div> <!-- /logo-title -->
        <?php print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); ?>
      </div> <!-- /header -->

      <!-- ______________________ MAIN _______________________ -->
      <div id="main" class="clearfix">
      
        <div id="sidebar-first" class="column sidebar first">
          <div id="sidebar-first-inner" class="inner">
            <?php print $left; ?>
          </div>
        </div>

        <div id="content">
          <div id="content-inner" class="inner column center">
            <div id="content-area">
              <?php print $content; ?>
            </div> <!-- /#content-area -->
          </div> <!-- /content-inner /content -->
        </div><!-- /#content -->

        <div id="sidebar-second" class="column sidebar second">
          <div id="sidebar-second-inner" class="inner">
            <?php print $right; ?>
          </div>
        </div>    
    
      </div> <!-- /#main -->

      <!-- ______________________ FOOTER _______________________ -->
      <div id="footer">
        <?php print $footer_block; ?>
      </div> <!-- /footer -->

    </div> <!-- /page -->
    <?php print $closure; ?>
  </body>
</html>
