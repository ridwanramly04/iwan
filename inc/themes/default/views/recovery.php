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
    <title><?= __("Password Recovery") ?> - <?= __("Recovery") ?></title>
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

    
    <!--Main sections from here-->
    <main>
        
        <div class="background-img background">
            <div class="flex-signup">
                <div class="container">
                    <div class="row row h-100 justify-content-center align-items-center shadow-lg">
                        <div class="col-md-12 col-lg-6 col-offset-4 align-items-center">
                            <div class="p-4 bg-white">
                                
                                <!--Logo-->
                                
                                <a class="navbar-brand" style="position: absolute; position: absolute; left: 50%; margin-left: -50px !important; display: block;" href="<?= APPURL ?>">
                                    <img src="inc/themes/default/assets/image/logo-scroll.png" class="img-responsive img-fluid logo" alt="Logo image" />
                                </a>
                                
                                <!--Login form-->

                                <div class="loginfrm mt-5">
								<?php if (empty($success)): ?>
                                    <form  action="<?= APPURL."/recovery" ?>" method="POST" autocomplete="off" class="mt-5 ml-lg-2 ml-md-2">
                                        <input type="hidden" name="action" value="recover">
                                            <div class="form-result">
                                                <div class="color-danger">
                                                    <span class="mdi mdi-close"></span>
                                                </div>
                                            </div>
                                        
                                
                                <!--email-->

                                <div class="input-group input-group-lg mb-3">
									<span class="input-group-text">
                                        <img src="inc/themes/default/assets/image/icon/arroba.png" class="img-responsive img-fluid" alt="arroba" />
                                    </span>
                                    <input type="email" class="form-control"  placeholder="Email" aria-label="firstname" id="email" name="email" value="<?= htmlchars(Input::Post("email")) ?>" required/>
											
										<?php if (!empty($error)): ?>

											<div style="display: block; width: 100%; color: red;">
												<?= $error ?>
											</div>
										
                                        <?php endif; ?>
										
								</div>

                                    <div class="clearfix">
                                        <button class="btn btn-gradient btn-block"><?= __('Submit') ?></button> 
                                    </div>
			


                                    </form>

                                    <p class="text-center pt-3"><?= __('Enter your registration email address to receive password reset instructions.') ?>
                                    </p>
                                        
                                        <?php else: ?>

                                <div class="clearfix">
                                    <h1 class="text-center"><?= __('Email Sent!') ?></h1>
                                    <p class="text-center pt-3" ><?= __('Password reset instruction sent to your email address.') ?></p>
                                </div>
           
                                <?php endif ?>

                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    
    
    
    <!-- Footer sections from here -->
    <footer>
    
    
    </footer>
    
    
    <!--Scripts-->
    <script src="<?= active_theme_url() . "/assets/js/jquery.min.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/popper.min.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/bootstrap.min.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/theme.js?v=flatdrop010002" . VERSION?>"></script>
    
    </body>
</html>
