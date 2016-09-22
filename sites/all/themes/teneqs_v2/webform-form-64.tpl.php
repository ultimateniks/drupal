<?php
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

if(!empty($_SESSION['form_values'])){
  $form['submitted']["contact_name"]['#value'] = $_SESSION['form_values']["contact_name"];
  $form['submitted']["email"]['#value'] = $_SESSION['form_values']["email"];
  $form['submitted']["company_name"]['#value'] = $_SESSION['form_values']["company_name"];
  $form['submitted']["titlerole"]['#value'] = $_SESSION['form_values']["titlerole"];
  $form['submitted']["comments_questions"]['#value'] = $_SESSION['form_values']["comments_questions"];
  //$form['submitted']["attach_file"]['#value'] = $_SESSION['form_values']["attach_file"];
  unset($_SESSION['form_values']);
}
?>
      


                    <div class="modal-body" style="overflow-y: auto;">
                      <h5 class="text-left">Contact</h5>
                       <form enctype="multipart/form-data" class="webform-client-form" id="webform-client-form-64" method="post" accept-charset="UTF-8" action="/about10EQS/contact_us/clients">
                       <?php if(!empty($_SESSION['contact_us_error'])){?>
                        <div class="row">
                          <div class="col-sm-12">
                            <?php foreach($_SESSION['contact_us_error']['error'] as $error){
                              print '<div class="error">'.$error.'</div>';
                            }
                            unset($_SESSION['contact_us_error']);
                            ?>
                          </div>
                        </div>
                        <?php } ?>
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
                          <button type="reset" class="popup-cancel-button  cancel-btn js-modal-close" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="submit-btn" id="edit-submit" name="op">Submit</button>
                        </div>
                      </form>
                    </div>
                    <?php print preg_replace('/<div[^>]*>|<\/div>/is', '', drupal_render($form)); ?>