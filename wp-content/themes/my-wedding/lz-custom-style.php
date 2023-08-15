<?php 

	$my_wedding_custom_style = '';
	
	// Logo Size
	$my_wedding_logo_top_margin = get_theme_mod('my_wedding_logo_top_margin');
	$my_wedding_logo_bottom_margin = get_theme_mod('my_wedding_logo_bottom_margin');
	$my_wedding_logo_left_margin = get_theme_mod('my_wedding_logo_left_margin');
	$my_wedding_logo_right_margin = get_theme_mod('my_wedding_logo_right_margin');

	if( $my_wedding_logo_top_margin != '' || $my_wedding_logo_bottom_margin != '' || $my_wedding_logo_left_margin != '' || $my_wedding_logo_right_margin != ''){
		$my_wedding_custom_style .=' .logo {';
			$my_wedding_custom_style .=' margin-top: '.esc_attr($my_wedding_logo_top_margin).'px;
			margin-bottom: '.esc_attr($my_wedding_logo_bottom_margin).'px;
			margin-left: '.esc_attr($my_wedding_logo_left_margin).'px;
			margin-right: '.esc_attr($my_wedding_logo_right_margin).'px;';
		$my_wedding_custom_style .=' }';
	}

	// Site Title Font Size
	$my_wedding_site_title_fontsize = get_theme_mod('my_wedding_site_title_fontsize');
	if( $my_wedding_site_title_fontsize != ''){
		$my_wedding_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$my_wedding_custom_style .=' font-size: '.esc_attr($my_wedding_site_title_fontsize).'px;';
		$my_wedding_custom_style .=' }';
	}

	// Site Tagline Font Size
	$my_wedding_site_tagline_font_size = get_theme_mod('my_wedding_site_tagline_font_size');
	if( $my_wedding_site_tagline_font_size != ''){
		$my_wedding_custom_style .=' .logo p.site-description {';
			$my_wedding_custom_style .=' font-size: '.esc_attr($my_wedding_site_tagline_font_size).'px;';
		$my_wedding_custom_style .=' }';
	}

	// Header Image
	$header_image_url = my_wedding_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$my_wedding_custom_style .=' #inner-pages-header {';
			$my_wedding_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$my_wedding_custom_style .=' }';
		$my_wedding_custom_style .=' .header-overlay {';
			$my_wedding_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$my_wedding_custom_style .=' }';
	} else {
		$my_wedding_custom_style .=' #inner-pages-header {';
			$my_wedding_custom_style .=' background: linear-gradient(0deg,#fff,#42c1ca 80%) no-repeat; ';
		$my_wedding_custom_style .=' }';
	}

	$my_wedding_slider_hide_show = get_theme_mod('my_wedding_slider_hide_show',false);
	if( $my_wedding_slider_hide_show == true){
		$my_wedding_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$my_wedding_custom_style .=' display:none;';
		$my_wedding_custom_style .=' }';
	}

	// Copyright padding
	$my_wedding_copyright_padding = get_theme_mod('my_wedding_copyright_padding');
	if( $my_wedding_copyright_padding != ''){
		$my_wedding_custom_style .=' .site-info {';
			$my_wedding_custom_style .=' padding-top: '.esc_attr($my_wedding_copyright_padding).'px; padding-bottom: '.esc_attr($my_wedding_copyright_padding).'px;';
		$my_wedding_custom_style .=' }';
	}

	//Slider color
	$my_wedding_slider_color = get_theme_mod('my_wedding_slider_color');

	if ( $my_wedding_slider_color != '') {
		$my_wedding_custom_style .=' #slider h2 a, #slider .carousel-caption p,#slider .slider-time {';
			$my_wedding_custom_style .=' color:'.esc_attr($my_wedding_slider_color).';';
		$my_wedding_custom_style .=' }';
	}

	//About color
	$my_wedding_about_color = get_theme_mod('my_wedding_about_color');

	if ( $my_wedding_about_color != '') {
		$my_wedding_custom_style .=' .groom-box h3 a, .bride-box h3 a  {';
			$my_wedding_custom_style .=' color:'.esc_attr($my_wedding_about_color).';';
		$my_wedding_custom_style .=' }';
	}