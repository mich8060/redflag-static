<footer class="footer">
    <div class="footer--container">
        <div class="footer--body">
            <div class="footer--about">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/redflag-light.svg" alt="Redflag" />
                <p>RedFlag is a mass notification system that sends real-time alerts via email, SMS, calls, social media, and signage, enabling efficient communication, two-way messaging, and emergency engagement.</p>
                <div class="button--group">
                    <button class="button outline">
                        <i class="ph ph-google-play-logo"></i>
                        <span>Google Play</span>
                    </button>
                    <button class="button outline">
                        <i class="ph-fill ph-apple-logo"></i>
                        <span>App Store</span>
                    </button>
                </div>
                <h6>Other Products By Redflag</h6>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/m360.svg" alt="Redflag" />
            </div>
            <div class="footer--content" >
                <div>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer',  // Only pulls the menu assigned to "footer"
                            'menu_class'     => 'footer--menu', // CSS class for styling
                            'container'      => false,
                        ) );
                    ?>
                </div>
                <div>
                    <h3>Industries</h3>
                    <div class="footer__nav-group">
                        <h4>Corporate & Finance:</h4>
                        <div>
                            <span>Commercial Real Estate,</span>
                            <span>Financial Services</span>
                        </div>
                    </div>
                    <div class="footer__nav-group">
                        <h4>Healthcare & Safety</h4>
                        <div>
                            <span>Hospitals,</span>
                            <span>Environmental Health & Safety,</span>
                            <span>Senior Living Facilities</span>
                        </div>
                    </div>
                    <div class="footer__nav-group">
                        <h4>Public & Nonprofit</h4>
                        <div>
                            <span>Government,</span>
                            <span>Nonprofits,</span>
                            <span>Property Management,</span>
                            <span>Manufacturing</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h5>USE CASES</h5>
                    <span>Redflag Mass Notification</span>
                    <span>Desktop Alerts</span>
                    <span>Employee Internal Communication</span>
                    <span>Network Interruptions</span>
                    <span>Tenant Communications</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer--additional">
        <div class="container">
            <span>Why RedFlag</span>
            <span>RedFlag's Difference</span>
            <span>Microsoft Integration</span>
            <span>Integrations</span>
            <span>Channel Partnership?</span>
            <span>Contact</span>
            <span>Blog Posts</span>
            <span>Case Studies</span>
            <span>eBooks</span>
            <span>Infographics</span>
            <span>Whitepapers</span>
            <span>Webinars</span>
            <span>All Resources</span>
        </div>
    </div>
    <div class="footer--awards">
        <div class="container flex-items-center flex-gap-16 flex-justify-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/capterra.svg" alt="GetApp" />
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/getapp.svg" alt="GetApp" />
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/custom-success-award.png" alt="Award 2" />
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/momentum-leader.png" alt="Award 3" />
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/easiest-to-use.png" alt="Award 4" />
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/likely-to-recommend.png" alt="Award 4" />
        </div>
    </div>
    <div class="footer__divider"></div>
    <div class="footer--legal">
        <div class="container">
            <div>
                <p>Copyright &copy;2025 – RedFlag, LLC. All rights reserved.</p>
            </div>
            <div>
                <span>Privacy Policy</span>
                <span>/</span>
                <span>Terms and Conditions</span>
                <span>/</span>
                <span>Employee Healthcare</span>
                <span>/</span>
                <span>Sitemap</span>
            </div>
        </div>
    </div>
</footer>
    <?php wp_footer(); ?>
</body>
</html>
