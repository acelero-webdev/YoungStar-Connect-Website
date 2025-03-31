<?php /* Template Name: YoungStar Coaching Supports */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>
<?php $article = get_field('article'); ?>
<?php $article_cards = get_field('article_cards'); ?>
<?php $article2 = get_field('article_2'); ?>

<?php /* BANNER */ ?>
<div class="container-full homepage_top subpage_top"
    style="background-image: url('<?php echo $banner['background_image']['url']?>');">
    <div class="container">
        <h1 class='heading'>
			<?php $banner['heading']; ?>
		</h1>
		<div class='description'>
			<?php echo $banner['content']; ?>
		</div>
    </div>
</div>

<?php /* CONTENT */ ?>
    <div class="single container">
        <main class='single__article'>
            <h2 class='single__article--heading'><?php echo $article['heading']; ?></h2>
            <?php echo $article['content']; ?>
        </main>

        <section class="single__article">
            <h2 class="single__article--heading"><?php echo $article_cards['heading']; ?></h2>
            <?php echo $article_cards['content']; ?>
            <div class="single__card__contacts">
                <?php $cards = get_field('article_cards')['cards']; ?>

                <?php if($cards) { ?>
                    <?php foreach($cards as $card) { ?>
                        <div class="single__card__contacts__card">
                            <?php echo $card['card']['svg'] ?>
                            <h4 class='single__card__contacts__card--heading'><?php echo $card['card']['heading']; ?></h4>
                            <?php echo $card['card']['content']; ?>
                        </div>
                    <?php } ?> 
                <?php } ?>
            </div>
        </section>

        <section class='single__article'>
            <h2 class='single__article--heading'><?php echo $article2['heading']; ?></h2>
            <?php echo $article2['content']; ?>
        </section>
    </div>

<?php get_footer(); ?>