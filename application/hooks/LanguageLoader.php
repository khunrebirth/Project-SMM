<?php

class LanguageLoader
{
//    function initialize() {
//        $ci =& get_instance();
//        $ci->load->helper('language');
//        $ci->load->library('session');
//        $ci->lang->load('message', $ci->session->userdata('site_lang'));
//    }

	function initialize() {
		$ci =& get_instance();
		$ci->load->config('config');
		$ci->load->helper('language');

		$segments = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
		$language = isset($segments[1]) && $segments[1] != "" ? $segments[1] : $ci->config->item('language_abbr');
		$ci->config->set_item('language_abbr', $language);
		$site_lang = $ci->config->item('language_abbr');

		if ($site_lang) {
			$ci->lang->load('message', $site_lang);
		} else {
			$ci->lang->load('message','en');
		}

//		print_r($_SERVER['REQUEST_URI']); exit();

//		if (count($segments) > 2) redirect($_SERVER['REQUEST_URI'], 'refresh');
	}
}
