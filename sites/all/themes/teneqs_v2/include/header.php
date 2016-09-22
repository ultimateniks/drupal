<?php 
if (arg(0) == 'node' && is_numeric(arg(1))) $nodeid = arg(1);
//print "NID".$nodeid; // show me your nid!
if(empty($_SESSION['CURRENT_PAGE'])){$_SESSION['CURRENT_PAGE'] = "node";}
if($nodeid != 64 && $nodeid != 137 ){
  $_SESSION['CURRENT_PAGE'] = "node/$nodeid";
}
//print "SESS".$_SESSION['CURRENT_PAGE']; 

?>
  <header>
    <div class="navbar-wrapper">
      <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
          <div class="container">
            <div class="row">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" id="navbarMenuIcon"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                 <?php if ($logo): ?>
            <div id="logo" class="site-logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="navbar-brand"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a>
            </div>
          <?php endif; ?>
                 </div>
              <div id="navbar" class="navbar-collapse collapse">
                <?php print $header; ?>
                <div class="login-contact">
                  <ul>
                    <li><a href="https://app.10eqs.com/10eqs/login.html?2" target="_blank">Login</a></li>
                    <li><a data-backdrop="static" data-keyboard="false" class="disable-scroll" href="javascript:;" data-toggle="modal" data-target="#contact-popup">Contact</a></li>
                  </ul>
              </div>
            </div>
          </div></div>
        </nav>
      </div>
    </div>
    <div class="clear"></div>
  </header>

