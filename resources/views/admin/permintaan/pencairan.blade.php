<x-admin.app-layout>

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Pencairan Dana</h6>
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
            <li class="fw-medium">Pencairan Dana</li>
        </ul>
    </div>

    <div class="card basic-data-table">
        <div class="card-header flex justify-between items-center">
            <h5 class="card-title mb-0">Daftar Pencairan</h5>
        </div>

        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Agen/Reseller</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ date_format($row->created_at, 'Y-m-d')}}</td>
                        <td>{{ $row->User->name }}</td>
                        <td>{{ $row->User->email }}</td>
                        <td>
                            @switch($row->status)
                            @case('sukses')
                            <span
                                class="badge text-sm fw-semibold rounded-pill bg-success px-20 py-6 radius-4 text-white">{{ $row->status }}
                            </span>
                            @break
                            @case('gagal')
                            <span
                                class="badge text-sm fw-semibold rounded-pill bg-danger px-20 py-6 radius-4 text-white">{{ $row->status }}
                            </span>
                            @break
                            @default
                            <span
                                class="badge text-sm fw-semibold rounded-pill bg-warning-600 px-20 py-6 radius-4 text-white">{{ $row->status }}
                            </span>
                            @endswitch
                        </td>
                        <td class="text-white">
                            <button type="button" class="btn btn-primary rounded-lg btn-sm" data-bs-toggle="modal"
                                data-bs-target="#konfirm{{$row->id}}">Check</button>
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
    <div class="modal fade" id="konfirm{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Pertinjau</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.req.pencairan.update', $row->id)}}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center" id="invoice">
                                    <div class="col-12">
                                        <div class="shadow-4 border radius-8">
                                            <div class="py-28 px-20">
                                                <div
                                                    class="d-flex flex-wrap justify-content-between align-items-end gap-3">
                                                    <div>
                                                        <h6 class="text-md">Informasi Agen/Reseller :</h6>
                                                        <table class="text-sm text-secondary-light">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Nama</td>
                                                                    <td class="ps-8">: {{ $row->User->name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td class="ps-8">: {{ $row->User->email }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Waktu Pengajuan</td>
                                                                    <td class="ps-8">:
                                                                        {{ \Carbon\Carbon::parse($row->created_at)->format('Y-m-d | H:i' )}}
                                                                        WIB
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <table class="text-sm text-secondary-light">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Nama Bank</td>
                                                                    <td class="ps-8">:
                                                                        {{ $row->Bank->nama }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nomor Rekening</td>
                                                                    <td class="ps-8">: {{ $row->Bank->no_rek }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bank A/n</td>
                                                                    <td class="ps-8">: {{ $row->Bank->atas_nama }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="mt-24">
                                                    <div class="table-responsive scroll-md h-80">
                                                        <table class="table bordered-table text-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="text-sm">No</th>
                                                                    <th scope="col" class="text-sm">Nama Pelanggan</th>
                                                                    <th scope="col" class="text-sm">Layanan</th>
                                                                    <th scope="col" class="text-sm">Area Coverage</th>
                                                                    <th scope="col" class="text-sm">Komisi
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                $dataPelanggan =
                                                                App\Models\Komisi::with('client')->where('user_id',$row->user_id)->where('is_aktif',
                                                                0)->get();
                                                                $pelangganAktif =
                                                                App\Models\Client::where('user_id',$row->user_id)->where('status','aktif')->count();
                                                                @endphp
                                                                @foreach ($dataPelanggan as $pelanggan)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $pelanggan->Client->nama }}</td>
                                                                    <td>{{ $pelanggan->Client->Product->nama }}</td>
                                                                    <td>{{ $pelanggan->Client->Area->nama}}</td>
                                                                    <td>@rupiah($pelanggan->komisi)</td>

                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="d-flex flex-wrap justify-between gap-3">
                                                        <div>
                                                            <p class="text-sm mb-0"><span
                                                                    class="text-primary-light fw-semibold">Total
                                                                    Pelanggan Aktif : </span> {{ $pelangganAktif }}
                                                                Pelanggan</p>
                                                        </div>
                                                        <div>
                                                            <table class="text-sm">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="pe-64 pt-4">
                                                                            <span
                                                                                class="text-primary-light fw-semibold">Total:</span>
                                                                        </td>
                                                                        <td class="pe-16 pt-4">
                                                                            <span
                                                                                class="text-primary-light fw-semibold">@rupiah($row->jml_pencairan)</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tolak</button>
                    <button type="submit" class="btn btn-success btn-sm">Konfirm</button>
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
        let table = new DataTable('#dataTable');
    </script>
    @endpush
</x-admin.app-layout>