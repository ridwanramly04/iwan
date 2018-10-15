        <?php
$media_ids = [];

if ($Post->get("media_ids")) {
    $ids = explode(",", $Post->get("media_ids"));
    foreach ($ids as $id) {
        $id = (int) $id;
        if ($id > 0) {
            $media_ids[] = $id;
        }
    }
}
?>

        <div class='skeleton' id="post">
            <form action="javascript:void(0)"
                  data-url="<?php echo APPURL."/post" ?>"
                  data-post-id="<?php echo $Post->get("id") ?>"
                  autocomplete="off">

                <input type="hidden" name="media-ids" value="<?php echo implode(",", $media_ids) ?>">

                <div class="container-1200">
                    <div class="row">
                        <?php if ($Post->get("status") == "failed"): ?>
                            <div class="prev-fail-note">
                                <div class="title"><?php echo __("This post has been failed to publish previously because of the following reason:") ?></div>
                                <div class="error"><?php echo $Post->get("data") ?></div>
                            </div>
                        <?php endif?>

                        <div class="types clearfix">
                            <?php
$allowed = [
    "timeline" => [],
    "story"    => [],
    "album"    => [],
];

$types = $AuthUser->get("settings.post_types");
foreach ($types as $key => $val) {
    if ($val) {
        $p = explode("_", $key, 2);
        if (isset($allowed[$p[0]])) {
            if ($p[1] == "video") {
                if ($isVideoExtenstionsLoaded) {
                    $allowed[$p[0]][] = __("Video");
                }
            } else {
                $allowed[$p[0]][] = __("Photo");
            }
        }
    }
}

$type = $Post->isAvailable() ? $Post->get("type") : null;
?>

                            <label>
                                <input name="type" value="timeline" type="radio"
                                       <?php echo $type == "timeline" ? "checked" : "" ?>
                                       <?php echo empty($allowed["timeline"]) ? "disabled" : "" ?>>
                                <div>
                                    <span class="sli sli-camera icon"></span>

                                    <div class="type">
                                        <div class="name">
                                            <span class="hide-on-small-only"><?php echo __("Add Post") ?></span>
                                            <span class="hide-on-medium-and-up"><?php echo __("Post") ?></span>
                                        </div>
                                        <div>
                                            <?php echo empty($allowed["timeline"]) ?
__("Photo")." / ".__("Video") :
implode(" / ", $allowed["timeline"]) ?>
                                        </div>
                                    </div>
                                </div>
                            </label>

                            <label>
                                <input name="type" type="radio" value="story"
                                       <?php echo $type == "story" ? "checked" : "" ?>
                                       <?php echo empty($allowed["story"]) ? "disabled" : "" ?>>
                                <div>
                                    <span class="sli sli-plus icon"></span>

                                    <div class="type">
                                        <div class="name">
                                            <span class="hide-on-small-only"><?php echo __("Add Story") ?></span>
                                            <span class="hide-on-medium-and-up"><?php echo __("Story") ?></span>
                                        </div>
                                        <div>
                                            <?php echo empty($allowed["story"]) ?
__("Photo")." / ".__("Video") :
implode(" / ", $allowed["story"]) ?>
                                        </div>
                                    </div>
                                </div>
                            </label>

                            <label>
                                <input name="type" type="radio" value="album"
                                      <?php echo $type == "album" ? "checked" : "" ?>
                                      <?php echo empty($allowed["album"]) ? "disabled" : "" ?>>
                                <div>
                                    <span class="sli sli-layers icon"></span>

                                    <div class="type">
                                        <div class="name">
                                            <span class="hide-on-small-only"><?php echo __("Add Album") ?></span>
                                            <span class="hide-on-medium-and-up"><?php echo __("Album") ?></span>
                                        </div>

                                        <div>
                                            <?php echo empty($allowed["album"]) ?
__("Photo")." / ".__("Video") :
implode(" / ", $allowed["album"]) ?>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="clearfix">
                            <div class="col s12 m6 l4">
                                <div class="hide-on-medium-and-up mobile-uploader">
                                    <a href="javascript:void(0)" class="js-fm-filebrowser fluid button button--dark">
                                        <span class="sli sli-cloud-upload fz-18 mr-10" style="vertical-align: -3px"></span>
                                        <?php echo __("Pick a file from your device") ?>
                                    </a>

                                    <div class="result"></div>
                                </div>

                                <section class="section hide-on-small-only">
                                    <div class="section-header clearfix">
                                        <h2 class="section-title"><?php echo __("Media") ?></h2>

                                        <div class="section-actions clearfix">
                                            <a class="mdi mdi-laptop icon tippy js-fm-filebrowser"
                                               data-size="small"
                                               href="javascript:void(0)"
                                               title="<?php echo __("Your PC") ?>"></a>

                                            <a class="mdi mdi-link-variant icon tippy js-fm-urlformtoggler"
                                               data-size="small"
                                               href="javascript:void(0)"
                                               title="<?php echo __("URL") ?>"></a>

                                            <?php if ($Integrations->get("data.dropbox.api_key") && $AuthUser->get("settings.file_pickers.dropbox")): ?>
                                                <a class="mdi mdi-dropbox icon cloud-picker tippy"
                                                   data-size="small"
                                                   data-service="dropbox"
                                                   href="javascript:void(0)"
                                                   title="<?php echo __("Dropbox") ?>"></a>
                                            <?php endif;?>

                                            <?php if (SSL_ENABLED && $Integrations->get("data.onedrive.client_id") && $AuthUser->get("settings.file_pickers.onedrive")): ?>
                                                <a class="mdi mdi-onedrive icon cloud-picker tippy"
                                                   data-size="small"
                                                   data-service="onedrive"
                                                   data-client-id="<?php echo htmlchars($Integrations->get("data.onedrive.client_id")) ?>"
                                                   href="javascript:void(0)"
                                                   title="<?php echo __("OneDrive") ?>"></a>
                                            <?php endif;?>

                                            <?php if ($Integrations->get("data.google.api_key") && $Integrations->get("data.google.client_id") && $AuthUser->get("settings.file_pickers.google_drive")): ?>
                                                <a class="mdi mdi-google-drive icon cloud-picker tippy"
                                                   data-size="small"
                                                   data-service="google-drive"
                                                   data-api-key="<?php echo htmlchars($Integrations->get("data.google.api_key")) ?>"
                                                   data-client-id="<?php echo htmlchars($Integrations->get("data.google.client_id")) ?>"
                                                   href="javascript:void(0)"
                                                   title="<?php echo __("Google Drive") ?>"></a>
                                            <?php endif;?>

                                            <div class="more clearfix">
                                                <a class="mdi mdi-delete icon tippy js-fm-delete-mode"
                                                   data-size="small"
                                                   href="javascript:void(0)"
                                                   title="<?php echo __("Delete Mode") ?>"></a>

                                                <a class="mdi mdi-information-outline icon tippy js-fm-infobox"
                                                   data-size="small"
                                                   href="javascript:void(0)"
                                                   title="<?php echo __("Info") ?>"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div id="filemanager"
                                             data-connector-url="<?php echo APPURL."/file-manager/connector" ?>"
                                             data-maxselect="10"
                                             data-selected-file-ids="[<?php echo implode(",", $media_ids) ?>]"
                                             data-img-assets-url="<?php echo APPURL."/assets/img/" ?>"
                                             style="height: 538px"></div>
                                    </div>
                                </section>
                            </div>

                            <div class="col s12 m6 m-last l4">
                                <section class="section">
                                    <div class="section-header clearfix">
                                        <h2 class="section-title"><?php echo __($Post->isAvailable() ? 'Edit Post' : 'New Post') ?></h2>

                                        <div class="section-actions">
                                            <?php if ($Accounts->getTotalCount() > 0): ?>
                                                <div class="dropdown onprogress">
                                                    <span class="sli sli-social-instagram icon pe-none"></span>
                                                    <img class="loading pe-none" src="<?php echo APPURL."/assets/img/round-loading.svg" ?>" alt="loading">

                                                    <select name="account" disabled>
                                                        <?php
$selected = 0;
if ($Post->isAvailable()) {
    $selected = $Post->get("account_id");
} else if ((int) Input::get("account") > 0) {
    $selected = (int) Input::get("account");
}
?>
                                                        <?php foreach ($Accounts->getDataAs("Account") as $a): ?>
                                                            <option value="<?php echo $a->get("id") ?>" <?php echo $a->get("id") == $selected ? "selected" : "" ?>><?php echo $a->get("username") ?></option>
                                                        <?php endforeach;?>
                                                    </select>

                                                    <span class="mdi mdi-menu-down caret"></span>
                                                </div>
                                            <?php else: ?>
                                                <a href="<?php echo APPURL."/accounts/new" ?>" class="btn">
                                                    <span class="sli sli-user-follow fz-14 mr-5"></span>
                                                    Add Account
                                                </a>
                                            <?php endif?>
                                        </div>
                                    </div>

                                    <div class="section-content controls" style="min-height: 429px;">
                                        <div class="form-result"></div>

                                        <div class="mini-preview droppable">
                                            <div class="items clearfix">
                                            </div>

                                            <div class="drophere">
                                                <span class="none"><?php echo __("Drop here") ?></span>
                                                <span><?php echo __("Drag media here to post") ?></span>
                                            </div>
                                        </div>

                                        <div class="tabs mb-20 ">
                                            <div class="tabheads clearfix">
                                                <a class="active" href="javascript:void(0)" style="width: 50%; border-bottom: none;" data-tab="1"><?php echo __("Caption") ?></a>
                                                <a href="javascript:void(0)" style="width: 50%; border-bottom: none;" data-tab="2"><?php echo __("First Comment") ?></a>
                                            </div>

                                            <div class="tabcontents">
                                                <div class="active pos-r" data-tab="1">
                                                    <?php
$caption = $Post->get("caption");
if ( ! $Post->isAvailable()) {
    $CaptionModel = Controller::model("Caption", Input::get("caption"));

    if ($CaptionModel->isAvailable() &&
        $CaptionModel->get("user_id") == $AuthUser->get("id")) {
        $caption = $CaptionModel->get("caption");
    }
}
?>

                                                    <div class="caption input <?php echo get_option("np_search_in_caption") ? "js-search-enabled" : "" ?>"
                                                         data-placeholder="<?php echo __("Write a caption") ?>"
                                                         contenteditable="true"><?php echo htmlchars($caption) ?></div>

                                                    <a class="sli sli-grid caption-picker js-open-popup" href="<?php echo APPURL."/captions" ?>" data-popup="#captions-overlay"></a>
                                                </div>

                                                <div class="pos-r" data-tab="2">
                                                    <div class="first-comment input <?php echo get_option("np_search_in_caption") ? "js-search-enabled" : "" ?>"
                                                         data-placeholder="<?php echo __("Write the first comment") ?>"
                                                         contenteditable="true"><?php echo htmlchars($Post->get("first_comment")) ?></div>

                                                    <a class="sli sli-grid caption-picker js-open-popup" href="<?php echo APPURL."/captions" ?>" data-popup="#captions-overlay"></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="search-results none"></div>

                                        <div class="mb-20">
                                            <?php
$is_scheduled = (bool) $Post->get("is_scheduled");

$timezone = new DateTimeZone($AuthUser->get("preferences.timezone"));

$now = new DateTime();
$now->setTimezone($timezone);

if ( ! $Post->isAvailable() &&
    isValidDate(Input::get("date"), "Y-m-d") &&
    Input::get("date") >= $now->format("Y-m-d")) {
    $date         = new DateTime(Input::get("date")." ".$now->format("H:i"), $timezone);
    $is_scheduled = true;
} else {
    $date = new DateTime($is_scheduled ? $Post->get("schedule_date") : "now");
    $date->setTimezone($timezone);
}
?>
                                            <label>
                                                <input type="checkbox"
                                                       class="checkbox"
                                                       name="schedule"
                                                       value="1"
                                                       <?php echo $is_scheduled ? "checked" : "" ?>>
                                                <span style="margin-left:14px;">
                                                    <span class="icon unchecked">
                                                        <span class="mdi mdi-check"></span>
                                                    </span>
                                                    <?php echo __('Schedule') ?>
                                                </span>
                                            </label>
                                        </div>

                                        <?php
$dateformat = $AuthUser->get("preferences.dateformat");
$timeformat = $AuthUser->get("preferences.timeformat") == "24" ? "H:i" : "h:i A";
$format     = $dateformat." ".$timeformat;
?>

                                        <div class="pos-r mb-20">
                                            <input class="input leftpad js-datepicker"
                                                   name="schedule-date"
                                                   data-position="top left"
                                                   data-date-format="<?php echo str_replace(["Y", "m", "d", "F"], ["yyyy", "mm", "dd", "MM"], $dateformat) ?>"
                                                   data-time-format="<?php echo str_replace(["h:i", "H:i", "A"], ["hh:ii", "hh:ii", "AA"], $timeformat) ?>"
                                                   data-min-date="<?php echo $now->format("c") ?>"
                                                   data-start-date="<?php echo $date->format("c") ?>"
                                                   data-user-datetime-format="<?php echo $format ?>"
                                                   type="text"
                                                   value="<?php echo $date->format($format); ?>"
                                                   readonly>
                                            <span class="sli sli-calendar field-icon--left pe-none"></span>
                                        </div>

                                        <div class="mb-5">
                                            <a href="javascript:void(0)" class="advanced-settings-toggler">
                                                <?php echo __("Advanced Settings") ?>
                                                <span class="mdi mdi-menu-down"></span>
                                            </a>
                                        </div>


                                        <div class="advanced-settings">
                                            <div class="mb-20">
                                                <div class="pos-r">
                                                    <input type="hidden" name="location" value="<?php echo htmlchars($Post->get("location.object")) ?>">
                                                    <input class="input leftpad rightpad"
                                                           name="location-search"
                                                           type="text"
                                                           placeholder="<?php echo __("Location") ?>"
                                                           value="<?php echo htmlchars($Post->get("location.label")); ?>">
                                                    <a href="javascript:void(0)" class="js-enable-location-search mdi mdi-close-circle field-icon--right none"></a>
                                                    <span class="sli sli-location-pin field-icon--left pe-none"></span>
                                                </div>
                                            </div>

                                            <div>
                                                <label>
                                                    <input type="checkbox"
                                                           class="checkbox"
                                                           name="remove-media"
                                                           value="1"
                                                           <?php echo $Post->get("remove-media") ? "checked" : "" ?>>
                                                    <span style="margin-left:14px;">
                                                        <span class="icon unchecked">
                                                            <span class="mdi mdi-check"></span>
                                                        </span>
                                                        <?php echo __('Auto remove media') ?>

                                                        <span class="tooltip tippy"
                                                              data-position="top"
                                                              data-size="small"
                                                              title="<?php echo __('Remove media files after posting') ?>">
                                                              <span class="mdi mdi-help-circle"></span>
                                                          </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="post-submit">
                                        <input class="fluid large button"
                                               data-value-now="<?php echo __("Post now") ?>"
                                               data-value-schedule="<?php echo __("Schedule the post") ?>"
                                               type="submit"
                                               value="<?php echo __($Post->get("is_scheduled") ? "Schedule the post" : "Post now") ?>">
                                    </div>
                                </section>
                            </div>

                            <div class="col s12 m6 l4 l-last hide-on-medium-and-down">
                                <section class="section">
                                    <div class="post-preview" data-type="timeline">
                                        <div class="preview-header">
                                            <img src="<?php echo APPURL."/assets/img/instagram-logo.png" ?>" alt="Instagram">
                                        </div>

                                        <div class="preview-account clearfix">
                                            <span class="circle"></span>
                                            <span class="lines">
                                                <span class="line-placeholder" style="width: 47.76%"></span>
                                                <span class="line-placeholder" style="width: 29.85%"></span>
                                            </span>
                                        </div>

                                        <div class="preview-media--timeline">
                                            <div class="placeholder"></div>
                                            <!-- <video src="#" playsinline autoplay muted loop></video> -->
                                        </div>

                                        <div class="preview-media--story">
                                            <!-- <div class="img"></div> -->
                                            <!-- <video src="#" playsinline autoplay muted loop></video> -->
                                        </div>
                                        <div class="story-placeholder"></div>

                                        <div class="preview-media--album">
                                            <!-- <div class="img"></div> -->
                                            <!-- <video src="http://demo.thepostcode.co/nextpost/assets/uploads/1/instagram/19026330_428324574201218_2358753720650432512_n.mp4" playsinline autoplay muted loop class="video-preview"></video> -->
                                        </div>

                                        <div class="preview-caption-wrapper">
                                            <div class="preview-caption-placeholder" style="<?php echo $caption ? "display:none" : "" ?>">
                                                <span class="line-placeholder"></span>
                                                <span class="line-placeholder" style="width: 61.19%"></span>
                                            </div>

                                            <div class="preview-caption" style="<?php echo $caption ? "display:block" : "" ?>"><?php echo htmlchars($caption) ?></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php if ($Captions->getTotalCount() > 0): ?>
            <div class="overlay none js-popup" id="captions-overlay">
                <a href="javascript:void(0)" class="close-btn mdi mdi-close js-close-popup"></a>
                <div class="content">
                    <h2 class="overlay-title"><?php echo __("Caption Templates") ?></h2>
                    <div class="simple-list js-loadmore-content" data-loadmore-id="1">
                        <?php $Emojione = new \Emojione\Client(new \Emojione\Ruleset());?>
                        <?php foreach ($Captions->getDataAs("Caption") as $c): ?>
                            <div class="simple-list-item">
                                <h3 class="title"><?php echo htmlchars($c->get("title")) ?></h3>

                                <div class="info">
                                    <p>
                                        <?php echo $Emojione->shortnameToUnicode($c->get("caption")); ?>
                                    </p>
                                </div>

                                <input type="hidden" name="capion-<?php echo $c->get("id") ?>" value="<?php echo htmlchars($Emojione->shortnameToUnicode($c->get("caption"))); ?>">

                                <a href="javascript:void(0)" class="full-link"></a>
                            </div>
                        <?php endforeach;?>
                    </div>

                    <?php if ($Captions->getPage() < $Captions->getPageCount()): ?>
                        <div class="loadmore mt-40">
                            <?php
$url  = parse_url($_SERVER["REQUEST_URI"]);
$path = $url["path"];
if (isset($url["query"])) {
    $qs = parse_str($url["query"], $qsarray);
    unset($qsarray["cp"]);

    $url = $path."?".(count($qsarray) > 0 ? http_build_query($qsarray)."&" : "")."cp=";
} else {
    $url = $path."?cp=";
}
?>
                            <a class="fluid button button--light-outline js-loadmore-btn" data-loadmore-id="1" href="<?php echo $url.($Captions->getPage() + 1) ?>">
                                <span class="icon sli sli-refresh"></span>
                                <?php echo __("Load More") ?>
                            </a>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        <?php endif?>