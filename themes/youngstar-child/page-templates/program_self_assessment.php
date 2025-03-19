<?php /* Template Name: Program Self-Assessment */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>

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
    <div class="container">
        <main class="assessment">
            <h2 class="assessment--heading">Self-Assessment Resources</h2>
            <div class="assessment__contacts">
                <div class="assessment__contacts__card">
                    <svg class='assessment__contacts__card--svg' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>    
                    <h4 class='assessment__contacts__card--heading'>Group Child Care</h4>
                    <ul class='assessment__contacts__card__list'>
                        <li class='assessment__contacts__card__list--item'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-self-assessment/2021/2021-ys-selfassess-gcc-e.docx' target='_blank'>YoungStar Self-Assessment - Group Child Care</a></li>
                        <li class='assessment__contacts__card__list--item'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-self-assessment/2021/2021-ys-selfassess-gcc-e-s.docx' target='_blank'>Autoevaluación de YoungStar - Cuidado infantil grupal</a></li>
                    </ul>
                </div>

                <div class="assessment__contacts__card">
                    <svg class='assessment__contacts__card--svg' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-baby"><path d="M9 12h.01"/><path d="M15 12h.01"/><path d="M10 16c.5.3 1.2.5 2 .5s1.5-.2 2-.5"/><path d="M19 6.3a9 9 0 0 1 1.8 3.9 2 2 0 0 1 0 3.6 9 9 0 0 1-17.6 0 2 2 0 0 1 0-3.6A9 9 0 0 1 12 3c2 0 3.5 1.1 3.5 2.5s-.9 2.5-2 2.5c-.8 0-1.5-.4-1.5-1"/></svg>    
                    <h4 class='assessment__contacts__card--heading'>Family Child Care</h4>
                    <ul class='assessment__contacts__card__list'>
                        <li class='assessment__contacts__card__list--item'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-self-assessment/2021/2021-ys-selfassess-fcc-e.docx' target='_blank'>YoungStar Self-Assessment - Family Child Care</a></li>
                        <li class='assessment__contacts__card__list--item'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-self-assessment/2021/2021-ys-selfassess-fcc-e-s.docx' target='_blank'>Autoevaluación de YoungStar - Cuidado infantil familiar</a></li>
                    </ul>
                </div>

                <div class="assessment__contacts__card">
                    <svg class='assessment__contacts__card--svg' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-school"><path d="M14 22v-4a2 2 0 1 0-4 0v4"/><path d="m18 10 3.447 1.724a1 1 0 0 1 .553.894V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7.382a1 1 0 0 1 .553-.894L6 10"/><path d="M18 5v17"/><path d="m4 6 7.106-3.553a2 2 0 0 1 1.788 0L20 6"/><path d="M6 5v17"/><circle cx="12" cy="9" r="2"/></svg>
                    <h4 class='assessment__contacts__card--heading'>School-Age Program</h4>
                    <ul class='assessment__contacts__card__list'>
                        <li class='assessment__contacts__card__list--item'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-self-assessment/2021/2021-ys-selfassess-sa-e.docx' target='_blank'>YoungStar Self-Assessment - School-Age Program</a></li>
                        <li class='assessment__contacts__card__list--item'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-self-assessment/2021/2021-ys-selfassess-sa-e-s.docx' target='_blank'>Autoevaluación de YoungStar - Programa para niños en edad escolar</a></li>
                        <li class='assessment__contacts__card__list--item'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-self-assessment/schoolage-accepted-selfassessments.pdf' target='_blank'>Other school-age self-assessments that are accepted in YoungStar</a></li>
                    </ul>
                </div>

                <div class="assessment__contacts__card">
                    <svg class='assessment__contacts__card--svg' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tent"><path d="M3.5 21 14 3"/><path d="M20.5 21 10 3"/><path d="M15.5 21 12 15l-3.5 6"/><path d="M2 21h20"/></svg>
                    <h4 class='assessment__contacts__card--heading'>Day Camp / Short Term Operational Proram</h4>
                    <ul class='assessment__contacts__card__list'>
                        <li class='assessment__contacts__card__list--item'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-self-assessment/2021/2021-ys-selfassess-dc-e.docx' target='_blank'>YoungStar Self-Assessment - Day Camp/Short Term Operational Program</a></li>
                        <li class='assessment__contacts__card__list--item'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-self-assessment/2021/2021-ys-selfassess-dc-e-s.docx' target='_blank'>Autoevaluación de YoungStar - Campamento de día/Programa operativo a corto plazo</a></li>
                    </ul>
                </div>
            </div>
        </main>

        <section class="assessment">
            <h2 class="assessment--heading">Quality Improvement Plan</h2>
            <div class='assessment__qip'>
                <p class="assessment__qip--text">Recommended QIP (Ver. 2021)</p>
                
                <div class="assessment__qip__buttons">
                    <button class='assessment__qip__buttons--button'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-qip-2021.doc' target='_blank'>English</a></button>
                    <button class='assessment__qip__buttons--button'><a class='link assessment__contacts__card--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-qip-2021-es.doc' target='_blank'>Spanish</a></button>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>