<x-app-layout>
    @push('styles')
    <style>
        .hosting-promo {
            height: 180px;
        }

        section {
            background-color: #fafafa;
        }

        .tagline {
            font-size: 48px;
            font-weight: 700;
        }

        .swiper-button-next,
        .swiper-button-prev {
            background-color: red;
            border-radius: 60px;
            width: 60px;
            height: 60px;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            color: #fafafa;
            font-weight: 800;
            font-size: larger;
        }

        svg {
            display: block;
            margin: auto;
            color: red;
            padding: 16px;
        }

        section h5 {
            font-weight: 600;
        }

        @media (min-width: 750px) {
            p {
                font-size: 18px;
            }

        }
    </style>
    @endpush


    <!--hero section start-->
    <section class="hero-slider-section bg-image hero-equal-height">
        <div class="px-0 container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero_content_slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/front/img/afac73f3-fd92-4bc1-9f28-303b3a4ff706.webp')}}"
                                    alt="" srcset="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/front/img/afac73f3-fd92-4bc1-9f28-303b3a4ff706.webp')}}"
                                    alt="" srcset="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/front/img/afac73f3-fd92-4bc1-9f28-303b3a4ff706.webp')}}"
                                    alt="" srcset="">
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="promo-section mt-n-150">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 z-10">
                    <div class="card hosting-promo border-0 rounded-custom mt-4 shadow">
                        <div class="card-body">
                            <div class="hosting-promo-icon mb-3 d-flex justify-content-center">
                                <span class="fas fa-wifi icon-size-lg text-orange-500"></span>
                            </div>
                            <div class="hosting-promo-content text-center">
                                <h4 class=" text-orange-600">Home Internet</h4>
                                <a href="#" target="_blank" class="read-more-link d-inline-flex align-items-center">
                                    <span>Lihat Selengkapnya</span> <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 z-10">
                    <div class="card hosting-promo border-0 rounded-custom mt-4 shadow">
                        <div class="card-body">
                            <div class="hosting-promo-icon mb-3 d-flex justify-content-center">
                                <span class="fas fa-signal icon-size-lg text-orange-500"></span>
                            </div>
                            <div class="hosting-promo-content text-center">
                                <h4 class=" text-orange-600">Broadband Bisnis</h4>
                                <a href="#" target="_blank" class="read-more-link d-inline-flex align-items-center">
                                    <span>Lihat Selengkapnya</span> <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 z-10">
                    <div class="card hosting-promo border-0 rounded-custom mt-4 shadow">
                        <div class="card-body">
                            <div class="hosting-promo-icon mb-3 d-flex justify-content-center">
                                <span class="fas fa-server icon-size-lg text-orange-500"></span>
                            </div>
                            <div class="hosting-promo-content text-center">
                                <h4 class=" text-orange-600">Internet Dedicated</h4>
                                <a href="#" target="_blank" class="read-more-link d-inline-flex align-items-center">
                                    <span>Lihat Selengkapnya</span> <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 z-10">
                    <div class="card hosting-promo border-0 rounded-custom mt-4 shadow">
                        <div class="card-body">
                            <div class="hosting-promo-icon mb-3 d-flex justify-content-center">
                                <span class="fas fa-network-wired icon-size-lg text-orange-500"></span>
                            </div>
                            <div class="hosting-promo-content text-center">
                                <h4 class=" text-orange-600">METRO-E</h4>
                                <a href="#" target="_blank" class="read-more-link d-inline-flex align-items-center">
                                    <span>Lihat Selengkapnya</span> <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="promo-section">
        <div class="container">
            <div class="row flex justify-center gap-4 text-center">
                <div class="col-lg-12 text-center">
                    <h2 class="font-semibold">Solusi Internet terlengkap dari OCTAnet</h2>
                </div>
                <div class="col-lg-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M5 21q-.825 0-1.412-.587T3 19v-4q0-.825.588-1.412T5 13h10V9h2v4h2q.825 0 1.413.588T21 15v4q0 .825-.587 1.413T19 21zm2-3q.425 0 .713-.288T8 17t-.288-.712T7 16t-.712.288T6 17t.288.713T7 18m3.5 0q.425 0 .713-.288T11.5 17t-.288-.712T10.5 16t-.712.288T9.5 17t.288.713t.712.287m3.5 0q.425 0 .713-.288T15 17t-.288-.712T14 16t-.712.288T13 17t.288.713T14 18m.25-9.75L12.8 6.8q.65-.6 1.45-.95T16 5.5t1.75.35t1.45.95l-1.45 1.45q-.35-.35-.788-.55T16 7.5t-.963.2t-.787.55m-2.5-2.5l-1.4-1.4q1.1-1.1 2.55-1.725T16 2t3.1.625t2.55 1.725l-1.4 1.4q-.825-.825-1.912-1.287T16 4t-2.337.463T11.75 5.75" />
                    </svg>
                    <h5>Jaringan Stabil</h5>
                </div>
                <div class="col-lg-2 ">
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
                    <h5>Kuota Unlimited</h5>
                </div>
                <div class="col-lg-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M4.9 17.1q-1.425-1.5-2.162-3.325T2 10t.738-3.775T4.9 2.9l1.2 1.2Q4.9 5.3 4.3 6.863T3.7 10t.6 3.138T6.1 15.9zm2.4-2.4q-.975-.975-1.487-2.2T5.3 10t.513-2.5T7.3 5.3l1.2 1.2q-.75.675-1.125 1.6T7 10q0 .9.375 1.825T8.5 13.5zM7 22l3.375-10.125q-.4-.35-.638-.825T9.5 10q0-1.05.725-1.775T12 7.5t1.775.725T14.5 10q0 .575-.238 1.05t-.637.825L17 22h-2l-.65-2H9.675L9 22zm3.325-4h3.35L12 13zm6.375-3.3l-1.2-1.2q.75-.675 1.125-1.6T17 10q0-.9-.375-1.825T15.5 6.5l1.2-1.2q.975.975 1.45 2.2t.55 2.5q0 1.275-.512 2.5T16.7 14.7m2.4 2.4l-1.2-1.2q1.2-1.2 1.8-2.762T20.3 10t-.6-3.137T17.9 4.1l1.2-1.2q1.425 1.5 2.163 3.325T22 10t-.7 3.775t-2.2 3.325" />
                    </svg>
                    <h5>Fiber Optic</h5>
                </div>
                <div class="col-lg-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m22.9 21.2l-4.1-4.1c.4-1 .2-2.3-.7-3.1c-.9-.9-2.2-1.1-3.3-.6l1.9 1.9l-1.4 1.4l-2-2c-.5 1.1-.3 2.4.6 3.4c.9.9 2.1 1.1 3.1.7l4.1 4.1c.2.2.5.2.6 0l1-1c.3-.3.3-.6.2-.7M13 20H2v-2c0-2.2 3.6-4 8-4c.5 0 1 0 1.4.1c-.3.6-.4 1.2-.4 1.9c0 1.6.8 3.1 2 4M10 4C7.8 4 6 5.8 6 8s1.8 4 4 4s4-1.8 4-4s-1.8-4-4-4" />
                    </svg>
                    <h5>IT Services</h5>
                </div>
                <div class="col-lg-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 16 16">
                        <path fill="currentColor"
                            d="M11.5 0h-7C3.675 0 3 .675 3 1.5v13c0 .825.675 1.5 1.5 1.5h7c.825 0 1.5-.675 1.5-1.5v-13c0-.825-.675-1.5-1.5-1.5M6 .75h4v.5H6zM8 15a1 1 0 1 1 0-2a1 1 0 0 1 0 2m4-3H4V2h8z" />
                    </svg>
                    <h5>Satu Aplikasi Pembayaran</h5>
                </div>

            </div>
        </div>
    </section>

    <section class="pricing-section ptb-80">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-between">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="py-4">
                            <h4 class="mb-0 font-bold text-red-500">Broadband Bisnis</h4>
                            <p>Speed Up to <strong class="text-red-500 text-[20px]">250</strong> mbps</p>
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price" style="display: block;">
                                <p class=" font-normal text-sm leading-none">Mulai dari</p>
                                Rp650.000<span>/bulan*</span>
                                <p class=" font-normal text-sm leading-none">Harga belum termasuk PPN</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>Layanan <span>Internet Only</span></li>
                                <li>Data Quota <span>Unlimited</span></li>
                                <li>IP Address <span>Private Static</span></li>
                                <li>Biaya Pemasangan <span>Rp500.000</span></li>
                                <li>Alat Wifi/Router <span>DiPinjamkan</span></li>
                            </ul>
                            <a href="#" class="btn btn-danger mb-3 font-semibold" target="_blank">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="py-4">
                            <h4 class="mb-0 font-bold text-red-500">Home Internet TV+ <span
                                    class="badge bg-warning ms-2">Best Seller</span></h4>
                            <p>Speed Up to <strong class="text-red-500 text-[20px]">30</strong> mbps</p>
                        </div>
                        <div class="card-header py-4 border-0 pricing-header text-white">
                            <div class="price text-center mb-0 monthly-price" style="display: block;">
                                <p class=" font-normal text-sm leading-none">Mulai dari</p>
                                Rp175.000<span>/bulan*</span>
                                <p class=" font-normal text-sm leading-none">Harga belum termasuk PPN</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>Layanan <span>Internet Only</span></li>
                                <li>Data Quota <span>Unlimited</span></li>
                                <li>Akses Perangkat <span>5 Perangkat</span></li>
                                <li>Biaya Pemasangan <span>Gratis</span></li>
                                <li>Alat Wifi/Router <span>DiPinjamkan</span></li>
                            </ul>
                            <a href="#" class="btn btn-danger mb-3 font-semibold" target="_blank">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="py-4">
                            <h4 class="mb-0 font-bold text-red-500">Dedicated</h4>
                            <p>Speed Up to <strong class="text-red-500 text-[20px]">500</strong> mbps</p>
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price" style="display: block;">
                                <p class=" font-normal text-sm leading-none">Mulai dari</p>
                                Rp2.600.000<span>/bulan*</span>
                                <p class=" font-normal text-sm leading-none">Harga belum termasuk PPN</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>Layanan <span>Internet Only</span></li>
                                <li>Data Quota <span>Unlimited</span></li>
                                <li>IP Address <span>IP Public Static /30</span></li>
                                <li>Biaya Pemasangan <span>Rp3.000.000</span></li>
                                <li>Alat Wifi/Router <span>DiPinjamkan</span></li>
                            </ul>
                            <a href="#" class="btn btn-danger mb-3 font-semibold" target="_blank">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 flex justify-center">
                    <div class="support-cta mt-2 card p-3 rounded-2xl">
                        <h6 class="mb-1 font-bold text-[18px]">Butuh internet dengan
                            paket
                            lainnya ?<a href="pricing-comparison.html" class="ms-2 text-red-500 hover:text-red-600"> Cek
                                Paketnya <span class=" me-2 fa fa-arrow-right icon-sm"></span></a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ptb-40">
        <div class="container">
            <div class="row text-center flex justify-center">
                <div class="col-lg-12 text-center mb-2">
                    <h2 class="font-semibold">Lebih Mudah Dengan <span class="text-red-500">OCTAnet</span></h2>
                </div>
                <div class="col-md-5 col-lg-7">
                    <p>OCTAnet adalah merk layanan
                        akses
                        internet dengan
                        kecepatan
                        tinggi. Kami adalah
                        penyedia layanan
                        akses internet resmi yang memiliki perizinan lengkap dari Departemen Komunikasi dan
                        Informatika.
                        kami menyediakan solusi layanan internet berkapasitas besar sesuai dengan
                        kebutuhan menggunakan
                        media wireless dan fiberoptik.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="network-map-section py-7 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2 class="mb-1 font-semibold">Jaringan Kami Telah Tersebar
                            Di<span> Indonesia</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row flex justify-center">
                <div class="col-lg-10">
                    <div class="network-map-wrap">
                        <ul class="custom-map-location">
                            <li style="top: 80%; left: 28%;">
                                <span data-toggle="tooltip" data-placement="top" aria-label="Depok"
                                    data-bs-original-title="Depok" aria-describedby="tooltip442675"></span>
                            </li>
                            <li style="top: 83%; left: 34%;">
                                <span data-toggle="tooltip" data-placement="top" aria-label="Bekasi"
                                    data-bs-original-title="Bekasi" aria-describedby="tooltip976174"></span>
                            </li>
                            <li style="top: 70%; left: 32%;">
                                <span data-toggle="tooltip" data-placement="top" aria-label="Jakarta"
                                    data-bs-original-title="Jakarta" aria-describedby="tooltip115187"></span>
                            </li>
                            <li style="top:85%; left: 45%;">
                                <span data-toggle="tooltip" data-placement="top" aria-label="Bali"
                                    data-bs-original-title="Bali" aria-describedby="tooltip879715"></span>
                            </li>
                            <li style="top: 80%; left: 40%;">
                                <span data-toggle="tooltip" data-placement="top" aria-label="Jatim"
                                    data-bs-original-title="Jatim" aria-describedby="tooltip677649"></span>
                            </li>
                            <li style="top: 76%; left: 34%;">
                                <span data-toggle="tooltip" data-placement="top" aria-label="Bogor"
                                    data-bs-original-title="Bogor" aria-describedby="tooltip304554"></span>
                            </li>
                            <li style="top: 72%; left: 25%;">
                                <span data-toggle="tooltip" data-placement="top" aria-label="Tangerang"
                                    data-bs-original-title="Tangerang" aria-describedby="tooltip41463"></span>
                            </li>
                            <li style="top: 77%; left: 30%;">
                                <span data-toggle="tooltip" data-placement="top" aria-label="Jabar"
                                    data-bs-original-title="Jabar" aria-describedby="tooltip86496"></span>
                            </li>
                            <li style="top: 77%; left: 34%;">
                                <span data-toggle="tooltip" data-placement="top" aria-label="Jateng"
                                    data-bs-original-title="Jateng" aria-describedby="tooltip478068"></span>
                            </li>
                        </ul>
                        <img src="{{ asset('assets/front/img/map.png') }}" alt="location map">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--hosting promo end-->
    <section class=" ptb-20 bg-[#ffecec]">
        <div class="container">
            <div class="row justify-content-md-center justify-content-sm-center items-center">
                <div class="col-lg-6">
                    <img src="{{asset('assets/front/img/mobile-app.png')}}" alt="" srcset="">
                </div>
                <div class="col-lg-6 text-center">
                    <h2 class="mb-3 font-bold">Atur Semua Pembayaran Tagihan Internet Kamu Dengan OCTAnet Mobile</h2>
                    <p class="mb-4">Dan nikmati berbagai promo menarik serta fitur pendukung lainnya</p>

                    <h5 class="mb-3">Segera Download di :</h5>
                    <div class=" flex justify-center">
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <img src="{{asset('assets/front/img/img_play-store.webp')}}" width="200px" alt="" srcset="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-app-layout>