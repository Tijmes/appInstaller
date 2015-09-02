<?php
include 'bootstrap.php';
$jsonObjects = json_encode($themes);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Kentalis</title>
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
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/normalize.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <style>
			/* /////////////////////////////////////////////////////////////// */
			
			@font-face {
			  font-family: 'custom';
			  src: url('/assets/fonts/fira/FiraSansOT.eot?#iefix') format('embedded-opentype'),  
					url('/assets/fonts/fira/FiraSansOT.otf')  format('opentype'),
					url('/assets/fonts/fira/FiraSansOT.woff') format('woff'), 
					url('/assets/fonts/fira/FiraSansOT.ttf')  format('truetype'), 
					url('/assets/fonts/fira/FiraSansOT.svg#FiraSansOT') format('svg');
			  font-weight: normal;
			  font-style: normal;
			}
			@font-face {
				font-family: 'hdr';
				src: url('/assets/fonts/basenineb/BaseNineB.eot?#iefix') format('embedded-opentype'),  
				url('/assets/fonts/basenineb/BaseNineB.woff') format('woff'), 
				url('/assets/fonts/basenineb/BaseNineB.ttf')  format('truetype'), 
				url('/assets/fonts/basenineb/BaseNineB.svg#BaseNineB') format('svg');
				font-weight: normal;
				font-style: normal;
			}
			
			html, body{
				padding:0px; margin:0px;
				font-family: "custom","Trebuchet MS", Helvetica, sans-serif;
				background:#000;
				overflow:hidden;
			}
			html {min-height:100%;}
			
			h1,h2,h3,h4,h5,h6{
				margin: 0px; margin-bottom:2px;
				font-weight: 500;
				color:rgba(185,254,111,1);
				font-size:23px;
			}
			p{
				margin:0;
			}
			
			* {
				-webkit-box-sizing: border-box;
				   -moz-box-sizing: border-box;
						box-sizing: border-box;
			}
			
			strong{
				color: #388349;
				color: #ffffff;
			}
			
			a{
				text-decoration:underline;
				font-style: italic;
			}
			a:link {
				color: rgb(185,254,111);
			}
			a:visited {
				color: rgb(185,254,111);
			}
			a:hover {
				color: rgb(185,254,111);
			}
			a:active {
				color: rgb(185,254,111);
			}			
			.hdrfont{
				font-family: 'hdr', sans-serif;
			}
			
			
			
			.mwrap{
				position:absolute; height:100%; width:100%; top:0px; left:0px;
			}
			.contain{
				display:table; width:100%; max-width:1600px; height:100%; margin-left:auto; margin-right:auto;
			}
			.holder{
				display:table-cell; width:100%; height:100%; /*padding:10px;*/
				vertical-align:middle;
			}
			.sheet{
				display:table; margin-left:auto; margin-right:auto; width:100%;
				text-align:center; position:relative;
			}
			.gpos{
				position:absolute; top:0; left:0; bottom:0; right:0;
			}
			.centerpos{
				position:absolute; top:50%; left:50%;
				-webkit-transform: translate(-50%,-50%); 
				-ms-transform: translate(-50%,-50%); 
				transform: translate(-50%,-50%); 
			}	
			
			.centerVerti{
				position:absolute; top:50%; left:0px;
				-webkit-transform: translate(0,-50%); 
				-ms-transform: translate(0,-50%); 
				transform: translate(0,-50%); 
			}	
			
			.controlArrow{
				 color:rgba(185,254,111,1); font-size:80px; 
				 /*opacity:0.8;*/
			}
			.clickFull{
				display:block;
			}
			#controlBtnMoveLeft, #controlBtnMoveRight{
				position:absolute; top:50%;
				width:4.3%; height:25%;
				-ms-transform: translate(0,-50%);
				-webkit-transform: translate(0,-50%);
				transform: translate(0,-50%);
				display:none;
			}
			#controlBtnMoveRight{
				right:0px;
			}
			#controlBtnMoveUp, #controlBtnMoveDown{
				position:absolute; top:0px;  left:50%;
				height:7%; width:25%;
				-ms-transform: translate(-50%, 0);
				-webkit-transform: translate(-50%, 0);
				transform: translate(-50%, 0);
			}
			#controlBtnMoveDown{
				bottom:0px; top:auto;
				height:8%;
			}
			
			.toolBtn{
				display:inline-block; padding:0px 5px; margin-top:7px; margin-left:7px; border:1px solid rgba(255,255,255,0.4); background:rgba(255,255,255,0.2); color:#fff;
				cursor:pointer; font-size:13px; text-align:center;
				-webkit-border-radius: 4px;
				-moz-border-radius: 4px;
				border-radius: 4px;				
			}
			.slideContentWrap{
				font-size:15px; color:#fff;
			}
			.sexion{
				/*background:rgba(255,255,255,0.3);*/
				display:none;
			}
			.bgimg{ 
				background: url(/assets/img/trans.png) no-repeat center center; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			
			.iconimg{ 
				position:absolute; top:-25%; left:-25%; width:150%; height:150%;
				background: url(/assets/img/tmp/i1.jpg) no-repeat center center; 
				background-color:transparent;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}	
			.icontext, .themeIconText{
				text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.7);
				color:#fff; font-size:25px; margin-top:7%;
				text-align: center;
			}
			.themeIconText{
				margin-top:0;
				font-size:18px;
			}
			
			.block100 {
				display: block;
				width: 100%;
				height: 100%;
			}
			.diamond{
				border: 3px solid #fff;
				/*border-left: 4px solid #fff;
				border-right: 4px solid #fff;*/
				width:193px; height:193px;
				position:relative; overflow:hidden;
			}
			
			.blur{
				filter: blur(10px);
				-webkit-filter: blur(10px);
				-moz-filter: blur(10px); 
				-o-filter: blur(10px); 
				-ms-filter: blur(10px); 
			}
			
			#loadicon{
				display:none;
				pointer-events:none;
			}
			.loader{
				-webkit-animation: loader 0.8s infinite ease;
				animation: loader 0.8s infinite ease;
			}		
			
			@-webkit-keyframes loader {
				0% {
					-webkit-transform: rotate(0deg);
				}
				25% {
					-webkit-transform: rotate(90deg);
				}
				50% {
					-webkit-transform: rotate(90deg);
				}
				75% {
					-webkit-transform: rotate(90deg);
				}
				100% {
					-webkit-transform: rotate(90deg);
				}
			}
			@-moz-keyframes loader {
				0% {
					transform: rotate(0deg);
				}
				25% {
					transform: rotate(90deg);
				}
				50% {
					transform: rotate(90deg);
				}
				75% {
					transform: rotate(90deg);
				}
				100% {
					transform: rotate(90deg);
				}
			}
			@-o-keyframes loader {
				0% {
					transform: rotate(0deg);
				}
				25% {
					transform: rotate(90deg);
				}
				50% {
					transform: rotate(90deg);
				}
				75% {
					transform: rotate(90deg);
				}
				100% {
					transform: rotate(90deg);
				}
			}
			@-ms-keyframes loader {
				0% {
					-ms-transform: rotate(0deg);
				}
				25% {
					-ms-transform: rotate(90deg);
				}
				50% {
					-ms-transform: rotate(90deg);
				}
				75% {
					-ms-transform: rotate(90deg);
				}
				100% {
					-ms-transform: rotate(90deg);
				}
			}
			@keyframes loader {
				0% {
					transform: rotate(0deg);
				}
				25% {
					transform: rotate(90deg);
				}
				50% {
					transform: rotate(90deg);
				}
				75% {
					transform: rotate(90deg);
				}
				100% {
					transform: rotate(90deg);
				}
			}
			
			.cuecatch{
				position:absolute; bottom:11%; width:100%; 
				font-size:30px; color:#fff; text-align:center;
				text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
			}
			.cuecatch b{
				 color:rgba(185,254,111,1);
				 font-weight:normal;
			}
			
			#container{
				overflow:hidden;
			}
			
			.uiTextHome{
				position:absolute; top:18%; width:100%; text-align:center; color:#fff;
				text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.7);
				font-size: 23px;
				text-align: center;
			}
			.uiTextBtns{
				text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.7);
				color:#fff;
				font-size: 21px;
				text-align: center;
			}
			#uiTextLeft{
				position:absolute; left: 80%; top: 45%; width: 200%;
			}
			#uiTextLeft.bigFont{
				font-size: 25px;
				left: 45%;
				top: 44%;
				width: 300%;
			}
			#uiTextRight{
				position: absolute; left: -205%; top: 45%;
			}
			#uiTextRight.bigFont{
				font-size: 25px;
				width: 400%;
				left: -320%;
				top: 44%;
			}
			#uiTextUp{
				position:absolute; top:94%; width:100%;
			}
			#uiTextUp.bigFont{
				font-size: 25px;
			}
			#uiTextDown{
				position:absolute; top:-19%; width:100%;
			}
			#uiTextDown.bigFont{
				font-size: 25px;
				top:-25%;
			}

			.themeItemsDiv{
				width:60%; height:100%; float:left; position:relative; top: -6px;
			}
			.themeTextDiv{
				width:40%; height:100%; float:left; border-right:1px dotted rgba(0,0,0,0.025);
			}
			.themeTextWrap{
				height:100%; padding-left:15%; text-align:left; display:table;
			}
			.themeTextPlace{
				display:table-cell; vertical-align:middle;
				text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.7);
				color:#fff; font-size:23px;
			}
			.themeTextPlace h1{
				color:#fff;
				font-family: 'hdr', sans-serif;
				font-size:30px;
			}
			.themeTextPlace b{
				color:rgb(185,254,111); font-weight:normal;
			}
			.themeTextPlace.bigFont{
				font-size:30px;
			}
			.themeTextPlace.bigFont h1{
				font-size:40px;
			}
			
			.colofonTextPlace{
				text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.7);
				color:#fff; font-size:22px;
			}
			.colofonTextPlace h1{
				font-family: 'hdr', sans-serif;
				font-size:37px;
			}
			.colofonTextPlace b{
				color:rgb(185,254,111); font-weight:normal;
			}
			#colofonHold{
				position: absolute; width:100%; height:100%; padding:15px; padding-left:20px; text-align:left; 
				background:rgba(255,255,255,0.5); border:1px solid rgba(255,255,255,0.7);
			}
			#colofonText.bigFont{
				font-size:25px;
			}
			#colofonText.bigFont h1{
				font-size:40px;
			}
			
			.themeNavHold{
				position:absolute; left:0px; top:0px; width:40%; height:100%;
			}
			.themeNavWrap{
				position:relative; width:100%; height:100%;
			}
			.themeNavComp{
				float:left; width:50px; height:100%; position:relative;
			}
			.themeNavCompText{
				width:300px; color:#fff; font-size: 20px; margin-top:-2px;
			}
			.themeNavCompText.bigFont{
				font-size: 23px;
			}
			
			.themeNavHitLeft{
				position:absolute; top:0px; left:0px; width:200px; height:100%;
			}
			.themeNavHitRight{
				position:absolute; top:0px; right:0px; width:200px; height:100%;
			}
			themeNavClick{
				position:absolute; top:5.4%; right:30px; 
				text-align:right; color:#fff; text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.7); font-size:21px;
				padding:0px 30px 0px 0px;
			}
			
			.amenuWrap{
				position:absolute; top:5.7%; right:30px; 
				text-align:right; color:#fff; text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.7); font-size:21px;
				padding:0px 30px 0px 0px;
			}
			.fontSizeBtnWrap{
				display:inline-block; padding-right:12px; position:relative; font-size:21px;
			}

			.bottomPanelContent{
				position:absolute; top:1px; width:80%; height:100%; left:10%; background:rgba(0,0,0,0.6); border-left:1px solid rgba(255,255,255,0.8); border-right:1px solid rgba(255,255,255,0.8); text-align:left;
			}
			.bottomPanelImg{
				float:left; width: 25%; height:100%; background:#000;
			}
			.infotext{
				float:left; width:75%; height:100%; 
				padding:24px; padding-top:20px; 
				color:#fff; font-size: 23px;
				overflow:hidden;
			}
			.infotext h2{
				font-size: 30px;
			}
			.infotext.bigFont{
				font-size:29px;
			}
			.infotext.bigFont h2{
				font-size:40px;
			}
			
			#shareIconsWrap{
				position:absolute; bottom:0px; right:0px; width:130px; height:63px; 
				text-align:right;
				background:rgba(255,255,255,0.4); border:1px solid rgba(255,255,255,0.7); border-right:none; border-bottom:none;
				display:none;
			}
			#shareIconsHold{
				display:inline-block; height:100%; width:67px; position:relative; text-align:center; font-size:22px; color:rgb(185,254,111);
			}
			
			#shareBtnWrap{
				position:absolute; bottom:0px; right:0px; padding-right:15px; padding-bottom:15px;
			}
			.shade1{
				text-shadow: 0px 0px 7px rgba(0, 0, 0, 0.8);
			}
			
			
			/* /////////////////////////////////////////////////////////////// */
        </style>

        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div id="container" class="centerpos" style="width:1600px; height:900px;">
        
            <img src="/assets/img/imgscale.jpg" style="width:100%;" />
            
            <div class="gpos" id="vidWrap">
                <video style="width:100%; height:100%;" src="/assets/placehold/init.mp4" preload="auto" autobuffer id="play1">
                </video>
            </div>
            
            <div class="gpos" style="text-align:left;" id="vidOverlay">
                <div class="cuecatch" id="subs"></div>
                <!--
                <div style="position:absolute; bottom:10%; left:10px; width:100%;">
                    <div id="progressCirc"></div>
                </div>
                -->
                <div style="position:absolute; bottom:7%; left:0px; width:100%;" id="progressLineWrap">
                    <div style="width:100%; padding:10px;">
                        <div style="width:100%; height:5px; background:rgba(185,254,111,0.1);">
                            <div style="width:0%; height:100%; background:rgba(185,254,111,0.5);" id="progressLine">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gpos" style="overflow:hidden;" id="secHold">
                <div class="gpos" id="secWrap">
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
                        <a href="javascript:void(0)" class="block100" id="topPanelClose">
                            <img src="/assets/img/trans.png" class="block100" />
                        </a>
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
                    <a href="javascript:void(0)" class="block100 gpos" id="shareBtn"></a>
                </div>
            </div>
            
            <!-- ///// nav button controls ///// -->
            <div style="position:absolute; top:0; left:0; width:100%; height:32px; background:rgba(0,0,0,0.2); text-align:left; opacity:0.2; display:none;" id="toolNav">
                <div class="navclick toolBtn" mid="debug" style="margin-right:15px;"><i class="fa fa-cog"></i></div>
            </div>
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
            
            <div style="position:absolute; top:0px; left:3%;">
                <img src="/assets/img/logo_mono.png" width="149" height="75" style="cursor:pointer;" id="logoClick" />
            </div>
            
        </div>
        
        <div id="divTemplates" style="display:none;">
        
            <!-- theme wrapper-->
            <div class="gpos" id="themeHold">
            
                <div class="themeTextDiv">
                    <div class="themeTextWrap">
                        <div class="themeTextPlace feelFontSize">
                        </div>
                    </div>
                </div>
                
                <div class="themeItemsDiv" id="themeItemsWrap">
                    <div style="height:100%; width:100%; overflow:hidden;">
                        <div style="height:100%; width:100%;">
                            <div class="centerpos" style="left:16.5%; top:51%;" id="themeItemBtn">
                                <div class="playiconHold">
                                    <div class="diamond playicon" style="border-color:rgba(185,254,111,1);">
                                        <div class="iconimg diamondInner" style="background-image:url('/assets/img/trans.png');">
                                            <span class="hdrfont centerpos themeIconText"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="gpos">
                                    <a href="javascript:void(0)" class="block100 themeBtnClick">
                                        <img src="/assets/img/trans.png" class="block100" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div style="clear:both;"></div>
                
            </div>
            
            <!-- tool btn -->                
            <div class="navclick toolBtn" mid="0" id="toolBtn"></div>
            
            <!-- slide wrapper -->                
            <div class="gpos sexion" id="sec0">
            	<div class="gpos innerSexionWrap" style="overflow:hidden;">
                	<div class="gpos bgimg posterimg"></div>
                    <div class="centerpos slideContentWrap" style="color:rgba(255,255,255,0.2); display:none;"></div>
                    
                	<div class="centerpos">
                    	<div class="playiconHold">
                            <div class="diamond playicon">
                                <div class="iconimg diamondInner">
                                    <!--<img src="/assets/img/arrow_r.svg" class="centerpos" style="width:17%; height:17%; margin-top:-8%;" />-->
                                    <i class="fa fa-angle-right centerpos controlArrow shade1" style="margin-top: -10%; margin-left: 5px; font-size: 70px;"></i>
                                    <span class="hdrfont centerpos icontext">PLAY</span>
                                </div>
                            </div>
                        </div>
                        <div class="centerpos" style="width:150%; height:150%;">
                        	<a href="javascript:void(0)" class="gpos block100 vcontrol"></a>
                        </div>
                    </div>
                    
                    <div class="bottomPanelWrap" style="position:absolute; width:100%; height:36.5%; bottom:0px;">
                        <div style="height:10%;">
                        </div>
                    	<div style="background:rgba(255,255,255,0.3); border-top:1px solid rgba(255,255,255,0.8); height:90%; position:relative;">
                            <div style="position:absolute; top:0; left:0; width:100%; height:100%; overflow:hidden;">
                            	<div style="position:absolute; bottom:0px;">
                                    <canvas class="blurCanvas blur" style="width:100%; height:100%;"></canvas>
                                </div>
                            </div>
                            <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(255,255,255,0.2);">
                            </div>
                        	<div class="bottomPanelContent">
                            	<div class="bottomPanelImg">
                                	<div class="bgimg infoimg" style="width:100%; height:100%; background-image:url('/assets/img/tmp/img7.jpg'); margin-top:-1px;">
                                    </div>
                                </div>
                                <div class="infotext feelFontSize">
                                	<h1>Hostie-ijzer</h1>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel felis magna. Curabitur vel imperdiet lorem. Etiam imperdiet quam urna, at imperdiet sem tincidunt et. Sed quis consectetur quam. Etiam ultricies malesuada tellus ut egestas. Suspendisse vitae erat a dolor facilisis imperdiet eget non ex.
                                </div>
                                <div style="clear:both;"></div>
                                
                                <div style="width:50px; height:50px; top:0px; right:0px; padding:10px; position:absolute;">
                                    <img src="/assets/img/close.png" style="width:100%;" />
                                    <div class="centerpos" style="width:150%; height:150%;">
                                        <a href="javascript:void(0)" class="gpos block100 bottomPanelClose"></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
        <div style="position:fixed; width:100%; height:100%; top:0px; left:0px; background:#000;" id="mainHider">
            <div class="centerpos">
                <div class="centerpos" style="width:68px; height:68px;">
                    <img src="/assets/img/loading_icon.png" class="loader" style="width:100%; height:100%;" />
                </div>
            </div>
        </div>
        
        <div style="position:fixed; width:30%; background:rgba(255,255,255,0.6); padding:20px; display:none;" id="showDebugInfo">
        </div>
        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    
        <script src="/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="/assets/js/gsap/TweenMax.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
        <script src="/assets/js/lib/underscore.js"></script>
        <script src="/assets/js/lib/backbone.js"></script>
        <script>
			//
			$(function() {
				//
                var jsonObjects = <?= $jsonObjects?>;
				//
				function shuffleArray(o){
					for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
					return o;
				}
				//
				FastClick.attach(document.body);
				TweenMax.set('.diamond', {rotation:45});
				TweenMax.set('.diamondInner', {rotation:-45});
				TweenMax.set('.bottomPanelWrap', {y:'100%'});
				//
				//
				var lv = {};
				//
				lv.isAndroid = false;
				//
				//////////////////////////////////////// VIDEO //////////////////////////////////////////////////
				//
				var vid = document.getElementById("play1");
				lv.vidplaying = 0;
				//
				vid.onwaiting = function() {
					showVidLoading();
				};
				vid.onplaying  = function() {
					hideVidLoading();
				};
				vid.onended = function() {
					lv.vidplaying = 0;
					resetPlayStates();
				};
				//
				function showVidLoading(){
					TweenMax.set('#loadicon', {'display':'block','opacity':1});
				}
				function hideVidLoading(){
					TweenMax.set('#loadicon', {'display':'none','opacity':0});
					//TweenMax.set('#loadicon', {delay:2,'display':'block','opacity':0.5});
				}
				//
				function toggleVid(){
					if(lv.sliderBusy == 1){
						return;
					}
					closeShare();
					if(lv.vidplaying == 0){
						showVidLoading();
						lv.vidplaying = 1;
						vid.play();
						lv.mtarg = $('#sec'+lv.sectionCur).find('.playiconHold');
						TweenMax.fromTo(lv.mtarg, 0.3, {'scale':1, 'opacity':1}, {'scale':1.3, 'opacity':0, ease:Power4.easeInOut});
						lv.mtarg = $('#sec'+lv.sectionCur).find('.posterimg');
						TweenMax.to(lv.mtarg, 0.5, {delay:0.1,'opacity':0, ease:Power2.easeInOut});
						//
						lv.mtarg = $('#sec'+lv.sectionCur).find('.bottomPanelWrap');
						TweenMax.to(lv.mtarg, 0.5, {y:'100%', ease:Power4.easeInOut});
						lv.mtarg = '#controlBtnMoveInnerDown';
						TweenMax.to(lv.mtarg, 0.3, {delay:0.3, y:0, ease:Power4.easeInOut});
						lv.bottomPanelOpen = 0;
						//
						topPanelClose();
						//
						//
						lv.mtarg = '.uiTextBtns, #shareBtnWrap';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':0, 'display':'none'});
						lv.mtarg = '.controlArrow';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':0.5});
						//
						lv.mtarg = '#shareBtnWrap';
						//TweenMax.to(lv.mtarg, 0.3, {'opacity':0, 'display':'none'});
						lv.mtarg = '#progressLineWrap';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
						lv.mtarg = '#subs';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
						//
						lv.mtarg = '#vidWrap';
						TweenMax.to(lv.mtarg, 0.01, {'opacity':1});
						return;
					}
					if(lv.vidplaying == 1){
						hideVidLoading();
						lv.vidplaying = 0;
						vid.pause();
						lv.mtarg = $('#sec'+lv.sectionCur).find('.playiconHold');
						TweenMax.fromTo(lv.mtarg, 0.2, {'scale':1.3, 'opacity':0}, {delay:0.1,'scale':1, 'opacity':1, ease:Power4.easeInOut});
						//
						lv.mtarg = '.uiTextBtns, #shareBtnWrap';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
						lv.mtarg = '.controlArrow';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
						//
						lv.mtarg = '#shareBtnWrap';
						//TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
						lv.mtarg = '#progressLineWrap';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
						lv.mtarg = '#subs';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
						return;
					}
				}
				function toggleVidFromMenu(){
					if(lv.vidplaying == 1){
						hideVidLoading();
						lv.vidplaying = 0;
						vid.pause();
						lv.mtarg = $('#sec'+lv.sectionCur).find('.playiconHold');
						TweenMax.fromTo(lv.mtarg, 0.2, {'scale':1.3, 'opacity':0}, {delay:0.1,'scale':1, 'opacity':1, ease:Power4.easeInOut});
						//
						lv.mtarg = '.uiTextBtns, #shareBtnWrap';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
						lv.mtarg = '.controlArrow';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
						//
						lv.mtarg = '#shareBtnWrap';
						//TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
						lv.mtarg = '#progressLineWrap';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
						lv.mtarg = '#subs';
						TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
					}
					closeShare();
				}
				//
				$('.vcontrol').click(function() {
					toggleVid();
					return false;
				});
				//
				lv.signLang = 0;
				function setVidSrc(mvid, subs){
					hideVidLoading();
					vid.pause();
					vid.setAttribute("src", mvid);
					vid.load();
					Popcorn.destroy(lv.p);
					if(lv.signLang == 0){
						lv.p = Popcorn("#play1").parseSRT(subs);	
					}
				}
				/*
				vid.addEventListener('loadeddata', vidLoaded);
				function vidLoaded() {
				}
				vid.addEventListener('play', vidplaying);
				function vidplaying() {
				}
				vid.addEventListener('pause', vidpaused);
				function vidpaused() {
				}
				*/
				//
				function resetPlayStates(){
					hideVidLoading();
					lv.vidplaying = 0;
					vid.pause();
					lv.mtarg = $('.playiconHold');
					TweenMax.to(lv.mtarg, 0.2, {delay:0.1,'scale':1, 'opacity':1, ease:Power4.easeInOut});
					lv.mtarg = $('.posterimg');
					TweenMax.to(lv.mtarg, 0.5, {'opacity':1});
					lv.mtarg = '#vidWrap';
					TweenMax.to(lv.mtarg, 0.01, {delay:0.25,'opacity':0});
					//
					lv.bottomPanelOpen = 0;
					lv.mtarg = '#controlBtnMoveInnerDown';
					TweenMax.to(lv.mtarg, 0.2, {y:0, ease:Power4.easeInOut});
					lv.mtarg = '.bottomPanelWrap';
					TweenMax.to(lv.mtarg, 0.2, {y:'100%', ease:Power4.easeInOut});
				}
				//
				/*
				$('#progressCirc').circleProgress({
					value: 0, size: 50, startAngle: -1.55, thickness: 25,
					fill: { color: 'rgba(185,254,111,0.5)' }, emptyFill: 'rgba(0, 0, 0, .1)'
				});	
				*/			
				//			
				TweenMax.ticker.addEventListener("tick", updateFunc);
				TweenMax.ticker.fps(30);
				lv.lastCurTime = 0;
				function updateFunc(event) {
					lv.perc = (vid.currentTime / vid.duration) * 100;
					lv.perc2 = Math.round((vid.currentTime / vid.duration) * 100);
					if(lv.vidplaying == 1){
						TweenMax.set('#progressLine', {width:lv.perc+'%'});
						/*
						$('#progressCirc').circleProgress({
							value: lv.perc/100
						});
						*/
						//
						/*
						if(vid.currentTime == lv.lastCurTime){
							showVidLoading();
						}else{
							hideVidLoading();
						}
						lv.lastCurTime = vid.currentTime;
						*/
					}
				}
				//				
				lv.p = Popcorn( "#play1" ).parseSRT("/assets/placehold/srt.srt");	
				//
				////////////////////////////////////////////////////////////////////////////////////////////////////
				lv.bottomPanelOpen = 0;
				function toggleBottomPanel(){
					if(lv.sliderBusy == 1){
						return;
					}
					if(lv.topPanelOpen == 1){
						return;
					}
					//
					if(lv.bottomPanelOpen == 0){
						bottomPanelOpen();
						return;
					}
					//
					if(lv.bottomPanelOpen == 1){
						bottomPanelClose();
						return;
					}
					//
				}
				function bottomPanelOpen(){
					lv.bottomPanelOpen = 1;
					//
					lv.mtarg = $('#blurCanvas'+lv.sectionCur);
					TweenMax.set(lv.mtarg, {'opacity':0, 'display':'none'});
					TweenMax.to(lv.mtarg, 1, {'display':'block', 'opacity':1, ease:Power2.easeInOut});
					vidSnapShot();
					//
					lv.mtarg = $('#sec'+lv.sectionCur).find('.bottomPanelWrap');
					TweenMax.to(lv.mtarg, 0.5, {y:'0%', ease:Power4.easeInOut});
					lv.mtarg = '#controlBtnMoveInnerDown';
					TweenMax.to(lv.mtarg, 0.3, {y:150, ease:Power4.easeInOut});
					//
					hideVidLoading();
					lv.vidplaying = 0;
					vid.pause();
					lv.mtarg = $('.playiconHold');
					TweenMax.to(lv.mtarg, 0.3, {delay:0.15, 'scale':1, 'opacity':1, ease:Power4.easeInOut});
					closeShare();
				}
				function bottomPanelClose(){
					lv.bottomPanelOpen = 0;
					//
					lv.mtarg = $('#blurCanvas'+lv.sectionCur);
					TweenMax.to(lv.mtarg, 0.3, {'display':'none', 'opacity':0, ease:Power2.easeInOut});
					//
					lv.mtarg = $('#sec'+lv.sectionCur).find('.bottomPanelWrap');
					TweenMax.to(lv.mtarg, 0.5, {y:'100%', ease:Power4.easeInOut});
					lv.mtarg = '#controlBtnMoveInnerDown';
					TweenMax.to(lv.mtarg, 0.3, {delay:0.3, y:0, ease:Power4.easeInOut});
					closeShare();
					lv.mtarg = '.uiTextBtns, #shareBtnWrap';
					TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
					lv.mtarg = '.controlArrow';
					TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
					//
				}
				//
				lv.topPanelOpen = 0;
				lv.mtarg = $('#topPanelWrap');
				TweenMax.to(lv.mtarg, 0.3, {'display':'none', y:'-100%', ease:Power2.easeInOut});
				function toggleTopPanel(){
					if(lv.sliderBusy == 1){
						return;
					}
					if(lv.topPanelOpen == 0){
						topPanelOpen();
						return;
					}
					//
					if(lv.topPanelOpen == 1){
						topPanelClose();
						return;
					}
					//
				}
				function topPanelOpen(){
					setThemeNav(lv.themeCur);
					bottomPanelClose();
					closeShare();
					//
					lv.topPanelOpen = 1;
					lv.mtarg = $('#topPanelWrap');
					TweenMax.to(lv.mtarg, 0.6, {'display':'block', y:'0%', ease:Power4.easeInOut});
					//
					lv.mtarg = $('#controlBtnMoveInnerUp');
					TweenMax.to(lv.mtarg, 0.3, {y:-200, ease:Power2.easeInOut});
					lv.mtarg = $('#controlBtnMoveInnerDown');
					TweenMax.to(lv.mtarg, 0.3, {y:200, ease:Power2.easeInOut});
					lv.mtarg = $('#controlBtnMoveInnerLeft');
					TweenMax.to(lv.mtarg, 0.3, {x:-200, ease:Power2.easeInOut});
					lv.mtarg = $('#controlBtnMoveInnerRight');
					TweenMax.to(lv.mtarg, 0.3, {x:200, ease:Power2.easeInOut});
					//
					lv.mtarg = $('#controlBtnMoveInnerDown');
					TweenMax.to(lv.mtarg, 0.3, {delay:0.3, y:200, ease:Power2.easeInOut});
					//
					hideVidLoading();
					lv.vidplaying = 0;
					vid.pause();
					lv.mtarg = $('.playiconHold');
					TweenMax.to(lv.mtarg, 0.3, {delay:1, 'scale':1, 'opacity':1, ease:Power4.easeInOut});
					//
					lv.mtarg = $('#topPanelBlurCanvas');
					TweenMax.set(lv.mtarg, {'opacity':0, 'display':'none'});
					TweenMax.to(lv.mtarg, 1.2, {'display':'block', 'opacity':1, ease:Power2.easeInOut});
					vidSnapShotTopPanel();
				}
				function topPanelClose(){
					setCurTheme();
					closeShare();
					lv.topPanelOpen = 0;
					//
					lv.mtarg = $('#topPanelBlurCanvas');
					TweenMax.to(lv.mtarg, 0.4, {'display':'none', 'opacity':0, ease:Power2.easeInOut});
					//
					lv.mtarg = $('#topPanelWrap');
					TweenMax.to(lv.mtarg, 0.6, {'display':'none', y:'-100%', ease:Power4.easeIn});
					//
					lv.mtarg = $('#controlBtnMoveInnerUp');
					TweenMax.to(lv.mtarg, 0.3, {delay:0.4, y:0, ease:Power2.easeOut});
					lv.mtarg = $('#controlBtnMoveInnerDown');
					TweenMax.to(lv.mtarg, 0.3, {delay:0.4, y:0, ease:Power2.easeOut});
					lv.mtarg = $('#controlBtnMoveInnerLeft');
					TweenMax.to(lv.mtarg, 0.3, {delay:0.4, x:0, ease:Power2.easeOut});
					lv.mtarg = $('#controlBtnMoveInnerRight');
					TweenMax.to(lv.mtarg, 0.3, {delay:0.4, x:0, ease:Power2.easeOut});
					//
					lv.mtarg = '.uiTextBtns, #shareBtnWrap';
					TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
					lv.mtarg = '.controlArrow';
					TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
					//
					lv.mtarg = '#shareBtnWrap';
					//TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
					lv.mtarg = '#progressLineWrap';
					TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
					lv.mtarg = '#subs';
					TweenMax.to(lv.mtarg, 0.3, {'opacity':0});
				}
				//
				$('#clickMoveDown').on('click', function(){
					bottomPanelOpen();
				});
				$('#clickMoveUp').on('click', function(){
					topPanelOpen();
				});
				//
				$('.bottomPanelClose').on('click', function(){
					bottomPanelClose();
				});
				//
				$('#topPanelClose').on('click', function(){
					topPanelClose();
				});
				//
				// snaphot + blur
				function vidSnapShot(){
					if(lv.isAndroid){
						return;
					}
					//
					lv.mcanvas =  document.getElementById('blurCanvas'+lv.sectionCur);
					lv.mcontext = lv.mcanvas.getContext('2d');
					//
					lv.cw = $('#play1').width();
					lv.ch = $('#play1').height();
					lv.mcanvas.width = lv.cw;
					lv.mcanvas.height = lv.ch;			
					lv.mcontext.fillRect(0, 0, lv.cw, lv.ch);
					lv.mcontext.drawImage(vid, 0, 6, lv.cw, lv.ch);
					//
				}
				function vidSnapShotTopPanel(){
					if(lv.isAndroid){
						return;
					}
					//
					lv.mcanvas =  document.getElementById('topPanelBlurCanvas');
					lv.mcontext = lv.mcanvas.getContext('2d');
					//
					lv.cw = $('#play1').width();
					lv.ch = $('#play1').height();
					lv.mcanvas.width = lv.cw;
					lv.mcanvas.height = lv.ch;			
					lv.mcontext.fillRect(0, 0, lv.cw, lv.ch);
					lv.mcontext.drawImage(vid, 0, 0, lv.cw, lv.ch);
					//
				}
				//
				$('.themeBtnClick').on('mouseenter', function(){
					lv.mtarg = '.playicon';
					TweenMax.to(lv.mtarg, 0.3, {'borderColor':'rgb(255,255,255)'});
					lv.mtarg = $(this).parent().parent().find('.playicon');
					TweenMax.to(lv.mtarg, 0.3, {'borderColor':'rgb(185,254,111)'});
					lv.mtarg = $(this).parent().parent().find('.themeIconText');
					TweenMax.to(lv.mtarg, 0.3, {'color':'rgb(185,254,111)'});
				});
				$('.themeBtnClick').on('mouseleave', function(){
					lv.mtarg = $(this).parent().parent().find('.playicon');
					TweenMax.to(lv.mtarg, 0.3, {'borderColor':'rgb(255,255,255)'});
					lv.mtarg = $(this).parent().parent().find('.themeIconText');
					TweenMax.to(lv.mtarg, 0.3, {'color':'rgb(255,255,255)'});
					//
					lv.mtarg = '.itemIconActive';
					TweenMax.to(lv.mtarg, 0.3, {'borderColor':'rgb(185,254,111)'});
				});
				$('.themeBtnClick').on('click', function(){
					$('.itemIconActive').removeClass('itemIconActive');
					$(this).parent().parent().find('.playicon').addClass('itemIconActive');
					//
					topPanelClose();
					lv.mbid = parseInt($(this).attr('mbid'));
					lv.toThemeNavi = setTimeout(function(){
						sectionNav(lv.mbid);
					},500);
				});
				//
				//
				//
				lv.debug = 0;
				function doDebugMode(){
					lv.debug = 1;
					TweenMax.set('#main', {scale: 0.5, y:'-10%'});
					TweenMax.set('#secHold', {'overflow': 'visible'});
					TweenMax.set('#container', {'overflow': 'visible'});
				}
				function undoDebugMode(){
					lv.debug = 0;
					TweenMax.set('#main', {scale: 1, y:'0%'});
					TweenMax.set('#secHold', {'overflow': 'hidden'});
					TweenMax.set('#container', {'overflow': 'hidden'});
				}
				//doDebugMode();
				//
				//['name','info','poster','img','video','video_sign-language','subs']
				lv.allData = [{
					"name": "Onderwijs",
					"info": "<h1>Onderwijs<\/h1>\r\n<p>\r\nOntdekt de objecten van Kentalis die al meer dan twee eeuwen lang helpen bij het onderwijs aan mensen voor wie horen, zien of communiceren niet vanzelfsprekend is. \r\n<\/p>",
					"bg": "\/themas\/Onderwijs\/bg.jpg",
					"objects": [{
						"name": "Hostie ijzer",
						"info": "<h2>Hostie ijzer</h2><p>Dit is een hostie-ijzer uit St. Michelsgestel. De hostiebakkerij was een belangrijke bron van inkomsten voor het instituut. Het bood werkverschaffing aan zusters en oud-leerlingen.In 1920 werden er wel tot 25,6 miljoen hosties gebakken. Overal in Nederland en zelfs in het buitenland gebruikten katholieke kerken de hosties uit Sint-Michielsgestel.</p>",
						"poster": "tmp/poster1.jpg",
						"img": "tmp/img.jpg",
						"video": "tmp/proef1.mp4",
						"video_sign-language": "tmp/proef1_tolk.mp4",
						"subs": "tmp/proef1.srt"
					}, {
						"name": "SOS Paal",
						"info": "<h2>SOS Paal</h2><p>Item 1.2 info tekst</p>",
						"poster": "tmp/tmp2/poster.jpg",
						"img": "tmp/tmp2/img.jpg",
						"video": "tmp/tmp2/video.mp4",
						"video_sign-language": "tmp/tmp2/video_sign-language.mp4",
						"subs": "tmp/srt2.srt"
					}, {
						"name": "Luxe gehoor",
						"info": "<h2>Luxe gehoor</h2><p>Item 1.2 info tekst</p>",
						"poster": "tmp/tmp3/poster.jpg",
						"img": "tmp/tmp3/img.jpg",
						"video": "tmp/tmp3/video.mp4",
						"video_sign-language": "tmp/tmp3/video_sign-language.mp4",
						"subs": "tmp/srt2.srt"
					}, {
						"name": "Oor trompet",
						"info": "<h2>Oor trompet</h2><p>Item 1.2 info tekst</p>",
						"poster": "tmp/tmp4/poster.jpg",
						"img": "tmp/tmp4/img.jpg",
						"video": "tmp/tmp4/video.mp4",
						"video_sign-language": "tmp/tmp4/video_sign-language.mp4",
						"subs": "tmp/srt2.srt"
					}, {
						"name": "Gehoor hoorn",
						"info": "<h2>Gehoor hoorn</h2><p>Item 1.2 info tekst</p>",
						"poster": "tmp/tmp5/poster.jpg",
						"img": "tmp/tmp5/img.jpg",
						"video": "tmp/tmp5/video.mp4",
						"video_sign-language": "tmp/tmp5/video_sign-language.mp4",
						"subs": "tmp/srt2.srt"
					}, {
						"name": "Luister pijp",
						"info": "<h2>Luister pijp</h2><p>Item 1.2 info tekst</p>",
						"poster": "tmp/tmp6/poster.jpg",
						"img": "tmp/tmp6/img.jpg",
						"video": "tmp/tmp6/video.mp4",
						"video_sign-language": "tmp/tmp6/video_sign-language.mp4",
						"subs": "tmp/srt2.srt"
					}]
				}, {
					"name": "Zorg",
					"info": "<h1>Zorg<\/h1>\r\n<p>\r\nOntdekt de objecten van Kentalis die al meer dan twee eeuwen lang helpen bij het onderwijs aan mensen voor wie horen, zien of communiceren niet vanzelfsprekend is. \r\n<\/p>",
					"bg": "\/themas\/Zorg\/bg.jpg",
					"objects": [{
						"name": "SOS Paal",
						"info": "<h2>SOS Paal</h2><p>Item 1.2 info tekst</p>",
						"poster": "tmp/tmp2/poster.jpg",
						"img": "tmp/tmp2/img.jpg",
						"video": "tmp/tmp2/video.mp4",
						"video_sign-language": "tmp/tmp2/video_sign-language.mp4",
						"subs": "tmp/srt2.srt"
					}]
				}, {
					"name": "Wonen",
					"info": "<h1>Wonen<\/h1>\r\n<p>\r\nOntdekt de objecten van Kentalis die al meer dan twee eeuwen lang helpen bij het onderwijs aan mensen voor wie horen, zien of communiceren niet vanzelfsprekend is. \r\n<\/p>",
					"bg": "\/themas\/Wonen\/bg.jpg",
					"objects": [{
						"name": "Oor trompet",
						"info": "<h2>Oor trompet</h2><p>Item 1.2 info tekst</p>",
						"poster": "tmp/tmp4/poster.jpg",
						"img": "tmp/tmp4/img.jpg",
						"video": "tmp/tmp4/video.mp4",
						"video_sign-language": "tmp/tmp4/video_sign-language.mp4",
						"subs": "tmp/srt2.srt"
					}]
				}, {
					"name": "School",
					"info": "<h1>School<\/h1>\r\n<p>\r\nOntdekt de objecten van Kentalis die al meer dan twee eeuwen lang helpen bij het onderwijs aan mensen voor wie horen, zien of communiceren niet vanzelfsprekend is. \r\n<\/p>",
					"bg": "\/themas\/School\/bg.jpg",
					"objects": [{
						"name": "Gehoor hoorn",
						"info": "<h2>Gehoor hoorn</h2><p>Item 1.2 info tekst</p>",
						"poster": "tmp/tmp5/poster.jpg",
						"img": "tmp/tmp5/img.jpg",
						"video": "tmp/tmp5/video.mp4",
						"video_sign-language": "tmp/tmp5/video_sign-language.mp4",
						"subs": "tmp/srt2.srt"
					}]
				}, {
					"name": "Internationaal",
					"info": "<h1>Internationaal<\/h1>\r\n<p>\r\nOntdekt de objecten van Kentalis die al meer dan twee eeuwen lang helpen bij het onderwijs aan mensen voor wie horen, zien of communiceren niet vanzelfsprekend is. \r\n<\/p>",
					"bg": "\/themas\/Internationaal\/bg.jpg",
					"objects": [{
						"name": "Luister pijp",
						"info": "<h2>Luister pijp</h2><p>Item 1.2 info tekst</p>",
						"poster": "tmp/tmp6/poster.jpg",
						"img": "tmp/tmp6/img.jpg",
						"video": "tmp/tmp6/video.mp4",
						"video_sign-language": "tmp/tmp6/video_sign-language.mp4",
						"subs": "tmp/srt2.srt"
					}, {
						"name": "Item 5.2",
						"info": "<h2>Item 5.2</h2><p>Item 5.1 info tekst</p>",
						"poster": "/assets/img/tmp/bg6.jpg",
						"img": "/assets/img/tmp/img6.jpg",
						"video": "tmp/t_vid3.mp4",
						"video_sign-language": "tmp/t_vid3.mp4",
						"subs": "tmp/srt3.srt"
					}]
				}];	
				//
				lv.allData = jsonObjects;
				//
				function logify(msg, style){
					if(style == 1){
						console.log('%c'+msg, 'background: #222; color: #bada55; padding:1px 5px;');
						return;
					}
					console.log(msg);
				}

				//
				lv.themesTotal = getObjLength(lv.allData);
				lv.themesNames = [];
				lv.themesObjects = [];
				lv.objectsTotal = 0;
				lv.objectsData = {};
				for(lv.l = 0; lv.l < lv.themesTotal; lv.l++){
					lv.themesNames.push(lv.allData[lv.l].name);
					lv.hmo = getObjLength(lv.allData[lv.l].objects);
					lv.themesObjects.push(lv.hmo);
					lv.objectsTotal += lv.hmo;
				}
				//
				lv.logified = 1;
				if(lv.logified == 1){
					logify('------------------------------------------------------------------------------------------------------------',0);
					logify('Themes Total:',0);
					logify(lv.themesTotal,1);
					logify('Themes Names:',0);
					logify(lv.themesNames,1);
					logify('Themes Objects Total:',0);
					logify(lv.themesObjects,1);
					logify('Objects Total:',0);
					logify(lv.objectsTotal,1);
					logify('------------------------------------------------------------------------------------------------------------',0);
				}
				//
				//console.log('............. '+ getObjLength(lv.allData[0].objects));
				//console.log('............. '+ JSON.stringify(lv.allData[0].objects));
				//console.log(JSON.stringify(lv.allData));
				//
				function getObjLength(myObj){
					lv.objCount = 0;
					for (lv.i in myObj) {
						if (myObj.hasOwnProperty(lv.i)) {
							lv.objCount++;
						}
					}
					return lv.objCount;
				}
				//
				//
				lv.sections = {};
				lv.sCnt = 0;
				//
				lv.objectDataFields = ['name','info','poster','img','video','video_sign-language','subs','url_name'];
				// build sections
				for(lv.l = 0; lv.l < lv.themesTotal; lv.l++){
					lv.nrObj = getObjLength(lv.allData[lv.l].objects);
					for(lv.l2 = 0; lv.l2 < lv.nrObj; lv.l2++){
						//
						lv.sCnt++;
						lv.sections[lv.sCnt] = 0;
						//
						lv.objectsData[lv.sCnt] = {};
						for(lv.l3 = 0; lv.l3 < lv.objectDataFields.length; lv.l3++){
							lv.objectsData[lv.sCnt][lv.objectDataFields[lv.l3]] = lv.allData[lv.l]['objects'][lv.l2][lv.objectDataFields[lv.l3]];
							lv.objectsData[lv.sCnt]['theme'] = lv.l+1;
						}
						//
					}
				}
				//
				//console.log(lv.objectsData);
				//
				//
				$(document).keydown(function(e) {
					switch(e.which) {
						case 39: /*right*/
						slideRight();
						break;
						/**/
						case 37: /*left*/
						slideLeft();
						break;
						/**/
						case 40: /*down*/
						toggleBottomPanel();
						break;din
						/**/
						case 38: /*up*/
						toggleTopPanel();
						break;
						/**/
						case 32: /*spacebar*/
						toggleVid();
						break;
						/**/
						case 13: /*enter*/
						toggleVid();
						break;
						/**/
						default: return;
					}
					hideHomeText();
					e.preventDefault();
				});
				//
				function slideRight(){
					if(lv.topPanelOpen == 1){
						themesNav(lv.themeCur+1);
						return;
					}
					if(lv.sliderBusy == 1){
						//return;
					}
					sectionNav(lv.sectionCur+1);
				}
				function slideLeft(){
					if(lv.topPanelOpen == 1){
						themesNav(lv.themeCur-1);
						return;
					}
					if(lv.sliderBusy == 1){
						//return;
					}
					sectionNav(lv.sectionCur-1);
				}
				$('.navclick').on('click', function(){
					lv.mid = $(this).attr('mid');
					if(lv.mid == 'debug'){
						if(lv.debug == 0){
							doDebugMode();
						}else{
							undoDebugMode();
						}
					}else{
						lv.mid = Number($(this).attr('mid'));
						sectionNav(lv.mid);
					}
				});
				//
				$('#clickMoveRight').on('click', function(){
					slideRight();
				});
				$('#clickMoveLeft').on('click', function(){
					slideLeft();
				});
				//
				/*
				lv.sections = {
					1:0,
					2:0,
					3:0,
					4:0,
					5:0,
					6:0,
					7:0,
					8:0,
					9:0,
					10:0
				};
				*/
				lv.sectionsTotal = 0;
				lv.sectionsNrArray = [];
				for (lv.i in lv.sections) {
					if (lv.sections.hasOwnProperty(lv.i)) {
						lv.sectionsTotal++;
						lv.sectionsNrArray.push(lv.sectionsTotal);
					}
				}
				lv.secTotalPerc = lv.sectionsTotal*100;
				//
				lv.sectionCur = 1;
				lv.seccnt = 0;
				//
				lv.subSectionCur = 0;
				//
				function populateSlides(){
					//
					//lv.shuffedNrs = shuffleArray(lv.sectionsNrArray);
					lv.shuffedNrs = lv.sectionsNrArray;
					//console.log(lv.shuffedNrs);
					//
					for(lv.i = 0; lv.i < lv.sectionsTotal; lv.i++){
						lv.mnnr = lv.shuffedNrs[lv.i];
						lv.slideNr = lv.i+1;
						//
						lv.toolBtn = $('#toolBtn').clone(true, true);
						$('#toolNav').append(lv.toolBtn);
						$('#toolNav').children().last().attr('id', 'toolBtn_'+lv.slideNr).attr('mid',lv.slideNr).html(lv.mnnr);
						//
						lv.newSlide = $('#sec0').clone(true, true);
						$('#secWrap').append(lv.newSlide);
						$('#secWrap').children().last().attr('id', 'sec'+lv.slideNr);
						//
						//
						lv.mtarg = '#sec'+lv.slideNr;
						$(lv.mtarg).attr('data-id',lv.slideNr);
						lv.mSaniNameID = lv.objectsData[lv.i+1]['url_name'];
						$(lv.mtarg).attr('data-slug',lv.mSaniNameID);
						lv.mdata = lv.objectsData[lv.i+1]['name'];
						$(lv.mtarg+' .slideContentWrap').html(lv.mdata);
						lv.mdata = lv.objectsData[lv.i+1]['poster']
						$(lv.mtarg+' .posterimg').css({'background-image':'url("'+lv.objectsData[lv.i+1]['poster']+'")'});
						lv.mdata = lv.objectsData[lv.i+1]['poster']
						$(lv.mtarg+' .iconimg').css({'background-image':'url("'+lv.objectsData[lv.i+1]['img']+'")'});
						//
						lv.mdata = lv.objectsData[lv.i+1]['img']
						$(lv.mtarg+' .infoimg').css({'background-image':'url("'+lv.objectsData[lv.i+1]['img']+'")'});
						lv.mdata = lv.objectsData[lv.i+1]['info'];
						$(lv.mtarg+' .infotext').html(lv.mdata);
						//
						$(lv.mtarg+' .blurCanvas').attr('id','blurCanvas'+lv.slideNr);
						//
						lv.mx = 100*(lv.i);
						TweenMax.set(lv.mtarg, {x: lv.mx+'%'});
						lv['xDest_section_'+lv.mnnr] = lv.mx;
						//
					}
					//
					setVidSrc(lv.objectsData[1]['video'],lv.objectsData[1]['subs']);
					//
					lv.themeCur = 1;
					lv.themeCnt = 0;
					lv.themesTotalPerc = lv.themesTotal*100;
					//
					lv.themeBtnPosIncX = [0,23,23,96,169,169];
					lv.themeBtnPosIncY = [0,-123,23,-50,23,-123];
					lv.themeBtnCnt = 0;
					lv.mainBtnCnt = 0;
					//
					lv.itemCur = 1;
					//
					for(lv.i1 = 0; lv.i1 < lv.themesTotal; lv.i1++){
						//
						lv.themeCnt++;
						lv.themeIndex = (lv.themeCnt-1);
						lv.newTheme = $('#themeHold').clone(true, true);
						$('#themesWrap').append(lv.newTheme);
						$('#themesWrap').children().last().attr('id', 'themeHold_'+lv.themeCnt);
						$('#themeHold_'+lv.themeCnt).find('.themeItemsDiv').attr('id','themeItemsWrap_'+lv.themeCnt);
						TweenMax.set('#themeHold_'+lv.themeCnt, {x: (lv.themeIndex*100)+'%'});
						//
						lv.mdata = lv.allData[lv.themeIndex]['info'];
						$('#themeHold_'+lv.themeCnt+' .themeTextPlace').html(lv.mdata);
						//
						lv.themeBtnCnt = 0;
						for(lv.i2 = 0; lv.i2 < lv.themesObjects[lv.themeIndex]; lv.i2++){
							lv.themeBtnCnt++;
							lv.mainBtnCnt++;
							lv.mthemeBtn = $('#themeItemBtn').clone(true, true);
							$('#themeItemsWrap_'+lv.themeCnt).append(lv.mthemeBtn);
							lv.themeBtnID = 'theme'+lv.themeCnt+'_itemBtn'+lv.themeBtnCnt;
							$('#themeItemsWrap_'+lv.themeCnt).children().last().attr('id',lv.themeBtnID);
							$('#themeItemsWrap_'+lv.themeCnt).children().last().attr('mbid',lv.mainBtnCnt);
							lv.mtarg = $('#'+lv.themeBtnID);
							if(lv.i2 != 0){
								TweenMax.set(lv.mtarg, {x: lv.themeBtnPosIncX[lv.i2]+'%',y:lv.themeBtnPosIncY[lv.i2]+'%'});
							}
							lv.mtarg.find('.playicon').css({'border-color':'#fff'});
							lv.mimg = lv.allData[lv.themeIndex]['objects'][lv.i2]['img'];
							//lv.mimg = lv.objectsData[lv.i2+1]['img']; 
							lv.mtarg.find('.iconimg').css({'background-image':'url("'+lv.mimg+'")'});
							lv.mtitel = lv.allData[lv.themeIndex]['objects'][lv.i2]['name'];
							//lv.mtitel = lv.objectsData[lv.i2+1]['name']; 
							lv.mtarg.find('.themeIconText').html(lv.mtitel);
							lv.mtarg.find('.themeBtnClick').attr('mbid',lv.mainBtnCnt).attr('mtid',lv.themeCnt).attr('mtbid',lv.themeBtnCnt);
						}
						//
						lv.newThemeIcon = $('#themeMiniIcon').clone(true, true);
						$('#themeMiniIconWrap').append(lv.newThemeIcon);
						$('#themeMiniIconWrap').children().last().attr('id', 'themeMiniIcon_'+lv.themeCnt);
						$('#themeMiniIcon_'+lv.themeCnt).find('.themeNavClick').attr('mid',lv.themeCnt);
						//
					}
					$('#theme'+lv.themeCur+'_itemBtn'+lv.itemCur).find('.playicon').css({'border-color':'rgb(185,254,111)'}).addClass('itemIconActive');
					$('#themeMiniIcon_'+lv.themeCur+' img').attr('src','/assets/img/page_icon_selected.png').addClass('themeIconActive');
					//
					$('#themeItemBtn').css({'display':'none'});
					$('#themeMiniIcon').css({'display':'none'});
					//
					TweenMax.set('#themesWrap', {x: '0%'});
				}
				populateSlides();
				//
				//
				//
				//
				TweenMax.set('#secWrap', {x:'-0%', y:'-0%'});
				lv.navspeed = 1;
				lv.navdelay = 0;
				lv.navEase = 'Power4.easeInOut';
				function sectionNav(dest){
					clearTimeout(lv.toThemeNavi);
					if(dest > lv.sectionCur){
						if(lv.sectionCur == lv.sectionsTotal){
							return;
						}
					}
					if(dest < lv.sectionCur){
						if(lv.sectionCur == 1){
							return;
						}
					}
					closeShare();
					lv.mtarg = '.uiTextBtns, #shareBtnWrap';
					TweenMax.to(lv.mtarg, 0.3, {'opacity':1, 'display':'block'});
					lv.mtarg = '.controlArrow';
					TweenMax.to(lv.mtarg, 0.3, {'opacity':1});
					//
					//
					lv.sectionXDest = (dest-1)*100;
					TweenMax.to('#secWrap', lv.navspeed, {delay:lv.navdelay, x:'-'+lv.sectionXDest+'%', ease:lv.navEase, onComplete:doneSliding, force3D:'auto'});
					lv.sectionCur = dest;
					startUpdater();
					//
					lv.xposCur = lv.sectionXDest;
					lv.navdelay = 0;
					handleControls();
				}
				//
				function handleControls(){
					resetPlayStates();
					//
					$('#controlBtnMoveLeft').css({'display':'none'});
					if(lv.sectionCur > 1){
						$('#controlBtnMoveLeft').css({'display':'block'});
					}
					$('#controlBtnMoveRight').css({'display':'none'});
					if(lv.sectionCur < lv.sectionsTotal){
						$('#controlBtnMoveRight').css({'display':'block'});
					}
				}
				handleControls();
				//
				//
				function showNeeded(targ){
					//
					lv.xpos = $('#secWrap').prop('_gsTransform').xPercent;
					lv.xpos = Math.round(lv.xpos);
					lv.cxpos = (-lv.xpos)/100;
					lv.xpos1 =  Math.round(lv.cxpos)+1;
					lv.xpos2 = lv.xpos1+1;
					lv.xpos3 = lv.xpos1-1;
					//
					//TweenMax.set('.sexion', {'display':'none'});
					//
					if(targ == 'cur'){
						TweenMax.set('#sec'+lv.sectionCur, {'display':'block'});
						return;
					}
					TweenMax.set('#sec'+lv.xpos1, {'display':'block'});
					TweenMax.set('#sec'+lv.xpos2, {'display':'block'});
					TweenMax.set('#sec'+lv.xpos3, {'display':'block'});
				}
				//
				//
				lv.sliderBusy = 0;
				function doneSliding(){
					if(lv.signLang == 0){
						lv.vsrc = 'video';
					}else{
						lv.vsrc = 'video_sign-language';
					}
					setVidSrc(lv.objectsData[lv.sectionCur][lv.vsrc],lv.objectsData[lv.sectionCur]['subs']);
					//
					showNeeded('cur');
					stopUpdater();
					lv.lockPanDir = 0;
					//
					setCurTheme();
					//
					//hashChange Procedural
					lv.mnname = $('div[data-id="'+lv.sectionCur+'"]').attr('data-slug');
					lv.hash = window.location.hash.substring(1);
					//if(lv.hash != lv.mnname){
						//console.log('setting da hash: '+lv.mnname);
						lv.navActive = lv.mnname;				
						window.location.hash = lv.mnname;	
					//}
				}
				function startUpdater(){
					lv.sliderBusy = 1;
					TweenMax.ticker.removeEventListener("tick", frameUpdate);
					TweenMax.ticker.addEventListener("tick", frameUpdate);
				}
				function stopUpdater(){
					lv.sliderBusy = 0;
					TweenMax.ticker.removeEventListener("tick", frameUpdate);
				}
				function frameUpdate(event) {
					showNeeded('all');
				}
				showNeeded('cur');
				//
				//
				//
				lv.limitLDef = 0;
				lv.limitRDef = -(lv.secTotalPerc-100);  
				lv.limitL = lv.limitLDef;
				lv.limitR = lv.limitRDef;
				lv.limitT = 0;
				lv.limitD = -200;
				lv.lockPanDir = 0;	
				//
				var myElement = document.getElementById('container');
				var mc = new Hammer(myElement);
				mc.get('pan').set({ direction: Hammer.DIRECTION_ALL });
				//
				mc.on("panleft panright panup pandown", function(ev) {
					if(lv.lockPanDir == 0){
						lv.pandir = ev.type;
						//
						if(lv.pandir == 'panleft' || lv.pandir == 'panright'){
							lv.lockPanDir = 1;
						}
						if(lv.pandir == 'panup' || lv.pandir == 'pandown'){
							lv.lockPanDir = 2;
						}
					}
				});
				mc.on("panstart", function(ev) {
					//
					if(lv.topPanelOpen == 1){
						// themes
						clearTimeout(lv.toEndPanThemes);
						lv.curXperc = $('#themesWrap').prop('_gsTransform').xPercent;
						lv.limitD = 0;
						lv.limitL = lv.limitLDef;
						lv.limitR = -(lv.themesTotalPerc-100);  
						return;
					}
					// slides
					resetPlayStates();
					clearTimeout(lv.toEndPan);
					lv.curXperc = $('#secWrap').prop('_gsTransform').xPercent;
					lv.limitD = 0;
					lv.limitL = lv.limitLDef;
					lv.limitR = lv.limitRDef;
					startUpdater();
					closeShare();
				});
				mc.on("pan", function(ev) {
					//
					if(lv.topPanelOpen == 1){
						if(lv.lockPanDir == 1){
							lv.posX = ev.deltaX;
							lv.vw = $('#themesHold').width();
							lv.dragMovePerc = (lv.posX/lv.vw)*175;
							//
							lv.moveXperc = $('#themesWrap').prop('_gsTransform').xPercent;
							//
							lv.dragPerc = lv.dragMovePerc+lv.curXperc;
							lv.movePanPerc = lv.dragPerc;
							if(lv.movePanPerc > lv.limitL){
								lv.movePanPerc = lv.limitL + (lv.movePanPerc - lv.limitL) / 6;
								if(lv.movePanPerc > lv.limitL+60){
									lv.movePanPerc = lv.limitL+60;
								}
							}
							if(lv.moveXperc < lv.limitR){
								lv.movePanPerc = lv.limitR+(lv.movePanPerc-lv.limitR)/6;
								if(lv.movePanPerc < lv.limitR-60){
									lv.movePanPerc = lv.limitR-60;
								}
							}
							//
							TweenMax.set('#themesWrap', {xPercent:lv.movePanPerc, force3D:'auto'});
						}
						return;
					}
					//
					//
					if(lv.lockPanDir == 1){
						lv.posX = ev.deltaX;
						lv.vw = $('#secHold').width();
						lv.dragMovePerc = (lv.posX/lv.vw)*175;
						//
						lv.moveXperc = $('#secWrap').prop('_gsTransform').xPercent;
						//
						lv.dragPerc = lv.dragMovePerc+lv.curXperc;
						lv.movePanPerc = lv.dragPerc;
						if(lv.movePanPerc > lv.limitL){
							lv.movePanPerc = lv.limitL + (lv.movePanPerc - lv.limitL) / 6;
							if(lv.movePanPerc > lv.limitL+60){
								lv.movePanPerc = lv.limitL+60;
							}
						}
						if(lv.moveXperc < lv.limitR){
							lv.movePanPerc = lv.limitR+(lv.movePanPerc-lv.limitR)/6;
							if(lv.movePanPerc < lv.limitR-60){
								lv.movePanPerc = lv.limitR-60;
							}
						}
						//
						TweenMax.set('#secWrap', {xPercent:lv.movePanPerc, force3D:'auto'});
					}
					//
				});	
				mc.on("panend", function(ev) {
					//
					if(lv.topPanelOpen == 1){
						//
						lv.curXperc = $('#themesWrap').prop('_gsTransform').xPercent;
						//
						lv.uVelocity = ev.velocityX;
						if(lv.uVelocity > 2 || lv.uVelocity < -2){
							if(lv.lockPanDir == 1){
								lv.veloDestX = lv.curXperc-(lv.uVelocity*10);
								lv.snappedX = Math.round(lv.veloDestX/100)*100;
								if(lv.snappedX > lv.limitL){
									lv.snappedX = lv.limitL;
								}
								if(lv.snappedX < lv.limitR){
									lv.snappedX = lv.limitR;
								}
								TweenMax.to('#themesWrap', 0.3, {x:lv.snappedX+'%'});
								//
								lv.themesXDest = lv.snappedX;
								lv.themeCur = -((lv.snappedX/100)-1);
							}
						}else{
							if(lv.lockPanDir == 1){
								lv.panDestX = Math.round(lv.curXperc/100)*100;
								if(lv.panDestX > lv.limitL){
									lv.panDestX = lv.limitL;
								}
								if(lv.panDestX < lv.limitR){
									lv.panDestX = lv.limitR;
								}
								TweenMax.to('#themesWrap', 0.3, {x:lv.panDestX+'%'});
								//
								lv.themesXDest = lv.panDestX;
								lv.themeCur = -((lv.panDestX/100)-1);
							}
						}
						//
						lv.toEndPanThemes = setTimeout(function(){
							doneThemeSliding();
						},600);
						//
						handleThemeControls();
						return;
					}
					//
					lv.curXperc = $('#secWrap').prop('_gsTransform').xPercent;
					//
					lv.uVelocity = ev.velocityX;
					if(lv.uVelocity > 2 || lv.uVelocity < -2){
						if(lv.lockPanDir == 1){
							lv.veloDestX = lv.curXperc-(lv.uVelocity*10);
							lv.snappedX = Math.round(lv.veloDestX/100)*100;
							if(lv.snappedX > lv.limitL){
								lv.snappedX = lv.limitL;
							}
							if(lv.snappedX < lv.limitR){
								lv.snappedX = lv.limitR;
							}
							TweenMax.to('#secWrap', 0.6, {x:lv.snappedX+'%', force3D:'auto'});
							//
							lv.sectionXDest = lv.snappedX;
							lv.sectionCur = -((lv.snappedX/100)-1);
						}
					}else{
						if(lv.lockPanDir == 1){
							lv.panDestX = Math.round(lv.curXperc/100)*100;
							if(lv.panDestX > lv.limitL){
								lv.panDestX = lv.limitL;
							}
							if(lv.panDestX < lv.limitR){
								lv.panDestX = lv.limitR;
							}
							TweenMax.to('#secWrap', 0.4, {x:lv.panDestX+'%', force3D:'auto'});
							//
							lv.sectionXDest = lv.panDestX;
							lv.sectionCur = -((lv.panDestX/100)-1);
						}
					}
					//
					lv.toEndPan = setTimeout(function(){
						doneSliding();
					},600);
					//
					handleControls();
				});
				//
				//
				// Themes Slider...
				TweenMax.set('#themesWrap', {x:'-0%'});
				//lv.navspeed = 1;
				//lv.navdelay = 0;
				//lv.navEase = 'Power4.easeInOut';
				function themesNav(dest){
					if(dest > lv.themeCur){
						if(lv.themeCur == lv.themesTotal){
							return;
						}
					}
					if(dest < lv.themeCur){
						if(lv.themeCur == 1){
							return;
						}
					}
					//
					lv.themesXDest = (dest-1)*100;
					TweenMax.to('#themesWrap', lv.navspeed, {delay:lv.navdelay, x:'-'+lv.themesXDest+'%', ease:lv.navEase, onComplete:doneThemeSliding, force3D:'auto'});
					lv.themeCur = dest;
					//startUpdater();
					//
					lv.xposCurThemes = lv.themesXDest;
					//lv.navdelay = 0;
					handleThemeControls();
				}
				//
				function setThemeNav(welk){
					lv.themeCur = welk;
					lv.themesXDest = (welk-1)*100;
					TweenMax.set('#themesWrap', {x:'-'+lv.themesXDest+'%'});
					handleThemeControls();
				}
				//
				function setCurTheme(){
					lv.themeCur = lv.objectsData[lv.sectionCur]['theme']; 
				}
				setCurTheme();
				//
				function doneThemeSliding(){
				}
				//
				function handleThemeControls(){
					//
					$('#themeNavLeft').css({'display':'none'});
					if(lv.themeCur > 1){
						$('#themeNavLeft').css({'display':'block'});
					}
					$('#themeNavRight').css({'display':'none'});
					if(lv.themeCur < lv.themesTotal){
						$('#themeNavRight').css({'display':'block'});
					}
					//
					$('.themeIconActive').attr('src','/assets/img/page_icon.png').removeClass('themeIconActive');
					$('#themeMiniIcon_'+lv.themeCur+' img').attr('src','/assets/img/page_icon_selected.png').addClass('themeIconActive');
				}
				handleThemeControls();
				//
				//
				//
				function slideRightThemes(){
					themesNav(lv.themeCur+1);
				}
				function slideLeftThemes(){
					themesNav(lv.themeCur-1);
				}
				$('#clickThemeNavRight').on('click', function(){
					slideRightThemes();
				});
				$('#clickThemeNavLeft').on('click', function(){
					slideLeftThemes();
				});
				$('.themeNavClick').on('click', function(){
					lv.mtid = parseInt($(this).attr('mid'));
					themesNav(lv.mtid);
				});
				//
				$('#fontSizeBtn2').on('click', function(){
					$('.feelFontSize').addClass('bigFont');
					$('#fontSizeBtn2').parent().css({'color':'rgb(185,254,111)'});
					$('#fontSizeBtn1').parent().css({'color':'rgb(255,255,255)'});
				});
				$('#fontSizeBtn1').on('click', function(){
					$('.feelFontSize').removeClass('bigFont');
					$('#fontSizeBtn1').parent().css({'color':'rgb(185,254,111)'});
					$('#fontSizeBtn2').parent().css({'color':'rgb(255,255,255)'});
				});
				//
				function doSignLang(){
					if(lv.signLang == lv.signLangLast){
						return;
					}
					if(lv.signLang == 0){
						setVidSrc(lv.objectsData[lv.sectionCur]['video'],lv.objectsData[lv.sectionCur]['subs']);
					}else{
						setVidSrc(lv.objectsData[lv.sectionCur]['video_sign-language'],0);
					}
					lv.signLangLast = lv.signLang;
					//
					clearTimeout(lv.toSignLang);
					lv.toSignLang = setTimeout(function(){
						toggleVidFromMenu();
					},200);
					closeShare();
				}
				//
				$('#signLangBtnOn').on('click', function(){
					lv.signLang = 1;
					doSignLang();
					$('#signLangBtnOn').parent().css({'color':'rgb(185,254,111)'});
					$('#signLangBtnOff').parent().css({'color':'rgb(255,255,255)'});
					topPanelClose();
				});
				$('#signLangBtnOff').on('click', function(){
					lv.signLang = 0;
					doSignLang();
					$('#signLangBtnOff').parent().css({'color':'rgb(185,254,111)'});
					$('#signLangBtnOn').parent().css({'color':'rgb(255,255,255)'});
					topPanelClose();
				});
				//
				lv.colofonOpen = 0;
				function colofonClose(){
					if(lv.colofonOpen == 0){
						return;
					}
					lv.colofonOpen = 0;
					TweenMax.fromTo('#colofonText', 0.3, {y:0, 'opacity':1}, {y:20, 'opacity':0, ease:Power3.easeInOut});
					TweenMax.fromTo('#colofonHold', 0.5, {scale:1, 'opacity':1}, {delay:0.075, scale:0.8, 'opacity':0, ease:Power3.easeInOut});
					TweenMax.fromTo('#colofonWrap', 0.4, {'display':'block','opacity':1}, {delay:0.6, 'display':'none','opacity':0, ease:Power3.easeInOut});
				}
				$('#colofonBtn').on('click', function(){
					lv.colofonOpen = 1;
					TweenMax.fromTo('#colofonWrap', 0.5, {'display':'none','opacity':0}, {'display':'block','opacity':1, ease:Power3.easeInOut});
					TweenMax.fromTo('#colofonHold', 0.6, {scale:1.2, 'opacity':0}, {delay:0.4, scale:1, 'opacity':1, ease:Power3.easeInOut});
					TweenMax.fromTo('#colofonText', 0.3, {y:20, 'opacity':0}, {delay:0.7, y:0, 'opacity':1, ease:Power3.easeInOut});
					toggleVidFromMenu();
				});
				$('#colofonClose').on('click', function(){
					colofonClose();
				});
				//
				lv.shareOpen = 0;
				TweenMax.set('#shareIconsWrap', {x:'40%', 'opacity':0, 'display':'none'});
				$('#shareBtn').on('click', function(){
					if(lv.shareOpen == 0){
						lv.shareOpen = 1;
						TweenMax.to('#shareBtnWrap', 0.4, {x:-65, ease:Power3.easeInOut});
						TweenMax.to('#shareIconsWrap', 0.4, {x:'0%', 'opacity':1, 'display':'block', ease:Power3.easeInOut});
						return;
					}
					closeShare();
				});
				function closeShare(){
					if(lv.shareOpen == 1){
						lv.shareOpen = 0;
						TweenMax.to('#shareBtnWrap', 0.4, {x:0, ease:Power3.easeInOut});
						TweenMax.to('#shareIconsWrap', 0.4, {x:'40%', 'opacity':0, 'display':'none', ease:Power3.easeInOut});
						return;
					}
				}
				function PopupCenter(url, title, w, h) {
					var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
					var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
					width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
					height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
					var left = ((width / 2) - (w / 2)) + dualScreenLeft;
					var top = ((height / 2) - (h / 2)) + dualScreenTop;
					var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
					if (window.focus) {
						newWindow.focus();
					}
				}				
				$('.sharer').on('click', function(){
					lv.mlink = $(this).attr('href');

					PopupCenter(lv.mlink,'share','600','445'); 
					return false;
				});
				//
				$('#logoClick').on('click', function(){
					topPanelClose();
					sectionNav(1);
					showHomeText();
					return false;
				});
				//
				lv.homeTextDone = 0;
				function hideHomeText(){
					if(lv.homeTextDone == 1){
						return;
					}
					lv.homeTextDone = 1;
					TweenMax.to('#homeTextWrap', 0.8, {'opacity':0, 'display':'none', ease:Power3.easeOut});
				}
				function showHomeText(){
					lv.homeTextDone = 0;
					TweenMax.to('#homeTextWrap', 0.8, {delay:1,'opacity':1, 'display':'block', ease:Power3.easeOut});
				}
				$(document).on('touchstart mousedown', function(){
					hideHomeText();
				});
				//
				//
				/*
				function resizer(){
					lv.ww = $(window).width();
					lv.wh = $(window).height();
				}
				resizer();
				$(window).resize(function(){
					resizer();
					calibrateRatio();
				});
				//
				function calibrateRatio(){
					lv.ratioCalc = 1.77;
					lv.mrw = lv.wh * lv.ratioCalc;
					if(lv.mrw > 1600){
						lv.mrw = 1600;
					}
					$('#main').css({'max-width':lv.mrw+'px'});
				}
				calibrateRatio();
				//
				*/
				//
				lv.mywidth = 1600; lv.myheight = 900;
				$(window).resize(function(){
					lv.ww = $(window).width();
					lv.wh = $(window).height();
					lv.nsw = lv.ww/lv.mywidth;
					lv.nsh = lv.wh/lv.myheight;
					if(lv.nsw <= lv.nsh){
						lv.ns = lv.nsw;
					}else{
						lv.ns = lv.nsh;
					}
					//lv.nsw <= lv.nsh ? (lv.nsw = lv.nsh) : (lv.nsh = lv.nsw);
		
					if(lv.ns > 1){
						lv.ns = 1;
					}
					TweenMax.set('#container', {'scale':lv.ns, force3D:'auto'});
				});
				$(window).resize();
				//
				//
				$(window).hashchange( function(){
					lv.hash = window.location.hash.substring(1);
					lv.navid = lv.hash;
					if(lv.navid == ''){
						lv.navid = $('div[data-id="1"]').attr('data-slug');
					}
					if(lv.navid == lv.navActive){
						return;
					}
					lv.mdiv = $('div[data-slug="'+lv.navid+'"]').attr('data-id');
					lv.mdiv = parseInt(lv.mdiv);
					//console.log('hash nav to: '+lv.mdiv+' ('+lv.navid+')');
					//
					if(!lv.mdiv){
						//console.log('cant use that hash');
						return;
					}
					//
					topPanelClose();
					colofonClose();
					sectionNav(lv.mdiv);
				});
				//
				function init(){
					lv.navActive = $('div[data-id="1"]').attr('data-slug');
					TweenMax.to('#mainHider', 0.5, {'opacity':0, 'display':'none', ease:Power2.easeIn});
					$(window).hashchange();
				}
				//
				setTimeout(function(){
					init();
				},300);
				//
				//$('#showDebugInfo').html(navigator.userAgent).css({'display':'table-cell'});
				//
				lv.ua = navigator.userAgent.toLowerCase();
				lv.isAndroid = lv.ua.indexOf("android") > -1;
				//
				//
			});
		</script>
    </body>
</html>
