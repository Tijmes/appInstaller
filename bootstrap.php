<?php
$themes = [];
$theme_structure = file('themas/_order.txt');
foreach($theme_structure as $key => $theme) {
	$theme = trim($theme);
	$theme_info = file_get_contents('themas/'.$theme.'/_info.txt');
	$objects = getObject($theme);
	$_theme = [
		'name' => $theme,
		'info' => $theme_info,
		'bg' => 'themas/'.$theme.'/bg.jpg',
		'objects' => $objects
	];
	$themes[$key] = $_theme;
	//print_r(json_encode($themes));
}

function getObject($theme) {
	$objects_structure = file('themas/'.$theme.'/_order.txt');
	$objects = [];
	foreach($objects_structure as $key => $object) {
		$object = trim($object);
		$object_info = file_get_contents('themas/'.$theme.'/'.$object.'/_info.txt');
		$_object = [
			'name' => $object,
			'info' => $object_info,
			'poster' => 'themas/'.$theme.'/'.$object.'/poster.jpg',
			'img' => 'themas/'.$theme.'/'.$object.'/img.jpg',
			'video' => 'themas/'.$theme.'/'.$object.'/video.mp4',
			'video_sign-language' => 'themas/'.$theme.'/'.$object.'/video_sign-language.mp4',
			'subs' => 'themas/'.$theme.'/'.$object.'/subs.srt',
		];
		$objects_structure[$key] = $_object;
	}
	return $objects_structure;	
}
?>