<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>
<?php $heroImage = wp_get_attachment_image(533, [600, 600]);?>

<div class="container-full homepage_top subpage_top"
    style="background-image: url('<?php echo $banner['background_image']['url']?>');">
    <div class="container">
			<h1 class='heading'>YoungStar Connect Chronicles</h1>
            <div class='description'>
                <p>Check out our latest newsletters below. If you want to stay up to date on the latest news, please consider subscribing.</p>
            </div>
    </div>
</div>

<div class='newsletter__archive container'>
    <main class='newsletter__archive__hero'>
        <div class='newsletter__archive__hero--img'>
            <?php echo $heroImage; ?>
        </div>
        
        <div class='newsletter__archive__hero--form'>
            <script>(function(t,e,s,n){var o,a,c;t.SMCX=t.SMCX||[],e.getElementById(n)||(o=e.getElementsByTagName(s),a=o[o.length-1],c=e.createElement(s),c.type="text/javascript",c.async=!0,c.id=n,c.src="https://widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgd94d4_2F5337WmKyXyyFb0ZZ3emqQB2fkXa90NU7p7JvsV.js",a.parentNode.insertBefore(c,a))})(window,document,"script","smcx-sdk");</script>
        </div>
    </main>

    <h2 class='newsletter__archive--heading'>Recent Newsletters</h2>
    <section class='newsletter__archive__cards'>
        
        <?php while(have_posts()) { ?>
            <?php the_post(); ?>

            <div class='newsletter__archive__cards__card'>
                <svg class='newsletter__archive__cards__card--svg' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-newspaper-icon lucide-newspaper"><path d="M15 18h-5"/><path d="M18 14h-8"/><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2"/><rect width="8" height="4" x="10" y="6" rx="1"/></svg>
                <h2 class='newsletter__archive__cards__card--heading'><?php echo get_field('banner')['heading'] ?></h2>
                <p class='newsletter__archive__cards__card--text'><?php echo get_field('banner')['text'] ?></p>
                <a class='newsletter__archive__cards__card--link' href="<?php echo the_permalink()?>">Read <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-chevron-right-icon lucide-circle-chevron-right"><circle cx="12" cy="12" r="10"/><path d="m10 8 4 4-4 4"/></svg></a>
            </div>

        <?php } ?>
    </section>
</div>

<?php get_footer(); ?>