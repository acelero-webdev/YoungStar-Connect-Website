<?php /* Template Name: Locations */ ?>
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

<?php the_content(); ?>

<?php get_footer(); ?>