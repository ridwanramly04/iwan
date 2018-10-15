<?php if (!defined('APP_VERSION')) die("Hey, error :)"); ?>
<!DOCTYPE html>
<html lang="<?= ACTIVE_LANG ?>" class="no-js">
<head>
    <!--Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 ">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= site_settings("site_name") ?> - <?= __("Login") ?></title>
    <meta name="description" content="<?= site_settings("site_description") ?>">
    <meta name="keywords" content="<?= site_settings("site_keywords") ?>">
    <link rel="icon" href="<?= site_settings("logomark") ? site_settings("logomark") : active_theme_url() . "/assets/image/favicon.ico" ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= site_settings("logomark") ? site_settings("logomark") : active_theme_url() . "/assets/image/favicon.ico" ?>" type="image/x-icon"> 
    <meta name="robots" content="index,follow">
    <meta name="copyright" content="">
    <meta property="og:title" content="<?= site_settings("site_name") ?>">
    <meta property="og:site_name" content=" ">
    <meta property="og:url" content="">
    <meta property="og:description" content="<?= site_settings("site_description") ?>">
    <meta property="og:type" content="">
    <meta property="og:image" content="">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="#">
    
    <!--Stylesheet-->
    <link rel="stylesheet" href="<?= active_theme_url() . "/assets/css/bootstrap.min.css?v=flatdrop010002" . VERSION ?>">
    <link rel="stylesheet" href="<?= active_theme_url() . "/assets/css/font-awesome.min.css?v=flatdrop010002" . VERSION ?>">
    <link rel="stylesheet" href="<?= active_theme_url() . "/assets/css/theme.css?v=flatdrop010002" . VERSION ?>">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    <?php $action = \Input::post("action"); ?>
    <!-- Header image and navigation menu -->
    <header>
        
        
        
        
    </header>
    
    <!--Main sections from here-->
    <main>
        
        <div class="background-img background">
            <div class="flex-signup">
                <div class="container">
                    <div class="row shadow-lg">
                        <div class="col-md-4 col-lg-4 ">
                            <div class="p-4 bg-white">
                                
                                <!--Logo-->
                                
                                <a class="navbar-brand" href="<?= APPURL ?>">
                                    <img src="inc/themes/default/assets/image/logo-scroll.png" class="img-responsive img-fluid logo" alt="Logo image" />
                                </a>
                                
                                <!--Login form-->

                                <div class="loginfrm">
                                    <form  action="<?= APPURL."/login" ?>" method="POST" autocomplete="off" class="mt-5 ml-lg-2 ml-md-2">
                                <input type="hidden" name="action" value="login" />                                        
                                
                                <!--Username-->
                                        
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">
                                        <img src="inc/themes/default/assets/image/icon/man-user.png" class="img-responsive img-fluid" alt="man-user" />
                                    </span>
                                    <input type="text" class="form-control"  placeholder="Email" aria-label="firstname" id="username" name="username" value="<?= htmlchars(Input::Post("username")) ?>" required/>
                                </div>

                                <!--Password-->
                                        
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">
                                        <img src="inc/themes/default/assets/image/icon/key.png" class="img-responsive img-fluid" alt="key" />
                                    </span>
                                    <input type="password" class="form-control"  placeholder="Password" aria-label="password" id="password" name="password" required/>
                                </div>

                                <?php if(!empty($_POST)){?>
                                <div class="input-group input-group-lg mb-3" style="color:red"><?= __('Invalid user or password.') ?></div>
                                <?php } ?>

                                <div class="clearfix">
                                    <a class="anchor float-left mt-2" href="<?= APPURL."/recovery" ?>"><?= __("Forgot your password?") ?></a>
                                    <button class="btn btn-gradient float-right px-4 py-2"><?= __('Sign in') ?></button> 
                                </div>
                                    
                                <div class="text-center mt-2" style="display: none;">
                                    <div class="or text-grey"><?= __('or') ?></div>
                                </div>
                                
                                </form>
                                

                                <div style="display: none;">
                                    <div class="d-flex flex-wrap justify-content-center mt-2 social-anchor">
                                        <a class="px-4 rounded" href="#">
                                            <span class="fa fa-google"></span>  
                                        </a>
                                        
                                        <a class="px-4 rounded mx-3" href="#">
                                            <span class="fa fa-facebook"></span>  
                                        </a>
                                            
                                        <a class="px-4 rounded" href="#">
                                            <span class="fa fa-instagram"></span>  
                                        </a>  
                                    </div>
                                </div>
                                
                                <p class="anchor mt-5 ml-1 text-grey text-center"><a href="<?= APPURL."/signup" ?>" ><?= __('Create my FlatDrop Account!') ?></a></p>

                                </div>
                            </div>
                        </div>
                        
                        
                        <!--Bootstrap 4 carousel-->
                        
                        <div class="col-md-8 col-lg-8">
                            <div id="demo" class=".visible-xs-block hidden-xs carousel slide" data-ride="carousel">

                              <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    <li data-target="#demo" data-slide-to="2"></li>
                                </ul>

                              <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="inc/themes/default/assets/image/slider/item1.png" class="img-responsive img-fluid" alt="item1" >
                                    </div>
                                    <div class="carousel-item">
                                        <img src="inc/themes/default/assets/image/slider/item2.png" class="img-responsive img-fluid" alt="item2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="inc/themes/default/assets/image/slider/item3.png" alt="item3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    
    
    <!--Scripts-->
    <script src="<?= active_theme_url() . "/assets/js/jquery.min.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/popper.min.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/bootstrap.min.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/theme.js?v=flatdrop010002" . VERSION?>"></script>
    
    </body>
</html>
