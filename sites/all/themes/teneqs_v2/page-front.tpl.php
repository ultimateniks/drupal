<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', '<?php echo $env_webserver == 'local' || $env_webserver == 'dev' ? 'UA-27991560-1' : 'UA-9891954-5'; ?>', 'auto');
    ga('send', 'pageview');
  </script>
<title><?php print $head_title; ?></title>  
<?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts; ?>
<?php global $theme_path; ?>


</head>
<body>
<div id="home-top">
<?php include_once($theme_path.'/include/header.php'); ?>
<div class="clear"></div>
  <div class="home-page-heading">
    <h1>Leverage The Crowd to Get Things Done.</h1>
  </div>
</div>
 <?php if ($content) { ?>
			  <?php print $content; ?>
		<?php } ?>

<?php include_once($theme_path.'/include/footer.php'); ?>


</body>
</html>