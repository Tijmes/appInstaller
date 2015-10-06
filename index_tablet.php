<?php
include 'bootstrap.php';
//shuffle($themes);
$jsonObjects = json_encode($themes);
//
$uri_fragments = explode("/",$_SERVER["REQUEST_URI"]);
$og['name'] = 'De wereld van Kentalis';
$og['info'] = 'Kentalis is er voor mensen met een taal- of spraakstoornis of die doof, slechthorend, autistisch of doofblind zijn. Wij helpen u verder met onderzoek, zorg en onderwijs.';
$og['img'] = '/assets/img/logo.png';
$og['video'] = '';
$uri_fragments = explode("/",$_SERVER["REQUEST_URI"]);

if(count($uri_fragments) > 2) {
    $og = getObject($uri_fragments[1],$uri_fragments[2]);
}
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
$shareUrl = $baseUrl.'/'.$uriTheme.'/'.$uriObject;
$mtitle = "De wereld van Kentalis";
$url_FB = "http://www.facebook.com/sharer/sharer.php?u=".$shareUrl."&title=".$mtitle;
$url_TW = "http://twitter.com/intent/tweet?status=".$mtitle."+".$shareUrl;
$url_GP = "https://plus.google.com/share?url=".$shareUrl;
//
$browserSupported = true;
$ua=getBrowser();
$yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
if($ua['name'] == 'Apple Safari' && $ua['platform'] == 'windows'){
	$browserSupported = false;
}
if($ua['name'] == 'Internet Explorer' && $ua['version'] < 9){
	$browserSupported = false;
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>De wereld van Kentalis</title>
        <meta name="keywords" content="kentalis, doof, kind, ouders, slechthorend, doofblind, autisme, zorg, onderwijs, diagnostiek, onderzoek, spraak, taal, cluster 2, communicatie, behandeling">
        <meta name="description" content="Kentalis is er voor mensen met een taal- of spraakstoornis of die doof, slechthorend, autistisch of doofblind zijn. Wij helpen u verder met onderzoek, zorg en onderwijs.">
        <!---->
        <link rel="shortcut icon" href="favicon.ico">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
        <meta property="og:title" content="<?=ucfirst($og['name']);?>"/>
        <meta property="og:image" content="http://<?=$_SERVER['HTTP_HOST'];?><?=$og['img'];?>"/>
        <meta property="og:site_name" content="De Wereld van Kentalis"/>
        <meta property="og:description" content="<?=strip_tags(substr($og['info'],strpos($og['info'],'<p>')));?>"/>
        <?php if($og['video'] != "") { ?>
        <meta property="og:video" content="http://<?=$_SERVER['HTTP_HOST'];?><?=$og['video'];?>"/>
        <?php } ?>
        <!---->
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/scss/front.scss" />

        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
    <body>
        
        <?
		if(!$browserSupported){
		?>
        <div style="position:fixed; width:100%; height:100%; top:0px; left:0px; background:#000;">
            <div class="centerpos" style="color:#fff; font-size:20px; max-width:600px; text-align:center;">
                <img src="/assets/img/logo.png" width="149" height="75" /><br><br>
                De browser die je gebruikt wordt niet ondersteund.<br>
                Kijk hier voor een geschikte browser:<br>
                <a href="http://browsehappy.com/" target="_blank">Surf Blij</a>
            </div>
        </div>
        <?
			exit;
		}
		?>
        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div id="container" class="centerpos" style="width:1600px; height:900px;">
            
            <div class="gpos" id="vidWrap">
                <video style="width:1600px; height:900px; opacity:0;" src="/assets/placehold/init.mp4" preload="auto" id="play1">
                </video>
            </div>
            
            <div class="gpos" style="text-align:left;" id="vidOverlay">
                <div class="cuecatch" id="subs"></div>
                <div style="position:absolute; bottom:7%; left:0px; width:100%;" id="progressLineWrap">
                    <div style="width:100%; padding:10px;">
                        <div style="width:100%; height:5px; background:rgba(185,254,111,0.1);">
                            <div style="width:0%; height:100%; background:rgba(185,254,111,1);" id="progressLine">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gpos" style="overflow:hidden;" id="secHold">
                <div class="gpos" id="secWrap">

					<?php
						$nr = 0;
						for($i = 0; $i < count($themes); $i++){
							$theme = $themes[$i]['name'];
							$tslug = $themes[$i]['url_name'];
							for($i2 = 0; $i2 < count($themes[$i]['objects']); $i2++){
								$nr++;
								$name = $themes[$i]['objects'][$i2]['name'];
								$slug = $themes[$i]['objects'][$i2]['url_name'];
								$poster = $themes[$i]['objects'][$i2]['poster'];
								$img = $themes[$i]['objects'][$i2]['img'];
								$info = $themes[$i]['objects'][$i2]['info'];
								$video = $themes[$i]['objects'][$i2]['video'];
								$video_sign = $themes[$i]['objects'][$i2]['video_sign-language'];
								$subs = $themes[$i]['objects'][$i2]['subs'];
								?>
                                <div class="gpos sexion" id="sec<?php echo $nr?>" data-id="<?php echo $nr?>" data-slug="<?php echo $slug?>" data-tslug="<?php echo $tslug?>" data-poster="<?php echo $poster?>" data-img="<?php echo $img?>" data-theme="<?php echo $theme?>" data-video="<?php echo $video?>" data-videosign="<?php echo $video_sign?>" data-subs="<?php echo $subs?>">
                                    <div class="gpos innerSexionWrap" style="overflow:hidden;">
                                        <div class="gpos bgimg posterimg"></div>
                                        <div class="centerpos" style="z-index:1000;">
                                            <div class="playiconHold" style="opacity: 1;">
                                                <div class="diamond playicon">
                                                    <div class="iconimg diamondInner">
                                                        <i class="fa fa-angle-right centerpos controlArrow shade1" style="margin-top: -10%; margin-left: 5px; font-size: 70px; opacity: 1;"></i>
                                                        <span class="hdrfont centerpos icontext">PLAY</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="centerpos" style="width:150%; height:150%;">
                                                <a href="javascript:void(0)" class="gpos block100 vcontrol"></a>
                                            </div>
                                        </div>
                                        
                                        <div class="bottomPanelWrap" style="position: absolute; width: 100%; height: 36.5%; bottom: 0px;">
                                            <div style="height:10%;">
                                            </div>
                                            <div style="background:rgba(255,255,255,0.3); border-top:1px solid rgba(255,255,255,0.8); height:90%; position:relative;">
                                                <div style="position:absolute; top:0; left:0; width:100%; height:100%; overflow:hidden;">
                                                    <div style="position:absolute; bottom:0px;">
                                                        <canvas class="blurCanvas blur" style="width:100%; height:100%;" id="blurCanvas<?php echo $nr?>"></canvas>
                                                    </div>
                                                </div>
                                                <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(255,255,255,0.2);">
                                                </div>
                                                <div class="bottomPanelContent">
                                                    <div class="bottomPanelImg">
                                                        <div class="bgimg infoimg" style="width: 100%; height: 100%; margin-top: -1px;">
                                                        </div>
                                                    </div>
                                                    <div class="infotext feelFontSize">
													<?php echo $info?>
                                                    </div>
                                                    <div style="clear:both;"></div>
                                                    <div style="width:50px; height:50px; top:0px; right:0px; padding:10px; position:absolute;">
                                                        <img src="/assets/img/close.png" style="width:100%;">
                                                        <div class="centerpos" style="width:150%; height:150%;">
                                                            <a href="javascript:void(0)" class="gpos block100 bottomPanelClose"></a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div> 
                                <?php
							}
						}
					?>

                </div>
            </div>
            
            <div class="centerpos" id="loadicon">
                <div class="centerpos" style="width:68px; height:68px;">
                    <img src="/assets/img/loading_icon.png" class="loader" style="width:100%; height:100%;" />
                </div>
            </div>
            
            <!-- ///// directonal button controls ///// -->
            <div class="movebtn" id="controlBtnMoveLeft">
                <div style="position:absolute; width:100%; height:100%;" id="controlBtnMoveInnerLeft">
                    <div class="uiTextBtns feelFontSize" id="uiTextLeft">Vorig object</div>
                    <i class="fa fa-angle-left centerpos controlArrow shade1"></i>
                    <a href="javascript:void(0)" class="centerpos" style="width:450%; height:50%;" id="clickMoveLeft"></a>
                </div>
            </div>
            <div class="movebtn" id="controlBtnMoveRight">
                <div style="position:absolute; width:100%; height:100%;" id="controlBtnMoveInnerRight">
                    <div class="uiTextBtns feelFontSize" id="uiTextRight">Volgend object</div>
                    <i class="fa fa-angle-right centerpos controlArrow shade1"></i>
                    <a href="javascript:void(0)" class="centerpos" style="width:500%; height:50%;" id="clickMoveRight"></a>
                </div>
            </div>
            <div class="movebtn" id="controlBtnMoveUp">
                <div style="position:absolute; width:100%; height:100%;" id="controlBtnMoveInnerUp">
                    <div class="uiTextBtns feelFontSize"  id="uiTextUp">Bekijk alle objecten</div>
                    <i class="fa fa-angle-up centerpos controlArrow shade1"></i>
                    <a href="javascript:void(0)" class="centerpos" style="width:50%; height:180%;" id="clickMoveUp"></a>
                </div>
            </div>
            <div class="movebtn" id="controlBtnMoveDown">
                <div style="position:absolute; width:100%; height:100%;" id="controlBtnMoveInnerDown">
                    <div class="uiTextBtns feelFontSize" id="uiTextDown">Lees meer</div>
                    <i class="fa fa-angle-down centerpos controlArrow shade1"></i>
                    <a href="javascript:void(0)" class="centerpos" style="width:50%; height:150%;" id="clickMoveDown"></a>
                </div>
            </div>
            <!-- /////////////////////////////////////// -->
            
            <div class="gpos" style="display:none;" id="topPanelWrap">
                <div style="height:90%; border-bottom:1px solid rgba(255,255,255,0.7); position:relative;">
                    <div class="gpos" style="overflow:hidden;">
                        <canvas class="blur" id="topPanelBlurCanvas"></canvas>
                    </div>
                    <div class="gpos" style=" background:rgba(0,0,0,0.5);">
                        <div style="height:20%;"></div>
                        <div style="height:70%; background:rgba(255,255,255,0.5);" id="themesHold">
                            <div style="height:100%; position:relative;" id="themesWrap">
								<?php
                                    $nr = 0;
									$nr3 = 0;
                                    for($i = 0; $i < count($themes); $i++){
                                        $theme = $themes[$i]['name'];
										$tslug = $themes[$i]['url_name'];
										$info = $themes[$i]['info'];
										$nr++;
										?>
										<div class="gpos" id="themeHold_<?php echo $nr?>" data-theme-id="<?php echo $nr?>" data-theme-slug="<?php echo $tslug?>">
                                            <div class="themeTextDiv">
                                                <div class="themeTextWrap">
                                                    <div class="themeTextPlace feelFontSize">
                                                    	<?php echo $info?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="themeItemsDiv" id="themeItemsWrap_<?php echo $nr?>">
											<?php
                                            $nr2 = 0;
                                            for($i2 = 0; $i2 < count($themes[$i]['objects']); $i2++){
                                                $nr2++;
												$nr3++;
                                                $name = $themes[$i]['objects'][$i2]['name'];
												$oslug = $themes[$i]['objects'][$i2]['url_name'];
                                                $img = $themes[$i]['objects'][$i2]['img'];
                                                ?>
                                                <div class="centerpos" style="left:16.5%; top:51%;" id="theme<?php echo $nr?>_itemBtn<?php echo $nr2?>" mbid="<?php echo $nr2?>">
                                                    <div class="playiconHold" style="opacity: 1;">
                                                        <div class="diamond playicon" style="border-color: rgb(255,255,255);">
                                                            <div class="iconimg diamondInner" style="background-image: url('<?php echo $img?>');">
                                                                <span class="hdrfont centerpos themeIconText" style="color: rgb(255, 255, 255);"><?php echo $name?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gpos">
                                                        <a href="/<?php echo $tslug?>/<?php echo $oslug?>" class="block100 gpos themeBtnClick" mbaid="<?php echo $nr3?>" mbid="<?php echo $nr3?>" mtbid="<?php echo $nr2?>" mtid="<?php echo $nr?>"></a>
                                                    </div>
                                                </div>
												<?php
                                            }
                                            ?>
											</div>
                                            <div style="clear:both;"></div>
                                        </div>
										<?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div style="height:10%; position:relative;">
                            
                            <div class="themeNavHold" id="themeNavLeft">
                                <div class="themeNavWrap">
                                    <div class="themeNavComp">
                                        <div class="centerpos" style="margin-top:-6%;">
                                            <i class="fa fa-angle-left centerpos controlArrow" style="font-size: 60px;"></i>

                                        </div>
                                    </div>
                                    <div class="themeNavComp themeNavCompText feelFontSize">
                                        <div class="centerVerti">
                                            Vorig thema
                                        </div>
                                    </div>
                                </div>
                                <div class="themeNavHitLeft">
                                    <a href="javascript:void(0)" class="gpos" id="clickThemeNavLeft"></a>
                                </div>
                            </div>

                            <div class="themeNavHold" style="right:0px; left:auto;" id="themeNavRight">
                                <div class="themeNavWrap">
                                    <div class="themeNavComp" style="float:right;">
                                        <div class="centerpos" style="margin-top:-6%;">
                                            <i class="fa fa-angle-right centerpos controlArrow" style="font-size: 60px;"></i>
                                        </div>
                                    </div>
                                    <div class="themeNavComp themeNavCompText feelFontSize" style="float:right;">
                                        <div class="centerVerti" style="left:auto; right:0px;">
                                            Volgend thema
                                        </div>
                                    </div>
                                </div>
                                <div class="themeNavHitRight">
                                    <a href="javascript:void(0)" class="gpos" id="clickThemeNavRight"></a>
                                </div>
                            </div>
                            
                            <div class="centerpos" style="height:100%; width:50%; text-align:center; margin-top: -0.2%;">
                                <div class="centerpos" style="display:inline-block; width:150px; height:15px;" id="themeMiniIconWrap">
                                    <div style="display:inline-block; width:15px; height:15px; margin-right:5px; position:relative;" id="themeMiniIcon">
                                        <a href="javascript:void(0)" class="gpos themeNavClick">
                                            <img src="/assets/img/page_icon.png" style="width:100%" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div style="height:10%; position:relative;">
                    <div style="height:50%; top:27%; padding:5px; position:relative; text-align:center;">
                        <img src="/assets/img/close.png" style="height:100%; display:inline-block;" />
                    </div>
                    <div class="gpos">
                        <a href="javascript:void(0)" class="block100 gpos" id="topPanelClose"></a>
                    </div>
                </div>
            </div>
            
            <div class="uiTextHome" id="homeTextWrap">
                <div style="display:inline-block; max-width:600px;">
                    <span class="hdrfont" style="font-size:35px; text-transform:uppercase;">
                        Kentalis bestaat <span style="color: rgb(185,254,111);">225</span> jaar
                    </span>
                    <p>
                    Tijdens haar lange geschiedenis heeft de instelling alles in het werk gesteld om doven te leren communiceren.
                    </p>
                </div>
            </div>
            
            <div class="amenuWrap">
                <div style="display:inline-block; margin-right:8px;">
                    <div class="fontSizeBtnWrap" style="color:rgb(185,254,111);">
                        A
                        <a href="javascript:void(0)" class="block100 gpos" id="fontSizeBtn1"></a>
                    </div>
                    <div class="fontSizeBtnWrap" style="font-size:30px;">
                        A
                        <a href="javascript:void(0)" class="block100 gpos" id="fontSizeBtn2"></a>
                    </div>
                </div>
                <div style="display:inline-block; margin-right:18px;">
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
                <div style="display:inline-block; position:relative;">
                    Colofon 
                    <a href="javascript:void(0)" class="block100 gpos" id="colofonBtn"></a>
                </div>
            </div>
            
            <div id="shareIconsWrap">
                <div id="shareIconsHold">
                    <div class="centerVerti">
                        <div style="display:inline-block; margin-right:15px; position:relative;">
                            <i class="fa fa-facebook"></i>
                            <a href="https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&display=popup&ref=plugin&src=share_button" class="block100 gpos sharer" id="shareFB"></a>
                        </div>
                        <div style="display:inline-block; position:relative;">
                            <i class="fa fa-twitter"></i>
                            <a href="https://twitter.com/intent/tweet?hashtags=demo&original_referer=https%3A%2F%2Fdev.twitter.com%2Fweb%2Ftweet-button&ref_src=twsrc%5Etfw&related=twitterapi%2Ctwitter&text=Hello%20world&tw_p=tweetbutton&url=https%3A%2F%2Fexample.com%2Ffoo&via=twitterdev" class="block100 gpos sharer" id="shareTW"></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="shareBtnWrap">
                <div style="position:relative;">
                    <img src="/assets/img/share_icon.png" width="39" />
                    <a href="javascript:void(0)" class="block100 gpos" id="sharingBtn"></a>
                </div>
            </div>
            
            <!-- ///// nav button controls ///// -->
            <!--
            <div style="position:absolute; top:0; left:0; width:100%; height:32px; background:rgba(0,0,0,0.2); text-align:left; opacity:0.2; display:none;" id="toolNav">
                <div class="navclick toolBtn" mid="debug" style="margin-right:15px;"><i class="fa fa-cog"></i></div>
            </div>
            -->
            <!-- /////////////////////////////// -->
            
            <div class="gpos" style="background:rgba(0,0,0,0.65); display:none;" id="colofonWrap">
                <div class="centerpos" style="width:75%; height:75%;">
                    <div class="colofonTextPlace" id="colofonHold">
                        <div class="feelFontSize" style="position:relative;" id="colofonText">
                            <h1>Colofon</h1>
                            <p>
                                Collaboratively administrate empowered markets via plug-and-play networks.<br/>Dynamically procrastinate B2C users after installed base benefits.<br/>Dramatically visualize customer directed convergence without revolutionary ROI.<br/><br/>
                                <b>Efficiently</b> unleash cross-media information without cross-media value.<br/>Quickly maximize timely deliverables for real-time schemas.<br/>Dramatically maintain clicks-and-mortar solutions without functional solutions.<br/><br/>
                                Completely synergize <a href="#">resource</a> taxing relationships via premier niche markets.<br/>Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.
                            </p>
                        </div>
                        <div style="position:absolute; top:15px; right:20px; width:22px; height:25px; text-align:center;">
                            <img src="/assets/img/close.png" style="height:100%; display:inline-block;" />
                            <div class="centerpos" style="width:250%; height:180%;">
                                <a href="javascript:void(0)" class="block100 gpos" id="colofonClose"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gpos" style="background:rgba(0,0,0,0.65); display:none;" id="sharingWrap">
                <div class="centerpos" style="width:75%; height:75%;">
                    <div class="colofonTextPlace" id="sharingHold">
                        <div class="centerpos">
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
                                    <i class="fa fa-facebook-official" style="margin-right:10px; color:rgb(185,254,111);"></i> Facebook
                                    <a href="<?php echo $url_FB?>" target="_blank" class="block100 gpos" id="sharing_FB"></a>
                                </div>
                                <div></div>
                                <div class="shareSetWrap">
                                    <i class="fa fa-twitter-square" style="margin-right:10px; color:rgb(185,254,111);"></i> Twitter
                                    <a href="<?php echo $url_TW?>" target="_blank" class="block100 gpos" id="sharing_TW"></a>
                                </div>
                                <div></div>
                                <div class="shareSetWrap">
                                    <i class="fa fa-google-plus-square" style="margin-right:10px; color:rgb(185,254,111);"></i> Google+
                                    <a href="<?php echo $url_GP?>" target="_blank" class="block100 gpos" id="sharing_GP"></a>
                                </div>
                            </div>
                        </div>
                        <div style="position:absolute; top:15px; right:20px; width:22px; height:25px; text-align:center;">
                            <img src="/assets/img/close.png" style="height:100%; display:inline-block;" />
                            <div class="centerpos" style="width:250%; height:180%;">
                                <a href="javascript:void(0)" class="block100 gpos" id="sharingClose"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="position:absolute; top:0px; left:3%;">
                <img src="/assets/img/logo.png" width="149" height="75" style="cursor:pointer;" id="logoClick" />
            </div>
            
        </div>
        
        <!--
        <div id="divTemplates" style="display:none;">
        
            <div class="navclick toolBtn" mid="0" id="toolBtn"></div>
            
        </div>
        -->
        
        <div style="position:fixed; width:100%; height:100%; top:0px; left:0px; background:#000;" id="mainHider">
            <div class="centerpos">
                <div class="centerpos" style="width:68px; height:68px;">
                    <img src="/assets/img/loading_icon.png" class="loader" style="width:100%; height:100%;" />
                </div>
            </div>
        </div>
        
        <!--
        <div style="position:fixed; width:30%; background:rgba(255,255,255,0.6); padding:20px; display:none;" id="showDebugInfo">
        </div>
        -->
        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    
        <script>
			var jsonObjects = <?php echo $jsonObjects?>;
        </script>
        <script src="/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="/assets/js/gsap/TweenMax.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/lib/underscore.js"></script>
        <script src="/assets/js/lib/backbone.js"></script>
        <script src="/assets/js/main.js"></script>

    </body>
</html>
