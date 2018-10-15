<?php if (!defined('APP_VERSION')) die("Hey, error :)"); ?>
<!DOCTYPE html>
<html lang="<?= ACTIVE_LANG ?>"  class="no-js">
<head>
    <!--Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 ">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= site_settings("site_name") ?> - <?= __("Signup") ?></title>
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
                            <div class="p-4 bg-white ">
                                <a class="navbar-brand" href="<?= APPURL ?>">
                                    <img src="inc/themes/default/assets/image/logo-scroll.png" class="img-responsive img-fluid logo" alt="Logo image" />
                                </a>

                                <form action="<?= APPURL."/signup" ?>" method="POST" autocomplete="off" class="mt-5 ml-lg-2 ml-md-2">
                                    <input type="hidden" name="action" value="signup" />
									                   <?php if (!empty($FormErrors)): ?>
                                    <div class="form-result">
                                        <?php foreach ($FormErrors as $error): ?>
                                            <div class="color-danger">
                                                <span class="mdi mdi-close"></span>
                                                <?= $error ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                    


                                  <!--First name-->
                                    
                                    <div class="input-group input-group-lg mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <img src="inc/themes/default/assets/image/icon/man-user.png" class="img-responsive img-fluid" alt="man-user" />
                                            </span>
                                        </div>
                                        <input type="text" class="form-control"  placeholder="<?= __('Firstname') ?>"
										                    name="firstname" value="<?= htmlchars(Input::Post("firstname")) ?>"
                                        aria-label="firstname" required/>
                                    </div>

                                    <!--Last name-->
                                    
                                    <div class="input-group input-group-lg mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <img src="inc/themes/default/assets/image/icon/man-user.png" class="img-responsive img-fluid" alt="man-user" />
                                            </span>
                                        </div>
                                        <input type="text" class="form-control"  placeholder="<?= __('Lastname') ?>" name="lastname" 
									                      value="<?= htmlchars(Input::Post("lastname")) ?>"
										                    aria-label="lastname" required/>
                                    </div>

                                    <!--Username-->
                                    
                                    <div class="input-group input-group-lg mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="margin-right: -4px;">
                                                <img src="inc/themes/default/assets/image/icon/arroba.png" class="img-responsive img-fluid" alt="arroba" required/>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control"  placeholder="<?= __("Email") ?>" name="email" aria-label="email" 
                    										value="<?= htmlchars(Input::Post("email")) ?>" 
                    										required/>
                                    </div>

                                    <!--Password-->
                                    
                                    <div class="input-group input-group-lg mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <img src="inc/themes/default/assets/image/icon/key.png" class="img-responsive img-fluid" alt="key" required/>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control"  placeholder="<?= __("Password") ?>" name="password" aria-label="password" required/>
                                    </div>

                                    <!--Confirm password-->
                                    
                                    <div class="input-group input-group-lg mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <img src="inc/themes/default/assets/image/icon/key.png" class="img-responsive img-fluid" alt="key" />
                                            </span>
                                        </div>
                                        <input type="password" class="form-control"  placeholder="<?= __("Confirm password") ?>" name="password-confirm" aria-label="conf_password" required/>
                                    </div>

                                    <select class="form-control" id="timezone" name="timezone">
                                          <option value="" selected="selected">select your timezone</option>
                                          <option value="(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima">(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima</option>
                                          <option value="(GMT -6:00) Central Time (US & Canada), Mexico City">(GMT -6:00) Central Time (US & Canada), Mexico City</option>
                                          <option value="(GMT -7:00) Mountain Time (US & Canada)">(GMT -7:00) Mountain Time (US & Canada)</option>
                                          <option value="(GMT -8:00) Pacific Time (US & Canada)">(GMT -8:00) Pacific Time (US & Canada)</option>
                                          <option value="(GMT -9:00) Alaska">(GMT -9:00) Alaska</option>
                                          <option value="">--------------</option>
                                          <option value="(GMT -12:00) Eniwetok, Kwajalein">(GMT -12:00) Eniwetok, Kwajalein</option>
                                          <option value="(GMT -11:00) Midway Island, Samoa">(GMT -11:00) Midway Island, Samoa</option>
                                          <option value="(GMT -10:00) Hawaii">(GMT -10:00) Hawaii</option>
                                          <option value="(GMT -9:30) Taiohae">(GMT -9:30) Taiohae</option>
                                          <option value="(GMT -9:00) Alaska">(GMT -9:00) Alaska</option>
                                          <option value="(GMT -8:00) Pacific Time (US & Canada)">(GMT -8:00) Pacific Time (US & Canada)</option>
                                          <option value="(GMT -7:00) Mountain Time (US & Canada)">(GMT -7:00) Mountain Time (US & Canada)</option>
                                          <option value="(GMT -6:00) Central Time (US & Canada), Mexico City">(GMT -6:00) Central Time (US & Canada), Mexico City</option>
                                          <option value="(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima">(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima</option>
                                          <option value="(GMT -4:30) Caracas">(GMT -4:30) Caracas</option>
                                          <option value="(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                          <option value="(GMT -3:30) Newfoundland">(GMT -3:30) Newfoundland</option>
                                          <option value="(GMT -3:00) Brazil, Buenos Aires, Georgetown">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                          <option value="(GMT -2:00) Mid-Atlantic">(GMT -2:00) Mid-Atlantic</option>
                                          <option value="(GMT -1:00) Azores, Cape Verde Islands">(GMT -1:00) Azores, Cape Verde Islands</option>
                                          <option value="(GMT +0:00) Western Europe Time, London, Lisbon, Casablanca">(GMT +0:00) Western Europe Time, London, Lisbon, Casablanca</option>
                                          <option value="(GMT +1:00) Brussels, Copenhagen, Madrid, Paris">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                          <option value="(GMT +2:00) Kaliningrad, South Africa">(GMT +2:00) Kaliningrad, South Africa</option>
                                          <option value="(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                          <option value="(GMT +3:30) Tehran">(GMT +3:30) Tehran</option>
                                          <option value="(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                          <option value="(GMT +4:30) Kabul">(GMT +4:30) Kabul</option>
                                          <option value="(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                          <option value="(GMT +5:30) Bombay, Calcutta, Madras, New Delhi">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                          <option value="(GMT +5:45) Kathmandu, Pokhara">(GMT +5:45) Kathmandu, Pokhara</option>
                                          <option value="(GMT +6:00) Almaty, Dhaka, Colombo">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                          <option value="(GMT +6:30) Yangon, Mandalay">(GMT +6:30) Yangon, Mandalay</option>
                                          <option value="(GMT +7:00) Bangkok, Hanoi, Jakarta">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                          <option value="(GMT +8:00) Beijing, Perth, Singapore, Hong Kong">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                          <option value="(GMT +8:45) Eucla">(GMT +8:45) Eucla</option>
                                          <option value="(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                          <option value="(GMT +9:30) Adelaide, Darwin">(GMT +9:30) Adelaide, Darwin</option>
                                          <option value="(GMT +10:00) Eastern Australia, Guam, Vladivostok">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                          <option value="(GMT +10:30) Lord Howe Island">(GMT +10:30) Lord Howe Island</option>
                                          <option value="(GMT +11:00) Magadan, Solomon Islands, New Caledonia">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                          <option value="(GMT +11:30) Norfolk Island">(GMT +11:30) Norfolk Island</option>
                                          <option value="(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                          <option value="(GMT +12:45) Chatham Islands">(GMT +12:45) Chatham Islands</option>
                                          <option value="(GMT +13:00) Apia, Nukualofa">(GMT +13:00) Apia, Nukualofa</option>
                                          <option value="(GMT +14:00) Line Islands, Tokelau">(GMT +14:00) Line Islands, Tokelau</option>

                                    </select>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-gradient mt-3 px-4 py-2"><?= __("Get Started") ?></button>
                                    </div>
                                </form>

                                <div class="text-center mt-3 text-grey">
                                    <p><?= __("By creating an account you agree to our terms of service.") ?></p>
                                    <a class="anchor" href="<?= APPURL."/login" ?>"><?= __("Already have an account?") ?></a>
                                </div>
                              </div>
                            </div>
                      
                              <div class="col-md-8 col-lg-8">
                                <div id="demo" class="carousel slide" data-ride="carousel">

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
