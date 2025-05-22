<x-agen.app-layout>

    @push('styles')
    <style>
        label.error {
            font-size: smaller;
            color: red;

        }

        input.error,
        select.error,
        textarea.error {
            border: 1px solid red;
        }
    </style>
    @endpush

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Edit Pelanggan</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('agen.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Edit Pelanggan</li>
        </ul>
    </div>


    <div class="row flex justify-center">
        <div class="col col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Edit Pelanggan</h6>
                </div>
                <div class="row gy-3">
                    <div class="card-body">
                        <form id="myFormEdit" method="POST" action="{{route('agen.pelanggan.update',$client->id)}}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gy-3">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="nama" class="form-label">Nama Pelanggan</label>
                                    <input type="text" name="nama" value="{{$client->nama}}"
                                        class="form-control rounded-lg">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="number" id="nik" name="nik" value="{{$client->nik}}"
                                        class="form-control rounded-lg" disabled readonly>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" value="{{$client->email}}"
                                        class="form-control rounded-lg">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tglLahir" value="{{$client->tgl_lahir}}"
                                        class="form-control rounded-lg">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="noHP1" class="form-label">No HP 1</label>
                                    <input type="number" name="noHp1" value="{{$client->no_hp1}}"
                                        class="form-control rounded-lg">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="noHp2" class="form-label">No HP 2</label>
                                    <input type="number" name="noHp2" value="{$client->no_hp2}"
                                        class="form-control rounded-lg">
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <label for="layanan" class="form-label">Paket Layanan</label>
                                    <select name="layanan" class="form-select">
                                        <option value="">-- Pilihan Paket Layanan --</option>
                                        @foreach ($layanans as $layanan)
                                        <option value="{{$layanan->id}}"
                                            {{ $client->produk_id === $layanan->id ? 'selected' : '' }}>
                                            {{$layanan->Kategori->nama}} - {{ $layanan->nama }}</span>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <label for="area" class="form-label">Area Coverage Pelanggan</label>
                                    <select name="area" class="form-select">
                                        <option value="">-- Pilihan Area Coverage Pelanggan --</option>
                                        @foreach ($areas as $area)
                                        <option value="{{$area->id}}"
                                            {{ $client->area_id === $area->id ? 'selected' : '' }}>
                                            {{ $area->nama }}</span>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="waktu" class="form-label">Waktu/Tanggal Pemasangan</label>
                                    <input type="date" value="{{ $client->tgl_pasang }}" name="waktu"
                                        class="form-control rounded-lg">
                                </div>
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat Pemasangan</label>
                                    <textarea name="alamat" class="form-control">{{ $client->alamat }}</textarea>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="long" class="form-label">Longitude</label>
                                    <input type="text" name="long" value="{{$client->long}}"
                                        class="form-control rounded-lg">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label for="lat" class="form-label">Latitude</label>
                                    <input type="text" name="lat" value="{{$client->lat}}"
                                        class="form-control rounded-lg">
                                </div>
                                <div class="col-12">
                                    <div class="card h-100 p-0">
                                        <div class="card-header border-bottom bg-base py-16 px-24 text-center">
                                            <h6 class="text-md">Upload Foto Rumah Pelanggan</h6>
                                        </div>

                                        <div class="card-body p-24 flex justify-center">
                                            <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                                <div
                                                    class="uploaded-img position-relative border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                                    <button type="button"
                                                        class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                                        <iconify-icon icon="radix-icons:cross-2"
                                                            class="text-xl text-danger-600">
                                                        </iconify-icon>
                                                    </button>
                                                    <img class="uploaded-img__preview"
                                                        class="w-100 h-100 object-fit-cover"
                                                        src="{{asset('storage/' . $client->img)}}" alt="image">
                                                </div>

                                                <label
                                                    class="upload-file d-none border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                                    for="upload-file">
                                                    <iconify-icon icon="solar:camera-outline"
                                                        class="text-xl text-secondary-light">
                                                    </iconify-icon>
                                                    <input id="upload-file" type="file" name="imgRumah">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 flex justify-center gap-2">
                                    <a href="{{route('agen.pelanggan')}}"
                                        class="btn bg-slate-200 hover:bg-slate-300 btn-sm rounded-md w-100 mt-3">Back</a>
                                    <button type="submit"
                                        class="btn btn-primary btn-sm rounded-md w-100 mt-3">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>
    </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {

            //edit
            const label = document.querySelector('.upload-file');
            const fileInput = document.getElementById("upload-file");
            const uploadedImgContainer = document.querySelector(".uploaded-img");
            const removeButton = document.querySelector(".uploaded-img__remove");
            const imagePreview = document.querySelector(".uploaded-img__preview");


            // =============================== Upload Edit Image start ================================================
            fileInput.addEventListener("change", (e) => {
                if (e.target.files.length) {
                    const src = URL.createObjectURL(e.target.files[0]);
                    imagePreview.src = src;
                    label.classList.add('d-none');
                    uploadedImgContainer.classList.remove('d-none');
                }
            });

            removeButton.addEventListener("click", () => {
                imagePreview.src = "";
                label.classList.remove('d-none');
                uploadedImgContainer.classList.add('d-none');
                fileInput.value = "";
            });
            // =============================== Upload Add Image end ===============================================

            $('#myFormEdit').validate({
                rules: {
                    nama: {
                        required: true,
                        minlength: 3
                    },
                    nik: {
                        required: true,
                        minlength: 16,
                        number: true,
                        // remote: {
                        //     url: '/agen/pelanggan/cek-nik', // Laravel route
                        //     type: 'post',
                        //     data: {
                        //         nik: function() {
                        //             return $('#nik').val();
                        //         },
                        //         _token: $('meta[name="csrf-token"]').attr('content') // CSRF token
                        //     }
                        // }
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    tglLahir: {
                        required: true
                    },
                    noHp1: {
                        required: true,
                        minlength: 10,
                        digits: true
                    },
                    noHp2: {
                        minlength: 10
                    },
                    layanan: {
                        required: true
                    },
                    area: {
                        required: true
                    },
                    waktu: {
                        required: true
                    },
                    alamat: {
                        required: true
                    },
                    long: {
                        required: true
                    },
                    lat: {
                        required: true
                    },
                    imgRumah: {
                        required: true,
                    },
                },
                messages: {
                    nama: {
                        required: 'Nama harus di isi !',
                        minlength: 'Nama minimal 3 karakter'
                    },
                    nik: {
                        required: 'NIK harus di isi !',
                        minlength: 'NIK minimal 16 karakter',
                        number: 'NIK tidak valid',
                        // remote: "NIK ini telah digunakan !"
                    },
                    email: {
                        required: 'Email harus di isi !',
                        email: 'Email tidak valid'
                    },
                    tglLahir: {
                        required: 'Tanggal Lahir harus di isi !',
                    },
                    noHp1: {
                        required: 'No HP 1 harus di isi !',
                        minlength: 'No HP 1 minimal 10 karakter',
                        digits: 'No HP 1 harus berupa angka !',
                    },
                    noHp2: {
                        minlength: 'No HP 2 minimal 10 karakter',
                    },
                    layanan: {
                        required: 'Layanan harus di isi !',
                    },
                    area: {
                        required: 'Area Coverage Pelanggan harus di isi !',
                    },
                    waktu: {
                        required: 'Tanggal/Waktu Pemasangan harus di isi !',
                    },
                    alamat: {
                        required: 'Alamat Pemasangan harus di isi !',
                    },
                    long: {
                        required: 'Longitude harus di isi !',
                    },
                    lat: {
                        required: 'Latitude harus di isi !',
                    },
                    imgRumah: {
                        required: 'Upload Foto Rumah harus di isi !',
                    },
                }
            })
        });
    </script>
    @endpush

</x-agen.app-layout>