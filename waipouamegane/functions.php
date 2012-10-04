<?php
/**
 * Waipouamegane functions and definitions
 */


/**
 * Fix Facebook locale setting
 */
function filter_facebook_locale($locale){
	$wp_locale = get_locale();
	if ( $wp_locale = 'ja' ) $locale = 'ja_JP';
	return $locale;
}
add_filter('fb_locale','filter_facebook_locale');


/**
 * Ad Manage
 */
function wpdtheme_ad_header(){
	if ( preg_match("/iPhone|Android/i", $_SERVER['HTTP_USER_AGENT']) ) : ?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* mobile */
google_ad_slot = "7941700887";
google_ad_width = 320;
google_ad_height = 50;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script><?php else: ?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* サイト名下 */
google_ad_slot = "2339695504";
google_ad_width = 728;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php endif;
}

function wpdtheme_ad_content_above(){
	?>
スポンサードリンク<br><script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* 新1 */
google_ad_slot = "6271049840";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	<?php
}

function wpdtheme_ad_content_below(){
	?>
<div class="clr"></div>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
/* 新2 */
google_ad_slot = "5845455406";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=148632075278130";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/WP-D/292801787485325" data-width="292" data-show-faces="true" data-stream="false" data-header="true"></div>
<?php if(function_exists('related_posts')): ?>
<div class="related_entries">
<?php related_posts(); ?>
</div>
<?php endif;
}

// add actions
add_action( 'wpdtheme-ad-header', 'wpdtheme_ad_header' );
add_action( 'wpdtheme-ad-content-above', 'wpdtheme_ad_content_above' );
add_action( 'wpdtheme-ad-content-below', 'wpdtheme_ad_content_below' );