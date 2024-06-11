<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');
?>

<div class="shop__top mb-50">
	<div class="row align-items-center">
		<div class="col-lg-6 col-md-5">
			<div class="shop__result">
				<?php woocommerce_result_count(); ?>
			</div>
		</div>
		<div class="col-lg-6 col-md-7">
			<div class="shop__sort d-flex flex-wrap justify-content-md-end align-items-center">
				<div class="shop__sort-item">
					<div class="shop__sort-tab tp-tab">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true">
									<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19.65 6.868V2.782C19.65 1.513 19.074 1 17.643 1H14.007C12.576 1 12 1.513 12 2.782V6.859C12 8.137 12.576 8.641 14.007 8.641H17.643C19.074 8.65 19.65 8.137 19.65 6.868Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M19.65 17.643V14.007C19.65 12.576 19.074 12 17.643 12H14.007C12.576 12 12 12.576 12 14.007V17.643C12 19.074 12.576 19.65 14.007 19.65H17.643C19.074 19.65 19.65 19.074 19.65 17.643Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M8.65 6.868V2.782C8.65 1.513 8.074 1 6.643 1H3.007C1.576 1 1 1.513 1 2.782V6.859C1 8.137 1.576 8.641 3.007 8.641H6.643C8.074 8.65 8.65 8.137 8.65 6.868Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M8.65 17.643V14.007C8.65 12.576 8.074 12 6.643 12H3.007C1.576 12 1 12.576 1 14.007V17.643C1 19.074 1.576 19.65 3.007 19.65H6.643C8.074 19.65 8.65 19.074 8.65 17.643Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</button>
								<button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false">
									<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M1 8H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M1 15H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</button>
							</div>
						</nav>
					</div>
				</div>
				<div class="shop__sort-item">
					<div class="shop__sort-select">
						<?php woocommerce_catalog_ordering(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action('woocommerce_shop_loop_header');

if (woocommerce_product_loop()) {
?>

	<div class="shop__main">
		<div class="row">
			<div class="col-lg-3">
				<!-- if sidebar on left add class on-left -->
				<!-- if sidebar on right add class on-right -->
				<div class="shop__sidebar on-left">
					<div class="shop__widget tp-accordion">
						<div class="accordion" id="shop_category">
							<div class="accordion-item">
								<h2 class="accordion-header" id="category__widget">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cagetory_widget_collapse" aria-expanded="true" aria-controls="cagetory_widget_collapse">
										Categories
									</button>
								</h2>
								<div id="cagetory_widget_collapse" class="accordion-collapse collapse show" aria-labelledby="category__widget" data-bs-parent="#shop_category">
									<div class="accordion-body">
										<div class="shop__widget-list">
											<div class="shop__widget-list-item">
												<input type="checkbox" id="iphone" checked>
												<label for="iphone">iPhone Cases (08)</label>
											</div>
											<div class="shop__widget-list-item">
												<input type="checkbox" id="android" checked>
												<label for="android">Android Cases (04)</label>
											</div>
											<div class="shop__widget-list-item">
												<input type="checkbox" id="accessories">
												<label for="accessories">Accessories (02)</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="shop__widget tp-accordion">
						<div class="accordion" id="shop_model">
							<div class="accordion-item">
								<h2 class="accordion-header" id="model__widget">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#model_widget_collapse" aria-expanded="true" aria-controls="model_widget_collapse">
										Model
									</button>
								</h2>
								<div id="model_widget_collapse" class="accordion-collapse collapse show" aria-labelledby="model__widget" data-bs-parent="#shop_model">
									<div class="accordion-body">
										<div class="shop__widget-search pt-10 pb-25">
											<form action="#">
												<div class="shop__widget-search-input">
													<input type="text" placeholder="Search model">
													<button type="submit">
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M7.64993 14.2999C11.3226 14.2999 14.2999 11.3226 14.2999 7.64993C14.2999 3.97727 11.3226 1 7.64993 1C3.97727 1 1 3.97727 1 7.64993C1 11.3226 3.97727 14.2999 7.64993 14.2999Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M15.0001 15L13.6001 13.6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
														</svg>
													</button>
												</div>
											</form>
										</div>
										<div class="shop__widget-list">
											<div class="shop__widget-list-item">
												<input type="checkbox" id="iphone_12">
												<label for="iphone_12">iPhone 12</label>
											</div>
											<div class="shop__widget-list-item">
												<input type="checkbox" id="iphone_12_pro">
												<label for="iphone_12_pro">iPhone 12 Pro</label>
											</div>
											<div class="shop__widget-list-item">
												<input type="checkbox" id="iphone_11_pro">
												<label for="iphone_11_pro">iPhone 11 Pro</label>
											</div>
											<div class="shop__widget-list-item">
												<input type="checkbox" id="samsung" checked>
												<label for="samsung">Samsung Galaxy S31</label>
											</div>
											<div class="shop__widget-list-item">
												<input type="checkbox" id="samsung_s20">
												<label for="samsung_s20">Samsung Galaxy S20</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="shop__widget tp-accordion">
						<div class="accordion" id="shop_color">
							<div class="accordion-item">
								<h2 class="accordion-header" id="color__widget">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#color_widget_collapse" aria-expanded="true" aria-controls="color_widget_collapse">
										Color
									</button>
								</h2>
								<div id="color_widget_collapse" class="accordion-collapse collapse show" aria-labelledby="color__widget" data-bs-parent="#shop_color">
									<div class="accordion-body">
										<div class="shop__widget-list">
											<div class="shop__widget-list-item-2">
												<input type="checkbox" id="c-black" checked>
												<label for="c-black">Black</label>
											</div>
											<div class="shop__widget-list-item-2 has-orange">
												<input type="checkbox" id="c-orange">
												<label for="c-orange">Orange</label>
											</div>
											<div class="shop__widget-list-item-2 has-green">
												<input type="checkbox" id="c-green">
												<label for="c-green">Green</label>
											</div>
											<div class="shop__widget-list-item-2 has-red">
												<input type="checkbox" id="c-red" checked>
												<label for="c-red">Red</label>
											</div>
											<div class="shop__widget-list-item-2 has-yellow">
												<input type="checkbox" id="c-yellow">
												<label for="c-yellow">Yellow</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="shop__widget tp-accordion">
						<div class="accordion" id="shop_price">
							<div class="accordion-item">
								<h2 class="accordion-header" id="price__widget">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#price_widget_collapse" aria-expanded="true" aria-controls="price_widget_collapse">
										Price
									</button>
								</h2>
								<div id="price_widget_collapse" class="accordion-collapse collapse show" aria-labelledby="price__widget" data-bs-parent="#shop_price">
									<div class="accordion-body">
										<div class="shop__widget-list">
											<div class="shop__widget-list-item">
												<input type="checkbox" id="higher">
												<label for="higher">$10.00 - $49.00</label>
											</div>
											<div class="shop__widget-list-item">
												<input type="checkbox" id="high" checked>
												<label for="high">$50.00 - $99.00</label>
											</div>
											<div class="shop__widget-list-item">
												<input type="checkbox" id="medium">
												<label for="medium">$100.00 - $199.00</label>
											</div>
											<div class="shop__widget-list-item">
												<input type="checkbox" id="low">
												<label for="low">$200.00 +</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 order-first order-lg-last">
				<div class="shop__tab-content mb-40">
					<div class="tab-content" id="shop_tab_content">
						<div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
							<!-- shop grid -->
							<div class="row">

								<?php
								/**
								 * Hook: woocommerce_before_shop_loop.
								 *
								 * @hooked woocommerce_output_all_notices - 10
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								do_action('woocommerce_before_shop_loop');

								woocommerce_product_loop_start();

								if (wc_get_loop_prop('total')) {
									while (have_posts()) {
										the_post();

										/**
										 * Hook: woocommerce_shop_loop.
										 */
										do_action('woocommerce_shop_loop');

										wc_get_template_part('content', 'product');
									}
								}

								woocommerce_product_loop_end();

								/**
								 * Hook: woocommerce_after_shop_loop.
								 *
								 * @hooked woocommerce_pagination - 10
								 */
								do_action('woocommerce_after_shop_loop'); ?>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
							<!-- shop list -->
							<div class="product__list-wrapper mb-30">
								<div class="row">

								</div>
							</div>
						</div>
					</div>
					<!-- pagination -->
					<div class="row">
						<div class="col-xxl-12">
							<div class="tp-pagination tp-pagination-style-2">
								<nav>
									<ul>
										<li>
											<a href="shop.html" class="tp-pagination-prev prev page-numbers">
												<svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6.17749 10.105L1.62499 5.55248L6.17749 0.999981" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M14.3767 5.55249L1.75421 5.55249" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
												Prev
											</a>
										</li>
										<li>
											<a href="shop.html">1</a>
										</li>
										<li>
											<span class="current">2</span>
										</li>
										<li>
											<a href="shop.html">3</a>
										</li>
										<li>
											<a href="shop.html" class="next page-numbers">
												Next
												<svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.82422 1L14.3767 5.5525L9.82422 10.105" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M1.625 5.55249H14.2475" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');

get_footer('shop');
