<?php
$format_url = function_exists('get_field') ? get_field('post_format') : null;
?>

<?php if (is_single()) : ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-audio a77ll'); ?>>
        <?php if (!empty($format_url)) : ?>
            <div class="postbox__thumb postbox__audio w-img p-relative mb-20">
                <?php echo wp_oembed_get($format_url); ?>
            </div>
        <?php endif; ?>
        <!-- blog meta -->
        <?php echo get_template_part('/template-parts/blog/post-meta'); ?>
        <div class="postbox__details-content-wrapper mb-40">
            <?php the_content(); ?>
        </div>
        <div class="postbox__share-wrapper mb-60">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="tagcloud tagcloud-sm">
                        <span><?php echo esc_html__('Tags:', 'harry'); ?></span>
                        <?php harry_tags(); ?>
                    </div>
                </div>
                <div class="col-xl-5">
                    <?php harry_social_share(); ?>
                </div>
            </div>
        </div>
    </article>
<?php else : ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-audio postbox__item format-image mb-50 transition-3'); ?>>
        <?php if (!empty($format_url)) : ?>
            <div class="postbox__thumb postbox__audio w-img p-relative mb-20">
                <?php echo wp_oembed_get($format_url); ?>
            </div>
        <?php endif; ?>

        <div class="postbox__content">
            <!-- blog meta -->
            <?php echo get_template_part('/template-parts/blog/post-meta'); ?>
            <h3 class="postbox__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="postbox__text">
                <?php the_excerpt(); ?>
            </div>
            <div class="postbox__read-more">
                <a href="<?php the_permalink(); ?>" class="tp-btn">read more</a>
            </div>
        </div>
    </article>
<?php endif; ?>