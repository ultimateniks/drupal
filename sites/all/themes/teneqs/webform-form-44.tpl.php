<script src="/sites/all/themes/teneqs/jquery.validate.js" language="javascript" type="text/javascript"></script>
<?php

$form['submitted']['contact_name']['#title'] = '';
$form['submitted']['contact_name']['#prefix'] = '';
$form['submitted']['contact_name']['#suffix'] = '';

$form['submitted']['titlerole']['#title'] = '';
$form['submitted']['titlerole']['#prefix'] = '';
$form['submitted']['titlerole']['#suffix'] = '';

$form['submitted']['company_name']['#title'] = '';
$form['submitted']['company_name']['#prefix'] = '';
$form['submitted']['company_name']['#suffix'] = '';

$form['submitted']['email']['#title'] = '';
$form['submitted']['email']['#prefix'] = '';
$form['submitted']['email']['#suffix'] = '';

$form['submitted']['contact_phone']['#title'] = '';
$form['submitted']['contact_phone']['#prefix'] = '';
$form['submitted']['contact_phone']['#suffix'] = '';

$form['submitted']['commentsquestions']['#title'] = '';
$form['submitted']['commentsquestions']['#prefix'] = '';
$form['submitted']['commentsquestions']['#suffix'] = '';
?>
<style>
#block-webformblock-44{
	clear:both;
}
h2{padding:0px; margin:0px; line-height:normal;}
#block-webformblock-44 .title{
	-moz-background-inline-policy:continuous;
	background:none repeat scroll 0 0 #D6D6D6;
	font-family:Arial,Helvetica,sans-serif;
	font-size:13px;
	font-weight:bold;
	padding:0px 0px 0px 10px;
	line-height:normal;
/*	height:1px;
	padding-left:10px;
	padding-top:5px;*/
}
#content-bottom .block h2.title{
    font-size:13px;
    margin-bottom:0;
    padding:6px 5px 1px 15px;
}
/*
html*#content-bottom .block h2.title{
    font-size:13px;
    margin-bottom:0;
    padding:5px 15px 5px 15px;
}*/
</style>
<?php
if((array_key_exists('webformerror1',$_SESSION) && $_SESSION["webformerror1"]!='') ||
    (array_key_exists('webformerror2',$_SESSION) && $_SESSION["webformerror2"]!='') ||
    (array_key_exists('webformerror3',$_SESSION) && $_SESSION["webformerror3"]!='')){
?>

<div class="web-error-msg">
<?php if(array_key_exists('webformerror1',$_SESSION) && $_SESSION["webformerror1"]!=''){
		echo $_SESSION["webformerror1"];echo '<br/>';
	}
?>
<?php if(array_key_exists('webformerror2',$_SESSION) && $_SESSION["webformerror2"]!=''){
		echo $_SESSION["webformerror2"];echo '<br/>';
	}
?>
<?php if(array_key_exists('webformerror3',$_SESSION) && $_SESSION["webformerror3"]!=''){
		echo $_SESSION["webformerror3"];
	}
?>
</div>
<?php
        }
?>
<div class="content" style="padding-left:10px;" id="webform_input">
	<div class="webform_getstarted">
	<ul>
		<li class="label_left">Contact Name<span title="This field is required." class="form-required">*</span>
		<li class="text_right webform_txtwidth"><?php print drupal_render($form['submitted']['contact_name']);?>


		<li class="label_left">Title/Role
		<li class="text_right webform_txtwidth"><?php print drupal_render($form['submitted']['titlerole']);?>


		<li class="label_left">Company Name<span title="This field is required." class="form-required">*</span>
		<li class="text_right webform_txtwidth"><?php print drupal_render($form['submitted']['company_name']);?>


		<li class="label_left">Email<span title="This field is required." class="form-required">*</span>
		<li class="text_right webform_txtwidth"><?php print drupal_render($form['submitted']['email']);?>


		<li class="label_left">Contact Phone
		<li class="text_right"><?php print drupal_render($form['submitted']['contact_phone']);?>


		<li class="label_left">Comments/Questions
		<li class="text_right"><?php print drupal_render($form['submitted']['commentsquestions']);?>

</ul>
</div>
    <div class="clear_new"></div>
	<div style="padding-left: 484px; padding-top: 10px; padding-bottom: 10px;font-weight:bold;"><input type="submit" class="form-submit webform_btn" value="Submit" id="edit-submit" name="op"/></div>
</div>
<div style="display:none;"><?php print drupal_render($form);?></div>
<?php 
	$_SESSION["webformerror1"]='';
	$_SESSION["webformerror2"]='';
	$_SESSION["webformerror3"]='';
	$_SESSION["webformContactName"]='';
	$_SESSION["webformTitle"]='';
	$_SESSION["webformCompanyName"]='';
	$_SESSION["webformEmail"]='';
	$_SESSION["webformContactPhone"]='';
	$_SESSION["webformComments"]='';
?>