<x-app-layout>
    @push('styles')
    <style>
        @media (min-width:768px) and (max-width:8560px) {
            .banner__img .sm {
                display: none;
            }
        }

        .ak-facilities4-slider-wrapper svg {
            width: 60px;
        }
    </style>
    @endpush
    <!-- Banner-4 area end -->
    <!-- Banner area start -->
    <section class="banner-bg p-relative" data-background="{{ asset('assets/front-new/img/banner-bg-shape.png') }}">
        <div class="scroll-button-wrapper">
            <a class="scroll-btn" href="#">SCROLL</a>
        </div>
        <div class="banner1-blur-round"></div>
        <div class="container">
            <div class="banner-slider banner-active">
                @forelse ($banners as $row)
                <a href="{{$row->link}}">
                    <div class="banner-item">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="banner__img p-relative">
                                    <div class="panel"></div>
                                    <div class=" min-[130px]:hidden max-[768px]:block md:block lg:block">
                                        <img src="{{asset('storage/' . $row->img_desktop)}}" alt="image not found">
                                    </div>
                                    <img class="sm" src="{{asset('storage/' . $row->img_mobile)}}"
                                        alt="image not found">
                                    <div class="shape p-relative"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @empty
                <div class="banner-item">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="banner__img p-relative">
                                <div class="panel"></div>
                                <div class=" min-[130px]:hidden max-[768px]:block md:block lg:block">
                                    <img src="{{asset('assets/front-new/img/empty-banner-lg.jpg')}}"
                                        alt="image not found">
                                </div>
                                <img class="sm" src="{{asset('assets/front-new/img/empty-banner-sm.jpg')}}"
                                    alt="image not found">
                                <div class="shape p-relative"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="banner-img-shape">
                <img src="{{ asset('assets/front-new/img/banner-img-shape.png') }}" alt="banner-img-shape">
            </div>
        </div>
    </section>
    <!-- Banner area end -->

    <!-- Brand area start -->
    <div class="brand-area p-relative">
        <div class="container">
            <div class="brand-wrapper ak-brand4-shadow">
                <div class="brand-slider brand-active">
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-1.jpg') }}" width="150px"
                                alt="brand-logo-1">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-2.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-3.jpg') }}" width="150px"
                                alt="brand-logo-3">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-4.jpg') }}" width="150px"
                                alt="brand-logo-4">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-5.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-6.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-7.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-8.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-9.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-10.jpg') }}" width="120px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-11.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-12.jpg') }}" width="110px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-13.jpg') }}" width="110px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-14.jpg') }}" width="110px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-15.jpg') }}" width="110px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-16.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-17.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-18.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-19.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-20.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-21.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-22.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-23.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-24.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-25.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-26.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-27.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ asset('assets/front-new/img/logo-client/logo-28.jpg') }}" width="150px"
                                alt="brand-logo-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area end -->

    <!-- Facilities area start -->

    <section class="ak-facilities4-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-60">
                        <h2 class="main-title bdFadeBottom">Solusi Internet
                            terlengkap dari OCTAnet
                        </h2>
                    </div>
                </div>
            </div>
            <div class="ak-facilities4-slider-wrapper">
                <div class="swiper ak-facilities4-active">
                    <div class="swiper-wrapper text-center">
                        <div class="swiper-slide bdFadeUp">
                            <div class="ak-facilities4-item">
                                <div class="ak-facilities4-content-wrapper">
                                    <div class="ak-facilities4-item-img-wrapper">
                                        <div class="img-icon mb-25">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="130" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M5 21q-.825 0-1.412-.587T3 19v-4q0-.825.588-1.412T5 13h10V9h2v4h2q.825 0 1.413.588T21 15v4q0 .825-.587 1.413T19 21zm2-3q.425 0 .713-.288T8 17t-.288-.712T7 16t-.712.288T6 17t.288.713T7 18m3.5 0q.425 0 .713-.288T11.5 17t-.288-.712T10.5 16t-.712.288T9.5 17t.288.713t.712.287m3.5 0q.425 0 .713-.288T15 17t-.288-.712T14 16t-.712.288T13 17t.288.713T14 18m.25-9.75L12.8 6.8q.65-.6 1.45-.95T16 5.5t1.75.35t1.45.95l-1.45 1.45q-.35-.35-.788-.55T16 7.5t-.963.2t-.787.55m-2.5-2.5l-1.4-1.4q1.1-1.1 2.55-1.725T16 2t3.1.625t2.55 1.725l-1.4 1.4q-.825-.825-1.912-1.287T16 4t-2.337.463T11.75 5.75" />
                                            </svg>
                                        </div>
                                        <div class="item-number">01</div>
                                    </div>
                                    <h3>Jaringan <br> Stabil</h3>
                                    <p>Nikmati internet cepat dan jaringan stabil kapan pun, di mana pun.</p>
                                </div>
                                <div class="ak-facilities4-item-active-img">
                                    <img src="{{ asset('assets/front-new/img/ak-facilities4-item-active-img.png') }}"
                                        alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bdFadeUp">
                            <div class="ak-facilities4-item">
                                <div class="ak-facilities4-content-wrapper">
                                    <div class="ak-facilities4-item-img-wrapper">
                                        <div class="img-icon mb-25">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 20 20">
                                                <g fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M1.5 10a8.5 8.5 0 1 0 17 0a8.5 8.5 0 0 0-17 0m16 0a7.5 7.5 0 1 1-15 0a7.5 7.5 0 0 1 15 0"
                                                        clip-rule="evenodd" />
                                                    <path fill-rule="evenodd"
                                                        d="M6.5 10c0 4.396 1.442 8 3.5 8s3.5-3.604 3.5-8s-1.442-8-3.5-8s-3.5 3.604-3.5 8m6 0c0 3.889-1.245 7-2.5 7s-2.5-3.111-2.5-7S8.745 3 10 3s2.5 3.111 2.5 7"
                                                        clip-rule="evenodd" />
                                                    <path
                                                        d="m3.735 5.312l.67-.742q.16.144.343.281c1.318.988 3.398 1.59 5.665 1.59c1.933 0 3.737-.437 5.055-1.19a5.6 5.6 0 0 0 .857-.597l.65.76q-.448.383-1.01.704c-1.477.845-3.452 1.323-5.552 1.323c-2.47 0-4.762-.663-6.265-1.79a6 6 0 0 1-.413-.34m0 9.389l.67.74q.16-.145.343-.28c1.318-.988 3.398-1.59 5.665-1.59c1.933 0 3.737.436 5.055 1.19q.482.277.857.596l.65-.76a6.6 6.6 0 0 0-1.01-.704c-1.477-.844-3.452-1.322-5.552-1.322c-2.47 0-4.762.663-6.265 1.789q-.22.165-.413.34M2 10.5v-1h16v1z" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="item-number">02</div>
                                    </div>
                                    <h3>Kuota <br> Unlimited</h3>
                                    <p>Internetan sepuasnya tanpa takut kehabisan.</p>
                                </div>
                                <div class="ak-facilities4-item-active-img">
                                    <img src="{{ asset('assets/front-new/img/ak-facilities4-item-active-img.png') }}"
                                        alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bdFadeUp">
                            <div class="ak-facilities4-item">
                                <div class="ak-facilities4-content-wrapper">
                                    <div class="ak-facilities4-item-img-wrapper">
                                        <div class="img-icon mb-25">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M4.9 17.1q-1.425-1.5-2.162-3.325T2 10t.738-3.775T4.9 2.9l1.2 1.2Q4.9 5.3 4.3 6.863T3.7 10t.6 3.138T6.1 15.9zm2.4-2.4q-.975-.975-1.487-2.2T5.3 10t.513-2.5T7.3 5.3l1.2 1.2q-.75.675-1.125 1.6T7 10q0 .9.375 1.825T8.5 13.5zM7 22l3.375-10.125q-.4-.35-.638-.825T9.5 10q0-1.05.725-1.775T12 7.5t1.775.725T14.5 10q0 .575-.238 1.05t-.637.825L17 22h-2l-.65-2H9.675L9 22zm3.325-4h3.35L12 13zm6.375-3.3l-1.2-1.2q.75-.675 1.125-1.6T17 10q0-.9-.375-1.825T15.5 6.5l1.2-1.2q.975.975 1.45 2.2t.55 2.5q0 1.275-.512 2.5T16.7 14.7m2.4 2.4l-1.2-1.2q1.2-1.2 1.8-2.762T20.3 10t-.6-3.137T17.9 4.1l1.2-1.2q1.425 1.5 2.163 3.325T22 10t-.7 3.775t-2.2 3.325" />
                                            </svg>
                                        </div>
                                        <div class="item-number">03</div>
                                    </div>
                                    <h3>Fiber <br> Optic</h3>
                                    <p>Lebih cepat dan stabil, nikmati koneksi fiber optic sekarang juga.</p>
                                </div>
                                <div class="ak-facilities4-item-active-img">
                                    <img src="{{ asset('assets/front-new/img/ak-facilities4-item-active-img.png') }}"
                                        alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bdFadeUp">
                            <div class="ak-facilities4-item">
                                <div class="ak-facilities4-content-wrapper">
                                    <div class="ak-facilities4-item-img-wrapper">
                                        <div class="img-icon mb-25">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m22.9 21.2l-4.1-4.1c.4-1 .2-2.3-.7-3.1c-.9-.9-2.2-1.1-3.3-.6l1.9 1.9l-1.4 1.4l-2-2c-.5 1.1-.3 2.4.6 3.4c.9.9 2.1 1.1 3.1.7l4.1 4.1c.2.2.5.2.6 0l1-1c.3-.3.3-.6.2-.7M13 20H2v-2c0-2.2 3.6-4 8-4c.5 0 1 0 1.4.1c-.3.6-.4 1.2-.4 1.9c0 1.6.8 3.1 2 4M10 4C7.8 4 6 5.8 6 8s1.8 4 4 4s4-1.8 4-4s-1.8-4-4-4" />
                                            </svg>
                                        </div>
                                        <div class="item-number">04</div>
                                    </div>
                                    <h3>IT <br> Services</h3>
                                    <p>Tim kami siaga untuk memastikan internet Anda berjalan lancar 24 Jam.</p>
                                </div>
                                <div class="ak-facilities4-item-active-img">
                                    <img src="{{ asset('assets/front-new/img/ak-facilities4-item-active-img.png') }}"
                                        alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide bdFadeUp">
                            <div class="ak-facilities4-item">
                                <div class="ak-facilities4-content-wrapper">
                                    <div class="ak-facilities4-item-img-wrapper">
                                        <div class="img-icon mb-25">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 16 16">
                                                <path fill="currentColor"
                                                    d="M11.5 0h-7C3.675 0 3 .675 3 1.5v13c0 .825.675 1.5 1.5 1.5h7c.825 0 1.5-.675 1.5-1.5v-13c0-.825-.675-1.5-1.5-1.5M6 .75h4v.5H6zM8 15a1 1 0 1 1 0-2a1 1 0 0 1 0 2m4-3H4V2h8z" />
                                            </svg>
                                        </div>
                                        <div class="item-number">05</div>
                                    </div>
                                    <h3>Satu Aplikasi Pembayaran</h3>
                                    <p>Satu aplikasi untuk pembayaran praktis, cepat, dan aman.</p>
                                </div>
                                <div class="ak-facilities4-item-active-img">
                                    <img src="{{ asset('assets/front-new/img/ak-facilities4-item-active-img.png') }}"
                                        alt="image not found">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="ak-facilities4-slider-dot bdFadeBottom"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- facilities area end -->

    <!-- Package area start -->

    <section class="ak-package4-area ak-package4-bg pt-125 pb-125 p-relative">
        <div class="container">
            <div class="section-title text-center section-title-4 mb-60">
                <h2 class="main-title bdFadeBottom"> Layanan Paket OCTAnet
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 bdFade3 mb-4">
                    <div class="ak-package3-item package4-item">
                        <div class="ak-package4-item-content">
                            <div class="ak-package3-item-heading">
                                <h3>Broadband Bisnis</h3>
                                <p>Speed Up to <strong class="text-dark text-[20px]">250</strong> mbps</p>
                            </div>
                            <div class="ak-package3-item-price-list">
                                <ul>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span>

                                        Layanan Internet Only
                                    </li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Data Quota Unlimited</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> IP Address Private Static</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Biaya Pemasangan</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Alat Wifi/Router DiPinjamkan</li>
                                </ul>
                            </div>
                            <div class="ak-package3-item-price d-flex">
                                <span>Rp</span>
                                <h3 class="ak-offer-price-point">650.000
                                    <sub class="ak-offer-price-date">/ Bulan</sub>
                                </h3>
                            </div>
                            <div class="ak-package3-item-btn mt-15">
                                <a class="unfill-btn button w-100" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 bdFade3 mb-4">
                    <div class="ak-package3-item ak-package3-item-active ak-package4-item-active p-relative">
                        <div class="ak-package4-item-active-img">
                            <img src="{{ asset('assets/front-new/img/ak-package4-item-active-bg-img.png') }}"
                                alt="image not found">
                        </div>
                        <div class="ak-package4-item-content">
                            <div class="ak-package3-item-heading">
                                <h3>Home Internet</h3>
                                <p class="text-white">Speed Up to <strong class="text-red-500 text-[20px]">30</strong>
                                    mbps</p>
                            </div>
                            <div class="ak-package3-item-price-list">
                                <ul>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Layanan Internet Only</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Data Quota Unlimited</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Akses Perangkat 5 Perangkat</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Biaya Pemasangan Gratis</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Alat Wifi/Router DiPinjamkan</li>
                                </ul>
                            </div>
                            <div class="ak-package3-item-price d-flex">
                                <span>Rp</span>
                                <h3 class="ak-offer-price-point"> 175.000
                                    <sub class="ak-offer-price-date">/ Bulan</sub>
                                </h3>
                            </div>
                            <div class="ak-package-active-item-btn price-active-item-btn mt-15">
                                <a class="unfill-btn button white w-100" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 bdFade3 mb-4">
                    <div class="ak-package3-item package4-item">
                        <div class="ak-package4-item-content">
                            <div class="ak-package3-item-heading">
                                <h3>Dedicated</h3>
                                <p>Speed Up to <strong class="text-dark text-[20px]">500</strong> mbps</p>
                            </div>
                            <div class="ak-package3-item-price-list">
                                <ul>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Layanan Internet Only</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Data Quota Unlimited</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> IP Address IP Public Static /30</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Biaya Pemasangan</li>
                                    <li><span>
                                            <iconify-icon icon="material-symbols:check-rounded"></iconify-icon>
                                        </span> Alat Wifi/Router DiPinjamkan</li>
                                </ul>
                            </div>
                            <div class="ak-package3-item-price d-flex">
                                <span>Rp</span>
                                <h3 class="ak-offer-price-point"> 2.600.000
                                    <sub class="ak-offer-price-date">/ Bulan</sub>
                                </h3>
                            </div>
                            <div class="ak-package3-item-btn mt-15">
                                <a class="unfill-btn button w-100" href="#">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-package4-button text-center mt-15 bdFadeBottom">
                <a class="text-btn" href="{{route('price')}}">Lihat Layanan Lainnya</a>
            </div>
        </div>
    </section>

    <!-- Package area end -->

    <!-- FAQ area start -->

    <section class="banner-area-1 banner-bg p-relative py-10"
        data-background="{{ asset('assets/front-new/img/banner-bg-shape.png') }}">
        <div class="banner1-blur-round"></div>
        <div class="container">
            <div class="banner-slider banner-active">
                <div class="banner-item">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="banner-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="banner-title">
                                            <p
                                                class="bdFadeBottom  text-[28px] lg:text-[39px] md:text-[39px] font-bold text-red-600 mb-3">
                                                Akses Hiburan Terlengkap
                                            </p>
                                            <h1
                                                class="banner-main-title bdFadeBottom text-[28px] lg:text-[39px] md:text-[39px]">
                                                Berlangganan Internet 2P-Home
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="bdFadeBottom">
                                    <p class="text-2xl">Untuk nikmati channel dan platform video streaming terlengkap
                                        dan akses ke lebih dari 70+ Channel TV Lokal maupun Internasional
                                    </p>
                                </div>
                                <!-- <div class="banner-button mt-60  bdFadeBottom">
                                    <a class="button" href="pricing.html">View Package</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="banner__img p-relative">
                                <div class="panel"></div>
                                <img src="{{ asset('assets/front-new/img/tv-plus.jpg') }}" alt="image not found">
                                <div class="shape p-relative"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ area end -->

    <section class="ak-order-area ak-order-bg pt-125 pb-130 p-relative">
        <div class="ak-order-shape">
            <img src="{{ asset('assets/front-new/img/ak-order-shape-img.png') }}" alt="image not found">
        </div>
        <div class="ak-order-bg-img">
            <img src="{{ asset('assets/front-new/img/ak-order-bg-img.png') }}" alt="image not found">
        </div>
        <div class="container">
            <div class="ak-order-content-wrapper p-relative z-index-1">
                <div class="section-title order-section-title text-center mb-60">

                    <h2 class="main-title bdFadeBottom"
                        style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                        Raih keuntungan bulanan <br> dengan menjadi Agen kami</h2>
                </div>
                <div class="ak-order-button text-center mt-60 bdFadeBottom"
                    style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                    <a class="button white" href="{{route('keagenan')}}">Lihat Detail</a>
                </div>
            </div>
        </div>
    </section>



    <!-- News area start -->

    <section class="blog-area pt-125 pb-130 x-clip">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-60">
                        <div class="bdFadeBottom"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                            <h2 class="main-title ">Blog & Artikel Terbaru</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog-item pt-24 mb-40">
                <div class="row align-items-center flex justify-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="blog-img bdFadeBottom"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                            <a href="blog-single.html">
                                <img src="{{ asset('assets/front-new/img/blog-img-1.jpg') }}" alt="blog-img-1">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-12">
                        <div class="blog-content bdFadeBottom"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                            <h3>
                                <a href="blog-single.html">World Best IPTV for Android Tv, iPhone, Samsung, PS4…</a>
                            </h3>
                            <p>Our IPTV Subscription Service is transforming the way you watch TV by giving you
                                unlimited access to all the channels
                            </p>
                            <div class="blog-meta-wrapper">
                                <div class="blog-meta">
                                    <a href="team-details.html">
                                        <span class="ak-blog-author-icon">
                                            <iconify-icon icon="solar:user-outline"></iconify-icon>
                                        </span>
                                        <span class="ak-blog-author-text">By Jaiden</span>
                                    </a>
                                </div>
                                <div class="blog-meta flex items-center">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.93317 18.9111H16.0667C17.4435 18.9111 18.5624 17.7922 18.5624 16.4155V3.97897C18.5624 2.60218 17.4435 1.48331 16.0667 1.48331H15.0769V0.78621C15.0769 0.402794 14.7631 0.0891113 14.3797 0.0891113C13.9963 0.0891113 13.6826 0.402794 13.6826 0.78621V1.48331H5.31731V0.78621C5.31731 0.402794 5.00356 0.0891113 4.62015 0.0891113C4.23673 0.0891113 3.92305 0.402794 3.92305 0.78621V1.48331H2.93317C1.55637 1.48331 0.4375 2.60218 0.4375 3.97897V16.4155C0.4375 17.7922 1.55637 18.9111 2.93317 18.9111ZM1.83175 3.97897C1.83175 3.37251 2.3267 2.87756 2.93317 2.87756H3.92305V3.57466C3.92305 3.95808 4.23673 4.27176 4.62015 4.27176C5.00356 4.27176 5.31725 3.95808 5.31725 3.57466V2.87756H13.6826V3.57466C13.6826 3.95808 13.9963 4.27176 14.3797 4.27176C14.7631 4.27176 15.0768 3.95808 15.0768 3.57466V2.87756H16.0667C16.6732 2.87756 17.1681 3.37251 17.1681 3.97897V16.4155C17.1681 17.0219 16.6732 17.5169 16.0667 17.5169H2.93317C2.3267 17.5169 1.83175 17.0219 1.83175 16.4155V3.97897Z"
                                            fill="#4D4D4D"></path>
                                        <path
                                            d="M5.49161 8.10603C5.97286 8.10603 6.36299 7.7159 6.36299 7.23465C6.36299 6.75341 5.97286 6.36328 5.49161 6.36328C5.01037 6.36328 4.62024 6.75341 4.62024 7.23465C4.62024 7.7159 5.01037 8.10603 5.49161 8.10603Z"
                                            fill="#4D4D4D"></path>
                                        <path
                                            d="M9.32572 8.10603C9.80696 8.10603 10.1971 7.7159 10.1971 7.23465C10.1971 6.75341 9.80696 6.36328 9.32572 6.36328C8.84447 6.36328 8.45435 6.75341 8.45435 7.23465C8.45435 7.7159 8.84447 8.10603 9.32572 8.10603Z"
                                            fill="#4D4D4D"></path>
                                        <path
                                            d="M13.1598 8.10603C13.6411 8.10603 14.0312 7.7159 14.0312 7.23465C14.0312 6.75341 13.6411 6.36328 13.1598 6.36328C12.6786 6.36328 12.2885 6.75341 12.2885 7.23465C12.2885 7.7159 12.6786 8.10603 13.1598 8.10603Z"
                                            fill="#4D4D4D"></path>
                                        <path
                                            d="M5.49161 11.5914C5.97286 11.5914 6.36299 11.2013 6.36299 10.72C6.36299 10.2388 5.97286 9.84863 5.49161 9.84863C5.01037 9.84863 4.62024 10.2388 4.62024 10.72C4.62024 11.2013 5.01037 11.5914 5.49161 11.5914Z"
                                            fill="#4D4D4D"></path>
                                        <path
                                            d="M9.32572 11.5914C9.80696 11.5914 10.1971 11.2013 10.1971 10.72C10.1971 10.2388 9.80696 9.84863 9.32572 9.84863C8.84447 9.84863 8.45435 10.2388 8.45435 10.72C8.45435 11.2013 8.84447 11.5914 9.32572 11.5914Z"
                                            fill="#4D4D4D"></path>
                                        <path
                                            d="M13.1598 11.5914C13.6411 11.5914 14.0312 11.2013 14.0312 10.72C14.0312 10.2388 13.6411 9.84863 13.1598 9.84863C12.6786 9.84863 12.2885 10.2388 12.2885 10.72C12.2885 11.2013 12.6786 11.5914 13.1598 11.5914Z"
                                            fill="#4D4D4D"></path>
                                        <path
                                            d="M5.49161 15.077C5.97286 15.077 6.36299 14.6868 6.36299 14.2056C6.36299 13.7244 5.97286 13.3342 5.49161 13.3342C5.01037 13.3342 4.62024 13.7244 4.62024 14.2056C4.62024 14.6868 5.01037 15.077 5.49161 15.077Z"
                                            fill="#4D4D4D"></path>
                                        <path
                                            d="M9.32572 15.077C9.80696 15.077 10.1971 14.6868 10.1971 14.2056C10.1971 13.7244 9.80696 13.3342 9.32572 13.3342C8.84447 13.3342 8.45435 13.7244 8.45435 14.2056C8.45435 14.6868 8.84447 15.077 9.32572 15.077Z"
                                            fill="#4D4D4D"></path>
                                        <path
                                            d="M13.1598 15.077C13.6411 15.077 14.0312 14.6868 14.0312 14.2056C14.0312 13.7244 13.6411 13.3342 13.1598 13.3342C12.6786 13.3342 12.2885 13.7244 12.2885 14.2056C12.2885 14.6868 12.6786 15.077 13.1598 15.077Z"
                                            fill="#4D4D4D"></path>
                                    </svg>
                                    <span>16 December 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="blog-btn text-center mt-60 bdFadeBottom"
                style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                <a class="unfill-btn button" href="blog.html">Lihat Semua Berita</a>
            </div>
        </div>
    </section>

    <!-- Order area start -->

    <section class="ak-footer-cta-content-wrapper">
        <div class="ak-footer-cta-area ak-footer-cta-top rounded-lg">

            <div class="ak-footer-cta-bg">
                <div class="ak-footer-cta-bg-img">
                    <img src="{{ asset('assets/front-new/img/ak-footer-cta-bg.png') }}" alt="image not found">
                </div>
                <div class="ak-footer-cta-content-wrapper x-clip">
                    <div class="container">
                        <div class="row p-4">
                            <div class="col-xl-6 col-lg-6">
                                <img src="{{asset('assets/front-new/img/mobile-app.png')}}" alt="" srcset="">
                            </div>
                            <div class="col-xl-6 col-lg-6 flex items-center">
                                <div class="ak-footer-cta-details bdFadeBottom text-center">
                                    <h3 class="ak-footer-cta-heading">Atur Semua Pembayaran Tagihan Internet
                                        Kamu Dengan
                                        OCTAnet Mobile</h3>
                                    <p>Dan nikmati berbagai promo menarik serta fitur pendukung lainnya</p>
                                    <h5 class="my-3 text-white font-bold text-xl">Segera Download di :</h5>
                                    <div class=" flex justify-center">
                                        <a href="http://" target="_blank" rel="noopener noreferrer">
                                            <img src="{{asset('assets/front/img/img_play-store.webp')}}" width="200px"
                                                alt="" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="faq-area bd-accordion-fix x-clip pt-130 pb-130 p-relative">
        <div class="ak-faq4-left-shape">
            <img src="{{ asset('assets/front-new/img/faq-shape-img.png') }}" alt="image not found">
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-lg-7 col-12 order-last order-lg-first">
                    <div class="ak-faq2-accordion-wrapper">
                        <div class="ak-faq">
                            <div class="accordion" id="accordionExample-st-2">
                                <div class="ak-faq-group ak-faq2-group">
                                    <div class="accordion-item fade_bottom_4">
                                        <h2 class="accordion-header" id="headingOne-st-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne-st-2"
                                                aria-expanded="false" aria-controls="collapseOne-st-2">
                                                Apa itu OCTAnet?
                                            </button>
                                        </h2>
                                        <div id="collapseOne-st-2" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne-st-2" data-bs-parent="#accordionExample-st-2">
                                            <div class="accordion-body">
                                                OCTAnet adalah provider internet berbasis ISP yang memiliki perizinan
                                                resmi dan lengkap dari Departemen Komunikasi dan Informatika.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item fade_bottom_4">
                                        <h2 class="accordion-header" id="headingTwo-st-2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo-st-2" aria-expanded="true"
                                                aria-controls="collapseTwo-st-2">
                                                Siapa saja yang dapat berlangganan OCTAnet?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo-st-2" class="accordion-collapse collapse show"
                                            aria-labelledby="headingTwo-st-2" data-bs-parent="#accordionExample-st-2">
                                            <div class="accordion-body">
                                                OCTAnet dapat digunakan oleh pelanggan individual perumahan yang
                                                lokasi alamatnya terjangkau oleh jaringan OCTAnet<br>
                                                <br>
                                                Begitu juga bagi Anda yang memiliki bisnis anda dapat menggunakan
                                                OCTAnet untuk bisnis Anda.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item fade_bottom_4">
                                        <h2 class="accordion-header" id="headingThree-st-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree-st-2"
                                                aria-expanded="false" aria-controls="collapseThree-st-2">
                                                Apa saja persyaratan untuk mulai berlangganan?
                                            </button>
                                        </h2>
                                        <div id="collapseThree-st-2" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree-st-2" data-bs-parent="#accordionExample-st-2">
                                            <div class="accordion-body">
                                                Syarat berlangganan OCTAnet adalah sebagai berikut : <br>
                                                • Pastikan lokasi anda sudah tercover oleh jaringan OCTAnet <br>
                                                • Melengkapi formulir pendaftaran (via sales tools,via website,
                                                atau form cetak) <br>
                                                • Melengkapi dokumen pendukung (KTP/SIM/Paspor/KITAS) <br>
                                                • Melampirkan kontak dan alamat email yang valid <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item fade_bottom_4">
                                        <h2 class="accordion-header" id="headingFour-st-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour-st-2"
                                                aria-expanded="false" aria-controls="collapseFour-st-2">
                                                Apa saja yang dapat mempengaruhi kecepatan internet OCTAnet?
                                            </button>
                                        </h2>
                                        <div id="collapseFour-st-2" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour-st-2" data-bs-parent="#accordionExample-st-2">
                                            <div class="accordion-body">
                                                Kecepatan internet yang didapatkan oleh Pelanggan bersifat “up to”
                                                dan tergantung pada beberapa faktor diantaranya kondisi perangkat
                                                Pelanggan yang digunakan (laptop, smartphone, tablet), lokasi ONT,
                                                kondisi jaringan dll.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-12 order-first order-lg-last">
                    <div class="ak-faq2-content-wrapper">
                        <div class="section-title">
                            <h5 class="ak-sub-title4 mb-35 bdFadeBottom">Lihat FAQ</h5>
                            <h2 class="main-title bdFadeBottom">Paling Sering Ditanya <span
                                    class="ak-title-highlight"></span>
                            </h2>
                        </div>
                        <div class="ak-faq2-btn mt-65 bdFadeBottom">
                            <a class="button" href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order area end -->

</x-app-layout>