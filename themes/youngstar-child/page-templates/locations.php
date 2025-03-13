<?php /* Template Name: Locations */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>

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

<?php the_content(); ?>


<div class="container-full homepage_bottom">
    <div class="container">
        <div class="row row-45-55">
            <div class="p-0-10">
                <h2>Share Your Voice!</h2>
<p>YoungStar Connect wants to ensure enrolling and participating in YoungStar is the best experience it possibly can be. Share your ideas and suggestions by emailing us at <a href="mailto:info@youngstarconnect.com">info@youngstarconnect.com</a>.</p>
            </div>
            <div>
                <div class="homepage_bottom_grid p-0-10">
                    <div class="row">

                                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>