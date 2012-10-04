<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package Waipoua
 * @since Waipoua 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<aside class="entry-details">
		<ul class="clearfix">
			<li class="entry-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></li>
			<li class="entry-comments"><?php comments_popup_link( __( '0 comments', 'waipoua' ), __( '1 comment', 'waipoua' ), __( '% comments', 'waipoua' ), 'comments-link', __( 'comments off', 'waipoua' ) ); ?></li>
			<li class="entry-edit"><?php edit_post_link(__( 'Edit Post &rarr;', 'waipoua') ); ?></li>
		</ul>
	</aside><!--end .entry-details -->

	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!--end .entry-header -->
<?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>



	<div class="entry-content clearfix">
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

		<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		<?php endif; ?>
		<?php the_content(); ?>	
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
<?php endif; ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'waipoua' ), 'after' => '</div>' ) ); ?>


	</div><!-- end .entry-content -->

	<footer class="entry-meta">
		<ul>
			<li class="entry-cats"><span><?php _e('Posted in:', 'waipoua') ?></span> <?php the_category( ', ' ); ?></li>
			<?php $tags_list = get_the_tag_list( '', ', ' ); 
				if ( $tags_list ): ?>	
			<li class="entry-tags"><span><?php _e('Tagged:', 'waipoua') ?></span> <?php the_tags( '', ', ', '' ); ?></li>
			<?php endif; ?>
			<?php // Include Share-Btns on single posts page
				$options = get_option('waipoua_theme_options');
				if($options['share-singleposts'] or $options['share-posts']) : ?>
				<?php get_template_part( 'share'); ?>
			<?php endif; ?>
		</ul>

		<?php if ( get_post_format() ) : // Show author bio only for standard post format posts ?>	
		<?php else: ?>
			<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
				<div class="author-info">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'waipoua_author_bio_avatar_size', 80 ) ); ?>
					<div class="author-description">
						<h3><?php printf( __( 'Posted by %s', 'waipoua' ), "<a href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='author'>" . get_the_author() . "</a>" ); ?></h3>
						<p><?php the_author_meta( 'description' ); ?></p>
					</div><!-- end .author-description -->			
				</div><!-- end .author-info -->

			<?php endif; ?>
		<?php endif; ?>

	</footer><!-- end .entry-meta -->

</article><!-- end .post-<?php the_ID(); ?> -->