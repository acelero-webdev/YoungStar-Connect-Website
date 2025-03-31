<?php /* Template Name: Participating in YoungStar */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>
<?php $hero = get_field('hero'); ?>
<?php $bottom = get_field('bottom'); ?>

<?php /* BANNER */ ?>
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

<?php /* HERO */ ?>
<main class="hero container">
    <div class='hero__article'>
        <?php if($hero) { ?>
            <div>
                <h2 class='hero__article__heading'><?php echo $hero['left_pane']['heading']?></h2>
                <div class='hero__article__img-container'>
                    <?php if($hero['left_pane']['image']) { ?>
                        <img class='hero__article__img' src="<?php echo $hero['left_pane']['image']['url'] ?>" alt="<?php echo $hero['left_pane']['image']['alt'] ?>"/>
                    <?php } ?>
                </div>
                <div class='hero__article__content'>
                    <?php echo $hero['left_pane']['content']?>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class='hero__article'>
        <div>
            <h2 class='hero__article__heading'><?php echo $hero['right_pane']['heading'] ?></h2>
            <div class='hero__article__img-container'>
                <?php if($hero['right_pane']['image']) { ?>
                    <img class='hero__article__img' src="<?php echo $hero['right_pane']['image']['url'] ?>" alt="<?php echo $hero['right_pane']['image']['alt'] ?>"/>
                <?php } ?>
            </div>
            <div class='hero__article__content'>
                <?php echo $hero['right_pane']['content']?>
            </div>
        </div>
    </div>
</main>

<?php /* BOTTOM ARTICLE */ ?>
<?php if($bottom) { ?>
    <article class='single container'>
        <div>
            <h2 class='single__article__heading'><?php echo $bottom['section']['heading'] ?></h2>
            <div class='single__article__img-container'>
                <?php if($bottom['section']['image']) { ?>
                    <img class='single__article__img' src="<?php echo $bottom['section']['image']['url'] ?>" alt="<?php echo $bottom['section']['image']['alt'] ?>"/>
                <?php } ?>
            </div>
            <div class='single__article__content'>
                <?php echo $bottom['section']['content']?>
            </div>
        </div>
    </article>
<?php } ?>

<?php get_footer(); ?>