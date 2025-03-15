<?php /* Template Name: Participating in YoungStar */ ?>
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
    <main class="main container">
        <div class='main'>
            <div>
                <h2 class='main__heading'>How do I Participate for the First Time?</h2>
                <p class='main__text'>Providers interested in participating in YoungStar for the first time must submit an initial contract via email to the YoungStar Connect help desk at <a a class='link main__link' target="null" rel="noopener" href="mailto:help@youngstarconnect.com">help@youngstarconnect.com</a> or via mail to their <a class='link main__link' href="https://www.youngstarconnect.com/locations/" target="_blank">YoungStar Office</a>. YoungStar contracts are available in English or Spanish and are valid for two (2) years, with the option to renew:</p>
                <ul class='main__list'>
                    <li class='main__list-item'><a class='link main__link' href='https://dcf.wisconsin.gov/files/forms/doc/5109.docx' target="_blank">YoungStar Initial Contract (English)</a></li>
                    <li class='main__list-item'><a class='link main__link' href='https://dcf.wisconsin.gov/files/forms/doc/5109s.docx' target="_blank">YoungStar Initial Contract (Spanish)</a></li>
                </ul>
                <p class='main__text'>A completed YoungStar Contract must be submitted to YoungStar Connect before families participating in the Wisconsin Shares program can be authorized to a program. Families can receive subsidy authorizations to a provider starting on the first day that the provider is participating in YoungStar.</p>
                <ul class='main__list'>
                    <li class='main__list-item'>Providers can submit a YoungStar contract prior to being regulated. If they do, their participation in YoungStar will begin on the first day of their regulation.</li>
                    <li class='main__list-item'>A provider does not need to have completed a rating in order for families to be authorized to their program.</li>
                </ul>
                <p class='main__text'>To participate in YoungStar, programs must be in regulatory compliance. To find out more, visit DCF's <a class='link main__link' href='https://dcf.wisconsin.gov/ccregulation' target="_blank">Child Care Regulation</a> web page. Please note that by signing and submitting a YoungStar contract, you are agreeing to provide care for children participating in the <a class='link main__link' href='https://dcf.wisconsin.gov/wishares' target="_blank">Wisconsin Shares Child Care Subsidy Program.</a></p>
                <p class='main__text'>Before submitting a contract, programs should review all <a class='link main__link' href='https://dcf.wisconsin.gov/ccregulation' target="_blank">Child Care Regulation</a> web page. Please note that by signing and submitting a YoungStar contract, you are agreeing to provide care for children participating in the <a class='link main__link' href='https://dcf.wisconsin.gov/wishares' target="_blank">YoungStar policies</a>. For additional information on YoungStar Contracts, including guidance for Out of State providers, visit the <a class='link main__link' href='https://dcf.wisconsin.gov/youngstar/providers/policy' target="_blank">Child Care Regulation</a> web page. Please note that by signing and submitting a YoungStar contract, you are agreeing to provide care for children participating in the <a class='link main__link' href='https://dcf.wisconsin.gov/youngstar/providers/contract' target="_blank">DCF website</a>.</p>
            </div>
        </div>
        <div class='main'>
            <div>
                <h2 class='main__heading'>How do I Continue to Participate?</h2>
                <p class='main__text'>To continue participating in YoungStar, you must renew your contract every two years. Renewal and Off-Year Services Applications are mailed directly to programs and are also available in the <a class='link main__link' href='https://dcf.wisconsin.gov/childcare/provider-portal/info' target="_blank">Provider Portal</a>. YoungStar Renewal Contracts must be submitted by the first day of a provider’s Anniversary Month to continue participation. Returning an Off-Year Services Application is optional for all programs.</p>
                <p class='main__text'>Before submitting a renewal contract, programs should review all <a class='link main__link' href='https://dcf.wisconsin.gov/youngstar/providers/policy' target="_blank">YoungStart polices</a>.</p>
                <p class='main__text'>If you are an existing YoungStar program and want to open a new location, it is your responsibility to complete and submit a new YoungStar Contract for that location (see above). Every location needs its own YoungStar contract and will receive its own YoungStar rating.</p>
            </div>
        </div>
    </main>

    <article class='article container'>
        <div>
            <h2 class='article__heading'>Is it Optional to Participate?</h2>
            <p class='article__text'>Any regulated provider that wishes to receive Wisconsin Shares authorizations from families MUST participate in YoungStar. Participation in YoungStar is optional for all other regulated providers. While there are choices about which free YoungStar services a program takes, and how a program chooses to complete their required biannual rating, Wisconsin Shares authorizations can be jeopardized by failure to apply or reapply to YoungStar within the provided timelines.</p>
        </div>
    </article>

<?php get_footer(); ?>