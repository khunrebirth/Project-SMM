<?php

function smm_slug($text) {
	$textlower = strtolower($text);

	return str_replace(" ","-", $textlower);
}

function smm_slug_th($text) {
	$slug_th = strtolower($text);
	$slug_th = str_replace(" ","-", $slug_th);
	$slug_th = str_replace("/","-", $slug_th);
	$slug_th = str_replace("&","and", $slug_th);
	$slug_th = str_replace("(","-", $slug_th);
	$slug_th = str_replace(")","-", $slug_th);
	$slug_th = str_replace("!","-", $slug_th);

	return $slug_th;
}

function smm_is_mobile() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
