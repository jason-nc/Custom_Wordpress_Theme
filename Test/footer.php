    <!-- start footer -->
    <footer class="site-footer gradient" role="contentinfo">            
        <div class="container"> 
            <!-- start .footer-info -->
            <div class="footer-info">
                <ul>
                    <li>
                        <a href="<?php echo site_url(); ?>"><?php echo get_theme_mod( 'footer_company_name'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_theme_mod( 'footer_address_page_url')); ?>?address=<?php echo urlencode (get_theme_mod( 'footer_address')); ?>"><?php echo get_theme_mod( 'footer_address'); ?></a>
                    </li>
                    <li class="last">
			<?php
				$phone = get_theme_mod( 'footer_phone_number');
				if(strlen($phone) == 10){
					$phone = '(' . substr($phone, 0, 3) . ') ' . substr($phone, 3, 3) . '.' . substr($phone, 6, 4);
				}
			?>
                        <a href="tel:<?php echo get_theme_mod( 'footer_phone_number'); ?>"><?php echo $phone; ?></a>
                    </li>
                </ul>
            </div>
            <!-- end .footer-info -->
            <!-- start .footer-social -->
            <div class="footer-social">
                <ul>
                    <li>
                        <a href="<?php echo esc_url(get_theme_mod( 'footer_facebook_url')); ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_theme_mod( 'footer_twitter_url')); ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_theme_mod( 'footer_youtube_url')); ?>"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_theme_mod( 'footer_google_plus_url')); ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_theme_mod( 'footer_linkedin_url')); ?>"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <!-- end .footer-social -->
            <!-- start .copyright -->
            <div class="copyright">
                <p><?php echo get_theme_mod( 'footer_copyright'); ?></p>
            </div>
            <!-- end .copyright -->               
            <!-- start .developer -->
            <div class="developer">
                <a class="inactive" href="<?php echo esc_url(get_theme_mod( 'footer_developer_url')); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/developer-logo.png" alt=""></a>
                <a class="active" href="<?php echo esc_url(get_theme_mod( 'footer_developer_url')); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/developer-logo-active.png" alt=""></a>
            </div>
            <!-- end .developer --> 
            <div class="clear"></div>            
        </div> 
    </footer>
    <!-- end footer -->

    <!-- start #back-to-top -->
    <div id="back-to-top" class="visible-phone">Back to top</div>
    <!-- end #back-to-top -->
    
</div>
<!-- end div #page -->         

<!-- jQuery library -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js" ></script>
<!-- Easing Plugin -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/easing/jquery.easing.1.3.js" ></script>
<!-- Cycle Plugin -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cycle2/jquery.cycle2.min.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cycle2/jquery.cycle2.swipe.min.js" ></script>
<!-- Our template functions -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/functions.js" ></script>