<header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="u-header-topbar py-2 d-none d-xl-block">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="topbar-left">
                        <a href="#" class="text-gray-110 font-size-13 hover-on-dark">Welcome to Worldwide
                            Electronics Store</a>
                    </div>
                    <div class="topbar-right ml-auto">
                        <ul class="list-inline mb-0">
                            <li
                                class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="contact-v2" class="u-header-topbar__nav-link"><i
                                        class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                            </li>
                            <li
                                class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="/shop/track-your-order"
                                    class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track
                                    Your Order</a>
                            </li>
                            <li
                                class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                <div class="d-flex align-items-center">
                                    <!-- Language -->
                                    <div class="position-relative">
                                        <a id="languageDropdownInvoker"
                                            class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal"
                                            href="javascript:;" role="button" aria-controls="languageDropdown"
                                            aria-haspopup="true" aria-expanded="false" data-unfold-event="hover"
                                            data-unfold-target="#languageDropdown" data-unfold-type="css-animation"
                                            data-unfold-duration="300" data-unfold-delay="300"
                                            data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
                                            data-unfold-animation-out="fadeOut">
                                            <span class="d-inline-block d-sm-none">US</span>
                                            <span class="d-none d-sm-inline-flex align-items-center"><i
                                                    class="ec ec-dollar mr-1"></i> Dollar (US)</span>
                                        </a>

                                        <div id="languageDropdown" class="dropdown-menu dropdown-unfold"
                                            aria-labelledby="languageDropdownInvoker">
                                            <a class="dropdown-item active" href="#">English</a>
                                            <a class="dropdown-item" href="#">Deutsch</a>
                                            <a class="dropdown-item" href="#">Español‎</a>
                                        </div>
                                    </div>
                                    <!-- End Language -->
                                </div>
                            </li>
                            <li
                                class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <!-- Account Sidebar Toggle Button -->
                                <a id="sidebarNavToggler" href="javascript:;" role="button"
                                    class="u-header-topbar__nav-link" aria-controls="sidebarContent"
                                    aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent"
                                    data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight"
                                    data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                    <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span>
                                    Sign in
                                </a>
                                <!-- End Account Sidebar Toggle Button -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <!-- Logo-Search-header-icons -->
        <div class="py-2 py-xl-5 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <!-- Logo-offcanvas-menu -->
                    <div class="col-auto">
                        @include('layouts.nav')
                    </div>
                    <!-- End Logo-offcanvas-menu -->
                    <!-- Search Bar -->
                    <div class="col d-none d-xl-block">
                        <form class="js-focus-state">
                            <label class="sr-only" for="searchproduct">Search</label>
                            <div class="input-group">
                                <input type="email"
                                    class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary"
                                    name="email" id="searchproduct-item" placeholder="Search for Products"
                                    aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                <div class="input-group-append">
                                    <!-- Select -->
                                    <select
                                        class="js-select selectpicker dropdown-select custom-search-categories-select"
                                        data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
                                        <option value="one" selected>All Categories</option>
                                        <option value="two">Two</option>
                                        <option value="three">Three</option>
                                        <option value="four">Four</option>
                                    </select>
                                    <!-- End Select -->
                                    <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill"
                                        type="button" id="searchProduct1">
                                        <span class="ec ec-search font-size-24"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Search Bar -->
                    <!-- Header Icons -->
                    <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker"
                                        class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary"
                                        href="javascript:;" role="button" data-toggle="tooltip" data-placement="top"
                                        title="Search" aria-controls="searchClassic" aria-haspopup="true"
                                        aria-expanded="false" data-unfold-target="#searchClassic"
                                        data-unfold-type="css-animation" data-unfold-duration="300"
                                        data-unfold-delay="300" data-unfold-hide-on-scroll="true"
                                        data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                        <span class="ec ec-search"></span>
                                    </a>

                                    <!-- Input -->
                                    <div id="searchClassic"
                                        class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2"
                                        aria-labelledby="searchClassicInvoker">
                                        <form class="js-focus-state input-group px-3">
                                            <input class="form-control" type="search" placeholder="Search Product">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button"><i
                                                        class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->
                                <li class="col d-none d-xl-block"><a
                                        href="/shop/compare"
                                        class="text-gray-90" data-toggle="tooltip" data-placement="top"
                                        title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                <li class="col d-none d-xl-block"><a
                                        href="/shop/wishlist"
                                        class="text-gray-90" data-toggle="tooltip" data-placement="top"
                                        title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                <li class="col d-xl-none px-2 px-sm-3"><a
                                        href="/shop/my-account"
                                        class="text-gray-90" data-toggle="tooltip" data-placement="top"
                                        title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                <li class="col pr-xl-0 px-2 px-sm-3 d-xl-none">
                                    <a href="/shop/cart"
                                        class="text-gray-90 position-relative d-flex " data-toggle="tooltip"
                                        data-placement="top" title="Cart">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span
                                            class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                        <span
                                            class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                    </a>
                                </li>
                                <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
                                    <div id="basicDropdownHoverInvoker"
                                        class="text-gray-90 position-relative d-flex " data-toggle="tooltip"
                                        data-placement="top" title="Cart" aria-controls="basicDropdownHover"
                                        aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                                        data-unfold-target="#basicDropdownHover" data-unfold-type="css-animation"
                                        data-unfold-duration="300" data-unfold-delay="300"
                                        data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
                                        data-unfold-animation-out="fadeOut">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span
                                            class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                        <span
                                            class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                    </div>
                                    <div id="basicDropdownHover"
                                        class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0"
                                        aria-labelledby="basicDropdownHoverInvoker">
                                        <ul class="list-unstyled px-3 pt-3">
                                            <li class="border-bottom pb-3 mb-3">
                                                <div class="">
                                                    <ul class="list-unstyled row mx-n2">
                                                        <li class="px-2 col-auto">
                                                            <img class="img-fluid"
                                                                src="/assets/img/75X75/img1.jpg"
                                                                alt="Image Description">
                                                        </li>
                                                        <li class="px-2 col">
                                                            <h5 class="text-blue font-size-14 font-weight-bold">
                                                                Ultra Wireless S50 Headphones S50 with Bluetooth
                                                            </h5>
                                                            <span class="font-size-14">1 × $1,100.00</span>
                                                        </li>
                                                        <li class="px-2 col-auto">
                                                            <a href="#" class="text-gray-90"><i
                                                                    class="ec ec-close-remove"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="border-bottom pb-3 mb-3">
                                                <div class="">
                                                    <ul class="list-unstyled row mx-n2">
                                                        <li class="px-2 col-auto">
                                                            <img class="img-fluid"
                                                                src="/assets/img/75X75/img2.jpg"
                                                                alt="Image Description">
                                                        </li>
                                                        <li class="px-2 col">
                                                            <h5 class="text-blue font-size-14 font-weight-bold">
                                                                Widescreen NX Mini F1 SMART NX</h5>
                                                            <span class="font-size-14">1 × $685.00</span>
                                                        </li>
                                                        <li class="px-2 col-auto">
                                                            <a href="#" class="text-gray-90"><i
                                                                    class="ec ec-close-remove"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="flex-center-between px-4 pt-2">
                                            <a href="/shop/cart"
                                                class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">View
                                                cart</a>
                                            <a href="/shop/checkout"
                                                class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Logo-Search-header-icons -->

        <!-- Vertical-and-secondary-menu -->
        <div class="d-none d-xl-block container">
            <div class="row">
                <!-- Vertical Menu -->
                <div class="col-md-auto d-none d-xl-block">
                    <div class="max-width-270 min-width-270">
                        <!-- Basics Accordion -->
                        <div id="basicsAccordion">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-header card-collapse border-0" id="basicsHeadingOne">
                                    <button type="button"
                                        class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90 "
                                        data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true"
                                        aria-controls="basicsCollapseOne">
                                        <span class="ml-0 text-gray-90 mr-2">
                                            <span class="fa fa-list-ul"></span>
                                        </span>
                                        <span class="pl-1 text-gray-90 ">All Departments</span>
                                    </button>
                                </div>
                                <div id="basicsCollapseOne" class="collapse vertical-menu"
                                    aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                    <div class="card-body p-0">
                                        <nav
                                            class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                            <div id="navBar"
                                                class="collapse navbar-collapse u-header__navbar-collapse">
                                                <ul class="navbar-nav u-header__navbar-nav">
                                                    <li class="nav-item u-header__nav-item" data-event="hover"
                                                        data-position="left">
                                                        <a href="#"
                                                            class="nav-link u-header__nav-link font-weight-bold">Value
                                                            of the Day</a>
                                                    </li>
                                                    <li class="nav-item u-header__nav-item" data-event="hover"
                                                        data-position="left">
                                                        <a href="#"
                                                            class="nav-link u-header__nav-link font-weight-bold">Top
                                                            100 Offers</a>
                                                    </li>
                                                    <li class="nav-item u-header__nav-item" data-event="hover"
                                                        data-position="left">
                                                        <a href="#"
                                                            class="nav-link u-header__nav-link font-weight-bold">New
                                                            Arrivals</a>
                                                    </li>
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-animation-in="slideInUp"
                                                        data-animation-out="fadeOut" data-position="left">
                                                        <a id="basicMegaMenu"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Computers & Accessories</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid"
                                                                    src="/assets/img/500X400/img1.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Computers
                                                                        & Accessories</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Computers &
                                                                                Accessories</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Laptops, Desktops &
                                                                                Monitors</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Printers & Ink</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Networking & Internet
                                                                                Devices</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Computer Accessories</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Software</a></li>
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">All Electronics</div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Discover more products</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Office &
                                                                        Stationery</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Office & Stationery</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu1"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Cameras, Audio & Video</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu1">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid"
                                                                    src="/assets/img/500X400/img4.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Cameras &
                                                                        Photography</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Lenses</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Camera Accessories</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Security & Surveillance</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Binoculars & Telescopes</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Camcorders</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Software</a></li>
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">All Electronics</div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Discover more products</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Audio &
                                                                        Video</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Audio & Video</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Headphones & Speakers</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu2"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Mobiles & Tablets</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu vmm-bg-extended"
                                                            aria-labelledby="basicMegaMenu2">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid"
                                                                    src="/assets/img/500X400/img3.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Mobiles &
                                                                        Tablets</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Mobile Phones</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Smartphones</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Refurbished Mobiles</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link border-top pt-2"
                                                                                href="#">All Mobile Accessories</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Cases & Covers</a></li>
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">All Electronics</div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Discover more products</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Tablets</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Tablet Accessories</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu3"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Movies, Music & Video Game</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu3">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid"
                                                                    src="/assets/img/500X400/img2.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Movies &
                                                                        TV Shows</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Movies & TV Shows</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All English</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3"
                                                                                href="#">All Hindi</a></li>
                                                                    </ul>
                                                                    <span class="u-header__sub-menu-title">Video
                                                                        Games</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">PC Games</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Consoles</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Accessories</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span
                                                                        class="u-header__sub-menu-title">Music</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Music</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Indian Classical</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Musical Instruments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu4"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">TV & Audio</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu4">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid"
                                                                    src="/assets/img/500X400/img5.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Audio &
                                                                        Video</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Audio & Video</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Televisions</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Headphones</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Speakers</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Audio & Video
                                                                                Accessories</a></li>
                                                                        <li>
                                                                            <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                                                                                href="#">
                                                                                <div class="">Electro Home
                                                                                    Appliances</div>
                                                                                <div
                                                                                    class="u-nav-subtext font-size-11 text-gray-30">
                                                                                    Available in select cities</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span
                                                                        class="u-header__sub-menu-title">Music</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Televisions</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Headphones</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu5"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Watches & Eyewear</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu5">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid"
                                                                    src="/assets/img/500X400/img6.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span
                                                                        class="u-header__sub-menu-title">Watches</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Watches</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Men's Watches</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Women's Watches</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Premium Watches</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Deals on Watches</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span
                                                                        class="u-header__sub-menu-title">Eyewear</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Men's Sunglasses</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item MegaMenu -->
                                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                        data-event="hover" data-position="left">
                                                        <a id="basicMegaMenu3"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false">Car, Motorbike & Industrial</a>

                                                        <!-- Nav Item - Mega Menu -->
                                                        <div class="hs-mega-menu vmm-tfw u-header__sub-menu"
                                                            aria-labelledby="basicMegaMenu3">
                                                            <div class="vmm-bg">
                                                                <img class="img-fluid"
                                                                    src="/assets/img/500X400/img7.png"
                                                                    alt="Image Description">
                                                            </div>
                                                            <div class="row u-header__mega-menu-wrapper">
                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span class="u-header__sub-menu-title">Car &
                                                                        Motorbike</span>
                                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Cars & Bikes</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Car & Bike Care</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3"
                                                                                href="#">Lubricants</a></li>
                                                                    </ul>
                                                                    <span class="u-header__sub-menu-title">Shop for
                                                                        Bike</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Helmets & Gloves</a></li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Bike Parts</a></li>
                                                                    </ul>
                                                                </div>

                                                                <div class="col mb-3 mb-sm-0">
                                                                    <span
                                                                        class="u-header__sub-menu-title">Industrial
                                                                        Supplies</span>
                                                                    <ul class="u-header__sub-menu-nav-group">
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">All Industrial Supplies</a>
                                                                        </li>
                                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                                href="#">Lab & Scientific</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Nav Item - Mega Menu -->
                                                    </li>
                                                    <!-- End Nav Item MegaMenu-->
                                                    <!-- Nav Item -->
                                                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                                        data-event="click" data-animation-in="slideInUp"
                                                        data-animation-out="fadeOut" data-position="left">
                                                        <a id="homeMegaMenu"
                                                            class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-toggle"
                                                            href="javascript:;" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            aria-labelledby="homeSubMenu">Accessories</a>

                                                        <!-- Home - Submenu -->
                                                        <ul id="homeSubMenu"
                                                            class="hs-sub-menu u-header__sub-menu animated hs-position-left fadeOut"
                                                            aria-labelledby="homeMegaMenu"
                                                            style="min-width: 230px; display: none;">
                                                            <!-- Home-v1 -->
                                                            <li class="hs-has-sub-menu">
                                                                <a class="nav-link u-header__sub-menu-nav-link "
                                                                    href="/">Home-v1</a>
                                                            </li>
                                                            <!-- End Home-v1 -->

                                                            <!-- Home-v2 -->
                                                            <li class="hs-has-sub-menu">
                                                                <a class="nav-link u-header__sub-menu-nav-link "
                                                                    href="home-v2">Home-v2</a>
                                                            </li>
                                                            <!-- End Home-v2 -->

                                                            <!-- Home-v3 -->
                                                            <li class="hs-has-sub-menu">
                                                                <a class="nav-link u-header__sub-menu-nav-link "
                                                                    href="home-v3">Home-v3</a>
                                                            </li>
                                                            <!-- End Home-v3 -->

                                                            <!-- Home-v4 -->
                                                            <li class="hs-has-sub-menu">
                                                                <a class="nav-link u-header__sub-menu-nav-link "
                                                                    href="home-v4">Home-v4</a>
                                                            </li>
                                                            <!-- End Home-v4 -->
                                                        </ul>
                                                        <!-- End Home - Submenu -->
                                                    </li>
                                                    <!-- End Nav Item -->
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Basics Accordion -->
                    </div>
                </div>
                <!-- End Vertical Menu -->
                <!-- Secondary Menu -->
                <div class="col">
                    <!-- Nav -->
                    <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                        <!-- Navigation -->
                        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                            <ul class="navbar-nav u-header__navbar-nav">
                                <!-- Home -->
                                <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="click"
                                    data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                                    <a id="homeMegaMenu"
                                        class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale"
                                        href="javascript:;" aria-haspopup="true" aria-expanded="false">Super
                                        Deals</a>

                                    <!-- Home - Mega Menu -->
                                    <div class="hs-mega-menu w-100 u-header__sub-menu"
                                        aria-labelledby="homeMegaMenu">
                                        <div class="row u-header__mega-menu-wrapper">
                                            <div class="col-md-3">
                                                <span class="u-header__sub-menu-title">Home & Static Pages</span>
                                                <ul class="u-header__sub-menu-nav-group">
                                                    <li><a href="/"
                                                            class="nav-link u-header__sub-menu-nav-link">Home v1</a>
                                                    </li>
                                                    <li><a href="home-v2"
                                                            class="nav-link u-header__sub-menu-nav-link">Home v2</a>
                                                    </li>
                                                    <li><a href="home-v3"
                                                            class="nav-link u-header__sub-menu-nav-link">Home v3</a>
                                                    </li>
                                                    <li><a href="home-v3-full-color-bg"
                                                            class="nav-link u-header__sub-menu-nav-link">Home
                                                            v3.1</a></li>
                                                    <li><a href="home-v4"
                                                            class="nav-link u-header__sub-menu-nav-link">Home v4</a>
                                                    </li>
                                                    <li><a href="home-v5"
                                                            class="nav-link u-header__sub-menu-nav-link">Home v5</a>
                                                    </li>
                                                    <li><a href="home-v6"
                                                            class="nav-link u-header__sub-menu-nav-link">Home v6</a>
                                                    </li>
                                                    <li><a href="home-v7"
                                                            class="nav-link u-header__sub-menu-nav-link">Home v7</a>
                                                    </li>
                                                    <li><a href="about"
                                                            class="nav-link u-header__sub-menu-nav-link">About</a>
                                                    </li>
                                                    <li><a href="contact-v1"
                                                            class="nav-link u-header__sub-menu-nav-link">Contact
                                                            v1</a></li>
                                                    <li><a href="contact-v2"
                                                            class="nav-link u-header__sub-menu-nav-link">Contact
                                                            v2</a></li>
                                                    <li><a href="faq"
                                                            class="nav-link u-header__sub-menu-nav-link">FAQ</a>
                                                    </li>
                                                    <li><a href="store-directory"
                                                            class="nav-link u-header__sub-menu-nav-link">Store
                                                            Directory</a></li>
                                                    <li><a href="terms-and-conditions"
                                                            class="nav-link u-header__sub-menu-nav-link">Terms and
                                                            Conditions</a></li>
                                                    <li><a href="404"
                                                            class="nav-link u-header__sub-menu-nav-link">404</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="u-header__sub-menu-title">Shop Pages</span>
                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                    <li><a href="/shop/shop-grid"
                                                            class="nav-link u-header__sub-menu-nav-link">Shop
                                                            Grid</a></li>
                                                    <li><a href="/shop/shop-grid-extended"
                                                            class="nav-link u-header__sub-menu-nav-link">Shop Grid
                                                            Extended</a></li>
                                                    <li><a href="/shop/shop-list-view"
                                                            class="nav-link u-header__sub-menu-nav-link">Shop List
                                                            View</a></li>
                                                    <li><a href="/shop/shop-list-view-small"
                                                            class="nav-link u-header__sub-menu-nav-link">Shop List
                                                            View Small</a></li>
                                                    <li><a href="/shop/shop-left-sidebar"
                                                            class="nav-link u-header__sub-menu-nav-link">Shop Left
                                                            Sidebar</a></li>
                                                    <li><a href="/shop/shop-full-width"
                                                            class="nav-link u-header__sub-menu-nav-link">Shop Full
                                                            width</a></li>
                                                    <li><a href="/shop/shop-right-sidebar"
                                                            class="nav-link u-header__sub-menu-nav-link">Shop Right
                                                            Sidebar</a></li>
                                                </ul>
                                                <span class="u-header__sub-menu-title">Product Categories</span>
                                                <ul class="u-header__sub-menu-nav-group">
                                                    <li><a href="/shop/product-categories-4-column-sidebar"
                                                            class="nav-link u-header__sub-menu-nav-link">4 Column
                                                            Sidebar</a></li>
                                                    <li><a href="/shop/product-categories-5-column-sidebar"
                                                            class="nav-link u-header__sub-menu-nav-link">5 Column
                                                            Sidebar</a></li>
                                                    <li><a href="/shop/product-categories-6-column-full-width"
                                                            class="nav-link u-header__sub-menu-nav-link">6 Column
                                                            Full width</a></li>
                                                    <li><a href="/shop/product-categories-7-column-full-width"
                                                            class="nav-link u-header__sub-menu-nav-link">7 Column
                                                            Full width</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="u-header__sub-menu-title">Single Product Pages</span>
                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                    <li><a href="/shop/single-product-extended"
                                                            class="nav-link u-header__sub-menu-nav-link">Single
                                                            Product Extended</a></li>
                                                    <li><a href="/shop/single-product-fullwidth"
                                                            class="nav-link u-header__sub-menu-nav-link">Single
                                                            Product Fullwidth</a></li>
                                                    <li><a href="/shop/single-product-sidebar"
                                                            class="nav-link u-header__sub-menu-nav-link">Single
                                                            Product Sidebar</a></li>
                                                </ul>
                                                <span class="u-header__sub-menu-title">Ecommerce Pages</span>
                                                <ul class="u-header__sub-menu-nav-group">
                                                    <li><a href="/shop/shop"
                                                            class="nav-link u-header__sub-menu-nav-link">Shop</a>
                                                    </li>
                                                    <li><a href="/shop/cart"
                                                            class="nav-link u-header__sub-menu-nav-link">Cart</a>
                                                    </li>
                                                    <li><a href="/shop/checkout"
                                                            class="nav-link u-header__sub-menu-nav-link">Checkout</a>
                                                    </li>
                                                    <li><a href="/shop/my-account"
                                                            class="nav-link u-header__sub-menu-nav-link">My
                                                            Account</a></li>
                                                    <li><a href="/shop/track-your-order"
                                                            class="nav-link u-header__sub-menu-nav-link">Track your
                                                            Order</a></li>
                                                    <li><a href="/shop/compare"
                                                            class="nav-link u-header__sub-menu-nav-link">Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="u-header__sub-menu-title">Blog Pages</span>
                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                    <li><a href="/blog/blog-v1"
                                                            class="nav-link u-header__sub-menu-nav-link">Blog v1</a>
                                                    </li>
                                                    <li><a href="/blog/blog-v2"
                                                            class="nav-link u-header__sub-menu-nav-link">Blog v2</a>
                                                    </li>
                                                    <li><a href="/blog/blog-v3"
                                                            class="nav-link u-header__sub-menu-nav-link">Blog v3</a>
                                                    </li>
                                                    <li><a href="/blog/blog-full-width"
                                                            class="nav-link u-header__sub-menu-nav-link">Blog Full
                                                            Width</a></li>
                                                    <li><a href="/blog/single-blog-post"
                                                            class="nav-link u-header__sub-menu-nav-link">Single Blog
                                                            Post</a></li>
                                                </ul>
                                                <span class="u-header__sub-menu-title">Shop Columns</span>
                                                <ul class="u-header__sub-menu-nav-group">
                                                    <li><a href="/shop/shop-7-columns-full-width"
                                                            class="nav-link u-header__sub-menu-nav-link">7 Column
                                                            Full width</a></li>
                                                    <li><a href="/shop/shop-6-columns-full-width"
                                                            class="nav-link u-header__sub-menu-nav-link">6 Column
                                                            Full width</a></li>
                                                    <li><a href="/shop/shop-5-columns-sidebar"
                                                            class="nav-link u-header__sub-menu-nav-link">5 Column
                                                            Sidebar</a></li>
                                                    <li><a href="/shop/shop-4-columns-sidebar"
                                                            class="nav-link u-header__sub-menu-nav-link">4 Column
                                                            Sidebar</a></li>
                                                    <li><a href="/shop/shop-3-columns-sidebar"
                                                            class="nav-link u-header__sub-menu-nav-link">3 Column
                                                            Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Home - Mega Menu -->
                                </li>
                                <!-- End Home -->

                                <!-- Featured Brands -->
                                <li class="nav-item u-header__nav-item">
                                    <a class="nav-link u-header__nav-link" href="#" aria-haspopup="true"
                                        aria-expanded="false" aria-labelledby="pagesSubMenu">Featured Brands</a>
                                </li>
                                <!-- End Featured Brands -->

                                <!-- Trending Styles -->
                                <li class="nav-item u-header__nav-item">
                                    <a class="nav-link u-header__nav-link" href="#" aria-haspopup="true"
                                        aria-expanded="false" aria-labelledby="blogSubMenu">Trending Styles</a>
                                </li>
                                <!-- End Trending Styles -->

                                <!-- Gift Cards -->
                                <li class="nav-item u-header__nav-item">
                                    <a class="nav-link u-header__nav-link" href="#" aria-haspopup="true"
                                        aria-expanded="false">Gift Cards</a>
                                </li>
                                <!-- End Gift Cards -->

                                <!-- Button -->
                                <li class="nav-item u-header__nav-last-item">
                                    <a class="text-gray-90" href="#" target="_blank">
                                        Free Shipping on Orders $50+
                                    </a>
                                </li>
                                <!-- End Button -->
                            </ul>
                        </div>
                        <!-- End Navigation -->
                    </nav>
                    <!-- End Nav -->
                </div>
                <!-- End Secondary Menu -->
            </div>
        </div>
        <!-- End Vertical-and-secondary-menu -->
    </div>
</header>