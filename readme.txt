=== My Picks Pay ===

Contributors: eServerSpace
Tags: video
Requires at least: 2.0
Tested up to: 2.1
Stable tag: 1.0

Allows ads from My Picks Pay.


== Description ==

This plugin allows advertisements in WordPress posts from My Picks Pay.
It replaces text in posts of the form:

    [mypickspay width=w height=h id=ad_ID]

This text gets converted into HTML embed tags, so the
video can be displayed directly in the post.
w and h are the dimensions of the box, which should be provided
along with the ad_ID.  Note that the video will look odd and might
not display properly if you change the dimensions.

Note that the syntax is very sensitive and any slight deviations
from the above format will cause it to be left as plain text
e.g. putting quotes around the arguments, putting an '@' in ad_ID,
or putting anything other than numbers in for width and height.


== Installation ==

1. Upload `mypickspay.php` to the `/wp-content/plugins/` directory of your WordPress installation
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to [My Picks Pay](http://v2.mypaidads.com/) to post the ad to your blog, or get the text
   to post it yourself.
