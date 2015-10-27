<?php
include 'bootstrap.php';
//shuffle($themes);
$jsonObjects = json_encode($themes_by_key);
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
        <meta property="og:image" content="http://<?=$_SERVER['HTTP_HOST'];?><?=$og['poster'];?>"/>
        <meta property="og:site_name" content="De Wereld van Kentalis"/>
        <meta property="og:description" content="<?=strip_tags(substr($og['info'],strpos($og['info'],'<p>')));?>"/>
        <?php if($og['video'] != "") { ?><!---->
        <meta property="og:video" content="http://<?=$_SERVER['HTTP_HOST'];?><?=$og['video'];?>"/>
        <?php } ?><!---->
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
                    for($i = 0; $i < count($themes_by_key); $i++){
                        $theme = $themes_by_key[$i]['name'];
                        $tslug = $themes_by_key[$i]['url_name'];
						$info = $themes_by_key[$i]['info'];
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
                        for($i = 0; $i < count($themes_by_key); $i++){
							$nr2++;
                            $theme = $themes_by_key[$i]['name'];
                            $tslug = $themes_by_key[$i]['url_name'];
                            $tclass = 'tclass_'.$tslug;
							$nr3 = 0;
                            for($i2 = 0; $i2 < count($themes_by_key[$i]['objects']); $i2++){
                                $nr++;
								$nr3++;
                                $name = $themes_by_key[$i]['objects'][$i2]['name'];
                                $slug = $themes_by_key[$i]['objects'][$i2]['url_name'];
                                $poster = $themes_by_key[$i]['objects'][$i2]['poster'];
                                $img = $themes_by_key[$i]['objects'][$i2]['img'];
                                $info = $themes_by_key[$i]['objects'][$i2]['info'];
                                $video = $themes_by_key[$i]['objects'][$i2]['video'];
                                $video_sign = $themes_by_key[$i]['objects'][$i2]['video_sign-language'];
                                $subs = $themes_by_key[$i]['objects'][$i2]['subs'];
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
                <h1 class="hdrfont">Colofon</h1>
                <p>
                    Deze website geeft een schets van de verhalen die samen Kentalis vormen. Kentalis, niet als organisatie,  maar als het geheel dat alle betrokken mensen samen maken: (voormalige) leerlingen, cliënten, ouders, medewerkers, samenwerkpartners<br/>
                    Verhalen van doorzetters, die ook in soms lastige omstandigheden hun weg hebben gevonden. Soms ontroerend, vrolijk, trots, mooi, soms ook verdrietig of moeilijk te begrijpen met ogen van nu.
                    Veel dank aan alle mensen die bereid waren hun verhaal te vertellen.<br/><br/>
                    Concept: <a href="http://www.kentalis.nl/" target="_blank">Kentalis</a> en <a href="http://studiolouter.nl" target="_blank">Studio Louter</a><br/>
                    Realisatie: <a href="http://studiolouter.nl" target="_blank">Studio Louter</a><br/><br/>
                    Voor nog meer oude foto’s van Kentalis kunt u onze <a href="https://instagram.com/kentalis_historie/" target="_blank">Instagram</a> bezoeken.<br/><br/>
                    Op ons <a href="https://www.youtube.com/watch?v=gMqUcIczBpM&list=PL3sUyymNSl3JgeDPWM8pd7I5VFXpe3srs" target="_blank">Youtube-kanaal</a> vindt u het filmarchief van Kentalis met o.a. filmpjes uit de jaren 50.
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
        	<div id="shareTextWrap" style="padding-left:20px; padding-right:20px; text-align:left;">
            	<div class="hdrfont" id="shareTitle" style=" color:rgb(185,254,111); font-size:27px;">
                    Delen
                </div>
                <div style="margin-top:10px; margin-bottom:10px;">
                	<div id="shareItemTitle" style="padding:0; margin:0;">
                    	My beauty title
                    </div>
                    <div id="shareSpacer"></div>
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
                        for($i = 0; $i < count($themes_by_key); $i++){
                            $nr++;
                            $theme = $themes_by_key[$i]['name'];
                            $tslug = $themes_by_key[$i]['url_name'];
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
