<?php
/**
 * Template Name: TCB Home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<article>
	<section id="featuredNews">
		<div class="featuredNewsLeft">
			<div class="slider">
				<?php echo do_shortcode("[metaslider id=83]"); ?>
			</div>
			<div class="tryouts">
				<img class="tcbText" src="http://teamcalbaseball.com/wp-content/themes/teamcalbaseball/images/teamCalBaseball.png" alt="Team California Baseball" title="Sign Up to Tryout for Team California">
				<h4>Tryout Signup</h4>
				<p><a href="/teamcalbaseball/signup" class="button">Click Here to Get Started</a></p>
			</div>
			<div class="tryoutsImg">
				<img class="backgroundImg" src="http://teamcalbaseball.com/wp-content/uploads/2014/02/IMG_20131109_103609.jpg">
			</div>
		</div>
		<div class="featuredNewsAds">
			<div class="featuredAdsHeader">
				<div class="featuredAdsHeaderLeft">
					<img src="<?php bloginfo('template_url'); ?>/images/tcblogo_white.png">
				</div>
				<div class="featuredAdsHeaderRight">
					<h4>SPONSORS</h4>
				</div>
			</div>
			<ul class="featuredNewsAds">
				<li class="ad1"><a href="http://perfectgame.org/" alt="PerfectGame.org"><img title="PerfectGame.com" alt="Perfect Game" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/perfectGame.png" height="auto" width="100%"></a></li>
				<li class="ad1"><a href="http://emspeedtraining.com/" alt="emspeedtraining.org"><img title="emspeedtraining.com" alt="EM Speed and Power" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/em.png" height="auto" width="100%"></a></li>
				<li class="ad1"><a href="http://usabaseball.com/" alt="usabaseball.com"><img title="usabaseball.com" alt="USA Baseball" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/USA-Baseball1.gif" height="auto" width="100%"></a></li>
			<li class="ad1"><a href="http://fieldlevel.com/" alt="fieldlevel.com"><img title="fieldlevel.com" alt="Field Level" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/fieldLevel.png" height="auto" width="100%"></a></li>
			</ul>
		</div>
		<div class="featuredNewsRight">
			<div class="featuredNewsHeader">
				<div class="featuredNewsHeaderLeft">
					<img src="<?php bloginfo('template_url'); ?>/images/tcblogo_white.png">
				</div>
				<div class="featuredNewsHeaderRight">
					<h4>NEWS</h4>
				</div>
			</div>
			<div class="featuredNews">
				<ul>
					<?php
						query_posts('posts_per_page=15');
						if(have_posts());
						while(have_posts()) :
						the_post();
						?>
						<li>
						    <a href="<?php echo get_permalink(); ?>">
						    	<div class="fnEntry">
							    	<div class="fnThumbnail">
							    		<?php the_post_thumbnail(array(50,50)); ?>
							    	</div>
							    	<div class="fnTitle">
							    		<?php the_title(); ?>
							    	</div>
							    </div>
						    </a>
						</li>
						<?php
						endwhile;
						?>
				</ul>
			</div>
		</div>
	</section>
	<section id="sponsorsScroller">
		<ul class="sponsors">
	<li>
		<a href="http://Perfectgame.org" target="_blank">
			<img class="size-thumbnail wp-image-143" alt="perfectGame" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/perfectGame-150x49.png" width="150" height="49" />
		</a>
	</li>
	<li>
		<a href="http://www.azfallclassic.com" target="_blank">
			<img class="size-full wp-image-137" alt="azclassicbaseball" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/azclassicbaseball.png" width="133" height="115" />
		</a>
	</li>
	<li>
		<a href="http://Fieldlevel.com" target="_blank">
			<img class="aligncenter size-full wp-image-141" alt="fieldLevel" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/fieldLevel.png" width="150" height="61" />
		</a>
	</li>
	<li>
		<a href="http://usabaseball.com/" target="_blank">
			<img class="aligncenter size-thumbnail wp-image-144" alt="USA-Baseball1" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/USA-Baseball1-150x150.gif" width="150" height="150" />
		</a>
	</li>
	<li>
		<a href="http://Teamonebaseball.com" target="_blank">
			<img class="size-thumbnail wp-image-139" alt="baseballFactory2" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/baseballFactory2-150x71.png" width="150" height="71" />
		</a>
	</li>
	<li>
		<a href="http://usabf.com/" target="_blank">
		<img class="size-thumbnail wp-image-138" alt="usabf" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/usabf-150x150.png" width="150" height="150" />
		</a>
	</li>
	<li>
		<a href="http://emspeedtraining.com/" target="_blank">
			<img class=" size-thumbnail wp-image-142" alt="em" src="http://harrisonschaen.com/teamcalbaseball/wp-content/uploads/2014/02/em-150x144.png" width="150" height="144" />
			</em></strong>
		</a>
	</li>
	
</ul>
	</section>
	<section>
		<?php /*
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );

				
			endwhile;
		*/?>
	</section>
</article>
<?php
get_footer(); ?>
