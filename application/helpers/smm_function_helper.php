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

$var_date = "2012-01-01 00:00:00"; // Query ออกมาได้เลยครับ

function ssm_thai_date($time) {
	$bundle_thai_day = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
	$bundle_thai_month = [
		'0' => '',
		'1' => 'มกราคม',
		'2' => 'กุมภาพันธ์',
		'3' => 'มีนาคม',
		'4' => 'เมษายน',
		'5' => 'พฤษภาค',
		'6' => 'มิถุนายน',
		'7' => 'กรกฎาคม',
		'8' => 'สิงหาคม',
		'9' => 'กันยายน',
		'10' => 'ตุลาคม',
		'11' => 'พฤศจิกายน',
		'12' => 'ธันวาคม'
	];

//	$thai_date_return = "วัน" . $bundle_thai_day[date("w", $time)];
//	$thai_date_return .= "ที่ " . date("j", $time);
//	$thai_date_return .= " เดือน" . $bundle_thai_month[date("n", $time)];
//	$thai_date_return .=  " พ.ศ." . (date("Y", $time) + 543);

	$thai_date_return = date("j", $time);
	$thai_date_return .= " " . $bundle_thai_month[date("n", $time)];
	$thai_date_return .=  " " . (date("Y", $time) + 543);

	return $thai_date_return;
}
