<div class="popup_modale">
    <div class="popup_container">
        <div class="popup_header_img">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/contact_header.png' ?>"
                alt="image contact">
        </div>
        <?php
        // Shortcode Contact Form 7
        echo do_shortcode('[contact-form-7 id="ba7d4d3" title="Contact form 1"]');
        ?>
    </div>
</div>