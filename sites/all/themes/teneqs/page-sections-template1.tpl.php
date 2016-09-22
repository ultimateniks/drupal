<?php include('header.tpl.php') ?>

<style type="text/css">
	.region-right .block {
			border-bottom:none;
	}
</style>
    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

      <div id="content" style="margin-left:0px;width:630px;margin-right:-630px;"><div id="content-inner">

        <?php if ($mission): ?>
          <div id="mission"><?php print $mission; ?></div>
        <?php endif; ?>

        <?php if ($content_top): ?>
          <div id="content-top" style="padding:10px;" class="region region-content_top">
            <?php print $content_top; ?>
          </div> <!-- /#content-top -->
        <?php endif; ?>
        
        <?php if ($template1_content_top_fixed): ?>
          <div id="template1_content_top_fixed" class="region region-template1_content_top_fixed">
            <?php print $template1_content_top_fixed; ?>
          </div> <!-- /#template1_content_top_fixed -->
        <?php endif; ?>

        <?php if ($breadcrumb || $title || $tabs || $help || $messages): ?>
          <div id="content-header">
            <?php //print $breadcrumb; ?>
            <?php if ($title): ?>
            <!--  	<div class="main_title">
                    	<div class="float_l title_bdrbtm"><span><?php //print $title; ?></span></div>
                        <div class="clear"></div>
                </div>
            -->
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
        </div>
        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>

 		<?php if ($template1_content_bottom_left_fixed): ?>
          <div id="template1_content_bottom_left_fixed" class="region region-template1_content_bottom_left_fixed">
            <?php print $template1_content_bottom_left_fixed; ?>
          </div> <!-- /#template1_content_bottom_left_fixed -->
        <?php endif; ?>
        
        <?php if ($template1_content_bottom_right_fixed): ?>
          <div id="template1_content_bottom_right_fixed" class="region region-template1_content_bottom_right_fixed">
            <?php print $template1_content_bottom_right_fixed; ?>
          </div> <!-- /#template1_content_bottom_right_fixed -->
        <?php endif; ?>
        
        <?php if ($content_bottom): ?>
          <div id="content-bottom" style="padding:10px;" class="region region-content_bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>

      </div></div> <!-- /#content-inner, /#content -->
      
		<?php if ($template1_content_right_top_fixed || $template1_content_right_bottom ): ?>
			<div id="sidebar-right"><div id="sidebar-right-inner" class="region region-right">
		        <?php if ($template1_content_right_top_fixed): ?>
			        <div id="template1_content_right_top_fixed"><div id="template1_content_right_top_fixed-inner" class="region region-template1_content_right_top_fixed">
			          <?php print $template1_content_right_top_fixed; ?>
			        </div></div> <!-- /#sidebar-template1_content_right_top_fixed, /#sidebar-template1_content_right_top_fixed -->
			    <?php endif; ?>
			    
			    <?php if ($template1_content_right_bottom): ?>
			        <div id="template1_content_right_bottom">
			        	<div id="template1_content_right_bottom" class="region region-template1_content_right_bottom">
			          <?php print $template1_content_right_bottom; ?>
			        </div></div> <!-- /#sidebar-template1_content_right_bottom, /#sidebar-template1_content_right_bottom -->
			    <?php endif; ?>
	        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
	      <?php endif; ?>

    </div></div> <!-- /#main-inner, /#main -->


<?php include('footer.tpl.php') ?>