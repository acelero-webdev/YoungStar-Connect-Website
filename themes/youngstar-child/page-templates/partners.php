<?php /* Template Name: Partners */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>


<div class="container-full homepage_top subpage_top"
    style="background-image: url('<?php echo $banner['background_image']['url']?>');">
    <div class="container">
        <h1 class='heading'>
			<?php echo $banner['heading'] ?>
		</h1>
		<div class='description'>
			<?php echo $banner['content']; ?>
		</div>
    </div>
</div>
<div class="container-full homepage_content">
    <div class="container">
        <div class="row">
            <div>
                <h2><?php echo get_field('grid_content_title_top'); ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-grid partner-grid partner-grid-top">
            <?php
            if( have_rows('grid_content_top') ):
                while( have_rows('grid_content_top') ) : the_row(); ?>

            <div class="grid-item" aria-haspopup="dialog" tabIndex="0">
                <div style="background-image:url('<?php echo get_sub_field('image')['url']; ?>');">
                    <div class="not-rollover">
                        <h4 style="color: #F9F5F1;"><?php echo get_sub_field('title'); ?></h4>
                        <img src=" /wp-content/uploads/2023/02/arrow.png" alt="right facing arrow">
                    </div>
                    <div class="rollover">
                        <p><?php echo get_sub_field('rollover_content'); ?></p>
                    </div>
                </div>
            </div>

            <?php endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<div class="container-full homepage_content">
    <div class="container">
        <div class="row">
            <div>
                <h2><?php echo get_field('grid_content_title'); ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-grid partner-grid">
            <?php
            if( have_rows('grid_content') ):
                while( have_rows('grid_content') ) : the_row(); ?>

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

            <?php endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>