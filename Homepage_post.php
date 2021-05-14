<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
   Template Name: Homepage
 */
get_header(); ?>


	<div class="grid-container">
		<div class="grid-x">
			<div class="large-12 cell new_font">

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home_Content') ) : ?>
				<?php endif; ?>
				
				<!---->
				
				
<div class="grid-x grid-padding-x">

<?php
$args = array( 'numberposts' => 6, 'order'=> 'DESC', 'orderby' => 'date'  ); $postslist = get_posts( $args );

foreach ($postslist as $post) :  setup_postdata($post); ?> 
    
<!-- Post Block -->
<div class="large-4 cell">
<div class="post_box">
	
    <p><div class="post_im">
     	<?php echo the_post_thumbnail( 'homepage-thumb' ); ?> 
    </div></p>
      
    <h5 class="storytitle"><?php the_title(); ?></h5>
      
    <p>
      
	<div class="storycontent">
     
    <?php the_excerpt(); ?>
     
	</div>
      
    </p>
      
	<div align="center"><a href="<?php the_permalink() ?>" class="button">View More</a></div>
    
</div>
</div>
			
<!-- Post Block END -->
<?php endforeach; ?>
			
</div>
 
	
			</div>
		</div>
	</div>
	
<?php get_footer();