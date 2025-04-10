<?php /* Template Name: Program Self-Assessment */ ?>
<?php get_header(); ?>
<?php $banner = get_field("banner"); ?>
<?php $intro = get_field("intro"); ?>
<?php $aside = get_field("aside"); ?>

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
        <section class='single__article'>
            <h2 class='single__article--heading'><?php echo $intro['heading']; ?></h2>
            <p class='single__article--text'><?php echo $intro['content']; ?></p>
        </section>

        <main class="single__card">
            <h2 class="single__card--heading">Self-Assessment Resources</h2>
            <div class="single__card__contacts">
                <?php if(have_rows('cards')) { ?>
                    <?php while(have_rows('cards')) { ?>
                        <?php the_row(); ?>
                        <?php $card = get_sub_field('card'); ?>
                        
                        <div class="single__card__contacts__card">
                            <?php echo $card['svg'] ?>
                            <h4 class="single__card__contacts__card--heading"><?php echo $card['heading']; ?></h4>
                            <?php echo $card['links']; ?>
                        </div>

                    <?php } ?>
                <?php } ?>
            </div>
        </main>

        <section class="single__aside">
            <h2 class="single__aside--heading"><?php echo $aside['heading']; ?></h2>
            <div class="single__aside__container">
                <?php echo $aside['content'] ?>
            </div>
        </section>
    </div>

<?php get_footer(); ?>