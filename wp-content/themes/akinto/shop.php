<?php
/*
Template Name: shop
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<?php get_header();?>

<div id="shop">

	<?php
        $lookbook_args = array(
            'post_type' => 'Lookbook',
            'order' => 'ASC',
            'posts_per_page' => 10
        );
        $lookbook_query = new WP_Query($lookbook_args);
    ?>
    <?php
        if($lookbook_query->have_posts()) :
        while($lookbook_query->have_posts()) :
		$lookbook_query->the_post();
    ?>
	<?php if(get_field('lookbook')): ?>
	<?php while(the_repeater_field('lookbook')): ?>
	<div class ="bloc">
		<a class="thumb" href="#projet"><img src="<?php the_sub_field('images'); ?>" alt="<?php the_sub_field('alt'); ?>" width="150" height="225"></a>
		<div class ="info">
			<img src="<?php the_sub_field('images'); ?>" alt="<?php the_sub_field('alt'); ?>" alt="" width="470" height="675">
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php
	    endwhile;
	    endif;
	    wp_reset_postdata();
	?>
	
</div>

<?php get_template_part('pagination'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

