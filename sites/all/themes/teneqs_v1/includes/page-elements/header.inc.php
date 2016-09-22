<?php
  $primary_links_tree = menu_tree_page_data('menu-10eqs');
  $primary_links_count = count($primary_links_tree);
  $destination = drupal_get_destination();
  if ($destination) {
	$destination_arr = explode('destination=', $destination);
	$url = urldecode($destination_arr[1]);
  }
  if ($primary_links_count) {
    foreach ($primary_links_tree as $key => $details) {
      $below_count = 0;
      $below_count = count($details['below']);
	  if ($below_count >= 1 && is_array($details['below'])) {
	    foreach ($details['below'] as $sub_key => $submenu_details) {
          if ($url == $submenu_details['link']['link_path']) {
		    $submenu_url = $details['link']['link_path'];
			$_SESSION['custom_breadcrumb'][0] = $details['link']['title'];
			$_SESSION['custom_breadcrumb'][1] = $details['link']['link_path'];
          }
		  if (count($submenu_details['below']) >= 1 && is_array($submenu_details['below'])) {
		    foreach ($submenu_details['below'] as $sub_sub_key => $menu_sub_submenu_details) {
			  if ($url == $menu_sub_submenu_details['link']['link_path']) {
		        $submenu_url = $details['link']['link_path'];
			    $_SESSION['custom_breadcrumb_third_level'][0][0] = $details['link']['title'];
			    $_SESSION['custom_breadcrumb_third_level'][0][1] = $details['link']['link_path'];
			    $_SESSION['custom_breadcrumb_third_level'][1][0] = $submenu_details['link']['title'];
			    $_SESSION['custom_breadcrumb_third_level'][1][1] = $submenu_details['link']['link_path'];
			  }
			}
		  }
		  if ($primary_links_tree[$key]['below'][$sub_key]['link']['hidden']) {
		    unset($primary_links_tree[$key]['below'][$sub_key]);
		  }
		}
	  }
	}
  }
?>
        <div id="header">
            <div class="login-panel-outer">      
                <div class="login-panel">            	
                    <ul>
					  <?php if (!$user->uid) { ?>
                        <li><a href="<?php echo url('https://app.10eqs.com/10eqs/login.html', array('absolute' => TRUE)); ?>" target="_blank"><span class="arrow">Login</span></a></li>
                        <li><a href="<?php echo url('https://app.10eqs.com/10eqs/register.html', array('absolute' => TRUE)); ?>" target="_blank"><span class="arrow">Register</span></a></li>
					  <?php } else { ?>
                        <li><a href="<?php echo url('logout'); ?>"><span class="arrow">Logout</span></a></li>
					  <?php } ?>
                        <li><a href="<?php echo url('contact_us'); ?>" class="fancybox"><span>Contact Us +</span></a></li>
                    </ul>                
                </div>
            </div>
            <div class="logo-nav">
	            <!--<div class="logo"><a href="<?php //echo url(''); ?>">Home</a></div>-->
				<?php print '<div class="logo"><a href="' . url('') . '"><img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" /></a></div>'; ?>
	            <div class="nav">
                    <ul class="sf-menu">
					    <?php
						  if ($primary_links_count) {
							$j = 1;
						    foreach ($primary_links_tree as $key => $details) {
							  $below_count = 0;
							  $below_count = count($details['below']);
						?>
								<li class="nav-<?php echo strtolower($details['link']['link_title']); echo $j == $primary_links_count ? ' last' : ''; echo $url == $details['link']['link_path'] || $details['link']['link_path'] == $submenu_url ? ' on' : ''; ?>">
									<a href="<?php echo $details['link']['link_path'] == '<front>' ? url('') : url($details['link']['link_path']); ?>" onclick="ga('send', 'event', 'menu-10eqs', 'click', '<?php echo strtolower($details['link']['link_title']); ?>');"><span><?php echo $details['link']['link_title']; ?></span></a>
									<?php if ($below_count >= 1 && is_array($details['below'])) { $i = 1; ?>
										<ul>
										  <?php foreach ($details['below'] as $key => $submenu_details) { ?>
										    <li <?php echo $below_count == 1 ? 'class="single"' : ($i == 1 ? 'class="first"' : ($i == $below_count ? 'class="last"' : '')); ?>><a href="<?php echo url($submenu_details['link']['link_path']); ?>" onclick="ga('send', 'event', 'menu-10eqs', 'click', '<?php echo $submenu_details['link']['link_title']; ?>');"><span><?php echo $submenu_details['link']['link_title']; ?></span></a></li>
										  <?php $i++; } ?>
										</ul>
								    <?php } ?>
								</li>
						<?php
						      $j++;
						    }
						  }
						?>
                    </ul>                            
                </div>
            </div>
        </div>