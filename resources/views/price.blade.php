<x-app-layout>
    <x-bradcrumb title="Paket Layanan">Layanan & Harga</x-bradcrumb>

    <!-- Boradband area start -->

    <section class="ak-broadband-area bd-accordion-fix ak-broadband-bg pt-32 pb-140">
        <div class="ak-broadband-right-shape">
            <img src="{{ asset('assets/front-new/img/ak-broadband-right-shape-img.png') }}" alt="image not found"
                loading="lazy">
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
                                                alt="image not found" loading="lazy">
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
                                                alt="image not found" loading="lazy">
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
                                                alt="image not found" loading="lazy">
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
                                                alt="image not found" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="ak-broadband-img-wrapper">
                        <img src="{{ asset('assets/front-new/img/hero-provider.jpg') }}" alt="ak-broadband-img"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Boradband area end -->

    <div class="gallery-grid-area bd-nav-tabs-fix pb-36 pt-115">
        <div class="container">
            <div class="gallery-grid-menu-wrapper">

                {{-- TAB MENU KATEGORI --}}
                <div class="ak-movies-menu mb-45">
                    <ul class="nav nav-tabs justify-center" id="myTab" role="tablist">
                        @foreach ($kategori as $kat)
                            <li class="nav-item bdFadeUp" style="padding: 4px;" role="presentation">
                                <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                    id="{{ Str::slug($kat->nama) }}-tab" data-bs-toggle="tab"
                                    data-bs-target="#{{ Str::slug($kat->nama) }}-tab-pane" type="button"
                                    role="tab" aria-controls="{{ Str::slug($kat->nama) }}-tab-pane"
                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                    {{ $kat->nama }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="ak-movies-item-wrapper">
                    <div class="tab-content" id="myTabContent">

                        {{-- TAB CONTENT PER KATEGORI --}}
                        @foreach ($kategori as $kat)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                id="{{ Str::slug($kat->nama) }}-tab-pane" role="tabpanel"
                                aria-labelledby="{{ Str::slug($kat->nama) }}-tab" tabindex="0">

                                <div class="row">
                                    <div class="inner-service-slider-wrapper">
                                        <div class="swiper ak-service3-active">

                                            <div class="swiper-wrapper">

                                                {{-- PRODUK SESUAI KATEGORI --}}
                                                @foreach ($kat->products as $price)
                                                    <div class="swiper-slide bdFade4">
                                                        <div
                                                            class="ak-package3-item ak-package3-item-active ak-package4-item-active p-relative">

                                                            {{-- BG Template --}}
                                                            <div class="ak-package4-item-active-img">
                                                                <img src="{{ asset('assets/front-new/img/ak-package4-item-active-bg-img.png') }}"
                                                                    alt="image not found" loading="lazy">
                                                            </div>

                                                            <div class="ak-package4-item-content">

                                                                {{-- TITLE & SPEED --}}
                                                                <div class="ak-package3-item-heading">
                                                                    <h3>{{ $price->nama }}</h3>
                                                                    <p class="text-white">
                                                                        Speed Up to
                                                                        <strong class="text-red-500 text-[20px]">
                                                                            {{ $price->kecepatan }}
                                                                        </strong>
                                                                    </p>
                                                                </div>

                                                                {{-- FEATURE LIST --}}
                                                                <div class="ak-package3-item-price-list">
                                                                    <ul>
                                                                        <li><iconify-icon
                                                                                icon="material-symbols:check-rounded"></iconify-icon>
                                                                            {{ $price->layanan }}</li>
                                                                        <li><iconify-icon
                                                                                icon="material-symbols:check-rounded"></iconify-icon>Kecepatan
                                                                            {{ $price->kecepatan }}</li>
                                                                        <li><iconify-icon
                                                                                icon="material-symbols:check-rounded"></iconify-icon>
                                                                            {{ $price->data_quota }}</li>
                                                                        <li><iconify-icon
                                                                                icon="material-symbols:check-rounded"></iconify-icon>
                                                                            {{ $kat->nama !== 'Home Internet' ? 'IP Address' : 'Akses' }}
                                                                            {{ $price->akses_perangkat }}</li>
                                                                        <li><iconify-icon
                                                                                icon="material-symbols:check-rounded"></iconify-icon>
                                                                            {{ $price->biaya_pasang }}</li>
                                                                        <li><iconify-icon
                                                                                icon="material-symbols:check-rounded"></iconify-icon>
                                                                            {{ $price->alat_wifi }}</li>
                                                                    </ul>
                                                                </div>

                                                                {{-- PRICE --}}
                                                                <div class="ak-package3-item-price d-flex">
                                                                    <span>Rp</span>
                                                                    <h3 class="ak-offer-price-point">
                                                                        {{ number_format($price->harga, 0, ',', '.') }}
                                                                        <sub class="ak-offer-price-date">/ Bulan</sub>
                                                                    </h3>
                                                                </div>

                                                                {{-- BUTTON --}}
                                                                <div
                                                                    class="ak-package-active-item-btn price-active-item-btn mt-15">
                                                                    <a class="unfill-btn button white w-100"
                                                                        href="#">
                                                                        Order Now
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>

                                            {{-- SWIPER PAGINATION --}}
                                            <div class="service3-slider-dot swiper-pagination"></div>

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
