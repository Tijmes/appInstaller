<?php
include 'bootstrap.php';
$jsonObjects = json_encode($themes_by_key);
$jsonObjectsCustomOrder = json_encode($myCustomOrder);
//
$uri_fragments = explode("/",$_SERVER["REQUEST_URI"]);
$og['name'] = 'De wereld van Kentalis';
$og['info'] = 'Kentalis is er voor mensen met een taal- of spraakstoornis of die doof, slechthorend, autistisch of doofblind zijn. Wij helpen u verder met onderzoek, zorg en onderwijs.';
$og['poster'] = '/assets/img/logo_kentalis.jpg';
$og['video'] = '';
$og_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];

if(count($uri_fragments) > 2) {
    $og = $themes_by_slug[$uri_fragments[1]]['objects'][$uri_fragments[2]];
}
$og_sm_text = "Bekijk ook dit leuke filmpje '".$og['name']."' op dewereldvankentalis.nl";
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
if($uriObject === "" && $uriTheme != ""){
	$shareUrl = $baseUrl.'/'.$uriTheme;
}
if($uriTheme === ""){
	$shareUrl = $baseUrl;
}
$mtitle = "De wereld van Kentalis";
$url_FB = "http://www.facebook.com/sharer/sharer.php?u=".$shareUrl."&title=".$mtitle;
$url_TW = "http://twitter.com/intent/tweet?status=".$mtitle."+".$shareUrl;
$url_GP = "https://plus.google.com/share?url=".$shareUrl;
$url_LI = "https://www.linkedin.com/shareArticle?url=".$shareUrl."&title=".$mtitle;
//
$ogposter = str_replace(' ', '%20', $og['poster']);
$ogvideo = str_replace(' ', '%20', $og['video']);
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
//
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
        <meta name="keywords" content="Doof,Kentalis.Koningshuis, Koninklijk,Gebarentaal, gebaren,Dovenonderwijs,lesmateriaal,Effatha,Instituut voor Doven,Henri Daniël Guyot,Sint Marie,Logopedie,Congres van Milaan,Doofblind,Audiologisch onderzoek,Tweede Wereldoorlog,Dovenshoah, dove Joden,Kalendersysteem,Verlof,Ambachtslessen,Kunst,Liplezen,Horen,Sint-Michielsgestel,Jan van Dijk,Martinus van Beek,Dena Upakara, Indonesië, Nederlands-Indië,TOS, taalstoornis,Dansles,Taalstrijd,Zuivere spreekmethode, zuiver spreken,Dovenpedagogiek">
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
        <meta name="twitter:card" content="De Wereld van Kentalis" />
        <meta name="twitter:site" content="@kentalis" />
        <meta name="twitter:creator" content="@StudioLouter" />
        <!---->
        <meta property="og:url" content="<?=$og_url?>"/>
        <meta property="og:title" content="<?=ucfirst($og['name']);?>"/>
        <meta property="og:image" content="http://<?=$_SERVER['HTTP_HOST'];?><?=$ogposter;?>"/>
        <meta property="og:site_name" content="De Wereld van Kentalis"/>
        <meta property="og:description" content="<?=$og_sm_text?>"/>
        <?php if($og['video'] != "") { ?><!---->
        <meta property="og:video" content="http://<?=$_SERVER['HTTP_HOST'];?><?=$ogvideo;?>"/>
        <?php } ?><!---->
        <!---->
        <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/scss/front.css" />

        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
    <body>
        <?php
		if($browserSupported === false){
		?>
        <div style="position:fixed; width:100%; height:100%; top:0px; left:0px; background:#000;">
            <div class="centerpos" style="color:#fff; font-size:20px; max-width:600px; text-align:center;">
                <img src="/assets/img/logo.png" width="149" height="75" /><br><br>
                De browser die je gebruikt wordt niet ondersteund.<br>
                Kijk hier voor een geschikte browser:<br>
                <a href="http://browsehappy.com/" target="_blank">Surf Blij</a>
            </div>
        </div>
        <?php
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
                    <div style="width:100%; padding:10px; padding-left:0; padding-right:0;">
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
					//
						$nr = 0;
						for($i = 0; $i < count($myCustomOrder); $i++){
							$nr++;
							$theme = $myCustomOrder[$i]['theme'];
							$tslug = $myCustomOrder[$i]['url_theme'];
							$name = $myCustomOrder[$i]['name'];
							$slug = $myCustomOrder[$i]['url_name'];
							$poster = $myCustomOrder[$i]['poster'];
							$img = $myCustomOrder[$i]['img'];
							$img_diamond = $myCustomOrder[$i]['img_diamond'];
							$info = $myCustomOrder[$i]['info'];
							$video = $myCustomOrder[$i]['video'];
							$video_sign = $myCustomOrder[$i]['video_sign-language'];
							$subs = $myCustomOrder[$i]['subs'];
							?>
                                <div class="gpos sexion" id="sec<?php echo $nr?>" data-id="<?php echo $nr?>" data-slug="<?php echo $slug?>" data-tslug="<?php echo $tslug?>" data-poster="<?php echo $poster?>" data-img="<?php echo $img?>" data-img_diamond="<?php echo $img_diamond?>" data-theme="<?php echo $theme?>" data-video="<?php echo $video?>" data-videosign="<?php echo $video_sign?>" data-subs="<?php echo $subs?>">
                                    <div class="gpos innerSexionWrap" style="overflow:hidden;">
                                        <div class="gpos bgimg posterimg"></div>
                                        <div class="centerpos" style="z-index:1000;">
                                            <div class="playiconHold" style="opacity: 1;">
                                                <div class="diamond playicon" style="border:4px solid rgb(185,254,111);">
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
                                        
                                        <div class="hdrfont shade2 itemNameTitle" style="position:absolute; bottom:93px; width:100%; text-align:center; color:#fff; font-size:40px; text-transform: uppercase; z-index:1;">
                                        	<?php echo $name?>
                                        </div>
                                        
                                        <div class="bottomPanelWrap" style="position: absolute; width: 100%; height: 36.5%; bottom: 0px; z-index:2;">
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
                    //
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
                    <div class="uiTextBtns feelFontSize" id="uiTextLeft">Vorige</div>
                    <i class="fa fa-angle-left centerpos controlArrow shade1"></i>
                    <a href="javascript:void(0)" class="centerpos" style="width:450%; height:50%;" id="clickMoveLeft"></a>
                </div>
            </div>
            <div class="movebtn" id="controlBtnMoveRight">
                <div style="position:absolute; width:100%; height:100%;" id="controlBtnMoveInnerRight">
                    <div class="uiTextBtns feelFontSize" id="uiTextRight">Volgende</div>
                    <i class="fa fa-angle-right centerpos controlArrow shade1"></i>
                    <a href="javascript:void(0)" class="centerpos" style="width:500%; height:50%;" id="clickMoveRight"></a>
                </div>
            </div>
            <div class="movebtn" id="controlBtnMoveUp">
                <div style="position:absolute; width:100%; height:100%;" id="controlBtnMoveInnerUp">
                    <div class="uiTextBtns feelFontSize"  id="uiTextUp">Overzicht alle films</div>
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
                                    for($i = 0; $i < count($themes_by_key); $i++){
                                        $theme = $themes_by_key[$i]['name'];
										$tslug = $themes_by_key[$i]['url_name'];
										$info = $themes_by_key[$i]['info'];
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
                                            for($i2 = 0; $i2 < count($themes_by_key[$i]['objects']); $i2++){
                                                $nr2++;
												$nr3++;
                                                $name = $themes_by_key[$i]['objects'][$i2]['name'];
												$oslug = $themes_by_key[$i]['objects'][$i2]['url_name'];
                                                $img = $themes_by_key[$i]['objects'][$i2]['img'];
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
                                                        <a href="/<?php echo $tslug?>/<?php echo $oslug?>" class="block100 gpos themeBtnClick" moid="<?php echo $oslug?>" mbaid="<?php echo $nr3?>" mbid="<?php echo $nr3?>" mtbid="<?php echo $nr2?>" mtid="<?php echo $nr?>"></a>
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
                    <div class="centerpos" style="width:25%; height:100%;">
                        <a href="javascript:void(0)" class="block100 gpos" id="topPanelClose"></a>
                    </div>
                </div>
            </div>
            
            <div class="uiTextHome" id="homeTextWrap" style="display:none;">
                <!--
                <div style="display:inline-block; max-width:600px;">
                    <span class="hdrfont" style="font-size:35px; text-transform:uppercase;">
                        Kentalis bestaat <span style="color: rgb(185,254,111);">225</span> jaar
                    </span>
                    <p>
                        Tijdens haar lange geschiedenis heeft de instelling alles in het werk gesteld om doven te leren communiceren.
                    </p>
                </div>
                -->
                <div style="display:inline-block; max-width:600px;">
                    <span class="hdrfont" style="font-size:35px; text-transform:uppercase;">
                        De wereld van Kentalis
                    </span>
                    <p>
                        225 jaar historie verteld aan de hand van voorwerpen en de ervaringen van mensen. Bekijk de filmpjes en stap in de wereld van Kentalis.
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
                        NGT 
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
                    Meer info
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
            
            <div class="gpos" style="background:rgba(0,0,0,0.45); display:none;" id="colofonWrap">
                <div class="centerpos" style="width:44%; height:65%;">
                    <div class="colofonTextPlace" id="colofonHold">
                        <div class="feelFontSizeX" style="position:relative;" id="colofonText">
                            <h1>Meer informatie</h1>
                            <div style="height:20px;"></div>
                            <div id="miscroll" style="overflow-y: scroll; -webkit-overflow-scrolling: touch; height: 435px; margin-right: -15px; padding-right: 5px; position:absolute;">
                            	<p>
                                Deze website geeft een schets van de verhalen die samen de wereld van Kentalis vormen. Kentalis, niet als organisatie, maar als het geheel dat alle betrokken mensen samen maken: (voormalige) leerlingen, cliënten, ouders, medewerkers, en partnerorganisaties.<br/><br/>
                                Verhalen van doorzetters, die ook in soms lastige omstandigheden hun weg hebben gevonden. Soms ontroerend, vrolijk, trots, mooi, soms ook verdrietig of moeilijk te begrijpen door de ogen van nu.<br/><br/>
                                Concept & realisatie:: <a href="http://www.kentalis.nl/" target="_blank">Kentalis</a> en <a href="http://studiolouter.nl" target="_blank">Studio Louter</a><br/>
                                Deze website is tot stand gekomen dankzij een gift van de steunstichting IHKV.<br/><br/>
                                <span class="inlineChapter">Museum voor Dovenonderwijs</span><br/>
                                In de historische kapel van het voormalige doveninstituut in Sint-Michielsgestel is het Museum voor Dovenonderwijs gevestigd.  Voor meer informatie kunt u mailen naar museumdovenonderwijs [apenstaart] kentalis [punt] nl<br/><br/>
                                <span class="inlineChapter">App met stadswandeling</span><br/>
                                Via een  speciale app kunt u virtueel een stadswandeling maken door het centrum van Groningen, langs historische locaties uit het leven van Henri Daniel Guyot, de oprichter van het instituut voor doven 'Guyot'. <a href="http://apps.appmachine.com/4197IA" target="_blank">Download de app</a>.<br/><br/>
                                <span class="inlineChapter">Beeldarchief</span><br/>
                                Voor nog meer oude foto’s van Kentalis kunt u onze <a href="https://www.flickr.com/photos/kentalis" target="_blank">Flickr account</a> bezoeken. Op ons <a href="https://www.youtube.com/playlist?list=PL3sUyymNSl3JgeDPWM8pd7I5VFXpe3srs" target="_blank">YouTube-kanaal</a> vindt u het filmarchief van Kentalis met o.a. filmpjes uit de jaren 50.
                                </p>
                            </div>
                        </div>
                        <div style="position:absolute; top:35px; right:35px; width:40px; height:40px; text-align:center;">
                            <img src="/assets/img/close.png" style="height:100%; display:inline-block;" />
                            <div class="centerpos" style="width:250%; height:180%;">
                                <a href="javascript:void(0)" class="block100 gpos" id="colofonClose"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gpos" style="background:rgba(0,0,0,0.55); display:none;" id="sharingWrap">
                <div class="centerpos" style="width:44%; height:72%;">
                    <div class="colofonTextPlace" id="sharingHold">
                        <div class="feelFontSize" style="position:relative;" id="shareTextWrap">
                            <h1 style="margin-left: -2px;">Delen</h1>
                            <div id="shareItemTitle" style="margin-bottom:20px; margin-top:10px; font-size:22px;"></div>
                            <div>
                                <img src="/assets/img/trans.png" id="shareImg" style="width:100%; height:100%;" />
                            </div>
                            <div style="margin-top:20px; font-size:0; position:relative;">
                            	<div style="display:inline-block; width:25%; text-align:center;">
                                    <a href="<?php echo $url_FB?>" class="sharer" target="_blank" id="sharing_FB">
                                        <img src="/assets/img/sb_facebook.png" style="width:77%;" />
                                    </a>
                                </div>
                            	<div style="display:inline-block; width:25%; text-align:center;">
                                    <a href="<?php echo $url_TW?>" class="sharer" target="_blank" id="sharing_TW">
                                        <img src="/assets/img/sb_twitter.png" style="width:77%;" />
                                    </a>
                                </div>
                            	<div style="display:inline-block; width:25%; text-align:center;">
                                    <a href="<?php echo $url_GP?>" class="sharer" target="_blank" id="sharing_GP">
                                        <img src="/assets/img/sb_google_plus.png" style="width:77%;" />
                                    </a>
                                </div>
                            	<div style="display:inline-block; width:25%; text-align:center;">
                                    <a href="<?php echo $url_LI?>" class="sharer" target="_blank" id="sharing_LI">
                                        <img src="/assets/img/sb_linkedin.png" style="width:77%;" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div style="position:absolute; top:35px; right:35px; width:40px; height:40px; text-align:center;">
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
        
        <div style="position:fixed; width:100%; height:100%; top:0px; left:0px; background:#000;" id="mainHider">
            <div class="centerpos">
                <div class="centerpos" style="width:68px; height:68px;">
                    <img src="/assets/img/loading_icon.png" class="loader" style="width:100%; height:100%;" />
                </div>
            </div>
        </div>
        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    
        <script>
			var jsonObjects = <?php echo $jsonObjects?>;
			var jsonObjectsCustomOrder = <?php echo $jsonObjectsCustomOrder?>;
			var baseUrl = '<?php echo $baseUrl?>';
        </script>
        <script src="/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="/assets/js/gsap/TweenMax.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/lib/underscore.js"></script>
        <script src="/assets/js/lib/backbone.js"></script>
        <script src="/assets/js/main.js"></script>

    </body>
</html>
