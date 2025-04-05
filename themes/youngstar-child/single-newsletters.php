<?php get_header(); ?>
<?php the_post(); ?>

<?php 
    // Get all potential sections of the newsletter
    $banner = get_field('banner');
    $article1 = get_field('article_1');
    $article2 = get_field('article_2');
    $hero_left = get_field('hero_left');
    $hero_right = get_field('hero_right');
    $article3 = get_field('article_3');
    $article4 = get_field('article_4');
    $linksSection = get_field('links_section');
    $footer = get_field('footer');
?>

<?php // Main Heading and Description ?>
<div class="container-full homepage_top subpage_top"
    style="background-image: url('<?php echo $banner['background_image']['url']?>');">
    <div class="container">
			<h1 class='heading'>
				<?php echo $banner['heading'] ?>
			</h1>
            <div class='description'>
                <p><?php echo $banner['text']; ?></p>
            </div>
    </div>
</div>

<div class='newsletter container'>
    <?php // ARTICLE 1 ?>
    <?php if($article1['is_active']) { ?>
        <div class="newsletter__article">
            <h2 class="newsletter__article--heading"><?php echo $article1['heading']; ?></h2>
            <div class="newsletter__article--content"><?php echo $article1['content']; ?></div>
        </div>
    <?php } ?>

    <?php // ARTICLE 2 ?>
    <?php if($article2['is_active']) { ?>
        <div class="newsletter__article">
            <h2 class="newsletter__article--heading"><?php echo $article2['heading']; ?></h2>
            <div class="newsletter__article--content"><?php echo $article2['content']; ?></div>
        </div>
    <?php } ?>

    <?php // HERO LEFT ?>
    <?php if($hero_left['is_active']) { ?>
        <div class='newsletter__hero'>
            <div class='newsletter__hero__text'>
                <h2 class='newsletter__hero__text--heading'><?php echo $hero_left['headline']; ?></h2>
                <div class='newsletter__hero__text--content'>
                    <?php echo $hero_left['content']; ?>
                </div>
                
                <?php if($hero_left['buttons'] && $hero_left['buttons']['is_active']) { ?>
                    <div class='newsletter__hero__text__buttons'>
                        <a class='newsletter__hero__text__buttons--link' href='<?php echo $hero_left['buttons']['primary_button_link']['url'] ?>' target="_blank"><button class='newsletter__hero__text__buttons--button newsletter__hero__text__buttons--button-primary'><?php echo $hero_left['buttons']['primary_button_text'] ?></button></a>
                        <?php if($hero_left['buttons']['secondary_button_text'] && $hero_left['buttons']['secondary_button_link']) { ?>
                            <a class='newsletter__hero__text__buttons--link' href='<?php echo $hero_left['buttons']['secondary_button_link']['url'] ?>' target="_blank"><button class='newsletter__hero__text__buttons--button newsletter__hero__text__buttons--button-secondary'><?php echo $hero_left['buttons']['secondary_button_text'] ?></button></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class='newsletter__hero__image-container'>
                <?php if($hero_left['image']) { ?>
                    <img class='newsletter__hero__image-container--img' src="<?php echo $hero_left['image']['url'] ?>" alt="<?php echo $hero_left['image']['alt'] ?>"/>
                <?php } ?>
            </div>
        </div>
    <?php } ?>

    <?php // HERO RIGHT ?>
    <?php if($hero_right['is_active']) { ?>
        <div class='newsletter__hero newsletter__hero--reverse'>
            <div class='newsletter__hero__text'>
                <h2 class='newsletter__hero__text--heading'><?php echo $hero_right['headline']; ?></h2>
                <div class='newsletter__hero__text--content'>
                    <?php echo $hero_right['content']; ?>
                </div>
                
                <?php if($hero_right['buttons'] && $hero_right['buttons']['is_active']) { ?>
                    <div class='newsletter__hero__text__buttons'>
                        <a class='newsletter__hero__text__buttons--link' href='<?php echo $hero_right['buttons']['primary_button_link']['url'] ?>' target="_blank"><button class='newsletter__hero__text__buttons--button newsletter__hero__text__buttons--button-primary'><?php echo $hero_right['buttons']['primary_button_text'] ?></button></a>
                        <?php if($hero_right['buttons']['secondary_button_text'] && $hero_right['buttons']['secondary_button_link']) { ?>
                            <a class='newsletter__hero__text__buttons--link' href='<?php echo $hero_right['buttons']['secondary_button_link']['url'] ?>' target="_blank"><button class='newsletter__hero__text__buttons--button newsletter__hero__text__buttons--button-secondary'><?php echo $hero_right['buttons']['secondary_button_text'] ?></button></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <?php if($hero_right['image']) { ?>
                <div class='newsletter__hero__image-container'>
                    <img class='newsletter__hero__image-container--img' src="<?php echo $hero_right['image']['url'] ?>" alt="<?php echo $hero_right['image']['alt'] ?>"/>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <?php // ARTICLE 3 ?>
    <?php if($article3['is_active']) { ?>
        <div class="newsletter__article">
            <h2 class="newsletter__article--heading"><?php echo $article3['heading']; ?></h2>
            <div class="newsletter__article--content"><?php echo $article3['content']; ?></div>
        </div>
    <?php } ?>

    <?php // ARTICLE 4 ?>
    <?php if($article4['is_active']) { ?>
        <div class="newsletter__article">
            <h2 class="newsletter__article--heading"><?php echo $article4['heading']; ?></h2>
            <div class="newsletter__article--content"><?php echo $article4['content']; ?></div>
        </div>
    <?php } ?>

    <?php // LINKS SECTION ?>
    <?php if($linksSection['is_active'] && count($linksSection['links']) > 0 ) { ?>
        <div class='newsletter__links'>
            <h2 class='newsletter__links--heading'><?php echo $linksSection['heading'] ?></h2>
            <div class='newsletter__links--container'>
                <?php foreach($linksSection['links'] as $link) { ?>
                    <a href="<?php echo $link['url']['url']?>" target="<?php echo $link['url']['target'] ?>" class='newsletter__links--link'><button class='newsletter__links--button'><?php echo $link['svg']?> <?php echo $link['title'] ?></button></a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>

    <?php // FOOTER ?>
    <?php if($footer) { ?>
        <div class="newsletter__footer">
            <h2 class="newsletter__footer--heading"><?php echo $footer['heading']; ?></h2>
            <div class="newsletter__footer--content"><?php echo $footer['content']; ?></div>
            <div class='newsletter__footer--buttons'>
                <a href="<?php echo $footer['opt_out']['link']['url']?>" target="<?php echo $footer['opt_out']['link']['target']; ?>" class='newsletter__footer--buttons--link'><button class='newsletter__footer--buttons--button newsletter__footer--buttons--out'><?php echo $footer['opt_out']['svg']?> <?php echo $footer['opt_out']['button_text'] ?></button></a>
                <a href="<?php echo $footer['opt_out']['link']['url']?>" target="<?php echo $footer['opt_out']['link']['target']; ?>" class='newsletter__footer--buttons--link'><button class='newsletter__footer--buttons--button newsletter__footer--buttons--share'><?php echo $footer['opt_in']['svg']?> <?php echo $footer['opt_in']['button_text'] ?></button></a>
            </div>
        </div>
    <?php } ?>
</div>

<?php get_footer(); ?>