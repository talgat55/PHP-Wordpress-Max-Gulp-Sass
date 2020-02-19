<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 19.02.20
 * Time: 13:37
 */
?>
<li class="page-archive_list-items_item">
    <div class="page-archive_list-items_item_img-block">
<!--        <a href="--><?php //echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0]; ?><!--">-->
            <img src="<?php  echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0] ?>" alt="Изображение"/>
<!--        </a>-->
    </div>
    <div class="page-archive_list-items_item_content">
        <h3 class="page-archive_list-items_item_content_title">
<!--            <a href="--><?php //echo $listItem['link']; ?><!--">-->
                <?php echo get_the_title(get_the_ID()); ?>
<!--            </a>-->
        </h3>
        <div class="page-archive_list-items_item_content_text">
            <?php the_content(); ?>
        </div>
    </div>
</li>
