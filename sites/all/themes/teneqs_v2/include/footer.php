

  <footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-3"><img class="teneqs-logo" src="/<?php print $directory;?>/images/footer-logo.png" width="130" height="30" alt=""/></div>
      <div class="col-sm-6">
        <div class="row">
        <?php print $new_footer; ?>
        </div>
      </div>
      <div class="col-sm-3 text-right">
        <div class="social-links row"> <a href="http://www.facebook.com/10EQS" target="_blank" class="facebook"> </a> <a href="http://www.twitter.com/10EQS" target="_blank" class="twitter"> </a> <a href="http://www.youtube.com/10EQS" target="_blank" class="youtube"> </a> <a href="http://www.10eqs.com/blog" target="_blank" class="blogger"> </a> </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="footer-links"><a data-backdrop="static" data-keyboard="false" class="disable-scroll" href="javascript:;" data-toggle="modal" data-target="#privacy-popup">Privacy</a> <!-- <a href="/node/139">Terms of Use </a>  -->
      </div>
      <span class="pull-right copyright">&copy;10EQS 2016. All Rights Reserved</span></div>
  </div>
  <div id="privacy-popup" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <?php
            $block = module_invoke('block', 'block', 'view', 39);
            echo $block['content'];
          ?>
        </div>
        <div class="modal-footer" style="border-top: none;">
          <button type="reset" class="popup-cancel-button  cancel-btn js-modal-close" data-dismiss="modal">Back</button>
        </div>
      </div>
    </div>
  </div>
</footer>
<div id="contact-popup" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <?php
            $block = module_invoke('webform', 'block', 'view', 'client-block-64');
            print $block['content'];
          ?>
        </div>
      </div>
    </div>
</div>