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
        <h6 class="fw-semibold mb-0">Bank Transfer</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('agen.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Bank Transfer</li>
        </ul>
    </div>

    @if (session('status'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {!!session('status')!!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="row flex justify-center">
        <div class="col col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Bank Transfer</h6>
                </div>
                <div class="row gy-3">
                    <div class="card-body">
                        <form id="myAddBank"
                            action="{{$data === null ? route('agen.bank.store') : route('agen.bank.update',$data->id )}}"
                            method="post">
                            @csrf
                            <div class="col-12 mb-3">
                                <label class="form-label">Nama Bank</label>
                                <input type="text" name="nama" class="form-control"
                                    value="{{$data !== null ? $data->nama : old('nama')}}"
                                    placeholder="Masukan nama bank">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">A/n Bank</label>
                                <input type="text" name="an_bank" class="form-control focus:bg-red"
                                    value="{{$data !== null ? $data->atas_nama : old('an_bank')}}"
                                    placeholder="Masukan pemilik bank">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Nomor Rekening</label>
                                <input type="text" name="no_rek" class="form-control focus:bg-transparent"
                                    value="{{$data !== null ? $data->no_rek : old('no_rek')}}"
                                    placeholder="Masukan nomor rekening">
                            </div>

                            <div class="col-12 flex justify-center gap-2">
                                <button type="submit" class="btn btn-primary btn-sm rounded-md w-100 mt-3">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>
    </div>

    @push('scripts')
    <script>
        // number only nomor rekening
        $("input[name='no_rek']").on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        $('#myAddBank').validate({
            rules: {
                nama: {
                    required: true
                },
                an_bank: {
                    required: true,
                },
                no_rek: {
                    required: true
                },
            },
            messages: {
                nama: {
                    required: 'Nama Bank harus di isi !'
                },
                an_bank: {
                    required: 'Nama Pemilik Bank harus di isi !'
                },
                no_rek: {
                    required: 'Nomor Rekening harus di isi !',
                }
            }
        })
    </script>
    @endpush
</x-agen.app-layout>