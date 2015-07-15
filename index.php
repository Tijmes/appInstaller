<?php
include('bootstrap.php');

?>
<!doctype html>
<html lang="nl"> 
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Kentalis</title>	
	<meta name="keywords" content="kentalis, doof, kind, ouders, slechthorend, doofblind, autisme, zorg, onderwijs, diagnostiek, onderzoek, spraak, taal, cluster 2, communicatie, behandeling">
	<meta name="description" content="Kentalis is er voor mensen met een taal- of spraakstoornis of die doof, slechthorend, autistisch of doofblind zijn. Wij helpen u verder met onderzoek, zorg en onderwijs.">
	<link rel="shortcut icon" href="/favicon.ico">
	<script src="/assets/dist/base.min.js"></script>
	<script src="/assets/dist/j.min.js"></script>
	<link rel="stylesheet" href="/assets/dist/style.css" />
</head>
<body>
<div id="themes">
	<div class="iosSlider themeSlider">
		<div class="slider">
<?php foreach($themes as $key => $theme) { ?>
			<div id="slide-<?=$key;?>" class="slide bg-img txt" data-bg-img="<?=$theme['bg'];?>">
				 <div class="txt"><?=$theme['info'];?></div>
				 <div class="bg bg-black"></div>
			</div>
<?php } ?>
		</div>
	</div>
	<div class="dots-wrapper">
		<ul class='dots bottom'>
<?php foreach($themes as $key => $theme) { ?>
			<li class="slide-select"></li>
<?php } ?>
		</ul>
	</div>
</div>
<div id="objects">

</div>

</body>