<div class="popup_modale">
    <div class="popup_container">
        <div class="popup_header_img">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/contact_header.png' ?>"
                alt="image contact">
        </div>
        <?php
        $refPhoto = "";
        if (the_field('reference')) {
            $refPhoto = the_field('reference');
        };
        // Shortcode Contact form
        echo do_shortcode('[contact-form-7 id="91dfc8c" title="Contact form 1"]');
        ?>
    </div>
</div>