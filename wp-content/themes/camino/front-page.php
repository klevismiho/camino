<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php if( get_field( 'hero_image' )) : ?>
        <?php
        $image = get_field( 'hero_image' ); 
        ?>
        <section class="section-hero" style="background-image: url(<?php echo esc_url($image['url']); ?>);">
            <div class="container">
                <h1><?php the_field( 'hero_title' ); ?></h1>
                <div class="buttons">
                    <a href="<?php echo get_site_url(); ?>/get-involved" class="button with-icon"><?php _e('Get Involved', 'camino'); ?></a>
                    <a href="<?php echo get_site_url(); ?>/what-we-do" class="secondary button with-icon"><?php _e('Find Out More', 'camino'); ?></a>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php the_content(); ?>

    <?php if( get_field( 'show_popup', 'option' )) : ?>
        <div class="modal" id="modal">
            <div class="modal-bg modal-exit"></div>
            <div class="modal-container">
                <?php $popup_image = get_field( 'popup_image', 'option' ); ?>
                <?php if($popup_image) : ?>
                    <div class="modal-image">
                        <img src="<?php echo esc_url($popup_image['url']); ?>" alt="<?php echo esc_attr($popup_image['alt']); ?>" alt="<?php echo esc_url($popup_image['alt']); ?>" width="400" height="283" />
                    </div>
                <?php endif; ?>
                <div class="modal-content">
                    <?php the_field( 'popup_content', 'option' ); ?>
                    <?php if(get_field( 'popup_link', 'option' )) : ?>
                        <a target="_blank" href="<?php the_field( 'popup_link', 'option' ); ?>" class="button with-icon"><?php _e('View', 'camino'); ?></a>
                    <?php endif; ?>
                </div>
                <button class="modal-close modal-exit" id="modal-close" aria-label="Close">X</button>
            </div>
            <script>
                const modal = document.getElementById('modal');
                const modalExit = modal.querySelector('.modal-exit');
                const modalClose = document.getElementById('modal-close');
                modal.classList.add("open");
                modalExit.addEventListener("click", function (event) {
                    event.preventDefault();
                    modal.classList.remove("open");
                });
                modalClose.addEventListener("click", function (event) {
                    event.preventDefault();
                    modal.classList.remove("open");
                });
            </script>
        </div><!-- modal -->
    <?php endif; ?>

</main><!-- #main -->

<?php get_footer(); ?>