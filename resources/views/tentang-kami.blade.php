<x-app-layout>

    @push('styles')
    <style>
        @media (min-width: 750px) {
            p {
                font-size: 18px;
            }
        }
    </style>
    @endpush

    <section class="pt-[116px] bg-red-500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-12">
                    <div class="p-3 flex items-center flex-wrap">
                        <ul class="flex items-center">
                            <li class="inline-flex items-center">
                                <a href="#" class="text-white hover:text-blue-500">
                                    <svg class="w-5 h-auto fill-current mx-2 text-white"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z" />
                                    </svg>
                                </a>

                                <svg class="w-5 h-auto fill-current mx-2 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
                                </svg>
                            </li>

                            <li class="inline-flex items-center">
                                <a href="#" class="text-white hover:text-orange-500">
                                    Tentang kami
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section position-relative overflow-hidden ptb-40">
        <div class="container">
            <div class="row flex justify-between">
                <div class="col-md-12 col-lg-6">
                    <div class="feature-contents section-heading6">
                        <span class="text-orange-600 font-semibold">Tentang OCTAnet</span>
                        <h2 class="mb-3 mt-2 font-medium">Pelajari Lebih Lanjut Tentang OCTAnet</h2>
                        <p>OCTAnet berdiri dibawah naungan PT Centrix Media
                            Teknologi (CMT) yang
                            bergerak dalam bidang teknologi informasi dan komunikasi, serta menyediakan berbagai solusi
                            layanan internet, pembangunan infrastruktur jaringan, konsultasi, serta
                            penyediaan perangkat keras untuk mendukung transformasi digital di indonesia.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <img src="{{asset('assets/front/img/tentang.png')}}" alt="logo-tentang" width="300px">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row ">
                <div class="col-12 lg:flex gap-5 ">
                    <div class="card border-orange-600 rounded-xl">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="font-medium">Visi</h3>
                            </div>
                            <div>
                                <p>Menjadi mitra teknologi terpercaya pada pengembangan infrastruktur digital,
                                    khususnya
                                    didaerah
                                    terpencil, melalui penyediaan solusi internet dan teknologi yang inovatif.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-orange-600 rounded-xl">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="font-medium">Misi</h3>
                            </div>
                            <div>
                                <p>Menyediakan layanan yang berkualitas yang mendukung transformasi digital dengan
                                    layanan Internet dan managed service konsultasi IT, sehingga memudahkan kolaborasi
                                    dan
                                    meningkatkan produktivitas bisnis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ptb-40">
        <div class="container">
            <div class="row flex justify-center">
                <div class="col-12">
                    <div class="card rounded-2xl bg-gradient-to-tl from-orange-400 to-red-500">
                        <div class="card-body">
                            <div class="card-title">
                                <h2 class="text-white"><i class="fa fa-map-location-dot"></i> <span
                                        class=" text-[40px] font-medium">0</span> <span
                                        class="text-[20px]">Kota/Kabupaten
                                        Tercover</span></h2>

                            </div>
                            <div class="row">
                                <!-- <div class="col-6 col-lg-2 col-md-3">
                                    <p class=" text-white font-medium">Jakarta</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

</x-app-layout>