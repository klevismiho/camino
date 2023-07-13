<section class="section-newsletter">
    <div class="form-wrapper">
        <div class="inner">
            <h6><?php _e('Sign-up for news', 'camino'); ?></h6>
            <p><?php _e('Want to stay up to date on all that we do here? Leave your email below and we’ll make sure you know about upcoming events, service opportunities, research and more!', 'camino'); ?></p>
            <?php echo do_shortcode( '[mc4wp_form id=455]' ); ?>
        </div>
    </div>
    <img class="newsletter-image" src="<?php echo get_template_directory_uri(); ?>/images/newsletter.jpg" alt="Camino Newsletter" width="840" height="380" loading="lazy" />
</section>