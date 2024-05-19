<?php
get_header();
$post_col = is_active_sidebar('blog-sidebar') ? 'col-xxl-8 col-lg-8' : 'col-xxl-12 col-lg-12';
?>

<!-- postbox details area start -->
<section class="tp-post-details postbox__area grey-bg-4 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="postbox__wrappers">
                    This is post details page.
                </div>
            </div>
        </div>
    </div>
</section>
<!-- postbox details area end -->

<?php
get_footer();
?>