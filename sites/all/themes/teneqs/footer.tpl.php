 <?php if ($footer || $footer_message): ?>

      <div id="footer"><div id="footer-inner" class="region region-footer">

      		<div style="clear:both">

      		<div style="float:left;min-height:22px;">

				<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;username=10eqs"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="20" alt="Bookmark and Share" style="border:0"/></a>

				<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=10eqs"></script>

			</div>

			<div style="float: left; margin-left: 100px;">

        		<?php print $footer; ?>

        	</div>

        	<div style="float:right;">

				<a href="http://www.linkedin.com/groups?gid=2414906" style="text-align:center;text-decoration:none;" title="Follow us on LinkedIn" target="_blank">

					<img title="Follow us on LinkedIn" alt="Follow us on LinkedIn" src="/sites/all/themes/teneqs/images/linkedin_icon.png" border="none" />

        		</a>

        		<!--<a href="http://www.facebook.com/group.php?gid=315052358199" style="text-align:center;text-decoration:none;" title="Follow us on Facebook" target="_blank">

        			<img alt="Follow us on Facebook" title="Follow us on Facebook" src="/sites/all/themes/teneqs/images/facebook_icon.png" border="none" />

        		</a>-->
                
                <a href="http://www.facebook.com/10EQS" style="text-align:center;text-decoration:none;" title="Follow us on Facebook" target="_blank">

        			<img alt="Follow us on Facebook" title="Follow us on Facebook" src="/sites/all/themes/teneqs/images/facebook_icon.png" border="none" />

        		</a>

				<a href="http://twitter.com/10EQS" style="text-align:center;text-decoration:none;" title="Follow us on Twitter" target="_blank">

					<img title="Follow us on Twitter" alt="Follow us on Twitter" src="/sites/all/themes/teneqs/images/twitter_icon.png" border="none" />

				</a>

        		<a href="http://www.youtube.com/10EQS" style="text-align:center;text-decoration:none;" title="Follow us on You Tube" target="_blank">

        			<img title="Follow us on You Tube"  alt="Follow us on You Tube" src="/sites/all/themes/teneqs/images/youtube_icon.png" border="none" />

				</a>

				<a href="http://10EQS.wordpress.com/" style="text-align:center;text-decoration:none;" title="Follow our Blog" target="_blank">

					<img title="Follow our Blog" alt="Follow our Blog" src="/sites/all/themes/teneqs/images/blog_icon.png" border="none" />

				</a>

			</div>

			</div>

        <?php if ($footer_message): ?>

          <div id="footer-message"><?php print $footer_message; ?></div>

        <?php endif; ?>



      </div></div> <!-- /#footer-inner, /#footer -->

    <?php endif; ?>

  </div></div> <!-- /#page-inner, /#page -->



  <?php if ($closure_region): ?>

    <div id="closure-blocks" class="region region-closure"><?php print $closure_region; ?></div>

  <?php endif; ?>



  <?php print $closure; ?>



</body>

</html>