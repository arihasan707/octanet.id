<x-admin.app-layout>

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
        <h6 class="fw-semibold mb-0">Produk</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Produk</li>
        </ul>
    </div>

    <div class="card basic-data-table">
        <div class="card-header flex justify-between items-center">
            <h5 class="card-title mb-0">Daftar Produk</h5>
            <button data-bs-toggle="modal" data-bs-target="#addModalProduk"
                class="btn btn-primary text-white radius-8 px-16 py-9">Tambah
                Data</button>
        </div>

        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kecepatan Internet</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->Kategori->nama }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->kecepatan }}</td>
                            <td>@rupiah($row->harga)</td>
                            <td class="text-white">
                                <form id="delete-form" method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button data-id="{{ $row->id }}"
                                    class="delete-btn w-32-px h-32-px bg-danger rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                </button>
                                <button
                                    data-bs-target="#editModalProduk{{ $row->id }}" data-bs-toggle="modal"
                                    class="w-32-px h-32-px bg-success rounded-circle d-inline-flex align-items-center justify-content-center">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="addModalProduk" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Tambah Data Produk </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                    <form id="myFormAdd" action="{{ route('admin.product.store') }}" method="post">
                        @csrf
                        <div class="col-md-6 col-lg-12">
                            <div class="row gy-3">
                                <div class="col-12">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Kategori Produk</label>
                                    <select name="kategori" class="form-select">
                                        <option value="">-- Pilih salah satu --</option>
                                        @foreach ($kategoris as $row)
                                            <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Harga</label>
                                    <input type="text" id="harga" name="harga" placeholder="Rp 0"
                                        class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Layanan</label>
                                    <input type="text" name="layanan" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Kecepatan</label>
                                    <input type="text" name="kecepatan" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Data Quota</label>
                                    <input type="text" name="data_quota" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" id="label">Akses Perangkat</label>
                                    <input type="text" name="akses_perangkat" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Alat Wifi/Router</label>
                                    <input type="text" name="alat_wifi" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Biaya Pemasangan</label>
                                    <input type="text" name="biaya_pasang" class="form-control">
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

    <!-- Modal Edit -->
    @foreach ($data as $row)      
    <div class="modal fade" id="editModalProduk{{ $row->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Edit Data Produk </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                    <form id="myFormAdd" action="{{ route('admin.product.store') }}" method="post">
                        @csrf
                        <div class="col-md-6 col-lg-12">
                            <div class="row gy-3">
                                <div class="col-12">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="nama" value="{{ $row->nama }}" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Kategori Produk</label>
                                    <select name="kategori" class="form-select">
                                        <option value="">-- Pilih salah satu --</option>
                                        @foreach ($kategoris as $row)
                                            <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Harga</label>
                                    <input type="text" id="harga" value="{{ $row->harga }}" name="harga" placeholder="Rp 0"
                                        class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Layanan</label>
                                    <input type="text" name="layanan" value="{{ $row->layanan }}" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Kecepatan</label>
                                    <input type="text" name="kecepatan" value="{{ $row->kecepatan }}" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Data Quota</label>
                                    <input type="text" name="data_quota" value="{{ $row->data_quota }}" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" id="label">Akses Perangkat</label>
                                    <input type="text" name="akses_perangkat" value="{{ $row->akses_perangkat }}" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Alat Wifi/Router</label>
                                    <input type="text" name="alat_wifi" value="{{ $row->alat_wifi }}" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Biaya Pemasangan</label>
                                    <input type="text" name="biaya_pasang" value="{{ $row->biaya_pasang }}" class="form-control">
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
    @endforeach

    @push('scripts')
        <!-- main js -->
        <script src="{{ asset('assets/back/js/jquery.validate.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            // console.log(bootstrap?.Modal?.VERSION);
            document.addEventListener('DOMContentLoaded', function() {
                const modalEl = document.getElementById('addModalProduk');
                const modal = new bootstrap.Modal(modalEl);

                modalEl.addEventListener('show.bs.modal', function() {
                    const kategori = document.querySelector("select[name='kategori']");
                    const labelMapping = {
                        'Broadband Bisnis': 'IP Address',
                        'Home Internet': 'Akses Perangkat',
                        'Dedicated': 'IP Address',
                        'Metro-E': 'IP Address',
                    };

                    // Label default (kalau tidak ada di mapping)
                    const defaultLabel = 'Nama Produk';

                    kategori.addEventListener('change', function(e) {
                        const text = e.target.options[e.target.selectedIndex].text;

                        // Cek apakah kategori ada dalam mapping
                        label.innerHTML = labelMapping[text] || defaultLabel;
                    });


                    const elHarga = document.getElementById('harga');
                    elHarga.addEventListener('input', function(e) {
                        // Ambil semua angka saja
                        let val = e.target.value.replace(/\D/g, ""); // \D = selain digit

                        // Jika kosong → kosongkan field
                        if (val === "") {
                            e.target.value = "";
                            return;
                        }

                        // Konversi ke number kemudian format
                        let number = parseInt(val, 10);

                        e.target.value = "Rp " + number.toLocaleString("id-ID");
                    });

                    const elBiayaPasang = document.querySelector("input[name='biaya_pasang']")
                    elBiayaPasang.addEventListener('input', function(e) {
                        let value = e.target.value;

                        // Hilangkan spasi dan Rp
                        let clean = value.replace(/Rp\s?/i, '').replace(/\./g, '');

                        // Jika ada huruf → tampilkan sebagai teks biasa (tanpa Rp)
                        if (/[a-zA-Z]/.test(clean)) {
                            e.target.value = clean;
                            return;
                        }

                        // Jika kosong, jangan tampilkan Rp
                        if (clean.trim() === "") {
                            e.target.value = "";
                            return;
                        }

                        // Format angka ke Rupiah
                        let number = parseInt(clean);
                        if (!isNaN(number)) {
                            e.target.value = "Rp " + number.toLocaleString("id-ID");
                        }
                    });
                })


            })
        </script>

        <script>
            $(document).ready(function() {

                $('.delete-btn').click(function(e) {
                    e.preventDefault();
                    let id = $(this).data('id');

                    Swal.fire({
                        title: 'Yakin ingin menghapus?',
                        text: 'Data yang dihapus tidak dapat dikembalikan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            let form = $('#delete-form');
                            form.attr('action', `/admin/produk/${id}/delete`);
                            form.submit();
                        }
                    });
                });

                let table = new DataTable('#dataTable');

                $('#myFormAdd').validate({
                    rules: {
                        nama: {
                            required: true,
                            minlength: 3
                        },
                        kategori: {
                            required: true,
                        },
                        harga: {
                            required: true,
                        },
                        layanan: {
                            required: true
                        },
                        kecepatan: {
                            required: true,
                        },
                        data_quota: {
                            required: true
                        },
                        akses_perangkat: {
                            required: true
                        },
                        alat_wifi: {
                            required: true
                        },
                        biaya_pasang: {
                            required: true
                        },
                    },
                    messages: {
                        nama: {
                            required: 'Nama harus di isi !',
                            minlength: 'Nama minimal 3 karakter'
                        },
                        kategori: {
                            required: 'Kategori harus di isi !',
                        },
                        harga: {
                            required: 'Harga harus di isi !',
                        },
                        layanan: {
                            required: 'Layanan harus di isi !',
                        },
                        kecepatan: {
                            required: 'Kecepatan harus di isi !',
                        },
                        data_quota: {
                            required: 'Data Quota harus di isi !',
                        },
                        akses_perangkat: {
                            required: 'Akses Perangkat harus di isi !',
                        },
                        alat_wifi: {
                            required: 'Alat Wifi harus di isi !',
                        },
                        biaya_pasang: {
                            required: 'Biaya Pasang harus di isi !',
                        },
                    }
                })
            })
        </script>
    @endpush
</x-admin.app-layout>
