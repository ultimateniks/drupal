        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>        
        <script type="text/javascript" src="js/jquery.easing.1.1.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/hoverIntent.js"></script>  
        <script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.easing-1.3.pack.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
                                
		<script type="text/javascript">          
            $(document).ready(function() { 
                $('ul.sf-menu').superfish({
					delay:100,
					dropShadows: false,
					autoArrows: false,
					speed: 'fast'	
				}); /* dropdown menus */
				$(".fancybox").fancybox(); /* fancybox (lightbox) */
				$('.tabs').tabs({ /* tabs (jquery ui) */
					fx: { opacity: 'toggle', 
						  duration:'fast' } ,
						  cache: true
				});				
            });         
        </script>        