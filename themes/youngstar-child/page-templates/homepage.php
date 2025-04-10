<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>
<?php $newsletter = get_field('newsletter'); ?>

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
				<div onclick="window.open('<?php echo get_sub_field('image_url')?>', '_self', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');" style="cursor: pointer" class="grid-item" aria-haspopup="dialog" tabIndex="0">
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

    <div class="container" style="margin: 8rem auto 5rem auto;">
        <h2 class='single__article__heading'><?php echo $newsletter['heading'] ?></h2>
        <p class='single__article__text' style="text-align: center;"><?php echo $newsletter['text'] ?></p>
        <div class='single__article__img__container__alt'>
            <?php if($newsletter['image']) { ?>
                <a class='single__article__img__link' href='<?php echo $newsletter['image_link']['url']; ?>' target="_blank"> <img class='single__article__img--alt' src="<?php echo $newsletter['image']['url'] ?>" alt="<?php echo $newsletter['image']['alt'] ?>"/></a>
            <?php } ?>

            <?php if($newsletter['secondary_image']) { ?>
                <a class='single__article__img__link' href='<?php echo $newsletter['secondary_image_link']['url']; ?>' target="_blank"><img class='single__article__img--alt' src="<?php echo $newsletter['secondary_image']['url'] ?>" alt="<?php echo $newsletter['secondary_image']['alt'] ?>"/></a>
            <?php } ?>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>