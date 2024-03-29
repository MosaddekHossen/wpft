<?php
$harry_Header_email = get_theme_mod('harry_email', 'info@example.com');
$harry_Header_phone = get_theme_mod('harry_phone', '+964 742 44 763');
$harry_Header_time = get_theme_mod('harry_timing', 'Sunday-Thures 10am-07pm');
?>

<!-- header area start -->
<header>
    <div class="header__area">
        <div class="header__bottom-9 header__sticky" id="header-sticky">
            <div class="container">
                <div class="mega-menu-wrapper p-relative">
                    <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-4 col-sm-5 col-8">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo-green.svg" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block">
                            <div class="main-menu main-menu-9 main-menu-ff-space">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="index.html">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Main Demo</a></li>
                                                <li><a href="index-shop.html">Shop Demo</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="portfolio.html">Protfolio</a>
                                            <ul class="submenu">
                                                <li><a href="portfolio.html">Classic Style</a></li>
                                                <li><a href="portfolio-details-list.html">List With Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown ">
                                            <a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="portfolio.html">Portfoilo</a></li>
                                                <li><a href="portfolio-details-list.html">Portfoilo Details</a></li>
                                                <li><a href="about-me.html">About Me</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="services-details.html">Service Details</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog Standard</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="shop.html">Shop</a>
                                            <ul class="submenu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- for wp -->
                                <div class="header__hamburger ml-50 d-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-8 col-sm-7 col-4">
                            <div class="header__bottom-right-8 d-flex justify-content-end align-items-center">
                                <div class="header__hamburger ml-50">
                                    <button type="button" class="hamburger-btn-8 hamburger-btn-8-black offcanvas-open-btn">Menu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

<?php get_template_part('/template-parts/header/side-info') ?>