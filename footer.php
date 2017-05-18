<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Gazette
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="footer" class=" p-y-3 ">
    <div class="container">
        <div class="col-xs-12">
            <div class="col-xs-12 col-md-2">
                <div class="col-md-2 footerLogo p-b-1 ">
                    <a class=" ph_scroll_tosection footer-logo" href="#main"
                        data-redirect="#main" data-url="/"><img src="https://widely.io/resource/image/logoicon.png" id="footer-logo" alt="Widely Progressive Web App tool"/></a>
                    <!-- Begin MailChimp Signup Form -->
                </div>
            </div>
            <div class="col-xs-12 col-md-10">
                <div class="col-md-3 p-b-1  ">
                    <h5>Explore</h5>
                    <ul>
                        <li><a href="https://angel.co/progresshive/jobs" target="_blank">Careers</a></li>
                        <li><a href="/about" class="ph_redirect_sections" data-redirect="#rewards" data-url="about">Recognition</a></li>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfMQZUjuWuKi_UeQTHg7leZS8Z7gdWPU55-ZXbXY0XGQsWZ9Q/viewform"
                                target="_blank">Give Feedback</a></li>

                        <!--<li><a href="/pricing" class="ph_redirect_sections" data-redirect="#pricing" data-url="pricing">Pricing</a></li>-->
                        <!--<li><a href="/references" class="ph_redirect_sections" data-redirect="#main" data-url="references">References</a></li>-->



                    </ul>
                </div>
                <div class="col-md-3 p-b-1 ">
                    <h5>Tool</h5>
                    <ul>
                        <li><a href="/support/#/docs/quick-guide">Quickstart</a></li>
                        <li><a href="/support">Setup Docs</a></li>
                        <li><a href="/tool">Dashboard</a></li>

                    </ul>
                </div>
                <div class="col-md-3 p-b-1 ">
                    <h5>Info</h5>
                    <ul>
                        <li><a href="/inquire" class="ph_redirect_sections" data-redirect="#main" data-url="inquire">Contact</a></li>
                        <li><a href="mailto:hi@widely.io" target="_blank">Email</a></li>
                        <li><a target="_blank" href="/terms-of-use">Terms of Use</a></li>
                        <li><a target="_blank" href="/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 p-b-1 ">
                    <h5>Stay In Touch</h5>
                    <p>Get latest marketers guide </p>

                    <div id="mc_embed_signup">
                        <form action="//widely.us15.list-manage.com/subscribe/post?u=583e5258798292ffcdba9edad&amp;id=6860b62e74" method="post" id="mc-embedded-subscribe-form"
                            name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">

                                <input type="email" value="" name="EMAIL" class="email pull-left" id="mce-EMAIL" placeholder="Email Address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_583e5258798292ffcdba9edad_6860b62e74" tabindex="-1" value=""></div>
<div class="clear m-t-1 pull-left"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</div>
</form>
</div>


</div>
</div>
<!--<div class="col-md-3 p-b-1" >

                            </div>-->
</div>
</div>
</footer>
<section class="terms">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="m-t-1">
                    <p class="p-b-0 pull-left">© 2016-17 <span> Antcrawl Technologies Pvt. Ltd.</span> All rights reserved.</p>
                    <div class="pull-right">
                        <ul>
                            <li><a href="https://blog.widely.io/" target="_blank" title="Blog"><span class=" ph_red fa fa-rss-square" aria-hidden="true"></span></a></li>
                            <li><a href="https://www.facebook.com/widelyhq/" target="_blank" title="Facebook"><span class=" ph_red fa fa-facebook-square" aria-hidden="true"></span></a></li>
                            <li><a href="https://twitter.com/WidelyHQ" target="_blank" title="Twitter"><span class=" ph_red fa fa-twitter-square" aria-hidden="true"></span></a></li>

                            <li><a href="https://github.com/widelyio" target="_blank" title="Github"><span class=" ph_red fa fa-github" aria-hidden="true"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
