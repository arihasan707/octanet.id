<x-admin.app-layout>
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Kategori</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Produk</li>
            <li>-</li>
            <li class="fw-medium">Kategori</li>
        </ul>
    </div>

    <div class="row flex justify-center">
        <div class="col-8">

            <div class="card basic-data-table">
                <div class="card-header flex justify-between items-center">
                    <h5 class="card-title mb-0">Daftar Kategori</h5>
                    <button type="button" class="btn btn-primary text-white radius-8 px-16 py-9" data-bs-toggle="modal"
                        data-bs-target="#addKategoriModal">Tambah Data</button>
                </div>

                <div class="card-body">
                    <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama }}</td>
                                <td class="text-white">
                                    <!-- <a href="javascript:void(0)"
                                        class="w-32-px h-32-px bg-primary rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                    </a> -->
                                    <a href="javascript:void(0)"
                                        class="w-32-px h-32-px bg-success rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="lucide:edit"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="w-32-px h-32-px bg-danger rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="addKategoriModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.product.kategori.store')}}" method="POST">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <input type="text" name="nama" class="form-control rounded-lg"
                                    placeholder="Masukan nama kategori" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Apply</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <!-- main js -->
    <script src="assets/js/app.js"></script>
    <script>
    let table = new DataTable('#dataTable');
    </script>
    @endpush
</x-admin.app-layout>