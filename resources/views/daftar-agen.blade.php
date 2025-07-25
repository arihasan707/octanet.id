<x-guest.form-daftar-layout>

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
            margin-top: 2px;
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

    <!-- Consultation Section -->
    <section id="daftar-agen" class="consultation section light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
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
                                </div>
                            </form>
                        </div>
                    </div>
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
                                        <textarea name="alamat" class="w-[100%] border-slate-300 rounded-md" rows="5"
                                            id=""></textarea>
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
                </div>
            </div>
        </div>
    </section><!-- /Consultation Section -->

</x-guest.form-daftar-layout>