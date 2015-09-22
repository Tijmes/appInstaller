<?php
include 'bootstrap.php';
shuffle($themes);
$jsonObjects = json_encode($themes);
//
$uri_fragments = explode("/",$_SERVER["REQUEST_URI"]);
//var_dump($uri_fragments);
//
$uriTheme = "";
if(isset($uri_fragments[1])){
	$uriTheme = $uri_fragments[1];
}
$uriObject = "";
if(isset($uri_fragments[2])){
	$uriObject = $uri_fragments[2];
}
//
$baseUrl = $_SERVER['HTTP_HOST'];
$mtitle = "De wereld van Kentalis";
$url_FB = "http://www.facebook.com/sharer/sharer.php?u=".$baseUrl."&title=".$mtitle;
$url_TW = "http://twitter.com/intent/tweet?status=".$mtitle."+".$baseUrl;
$url_GP = "https://plus.google.com/share?url=".$baseUrl;
//
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]--><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>De wereld van Kentalis</title>
        <meta name="keywords" content="kentalis, doof, kind, ouders, slechthorend, doofblind, autisme, zorg, onderwijs, diagnostiek, onderzoek, spraak, taal, cluster 2, communicatie, behandeling">
        <meta name="description" content="Kentalis is er voor mensen met een taal- of spraakstoornis of die doof, slechthorend, autistisch of doofblind zijn. Wij helpen u verder met onderzoek, zorg en onderwijs.">
        <!---->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="De wereld van Kentalis">
        <link rel="apple-touch-startup-image" href="/assets/icon/apple-icon-76x76.png" />
        <!---->
        <link rel="shortcut icon" href="favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
        <meta name="msapplication-tap-highlight" content="no" />
        <!---->
        <!---->
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/icon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/icon/favicon-16x16.png">
        <link rel="manifest" href="/assets/icon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/assets/icon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!---->
        <link rel="stylesheet" href="/assets/css/normalize.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/css/phone.css" />

        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="orientationSpy"></div>
        
        <div style="height:1000px; display:none;" id="bodyFiller"></div>
        
        <div style="position:fixed; width:100%; height:100%; top:0px; left:0px; background:#000; z-index:1000;" id="mainHider">
            <div class="centerpos">
                <div class="centerpos" style="width:60px; height:60px;">
                    <img src="/assets/img/loading_icon.png" class="loader" style="width:100%; height:100%;" />
                </div>
            </div>
        </div>
        
        <div id="scrollDiv">
            <div id="mainDiv">
                <div id="homeDiv">
                    <span class="hdrfont hdrhome">
                        Kentalis bestaat <span class="uclr">225</span> jaar
                    </span>
                    <p>
                        Tijdens haar lange geschiedenis heeft de instelling alles in het werk gesteld om doven te leren communiceren.
                    </p>
                </div>
				<?php
                    for($i = 0; $i < count($themes); $i++){
                        $theme = $themes[$i]['name'];
                        $tslug = $themes[$i]['url_name'];
						$info = $themes[$i]['info'];
						?>
                        <div class="textDiv" style="display:none;" id="text_<?php echo $tslug?>">
                            <?php echo $info?>
                        </div>
						<?php
                    }
                ?>
                
                <div id="contentWrap">
                    <?php
                        $nr = 0;
						$nr2 = 0;
                        for($i = 0; $i < count($themes); $i++){
							$nr2++;
                            $theme = $themes[$i]['name'];
                            $tslug = $themes[$i]['url_name'];
                            $tclass = 'tclass_'.$tslug;
							$nr3 = 0;
                            for($i2 = 0; $i2 < count($themes[$i]['objects']); $i2++){
                                $nr++;
								$nr3++;
                                $name = $themes[$i]['objects'][$i2]['name'];
                                $slug = $themes[$i]['objects'][$i2]['url_name'];
                                $poster = $themes[$i]['objects'][$i2]['poster'];
                                $img = $themes[$i]['objects'][$i2]['img'];
                                $info = $themes[$i]['objects'][$i2]['info'];
                                $video = $themes[$i]['objects'][$i2]['video'];
                                $video_sign = $themes[$i]['objects'][$i2]['video_sign-language'];
                                $subs = $themes[$i]['objects'][$i2]['subs'];
                                ?>
                                <div class="contentItemWrap <?php echo $tclass?>" data-object-slug="<?php echo $slug?>" id="itemDiv_<?php echo $nr?>">
                                    <div class="contentPosterWrap">
                                        <img src="<?php echo $poster?>" class="cimg" />
                                        <div class="gpos">
                                            <div class="centerpos tacenter">
                                                <i class="fa fa-angle-right controlArrow shade1 iconPlay"></i>
                                                <div style="height:3px;"></div>
                                                <span class="hdrfont icontext playText">PLAY</span>
                                            </div>
                                            <a href="javascript:void(0)" class="gpos block100 vcontrol" data-theme-id="<?php echo $nr2?>" data-vid="<?php echo $nr3?>"></a>
                                            <div id="shareBtnWrap">
                                            	<img src="/assets/img/share_icon.png" style="width:100%;" />
                                                <a href="javascript:void(0)" class="gpos block100 shareClick" data-theme-name="<?php echo $tslug?>" data-item-name="<?php echo $slug?>" data-theme-id="<?php echo $nr2?>" data-item-id="<?php echo $nr3?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contentInfoWrap" id="ciw_<?php echo $nr?>">
                                        <div class="contentInfoImg">
                                            <div class="centerpos">
                                                <div class="playiconHold" style="opacity: 1;">
                                                    <div class="diamond playicon">
                                                        <div class="iconimg diamondInner" style="background-image: url('<?php echo $img?>');"></div>
                                                    </div>
                                                </div>
                                                <div class="centerpos" style="width:150%; height:150%;">
                                                    <a href="javascript:void(0)" class="gpos block100 vcontrol">
                                                        <img src="/assets/img/trans.png" class="gpos block100" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contentInfoTxt">
                                            <div class="infoTxt">
                                                <?php echo $info?>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="gpos block100 icontrol" data-nr="<?php echo $nr?>">
                                        	<img src="/assets/img/trans.png" class="gpos block100" />
                                        </a>
                                    </div>
                                    <div class="contentMoreWrap">
                                        <i class="fa fa-angle-down infoArrow"></i>
                                    </div>
                                    <div class="contentLessWrap">
                                        <i class="fa fa-angle-up infoArrow"></i>
                                    </div>
                                </div>
                                <div id="spacer_verti_content"></div>
                                <?php
                            }
                        }
                    ?>
                    <div style="height:70px;"></div>
            
                    <div id="vidWrap">
                        <video src="/assets/placehold/init.mp4" controls id="play1">
                        </video>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div id="headerWrap">
        	<div id="headerLogo">
                <img src="/assets/img/phone/logo.png" style="width:100%" />
            	<a href="javascript:void(0)" class="block100 gpos" id="logoClick"></a>
            </div>
        	<div id="headerMenuBtn">
            	<a href="javascript:void(0)" class="block100 gpos" id="menuClick">
                    <img src="/assets/img/phone/menu_button.png" style="width:100%" />
                </a>
            </div>
            <div style="clear:both;"></div>
        </div>
        
        <div style="display:none;" id="colofonWrap">
            <div style="text-align:right;">
                <div id="colofonCloser">
                    <img src="/assets/img/close.png" style="width:100%;" />
                    <a href="javascript:void(0)" class="block100 gpos" id="colofonClose"></a>
                </div>
            </div>
        	<div style="padding:24px; padding-top:0;" id="colofonTextWrap">
                <h1>Colofon</h1>
                <p>
                    Collaboratively administrate empowered markets via plug-and-play networks.<br/>Dynamically procrastinate B2C users after installed base benefits.<br/>Dramatically visualize customer directed convergence without revolutionary ROI.<br/><br/>
                    <b>Efficiently</b> unleash cross-media information without cross-media value.<br/>Quickly maximize timely deliverables for real-time schemas.<br/>Dramatically maintain clicks-and-mortar solutions without functional solutions.<br/><br/>
                    Completely synergize <a href="#">resource</a> taxing relationships via premier niche markets.<br/>Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.
                </p>
            </div>
        </div>

        <div style="display:none;" id="shareWrap">
            <div style="text-align:right;">
                <div id="shareCloser">
                    <img src="/assets/img/close.png" style="width:100%;" />
                    <a href="javascript:void(0)" class="block100 gpos" id="shareClose"></a>
                </div>
            </div>
        	<div id="shareTextWrap">
            	<div class="hdrfont" id="shareTitle">
                    Delen
                </div>
                <div style="text-align:center; margin-top:10px; margin-bottom:10px;">
                	<div id="shareItemimg">
                    	<img src="/assets/img/tmp/i1.jpg" id="shareImg" />
                    </div>
                    <div id="shareSpacer"></div>
                	<div id="shareItemTitle">
                    	My beauty title
                    </div>
                </div>
            	<div class="shareSetWrap">
                	<i class="fa fa-facebook-official" style="margin-right:10px;"></i> Facebook
                    <a href="<?php echo $url_FB?>" target="_blank" class="block100 gpos" id="sharing_FB"></a>
                </div>
                <div></div>
            	<div class="shareSetWrap">
                	<i class="fa fa-twitter-square" style="margin-right:10px;"></i> Twitter
                    <a href="<?php echo $url_TW?>" target="_blank" class="block100 gpos" id="sharing_TW"></a>
                </div>
                <div></div>
            	<div class="shareSetWrap">
                	<i class="fa fa-google-plus-square" style="margin-right:10px;"></i> Google+
                    <a href="<?php echo $url_GP?>" target="_blank" class="block100 gpos" id="sharing_GP"></a>
                </div>
            </div>
        </div>
        
        <div id="menuWrap">
        	<div style="text-align:right;">
            	<div id="menuCloser">
                    <img src="/assets/img/close.png" style="width:100%;" />
                    <a href="javascript:void(0)" class="block100 gpos" id="menuClose"></a>
                </div>
                <div id="menuBtnWrap">
                	<div class="hdrfont menuBtnTxt menuBtnActive" id="menubtn_0" data-id="0">
                    	Alle thema's
                        <a href="javascript:void(0)" class="block100 gpos menuThemeBtn" data-menu-id="0" data-menu-slug="alle-themas"></a>
                    </div>
					<?php
                        $nr = 0;
                        for($i = 0; $i < count($themes); $i++){
                            $nr++;
                            $theme = $themes[$i]['name'];
                            $tslug = $themes[$i]['url_name'];
                            ?>
                            <div class="hdrfont menuBtnTxt" id="menubtn_<?php echo $nr?>" data-id="<?php echo $nr?>">
                                <?php echo $theme?>
                                <a href="javascript:void(0)" class="block100 gpos menuThemeBtn" data-menu-id="<?php echo $nr?>" data-menu-slug="<?php echo $tslug?>"></a>
                            </div>
                            <?php
                        }
                    ?>
                	<div class="hdrfont menuBtnTxt menuBtnTxt2" id="menubtn_colofon">
                        <div style="display:inline-block;">
                            Gebarentaal 
                        </div>
                        <div style="display:inline-block; position:relative;">
                            &nbsp;aan 
                            <a href="javascript:void(0)" class="block100 gpos" id="signLangBtnOn"></a>
                        </div>
                        <div style="display:inline-block;">
                            / 
                        </div>
                        <div style="display:inline-block; position:relative; color:rgb(185,254,111);">
                            uit 
                            <a href="javascript:void(0)" class="block100 gpos" id="signLangBtnOff"></a>
                        </div>
                    </div>
                	<div class="hdrfont menuBtnTxt menuBtnTxt2" id="menubtn_colofon">
                    	Colofon
                        <a href="javascript:void(0)" class="block100 gpos" data-menu-slug="colofon" id="colofonBtn"></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <script>
			var jsonObjects = <?php echo $jsonObjects?>;
			var uri_theme = '<?php echo $uriTheme?>';
			var uri_object = '<?php echo $uriObject?>';
			var baseUrl = '<?php echo $baseUrl?>';
        </script>
        <script src="/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="/assets/js/gsap/TweenMax.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/lib/underscore.js"></script>
        <script src="/assets/js/lib/backbone.js"></script>
        <script src="/assets/js/phone.js"></script>

    </body>
</html>
