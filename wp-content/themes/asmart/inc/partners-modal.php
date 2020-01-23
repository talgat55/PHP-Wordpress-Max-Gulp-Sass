<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 07.01.20
 * Time: 13:58
 */
?>
<div class="modal-main d-flex   align-items-center justify-content-center">
    <div class="feedback-section position-relative">
        <a href="#" class="close-modal-custom">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                <circle cx="25" cy="25" r="25" fill="#F1F2F3"/>
                <rect x="13.686" y="15.1005" width="2" height="30" rx="1" transform="rotate(-45 13.686 15.1005)"
                      fill="#D82A00"/>
                <rect x="34.8994" y="13.6863" width="2" height="30" rx="1" transform="rotate(45 34.8994 13.6863)"
                      fill="#D82A00"/>
            </svg>
        </a>
        <div class="   align-items-center">
            <h2 class="sub-title">
                стать партнёром
            </h2>
            <?php echo do_shortcode('[contact-form-7 id="168" title="Стать партнером"  html_class="form-feedback"] '); ?>
        </div>
    </div>
</div>

