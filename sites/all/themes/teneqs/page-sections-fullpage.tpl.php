	<?php include('header.tpl.php') ?>

	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/teneqs/fullpage/css/style.css"/>
	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/teneqs/fullpage/SpryAssets/SpryAccordion.css"/>
	<script type="text/javascript" src="/sites/all/themes/teneqs/fullpage/SpryAssets/SpryAccordion.js"></script>
	
    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

      <div id="content" style="margin-left:0px;padding:10px;width:938px;"><div id="content-inner">

        <?php if ($mission): ?>
          <div id="mission"><?php //print $mission; ?></div>
        <?php endif; ?>

        <?php if ($content_top): ?>
          <div id="content-top" style="padding:10px;" class="region region-content_top">
            <?php //print $content_top; ?>
          </div> <!-- /#content-top -->
        <?php endif; ?>

        <?php if ($breadcrumb || $title || $tabs || $help || $messages): ?>
          <div id="content-header">
            <?php //print $breadcrumb; ?>
            <?php if ($title): ?>
            <div class="main_title">
                    	<div class="float_l title_bdrbtm"><span><?php print $title; ?></span></div>
                        <div class="clear"></div>
            </div>
            <?php endif; ?>
            <?php //print $messages; ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area" style="padding-right:0px;">
          <?php print $content; ?>	
        </div>
        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php //print $feed_icons; ?></div>
        <?php endif; ?>

      </div></div> <!-- /#content-inner, /#content -->

    </div></div> <!-- /#main-inner, /#main -->


<?php include('footer.tpl.php') ?>