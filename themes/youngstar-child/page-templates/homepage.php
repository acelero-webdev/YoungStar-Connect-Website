<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>
<div class="container-full homepage_top"
    style="background-image: url('<?php echo $banner['background_image']['url']?>');">
    <div class="container">
        <div class="row">
            <div>
                <?php echo $banner['content']; ?>
            </div>
            <!-- <div></div> -->
        </div>
    </div>
    <div id="banner_img">
        <img src="/wp-content/uploads/2023/02/teacher_and_studentv2.png" alt="" id="homepage_banner_img">
    </div>
</div>
<div class="container-full homepage_content">
    <div class="container">
        <div class="row row-condensed">
            <div>
                <h2><?php echo get_field('grid_content_title'); ?></h2>
                <?php the_field('grid_content_content'); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-grid">
            <?php
            if( have_rows('grid_content') ):
                while( have_rows('grid_content') ) : the_row(); ?>

			<?php if(get_sub_field( 'image_url')): ?>
				<div onclick="window.open('<?php echo get_sub_field('image_url')?>', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');" style="cursor: pointer" class="grid-item" aria-haspopup="dialog" tabIndex="0">
					<div style="background-image:url('<?php echo get_sub_field('image')['url']; ?>');">
						<div class="not-rollover">
							<h4><?php echo get_sub_field('title'); ?></h4>
							<img src=" /wp-content/uploads/2023/02/arrow.png" alt="right facing arrow">
						</div>
						<div class="rollover">
							<p><?php echo get_sub_field('rollover_content'); ?></p>
						</div>
					</div>
				</div>
			<?php else: ?>
				<div class="grid-item" aria-haspopup="dialog" tabIndex="0">
					<div style="background-image:url('<?php echo get_sub_field('image')['url']; ?>');">
						<div class="not-rollover">
							<h4><?php echo get_sub_field('title'); ?></h4>
							<img src=" /wp-content/uploads/2023/02/arrow.png" alt="right facing arrow">
						</div>
						<div class="rollover">
							<p><?php echo get_sub_field('rollover_content'); ?></p>
						</div>
					</div>
				</div>
			<?php endif; ?>
	

            <?php endwhile;
            endif;
            ?>
        </div>
    </div>
    
    <div class="container">
    <?php echo get_field('sub_section'); ?>
    
    </div>
    
</div>

<?php get_footer(); ?>