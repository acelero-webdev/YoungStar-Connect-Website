<?php /* Template Name: YoungStar Coaching Supports */ ?>
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
        <main class='coaching__supports'>
            <h2 class='coaching__supports--heading'>One-on-One Coaching</h2>
            <p class='coaching__supports--text'>All providers that participate in YoungStar have the option of requesting one-on-one coaching support. This type of coaching directly pairs a local coach with a provider to work together, one-on-one. Providers can request this support on their YoungStar Contract, YoungStar Renewal Contract, or Off-Year Services Application OR by directly contacting the YoungStar Connect <a class='link coaching__support--link' href='https://youngstarconnect.my.site.com/s/contactHelpDesk?language=en_US' target='_blank'>help desk</a></p>
            <p class='coaching__supports--text'>Once your request for free one-on-one coaching is received, the YoungStar Connect help desk will confirm your request and pass it on to your regional YoungStar Coaching Manager. The Coaching Manager will assign a YoungStar Coach as soon as capacity is available and that Coach will contact your program to schedule an initial visit and discuss your program’s YoungStar goals. If you can’t wait to get started, the YoungStar Connect help desk is available to support you in completing a <a class='link coaching__support--link' href='https://youngstarconnect.my.site.com/s/Self-Assessment?language=en_US' target='_blank'>self-assessment or quality improvement plan</a>, working on your Registry Program Profile or Child Care Provider Portal, and more.</p>
            <p class='coaching__supports--text'>During one-on-one coaching, providers and coaches work together to reflect, set goals, and work toward them in steps. This can occur in-person at a program or virtually (or both) and can include multiple sessions. Coaches are available (at a provider’s request) for as long or as short as needed.</p>
            <p class='coaching__supports--text'>Your Coach will be your navigator as you move through the YoungStar process:</p>
            <ul class='coaching__supports__list'>
                <li class='coaching__supports__list--item'>They will support you as you fill out a self-assessment and develop a quality improvement plan</li>
                <li class='coaching__supports__list--item'>They will review the <a class='link coaching__support--link' href='https://youngstarconnect.my.site.com/s/getting-started-with-youngstar/youngstar-rating?language=en_US' target='_blank'>YoungStar Evalution Criteria</a> with you and provide resources and assistance to help you achieve your quality improvement goals</li>
                <li class='coaching__supports__list--item'>They will help you identify, and make direct referrals to, specialty coaching opportunities (career counseling, Satellite accreditation supports, and business practices supports) and <a class='link coaching__support--link' href='https://youngstarconnect.my.site.com/s/calendar-of-events?language=en_US' target='_blank'>available training</a></li>
            </ul>
        </main>

        <section class="speciality__coaching">
            <h2 class="speciality__coaching--heading">Specialty Coaching</h2>
            <p class="speciality__coaching--text">YoungStar Connect is made up of multiple agencies who are experts in many areas of ECE and school-age care quality. Because of this expertise, YoungStar participating providers are eligible to request more intensive Specialty Coaching opportunities in the areas of career development, business and professional practices, and Satellite family child care accreditation.</p>
            <p class="speciality__coaching--text">Providers can access free specialty coaching by being referred through a primary one-on-one coach OR can reach out directly to our YoungStar Connect partners and get started.</p>
            <div class="speciality__coaching__contacts">
                <div class="speciality__coaching__contacts__card">
                    <svg class='speciality__coaching__contacts__card--svg' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase-business"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                    <h4 class='speciality__coaching__contacts__card--heading'>Career Development Counseling</h4>
                    <p class='speciality__coaching__contacts__card--text'>Indicate interest through their <a class='link speciality__coaching__contacts__card--link' href='https://wisconsinearlychildhood.org/wp-content/uploads/2023/01/CDQFillable12423.pdf' target='_blank'>online form</a> and/or <a a class='link speciality__coaching__contacts__card--link' target="null" rel="noopener" href="mailto:teach@wisconsinearlychildhood.org">email WECA</a></p>
                </div>

                <div class="speciality__coaching__contacts__card">
                    <svg class='speciality__coaching__contacts__card--svg' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crosshair"><circle cx="12" cy="12" r="10"/><line x1="22" x2="18" y1="12" y2="12"/><line x1="6" x2="2" y1="12" y2="12"/><line x1="12" x2="12" y1="6" y2="2"/><line x1="12" x2="12" y1="22" y2="18"/></svg>
                    <h4 class='speciality__coaching__contacts__card--heading'>Business Practices Targeted Coaching</h4>
                    <p class='speciality__coaching__contacts__card--text'><a a class='link speciality__coaching__contacts__card--link' target="null" rel="noopener" href="mailto:weessn@wisconsinearlychildhood.org">Email WECA</a></p>
                </div>

                <div class="speciality__coaching__contacts__card">
                    <svg class='speciality__coaching__contacts__card--svg' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-satellite"><path d="M13 7 9 3 5 7l4 4"/><path d="m17 11 4 4-4 4-4-4"/><path d="m8 12 4 4 6-6-4-4Z"/><path d="m16 8 3-3"/><path d="M9 21a6 6 0 0 0-6-6"/></svg>
                    <h4 class='speciality__coaching__contacts__card--heading'>Satellite Accreditation Consultation</h4>
                    <p class='speciality__coaching__contacts__card--text'>Indicate interest through their <a class='link speciality__coaching__contacts__card--link' href='https://docs.google.com/forms/d/e/1FAIpQLSfhC41nZhMJeuoDxfmAOKQMExMKfOd_M2xi7O1HJBVyt6u7zA/viewform' target='_blank'>online form</a> and/or <a a class='link speciality__coaching__contacts__card--link' target="null" rel="noopener" href="mailto:lsimkin@reachdane.org">email Satellite</a></p>
                </div>
            </div>
        </section>

        <section class='group__coaching'>
            <h2 class='group__coaching--heading'>Group Coaching</h2>
            <p class='group__coaching--text'>New to YoungStar, this type of coaching is offered to multiple providers/individuals in a group setting. Group members participate in a series of coaching sessions- which will often include some training components- that focus on a specific content area. Any individual staff member, in any role, is eligible to participate in group coaching.</p>
            <p class='group__coaching--text group__coaching--disclaimer'>*Currently, YoungStar Connect is piloting Group Coaching and learning more about which topics are needed most. Let us know which topics you would like group coaching to be offered around on your YoungStar Contract, YoungStar Renewal Contract, or Off-Year Services Application. Once received, our provider database is updated to include these interests. In the near future:</p>
            <ul class='group__coaching__list'>
                <li class='group__coaching__list--item group__coaching__list--disclaimer'>Groups will run based on interest and providers will be contacted when a topic they are interested in is enrolling participants.</li>
                <li class='group__coaching__list--item group__coaching__list--disclaimer'>Group coaching opportunities will then be available publicly for registration on The Registry.</li>
            </ul>
        </section>
    </div>

<?php get_footer(); ?>