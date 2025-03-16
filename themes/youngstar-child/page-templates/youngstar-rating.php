<?php /* Template Name: YoungStar Rating */ ?>
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
        <section class='rating__section'>
            <p class='rating__text'>All providers that participate in YoungStar and are in regulatory compliance MUST complete a rating process once every other year. Providers who are in regulatory compliance are able to select the type of rating process they wish to complete on their YoungStar Contract or YoungStar Renewal Contract. Providers can choose to be rated:</p>
            <ul class='rating__section__list'>
                <li class='rating__section__list--item'>Onsite (with YoungStar Evaluation Criteria)</li>
                <li class='rating__section__list--item'>Through an automated 2 Star process</li>
                <li class='rating__section__list--item'>Based on accreditation or Head Start status (can be chosen only if the provider has completed accreditation or is a federally recognized full-day Head Start program)</li>
            </ul>
            <p class='rating__section__text rating__section__callout'>If you need additional resources regarding the Environmental Rating Scale (ERS) please visit <a class='link rating__section__callout--link'href='https://youngstarconnect.my.site.com/s/getting-started-with-youngstar/youngstar-rating/rating-scales?language=en_US' target='_blank'>this support page</a>.</p>
        </section>

        <section class="rating__section">
            <h2 class="rating__section--heading">Choosing an Onsite Rating</h2>
            <p class="rating__section--text">When you choose to receive an onsite rating (required to earn a 3, 4, or 5 Star rating, but could result in a 2 Star rating), your Coach will use the YoungStar Evaluation Criteria to assess your program. Programs that are eligible to earn a 3, 4, or 5 Star rating will also be given the opportunity to be observed using the appropriate Environment Rating Scale(s) (ERS). Programs wishing to achieve a 4 or 5 Star rating must complete one or more ERS observations.</p>
            <p class="rating__section--text">YoungStar recognizes that family child care programs look different than group child care programs and both look different than school-age care programs. Therefore, each provider type has its own version of the YoungStar Evaluation Criteria.</p>
            
            <p class="rating__section--text">The YoungStar Evaluation Criteria is broken up into four key areas and increases the requirements in each area as you move up the star levels. These four key areas, or elements, are: Lead Staff Education, Learning Environment and Curriculum, Business and Professional Practices, and Health and Well-Being. <strong class="rating__section--text--bold">Select the appropriate version of the YoungStar Evaluation Criteria below, based on your program type and language preference, to prepare for an onsite rating and to learn more about high-quality early education practices:</strong></p>
            <ul class='rating__section__list'>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/evaluation-criteria/21-22-eval-criteria-family.pdf' target='_blank'>Evaluation Criteria - Family Programs (Track 1)</a></li>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/evaluation-criteria/21-22-eval-criteria-family-es.pdf' target='_blank'>Criterios de calificación de YoungStar 2021/22 para programas familiares (Pista 1)</a></li>
            </ul>
            <ul class='rating__section__list'>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/evaluation-criteria/21-22-eval-criteria-group.pdf' target='_blank'>Evaluation Criteria - Group Programs (Track 2)</a></li>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/evaluation-criteria/21-22-eval-criteria-group-es.pdf' target='_blank'>Criterios de calificación de YoungStar 2021/22 para programas grupales (Pista 2)</a></li>
            </ul>
            <ul class='rating__section__list'>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/evaluation-criteria/21-22-eval-criteria-schoolage.pdf' target='_blank'>Evaluation Criteria - School-Age Programs (Track 3)</a></li>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/evaluation-criteria/21-22-eval-criteria-sa-s.pdf' target='_blank'>Criterios de calificación de YoungStar 2021/22 para programas para niños en edad escolar (Pista 3)</a></li>
            </ul>
            <ul class='rating__section__list'>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/evaluation-criteria/21-22-eval-criteria-stop.pdf' target='_blank'>Evaluation Criteria - Short-Term Operational Programs (Track 4)</a></li>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/evaluation-criteria/21-22-eval-criteria-stop-s.pdf' target='_blank'>Criterios de calificación de YoungStar 2021/22 para programas operativos a corto plazo (Pista 4)</a></li>
            </ul>

            <p class="rating__section--text">To view the document that your Coach will be using to complete their rating, <strong class="rating__section--text--bold">select the appropriate version of the Rating Verification Document below, based on your program type and language preference:</strong></p>
            <ul class='rating__section__list'>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/verification-docs/verification-doc-fcc.pdf' target='_blank'>Verification Document for Family Programs</a></li>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/verification-docs/verification-doc-fcc-s.pdf' target='_blank'>Documento de verificación de YoungStar 2021/22 para programs familiares</a></li>
            </ul>
            <ul class='rating__section__list'>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/verification-docs/verification-doc-gcc.pdf' target='_blank'>Verification Document for Group Programs</a></li>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/verification-docs/verification-doc-gcc-s.pdf' target='_blank'>Documento de verificación de YoungStar 2021/22 para programas grupales</a></li>
            </ul>
            <ul class='rating__section__list'>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/verification-docs/verification-doc-sa.pdf' target='_blank'>Verification Document for School-Age Programs</a></li>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/verification-docs/verification-doc-sa-s.pdf' target='_blank'>Documento de verificación de YoungStar 2021/22 para programas para niños en edad escolar</a></li>
            </ul>
            <ul class='rating__section__list'>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/verification-docs/verification-doc-stop.pdf' target='_blank'>Verification Document for Short-Term Operational Programs</a></li>
                <li class='rating__section__list--item'><a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/ys-2021-22/verification-docs/verification-doc-stop-s.pdf' target='_blank'>Documento de verificación de YoungStar 2021/22 para programas operativos a corto plazo</a></li>
            </ul>
            <p class="rating__section--text">For more information on the YoungStar Evaluation Criteria, including YoungStar Rating Details (which include the research and rationale behind every indicator), YoungStar Block Rating diagrams (to see a condensed version of all indicators required at each level), and updates on any YoungStar Evaluation Criteria revision processes, <a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/youngstar/providers/rating-criteria' target='_blank'>visit DCF's website</a>.</p>
            <p class="rating__section--text rating__section--text--disclaimer">Note: YoungStar developed- and periodically revises- the YoungStar Evaluation Criteria which is foundationally based on research related to child development and improved child outcomes. Over the years, it has also been refined to incorporate feedback from stakeholders like providers, families, coaches, and other ECE and school-age care associations.</p>
        </section>
        
        <section class="rating__section">
            <h2 class="rating__section--heading">Choosing a Rating Based on Head Start Status</h2>
            <p class="rating__section--text">Programs that already offer Head Start and/or Early Head Start programming that is accepted as equivalent to a YoungStar rating can request an automated rating of 5 Star based on this programming. A copy of the Policy on Head Start Participation in YoungStar and the requirements that need to be met to be considered equivalent to a YoungStar 5 Star rating can be found <a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/policies/head-start-policy.pdf.' target='_blank'>here</a>.</p>
        </section>

        <section class="rating__section">
            <h2 class="rating__section--heading">Choosing a Rating Based on Accreditation</h2>
            <p class="rating__section--text">ProgramsPrograms that are already accredited by one of the agencies that is accepted as equivalent to a YoungStar rating can request an automated rating of 4 or 5 Star based on the accrediting body and the program's educational qualifications (as applicable). A copy of the YoungStar accreditation policy and a list of accrediting agencies that are accepted as equivalent to a YoungStar rating can be found <a class='link rating__section__list--link' href='https://dcf.wisconsin.gov/files/youngstar/pdf/policies/accreditation-policy.pdf' target='_blank'>here</a>.</p>
            <p class="rating__section--text">Programs that select this option must send proof of the accreditation, and any accreditation renewals, to the Department of Children and Families on a timely basis to ensure that the YoungStar rating is correct. Proof of accreditation can be faxed to 608-422-7156 or emailed to <a class='link rating__section__list--link' href='mailto:youngstar@wisconsin.gov' target='_blank'>youngstar@wisconsin.gov</a>.</p>
        </section>

        <section class="rating__section">
            <h2 class="rating__section--heading">Choosing an Automated 2 Star Rating</h2>
            <p class="rating__section--text">Programs that participate in YoungStar and are in regulatory compliance meet all the requirements to earn a 2 Star rating. Choosing to complete an automated 2 Star rating process allows a program to participate in YoungStar without being assessed on the YoungStar Evaluation Criteria. Programs that select this option CANNOT earn a rating higher than a 2 Star rating.</p>
    </div>

<?php get_footer(); ?>