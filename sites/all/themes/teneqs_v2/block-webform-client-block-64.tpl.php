<?php
print "BLOCK";
//var_dump($form['submitted']);
unset($form['submitted']['contact_phone']);

unset($form['submitted']["contact_name"]["#title"]);
unset($form['submitted']["email"]["#title"]);
unset($form['submitted']["company_name"]["#title"]);
unset($form['submitted']["titlerole"]["#title"]);
unset($form['submitted']["comments_questions"]["#title"]);
unset($form['submitted']["attach_file"]["#title"]);

$form['submitted']["contact_name"]["#attributes"]["placeholder"] = "Name";
$form['submitted']["email"]["#attributes"]["placeholder"] = "Email";
$form['submitted']["company_name"]["#attributes"]["placeholder"] = "Company";
$form['submitted']["titlerole"]["#attributes"]["placeholder"] = "Title";
$form['submitted']["comments_questions"]["#attributes"]["placeholder"] = "Message";
$form['submitted']["attach_file"]["#attributes"]["placeholder"] = "Attachment";

$form['submitted']["contact_name"]["#attributes"]["required"] = "true";
$form['submitted']["email"]["#attributes"]["required"] = "true";
$form['submitted']["company_name"]["#attributes"]["required"] = "true";
$form['submitted']["titlerole"]["#attributes"]["required"] = "true";
$form['submitted']["comments_questions"]["#attributes"]["required"] = "true";
$form['submitted']["attach_file"]["#attributes"]["required"] = "true";

?>
      


                    <div class="modal-body">
                      <h5 class="text-left">Contact</h5>
                       <form enctype="multipart/form-data" class="webform-client-form" id="webform-client-form-64" method="post" accept-charset="UTF-8" action="/about10EQS/contact_us/clients_new">
                        <div class="row">
                          <div class="col-sm-12">
                            <?php print preg_replace('/<div[^>]*>|<\/div>/is', '', drupal_render($form['submitted']['contact_name'])); ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <?php print preg_replace('/<div[^>]*>|<\/div>/is', '', drupal_render($form['submitted']['email'])); ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-7">
                            <?php print preg_replace('/<div[^>]*>|<\/div>/is', '', drupal_render($form['submitted']['company_name'])); ?>
                          </div>
                          <div class="col-xs-5">
                            <?php print preg_replace('/<div[^>]*>|<\/div>/is', '', drupal_render($form['submitted']['titlerole'])); ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <?php print preg_replace('/<div[^>]*>|<\/div>/is', '', drupal_render($form['submitted']['comments_questions'])); ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <?php print preg_replace('/<div[^>]*>|<\/div>/is', '', drupal_render($form['submitted']['attach_file'])); ?>
                          </div>
                        </div>
                        <div class="pull-right">
                          <button type="reset" class="popup-cancel-button  cancel-btn js-modal-close">Cancel</button>
                          <button type="submit" class="submit-btn" id="edit-submit" name="op">Submit</button>
                        </div>
                      </form>
                    </div>
                    <?php print preg_replace('/<div[^>]*>|<\/div>/is', '', drupal_render($form)); ?>