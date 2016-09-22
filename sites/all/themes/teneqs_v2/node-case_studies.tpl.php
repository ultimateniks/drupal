<div class="case-study-head">
  <div class="container">
    <p class="backto-engage"><a href="/engage_us#<?php print_r($node->field_case_study_type[0][value]); ?>">Back to Engage Us</a></p>
    <div class="case-study-name"> <span><?php print $title; ?></span>
      <p><?php print($node->field_case_study_title[0][value]); ?>
         
      </p>


    </div>
  </div>
</div>



<div class="case-study-details">
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <div class="client-context">
          <div class="col-sm-7">
            
                     <?php print($node->field_client_context[0][value]); ?>

          </div>
          <div class="col-sm-5"><img src="/<?php print($node->field_case_study_image[0][filepath]); ?>" width="100%" alt=""/></div>
        </div>
        <div class="benefits-solutions">
          <div class="col-sm-6">
               
                <?php print($node->field_10eqs_solution[0][value]); ?>


          </div>
          <div class="col-sm-6">
            
              <?php print($node->field_client_benefits[0][value]); ?> 
               

          </div>
        </div>
      </div>
      <?php print $right; ?>
    </div>
  </div>
</div>
<div class="clear"></div>
