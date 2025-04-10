<?php $feedbackImage = wp_get_attachment_image(644, [200, 200], false, array('class' => 'content--svg' )); ?>

<footer>
    <div class="container-full">
			<div class="homepage_bottom">
				<div class="container content">
					<div class="p-0-10 content--text">
						<h2>Share Your Voice!</h2>
						<p>YoungStar Connect wants to ensure enrolling and participating in YoungStar is the best it possibly can be. Share your ideas and suggestions by emailing us at <a href="mailto:info@youngstarconnect.com">info@youngstarconnect.com</a></p>.
					</div>
					
					<?php // Feedback SVG ?>
					<a class='content--link' href='https://www.surveymonkey.com/r/OnLine_Feedback_Form' target='_blank'>
						<?php if($feedbackImage) {
						 	echo $feedbackImage;
						} ?>
					</a>
				</div>
			</div> 
		

        <div class="container copywrite">
            <div class="row">
                <div>
                    <p>2908 Marketplace Drive Suite 103 Fitchburg, WI 53719 &copy; <?php echo date('Y'); ?> YoungStar
                        Connect. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

<style type='text/css'>
	.embeddedServiceHelpButton .helpButton .uiButton {
		background-color: #AF3962;
		font-family: "Arial", sans-serif;
	}
</style>

<script type='text/javascript'>
	function initEmbeddedMessaging() {
		try {
			embeddedservice_bootstrap.settings.language = 'en_US'; // For example, enter 'en' or 'en-US'

			embeddedservice_bootstrap.init(
				'00DDn00000AAF0U',
				'My_Youngstar_Connect_Messaging',
				'https://youngstarconnect.my.site.com/ESWMyYoungstarConnectM1733842557424',
				{
					scrt2URL: 'https://youngstarconnect.my.salesforce-scrt.com'
				}
			);
		} catch (err) {
			console.error('Error loading Embedded Messaging: ', err);
		}
	};
</script>
<script type='text/javascript' src='https://youngstarconnect.my.site.com/ESWMyYoungstarConnectM1733842557424/assets/js/bootstrap.min.js' onload='initEmbeddedMessaging()'></script>

</body>

</html>