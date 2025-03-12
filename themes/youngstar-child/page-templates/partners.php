<?php /* Template Name: Partners */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>


<style>
	.heading,
	.description > p {
		color: white !important
	}
</style>


<div class="container-full homepage_top subpage_top"
    style="background-image: url('<?php echo $banner['background_image']['url']?>');">
    <div class="container">
        <h1 class='heading'>
			<?php the_title() ?>
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
<?php
$bottom = get_field('bottom_section');
if( $bottom ): ?>
<div class="container-full homepage_bottom">
    <div class="container">
        <div class="row row-45-55">
            <div class="p-0-10">
                <?php echo $bottom['left_side_content']; ?>
            </div>
            <div>
                <div class="homepage_bottom_grid p-0-10">
                    <div class="row row-grid">
                        <?php
                            $rows = $bottom['grid_content'];
                            if( $rows ) {
                                foreach( $rows as $row ) {
                                    $title = $row['title']; $date = $row['date']; $date2 = date("F j, Y", strtotime($date)); $start = $row['start_time']; $end = $row['end_time']; $location = $row['location']; ?>
                        <div class="grid-item">
                            <div>
                                <div>
                                    <h4><?php echo $title; ?></h4>
                                    <h5><?php echo $date; ?></h5>
                                    <h5><?php echo $start . " - " . $end; ?></h5>
                                    <h5><?php echo $location; ?></h5>
                                </div>
                            </div>
                        </div>
                        <?php 
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>