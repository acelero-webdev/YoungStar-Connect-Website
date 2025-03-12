<?php /* Template Name: What Is YoungStar? */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>


<style>
	.heading,
	.description > p {
		color: white !important
	}
</style>

<?php /* BANNER */ ?>
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

<?php /* CONTENT */ ?>


<?php get_footer(); ?>