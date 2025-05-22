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
        <h6 class="fw-semibold mb-0">Coverage Area</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Area Coverage</li>
        </ul>
    </div>

    <div class="row flex justify-center">
        <div class="col-12">
            <div class="card basic-data-table">
                <div class="card-header flex justify-between items-center">
                    <h5 class="card-title mb-0">Daftar Area</h5>
                    <button type="button" class="btn btn-primary text-white radius-8 px-16 py-9" data-bs-toggle="modal"
                        data-bs-target="#addAreaModal">Tambah Data</button>
                </div>

                <div class="card-body">
                    <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th scope="col">Area</th>
                                <th scope="col">Kode Pos</th>
                                <th scope="col">Komisi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->kode_pos }}</td>
                                <td>@rupiah( $row->komisi_per_area)</td>
                                <td class="text-white">
                                    <!-- <a href="javascript:void(0)"
                                        class="w-32-px h-32-px bg-primary rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                    </a> -->
                                    <a href="" data-bs-toggle="modal" data-bs-target="#editAreaModal{{$row->id}}"
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
    <div class="modal fade" id="addAreaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="myFormAdd" action="{{route('admin.area.store')}}" method="POST">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="" class="form-label">Area</label>
                                <input type="text" name="nama" class="form-control rounded-lg" required
                                    placeholder="Masukan area">
                            </div>
                            <div class="col-12">
                                <label for="kode_pos" class="form-label">Kode Pos</label>
                                <input type="text" name="kode_pos" class="form-control rounded-lg" required
                                    placeholder="Masukan kode pos">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Komisi</label>
                                <input id="komisi" type="text" name="komisi" class="form-control rounded-lg" required
                                    placeholder="Rp 0">
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

    @foreach ($data as $row)


    <!-- Modal -->
    <!-- <div class="modal fade" id="editAreaModal{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Edit Data Area</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.area.update',$row->id)}}" method="POST">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <label for="" class="form-label">Coverage Area</label>
                                <input type="text" name="nama" class="form-control rounded-lg" required
                                    placeholder="Masukan area" value="{{$row->nama}}">
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Kode Pos</label>
                                <input type="text" name="kode_pos" class="form-control rounded-lg" required
                                    placeholder="Masukan kode pos" value="{{$row->kode_pos}}">
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Komisi</label>
                                <input type="text" name="komisi" class="form-control rounded-lg" required
                                    placeholder="Masukan Komisi" value="{{$row->komisi_per_area}}">
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
    </div> -->

    @endforeach

    @push('scripts')
    <script src="{{asset('assets/back/js/jquery.validate.min.js')}}"></script>
    <!-- format rupiah -->
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.6.0"></script>
    <!-- main js -->
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            let table = new DataTable('#dataTable');

            // number only kode pos
            $("input[name='kode_pos']").on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            //harga nominal rupiah
            new AutoNumeric('#komisi', {
                digitGroupSeparator: '.',
                decimalCharacter: ',',
                decimalPlaces: 0,
                currencySymbol: 'Rp ',
                unformatOnSubmit: false
            });

            $('#myFormAdd').validate({
                rules: {
                    nama: {
                        required: true
                    },
                    kode_pos: {
                        required: true,
                    },
                    komisi: {
                        required: true,
                    }
                },
                messages: {
                    nama: {
                        required: 'Area harus di isi !',
                    },
                    kode_pos: {
                        required: 'Kode Pos harus di isi !',
                    },
                    komisi: {
                        required: 'Komisi harus di isi !',
                    },
                }
            })

        })
    </script>
    @endpush
</x-admin.app-layout>