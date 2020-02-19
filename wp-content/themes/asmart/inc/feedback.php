<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 07.01.20
 * Time: 13:58
 */
?>
<?php

if (is_front_page()) {
    $classRight = '
                        data-aos="fade-left"  
                         data-aos-easing="ease-in-out"
                         data-aos-once="true"
    ';
    $classLeft = ' ';


} else {
    $classLeft = $classRight = '';
}


?>
<section class="feedback-section">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 " <?php echo $classLeft; ?>>
                <h2 class="sub-title">
                    Расскажем о вашем бизнесе
                    в нашем журнале
                </h2>
                <p class="feedback-section_text">
                    О вашей компании узнают десятки тысяч людей.<br>
                    Откройте мир новых возможностей!
                </p>
                <?php echo do_shortcode('[contact-form-7 id="51" title="Контактная форма 1" html_class="form-feedback"]'); ?>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 " <?php echo $classRight; ?>>
                <div class="feedback-section_image-block">
                    <img src="<?php echo get_theme_file_uri('/assets/images/feedback-img.jpg') ?>" alt="Картинка"/>
                </div>
            </div>

        </div>
    </div>
</section>
