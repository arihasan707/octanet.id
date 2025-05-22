<x-admin.app-layout>
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Pelanggan Baru</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Permintaan</li>
            <li>-</li>
            <li class="fw-medium">Pelanggan Baru</li>
        </ul>
    </div>

    <div class="card basic-data-table">
        <div class="card-header flex justify-between items-center">
            <h5 class="card-title mb-0">Daftar Pelanggan Baru</h5>
        </div>

        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Hp 1</th>
                        <th scope="col">Coverage Area</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->no_hp1}}</td>
                        <td>{{ $row->Area->nama }}</td>
                        <td>
                            @switch($row->status)
                            @case('aktif')
                            <span
                                class="badge text-sm fw-semibold rounded-pill bg-success px-20 py-6 radius-4 text-white">{{ $row->status }}
                            </span>
                            @break
                            @case('terblokir')
                            <span
                                class="badge text-sm fw-semibold rounded-pill bg-danger px-20 py-6 radius-4 text-white">{{ $row->status }}
                            </span>
                            @break
                            @case('berhenti')
                            <span
                                class="badge text-sm fw-semibold rounded-pill bg-secondary px-20 py-6 radius-4 text-white">{{ $row->status }}
                            </span>
                            @break
                            @default
                            <span
                                class="badge text-sm fw-semibold rounded-pill bg-warning-600 px-20 py-6 radius-4 text-white">{{ $row->status }}
                            </span>
                            @endswitch
                        </td>
                        <td class="text-white">
                            <button type="button" data-bs-target="#cek{{$row->id}}" data-bs-toggle="modal"
                                class="w-32-px h-32-px bg-primary rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </button>
                            <!-- <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <!-- Modal -->
    @foreach ($data as $row)
    <div class="modal fade" id="cek{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Pertinjau</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row gy-3">
                            <div class="col-lg-6 col-sm-12">
                                <label for="nama" class="form-label">Nama Pelanggan</label>
                                <input type="text" name="nama" value="{{$row->nama}}" class="form-control rounded-lg"
                                    disabled readonly>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="number" id="nik" name="nik" value="{{$row->nik}}"
                                    class="form-control rounded-lg" disabled readonly>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" value="{{$row->email}}" class="form-control rounded-lg"
                                    disabled readonly>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tglLahir" value="{{$row->tgl_lahir}}"
                                    class="form-control rounded-lg" disabled readonly>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="noHP1" class="form-label">No HP 1</label>
                                <input type="number" name="noHp1" value="{{$row->no_hp1}}"
                                    class="form-control rounded-lg" disabled readonly>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="noHp2" class="form-label">No HP 2</label>
                                <input type="number" name="noHp2" value="{$row->no_hp2}" class="form-control rounded-lg"
                                    disabled readonly>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="layanan" class="form-label">Paket Layanan</label>
                                <select name="layanan" class="form-select" disabled readonly>
                                    <option value="">-- Pilihan Paket Layanan --</option>
                                    <option value="{{$row->produk_id}}" {{ $row->produk_id ? 'selected' : '' }}>
                                        {{$row->Product->Kategori->nama}} - {{ $row->Product->nama }}</span>
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <label for="area" class="form-label">Area Coverage Pelanggan</label>
                                <select name="area" class="form-select" disabled readonly>
                                    <option value="">-- Pilihan Area Coverage Pelanggan --</option>
                                    <option value="{{$row->area_id}}" {{ $row->area_id ? 'selected' : '' }}>
                                        {{ $row->Area->nama }}</span>
                                    </option>
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
                            <div class="col-12">
                                <div class="card h-100 p-0">
                                    <div class="card-header border-bottom bg-base py-16 px-24 text-center">
                                        <h6 class="text-md">Foto Rumah Pelanggan</h6>
                                    </div>

                                    <div class="card-body p-24">
                                        <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                            <div
                                                class="uploaded-img position-relative border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                                <button type="button"
                                                    class="uploaded-img__remove d-none position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                                    <iconify-icon icon="radix-icons:cross-2"
                                                        class="text-xl text-danger-600">
                                                    </iconify-icon>
                                                </button>
                                                <img class="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                                    src="{{asset('storage/' . $row->img)}}" alt="image">
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
                                        <div>
                                            <a href="{{route('admin.download',['filename' => $row->img])}}"
                                                class="btn btn-primary btn-sm flex items-center justify-center text-md">
                                                <iconify-icon icon="ic:baseline-download">
                                                </iconify-icon>
                                                Unduh
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" data-id="{{$row->id}}" data-user="{{$row->user_id}}"
                                class="btn btn-danger btn-sm tolak">Tolak</button>
                            <button type="button" data-id="{{$row->id}}" data-user="{{$row->user_id}}"
                                class="btn btn-success btn-sm konfirm">Konfirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach



    @push('scripts')
    <!-- main js -->
    <script src="assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            let table = new DataTable('#dataTable');

            $(document).on('click', '.konfirm', function(e) {
                e.preventDefault;
                let id = $(this).data('id');
                let user = $(this).data('user');
                let url = "{{route('admin.req.pelanggan.update', ['id'=> ':id','konfirm' => true])}}"
                url = url.replace(':id', id);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        user: user
                    },
                    dataType: "JSON",
                    success: function(response) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(function() {
                            location.reload();
                        })
                    }
                });
            });

            $(document).on('click', '.tolak', function(e) {
                e.preventDefault;
                let id = $(this).data('id');
                let user = $(this).data('user');
                let url = "{{route('admin.req.pelanggan.update', ['id'=> ':id','konfirm' => false])}}"
                url = url.replace(':id', id);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        user: user
                    },
                    dataType: "JSON",
                    success: function(response) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(function() {
                            location.reload();
                        })
                    }
                });
            });

        });
    </script>
    @endpush



</x-admin.app-layout>