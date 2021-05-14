<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
get_header(); ?>

<div class="top_c">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell new_font">

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog_Header') ) : ?>
				<?php endif; ?>


				<div class="grid-container">
					<div class="grid-x grid-padding-x">

						<div class="large-8 cell new_font">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

	             <h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
     
                 <div class="post_im_main">
                    <p><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?> </p>
                 </div>

                 <hr />
     
	             <div class="category"><?php the_category(',') ?> / <?php echo get_the_date(); ?></div>
    
                 <hr />

	             <div class="storycontent">
                  <?php 
                      if (is_single() || is_page()) 
                         the_content('Read the rest of this entry &raquo;');
                      else {
                         the_excerpt();
                      }
                   ?> 
	             </div>

               </div>

               <br /><br />

               <?php endwhile; else: ?>
               <?php _e('Sorry, no post found.'); ?>
               <?php endif; ?>


						</div>

						<div class="large-4 cell new_font">


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog_Sidebar') ) : ?>
<?php endif; ?>

						</div>

					</div>
				</div>

				

			</div>
		</div>
	</div>
</div>   

<?php get_footer();