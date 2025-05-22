<x-agen.app-layout>

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Pencairan Dana</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('agen.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Pencairan Dana</li>
        </ul>
    </div>

    <div class="row mb-5">
        <div class="col-md-6 card-pencairan">
            <div class="card shadow-none border bg-gradient-start-4 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Total yang dapat dicairkan</p>
                            <h6 class=" font-semibold text-primary-light mb-1">@rupiah($jmlDanaCair)</h6>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-success-main max-[323px]:hidden rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="solar:wallet-bold" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                    <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                        <span class="d-inline-flex align-items-center gap-1 text-success-main">
                            <iconify-icon icon="tabler:coin" class="text-xs"></iconify-icon> @rupiah(0)
                        </span>
                        Total pencairan sebelumnya
                    </p>
                </div>
            </div><!-- card end -->
        </div>

        @if ($jmlDanaCair === 0)
        <div class="col-md-6">
            <div class="card shadow-none border bg-gradient-start-5 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Ajukan pencairan dana</p>
                            <h6 class=" font-semibold text-danger-500 mb-1">Dana belum cukup</h6>
                        </div>
                    </div>
                    <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                        <span class="d-inline-flex align-items-center gap-1 text-danger-500">
                            <iconify-icon icon="ic:outline-info" class="text-xs"></iconify-icon> Dana dapat
                            dicairkan 1 kali setiap bulan
                        </span>
                    </p>
                </div>
            </div><!-- card end -->
        </div>



        <!-- <div class="col-6">
            <div class="card shadow-none border bg-gradient-start-2 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Ajukan pencairan dana</p>
                            <h6 class=" font-semibold text-orange-500 mb-1">Pencairan sedang diproses</h6>
                        </div>
                    </div>
                    <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                        <span class="d-inline-flex align-items-center gap-1 text-orange-500">
                            <iconify-icon icon="ic:outline-info" class="text-xs"></iconify-icon> Dana dapat
                            dicairkan 1 kali setiap bulan
                        </span>
                    </p>
                </div>
            </div>
        </div> -->

        @else
        <div class="col-md-6 mb-4">
            <div class="card shadow-none border bg-gradient-start-1 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Ajukan pencairan dana</p>

                            <form action="{{route('agen.pencairanDana.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="jmlDanaCair" value="{{$jmlDanaCair}}">

                                <button type="submit"
                                    class="btn rounded-pill btn-outline-success-600 radius-8 px-20 py-11">Klik
                                    Ajukan
                                </button>

                            </form>
                        </div>
                    </div>
                    <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                        <span class="d-inline-flex align-items-center gap-1 text-success-600">
                            <iconify-icon icon="ic:outline-info" class="text-xs"></iconify-icon> Dana dapat
                            dicairkan 1 kali setiap bulan
                        </span>
                    </p>
                </div>
            </div><!-- card end -->
        </div>

        @endif

    </div>

    <div class="card basic-data-table">
        <div class="card-header flex justify-between items-center">
            <h5 class="card-title mb-0">Riwayat Pencairan Dana</h5>

        </div>

        <div class="card-body overflow-auto">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Bank</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->User->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($row->created_at)->format('Y-m-d, H:i' )}} WIB</td>
                        <td>{{ $row->Bank->nama }} - <span class=" italic font-semibold">{{ $row->Bank->no_rek }}</span>
                        </td>
                        <td>@rupiah($row->jml_pencairan)</td>
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
                    </tr>
                    @endforeach
                    <!-- <td class="text-white">
                        <a href="javascript:void(0)"
                            class="w-32-px h-32-px bg-danger rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td> -->
                </tbody>
            </table>
        </div>
    </div>
    </div>

    @push('scripts')
    <!-- main js -->
    <script src="assets/js/app.js"></script>
    <script>
        let table = new DataTable('#dataTable', {
            responsive: true
        });

        // document.addEventListener('DOMContentLoaded', function() {
        //     let myModal = new bootstrap.Modal(document.getElementById('myModal'))
        //     myModal.show()

        // });
    </script>
    @endpush
</x-agen.app-layout>