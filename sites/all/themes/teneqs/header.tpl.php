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

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">



<head>

  <title><?php print $head_title; ?></title>

  <?php print $head; ?>

  <?php print $styles; ?>

  <?php print $scripts; ?>

  <?php drupal_add_js('popup.js');?>

  <link rel="image_src" href="http://www.10eqs.com/sites/all/themes/teneqs/images/logo100100.png" />

</head>

<body class="<?php print $body_classes; ?>">

  <!-- Popup outer starts here -->

	<div id="popupContact">

	<div>

			<?php 
			if($webcast_video):
                print $webcast_video;
                endif;
            ?>	

	<!--<div class="dialog">
	     <div class="hd"><div class="c">
	     <div class="float_l" style="padding:10px 10px 0px 13px; font-size:13px; font-weight:bold;">10EQS Knowledge Exchange<br />The online market for expertise</div>
	        <div class="float_r" style="padding:10px 36px;">
            <a href="javascript:;" title="Close Popup" id="popupContactClose"><img src="/sites/all/themes/teneqs/images/close_btn.png" width="16" height="16" border="none"/></a>
            </div>

	        <div class="clear"></div>     

	     </div></div>

	     <div class="bd">
	      <div class="c">
	       <div class="s">
	   			<div align="center" style="padding-top:15px;">
	            <iframe src="http://links.10eqs.net/aboutcast" width="410" height="300" frameborder="0">

	            </iframe>
	            </div>
	       </div>
	      </div>
	     </div>
         

	     <div class="ft"><div class="c"></div></div>

	    </div>-->

	    

	    </div>

	

	</div>

		<div id="backgroundPopup"></div>

	<!-- Popup outer ends here -->			

  <div id="page"><div id="page-inner">



    <a name="navigation-top" id="navigation-top"></a>

    <?php if ($primary_links || $secondary_links || $navbar): ?>

      <div id="skip-to-nav"><a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>

    <?php endif; ?>

    <div id="header"><div id="header-inner" class="clear-block">



      	<div style="padding-left:10px;padding-top:15px;padding-bottom:5px;">

	  	    <a href="/" title="10EQS Home"><img src="/sites/all/themes/teneqs/images/10eqs_logo.png" width="369" border="none" height="30">

	  	    </a>

		</div>

      	<?php if ($logo || $site_name || $site_slogan): ?>

        <div id="logo-title">



          <?php if ($logo): ?>

            <div id="logo">

            		<div class="logo_title">
                    	<?php if($tagline):
								print $tagline;
							   endif;
						?>
<!--                    ...the online market for expertise-->
                    </div>

            		<div style="padding-top:24px;"/>

            		<div id="primary-wrapper">

            		<?php if ($primary_links): ?>

            			<div class="tab_left"></div>

			            <div id="primary" class="clear-block">

			              <?php print theme('links', $primary_links); ?>

			            </div> <!-- /#primary -->

			            <div class="tab_right"></div>

			            <div class="clear"></div>

			        <?php endif; ?>

			        </div>

			        <div class="l_r_outer">          

		            	<div class="login_btn">

		                	<a href="https://app.10eqs.com/10eqs/login.html" target="_blank">Login</a>

		                </div>

		                

		                <div class="register_btn">

		                	<a href="https://app.10eqs.com/10eqs/register.html" target="_blank">Register</a>

		                </div>

		            	<div class="clear"></div>		            

			        </div>

            </div>

          <?php endif; ?>



          <?php if ($site_name): ?>

            <?php if ($title): ?>

              <div id="site-name"><strong>

                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">

                <?php print $site_name; ?>

                </a>

              </strong></div>

            <?php else: ?>

              <h1 id="site-name">

                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">

                <?php print $site_name; ?>

                </a>

              </h1>

            <?php endif; ?>

          <?php endif; ?>



          <?php if ($site_slogan): ?>

            <div id="site-slogan"><?php print $site_slogan; ?></div>

          <?php endif; ?>



        </div> <!-- /#logo-title -->

      <?php endif; ?>



      <?php if ($header): ?>

        <div id="header-blocks" class="region region-header">

          <?php print $header; ?>

        </div> <!-- /#header-blocks -->

      <?php endif; ?>



    </div></div> <!-- /#header-inner, /#header -->