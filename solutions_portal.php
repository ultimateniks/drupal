<?php
  include_once './includes/bootstrap.inc';
  drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
if(isset($_POST['email'])) {
  //include('mail.php');
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "travis@digitalrefinery.org";
	$email_to2 = "chris.erwing@10eqs.net";
	
	$email_subject = "10EQS Solutions Portal Inquiry";
	
	
	function died($error) {
		// your error code can go here
		echo "We're sorry, but there's errors found with the form you submitted.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['first_name']) ||
		!isset($_POST['last_name']) ||
		!isset($_POST['company']) ||
		!isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
		!isset($_POST['comments'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');		
	}
	
	$first_name = $_POST['first_name']; // required
	$last_name = $_POST['last_name']; // required
	$email_from = $_POST['email']; // required
	$company = $_POST['company'];
	$telephone = $_POST['telephone']; // not required
	$comments = $_POST['comments']; // required
	
	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
	$string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
  	$error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
  	$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Solutions Portal inquiry details below.<br /><br />";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "First Name: " . clean_string($first_name) . "<br />";
	$email_message .= "Last Name: " . clean_string($last_name) . "<br />";
	$email_message .= "Email: " . clean_string($email_from) . "<br />";
	$email_message .= "Company: " . clean_string($company) . "<br />";
	$email_message .= "Telephone: " . clean_string($telephone) . "<br />";
	$email_message .= "Comments: " . clean_string($comments) . "<br />";
	
	
// create email headers
$headers = 'From: ' . $email_from . "\r\n".'Reply-To: ' . $email_from . "\r\n" . 'Content-Type: text/html' . "\r\n" . 'X-Mailer: PHP/' . 
phpversion();
$status_1 = @mail($email_to, $email_subject, $email_message, $headers);
$status_2 = @mail($email_to2, $email_subject, $email_message, $headers);
}
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>10EQS Solutions Portal</title>
	<link rel="stylesheet" type="text/css" href="solutionsportal/style.css" />
</head>

<body>
<?php if (isset($_POST['email']) && ($status_1 == 1 || $status_2 == 1)) {
echo '<div id="cover">
	<div id="gotohome">
		Thank you for using the 10EQS Solutions Portal. We will contact you soon with more information.<br> <a href="./" target="_parent"><b>Click Here to return to 10EQS.com</b></a>
		</div>
</div>';
} ?>


	<div id="wrap" class="container">
		<header>
			<div class="header_back" title="10EQS Solutions Portal - Rapid Project Scoping and Answers on Demand" alt="10EQS Solutions Portal - Rapid Project Scoping and Answers on Demand">
				<a href="./solutions_portal.php" class="logo_10eqs" title="10EQS Solutions Portal" title="10EQS Solutions Portal"></a>
			</div>
		</header>
		
					<h1>What 10EQS can do for you</h1>
					<div id="whatcan">
						<ul class="wcan">
							<li class="item11">Thinking of entering a new market or introducing a 					new product or service line?</li>
							<li class="item12">Seeking to address issues with growth and profitability?</li>
							<li class="item14">Want to better understand your competitors and industry best practices? </li>
							<li class="item13">Need to improve you CSR and ESG capabilities?</li>
							
			</ul><br>
			<span class="findout">Find out how 10EQS helps our blue chip clients address critical business challenges like these. Use the 10EQS solution portal to access in depth examples of our work, to find out more about how we deliver, and to understand how we can help you with your specific topic.</span><br><br><br>
		</div>
		<div class="provide">
			<h2>What We Provide</h2>
			<ul>
				<li>Marketing Sizing</li>
				<li>Value Chain Analysis</li>
				<li>Best Practices</li>
				<li>Cost Benchmarking</li>
				<li>Deal Due Diligence</li>
				<li>Competitive Landscapes</li>
				<li>Technology and Innovation Surveys</li>
				<li>Regulatory Scans</li>
			</div>
			<div id="clients">
				<h2>Our Clients</h2>
				<img src="solutionsportal/images/clients.png">
			</div>
			<div id="industries">
				<h2>Industries We Serve</h2>
				
				<ul>
					<li>Financial Services</li>
					<li>High-Tech and E-Commerce</li>
					<li>Media and Telecommunications</li>
					<li>Energy and Utilities</li>
					<li>Clean Energy and Green </li>
					<li class="item21">Transportation and Logistics</li>
					<li class="item22">Metals and Mining</li>
					<li class="item23">Consumer and Retail</li>
					<li class="item24">Life Sciences</li>
					<li class="item25">and more</li>
					</ul>
			</div>
			
			<div class="clear pt10"></div>
				 
				<div id="promise" >
					<h3>Our Promise</h3>
					<div id="steps"><img src="solutionsportal/images/steps.png"></div>
					<div id="moveover"><span class="steptitle">The Right Answers</span><br>
						<span class="promtype">Get custom solutions developed using a global team of experts ideally suited for any topic in any area of specialization. Exactly what you need, when you need it.</span>
						<br><br><span class="steptitle">Speed</span><br>
						<span class="promtype">We find the experts with the required knowledge for each task. There is no time consuming “learning curve.”</span><br>
						<br><br><span class="steptitle">Trusted & Secure</span><br>
						<span class="promtype">Each of our clients is protected by our industry leading confidentiality and compliance framework.</span>
						<br><br><span class="steptitle">The Bottom Line</span><br>
					<span class="promtype">Flexible, high-quality solutions at unprecedented speed and cost-points</span>
					</div>
				</div>
					
					
						<div id="solutionform">
							<div id="getstarted">
								<h4>Get Started Today with the free solutions portal</h4>
								
							<form name="htmlform" method="post" action="solutions_portal.php">
														<table width="558" >
														<td width="80" ></tr>
														<tr>
														 <td height="10" valign="top" style="text-align:right">
														  <label for="first_name">First Name *</label>
														 </td>
														 <td width="372" valign="top">
														  <input  type="text" name="first_name" maxlength="50" size="30">
														 </td>
														</tr>

														<tr>
														 <td height="10" valign="top"" style="text-align:right">
														  <label for="last_name">Last Name *</label>
														 </td>
														 <td valign="top">
														  <input  type="text" name="last_name" maxlength="50" size="30">
														 </td>
														</tr>
														<tr>
														 <td height="10" valign="top" style="text-align:right">
														  <label for="email">Email Address *</label>
														 </td>
														 <td valign="top">
														  <input  type="text" name="email" maxlength="80" size="30">
														 </td>

														</tr>
														<tr>
														 <td height="10" valign="top" style="text-align:right">
														  <label for="company">Company *</label>
														 </td>
														 <td valign="top">
														  <input  type="text" name="company" maxlength="80" size="30">
														 </td>

														</tr>
														<tr>
														 <td height="30" valign="top" style="text-align:right">
														  <label for="telephone">Phone</label>
														 </td>
														 <td valign="top">
														  <input  type="text" name="telephone" maxlength="30" size="30">
														 </td>
														</tr>
														<tr>
														 <td height="15" colspan="2" valign="bottom">
														  <label for="comments">Brief description of challenge or question:*</label>

														 </td>
														 </tr>
														<tr>
														 <td colspan="2" style="text-align:center"><textarea  name="comments" cols="75" rows="6"></textarea></td>
														</tr>
														<tr >
														  <td colspan="2" style="text-align:right"><input type="image"  name="submit" value="_" src="solutionsportal/images/trans.png" class="submitbutton" style="border:0"></td>
														  </tr>
														</table>
														</form></div>
						
						<div id="formdes">
							The 10EQS Solutions portal is your direct connection to industry leading expertiese on any of your business challenges.</div>
							<div id="disclaimer">
								All information is confidential and protected by our terms of service. 
								Most inqueries are turned around in 24 working hours or less and 
								in some cases a follow up call is needed to better understand your 
								challenge. Please provide accurate information.</div></div>

								<div style="clear:both; padding-top:70px;"></div>
								<div id="footer"><div id="footer-inner" class="region region-footer">
<?php
	$block = module_invoke('block', 'block', 'view', 16);
  echo $block['content'];
  //exit();
?></div></div>
	</div>
</body>
</html>