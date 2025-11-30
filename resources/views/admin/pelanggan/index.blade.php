<x-admin.app-layout>

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Pelanggan</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Pelanggan</li>
        </ul>
    </div>

    <div class="row mb-3 mt-3">
        <div class="col-12 flex justify-end gap-3">
            <div class="col-4">
                <input type="text" id="filter-nama" class="form-control dark:bg-[#1b2431]" placeholder="Cari Nama">
            </div>
            <div class="col-4">
                <select id="filter-status" class="form-select dark:bg-[#1b2431]">
                    <option value="">-- Semua Status --</option>
                    <option value="aktif">Aktif</option>
                    <option value="ditolak">Ditolak</option>
                    <option value="terblokir">Terblokir</option>
                    <option value="berhenti">Berhenti</option>
                </select>
            </div>
            <div>
                <button id="btn-filter" class="btn btn-primary">Filter</button>
                <button id="btn-reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
    </div>

    <div class="card basic-data-table">
        <div class="card-header items-center">
            <h5 class="card-title mb-0">Daftar Pelanggan</h5>
        </div>



        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Hp 1</th>
                        <th scope="col">Email</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    </div>

    <!-- Modal edit -->
    @foreach ($data as $row)
    <div class="modal fade" id="editPelangganModal{{$row->id}}" data-bs-backdrop="static" tabindex="-1"
        data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Detail Data Pelanggan </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                    <form action="{{route('admin.pelanggan.update',$row->id)}}" method="post">
                        @csrf
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
                                    <option {{ $row->produk_id ? 'selected' : '' }}>
                                        {{ $row->Product->nama }}</span>
                                    </option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="area" class="form-label">Area Coverage Pelanggan</label>
                                <select name="area" class="form-select" disabled readonly>
                                    <option {{ $row->area_id ? 'selected' : '' }}>
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
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="aktif" {{ $row->status === 'aktif' ? 'selected' : '' }}>
                                        Aktif</span>
                                    </option>
                                    <option value="terblokir" {{ $row->status === 'terblokir' ? 'selected' : '' }}>
                                        Terblokir</span>
                                    </option>
                                    <option value="berhenti" {{ $row->status === 'berhenti' ? 'selected' : '' }}>
                                        Berhenti</span>
                                    </option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="card h-100 p-0">
                                    <div class="card-header border-bottom bg-base py-16 px-24 text-center">
                                        <h6 class="text-md">Upload Foto Rumah Pelanggan</h6>
                                    </div>

                                    <div class="card-body p-24">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Apply</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    @push('scripts')
    <script>
        $(document).ready(function() {
            let table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.pelanggan") }}',
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
                        data: 'product',
                        name: 'product'
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

            $('#btn-filter').click(function() {
                table.draw();
            });

            $('#btn-reset').click(function() {
                $('#filter-nama').val('');
                $('#filter-status').val('');
                table.draw();
            });
        });
    </script>
    @endpush
</x-admin.app-layout>