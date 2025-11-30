<x-guest.guest-layout>

    @push('styles')
    <style>
        #keuntungan .swiper-slide .team-content>div {
            display: flex;
            justify-content: center;
        }

        #keuntungan .swiper-slide .team-content svg {
            width: 74px;
            margin-bottom: 3px;
        }

        #keuntungan .swiper-slide .team-content p {
            margin-top: 6px;
            font-weight: 700;
            font-size: 18px;
        }

        form label {
            font-weight: 600;
        }

        label.error {
            margin-top: 4px;
            padding: 6px;
            width: 100%;
            background-color: #F9E4E8;
            font-size: smaller;
            color: red;

        }

        input.error,
        select.error,
        textarea.error {
            border: 1px solid red !important;
        }

        iconify-icon {
            font-size: 120px;
            color: green;
        }
    </style>
    @endpush

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
                <div class="col-lg-12 flex justify-center text-center">
                    <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                        <h2>Menjadi Agen OCTAnet</h2>
                        <p>Raih keuntungan setiap bulannya dengan menjadi agen resmi kami.</p>
                        <div class="hero-btns">
                            <a href="#" class="btn btn-primary">Skema Komisi</a>
                            <a href="#keuntungan" class="btn btn-outline">Lihat Keuntungan</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="500"
                                        data-purecounter-duration="1" class="purecounter"></span>+</h3>
                                <p>Total Keanggotaan</p>
                            </div>
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="100"
                                        data-purecounter-duration="1" class="purecounter"></span>%</h3>
                                <p>Legalitas tersertifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- Work Process Section -->
    <section id="langkah-pendaftaran" class="work-process section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div><span>5 Langkah Mudah</span><br><span class="description-title">Bergabung Menjadi Agen OCTAnet</span>
            </div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="steps-content">
                        <h2>Ada Pertanyaan atau Butuh Bantuan ?</h2>
                        <p class="lead">
                            Silahkan hubungi. kami siap memberikan
                            informasi yang anda butuhkan.
                        </p>
                        <div class="steps-cta">
                            <a href="#contact" class="btn btn-primary">Hubungi Kami</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="300">
                    <div class="steps-list">
                        <div class="step-item">
                            <div class="step-number">01</div>
                            <div class="step-content">
                                <h3>Discovery &amp; Analysis</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                    nec ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <div class="step-number">02</div>
                            <div class="step-content">
                                <h3>Strategy Development</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                    nec ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <div class="step-number">03</div>
                            <div class="step-content">
                                <h3>Implementation</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                    nec ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <div class="step-number">04</div>
                            <div class="step-content">
                                <h3>Monitoring &amp; Optimization</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                    nec ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <div class="step-number">05</div>
                            <div class="step-content">
                                <h3>Evaluation &amp; Reporting</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                    nec ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Work Process Section -->


    <!-- Team Section -->
    <section id="keuntungan" class="team section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div><span>Keuntungan menjadi <span class="description-title"> Agen OCTAnet</span></span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="team-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 800,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        },
                        "breakpoints": {
                            "576": {
                                "slidesPerView": 2
                            },
                            "992": {
                                "slidesPerView": 3
                            },
                            "1200": {
                                "slidesPerView": 4
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <div class=" text-[50px] text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                                        <path fill="currentColor"
                                            d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64m0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372m47.7-395.2l-25.4-5.9V348.6c38 5.2 61.5 29 65.5 58.2c.5 4 3.9 6.9 7.9 6.9h44.9c4.7 0 8.4-4.1 8-8.8c-6.1-62.3-57.4-102.3-125.9-109.2V263c0-4.4-3.6-8-8-8h-28.1c-4.4 0-8 3.6-8 8v33c-70.8 6.9-126.2 46-126.2 119c0 67.6 49.8 100.2 102.1 112.7l24.7 6.3v142.7c-44.2-5.9-69-29.5-74.1-61.3c-.6-3.8-4-6.6-7.9-6.6H363c-4.7 0-8.4 4-8 8.7c4.5 55 46.2 105.6 135.2 112.1V761c0 4.4 3.6 8 8 8h28.4c4.4 0 8-3.6 8-8.1l-.2-31.7c78.3-6.9 134.3-48.8 134.3-124c-.1-69.4-44.2-100.4-109-116.4m-68.6-16.2c-5.6-1.6-10.3-3.1-15-5c-33.8-12.2-49.5-31.9-49.5-57.3c0-36.3 27.5-57 64.5-61.7zM534.3 677V543.3c3.1.9 5.9 1.6 8.8 2.2c47.3 14.4 63.2 34.4 63.2 65.1c0 39.1-29.4 62.6-72 66.4" />
                                    </svg>
                                </div>
                                <p>Bisnis Tanpa modal, dapat pasive income setiap bulan.</p>
                            </div>
                        </div><!-- End Team Card -->
                    </div><!-- End slide item -->


                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <div class=" text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12 .186l3.617 3.082l4.737.378l.378 4.737L23.814 12l-3.082 3.617l-.378 4.737l-4.737.378L12 23.814l-3.616-3.082l-4.737-.378l-.378-4.737L.187 12l3.082-3.617l.378-4.737l4.737-.378zm0 2.628L9.188 5.21l-3.683.293l-.294 3.684L2.814 12l2.397 2.812l.294 3.684l3.683.294L12 21.186l2.813-2.396l3.683-.294l.294-3.684L21.186 12L18.79 9.188l-.294-3.684l-3.683-.293zM17.915 9.5L11 16.414L6.586 12L8 10.586l3 3l5.5-5.5z" />
                                    </svg>
                                </div>
                                <p>Legalitas penjualan internet secara aman dan sudah tersertifikasi.
                                </p>
                            </div>
                        </div><!-- End Team Card -->
                    </div><!-- End slide item -->


                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <div class=" text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M18.72 14.76c.35-.85.54-1.76.54-2.76c0-.72-.11-1.41-.3-2.05c-.65.15-1.33.23-2.04.23A9.07 9.07 0 0 1 9.5 6.34a9.2 9.2 0 0 1-4.73 4.88c-.04.25-.04.52-.04.78A7.27 7.27 0 0 0 12 19.27c1.05 0 2.06-.23 2.97-.64c.57 1.09.83 1.63.81 1.63c-1.64.55-2.91.82-3.78.82c-2.42 0-4.73-.95-6.43-2.66a9 9 0 0 1-2.24-3.69H2v-4.55h1.09a9.09 9.09 0 0 1 15.33-4.6a9 9 0 0 1 2.47 4.6H22v4.55h-.06L18.38 18l-5.3-.6v-1.67h4.83zm-9.45-2.99c.3 0 .59.12.8.34a1.136 1.136 0 0 1 0 1.6c-.21.21-.5.33-.8.33c-.63 0-1.14-.5-1.14-1.13s.51-1.14 1.14-1.14m5.45 0c.63 0 1.13.51 1.13 1.14s-.5 1.13-1.13 1.13s-1.14-.5-1.14-1.13a1.14 1.14 0 0 1 1.14-1.14" />
                                    </svg>
                                </div>
                                <p>Customer support dan teknisi yang siap membantu 1x24 jam.
                                </p>
                            </div>
                        </div><!-- End Team Card -->
                    </div><!-- End slide item -->

                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <div class=" text-[50px] text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 18h2v3h-2zm5 3v2H8v-2zm4-3H4a3.003 3.003 0 0 1-3-3V4a3.003 3.003 0 0 1 3-3h16a3.003 3.003 0 0 1 3 3v11a3.003 3.003 0 0 1-3 3M4 3a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1Z" />
                                        <path fill="currentColor"
                                            d="m16 15l-1.914-6.38L13 13l-1.309-3h-.331L10 14L8.843 9.933L8.309 11H5v-1h2.691L9 7l1.068 3.713L10.64 9h1.669l.487.973L14 4l2 8l.64-2H19v1h-1.64z" />
                                    </svg>
                                </div>
                                <p>Aplikasi yang dapat membantu memonitoring penujualan pelanggan.
                                </p>
                            </div>
                        </div><!-- End Team Card -->
                    </div><!-- End slide item -->

                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <div class=" text-[50px] text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="4">
                                            <path d="m18 24l-6 9l-8-4.5V42h40V15l-7 8l-6-5l-7 8z" />
                                            <path d="M4 28.5V17l7 6l5.5-8l6 3L31 9l5.5 4.5L44 6v9.5" />
                                        </g>
                                    </svg>
                                </div>
                                <p>Perluasan dan pengembangan area cakupan penjualan.
                                </p>
                            </div>
                        </div><!-- End Team Card -->
                    </div><!-- End slide item -->

                </div>
                <div class="swiper-pagination"></div>
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->
            </div>

        </div>

    </section><!-- /Team Section -->

    <!-- Consultation Section -->
    <section id="daftar-agen" class="consultation section light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="cta-content">
                            <h2>Daftar Menjadi Agen</h2>
                            <p>Jika Anda adalah orang yang mampu dan tepat untuk menjadi Agen kami, segera isi data
                                Anda secara lengkap pada form berikut ini.
                                Selanjutnya Anda akan dihubungi oleh tim kami untuk verifikasi.</p>
                        </div>
                    </div>
                    @if (request()->query('regis'))
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex justify-center">
                            <iconify-icon icon="lets-icons:check-fill"></iconify-icon>
                        </div>
                        <div class="text-[20px] font-semibold text-black text-center">Pengajuan Menjadi Agen Berhasil
                        </div>
                        <div class="cta-content text-center">
                            <p>Pastikan No. WhatsApp aktif agar tim kami mudah menghubungimu.</p>
                            <p>#Salam Octanet. </p>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                        <div class="cta-form">
                            <form id="formDaftarAgen" action="{{route('keagenan.store')}}" method="post"
                                class="php-email-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12  form-group">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="col-lg-6 form-group mt-3">
                                        <label for="no_hp" class="form-label">Nomor Telepon/HP Aktif</label>
                                        <input type="text" class="form-control" name="no_telp"
                                            placeholder="08123456789">
                                    </div>
                                    <div class="col-lg-6 form-group mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="">
                                    </div>
                                    <div class="col-lg-12 form-group mt-3">
                                        <label class="form-label d-block">Alamat Lengkap</label>
                                        <textarea name="alamat" class="w-[100%] p-[15px] mb-[-7px] border-slate-300 rounded-md" rows="5"
                                            id=""></textarea>
                                    </div>
                                    <div class="col-4 form-group mt-3">
                                        <label for="rt" class="form-label">RT</label>
                                         <input type="text" class="form-control" name="rt" placeholder="">
                                    </div>
                                    <div class="col-4 form-group mt-3">
                                        <label for="rw" class="form-label">RW</label>
                                         <input type="text" class="form-control" name="rw" placeholder="">
                                    </div>
                                    <div class="col-4 form-group mt-3">
                                        <label for="kd_pos" class="form-label">Kode Pos</label>
                                         <input type="text" class="form-control" name="kd_pos" placeholder="">
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit">Daftar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section><!-- /Consultation Section -->

    @push('scripts')
    <script src="{{asset('assets/back/js/jquery.validate.min.js')}}"></script>
    <script>
        $('#formDaftarAgen').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 5
                },
                no_telp: {
                    required: true
                },
                email: {
                    email: true,
                    required: true
                },
                alamat: {
                    required: true
                },
                rt: {
                    required: true
                },
                rw: {
                    required: true
                },
                kd_pos: {
                    required: true
                },
            },
            messages: {
                name: {
                    minlength: "Minimal 5 karakter !",
                    required: "Nama Lengkap harus di isi !"
                },
                no_telp: {
                    required: "Nomor Telepon/HP harus di isi !",
                    number: true
                },
                email: {
                    email: "Masukan email dengan benar !",
                    required: "Email harus di isi !"
                },
                alamat: {
                    required: "Alamat Lengkap harus di isi !"
                },
                rt: {
                    required: "RT harus di isi !"
                },
                rw: {
                    required: "RW harus di isi !"
                },
                kd_pos: {
                    required: "Kode Pos harus di isi !"
                },
            }
        })
    </script>
    @endpush

</x-guest.guest-layout>