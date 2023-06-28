<?php

function camino_contact_form($attributes) {

	$content = '
        <section class="section-contact">
            <h2>' . __('Get in touch', 'camino') . '</h2>
            <div class="container flex">
                <div class="form-wrapper">
                    ' . do_shortcode('[ninja_form id=1]') . '
                </div>
                <div class="address-wrapper">
                    <div class="item">
                        <img src="' . get_template_directory_uri() . '/images/address.svg" alt="Address" />
                        <span>' . get_field( 'address', 'option') . '</span>
                    </div>
                    <div class="item">
                        <img src="' . get_template_directory_uri() . '/images/phone.svg" alt="Phone" />
                        <span>' . get_field( 'phone', 'option') . '</span>
                    </div>
                    <div class="item">
                        <img src="' . get_template_directory_uri() . '/images/web.svg" alt="Website" />
                        <span>' . get_field( 'website', 'option') . '</span>
                    </div>
                    <div class="item">
                        <img src="' . get_template_directory_uri() . '/images/email.svg" alt="Email" />
                        <span>' . get_field( 'email', 'option') . '</span>
                    </div>
                </div>
            </div>
        </section>';

	return $content;
}