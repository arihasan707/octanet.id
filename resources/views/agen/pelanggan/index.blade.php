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
        <h6 class="fw-semibold mb-0">Pelanggan</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('agen.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Pelanggan</li>
        </ul>
    </div>

    <div class="card basic-data-table">
        <div class="card-header flex justify-between items-center">
            <h5 class="card-title mb-0">Daftar Pelanggan</h5>
            <a href="#" data-bs-toggle="modal" data-bs-target="#addPelangganModal"
                class="btn btn-primary text-white radius-8 px-16 py-9">Tambah
                Data</a>
        </div>

        <div class="card-body overflow-auto">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Hp 1</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="historiPembayaranModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Histori pembayaran
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center" id="invoice">
                                    <div class="col-12">
                                        <div class="shadow-4 border radius-8">
                                            <div class="py-28 px-20">
                                                <div
                                                    class="d-flex flex-wrap justify-content-between align-items-end gap-3">
                                                    <div>
                                                        <h6 class="text-md mb-1">Informasi Detail</h6>
                                                        <table class="text-sm text-secondary-light">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Layanan</td>
                                                                    <td class="ps-8" id="layanan">: </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nama</td>
                                                                    <td class="ps-8" id="nama">: </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td class="ps-8" id="email">: </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <table class="text-sm text-secondary-light">
                                                            <tbody>
                                                                <tr>
                                                                    <td>No HP 1</td>
                                                                    <td class="ps-8" id="no_hp1">:
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No HP 2</td>
                                                                    <td class="ps-8" id="no_hp2">:
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 mt-3">
                                                    <div class="col-12 flex justify-end gap-3">
                                                        <div class="col-4">
                                                            <select id="filter-status" class="form-control">
                                                                <option value="">-- Semua Status --</option>
                                                                <option value="paid">Lunas</option>
                                                                <option value="unpaid">Belum Bayar</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <button id="btn-filter"
                                                                class="btn btn-primary">Filter</button>
                                                            <button id="btn-reset"
                                                                class="btn btn-secondary">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-24">
                                                    <div class="table-responsive scroll-md h-80">
                                                        <table class="table bordered-table text-sm"
                                                            id="historiPembayaran">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="text-sm">No</th>
                                                                    <th scope="col" class="text-sm">Priode </th>
                                                                    <th scope="col" class="text-sm">Total</th>
                                                                    <th scope="col" class="text-sm">Status</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="addPelangganModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Tambah Data Pelanggan </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                    <form id="myFormAdd" method="POST" action="{{route('agen.pelanggan.store')}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-6">
                                <label for="nama" class="form-label">Nama Pelanggan</label>
                                <input type="text" name="nama" class="form-control rounded-lg">
                            </div>
                            <div class="col-6">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" id="nik" name="nik" class="form-control rounded-lg">
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control rounded-lg">
                            </div>
                            <div class="col-6">
                                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tglLahir" class="form-control rounded-lg">
                            </div>
                            <div class="col-6">
                                <label for="noHP1" class="form-label">No HP 1</label>
                                <input type="text" name="noHp1" class="form-control rounded-lg no_hp">
                            </div>
                            <div class="col-6">
                                <label for="noHp2" class="form-label">No HP 2</label>
                                <input type="text" name="noHp2" class="form-control rounded-lg no_hp">
                            </div>
                            <div class="col-12">
                                <label for="layanan" class="form-label">Paket Layanan</label>
                                <select name="layanan" class="form-select rounded-lg">
                                    <option value="">-- Pilihan Paket Layanan --</option>
                                    @foreach ($layanans as $row)
                                    <option value="{{$row->id}}">{{ $row->Kategori->nama }} -
                                        {{$row->nama}}</span>
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="area" class="form-label">Area Pelanggan</label>
                                <select name="area" class="form-select">
                                    <option value="">-- Pilihan Area Pelanggan --</option>
                                    @foreach ($areas as $row)
                                    <option value="{{$row->id}}">{{ $row->nama }}</span>
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="waktu" class="form-label">Waktu/Tanggal Pemasangan</label>
                                <input type="date" name="waktu" class="form-control rounded-lg">
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat Pemasangan</label>
                                <textarea name="alamat" class="form-control border-[#6b7280]"></textarea>
                            </div>
                            <div class="col-6">
                                <label for="long" class="form-label">Longitude</label>
                                <input type="text" name="long" class="form-control rounded-lg">
                            </div>
                            <div class="col-6">
                                <label for="lat" class="form-label">Latitude</label>
                                <input type="text" name="lat" class="form-control rounded-lg">
                            </div>
                            <div class="col-12">
                                <div class="card h-100 p-0">
                                    <div class="card-header border-bottom bg-base py-16 px-24 text-center">
                                        <h6 class="text-md">Upload Foto Rumah Pelanggan</h6>
                                    </div>
                                    <div class="card-body p-24 flex justify-center">
                                        <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                            <div
                                                class="uploaded-img position-relative border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 d-none">
                                                <button type="button"
                                                    class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                                    <iconify-icon icon="radix-icons:cross-2"
                                                        class="text-xl text-danger-600"></iconify-icon>
                                                </button>
                                                <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                                    src="" alt="image">
                                            </div>

                                            <label
                                                class="upload-file border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                                for="upload-file">
                                                <iconify-icon icon="solar:camera-outline"
                                                    class="text-xl text-secondary-light"></iconify-icon>
                                                <input id="upload-file" type="file" name="imgRumah">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal view -->
    @foreach ($data as $row)
    <div class="modal fade" id="viewPelangganModal{{$row->id}}" data-bs-backdrop="static" tabindex="-1"
        data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Detail Data Pelanggan </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                    <form>
                        <div class="row gy-3">
                            <div class="col-6">
                                <label for="nama" class="form-label">Nama Pelanggan</label>
                                <input type="text" name="nama" value="{{$row->nama}}" class="form-control rounded-lg"
                                    disabled readonly>
                            </div>
                            <div class="col-6">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="number" id="nik" name="nik" value="{{$row->nik}}"
                                    class="form-control rounded-lg" disabled readonly>
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" value="{{$row->email}}" class="form-control rounded-lg"
                                    disabled readonly>
                            </div>
                            <div class="col-6">
                                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tglLahir" value="{{$row->tgl_lahir}}"
                                    class="form-control rounded-lg" disabled readonly>
                            </div>
                            <div class="col-6">
                                <label for="noHP1" class="form-label">No HP 1</label>
                                <input type="number" name="noHp1" value="{{$row->no_hp1}}"
                                    class="form-control rounded-lg" disabled readonly>
                            </div>
                            <div class="col-6">
                                <label for="noHp2" class="form-label">No HP 2</label>
                                <input type="number" name="noHp2" value="{$row->no_hp2}" class="form-control rounded-lg"
                                    disabled readonly>
                            </div>
                            <div class="col-12">
                                <label for="layanan" class="form-label">Paket Layanan</label>
                                <select name="layanan" class="form-select" disabled readonly>
                                    <option value="">-- Pilihan Paket Layanan --</option>
                                    @foreach ($layanans as $layanan)
                                    <option value="{{$layanan->id}}"
                                        {{ $row->produk_id === $layanan->id ? 'selected' : '' }}>
                                        {{ $layanan->Kategori->nama }} - {{ $layanan->nama }}</span>
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="area" class="form-label">Area Pelanggan</label>
                                <select name="area" class="form-select" disabled readonly>
                                    <option value="">-- Pilihan Area Pelanggan --</option>
                                    @foreach ($areas as $area)
                                    <option value="{{$area->id}}" {{ $row->area_id === $area->id ? 'selected' : '' }}>
                                        {{ $area->nama }}</span>
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="waktu" class="form-label">Waktu/Tanggal Pemasangan</label>
                                <input type="date" value="{{ $row->tgl_pasang }}" name="waktu"
                                    class="form-control rounded-lg" disabled readonly>
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat Pemasangan</label>
                                <textarea name="alamat" class="form-control" disabled
                                    readonly>{{ $row->alamat }}</textarea>
                            </div>
                            <div class="col-6">
                                <label for="long" class="form-label">Longitude</label>
                                <input type="text" name="long" value="{{$row->long}}" class="form-control" disabled
                                    readonly>
                            </div>
                            <div class="col-6">
                                <label for="lat" class="form-label">Latitude</label>
                                <input type="text" name="lat" value="{{$row->lat}}" class="form-control" disabled
                                    readonly>
                            </div>
                            <div class="col-12">
                                <div class="card h-100 p-0">
                                    <div class="card-header border-bottom bg-base py-16 px-24 text-center">
                                        <h6 class="text-md">Upload Foto Rumah Pelanggan</h6>
                                    </div>

                                    <div class="card-body p-24 flex justify-center">
                                        <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                            <div
                                                class="uploaded-img1 position-relative border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                                <img class="uploaded-img__preview1" class="w-100 h-100 object-fit-cover"
                                                    src="{{asset('storage/' . $row->img)}}" alt="image">
                                            </div>

                                            <label
                                                class="upload-file1 d-none border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                                for="upload-file">
                                                <iconify-icon icon="solar:camera-outline"
                                                    class="text-xl text-secondary-light"></iconify-icon>
                                                <input class="upload" type="file" name="imgRumah">
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <a href="{{route('agen.pelanggan.edit',$row->id)}}" class="btn btn-sm btn-primary tes">Edit</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    @push('scripts')
    <!-- main js -->
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {

            // number only nik
            $('#nik').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            // number only no hp
            $('.no_hp').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            //add
            const label = document.querySelector('.upload-file');
            const fileInput = document.getElementById("upload-file");
            const uploadedImgContainer = document.querySelector(".uploaded-img");
            const removeButton = document.querySelector(".uploaded-img__remove");
            const imagePreview = document.getElementById("uploaded-img__preview");


            // =============================== Upload Add Image start ================================================
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


            let table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("agen.pelanggan") }}',
                    data: function(d) {
                        d.nama = $('#filter-nama').val();
                        d.status = $('#filter-status').val();
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'no_hp1',
                        name: 'no_hp1'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                pageLength: 10
            });


            let historiTable;
            $(document).on('click', '.open-modal', function() {
                const id = $(this).data('id');
                if ($.fn.DataTable.isDataTable('#historiPembayaran')) {
                    $('#historiPembayaran').DataTable().destroy();
                }

                historiTable = $('#historiPembayaran').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: `/agen/pelanggan/${id}/histori-pembayaran`,
                        // data: function(d) {
                        //     d.nama = $('#filter-nama').val();
                        //     d.status = $('#filter-status').val();
                        // }
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'id'
                        },
                        {
                            data: 'priode',
                            name: 'priode'
                        },
                        {
                            data: 'amount',
                            name: 'amount'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            orderable: false,
                            searchable: false
                        },
                    ],
                    dom: 'Bfrtip',
                    buttons: [
                        'pdfHtml5'
                    ],
                    pageLength: 10,
                    searching: false
                });

                historiTable.on('xhr.dt', function(e, settings, json, xhr) {
                    console.log(json);

                    $('#layanan').text(': ' + json.data[0].client.product.kategori.nama + ' - ' +
                        json
                        .data[0].client.product.nama);
                    $('#nama').text(': ' + json.data[0].client.nama);
                    $('#email').text(': ' + json.data[0].client.email);
                    $('#no_hp1').text(': ' + json.data[0].client.no_hp1);
                    $('#no_hp2').text(': ' + json.data[0].client.no_hp2);
                })

            })

            $('#myFormAdd').validate({
                rules: {
                    nama: {
                        required: true,
                        minlength: 3
                    },
                    nik: {
                        required: true,
                        minlength: 16,
                        number: true,
                        remote: {
                            url: '/agen/pelanggan/cek-nik', // Laravel route
                            type: 'post',
                            data: {
                                nik: function() {
                                    return $('#nik').val();
                                },
                                _token: $('meta[name="csrf-token"]').attr('content') // CSRF token
                            }
                        }
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
                        required: true,
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
                        remote: "NIK ini telah digunakan !"
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
                        required: 'Area Pelanggan harus di isi !',
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