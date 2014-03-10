<?php
/**
 * Template Name: TCB Ticker
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('ticker'); ?>
<div class="container">
<article id="tcbPage">
<section id="ticker">
	<?php get_template_part('ticker'); ?>
<!-- <div class="popout">
			<a href="#" onClick="javascript:void(0); tickerWindow.close();" class="button">

				Close

			</a>
				</div> -->
			</div>
		</div>
</section>
</div>
</article>
	<?php wp_footer(); ?>
</body>
</html>
