<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '<?php echo $env_webserver == 'local' || $env_webserver == 'dev' ? 'UA-27991560-1' : 'UA-9891954-5'; ?>']);
    <?php echo $env_webserver == 'local' || $env_webserver == 'dev' ? "" : "_gaq.push(['_setDomainName', '.10eqs.com']);"; ?>
	_gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
<title><?php print $head_title; ?></title>
<?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts; ?>
<?php global $theme_path; ?>


</head>
<body>
 <div>
 <?php include_once($theme_path.'/include/header.php'); ?>
 </div>
 <?php if ($content)
  { ?>
  	<div style="text-align:center">
        <?php print $content; ?>
		<?php } ?>
	</div>
		
<?php include_once($theme_path.'/include/footer.php'); ?>


</body>
</html>
