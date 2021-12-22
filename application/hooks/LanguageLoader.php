<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $sitelang = $ci->session->userdata('site_lang');
        if ($sitelang) {

        	$ci->lang->load('home',$sitelang);
        } else {
        	$ci->lang->load('home','english');
        }
        
    }
}


