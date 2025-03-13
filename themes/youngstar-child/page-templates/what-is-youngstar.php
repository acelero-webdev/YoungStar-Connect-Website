<?php /* Template Name: What Is YoungStar? */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>
<?php $what_is_youngstar_image = wp_get_attachment_image_url(376, 'medium'); ?>
<?php $benefits_of_participation_image = wp_get_attachment_image_url(377, 'medium'); ?>

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
    <main class="main container">
        <div class='main'>
            <div>
                <h2 class='main__heading'>What is YoungStar?</h2>
                <div class='main__img-container'>
                    <?php if($what_is_youngstar_image) { ?>
                        <img class='main__img' src="<?php echo $what_is_youngstar_image ?>" alt='youngstar supports children'/>
                    <?php } ?>
                </div>
                <p class='main__text'>The care children receive both at home and away from home couldn’t be more important. Studies show that children who experience engaging, one-on-one activities in safe, healthy, and nurturing learning environments have a better chance at lifelong success. They’re more likely to graduate from high school, less likely to engage in criminal activity, and often earn higher wages throughout their lifetime. </p>
                <p class='main__text'>The Department of Children and Families is committed to improving the quality of care for all Wisconsin’s young children. YoungStar, Wisconsin’s Quality Rating and Improvement System (QRIS), is helping to make it happen by: </p>
                <ul class='main__list'>
                    <li class='main__list-item'>Helping early care and education (ECE) and school-age care providers who want to improve the quality of their care.</li>
                    <li class='main__list-item'>Creating <a class='link main__link' href='https://dcf.wisconsin.gov/youngstar/providers/quality-adjustment' target="_blank">financial incentives</a> that encourage providers to deliver better services to children.</li>
                    <li class='main__list-item'><a class='link main__link' href='https://dcf.wisconsin.gov/youngstar/parents/resources' target="_blank">Giving families the meaningful information</a> they need to make informed care decisions for their children—at home and away from home</li>
                </ul>
                <p class='main__text'>YoungStar represents the work of many individuals and organizations over several years. From the legislative process used to create YoungStar to the creation of the YoungStar Connect team- the organizations that are <a class='link main__link' href='https://dcf.wisconsin.gov/youngstar/program/administration' target="_blank">now administering YoungStar in Wisconsin</a>- this work is done in partnership with multiple stakeholders who all support high-quality early care and education in Wisconsin.</p>
            </div>
        </div>
        <div class='main'>
            <div>
                <h2 class='main__heading'>Benefits of Participation</h2>
                <div class='main__img-container'>
                    <?php if($benefits_of_participation_image) { ?>
                        <img class='main__img' src="<?php echo $benefits_of_participation_image ?>" alt='benefits of youngstar'/>
                    <?php } ?>
                </div>
                <p class='main__text'>YoungStar provides an opportunity for your program to improve its overall quality, while also improving the outcomes of the children in your care. YoungStar provides functional guidelines, comprehensive resources, and hands-on support to help your program make sensible changes that lead to improved quality. Since YoungStar Connect believes in provider-driven services, you get to decide which of these resources, supports, and guidelines to access from them, on the topic(s) that are most important to you.</p>
                <p class='main__text'>Programs that participate in YoungStar can request free support from a YoungStar Coach who will help you navigate the YoungStar program. Your program can receive ongoing coaching to help you improve the quality of your business and teaching practices. YoungStar Coaches are regionally located throughout the state.</p>
                <p class='main__text'>Participating in YoungStar also gives your program a state-recognized star rating that acknowledges your program’s quality teaching and business practices. Your participation also means that your program will be searchable by families looking for child care through the <a class='link main__link' href='https://childcarefinder.wisconsin.gov/' target="_blank">YoungStar Child Care Finder</a>. <a class='link main__link' href='https://dcf.wisconsin.gov/youngstar/providers/quality-adjustment' target="_blank">Financial incentives</a> have also been created to encourage providers to deliver better services to children.</p>
            </div>
        </div>
    </main>

    <article class='article container'>
        <div>
            <h2 class='article__heading'>YoungStar Helps Kids Shine!</h2>
            <p class='article__text'>The primary goal of YoungStar is to help increase and recognize high-quality ECE and school-age care across the state so that children shine. Safe, healthy, nurturing, and engaging care positively affects kids’ lives. From healthier brain development to increased behavioral and emotional well-being—quality child care can lead to healthier and brighter futures.</p>
            <p class='article__text'>How does YoungStar center the needs of children?</p>
            <ul class='article__list'>
                <li class='article__list-item'>By objectively measuring ECE and school-age care quality. YoungStar rates thousands of providers, awarding up to five stars for the highest quality of care.</li>
                <li class='article__list-item'>By giving parents an <a class='link article__link' href='https://childcarefinder.wisconsin.gov/' target="_blank">easy way to compare</a> their local child care options and find the programs that match their family's lifestyle, budget, and individual needs.</li>
                <li class='article__list-item'>By supporting providers with tools and training to deliver high-quality care.</li>
                <li class='article__list-item'>By researching and highlighting the quality standards that are most likely to help kids shine.</li>
            </ul>
        </div>
    </article>

<?php get_footer(); ?>