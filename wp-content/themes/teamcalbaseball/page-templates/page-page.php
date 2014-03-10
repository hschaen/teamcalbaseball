<?php
/**
 * Template Name: TCB Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<article id="tcbPage">
<section>
	<?php if (have_posts()) :
while (have_posts()) : the_post();
	 the_content();
	 endwhile;
	 endif;
	 ?>

</section>
</article>
<?php
get_footer();
