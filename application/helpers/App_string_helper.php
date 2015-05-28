<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('parse_string'))
{
    function parse_string($str,$data)
    {
        $CI=get_instance();
        $CI->load->library('parser');
        return $CI->parser->parse_string($str,$data,TRUE);
    }
}