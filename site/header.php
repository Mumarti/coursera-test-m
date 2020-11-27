<!DOCTYPE html>
<html lang="no-js" <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php $seometadescription = get_post_meta(get_the_ID(),'_testo_meta_key',true);
        echo $seometadescription;
        ?>">
        <meta name="author" content="">
        <title>CURRICULUM</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

<style>
				.bg-primary{
					background-color:<?php echo get_theme_mod('id_setting_color_panel','#004060');?>!important;
				}
</style>        

<script>
/*!
    * Start Bootstrap - Resume v6.0.2 (https://startbootstrap.com/theme/resume)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
    */
    (function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#sideNav",
    });
})(jQuery); // End of use strict
</script>

<?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php wp_body_open();?>
<header id="site-header">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
<a class="navbar-brand js-scroll-trigger" href="#page-top">
<span class="d-block d-lg-none"><?php echo get_theme_mod("id_setting_nome",'NOME E COGNOME'); ?></span>
<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo get_theme_mod('id_setting_foto_personale','wp-content/themes/curriculum/images/avatar.jpg'); ?>" alt="" /></span>

</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
               <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Informazioni personali</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Esperienze</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Istruzione</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interessi</a></li>
				
                </ul>
            </div>
			
        </nav>


</header>