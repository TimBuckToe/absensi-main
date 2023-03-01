@extends('layouts.main')

@section('content')
    {{-- @include('layouts.partials.guru') --}}
    @include('layouts.partials.filter')
    <div class="content">
        <div class="container">
            <h4>
                Daftar Karyawan
            </h4>
            <div class="row">
                <div class="col-2">
                    <form class="form-inline">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);"
                                aria-label="Small" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </form>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-sm btn-light"
                        style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal"
                        data-bs-target="#filterModal">
                        <i class="fa-sharp fa-solid fa-filter"></i>
                        Filter
                    </button>
                </div>
                <div class="col-1 ps-1 me-5">
                    <button type="button" class="btn btn-sm btn-light"
                        style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal"
                        data-bs-target="">
                        <i class="fa-sharp fa-solid fa-trash-can"></i>
                    </button>
                </div>

                <div class="col-7 ms-5 pe-1" style="text-align: right;">
                    <button type="button" class="btn btn-sm"
                        style="font-weight: 600; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2); background-color: #0C5045; color: white;"
                        onClick="create()">
                        <i class="fa-solid fa-plus" style="color: white;"></i>
                        Tambah Jadwal
                    </button>
                </div>
            </div>
            <table class="table table-sm table-striped table-light">
                <thead>
                    <tr>
                        <th scope="col">
                            <input type="checkbox">
                        </th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Hari Kerja</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Keluar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($gurus as $guru) --}}
                        <tr>
                            <th scope="row">
                                <input type="checkbox">
                            </th>
                            <td>Maman</td>
                            <td>Senin, Selasa, Rabu, Kamis, Jumat</td>
                            <td>09.00</td>
                            <td>17.00</td>
                            {{-- <td>
                                @if ($guru->status == 'aktif')
                                    <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-outline-danger" disabled>Tidak
                                        Aktif</button>
                                @endif
                            </td> --}}
                            <td>
                                <button type="button" class="btn btn-sm" style="background-color: #0C5045;"
                                    onClick="edit(this)" data-id="" data-nama=""
                                    data-jenis="" data-jamMasuk=""
                                    data-status="">
                                    <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    onClick="delete(this)" data-id="">
                                    <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
                                </button>
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal" id="modal-guru" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col">
                            <small class="modal-title" id="modal-title"></small>
                            <h5 class="modal-title" id="modal-title-1"></h5>
                        </div>
                    </div>
                    <form action="#" method="POST" id="form-aset" class="needs-validation"
                        novalidate>
                        <div class="modal-body">

                            {{-- @csrf --}}
                            <input type="hidden" name="id" id="input-id-guru">
                            <div class="form-group mb-2">
                                <label for="nama-guru">Nama Karyawan</label>
                                <input type="text" class="form-control" id="input-nama-guru"
                                    placeholder="Masukan Nama Karyawan" name="nama_karyawan" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="hari-guru">Hari Kerja</label>
                                <input type="text" class="form-control" id="input-hari-guru"
                                    placeholder="Masukan Hari Kerja" name="hari" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="jamMasuk-guru">Jam Masuk</label>
                                <input type="text" class="form-control" id="input-jamMasuk-guru"
                                    placeholder="Masukan Jam Masuk Karyawan" name="jamMasuk" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="jamKeluar-guru">Jam Keluar</label>
                                <input type="text" class="form-control" id="input-jamKeluar-guru"
                                    placeholder="Masukan Jam Keluar Karyawan" name="jamKeluar" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="deskripsi-guru">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="input-deskripsi-guru" placeholder="Masukkan deskripsi"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script>
        const modalForm = $('#modal-guru');

        function create() {
            $('#modal-title').text('Jadwal Karyawan');
            $('#modal-title-1').text('Tambah Jadwal');
            $('#input-id-guru').val("");
            $('#input-nama-guru').val("");
            $('#input-hari-guru').val("");
            $('#input-jamMasuk-guru').val("");
            $('#input-jamKeluar-guru').val("");
            $('#input-deskripsi-guru').val("");
            modalForm.modal('show');
        }

        function closeModal() {
            $('#input-id-guru').val();
            $('#input-nama-guru').val();
            $('#input-hari-guru').val();
            $('#input-jamMasuk-guru').val();
            $('#input-jamKeluar-guru').val();
            modalForm.modal('hide');
        }

        function edit(e) {
            $('#modal-title-1').text('Edit Form');
            let id = $(e).data('id');
            let nama = $(e).data('nama_karyawan');
            let hari = $(e).data('hari');
            let jamMasuk = $(e).data('jamMasuk');
            let jamKeluar = $(e).data('jamKeluar');
            let deskripsi = $(e).data('deskripsi');
            $('#input-id-guru').val(id);
            $('#input-nama-guru').val(nama);
            $('#input-hari-guru').val(jenis);
            $('#input-jamMasuk-guru').val(jamMasuk);
            $("#input-jamKeluar-guru").val(jamKeluar).change();
            $("#input-deskripsi-guru").val(deskripsi).change();
            modalForm.modal('show');
        }

        // function delete(e){
        //    let id = $(e).data('id');

        // }

        // jQuery.validator.setDefaults({
        //     debug: true,
        //     success: "valid"
        // });
        // $("#form-aset").validate({
        //     rules: {
        //         required: true

        //     }
        // });


        // Example starter JavaScript for disabling form submissions if there are invalid fields
        // (function() {
        //     'use strict'

        //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
        //     var forms = document.querySelectorAll('.needs-validation')

        //     // Loop over them and prevent submission
        //     Array.prototype.slice.call(forms)
        //         .forEach(function(form) {
        //             form.addEventListener('submit', function(event) {
        //                 if (!form.checkValidity()) {
        //                     event.preventDefault()
        //                     event.stopPropagation()
        //                 }

        //                 form.classList.add('was-validated')
        //             }, false)
        //         })
        // })()

        //Toast
        // const toastTrigger = document.getElementById('liveToastBtn')
        // const toastLiveExample = document.getElementById('liveToast')
        // if (toastTrigger) {
        //     toastTrigger.addEventListener('click', () => {
        //         const toast = new bootstrap.Toast(toastLiveExample)

        //         toast.show()
        //     })
        // }
    </script>
@endsection
