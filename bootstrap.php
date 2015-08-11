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
		'bg' => '/themas/'.$theme.'/bg.jpg',
		'objects' => $objects
	];
	$themes[$key] = $_theme;
	print_r(json_encode($themes));
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
			'bg' => '/themas/'.$theme.'/'.$object.'/bg.jpg',
			'bg-blur' => '/themas/'.$theme.'/'.$object.'/bg-blur.jpg',
			'thumb' => '/themas/'.$theme.'/'.$object.'/thumb.jpg',
			'icon' => '/themas/'.$theme.'/'.$object.'/icon.png',
			'icon' => '/themas/'.$theme.'/'.$object.'/icon-mo.png',
		];
		$objects_structure[$key] = $_object;
	}
	return $objects_structure;	
}
?>