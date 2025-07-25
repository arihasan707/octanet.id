<x-admin.app-layout>
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Agen</h6>
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
            <li class="fw-medium">Agen Baru</li>
        </ul>
    </div>

    <div class="card basic-data-table">
        <div class="card-header flex justify-between items-center">
            <h5 class="card-title mb-0">Permintaan Agen Baru</h5>
        </div>

        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Telepon/HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Provinsi</th>
                        <th>Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <div class="flex gap-1">
                                {{ $row->no_telp}}
                                <a href="{{'https://api.whatsapp.com/send?phone=62' . $row->no_telp}}" target="_blank"
                                    class=" underline">
                                    Klik Chat
                                </a>
                            </div>
                        </td>
                        <td>{{ $row->email }}</td>
                        <td><button data-bs-target="#viewModal{{$row->id}}" data-bs-toggle="modal">
                                <div class="btn btn-success btn-sm">View</div>
                            </button>
                        </td>
                        <td> {{ $row->name }}</td>
                        <td><span class="badge fw-semibold rounded-pill bg-warning px-20 py-6 radius-4 dark:text-black">
                                verifikasi data</span>
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

    <!-- Modal view -->
    @foreach ($data as $row)
    <div class="modal fade" id="viewModal{{$row->id}}" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Alamat </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                    <form>
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="col-12">
                                    <textarea class="form-control" disabled readonly>{{ $row->alamat }}</textarea>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Modal cek -->
    @foreach ($data as $row)
    <div class="modal fade" id="cek{{$row->id}}" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Verifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                    <form>
                        <div class="row gy-3">
                            <div class="col-12 text-center">
                                <h1 class=" font-semibold"> Pelanggan Belum Verifikasi Data</h1>
                                <p>Arahkan pelanggan untuk verifikasi datanya</p>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</x-admin.app-layout>