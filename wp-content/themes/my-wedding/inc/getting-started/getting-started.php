<?php
//about theme info
add_action( 'admin_menu', 'my_wedding_gettingstarted' );
function my_wedding_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'my-wedding'), esc_html__('About Theme', 'my-wedding'), 'edit_theme_options', 'my_wedding_guide', 'my_wedding_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function my_wedding_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'my_wedding_admin_theme_style');

//guidline for about theme
function my_wedding_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'my-wedding' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Software Company WordPress Theme', 'my-wedding' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'my-wedding' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'my-wedding' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'my-wedding' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'my-wedding' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'my-wedding' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'my-wedding' ); ?> <a href="<?php echo esc_url( MY_WEDDING_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'my-wedding' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'My Wedding is an all-around solution for you if you are planning to build a website for your wedding. It is the most suitable theme for marriage, engagement, wedding planners, couples, bride and groom, etc. This is such an elegant theme with amazing features and a highly sophisticated look for your website. It has a translation-ready design and makes use of shortcodes and widgets for the ease of users. There are live customization options and most importantly, you will see enough promotion options including social media and plenty of Call To Action Button (CTA). It is a modern theme with secure and clean codes written by expert developers and there are stunning CSS animations included in the design. Its user-friendly design is the USP and it consists of beautiful imagery with retina-ready pictures. Faster page load time is the result of highly optimized and SEO-friendly codes. As the design is Bootstrap-based, you will be able to easily edit the design without writing the codes. There are many sections included such as the Testimonial section for your clients to share their feedback, a wonderful banner, and much more. Get this mobile-friendly theme to start making your website and sail high on success.', 'my-wedding')?></p>
			<hr>
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free My Wedding Theme', 'my-wedding' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'my-wedding'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( MY_WEDDING_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'my-wedding'); ?></a>
			<a href="<?php echo esc_url( MY_WEDDING_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'my-wedding'); ?></a>
			<a href="<?php echo esc_url( MY_WEDDING_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'my-wedding'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/my-wedding.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'my-wedding'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'my-wedding'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'my-wedding'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>