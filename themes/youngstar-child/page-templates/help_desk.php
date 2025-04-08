<?php /* Template Name: Help Desk */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>
<?php $article = get_field('article'); ?>

<div class="container-full homepage_top subpage_top"
    style="background-image: url('<?php echo $banner['background_image']['url']?>');">
    <div class="container">
			<h1 class='heading'>
				<?php echo $banner['heading'] ?>
			</h1>
            <div class='description'>
                <p><?php echo $banner['content']; ?></p>
            </div>
    </div>
</div>

<article class='single container'>
    <main class='single__article'>
        <div class='single__article--help'>
            <div class='single__article--help__text'>
                <h2 class='single__article--help__heading'><?php echo $article['heading']; ?></h2>
                <?php echo $article['content']; ?>
                <span class='single__article--help--callout'><?php echo $article['callout']; ?><span>
                <?php // SALESFORCE HELP DESK FORM LOADS HERE ?>
            </div>
            <div id="flowComponent"></div>
        </div>
        
    </main>
</article>

<?php the_content(); ?>

<?php get_footer(); ?>