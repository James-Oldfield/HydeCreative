<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html cll class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            <?php 
                wp_title('|', 'true', 'right');
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--css-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />
            
        <!--Favicon-->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/hyde-logo.ico" />

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <?php wp_head()?>

    </head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
<div class="container text-center">   

    <!--navbar-->
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hyde-logo.svg" width="280px" height="auto"/></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">About</a></li>
                <li><a href="/">Publications</a></li>
                <li><a href="/">Clients</a></li>
                <li><a href="/">Events</a></li>
            </ul>
        </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </div>
    
</div>
    
</div>
