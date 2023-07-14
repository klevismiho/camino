<section class="section-newsletter">
    <div class="form-wrapper">
        <div class="inner">
            <h6><?php _e('Sign-up for news', 'camino'); ?></h6>
            <p><?php _e('Want to stay up to date on all that we do here? Leave your email below and we’ll make sure you know about upcoming events, service opportunities, research and more!', 'camino'); ?></p>
            <div id="mc_embed_shell">
                <div id="mc_embed_signup">
                    <form action="https://Camino.us10.list-manage.com/subscribe/post?u=0660a341a6ad250c5c7a01912&amp;id=256dd57766&amp;f_id=007bd1e5f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                        <div id="mc_embed_signup_scroll">

                            <div class="field-group-wrapper">
                                <div class="mc-field-group"><label for="mce-EMAIL"></label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="" placeholder="<?Php _e('Email', 'camino'); ?>"></div>

                                <div class="mc-field-group"><label for="mce-FNAME"></label><input type="text" name="FNAME" class="required text" id="mce-FNAME" required="" value="" placeholder="<?php _e('First Name', 'camino'); ?>"></div>

                                <div class="mc-field-group"><label for="mce-LNAME"></label><input type="text" name="LNAME" class="required text" id="mce-LNAME" required="" value="" placeholder="<?php 
                                _e('Last Name', 'camino'); ?>"></div>

                                <div class="mc-field-group">
                                <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
                                </div>

                            </div>

                            <div class="language-group mc-field-group input-group"><strong><?php _e('Preferred Language', 'camino'); ?></strong>
                                <ul>
                                    <li><input type="checkbox" name="group[493752][1]" id="mce-group[493752]-493752-0" value=""><label for="mce-group[493752]-493752-0">English</label></li>
                                    <li><input type="checkbox" name="group[493752][2]" id="mce-group[493752]-493752-1" value=""><label for="mce-group[493752]-493752-1">Español</label></li>
                                </ul>
                            </div>
                            <div id="mce-responses" class="clearfalse">
                                <div class="response" id="mce-error-response" style="display: none;"></div>
                                <div class="response" id="mce-success-response" style="display: none;"></div>
                            </div>
                            <div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_0660a341a6ad250c5c7a01912_256dd57766" tabindex="-1" value=""></div>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
                <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
                <script type="text/javascript">
                    (function($) {
                        window.fnames = new Array();
                        window.ftypes = new Array();
                        fnames[0] = EMAIL;
                        ftypes[0] = merge;, fnames[1] = FNAME;
                        ftypes[1] = merge;, fnames[2] = LNAME;
                        ftypes[2] = merge;, fnames[undefined] = interests_493752;
                        ftypes[undefined] = group;
                        false
                    }(jQuery));
                    var $mcj = jQuery.noConflict(true);
                </script>
            </div>
        </div>
    </div>
    <img class="newsletter-image" src="<?php echo get_template_directory_uri(); ?>/images/newsletter.jpg" alt="Camino Newsletter" width="840" height="380" loading="lazy" />
</section>