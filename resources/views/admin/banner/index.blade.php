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
        <h6 class="fw-semibold mb-0">Banner</h6>
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
            <h5 class="card-title mb-0">Daftar Banner</h5>
            <button data-bs-toggle="modal" data-bs-target="#addModalProduk"
                class="btn btn-primary text-white radius-8 px-16 py-9">Tambah
                Data</button>
        </div>

        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Img Uk Dekstop</th>
                        <th scope="col">Img Uk Mobile</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{asset('storage/images/desktop/' . $row->img)}}" width="250px"></td>
                        <td><img src="{{asset('storage/images/mobile/' . $row->img)}}" width="200px"></td>
                        <td class="text-white flex justify-centers gap-2">
                            <form id="delete-form" method="post" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button data-id="{{$row->id}}"
                                class="delete-btn w-32-px h-32-px bg-danger rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
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
                    <h5 class="modal-title font-semibold text-xl" id="exampleModalLabel">Tambah Data Banner </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                    <form id="myFormAdd" action="{{route('admin.banner.store')}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <div class="card h-100 p-0">
                                    <div class="card-header border-bottom bg-base py-16 px-24 text-center">
                                        <h6 class="text-md">Upload Banner Uk Dekstop</h6>
                                        <span>1440x390 px, max 5 mb</span>
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
                                                <input id="upload-file" type="file" name="img[desktop]"
                                                    accept="image/*">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card h-100 p-0">
                                    <div class="card-header border-bottom bg-base py-16 px-24 text-center">
                                        <h6 class="text-md">Upload Banner Uk Mobile</h6>
                                        <span>640x640 px, max 5 mb</span>
                                    </div>
                                    <div class="card-body p-24 flex justify-center">
                                        <div class="upload-image-wrapper d-flex align-items-center gap-3">
                                            <div
                                                class="uploaded-img2 position-relative border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 d-none">
                                                <button type="button"
                                                    class="uploaded-img__remove2 position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                                                    <iconify-icon icon="radix-icons:cross-2"
                                                        class="text-xl text-danger-600"></iconify-icon>
                                                </button>
                                                <img id="uploaded-img__preview2" class="w-100 h-100 object-fit-cover"
                                                    src="" alt="image">
                                            </div>

                                            <label
                                                class="upload-file2 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                                for="upload-file2">
                                                <iconify-icon icon="solar:camera-outline"
                                                    class="text-xl text-secondary-light"></iconify-icon>
                                                <input id="upload-file2" type="file" name="img[mobile]"
                                                    accept="image/*">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="link" class="form-label">Link Tautan Banner</label>
                                <input type="text" name="link" class="form-control rounded-lg">
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

    @push('scripts')
    <!-- main js -->
    <script src="{{asset('assets/back/js/jquery.validate.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- format rupiah -->
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.6.0"></script>
    <script src="assets/js/app.js"></script>
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
                        form.attr('action', `/admin/banner/${id}/delete`);
                        form.submit();
                    }
                });
            });


            //add img 1 
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


            //add img 2
            const label2 = document.querySelector('.upload-file2');
            const fileInput2 = document.getElementById("upload-file2");
            const uploadedImgContainer2 = document.querySelector(".uploaded-img2");
            const removeButton2 = document.querySelector(".uploaded-img__remove2");
            const imagePreview2 = document.getElementById("uploaded-img__preview2");


            // =============================== Upload Add Image start ================================================
            fileInput2.addEventListener("change", (e) => {
                if (e.target.files.length) {
                    const src = URL.createObjectURL(e.target.files[0]);
                    imagePreview2.src = src;
                    label2.classList.add('d-none');
                    uploadedImgContainer2.classList.remove('d-none');
                }
            });

            removeButton2.addEventListener("click", () => {
                imagePreview2.src = "";
                label2.classList.remove('d-none');
                uploadedImgContainer2.classList.add('d-none');
                fileInput2.value = "";
            });
            // =============================== Upload Add Image end ===============================================

            let table = new DataTable('#dataTable');

            $('#myFormAdd').validate({
                rules: {
                    img_desktop: {
                        required: true,
                    },
                    img_mobile: {
                        required: true,

                    },
                    link: {
                        required: true,
                    },
                },
                messages: {
                    img_desktop: {
                        required: 'Image uk desktop harus di isi !',
                    },
                    img_mobile: {
                        required: 'Image uk mobile harus di isi !',
                    },
                    link: {
                        required: 'Link tautan banner harus di isi !'
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            })
        })
    </script>
    @endpush
</x-admin.app-layout>