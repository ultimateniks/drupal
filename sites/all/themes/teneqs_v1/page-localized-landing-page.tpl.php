<?php
  global $env_webserver;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
  <head>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', '<?php echo $env_webserver == 'local' || $env_webserver == 'dev' ? 'UA-27991560-1' : 'UA-9891954-5'; ?>', 'auto');
      ga('send', 'pageview');
    </script>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript">
      $(document).ready(function() {
        $('ul.sf-menu').superfish({
          delay:100,
          dropShadows: false,
          autoArrows: false,
          speed: 'fast'
        }); /* dropdown menus */
        $(".fancybox").fancybox(); /* fancybox (lightbox) */
      });
    </script>
  </head>
  <body class="<?php print $body_classes; ?>">
    <div id="wrap">
      <?php require('includes/page-elements/header.inc.php'); ?>
	  <?php
	    if ($head_title && $content_top) {
	      echo $content_top;
		}
	  ?>
	  <?php //print teneqs_custom_breadcrumb($breadcrumb,$title); ?>
      <div id="main" class="two-column">    
        <?php if ($search_box || $secondary_links || $navbar): ?>
          <div id="navbar">
		    <div id="navbar-inner" class="clear-block region region-navbar">
              <a name="navigation" id="navigation"></a>
              <?php if ($search_box): ?>
                <div id="search-box">
                  <?php print $search_box; ?>
                </div> <!-- /#search-box -->
              <?php endif; ?>
              <?php if ($secondary_links): ?>
                <div id="secondary" class="clear-block">
                  <?php print theme('links', $secondary_links); ?>
                </div> <!-- /#secondary -->
              <?php endif; ?>
              <?php print $navbar; ?>
            </div>
		  </div> <!-- /#navbar-inner, /#navbar -->
        <?php endif; ?>
        <?php if ($breadcrumb || $tabs || $help || $messages): ?>
          <div id="content-header">
            <?php //print $breadcrumb; ?>
            <?php //if ($title): ?>
              <!--<h1 class="title"><?php //print $title; ?></h1>-->
            <?php //endif; ?>
            <?php print $messages; ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>
        <?php if ($left): ?>
          <div class="column-left-localized">
            <?php print $left; ?>
          </div> <!-- /#sidebar-left -->
        <?php endif; ?>
        <?php if ($content) { ?>
			<div class="column-right-localized">
			  <?php print $content; ?>
			</div>
		<?php } ?>
      </div>
      <?php if ($footer || $footer_message): ?>
        <div id="footer">
		  <div id="footer-inner" class="region region-footer">
            <?php //if ($footer_message): ?>
              <!--<div id="footer-message"><?php //print $footer_message; ?></div>-->
            <?php //endif; ?>
            <?php print $footer; ?>
          </div>
		</div> <!-- /#footer-inner, /#footer -->
      <?php endif; ?>
    </div>
  </body>
</html>