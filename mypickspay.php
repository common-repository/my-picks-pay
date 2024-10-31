<?php
/*
Plugin Name: My Picks Pay
Version: 1.0
Plugin URI: http://v2.mypaidads.com/
Description: Allows ads from My Picks Pay
Author: eServerSpace
Author URI: http://eserverspace.com/

Copyright (c) 2008
Released under the LGPL license v3 or later
http://www.gnu.org/licenses/lgpl.txt
*/


function plugin_mypickspay($text) {
  //Don't use quotes around ID because WP might change to slanted quotes
  //Regex for safety
  $text = preg_replace("|\[mypickspay +width=([0-9]+) +height=([0-9]+) +id=([0-9a-fA-F]+)\]|ms",
    "<embed width=\"\\1\" height=\"\\2\" src=\"http://66.103.16.7/videoplayer.swf?id=\\3\" />",$text);

  return $text;
}

add_filter('the_content', 'plugin_mypickspay');
