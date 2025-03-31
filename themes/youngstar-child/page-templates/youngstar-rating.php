<?php /* Template Name: YoungStar Rating */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>

<?php /* BANNER */ ?>
<div class="container-full homepage_top subpage_top"
    style="background-image: url('<?php echo $banner['background_image']['url']?>');">
    <div class="container">
        <h1 class='heading'>
			<?php echo $banner['heading']; ?>
		</h1>
		<div class='description'>
			<?php echo $banner['content']; ?>
		</div>
    </div>
</div>

<?php /* CONTENT */ ?>
    <div class="single container">
        <?php if(have_rows('articles')) { ?>
            <?php while(have_rows('articles')) { ?>
                <?php the_row(); ?>
                <?php $article = get_sub_field('article'); ?>
            
                <section class='single__article'>
                    <h2 class="rating__section--heading"><?php echo $article['heading'] ?></h2>
                    <?php echo $article['content']; ?>
                </section>
                
            <?php } ?>
        <?php } ?>
    </div>

<?php get_footer(); ?>