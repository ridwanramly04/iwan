<?php if (!defined('APP_VERSION')) die("Hey, error :)"); ?>
<!DOCTYPE html>
<html lang="<?= ACTIVE_LANG ?>" class="no-js">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 ">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= site_settings("site_name") ?></title>
    <meta name="description" content="<?= site_settings("site_description") ?>">
    <meta name="keywords" content="<?= site_settings("site_keywords") ?>">
    <meta name="robots" content="index,follow">
    <meta name="copyright" content="">
    <meta property="og:title" content="<?= site_settings("site_name") ?>">
    <meta property="og:site_name" content=" ">
    <meta property="og:url" content="">
    <meta property="og:description" content="<?= site_settings("site_description") ?>">
    <meta property="og:type" content="">
    <meta property="og:image" content="">
    <link rel="icon" href="<?= site_settings("logomark") ? site_settings("logomark") : active_theme_url() . "/assets/image/favicon.ico" ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= site_settings("logomark") ? site_settings("logomark") : active_theme_url() . "/assets/image/favicon.ico" ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="#">
    
    <!--Stylesheet-->
    <link rel="stylesheet" href="<?= active_theme_url() . "/assets/css/bootstrap.min.css?v=flatdrop010002" . VERSION ?>">
    <link rel="stylesheet" href="<?= active_theme_url() . "/assets/css/font-awesome.min.css?v=flatdrop010002" . VERSION ?>">
    <link rel="stylesheet" href="<?= active_theme_url() . "/assets/css/animate.css?v=flatdrop010002" . VERSION ?>">
    <link rel="stylesheet" href="<?= active_theme_url() . "/assets/css/theme.css?v=flatdrop010002" . VERSION ?>">


    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    <!-- Header image and navigation menu -->
    <header>
        
        <div class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        
                        <div class="mt-md-5 mt-lg-5">
                            <div class="text-white text-center">
                                <div class="justify-center header">
                                    <div class="offset-lg-3 offset-md-2">
                                        <h1 class="h1 animated fadeIn"><?= __("A Smarter way to auto post on instagram") ?></h1>
                                        <h3 class="h3 animated fadeIn"><?= __("Save time managing your Instagram accounts") ?></h3>
                                        <div>
                                            <a class="animated fadeInDown mt-5 btn btn-white px-md-5 px-lg-5 px-sm-3 py-md-3 py-lg-3 py-sm-2 shadow-sm large" href="<?=APPURL . "/signup"?>"><?= __("Get Started for Free") ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="mt-md-5 mt-lg-5">
                            <div class="animated fadeInUp macbook justify-center">
                                <img src="inc/themes/default/assets/image/content/macbook.png" class="img-responsive img-fluid macbook-sm" alt="Macbook Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <nav class="navbar navigation navbar-expand-md fixed-top p-md-3 p-lg-3 p-sm-2">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand desktop" href="<?= APPURL ?>">
                    <img src="<?= site_settings("logotype") ? site_settings("logotype") : active_theme_url() . "/assets/image/logo.png"?>"
                    class="img-responsive img-fluid logo" alt="<?= site_settings("site_name") ?>">
                </a>
                
                <a class="navbar-brand mobile" href="">
                    <img src="<?= active_theme_url() . "/assets/image/logo-scroll.png?v=flatdrop010002" . VERSION?>" class="img-responsive img-fluid logo" alt="<?= site_settings("site_name") ?>" />
                </a>



                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
                    <ul class="navbar-nav navs ml-auto">
                      <li class="nav-item mr-md-3 mr-lg-4">
                        <a class="nav-link link" href="#about"><?= __("About") ?></a>
                      </li>
                      <li class="nav-item  mr-md-3 mr-lg-4">
                        <a class="nav-link link" href="#features"><?= __("Features") ?></a>
                      </li>
                      <li class="nav-item   mr-md-3 mr-lg-4">
                        <a class="nav-link link" href="#pricing"><?= __("Pricing") ?></a>
                      </li>
                      <li class="nav-item mr-md-4 mr-lg-5">
                        <a class="nav-link link" href="#"><?= __("Support") ?></a>
                      </li>
                        
                      <li class="d-inline mx-auto nav-item ml-md-4 ml-lg-5 mr-md-1 mr-lg-2">
                          <a class="nav-link btn btn-white px-4 " href="<?=APPURL . "/login"?>"><?=__("Login")?></a>
                      </li>
                      <li class="d-inline mx-auto nav-item">
                          <a class="nav-link btn btn-black px-4 shadow-sm" href="<?=APPURL . "/signup"?>"><?=__("Signup")?></a>
                      </li>
                    </ul>
                </div> 
            </div>
        </nav>
    
    </header>
    
    <!--Main sections from here-->
    <main>
        
        
        
        <section id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-lg-2"></div>
                    <div class="col-md-6 col-lg-4">
                        <div class=" differece sec-head text-center">
                            <h2 class="difference h2 font-weight-bold"><?= __("Make the difference") ?></h2>
                            <p class="difference-2 text-muted"><?= __("Here are features for you") ?></p>
                        </div>
                        
                        <!--Left side flexbox-->
                        
                        <div class="flex-box">
                            <div class="credit-card">
                                <div class="mt-md-4 mt-lg-5 mt-sm-2 square-150 faint-pink rounded-10 d-flex justify-content-center">
                                    <div class="align-self-center">
                                        <div class="text-center">
                                            <img src="inc/themes/default/assets/image/icon/credit-card.png" class="img-responsive img-fluid" alt="Credit Card" />
                                        </div>
                                        <span class="text-red d-block mt-2"><?= __("Payment Gateways") ?></span>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="video-player">
                                <div class="mt-md-4 mt-lg-4 mt-sm-2 square-200 faint-blue rounded-10 d-flex justify-content-center">
                                    <div class="align-self-center">
                                        <div class="text-center">
                                            <img src="inc/themes/default/assets/image/icon/video-player.png" class="img-responsive img-fluid" alt="Video Player" />
                                        </div>
                                        <span class="text-blue text-center d-block mt-2"><?= __("Photo, Story, Video & Album") ?></span>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="padlock">
                                <div class="mt-lg-4 mt-sm-2 square-150 faint-violet rounded-10 d-flex justify-content-center">
                                    <div class="align-self-center">
                                        <div class="text-center">
                                            <img src="inc/themes/default/assets/image/icon/padlock.png" class="img-responsive img-fluid" alt="Padlock" />
                                        </div>
                                        <span class="d-block text-center text-viol mt-2"><?= __("Secure password hash") ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6">
                        
                        <!--Right side flexbox with 3 rows-->
                        
                        <div class="difference-3 d-flex flex-wrap right-flex">
                        
                            <div class="calendar">
                                <div class="square-150 faint-violet rounded-10 d-flex justify-content-center">
                                    <div class="align-self-center">
                                        <div class="text-center">
                                            <img src="inc/themes/default/assets/image/icon/calendar.png" class="img-responsive img-fluid" alt="Calendar" />
                                        </div>
                                        <span class="d-block mt-2"><?= __("Schedule Posts") ?></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row-2">
                                <div class="calendar">
                                    <div class="square-150 faint-violet rounded-10 d-flex justify-content-center">
                                        <div class="align-self-center ">
                                            <div class="text-center">
                                                <img src="inc/themes/default/assets/image/icon/calendar.png" class="img-responsive img-fluid" alt="Calendar" />
                                            </div>
                                            <span class="d-block mt-2 text-viol"><?= __("Schedule Posts") ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="users">
                                    <div class="square-200  faint-blue ml-md-3 ml-lg-3 rounded-10 d-flex justify-content-center">
                                      <div class="align-self-center">
                                            <div class="text-center">
                                                <img src="inc/themes/default/assets/image/icon/user.png" class="img-responsive img-fluid" alt="Multi Instagram Accounts" />
                                            </div>
                                            <span class="d-block text-center text-blue mt-2"><?= __("Multi Instagram Accounts") ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new">
                                    <div class="square-250 mt-md-5 mt-lg-5 ml-md-3 ml-lg-3 faint-green rounded-10 d-flex justify-content-center">
                                        <div class="align-self-center">
                                            <div class="text-center">
                                                <img src="inc/themes/default/assets/image/icon/plus.png" class="img-responsive img-fluid" alt="Auto post Content" />
                                            </div>
                                            <span class="d-block text-green mt-2"><?= __("Schedule Posts") ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row-3">
                                <div class="mobile-responsive">
                                    <div class="square-150 faint-pink ml-md-3 ml-lg-3 rounded-10 d-flex justify-content-center">
                                        <div class="align-self-center">
                                            <div class="text-center">
                                                <img src="inc/themes/default/assets/image/icon/smartphone.png" class="img-responsive img-fluid" alt="Mobile Responsive" />
                                            </div>
                                            <span class="d-block text-red mt-2"><?= __("Mobile Responsive") ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="happiness">
                                    <div class="square-250 mt-md-5 mt-lg-5 ml-md-3 ml-lg-3 faint-orange rounded-10 d-flex justify-content-center">
                                        <div class="align-self-center">
                                            <div class="text-center">
                                                <img src="inc/themes/default/assets/image/icon/happiness.png" class="img-responsive img-fluid" alt="Happiness" />
                                            </div>
                                            <span class="d-block mt-2 text-orange"><?= __("Emoji Compatibility") ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </section><br />
        
        
        
        <section id="features">
            
           <div class="features">
               <div class="container">
                   
                   <!--Top right cornor circle image-->
                   
                   <div class="circle right-circle">
                       <img src="inc/themes/default/assets/image/content/dark-circle.png" class="img-responsive img-fluid" alt="Dark circles" />
                   </div>
                   
                   <!--Grid-->
                   
                    <div class="row">
                        <div class="modules col-md-4 col-lg-4">
                            <div class="sec-head mt-md-5 mt-lg-5 shift-y">
                                <h2 class="h2 font-weight-bold"><?= __("FlatDrop has additional modules to automate some process") ?></h2>
                                <p class="text-muted"><?= __("Auto Follow, Auto Unfollow, Auto Like, Auto Comment, Auto Direct Message, Auto Repost") ?></p>
                            </div>
                        </div>
                        
                        <!--Media items along with flex-->
                        
                        <div class="col-md-8 col-lg-8 text-navy-blue">
                            <div class="mt-md-5 mt-lg-5 featured-media shift-y">
                                <div class="d-flex flex-wrap position-right">
                                    <div class="media follow flexbox-media">
                                        <img src="inc/themes/default/assets/image/icon/af.png" class="img-responsive img-fluid" alt="Af" />
                                        <div class="media-body bg-white p-2 rounded-10 shadow-lg">
                                            <h4 class="h4 ml-md-3 ml-lg-3 mr-lg-5 mr-md-5"><?= __("Followed John Doe") ?><span class="media-small ml-4"><?= __("3 minutes ago") ?></span></h4>
                                            <span class="ml-md-3 ml-lg-3 mr-lg-5 mr-md-5 d-block media-small"><?= __("#travel") ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap position-center">
                                    <div class="media follow flexbox-media">
                                        <img src="inc/themes/default/assets/image/icon/au.png" class="img-responsive img-fluid" alt="Af" />
                                        <div class="media-body bg-white p-2 rounded-10 shadow-lg">
                                            <h4 class="h4 ml-md-3 ml-lg-3 mr-lg-5 mr-md-5"><?= __("Unfollowed John Doe") ?><span class="media-small ml-4"><?= __("1 minutes ago") ?></span></h4>
                                            <span class="ml-md-3 ml-lg-3 mr-lg-5 mr-md-5 d-block media-small"><?= __("#marketing") ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap position-right">
                                    <div class="media follow mr-md-4 mr-lg-4 flexbox-media">
                                        <img src="inc/themes/default/assets/image/icon/ar.png" class="img-responsive img-fluid" alt="Af" />
                                        <div class="media-body bg-white p-2 rounded-10 shadow-lg">
                                            <h4 class="h4 ml-md-3 ml-lg-3 mr-lg-5 mr-md-5"><?= __("Reposted Pic") ?><span class="media-small ml-4"><?= __("15 minutes ago") ?></span></h4>
                                            <span class="ml-md-3 ml-lg-3 mr-lg-5 mr-md-5 d-block media-small"><?= __("#autorepost") ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div class="media follow flexbox-media">
                                        <img src="inc/themes/default/assets/image/icon/dots.png" class="img-responsive img-fluid" alt="Af" />
                                        <div class="media-body bg-white p-2 rounded-10 shadow-lg">
                                            <h4 class="h4 ml-md-3 ml-lg-3 mr-lg-5 mr-md-5"><?= __("Comment John Doe") ?><span class="media-small ml-4"><?= __("3 minutes ago") ?></span></h4>
                                            <span class="ml-md-3 ml-lg-3 mr-lg-5 mr-md-5 d-block media-small"><?= __("#picoftheday") ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap position-center">
                                    <div class="media follow flexbox-media">
                                        <img src="inc/themes/default/assets/image/icon/heart.png" class="img-responsive img-fluid" alt="Af" />
                                        <div class="media-body bg-white p-2 rounded-10 shadow-lg">
                                            <h4 class="h4 ml-md-3 ml-lg-3 mr-lg-5 mr-md-5"><?= __("Liked John Doe") ?><span class="media-small ml-4"><?= __("25 minutes ago") ?></span></h4>
                                            <span class="ml-md-3 ml-lg-3 mr-lg-3 mr-md-3 d-block media-small"><?= __("#like") ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   <!--Bottom left circle-->
                   
                   <div class="circle left-circle">
                       <img src="inc/themes/default/assets/image/content/light-circle.png" class="img-responsive img-fluid" alt="Light circles" />
                   </div>
                   
                </div>
            </div>
        </section><br />
        
        
        <!--Pricing section-->
        
        <section id="pricing">
            <div class="container">
                <div class="cloud sec-head text-center">
                    <h2 class="h2 font-weight-bold"><?= __("Insert images from Cloud Drives.") ?></h2>
                    <div class="text-muted w-30 mx-auto"><?= __("FlatDrop allows you to import images from your Google Drive, Dropbox and OneDrive account") ?></div>
                </div>
                <div class="mt-lg-4 mt-md-4 mt-sm-3 import-data">
                    <div class="cloud d-flex flex-wrap justify-content-center">
                        <a href="#" class="mx-3">
                            <img src="inc/themes/default/assets/image/icon/google-drive.png" class="img-responsive img-fluid social-icons " alt="Google Drive" />
                        </a>
                        <a href="#" class="mx-3">
                            <img src="inc/themes/default/assets/image/icon/onedrive.png" class="img-responsive img-fluid social-icons " alt="onedrive" />
                        </a>
                        <a href="#" class="mx-3">
                            <img src="inc/themes/default/assets/image/icon/dropbox-logo.png" class="img-responsive img-fluid social-icons " alt="Dropbox" />
                        </a>
                    </div>
                </div>
            </div>
        </section><br />
        
        <!--Pricing grid-->
        
        <section>
            <div class="background-img pricing-img"> 
                <div class="price-h container">
                    <div class="sec-head text-center text-white py-md-5 py-lg-5 py-sm-3">
                        <h2 class="h2 font-weight-bold"><?= __("Pricing") ?></h2>
                        <p><?= __("How much does it cost to use FlatDrop") ?></p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <?php
                        $modules = [
                            "auto-follow" => __("Auto Follow"),
                            "auto-unfollow" => __("Auto Unfollow"),
                            "auto-like" => __("Auto Like"),
                            "auto-comment" => __("Auto Comment"),
                            "welcomedm" => __("Auto DM (New Followers)"),
                            "auto-repost" => __("Auto Repost"),
                        ]; 
                    ?>
                    <?php $pack=1; ?>
                    <?php foreach ($Packages->getDataAs("Package") as $p): ?>
                        <div class="price col-md-4 col-lg-4 shadow-none">
                        <div class="background-img pricing-<?php echo $pack++; ?> shift-top rounded-10">
                        <div class="p-md-4 p-lg-4 p-sm-2 text-center primary-color rounded-10 pricing line-ht">
							
                        <div class="price">
                            <div class="price-content">
                                <div class="main-price">
                                    <p class="font-weight-bold text-center xlarge"><?= format_price($p->get("monthly_price")) ?></p>
                                    <h4 class="h4"><?= htmlchars($Settings->get("data.currency")) ?>/<?= __("per month") ?></h4>
                                </div>

                                <p class="wrap-small">
                                    <?php
                                        $total = 12 * $p->get("monthly_price");
                                        $dif = $total - $p->get("annual_price");
                                        $save = $dif * 100 / $total;

                                        if ($save > 0) {
                                            echo __("Save %s when paid annualy", format_price($dif) . " " . htmlchars($Settings->get("data.currency")));
                                        }
                                    ?>
                                </p>

                                <h5 class="font-weight-bold">
                                    <?= htmlchars($p->get("title")) ?>
                                </h5>

                                <p >
                                    <?php
                                        $max = (int)$p->get("settings.max_accounts");
                                        if ($max > 0) {
                                            echo n__("Only 1 account", "Up to %s accounts", $max, $max);
                                        } else if ($max == "-1") {
                                            echo __("Unlimited accounts");
                                        } else {
                                            echo __("Zero accounts");
                                        }
                                    ?>
                                </p>

                                
                                    <h5 class="font-weight-bold"><?=__("Post Types")?>:</h6>
                                    <p>
                                        <?php
                                            if ($p->get("settings.post_types.timeline_photo")) {
                                                echo __("Photo") . ',';
                                            } else {
                                                echo "<del>".__("Photo")."</del>,";
                                            }
                                        ?>

                                        <?php
                                            if ($p->get("settings.post_types.timeline_video")) {
                                                echo __("Video");
                                            }else{
                                                echo "<del>".__("Video")."</del>";
                                            }
                                        ?>
                                    </p>

                                    <p>
                                        <?php
                                            $story_photo = $p->get("settings.post_types.story_photo");
                                            $story_video = $p->get("settings.post_types.story_video");
                                        ?>

                                        <?php if ($story_photo && $story_video): ?>
                                            <?=__("Story") . " (" . __("Photo+Video") . ")"?>
                                        <?php elseif ($story_photo): ?>
                                            <?=__("Story") . " (" . __("Photo only") . ")"?>
                                        <?php elseif ($story_video): ?>
                                            <?=__("Story") . " (" . __("Video only") . ")"?>
                                        <?php else: ?>
                                            <del><?=__("Story") . " (" . __("Photo+Video") . ")"?></del>
                                        <?php endif?>
                                    </p>
                                  
                                    <p>
                                        <?php
                                            $album_photo = $p->get("settings.post_types.album_photo");
                                            $album_video = $p->get("settings.post_types.album_video");
                                        ?>

                                        <?php if ($album_photo && $album_video): ?>
                                            <?=__("Album") . " (" . __("Photo+Video") . ")"?>
                                        <?php elseif ($album_photo): ?>
                                            <?=__("Album") . " (" . __("Photo only") . ")"?>
                                        <?php elseif ($album_video): ?>
                                            <?=__("Album") . " (" . __("Video only") . ")"?>
                                        <?php else: ?>
                                            <del><?=__("Album") . " (" . __("Photo+Video") . ")"?></del>
                                        <?php endif?>
                                    </p>
                                

                                 
                                   <h5 class="font-weight-bold"><?=__("Cloud Import")?>:</h5>
                                    <p class="cloud-import">
                                        <?php $none = true; ?>
                                        <?php if ($p->get("settings.file_pickers.google_drive")): ?>
                                            <?php $none = false; ?>
                                            <a class="mx-3">
                                            <img src="inc/themes/default/assets/image/icon/google-drive.png" class="img-responsive img-fluid social-icons" alt="Google Drive" />
                                            </a>
                                        <?php endif ?>

                                        <?php if ($p->get("settings.file_pickers.dropbox")): ?>
                                            <?php $none = false; ?>
                                            <a class="mx-3">
                                            <img src="inc/themes/default/assets/image/icon/dropbox-logo.png" class="img-responsive img-fluid social-icons" alt="Dropbox" />
                                            </a>
                                        <?php endif ?>

                                        <?php if ($p->get("settings.file_pickers.onedrive")): ?>
                                            <?php $none = false; ?>
                                            <a class="mx-3">
                                            <img src="inc/themes/default/assets/image/icon/onedrive.png" class="img-responsive img-fluid social-icons" alt="onedrive" />
                                            </a>
                                        <?php endif ?>

                                        <?php if ($none): ?>
                                            <span><?= __("Not available") ?></span></span>
                                        <?php endif ?>
                                    </p>
                                 

                                
                                    <h5 class="font-weight-bold"><?= __("Modules") ?></h5>

                                    <?php 
                                        $package_modules =  $p->get("settings.modules");
                                        if (!is_array($package_modules)) {
                                            $package_modules = [];
                                        }
                                    ?>
                                    <?php foreach ($modules as $idname => $title): ?>
                                        <p>
                                            <?php if (in_array($idname, $package_modules)): ?>
                                                <?= $title ?>
                                            <?php else: ?>
                                                <del><?= $title ?></del>
                                            <?php endif ?>
                                        </p>
                                    <?php endforeach ?>
                                

                                

                                <p class="mt-3">
                                    <?php if ($p->get("settings.spintax")): ?>
                                        <?= __("Spintax Support") ?>
                                    <?php else: ?>
                                        <del><?= __("Spintax Support") ?></del>
                                    <?php endif ?>
                                </p>

                                 
                                                                
                                 
                                
                                    <h5  class="font-weight-bold" ><?=__("Storage")?>:</h5>
                                    
                                        <p>
                                            <?php
                                                if ($p->get("settings.storage.total") == "-1") {
                                                    echo __("Unlimited");
                                                } else {
                                                    echo readableFileSize($p->get("settings.storage.total") * 1024 * 1024);
                                                }
                                            ?>
                                        </p>
                                    
									
                               

                                <div class="link">
                                    <a class="btn hero-btn btn-rounded px-5 shadow-sm" href="<?= APPURL . "/" . ($AuthUser ? "renew" : "signup") . "?package=" . $p->get("id") ?>" class="button-style purple"><?= __("Get started") ?></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                     <?php endforeach;?>
                </div>
            </div>
        </section>
        
        
        <!--Footer section-->
        
        <section class="background-img footer-img py-5">
            <div class="container">
                <div class="sec-head text-center text-white">
                    <h2 class="schedule h2 font-weight-bold"><?= __("Schedule Posts") ?></h2>
                    <p class="schedule mt-5 w-40 mx-auto"><?= __("FlatDrop allows you to schedule your posts at a future date to save 
                    time. You don't even need to log-in and out of various platforms") ?></p><br />
                    <a class="schedule btn btn-white btn-rounded shadow-sm px-5 text-black mt-4" href="<?=APPURL . "/signup"?>"><?= __("Get Started") ?></a>
                </div>
            </div>
            
            <div class="bottom-rect">
                <hr>
                <div class="container footer-nav-shift">
                    <nav class="d-flex flex-wrap justify-content-between">
                        
                        <a class="d-inline mx-auto navbar-brand" href="">
                            <img src="<?= site_settings("logotype") ? site_settings("logotype") : active_theme_url() . "/assets/image/logo.png"?>"
                    		class="img-responsive img-fluid logo" alt="<?= site_settings("site_name") ?>">
                        </a>

                       <div class="d-inline mx-auto d-flex flex-wrap text-white">
                             <a class="nav-link" href="#about"><?= __("About") ?></a>
                            <a class="nav-link" href="#features"><?= __("Features") ?></a>
                           <a class="nav-link" href="#pricing"><?= __("Pricing") ?></a>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
        
    </main>
    
    

    

    
    <!--Scripts-->
    <script src="<?= active_theme_url() . "/assets/js/jquery.min.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/popper.min.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/bootstrap.min.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/theme.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/jquery.viewportchecker.js?v=flatdrop010002" . VERSION?>"></script>
    <script src="<?= active_theme_url() . "/assets/js/animation.js?v=flatdrop010002" . VERSION?>"></script>
    
</body>
</html>