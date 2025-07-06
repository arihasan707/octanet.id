<x-app-layout>
    <x-bradcrumb title="Paket Layanan">Layanan & Harga</x-bradcrumb>

    <!-- Boradband area start -->

    <section class="ak-broadband-area bd-accordion-fix ak-broadband-bg pt-32 pb-140">
        <div class="ak-broadband-right-shape">
            <img src="{{ asset('assets/front-new/img/ak-broadband-right-shape-img.png') }}" alt="image not found">
        </div>
        <div class="container">
            <div class="section-title theme-section-title mb-60">
                <h2 class="main-title bdFadeBottom">Lengkapi kebutuhanmu <br> dengan OCTAnet</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="ak-broadband-accordion-wrapper">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item bdFadeBottom">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="ak-accordion-number">01.</span> <span
                                            class="ak-accordion-heading">Home Internet</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="ak-accordion-body-content">
                                            <p>Layanan akses internet untuk rumah.</p>
                                        </div>
                                        <div class="ak-accourdion-body-shape">
                                            <img src="{{ asset('assets/front-new/img/ak-accordion-item-shape.png') }}"
                                                alt="image not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bdFadeBottom">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="ak-accordion-number">02.</span> <span
                                            class="ak-accordion-heading">Broadband Bisnis</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="ak-accordion-body-content">
                                            <p>Layanan akses internet untuk usaha kecil, rukan, umkm, bisnis kecil.</p>
                                        </div>
                                        <div class="ak-accourdion-body-shape">
                                            <img src="{{ asset('assets/front-new/img/ak-accordion-item-shape.png') }}"
                                                alt="image not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bdFadeBottom">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span class="ak-accordion-number">03.</span> <span
                                            class="ak-accordion-heading">Internet Dedicated</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="ak-accordion-body-content">
                                            <p>Layanan akses internet Dedicated dengan garansi layanan yang diberikan
                                                untuk perusahaan atau korporasi.</p>
                                        </div>
                                        <div class="ak-accourdion-body-shape">
                                            <img src="{{ asset('assets/front-new/img/ak-accordion-item-shape.png') }}"
                                                alt="image not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bdFadeBottom">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span class="ak-accordion-number">04.</span> <span
                                            class="ak-accordion-heading">METRO-E</span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="ak-accordion-body-content">
                                            <p>Layanan penyewaan jalur infrastruktur yang menghubungkan antara titik
                                                pusat data center ke daerah kota,Desa, Kecamatan, Kelurahan tertentu.
                                            </p>
                                        </div>
                                        <div class="ak-accourdion-body-shape">
                                            <img src="{{ asset('assets/front-new/img/ak-accordion-item-shape.png') }}"
                                                alt="image not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="ak-broadband-img-wrapper">
                        <img src="{{ asset('assets/front-new/img/hero-provider.jpg') }}" alt="ak-broadband-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Boradband area end -->

    <div class="gallery-grid-area bd-nav-tabs-fix pb-36 pt-115">
        <div class="container">
            <div class="gallery-grid-menu-wrapper">
                <div class="ak-movies-menu mb-45">
                    <ul class="nav nav-tabs justify-center" id="myTab" role="tablist">
                        @foreach ($kategori as $row)  
                        <li class="nav-item bdFadeUp" role="presentation">
                            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ Str::slug($row->nama) }}-tab" data-bs-toggle="tab"
                                data-bs-target="#{{ Str::slug($row->nama) }}-tab-pane" type="button" role="tab"
                                aria-controls="{{ Str::slug($row->nama) }}-tab-pane" aria-selected="false">{{ $row->nama }}</button>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="ak-movies-item-wrapper">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($kategori as $row)
                            <div class="tab-pane fade {{ $loop->first ? ' show active' : '' }}" id="{{ Str::slug($row->nama) }}-tab-pane" role="tabpanel"
                            aria-labelledby="{{ Str::slug($row->nama) }}-tab" tabindex="0">
                            <div class="row">
        <div class="inner-service-slider-wrapper">
            <div
                class="swiper ak-service3-active swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-2e108cb2228748ad9"
                    aria-live="polite"
                    style="transition-duration: 0ms; transform: translate3d(-884px, 0px, 0px);">
                    @foreach ($prices as $price)     
                    <div class="swiper-slide bdFade4" role="group" aria-label="2 / 4"
                        style="width: 412px; translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px); margin-right: 30px;"
                        data-swiper-slide-index="0">
                        <div
                            class="ak-package3-item ak-package3-item-active ak-package4-item-active p-relative">
                            <div class="ak-package4-item-active-img">
                                <img src="{{ asset('assets/front-new/img/ak-package4-item-active-bg-img.png') }}"
                                    alt="image not found">
                            </div>
                            <div class="ak-package4-item-content">
                                <div class="ak-package3-item-heading">
                                    <h3>Home 10Mbps</h3>
                                    <p class="text-white">Speed Up to <strong
                                            class="text-red-500 text-[20px]">10</strong>
                                        mbps</p>
                                </div>
                                <div class="ak-package3-item-price-list">
                                    <ul>
                                        <li><span>
                                                <iconify-icon
                                                    icon="material-symbols:check-rounded">
                                                </iconify-icon>
                                            </span> Layanan Internet Only</li>
                                        <li><span>
                                                <iconify-icon
                                                    icon="material-symbols:check-rounded">
                                                </iconify-icon>
                                            </span> Data Quota Unlimited</li>
                                        <li><span>
                                                <iconify-icon
                                                    icon="material-symbols:check-rounded">
                                                </iconify-icon>
                                            </span> Akses Perangkat 5 Perangkat</li>
                                        <li><span>
                                                <iconify-icon
                                                    icon="material-symbols:check-rounded">
                                                </iconify-icon>
                                            </span> Biaya Pemasangan Gratis</li>
                                        <li><span>
                                                <iconify-icon
                                                    icon="material-symbols:check-rounded">
                                                </iconify-icon>
                                            </span> Alat Wifi/Router DiPinjamkan</li>
                                    </ul>
                                </div>
                                <div class="ak-package3-item-price d-flex">
                                    <span>Rp</span>
                                    <h3 class="ak-offer-price-point"> 175.000
                                        <sub class="ak-offer-price-date">/ Bulan</sub>
                                    </h3>
                                </div>
                                <div
                                    class="ak-package-active-item-btn price-active-item-btn mt-15">
                                    <a class="unfill-btn button white w-100" href="#">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="service3-slider-dot bdFade4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"
                    style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                        tabindex="0" role="button" aria-label="Go to slide 1"
                        aria-current="true"></span><span class="swiper-pagination-bullet"
                        tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                        class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet"
                        tabindex="0" role="button" aria-label="Go to slide 4"></span>
                </div>
                <span class="swiper-notification" aria-live="assertive"
                    aria-atomic="true"></span>
            </div>
        </div>
    </div>
</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>