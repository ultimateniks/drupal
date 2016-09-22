<?php include('header.tpl.php') ?>

<style type="text/css">
	.region-right .block {
			border-bottom:none;
	}
</style>
    <div id="main"><div id="main-inner" class="clear-block<?php if ($search_box || $primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

      <div id="content" style="margin-left:0;margin-right:-949px;width:949px;"><div id="content-inner">
        <?php if ($template2_content_left_fixed  || $template2_content_left_large_fixed || $template2_content_left): ?>
	        <div style="float:left;width:316px;border-right:1px solid #E1E1E1;">
		        <?php if ($template2_content_left_fixed): ?>
		          <div id="template2_content_left_fixed" class="region region-template2_content_left_fixed">
		            <?php print $template2_content_left_fixed; ?>
		          </div> <!-- /#template2_content_left_fixed -->
		        <?php endif; ?>
		        
		        <?php if ($template2_content_left_large_fixed): ?>
		          <div id="template2_content_left_large_fixed" class="region region-template2_content_left_large_fixed">
		            <?php print $template2_content_left_large_fixed; ?>
		          </div> <!-- /#template2_content_left_large_fixed -->
		        <?php endif; ?>
		        
		        <?php if ($template2_content_left): ?>
		          <div id="template2_content_left" class="region region-template2_content_left">
		            <?php print $template2_content_left; ?>
		          </div> <!-- /#template2_content_left -->
		        <?php endif; ?>
		        
		    </div>
	    <?php endif; ?>
        
         <?php if ($template2_content_middle_fixed || $template2_content_middle_large_fixed || $template2_content_middle): ?>
	        <div style="float:left;width:316px;border-right:1px solid #E1E1E1;">
	        
	        	<?php if ($template2_content_middle_fixed): ?>        
		          <div id="template2_content_middle_fixed" class="region region-template2_content_middle_fixed">
		            <?php print $template2_content_middle_fixed; ?>
		          </div> <!-- /#template2_content_middle_fixed -->
		        <?php endif; ?>
		        
		        <?php if ($template2_content_middle_large_fixed): ?>        
		          <div id="template2_content_middle_large_fixed" class="region region-template2_content_middle_large_fixed">
		            <?php print $template2_content_middle_large_fixed; ?>
		          </div> <!-- /#template2_content_middle_large_fixed -->
		        <?php endif; ?>
		        		        
		        <?php if ($template2_content_middle): ?>        
		          <div id="template2_content_middle" class="region region-template2_content_middle">
		            <?php print $template2_content_middle; ?>
		          </div> <!-- /#template2_content_middle -->
		        <?php endif; ?>
		        
		    </div>
	    <?php endif; ?>
        
         <?php if ($template2_content_right_fixed  || $template2_content_right_large_fixed || $template2_content_right): ?>
	        <div style="float:left;width:315px;">
	        
	        	<?php if ($template2_content_right_fixed): ?>
		          <div id="template2_content_right_fixed" class="region region-template2_content_right_fixed">
		            <?php print $template2_content_right_fixed; ?>
		          </div> <!-- /#template2_content_right_fixed -->
		        <?php endif; ?>
		        
		        <?php if ($template2_content_right_large_fixed): ?>
		          <div id="template2_content_right_large_fixed" class="region region-template2_content_right_large_fixed">
		            <?php print $template2_content_right_large_fixed; ?>
		          </div> <!-- /#template2_content_right_large_fixed -->
		        <?php endif; ?>
		        
		        <?php if ($template2_content_right): ?>
		          <div id="template2_content_right" class="region region-template2_content_right">
		            <?php print $template2_content_right; ?>
		          </div> <!-- /#template2_content_right -->
		        <?php endif; ?>
		    </div>
	    <?php endif; ?>

        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php //print $feed_icons; ?></div>
        <?php endif; ?>

        <?php if ($content_bottom): ?>
          <div id="content-bottom" class="region region-content_bottom">
            <?php //print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>

      </div></div> <!-- /#content-inner, /#content -->

    </div></div> <!-- /#main-inner, /#main -->

   
<?php include('footer.tpl.php') ?>