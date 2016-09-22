<?php
// $Id: page.tpl.php,v 1.14.2.10 2009/11/05 14:26:26 johnalbin Exp $

/**
 * @file page.tpl.php
 *
 * Theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the theme is located in, e.g. themes/garland or
 *   themes/garland/minelli.
 * - $is_front: TRUE if the current page is the front page. Used to toggle the mission statement.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $body_classes: A set of CSS classes for the BODY tag. This contains flags
 *   indicating the current layout (multiple columns, single column), the current
 *   path, whether the user is logged in, and so on.
 * - $body_classes_array: An array of the body classes. This is easier to
 *   manipulate then the string in $body_classes.
 * - $node: Full node object. Contains data that may not be safe. This is only
 *   available if the current page is on the node's primary url.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been disabled.
 * - $primary_links (array): An array containing primary navigation links for the
 *   site, if they have been configured.
 * - $secondary_links (array): An array containing secondary navigation links for
 *   the site, if they have been configured.
 *
 * Page content (in order of occurrance in the default page.tpl.php):
 * - $left: The HTML for the left sidebar.
 *
 * - $breadcrumb: The breadcrumb trail for the current page.
 * - $title: The page title, for use in the actual HTML content.
 * - $help: Dynamic help text, mostly for admin pages.
 * - $messages: HTML for status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the view
 *   and edit tabs when displaying a node).
 *
 * - $content: The main content of the current Drupal page.
 *
 * - $right: The HTML for the right sidebar.
 *
 * Footer/closing data:
 * - $feed_icons: A string of all feed icons for the current page.
 * - $footer_message: The footer message as defined in the admin settings.
 * - $footer : The footer region.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic content.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 */
  global $env_webserver;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
    <?php require ('includes/page-elements/global-css.inc.php'); ?>
    <link href="css/home.css" rel="stylesheet" type="text/css" /> 
    <?php require ('includes/page-elements/global-js.inc.php'); ?>
    <script type="text/javascript">
      var slideshow_init = true;
      var slideshow_forced_index = -1;
    $(document).ready(function() {
      $('#s1').cycle({
        fx:     'fade',
        speed:  800,
        timeout: 10000,
        before: slideshow_onBefore
      });
      $('.home-splash ul a').click(function(e) {
        e.preventDefault();
        slideshow_forced_index = parseInt($(this).attr('rel'));
        $('#s1').cycle(slideshow_forced_index);
        $('#s1').cycle('pause');
      });
    });
    function slideshow_onBefore(curr,next,opts) {
      $('.home-splash ul li a').removeClass('on');
      if (slideshow_init){
        $('.home-splash .tab-button-1 a').addClass('on');
        slideshow_init = false;
      }
      else if (slideshow_forced_index > -1){
        $('.home-splash .tab-button-' + (slideshow_forced_index+1) + ' a').addClass('on');
      }
      else{
        if (opts.currSlide == (opts.slideCount-1)){
          $('.home-splash .tab-button-1 a').addClass('on');
        }
        else{
          $('.home-splash .tab-button-' + (opts.currSlide+2) + ' a').addClass('on');
        }
      }
    }
    </script>
  </head>
  <body class="<?php print $body_classes; ?>">
    <div id="wrap">
	  <div>
	    <?php require('includes/page-elements/header.inc.php'); ?>
	  </div>
	  <div class="header_sep_ie7"></div>
      <div id="main">
	    <?php if ($search_box || $primary_links || $secondary_links || $navbar): ?>
        <div id="navbar"><div id="navbar-inner" class="clear-block region region-navbar">
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
		</div></div> <!-- /#navbar-inner, /#navbar -->
		<?php endif; ?>
        <?php if ($breadcrumb || $title || $tabs || $help || $messages): ?>
          <div id="content-header">
            <?php print $breadcrumb; ?>
            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print $messages; ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>
		<?php if ($left): ?>
		  <div id="sidebar-left"><div id="sidebar-left-inner" class="region region-left">
			<?php print $left; ?>
	      </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
		<?php endif; ?>
	    <?php if ($content_top): ?>
          <div id="content-top" class="region region-content_top">
            <?php print $content_top; ?>
          </div> <!-- /#content-top -->
        <?php endif; ?>
		<div class = "home-bottom">
		  <?php if ($content_left) { ?>
			<div id="content-area-left" class="content-left">
			  <?php print $content_left; ?>
			</div>
		  <?php } ?>
		  <div class="styled-buckets">
			<?php if ($content) { ?>
			  <div id="content-area" >
                <?php print $content; ?>
              </div>
            <?php } ?>
			<?php if ($content_right) { ?>
			  <div id="content-area-right" class="content-right">
			    <?php print $content_right; ?>
			  </div>
			<?php } ?>
		  </div>
        </div>
        <?php if ($content_bottom): ?>
          <div id="content-bottom" class="region region-content_bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>
		<?php if ($right): ?>
		  <div id="sidebar-right"><div id="sidebar-right-inner" class="region region-right">
			<?php print $right; ?>
		  </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
		<?php endif; ?>
      </div> <!-- /#main-inner, /#main -->
	  <?php if ($footer || $footer_message): ?>
		<div id="footer">
		  <div id="footer-inner" class="region region-footer">
			<?php //if ($footer_message): ?>
			<?php //endif; ?>
			<?php print $footer; ?>
		  </div>
		</div> <!-- /#footer-inner, /#footer -->
      <?php endif; ?>
  </div> <!-- /#page-inner, /#page -->
  <?php if ($closure_region): ?>
    <div id="closure-blocks" class="region region-closure"><?php print $closure_region; ?></div>
  <?php endif; ?>
  <?php print $closure; ?>
</body>
</html>
