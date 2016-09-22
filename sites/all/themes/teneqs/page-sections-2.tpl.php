<?php include('header.tpl.php') ?>
    <div id="main" class="homepage-template"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

      <div id="content" style="margin-left:0px;width:628px;margin-right:-628px;*padding-bottom:5px;"><div id="content-inner">

        <?php if ($mission): ?>
          <div id="mission"><?php print $mission; ?></div>
        <?php endif; ?>

        <?php if ($content_top): ?>
          <div id="content-top" class="region region-content_top">
            <?php print $content_top; ?>
          </div> <!-- /#content-top -->
        <?php endif; ?>
<div class="clear"></div>
        <?php if ($breadcrumb || $title || $tabs || $help || $messages): ?>
          <div id="content-header">
            <?php //print $breadcrumb; ?>
            <?php if ($title): ?>
            	<div class="main_title">
                    	<div class="float_l title_bdrbtm"><span><?php print $title; ?></span></div>
                        <div class="clear"></div>
                </div>
            <?php endif; ?>
            <?php print $messages; ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area" style="padding-right:0px;">
          <?php //print $content; ?>
      		<?php if ($homepage_content_bottom_left): ?>
	          <div id="homepage_content_bottom_left" class="region region-homepage_content_bottom_left">
	            <?php print $homepage_content_bottom_left; ?>
	          </div> <!-- /#homepage_content_bottom_left -->
	        <?php endif; ?>
	        
	        <?php if ($homepage_content_bottom_right): ?>
	          <div id="homepage_content_bottom_right" class="region region-homepage_content_bottom_right">
	            <?php print $homepage_content_bottom_right; ?>
	          </div> <!-- /#homepage_content_bottom_right -->
	        <?php endif; ?>
	        </div>

        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>

        <?php if ($content_bottom): ?>
          <div id="content-bottom" class="region region-content_bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>

      </div></div> <!-- /#content-inner, /#content -->

      <?php if ($right): ?>
        <div id="sidebar-right"><div id="sidebar-right-inner" class="region region-right">
          <?php print $right; ?>
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
      <?php endif; ?>

    </div></div> <!-- /#main-inner, /#main -->
<style type="text/css">
#sidebar-right .region-right .block {
	border-bottom:medium none;
	margin-bottom:1px;
}
#content-header {
display: none;
}
</style>

<?php include('footer.tpl.php') ?>