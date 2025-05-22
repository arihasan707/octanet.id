 <!--header section start-->
 <header id="header" class="header-main">

     <!--main header menu start-->
     <div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top affix">
         <div class="bg-red-600 w-100%">
             <div class="container">
                 <div class="row">
                     <div class="col flex justify-end gap-2">
                         <a href="http://" class="text-white text-lg p-2">Info Keagenan</a>
                         <a href="http://" class="text-white text-lg p-2">Blog & Artikel</a>
                     </div>
                 </div>
             </div>

         </div>

         <div class="container">
             <nav class="js-mega-menu navbar navbar-expand-md header-nav">
                 <!--logo start-->
                 <a class="navbar-brand pt-0" href="{{route('beranda')}}">
                     <img src="{{ asset('assets/front/img/icons/logo-octanet.png') }}" width="120px" alt="logo" />
                 </a>
                 <!--logo end-->

                 <!--responsive toggle button start-->
                 <button type="button" class="navbar-toggler btn" data-bs-toggle="offcanvas"
                     data-bs-target="#offcanvasLeft">
                     <span id="hamburgerTrigger">
                         <span class="fas fa-bars"></span>
                     </span>
                 </button>
                 <!--responsive toggle button end-->

                 <!--main menu start-->
                 <div id="navBar" class="collapse navbar-collapse">
                     <ul class="navbar-nav ms-auto main-navbar-nav">
                         <!--home start-->
                         <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="center">
                             <a id="homeMegaMenu" class="nav-link custom-nav-link" href="{{route('beranda')}}"
                                 aria-haspopup="true" aria-expanded="false">
                                 Beranda
                             </a>
                         </li>
                         <!--home end-->
                         <!--pages start-->
                         <li class="nav-item hs-has-sub-menu custom-nav-item">
                             <a id="pagesMegaMenu" class="nav-link custom-nav-link" href="{{route('tentang')}}"
                                 aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">
                                 Tentang kami
                             </a>
                             <!-- Pages - Submenu -->

                             <!-- End Pages - Submenu -->
                         </li>
                         <!--pages end-->
                         <!--hosting start-->
                         <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                             <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                 href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">
                                 Paket Layanan & Harga
                             </a>
                             <!-- Demos - Mega Menu -->
                             <div class="hs-mega-menu main-sub-menu" style="width: 715px;"
                                 aria-labelledby="hostingMegaMenu">
                                 <div class="row g-0">
                                     <div class="col-md-6">
                                         <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                             <!--menu title with subtitle and icon item start-->
                                             <div class="title-with-icon-item h-[6.4rem]">
                                                 <a class="title-with-icon-link" href="shared-hosting.html">
                                                     <div class="d-flex align-items-center">
                                                         <div class="menu-item-icon pe-3">
                                                             <i class="fas fa-wifi rounded-circle bg-red-500"></i>
                                                         </div>
                                                         <div class="media-body">
                                                             <span class="u-header__promo-title">
                                                                 Home Internet
                                                             </span>
                                                             <small class="u-header__promo-text">
                                                                 Layanan akses internet untuk rumah.
                                                             </small>
                                                         </div>
                                                     </div>
                                                 </a>
                                             </div>
                                             <!--menu title with subtitle and icon item end-->

                                             <!--menu title with subtitle and icon item start-->
                                             <div class="title-with-icon-item">
                                                 <a class="title-with-icon-link" href="cloud-hosting.html">
                                                     <div class="d-flex align-items-center">
                                                         <div class="menu-item-icon pe-3">
                                                             <i class="fas fa-server rounded-circle bg-red-500"></i>
                                                         </div>
                                                         <div class="media-body">
                                                             <span class="u-header__promo-title">
                                                                 Internet Dedicated
                                                             </span>
                                                             <small class="u-header__promo-text">
                                                                 Layanan akses internet Dedicated dengan garansi layanan
                                                                 yang diberikan untuk perusahaan atau korporasi.
                                                             </small>
                                                         </div>
                                                     </div>
                                                 </a>
                                             </div>
                                             <!--menu title with subtitle and icon item end-->


                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="menu-item-wrap py-0 p-md-3 p-lg-3">

                                             <!--menu title with subtitle and icon item start-->
                                             <div class="title-with-icon-item">
                                                 <a class="title-with-icon-link" href="vps-hosting.html">
                                                     <div class="d-flex align-items-center">
                                                         <div class="menu-item-icon pe-3">
                                                             <i class="fas fa-signal rounded-circle bg-orange-600"></i>
                                                         </div>
                                                         <div class="media-body">
                                                             <span class="u-header__promo-title">
                                                                 Broadband Bisnis
                                                             </span>
                                                             <small class="u-header__promo-text">
                                                                 Layanan akses internet untuk usaha kecil, rukan, umkm,
                                                                 bisnis kecil.
                                                             </small>
                                                         </div>
                                                     </div>
                                                 </a>
                                             </div>
                                             <!--menu title with subtitle and icon item end-->

                                             <!--menu title with subtitle and icon item start-->
                                             <div class="title-with-icon-item">
                                                 <a class="title-with-icon-link" href="email-hosting.html">
                                                     <div class="d-flex align-items-center">
                                                         <div class="menu-item-icon pe-3">
                                                             <i
                                                                 class="fas fa-network-wired rounded-circle bg-orange-500"></i>
                                                         </div>
                                                         <div class="media-body">
                                                             <span class="u-header__promo-title">
                                                                 METRO-E
                                                             </span>
                                                             <small class="u-header__promo-text">
                                                                 Layanan penyewaan jalur infrastruktur yang
                                                                 menghubungkan antara titik pusat data center ke daerah
                                                                 kota, desa, kecamatan, kelurahan tertentu.
                                                             </small>
                                                         </div>
                                                     </div>
                                                 </a>
                                             </div>
                                             <!--menu title with subtitle and icon item end-->
                                         </div>
                                     </div>
                                 </div>
                                 <!--application hosting start-->

                                 <!--application hosting end-->
                             </div>
                             <!-- End Demos - Mega Menu -->
                         </li>
                         <!--hosting end-->
                         <!--domain start-->
                         <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                             <a id="domainMegaMenu" class="nav-link custom-nav-link" href="" aria-haspopup="true"
                                 aria-expanded="false">
                                 Kontak
                             </a>
                             <!-- Demos - Mega Menu -->

                             <!-- End Demos - Mega Menu -->
                         </li>
                         <!--domain end-->

                         <!--button start-->
                         <li class="nav-item header-nav-last-item d-flex align-items-center">
                             <a class="btn btn-danger animated-btn" href="{{route('login')}}">
                                 <span class="fas fa-sign-in pe-2"></span>
                                 Masuk
                             </a>
                         </li>
                         <!--button end-->
                     </ul>
                 </div>
                 <!--main menu end-->
             </nav>
         </div>
     </div>
     <!--main header menu end-->

     <!--offcanvas menu start-->
     <div class="offcanvas offcanvas-start" id="offcanvasLeft" tabindex="-1">
         <div class="offcanvas-header border-bottom">
             <a class="navbar-brand" href="index.html">
                 <img src="{{ asset('assets/front/img/icons/logo-octanet.png') }}" width="120px" alt="logo"
                     class="img-fluid" />
             </a>
             <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
         </div>
         <div class="offcanvas-body offcanvas-menu-wrap">
             <!--offcanvas menu list start-->
             <ul class="navbar-nav">
                 <!--home item start-->
                 <li class="nav-item">
                     <a class="nav-link" href="#" data-bs-toggle="dropdown">
                         Beranda
                     </a>
                 </li>
                 <!--home item end-->

                 <!--page item start-->
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                         data-bs-auto-close="outside">
                         Pages
                     </a>
                     <ul class="dropdown-menu">
                         <li>
                             <a class="dropdown-item" href="about-us.html">About Us</a>
                         </li>
                         <li>
                             <a class="dropdown-item" href="offer-single-page.html">
                                 Black Friday Single
                             </a>
                         </li>
                         <li>
                             <a class="dropdown-item" href="terms-condition.html">
                                 Terms & Condition
                             </a>
                         </li>
                         <li>
                             <a class="dropdown-item" href="privacy-policy.html">
                                 Privacy Policy
                             </a>
                         </li>
                         <li class="dropdown">
                             <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                 Pricing
                             </a>
                             <ul class="dropdown-menu">
                                 <li>
                                     <a class="dropdown-item" href="pricing-default.html">
                                         Pricing Default
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="pricing-package.html">
                                         Pricing Packages
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="pricing-web-hosting.html">
                                         Web Hosting Packages
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="pricing-windows-hosting.html">
                                         Windows Hosting
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="pricing-comparision.html">
                                         Pricing Comparison
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="pricing-specifications.html">
                                         Pricing Specifications
                                         <span class="badge bg-danger ms-auto">New</span>
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="vps-pricing.html">
                                         VPS Pricing
                                     </a>
                                 </li>
                             </ul>
                         </li>

                         <li class="dropdown">
                             <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                 Blog
                             </a>
                             <ul class="dropdown-menu">
                                 <li>
                                     <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="blog-details.html">
                                         Blog Details
                                     </a>
                                 </li>
                             </ul>
                         </li>

                         <li class="dropdown">
                             <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                 Specialty
                             </a>
                             <ul class="dropdown-menu">
                                 <li>
                                     <a class="dropdown-item" href="domain-search-result.html">
                                         Search Result
                                         <span class="badge bg-success ms-2">New</span>
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="cover-page.html">Cover Page</a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="coming-soon.html">
                                         Coming Soon
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="thank-you.html">Thank You</a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="404.html">Error 404</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="dropdown">
                             <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                 Login and Signup
                             </a>
                             <ul class="dropdown-menu">
                                 <li>
                                     <a class="dropdown-item" href="login.html">Login</a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="sign-up.html">Signup</a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="password-reset.html">
                                         Recover Account
                                     </a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <!--page item end-->

                 <!--hosting item start-->
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                         Hosting
                     </a>
                     <div class="dropdown-menu p-0">
                         <div class="row g-0">
                             <div class="col-12">
                                 <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                     <!--menu title with subtitle and icon item start-->
                                     <div class="title-with-icon-item">
                                         <a class="title-with-icon-link" href="shared-hosting.html">
                                             <div class="d-flex align-items-center">
                                                 <div class="menu-item-icon pe-3">
                                                     <i class="fas fa-server rounded-circle primary-bg"></i>
                                                 </div>
                                                 <div class="media-body">
                                                     <span class="u-header__promo-title">
                                                         Shared Web Hosting
                                                     </span>
                                                     <small class="u-header__promo-text">
                                                         Reliable quality Starting at
                                                         <strong>$2.99</strong>
                                                     </small>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <!--menu title with subtitle and icon item end-->
                                     <!--menu title with subtitle and icon item start-->
                                     <div class="title-with-icon-item">
                                         <a class="title-with-icon-link" href="vps-hosting.html">
                                             <div class="d-flex align-items-center">
                                                 <div class="menu-item-icon pe-3">
                                                     <i class="fas fa-box rounded-circle accent-bg"></i>
                                                 </div>
                                                 <div class="media-body">
                                                     <span class="u-header__promo-title">VPS Hosting</span>
                                                     <small class="u-header__promo-text">
                                                         Maintain Starting at
                                                         <strong>$11.99</strong>
                                                     </small>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <!--menu title with subtitle and icon item end-->
                                     <!--menu title with subtitle and icon item start-->
                                     <div class="title-with-icon-item">
                                         <a class="title-with-icon-link" href="cloud-hosting.html">
                                             <div class="d-flex align-items-center">
                                                 <div class="menu-item-icon pe-3">
                                                     <i class="fas fa-cloud rounded-circle secondary-bg"></i>
                                                 </div>
                                                 <div class="media-body">
                                                     <span class="u-header__promo-title">
                                                         Cloud Hosting
                                                     </span>
                                                     <small class="u-header__promo-text">
                                                         Cloud Starting at
                                                         <strong>$5.99/mo</strong>
                                                     </small>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <!--menu title with subtitle and icon item end-->
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                     <!--menu title with subtitle and icon item start-->
                                     <div class="title-with-icon-item">
                                         <a class="title-with-icon-link" href="email-hosting.html">
                                             <div class="d-flex align-items-center">
                                                 <div class="menu-item-icon pe-3">
                                                     <i class="fas fa-envelope rounded-circle twitter-bg"></i>
                                                 </div>
                                                 <div class="media-body">
                                                     <span class="u-header__promo-title">
                                                         Email Hosting
                                                     </span>
                                                     <small class="u-header__promo-text">
                                                         First Starting at
                                                         <strong>$0.99/mo</strong>
                                                     </small>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <!--menu title with subtitle and icon item end-->
                                     <!--menu title with subtitle and icon item start-->
                                     <div class="title-with-icon-item">
                                         <a class="title-with-icon-link" href="windows-vps-hosting.html">
                                             <div class="d-flex align-items-center">
                                                 <div class="menu-item-icon pe-3">
                                                     <i class="fab fa-windows rounded-circle bg-success"></i>
                                                 </div>
                                                 <div class="media-body">
                                                     <span class="u-header__promo-title">
                                                         Windows VPS Hosting
                                                     </span>
                                                     <small class="u-header__promo-text">
                                                         Globally Starting at
                                                         <strong>$9.99/mo</strong>
                                                     </small>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <!--menu title with subtitle and icon item end-->
                                     <!--menu title with subtitle and icon item start-->
                                     <div class="title-with-icon-item">
                                         <a class="title-with-icon-link" href="dedicated-server-hosting.html">
                                             <div class="d-flex align-items-center">
                                                 <div class="menu-item-icon pe-3">
                                                     <i class="fas fa-database rounded-circle dribbble-bg"></i>
                                                 </div>
                                                 <div class="media-body">
                                                     <span class="u-header__promo-title">
                                                         Dedicated Server Hosting
                                                     </span>
                                                     <small class="u-header__promo-text">
                                                         Conveniently Starting at
                                                         <strong>$9.99/mo</strong>
                                                     </small>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <!--menu title with subtitle and icon item end-->
                                 </div>
                             </div>
                         </div>
                         <!--application hosting start-->
                         <div class="application-hosting text-white">
                             <span class="sub-menu-title text-lg-center text-md-center text-white mb-3">
                                 Application For Hosting
                             </span>
                             <ul class="application-hosting-list">
                                 <li>
                                     <a href="wp-hosting.html">
                                         <img src="assets/img/icons/wordpress-icon-color.svg" alt="icon" />
                                         WordPress Hosting
                                     </a>
                                 </li>
                                 <li>
                                     <a href="joomla-hosting.html">
                                         <img src="assets/img/icons/joomla-icon-color.svg" alt="icon" />
                                         Joomla Hosting
                                     </a>
                                 </li>
                                 <li>
                                     <a href="magento-hosting.html">
                                         <img src="assets/img/icons/magento-icon-color.svg" alt="icon" />
                                         Magento Hosting
                                     </a>
                                 </li>
                                 <li>
                                     <a href="opencart-hosting.html">
                                         <img src="assets/img/icons/opencart-icon-color.svg" alt="icon" />
                                         Opencart Hosting
                                     </a>
                                 </li>
                                 <li>
                                     <a href="prestashop-hosting.html">
                                         <img src="assets/img/icons/prestashop-icon-color.svg" alt="icon" />
                                         Prestashop Hosting
                                     </a>
                                 </li>
                                 <li>
                                     <a href="drupal-hosting.html">
                                         <img src="assets/img/icons/drupal-icon-color.svg" alt="icon" />
                                         Drupal Hosting
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <!--application hosting end-->
                     </div>
                 </li>
                 <!--hosting item end-->

                 <!--domain item start-->
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                         Domain
                     </a>
                     <div class="dropdown-menu p-0">
                         <div class="row g-0">
                             <div class="">
                                 <div class="menu-item-wrap p-3">
                                     <!--menu title with subtitle and icon item start-->
                                     <div class="title-with-icon-item">
                                         <a class="title-with-icon-link" href="domain-checker.html">
                                             <div class="d-flex align-items-center pb-1">
                                                 <i class="fas fa-globe me-2 color-primary"></i>
                                                 <span class="u-header__promo-title">
                                                     Domain Checker
                                                 </span>
                                             </div>
                                             <small class="u-header__promo-text">
                                                 Find the perfect domain for your business
                                             </small>
                                         </a>
                                     </div>
                                     <!--menu title with subtitle and icon item end-->
                                     <!--menu title with subtitle and icon item start-->
                                     <div class="title-with-icon-item">
                                         <a class="title-with-icon-link" href="domain-transfer.html">
                                             <div class="d-flex align-items-center pb-1">
                                                 <i class="fas fa-exchange-alt me-2 color-accent"></i>
                                                 <span class="u-header__promo-title">
                                                     Domain Transfer
                                                 </span>
                                             </div>
                                             <small class="u-header__promo-text">
                                                 Transfer your domain easily
                                             </small>
                                         </a>
                                     </div>
                                     <!--menu title with subtitle and icon item end-->
                                     <!--menu title with subtitle and icon item start-->
                                     <div class="title-with-icon-item">
                                         <a class="title-with-icon-link" href="domain-registration.html">
                                             <div class="d-flex align-items-center pb-1">
                                                 <i class="fas fa-copyright me-2 instagram-color"></i>
                                                 <span class="u-header__promo-title">
                                                     Domain Registration
                                                 </span>
                                             </div>
                                             <small class="u-header__promo-text">
                                                 Register your domain name for lifetime
                                             </small>
                                         </a>
                                     </div>
                                     <!--menu title with subtitle and icon item end-->
                                 </div>
                             </div>
                             <div class="gray-light-bg">
                                 <div class="menu-item-wrap p-4">
                                     <h6>#1 Web Hosting Company</h6>
                                     <ul class="list-unstyled tech-feature-list">
                                         <li class="py-1">
                                             <small>
                                                 <span class="fas fa-check-circle text-success me-2"></span>
                                                 <strong>Flexible</strong>
                                                 Easy to Use Control Panel
                                             </small>
                                         </li>
                                         <li class="py-1">
                                             <small>
                                                 <span class="fas fa-check-circle text-success me-2"></span>
                                                 <strong>99%</strong>
                                                 Uptime Guarantee
                                             </small>
                                         </li>
                                         <li class="py-1">
                                             <small>
                                                 <span class="fas fa-check-circle text-success me-2"></span>
                                                 <strong>45-Day</strong>
                                                 Money-Back Guarantee
                                             </small>
                                         </li>
                                         <li class="py-1">
                                             <small>
                                                 <span class="fas fa-check-circle text-success me-2"></span>
                                                 <strong>Free SSL</strong>
                                                 Certificate Included
                                             </small>
                                         </li>
                                     </ul>
                                     <a class="btn btn-tertiary btn-block mt-3" href="#">
                                         Learn More
                                         <span class="fas fa-angle-right ms-2"></span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
                 <!--domain item end-->

                 <!--affiliate item start-->
                 <li class="nav-item">
                     <a class="nav-link" href="affiliates.html">Jadi Agen Resmi</a>
                 </li>
                 <!--affiliate item end-->

                 <!--company item start-->
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                         data-bs-auto-close="outside">
                         Company
                     </a>
                     <div class="dropdown-menu">
                         <div class="row g-0">
                             <div class="col-12">
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link" href="contact-us.html">
                                         <div class="d-flex align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/chat-mobile.svg" alt="SVG" />
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">Contact Us</span>
                                                 <small class="u-header__promo-text">
                                                     Face any problem contact with us
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link" href="about-us.html">
                                         <div class="d-flex align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/community.svg" alt="SVG" />
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">About Us</span>
                                                 <small class="u-header__promo-text">
                                                     We are leading hosting company
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link" href="partners.html">
                                         <div class="d-flex align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/partner.svg" alt="SVG" />
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">Our Partner</span>
                                                 <small class="u-header__promo-text">
                                                     We have trusted partners globally
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link" href="network.html">
                                         <div class="d-flex align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/network.svg" alt="SVG" />
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">Network</span>
                                                 <small class="u-header__promo-text">
                                                     Keep your data save and secure
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <div class="title-with-icon-item">
                                     <a class="title-with-icon-link" href="blog-grid.html">
                                         <div class="d-flex align-items-center">
                                             <img class="menu-titile-icon" src="assets/img/blog.svg" alt="SVG" />
                                             <div class="media-body">
                                                 <span class="u-header__promo-title">Company Blog</span>
                                                 <small class="u-header__promo-text">
                                                     Industry latest technology news & tips
                                                 </small>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
                 <!--company item end-->

                 <!--button start-->
                 <li class="nav-item header-nav-last-item d-flex align-items-center mt-3">
                     <a class="btn btn-tertiary animated-btn"
                         href="https://whmcs.themetags.com/index.php?systpl=kohost&carttpl=themetags_cart"
                         target="_blank">
                         <span class="fa fa-user pe-2"></span>
                         Masuk
                     </a>
                 </li>
                 <!--button end-->
             </ul>
             <!--offcanvas menu list end-->
         </div>
     </div>
     <!--offcanvas menu end-->
 </header>
 <!--header section end-->