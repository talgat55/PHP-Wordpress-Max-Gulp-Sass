<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 14.01.20
 * Time: 14:06
 */

$category = get_the_category(get_the_ID());

?>
<div class="post-item col-lg-3 col-md-6 col-sm-12">
    <div class="post-item_img-block">
        <div class="post-item_img-block_category">
            <?php echo $category[0]->name; ?>
        </div>
        <a href="<?php echo get_the_permalink($post_id); ?>" class="post-item_img-block_img"
             style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0]; ?>
                     )">
        </a>
        <div class="post-item_img-block_addition_date">
            <?php echo get_the_date('d M Y', get_the_ID()); ?>
        </div>

    </div>
    <div class="post-item_content-block">
        <h3 class="post-item_content-block_title">
            <a href="<?php echo get_the_permalink($post_id); ?>">
                <?php echo get_the_title(get_the_ID()); ?>
            </a>
        </h3>
        <div class="post-item_content-block_text">
            <?php echo mb_strimwidth(get_the_content(get_the_ID()), 0, 125, "..."); ?>
        </div>
            <a href="<?php echo get_the_permalink($post_id); ?>"  class="post-item_content-block_link d-flex w-100 justify-content-center">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <g clip-path="url(#clip0)">
                        <path d="M7.60678 4.64312L3.10982 0.147661C2.9125 -0.0491642 2.5928 -0.0491643 2.39498 0.147661C2.19766 0.344486 2.19766 0.664181 2.39498 0.861006L6.53524 4.99977L2.39548 9.13854C2.19816 9.33536 2.19816 9.65506 2.39548 9.85238C2.5928 10.0492 2.913 10.0492 3.11032 9.85238L7.60727 5.35696C7.80157 5.16217 7.80157 4.83745 7.60678 4.64312Z"
                              fill="#13273F"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect x="10" y="10" width="10" height="10" transform="rotate(-180 10 10)" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
    </div>
</div>
