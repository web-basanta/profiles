@include('codes.header')
    <style id="wp-emoji-styles-inline-css" type="text/css">

        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-includes/css/dist/block-library/style.min.css?ver=6.4.3" type="text/css" media="all">
    {{-- <style id="classic-theme-styles-inline-css" type="text/css">
    /*! This file is auto-generated */
    .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
    </style> --}}
    {{-- <link rel="stylesheet" id="fw-ext-builder-frontend-grid-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/plugins/lmpixels-framework/framework/extensions/builder/static/css/frontend-grid.css?ver=1.0.0" type="text/css" media="all"> --}}
    {{-- <link rel="stylesheet" id="fw-ext-forms-default-styles-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/plugins/lmpixels-framework/framework/extensions/forms/static/css/frontend.css?ver=3.0.0" type="text/css" media="all"> --}}
    <link rel="stylesheet" id="bootstrap-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/bootstrap.min.css?ver=4.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="normalize-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/normalize.css?ver=1.0" type="text/css" media="all">
    <link rel="stylesheet" id="owl-carousel-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/owl.carousel.css?ver=2.0" type="text/css" media="all">
    <link rel="stylesheet" id="animate-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/transition-animations.css?ver=1.0" type="text/css" media="all">
    {{-- <link rel="stylesheet" id="magnific-popup-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/magnific-popup.css?ver=1.1.0" type="text/css" media="all">
    <link rel="stylesheet" id="pe-icon-7-stroke-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css?ver=1.0" type="text/css" media="all"> --}}
    <link rel="stylesheet" id="dashicons-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-includes/css/dashicons.min.css?ver=6.4.3" type="text/css" media="all">
    <link rel="stylesheet" id="fw-option-type-icon-v2-pack-linecons-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/plugins/lmpixels-framework/framework/static/libs/linecons/css/linecons.css?ver=3.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="fw-option-type-icon-v2-pack-font-awesome-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/plugins/lmpixels-framework/framework/static/libs/font-awesome/css/font-awesome.min.css?ver=3.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="fw-option-type-icon-v2-pack-entypo-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/plugins/lmpixels-framework/framework/static/libs/entypo/css/entypo.css?ver=3.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="fw-option-type-icon-v2-pack-linearicons-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/plugins/lmpixels-framework/framework/static/libs/lnr/css/lnr.css?ver=3.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="fw-option-type-icon-v2-pack-typicons-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/plugins/lmpixels-framework/framework/static/libs/typcn/css/typcn.css?ver=3.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="fw-option-type-icon-v2-pack-unycon-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/plugins/lmpixels-framework/framework/static/libs/unycon/unycon.css?ver=3.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="fw-option-type-icon-v2-pack-my_pack-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css?ver=3.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="leven-main-styles-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/main.css?ver=1.8.0" type="text/css" media="all">
    <link rel="stylesheet" id="leven-dark-styles-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/dark-styles.css?ver=1.8.0" type="text/css" media="all">
    <link rel="stylesheet" id="leven-customization-css" href="https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/themes/leven/css/customization.css?ver=1.8.0" type="text/css" media="all">
    <style id="leven-customization-inline-css" type="text/css">
    
            @media only screen and (min-width: 1421px){
                .page-container:not(.full-width-container) {
                    max-width: 1320px;
                    border-radius: 40px;
                    
                }
            }
    
            @media only screen and (max-width: 1420px) and (min-width: 991px) {
                .page-container:not(.full-width-container) {
                    max-width: 94%;
                    margin-left: auto;
                    margin-right: auto;
                    border-radius: 40px;
                    
                }
            }
    
            
            @media only screen and (min-width: 991px){
                .page-container.full-width-container {
                    max-width: 100%;
                    border-radius: 0;
                    margin: 0;
                }
                .site-footer {
                    border-radius: 0;
                }
                .page-content.single-post {
                    max-width: 1320px;
                    margin: 0 auto;
                }
    
                .post-content,
                .list-view .post-content,
                .list-view .post-navigation,
                .list-view .comments-area,
                .list-view .paging-navigation,
                .single-post .site-content .post-navigation,
                .single-post .site-content .comments-area {
                    max-width: 1320px;
                    margin-left: auto;
                    margin-right: auto;
                    padding-left: 50px;
                    padding-right: 50px;
                }
    
                .list-view article {
                    max-width: 1320px;
                    margin-left: auto;
                    margin-right: auto;
                }
            }
            .page-container.full-width-container {
                min-height: 100vh;
                padding-bottom: 120px;
            }
            .page-container.full-width-container .site-footer {
                position: absolute;
                margin: 60px 0 0;
                right: 0;
                left: 0;
                bottom: 0;
            }
            .lmpixels-scroll-to-top {
                bottom: 60px;
            }
            
    
            /* ============================================================================= 
            2. Typography
            ============================================================================= */
            body,
            p {
                font-family: "Poppins", Helvetica, sans-serif;
                font-size: 14px;
                font-weight: 0;
                font-style: normal;
                line-height: 1.75em;
                color: #d5d5d5;
            }
    
            .form-control,
            .form-control:focus,
            .has-error .form-control,
            .has-error .form-control:focus {
                font-family: "Poppins", Helvetica, sans-serif;
            }
    
            h1, h2, h3, h4, h5, h6 {
                font-family: "Poppins", Helvetica, sans-serif;
                font-weight: 600;
                font-style: normal;
                color: #f5f5f5;
            }
    
            .logo-text, .logo-symbol {
                font-family: "Poppins", Helvetica, sans-serif;
            }
    
            h1 {
                font-size: 32px;
                color: #f5f5f5;
            }
            h2 {
                font-size: 24px;
                color: #f5f5f5;
            }
            h3 {
                font-size: 18px;
                color: #f5f5f5;
            }
            h4 {
                font-size: 16px;
                color: #f5f5f5;
            }
            h5 {
                font-size: 14px;
                color: #f5f5f5;
            }
            h6 {
                font-size: 12px;
                color: #f5f5f5;
            }
    
            .testimonial-author,
            .info-list li .title {
                font-family: "Poppins", Helvetica, sans-serif;
                font-weight: 600;
                font-style: normal;
                color: #f5f5f5;
            }
    
            .timeline-item .item-period,
            .mobile-site-title {
                font-family: "Poppins", Helvetica, sans-serif;
            }
    
            .form-control,
            .form-control:focus,
            .has-error .form-control,
            .has-error .form-control:focus,
            input[type="search"],
            input[type="password"],
            input[type="text"],
            .header-search input.form-control {
                font-family: "Poppins", Helvetica, sans-serif;
                font-weight: 0;
                font-style: normal;
            }
    
            .btn-primary, .btn-secondary, button, input[type="button"], input[type="submit"] {
                font-family: "Poppins", Helvetica, sans-serif;
            }
    
    
            /* ============================================================================= 
            3. Logo
            ============================================================================= */
            .header-image img {
                
            height: auto;
            max-height: 50px;
            
                
            width: auto;
            max-width: 50px;
            
            }
    
    
            
            
    
            @media only screen and (max-width: 992px) {
                .header-image img {
                    max-height: 30px;
                }
            }
    
    
            /* ============================================================================= 
            4. Backgrounds
            ============================================================================= */
            body {
                background-color: #007ced;
            }
    
            
        .lm-animated-bg {
            position: absolute;
            width: auto;
            height: auto;
            top: -18px;
            left: -18px;
            right: -18px;
            bottom: -18px;
            background-image: url(https://lmpixels.com/wp/leven-wp/full-width-dark/wp-content/uploads/sites/5/2019/12/main_bg_14.png);
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: -1;
        }
        
    
            @media only screen and (min-width: 991px) {
                .header.sticked {
                    background-color: ;
                }
            }
    
            .btn-primary:hover,
            .btn-primary:focus,
            button:hover,
            button:focus,
            input[type="button"]:hover,
            input[type="button"]:focus,
            input[type="submit"]:hover,
            input[type="submit"]:focus,
            .skill-percentage,
            .service-icon,
            .lm-pricing .lm-package-wrap.highlight-col .lm-heading-row span:after,
            .portfolio-page-nav > div.nav-item a:hover,
            .testimonials.owl-carousel .owl-nav .owl-prev:hover,
            .testimonials.owl-carousel .owl-nav .owl-next:hover,
            .clients.owl-carousel .owl-nav .owl-prev:hover,
            .clients.owl-carousel .owl-nav .owl-next:hover,
            .lm-content-slider.owl-carousel .owl-nav .owl-prev:hover,
            .lm-content-slider.owl-carousel .owl-nav .owl-next:hover,
            .fw-pricing .fw-package-wrap.highlight-col .fw-heading-row span:after,
            .cat-links li a,
            .cat-links li a:hover,
            .calendar_wrap td#today,
            .nothing-found p,
            .blog-sidebar .sidebar-title h4:after,
            .block-title h2:after,
            h3.comment-reply-title:after,
            .portfolio-grid figure .portfolio-preview-desc h5:after,
            .preloader-spinner,
            .info-list li .title:after,
            .header .social-links a:hover,
            .clients.owl-carousel .owl-dot.active span,
            .clients.owl-carousel .owl-dot:hover span,
            .testimonials.owl-carousel .owl-dot.active span,
            .testimonials.owl-carousel .owl-dot:hover span,
            .lm-content-slider.owl-carousel .owl-dot.active span,
            .lm-content-slider.owl-carousel .owl-dot:hover span,
            .logo-symbol,
            .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
                background-color: #007ced;
            }
    
            .blog-sidebar .sidebar-item {
                background-color: #333333;
            }
    
    
    
    
            /* ============================================================================= 
            5. Colors
            ============================================================================= */
            a,
            .form-group-with-icon.form-group-focus i,
            .site-title span,
            .header-search button:hover,
            .header-search button:focus,
            .block-title h3 span,
            .header-search button:hover,
            .header-search button:focus,
            .ajax-page-nav > div.nav-item a:hover,
            .project-general-info .fa,
            .comment-author a:hover,
            .comment-list .pingback a:hover,
            .comment-list .trackback a:hover,
            .comment-metadata a:hover,
            .comment-reply-title small a:hover,
            .entry-title a:hover,
            .entry-content .edit-link a:hover,
            .post-navigation a:hover,
            .image-navigation a:hover,
            .portfolio-grid figure i,
            .share-buttons a:hover,
            .info-block-w-icon i,
            .lm-info-block i {
                color: #007ced;
            }
    
            a,
            .entry-meta:not(.entry-tags-share) a:hover {
                color: #0099cc;
            }
    
            a:hover,
            .post-navigation .meta-nav:hover {
                color: #006699;
            }
    
            .wp-block-pullquote.is-style-solid-color {
                background-color: #007ced;
            }
    
            .wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-background),
            .wp-block-button.is-style-outline .wp-block-button__link:active,
            .wp-block-button.is-style-outline .wp-block-button__link:focus,
            .wp-block-button.is-style-outline .wp-block-button__link:hover {
                background-color: #007ced;
            }
    
    
    
    
            /* ============================================================================= 
            6. Borders
            ============================================================================= */
            .logo-symbol,
            .btn-primary,
            button,
            input[type="button"],
            input[type="submit"],
            .btn-primary:hover,
            .btn-primary:focus,
            button:hover,
            button:focus,
            input[type="button"]:hover,
            input[type="button"]:focus,
            input[type="submit"]:hover,
            input[type="submit"]:focus,
            .form-control + .form-control-border,
            .timeline-item,
            .timeline-item:before,
            .page-links a:hover,
            .paging-navigation .page-numbers.current,
            .paging-navigation .page-numbers:hover,
            .paging-navigation .page-numbers:focus,
            .portfolio-grid figure .portfolio-preview-desc h5:after,
            .paging-navigation a:hover,
            .skill-container,
            .btn-primary, button, input[type="button"], input[type="submit"],
            .blog-sidebar ul li:before,
            .share-buttons a:hover,
            .testimonials.owl-carousel .owl-nav .owl-prev:hover,
            .testimonials.owl-carousel .owl-nav .owl-next:hover,
            .clients.owl-carousel .owl-nav .owl-prev:hover,
            .clients.owl-carousel .owl-nav .owl-next:hover,
            .lm-content-slider.owl-carousel .owl-nav .owl-prev:hover,
            .lm-content-slider.owl-carousel .owl-nav .owl-next:hover,
            .wp-block-pullquote,
            .wp-block-button .wp-block-button__link,
            .timeline-item h5.item-period,
            .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
            .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
                border-color: #007ced;
            }
    
    
            /* ============================================================================= 
            7. Page Titles and Page Content Area
            ============================================================================= */
            .page-title {
                background-color: #252525;
                border-top-color: #333333;
                border-bottom-color: #333333;
            }
    
            .page-title h1 {
                color: #f5f5f5;
                font-size: 44px;
                font-family: Poppins, Helvetica, sans-serif;
                font-weight: 600;
                font-style: normal;
                letter-spacing: 0px;
            }
    
            .page-title .page-subtitle h4 {
                color: #aaaaaa;
                font-size: 14px;
                font-family: Poppins, Helvetica, sans-serif;
                font-weight: 300;
                font-style: normal;
                letter-spacing: 0px;
            }
    
            @media only screen and (max-width: 991px) {
                .page-title h1 {
                    font-size: 35.2px;
                }
            }
    
            .page-container,
            .custom-page-content .page-content,
            .portfolio-page-content,
            .content-page-with-sidebar .page-content,
            .single-page-content.content-page-with-sidebar .content-area .page-content,
            .single-post .site-content .has-post-thumbnail .post-content {
                background-color: #222222;
            }
    
            .skills-second-style .skill-percentage,
            .skills-first-style .skill-percentage {
                border-color: #222222;
            }
    
    
            /* ============================================================================= 
            8. Header and Main Menu
            ============================================================================= */
            .site-main-menu li a,
            .site-main-menu li a:hover {
                font-family: "Poppins", Helvetica, sans-serif;
                font-size: 14px;
                font-weight: 0;
                font-style: normal;
                color: #f5f5f5;
                letter-spacing: 0px;
            }
    
            .site-main-menu > li > a {
                line-height: 3.3em;
            }
    
            /* ============================================================================= 
            9. Footer
            ============================================================================= */
            .site-footer {
                background-color: #252525;
                border-color: #333333;
            }
    
            .footer-copyrights p {
                color: #dddddd;
            }
    
            .site-footer .footer-social-links li a {
                color: #dddddd;
            }
    
            /* ============================================================================= 
            10. Custom Styles
            ============================================================================= */
            
            body {
    position: initial;
        -webkit-overflow-scrolling: touch;
    }
    
    @media only screen and (min-width: 991px) {
    .page-container.full-width-container {
    min-height: 100vh;
    padding-bottom: 120px;
    }
    .site-footer {
    position: absolute;
    margin: 60px 0 0;
    right: 0;
    left: 0;
    bottom: 0;
    }
    }
    
    * {
    word-break: keep-all;
    -moz-hyphens: manual;
    -ms-hyphens: manual;
    -webkit-hyphens: manual;
    hyphens: manual;
    }
    
    .page-scroll {
    min-height: -webkit-fill-available;
    }
    
    
    @media only screen and (max-width: 991px) {
    html {
        position: relative;
        height: auto;
        min-height: 100%;
        width: 100%;
        overflow-x: hidden;
        overflow-y: auto;
    }
    body {
    position: relative;
    overflow: hidden;
    height: auto;
    }
    }
    
    .portfolio-grid {
    position: relative;
    overflow: hidden;
    }
    
        
    </style>
</head>
<body>
    <h1>Making Your Own Profiles</h1>
    <div id="page_container" class="page-container full-width-container bg-move-effect theme-style-dark animated transition-puff-in" data-animation="transition-puff-in">

        <!-- Header -->
        <header id="site_header" class="header">
            <div class="header-content clearfix">
                
                                <!-- Text Logo -->
                <div class="text-logo">
                    <a href="https://lmpixels.com/wp/leven-wp/full-width-dark/">
                                                    <div class="logo-symbol">A</div>
                                                                             <div class="logo-text">Alex <span>Smith</span></div>
                                            </a>
                </div>
                <!-- /Text Logo -->
                

                <!-- Navigation -->
                <div class="site-nav mobile-menu-hide">
                    <!-- WooCommerce Cart -->
                    
                    <ul id="menu-classic-menu" class="leven-classic-menu site-main-menu"><li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-157 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-160"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/" aria-current="page" data-hover="1">About Me</a>
<ul class="sub-menu">
	<li id="menu-item-318" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-157 current_page_item menu-item-318"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/" aria-current="page" data-hover="1">About Me 1</a></li>
	<li id="menu-item-167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-167"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/home-2-about-me/" data-hover="1">About Me 2</a></li>
	<li id="menu-item-316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-316"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/about-me-3/" data-hover="1">About Me 3</a></li>
	<li id="menu-item-332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/about-me-4/" data-hover="1">About Me 4</a></li>
	<li id="menu-item-331" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-331"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/about-me-5/" data-hover="1">About Me 5</a></li>
	<li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/about-me-6/" data-hover="1">About Me 6</a></li>
	<li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/home/" data-hover="1">Home 1</a></li>
	<li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/home-2/" data-hover="1">Home 2</a></li>
</ul>
</li>
<li id="menu-item-174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/resume/" data-hover="1">Resume</a></li>
<li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-28"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/portfolio/" data-hover="1">Portfolio</a>
<ul class="sub-menu">
	<li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/portfolio-2-columns/" data-hover="1">Portfolio 2 Columns</a></li>
	<li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/portfolio/" data-hover="1">Portfolio 3 Columns</a></li>
	<li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/portfolio-4-columns/" data-hover="1">Portfolio 4 Columns</a></li>
	<li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/portfolio-5-columns/" data-hover="1">Portfolio 5 Columns</a></li>
</ul>
</li>
<li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-240"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/blog-2-columns/" data-hover="1">Blog</a>
<ul class="sub-menu">
	<li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/blog-2-columns/" data-hover="1">Blog 2 Columns</a></li>
	<li id="menu-item-95" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/blog-3-columns/" data-hover="1">Blog 3 Columns</a></li>
	<li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/blog/" data-hover="1">Blog List</a></li>
</ul>
</li>
<li id="menu-item-191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/contact/" data-hover="1">Contact</a></li>
<li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340"><a href="https://lmpixels.com/wp/leven-wp/full-width-dark/extra/" data-hover="1">Extra</a></li>
<li id="menu-item-333" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-333"><a target="_blank" rel="noopener" href="https://themeforest.net/item/leven-vcard-wordpress-theme/25289671" data-hover="1">Get it Now</a></li>
</ul>                </div>

                <a class="menu-toggle mobile-visible">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </header>
        <!-- /Header -->
<div id="main" class="site-main">
    <div id="main-content" class="single-page-content">
        <div id="primary" class="content-area">
                        
            <div id="content" class="page-content site-content single-post" role="main">
                
<article id="post-157" class="post-157 page type-page status-publish hentry">
	<div class="entry-content">
		<div class="fw-page-builder-content"><section class="fw-main-row ">
	<div class="fw-container">
		<div class="row">
	

<div class=" col-xs-12 col-sm-12 ">
    <div id="col_inner_877489360620b3037fc9b064f63a7372" class="fw-col-inner" data-paddings="15px 0px 15px 0px">
    	
<div id="home_content_954218bfd87cb3b458721f4a70135965" class="home-content">
    <div class="row flex-v-align">
        <div class="col-sm-12 col-md-5 col-lg-5">
            <div class="home-photo">
                <div class="hp-inner" style="background-position: calc(50% - 2.64786px) calc(50% + 3.40498px);"></div>
            </div>
        </div>

        <div class="col-sm-12 col-md-7 col-lg-7">
            <div class="home-text hp-left">
                                <div class="owl-carousel text-rotation owl-loaded owl-drag">                                    
                                            
                                            
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-911px, 0px, 0px); transition: all 0s ease 0s; width: 3189px;"><div class="owl-item cloned" style="width: 445.5px; margin-right: 10px;"><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div><div class="owl-item cloned" style="width: 445.5px; margin-right: 10px;"><div class="owl-dots disabled"></div></div><div class="owl-item active" style="width: 445.5px; margin-right: 10px;"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1572px, 0px, 0px); transition: all 0s ease 0s; width: 3146px;"><div class="owl-item cloned" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Frontend-developer</h4>
                        </div></div><div class="owl-item cloned" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Web Designer</h4>
                        </div></div><div class="owl-item" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Frontend-developer</h4>
                        </div></div><div class="owl-item animated owl-animated-in fadeIn active" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Web Designer</h4>
                        </div></div><div class="owl-item cloned" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Frontend-developer</h4>
                        </div></div><div class="owl-item cloned" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Web Designer</h4>
                        </div></div></div></div></div><div class="owl-item" style="width: 445.5px; margin-right: 10px;"><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div><div class="owl-item" style="width: 445.5px; margin-right: 10px;"><div class="owl-dots disabled"></div></div><div class="owl-item cloned" style="width: 445.5px; margin-right: 10px;"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1572px, 0px, 0px); transition: all 0s ease 0s; width: 3146px;"><div class="owl-item cloned" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Frontend-developer</h4>
                        </div></div><div class="owl-item cloned" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Web Designer</h4>
                        </div></div><div class="owl-item" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Frontend-developer</h4>
                        </div></div><div class="owl-item animated owl-animated-in fadeIn active" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Web Designer</h4>
                        </div></div><div class="owl-item cloned" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Frontend-developer</h4>
                        </div></div><div class="owl-item cloned" style="width: 514.328px; margin-right: 10px;"><div class="item">
                            <h4>Web Designer</h4>
                        </div></div></div></div></div><div class="owl-item cloned" style="width: 445.5px; margin-right: 10px;"><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots disabled"></div></div>
                                <h1>Alex Smith</h1>
                <p>Fusce tempor magna mi, non egestas velit ultricies nec. Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis, ut venenatis purus ex eu mi. Quisque imperdiet lacinia urna, a placerat sapien pretium eu.</p>
                                   <div class="home-buttons">
                                            <a href="https://themeforest.net/item/leven-vcard-wordpress-theme/25289671" target="_blank" id="" class="btn btn-primary">Download CV</a>
                                            <a href="https://lmpixels.com/wp/leven-wp/contact/" target="_self" id="" class="btn btn-secondary">Contact</a>
                                        </div>
                                </div>
        </div>
    </div>
</div>
	</div>
</div>
</div>

<div class="row">
	

<div class=" col-xs-12 col-sm-12 ">
    <div id="col_inner_c2094ed9c996102f2ef70b6125c4fbf5" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
	<div class="fw-divider-space" style="padding-top: 50px;"></div>

<div class="block-title">
    <h2>What I Do</h2>
</div>
	</div>
</div>
</div>

<div class="row">
	

<div class=" col-xs-12 col-sm-6 ">
    <div id="col_inner_3fa94961ec32117c71b91b80d4565769" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
<div id="info-list-65fae389d610b" class="info-list-w-icon">
	
			<div class="info-block-w-icon">
		    <div class="ci-icon">
		        		        	                        <i class="linecons linecons-pen"></i>
		                		    </div>
		    <div class="ci-text">
		        <h4>Copywrite</h4>
		        		        <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
		        		    </div>
		</div>
			<div class="info-block-w-icon">
		    <div class="ci-icon">
		        		        	                        <i class="linecons linecons-display"></i>
		                		    </div>
		    <div class="ci-text">
		        <h4>Web Design</h4>
		        		        <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
		        		    </div>
		</div>
	</div>
	</div>
</div>


<div class=" col-xs-12 col-sm-6 ">
    <div id="col_inner_931ccceee4bc772acc2735fc06fc1c62" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
<div id="info-list-65fae389d6365" class="info-list-w-icon">
	
			<div class="info-block-w-icon">
		    <div class="ci-icon">
		        		        	                        <i class="linecons linecons-shop"></i>
		                		    </div>
		    <div class="ci-text">
		        <h4>Ecommerce</h4>
		        		        <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
		        		    </div>
		</div>
			<div class="info-block-w-icon">
		    <div class="ci-icon">
		        		        	                        <i class="linecons linecons-megaphone"></i>
		                		    </div>
		    <div class="ci-text">
		        <h4>Marketing</h4>
		        		        <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
		        		    </div>
		</div>
	</div>
	</div>
</div>
</div>

<div class="row">
	

<div class=" col-xs-12 col-sm-12 ">
    <div id="col_inner_28268963d54f17fbf0a61a920e475dcf" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
	<div class="fw-divider-space" style="padding-top: 20px;"></div>

<div class="block-title">
    <h2>Testimonials</h2>
</div>


<div id="testimonials_f297ab5bd43f90472fa9bd5a896eb14a" class="testimonials owl-carousel owl-loaded owl-drag" data-mobile-items="1" data-tablet-items="2" data-items="2">

			<!-- Testimonial testimonials-65fae389d67cd -->

		
		<!-- End of Testimonial testimonials-65fae389d67cd -->
			<!-- Testimonial testimonials-65fae389d67cd -->

		
		<!-- End of Testimonial testimonials-65fae389d67cd -->
			<!-- Testimonial testimonials-65fae389d67cd -->

		
		<!-- End of Testimonial testimonials-65fae389d67cd -->
	<div class="owl-stage-outer owl-height" style="height: 224.688px;"><div class="owl-stage" style="transform: translate3d(-868px, 0px, 0px); transition: all 0s ease 0s; width: 3038px;"><div class="owl-item cloned" style="width: 424px; margin-right: 10px;"><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div></div><div class="owl-item cloned" style="width: 424px; margin-right: 10px;"><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div><div class="owl-item active" style="width: 424px; margin-right: 10px;"><div class="owl-stage-outer owl-height" style="height: 224.703px;"><div class="owl-stage" style="transform: translate3d(-1230px, 0px, 0px); transition: all 0s ease 0s; width: 4305px;"><div class="owl-item cloned" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-2.jpg" alt="Gary Johnson">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Gary Johnson</h5>
                    													<p class="testimonial-firm">Locost Accessories</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item cloned" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-3.jpg" alt="Daniel Pringle">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Etiam pretium ipsum quis justo dictum accumsan. Phasellus egestas odio a velit scelerisque.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Daniel Pringle</h5>
                    													<p class="testimonial-firm">Sagebrush</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item active" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-1.jpg" alt="Billy Adams">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a feugiat urna ullamcorper non.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Billy Adams</h5>
                    													<p class="testimonial-firm">Rolling Thunder</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item active" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-2.jpg" alt="Gary Johnson">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Gary Johnson</h5>
                    													<p class="testimonial-firm">Locost Accessories</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-3.jpg" alt="Daniel Pringle">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Etiam pretium ipsum quis justo dictum accumsan. Phasellus egestas odio a velit scelerisque.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Daniel Pringle</h5>
                    													<p class="testimonial-firm">Sagebrush</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item cloned" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-1.jpg" alt="Billy Adams">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a feugiat urna ullamcorper non.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Billy Adams</h5>
                    													<p class="testimonial-firm">Rolling Thunder</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item cloned" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-2.jpg" alt="Gary Johnson">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Gary Johnson</h5>
                    													<p class="testimonial-firm">Locost Accessories</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div></div></div></div><div class="owl-item active" style="width: 424px; margin-right: 10px;"><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div></div><div class="owl-item" style="width: 424px; margin-right: 10px;"><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div><div class="owl-item cloned" style="width: 424px; margin-right: 10px;"><div class="owl-stage-outer owl-height" style="height: 224.703px;"><div class="owl-stage" style="transform: translate3d(-1230px, 0px, 0px); transition: all 0s ease 0s; width: 4305px;"><div class="owl-item cloned" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-2.jpg" alt="Gary Johnson">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Gary Johnson</h5>
                    													<p class="testimonial-firm">Locost Accessories</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item cloned" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-3.jpg" alt="Daniel Pringle">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Etiam pretium ipsum quis justo dictum accumsan. Phasellus egestas odio a velit scelerisque.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Daniel Pringle</h5>
                    													<p class="testimonial-firm">Sagebrush</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item active" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-1.jpg" alt="Billy Adams">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a feugiat urna ullamcorper non.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Billy Adams</h5>
                    													<p class="testimonial-firm">Rolling Thunder</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item active" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-2.jpg" alt="Gary Johnson">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Gary Johnson</h5>
                    													<p class="testimonial-firm">Locost Accessories</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-3.jpg" alt="Daniel Pringle">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Etiam pretium ipsum quis justo dictum accumsan. Phasellus egestas odio a velit scelerisque.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Daniel Pringle</h5>
                    													<p class="testimonial-firm">Sagebrush</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item cloned" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-1.jpg" alt="Billy Adams">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a feugiat urna ullamcorper non.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Billy Adams</h5>
                    													<p class="testimonial-firm">Rolling Thunder</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div><div class="owl-item cloned" style="width: 605px; margin-right: 10px;"><div class="testimonial-item testimonial-testimonials-65fae389d67cd">

            <!-- Testimonial Content -->
            <div class="testimonial-content">
                <!-- Picture -->
                <div class="testimonial-picture">
                    					<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/testimonial-2.jpg" alt="Gary Johnson">
                </div>              
                <!-- /Picture -->

                <!-- Testimonial Text -->
                <div class="testimonial-text">
                    					   <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.</p>
                                    </div>
                <!-- /Testimonial Text -->

                <!-- Testimonial author information -->
                <div class="testimonial-author-info">
                    <h5 class="testimonial-author">Gary Johnson</h5>
                    													<p class="testimonial-firm">Locost Accessories</p>
											                </div>
                <!-- /Testimonial author information -->

                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>

                 <div class="testimonial-icon-big">
                    <i class="fa fa-quote-right"></i>
                </div>
            </div>
            <!-- /Testimonial Content -->

        </div></div></div></div></div><div class="owl-item cloned" style="width: 424px; margin-right: 10px;"><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>

	<div class="fw-divider-space" style="padding-top: 40px;"></div>

<div class="block-title">
    <h2>Clients</h2>
</div>

<div id="clients_ea5ef3c3560c2e0e923f56acc53b32d4" class="clients owl-carousel owl-loaded owl-drag" data-mobile-items="1" data-tablet-items="3" data-items="6">

			
			
			
			
			
			
			
	
<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 868px;"><div class="owl-item active" style="width: 279.333px; margin-right: 10px;"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1435px;"><div class="owl-item active" style="width: 195px; margin-right: 10px;"><div class="client-block">
						<a href="#" target="_blank" title="Golden Grid">
			
								<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/goldengrid.png" alt="Golden Grid">

						</a>
					</div></div><div class="owl-item active" style="width: 195px; margin-right: 10px;"><div class="client-block">
						<a href="#" target="_blank" title="Sweety">
			
								<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/sweety.png" alt="Sweety">

						</a>
					</div></div><div class="owl-item active" style="width: 195px; margin-right: 10px;"><div class="client-block">
						<a href="#" target="_blank" title="Magic Furnitures">
			
								<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/Magic-Furnitures-1.png" alt="Magic Furnitures">

						</a>
					</div></div><div class="owl-item active" style="width: 195px; margin-right: 10px;"><div class="client-block">
						<a href="#" target="_blank" title="LifeGuard">
			
								<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/lifeguard.png" alt="LifeGuard">

						</a>
					</div></div><div class="owl-item active" style="width: 195px; margin-right: 10px;"><div class="client-block">
						<a href="#" target="_blank" title="LESS">
			
								<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/client-7.png" alt="LESS">

						</a>
					</div></div><div class="owl-item active" style="width: 195px; margin-right: 10px;"><div class="client-block">
						<a href="#" target="_blank" title="Design Lovers">
			
								<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/designlovers.png" alt="Design Lovers">

						</a>
					</div></div><div class="owl-item" style="width: 195px; margin-right: 10px;"><div class="client-block">
						<a href="#" target="_blank" title="WordPress">
			
								<img decoding="async" src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/client-2.png" alt="WordPress">

						</a>
					</div></div></div></div></div><div class="owl-item active" style="width: 279.333px; margin-right: 10px;"><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div></div><div class="owl-item active" style="width: 279.333px; margin-right: 10px;"><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div></div>

	<div class="fw-divider-space" style="padding-top: 40px;"></div>
	</div>
</div>
</div>

<div class="row">
	

<div class=" col-xs-12 col-sm-12 ">
    <div id="col_inner_1a922c7897708c3a2eded034e6e7a555" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
<div class="block-title">
    <h2>Fun Facts</h2>
</div>
	</div>
</div>
</div>

<div class="row">
	

<div class=" col-xs-12 col-sm-3 ">
    <div id="col_inner_831ae7ae8f7189a8a47ec09caf7501f4" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
<div class="lm-info-block gray-default">
                        <i class="linecons linecons-heart"></i>
                <h4>Happy Clients</h4>
    <span class="lm-info-block-value">578</span>
    <span class="lm-info-block-text"></span>
</div>
	</div>
</div>


<div class=" col-xs-12 col-sm-3 ">
    <div id="col_inner_7f8682d39c5ba46b284a08d3db46c5f6" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
<div class="lm-info-block gray-default">
                        <i class="linecons linecons-clock"></i>
                <h4>Working Hours</h4>
    <span class="lm-info-block-value">4,780</span>
    <span class="lm-info-block-text"></span>
</div>
	</div>
</div>


<div class=" col-xs-12 col-sm-3 ">
    <div id="col_inner_6d4fcdd7dc42e01531a70050562e10e6" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
<div class="lm-info-block gray-default">
                        <i class="linecons linecons-star"></i>
                <h4>Awards Won</h4>
    <span class="lm-info-block-value">15</span>
    <span class="lm-info-block-text"></span>
</div>
	</div>
</div>


<div class=" col-xs-12 col-sm-3 ">
    <div id="col_inner_a719203952a1d6b1e4e8878645682d3c" class="fw-col-inner" data-paddings="0px 0px 0px 0px">
    	
<div class="lm-info-block gray-default">
                        <i class="linecons linecons-cup"></i>
                <h4>Coffee Consumed</h4>
    <span class="lm-info-block-value">1,286</span>
    <span class="lm-info-block-text"></span>
</div>
	</div>
</div>
</div>

	</div>
</section>
</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>
  
                        <footer class="site-footer clearfix">
                                <div class="footer-social">
                    <ul class="footer-social-links">
                                            <li>
                            <a href="#" target="_blank">Twitter</a>
                        </li>
                                            <li>
                            <a href="#" target="_blank">Facebook</a>
                        </li>
                                            <li>
                            <a href="#" target="_blank">Instagram</a>
                        </li>
                                        </ul>
                </div>
                
                                <div class="footer-copyrights">
                    <p>© 2024 All rights reserved.</p>
                </div>
                            </footer>
                    </div>
@include('codes.footer')
