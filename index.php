<?php
get_header();
?>

<div class="post-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <h2><?php the_title() ?></h2>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                        <hr>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
</div>

<?php
get_footer();
?>