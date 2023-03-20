@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <h5 class="fw-bold my-auto">Selamat Datang, Novry.</h5>
                    <button class=" btn btn-sm btn-outline-info bg-light opacity-100" disabled><span class="fw-bold"> Anda
                            sudah
                            melakukan absensi pada pukul 08.00</span></button>
                </div>
            </div>
            <div class="row my-2">

                <div class="col-md-6">
                    <div class="card pe-4">
                        <div class="card-body">
                            <div class=" my-2 d-flex justify-content-between">
                                <h4 class="fw-bold my-auto">Timetables</h6>
                                    <button type="button" class="btn btn-sm btn-light px-3 my-auto"
                                        style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);"
                                        data-bs-toggle="modal" data-bs-target="#filterModal">
                                        <i class="fa-sharp fa-solid fa-filter"></i>
                                        Filter
                                    </button>
                            </div>
                            <hr class="border border-secondary " />
                            <table class="table table-borderedless table-striped">
                                <thead>
                                    <th>Nama Karyawan</th>
                                    <th>Check in</th>
                                    <th>Check out</th>
                                    <th>Keterlambatan (menit)</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Novry</td>
                                        <td>08.20</td>
                                        <td>15.30</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Terry</td>
                                        <td>08.00</td>
                                        <td>15.30</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Siti</td>
                                        <td>08.00</td>
                                        <td>15.30</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Usep</td>
                                        <td>08.00</td>
                                        <td>15.30</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Rangga</td>
                                        <td>08.00</td>
                                        <td>15.30</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Novry</td>
                                        <td>08.00</td>
                                        <td>15.30</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Terry</td>
                                        <td>08.00</td>
                                        <td>15.30</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Siti</td>
                                        <td>08.00</td>
                                        <td>15.30</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Usep</td>
                                        <td>08.00</td>
                                        <td>15.30</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Rangga</td>
                                        <td>08.00</td>
                                        <td>15.30</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col">
                                <div class="d-flex justify-content-between align-items-center">
                                    <button
                                        class="btn btn-sm btn-light px-3"style="box-shadow: 0px 1px 1px 1px
                                        rgba(0,0,0,0.2);"><i
                                            class="fas fa-chevron-left me-1"></i>Sebelumnya</button>
                                    <button
                                        class="btn btn-sm btn-light px-3"style=" box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);">1</button>
                                    <button
                                        class="btn btn-sm btn-light px-3"style=" box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);">2</button>
                                    <button
                                        class="btn btn-sm btn-light px-3"style=" box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);">3</button>
                                    <button
                                        class="btn btn-sm btn-ligh px-3"style=" box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);">Selanjutnya<i
                                            class="fas fa-chevron-right ms-1"></i></button>
                                    <small class=" text-secondary my-auto">10 dari 45 total karyawan</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-md-3 px-auto py-auto">
                    <div class="card shadow mb-2 py-5">
                        <div class="card-body text-center">
                            <h1 class="card-text fs-1">10<small class=" mx-md-1 fs-6 text-secondary fw-normal">hari</small>
                            </h1>
                            <p class="fs-3">Kehadiran</p>

                        </div>
                    </div>
                    <div class="card shadow mb-2 py-5">
                        <div class="card-body text-center">
                            <h1 class="card-text fs-1">1<small class=" mx-md-1 fs-6 text-secondary  fw-normal">hari</small>
                            </h1>
                            <p class="fs-3">Izin</p>

                        </div>
                    </div>
                </div>
                <div class=" col-md-3 px-auto py-auto">
                    <div class="card shadow mb-2 py-5">
                        <div class="card-body text-center">
                            <h1 class="card-text fs-1 ">30<small
                                    class=" mx-md-1 fs-6 text-secondary  fw-normal">menit</small>
                            </h1>
                            <p class="fs-3">Keterlambatan</p>

                        </div>
                    </div>

                    <div class="card shadow py-5">
                        <div class="card-body text-center">
                            <h1 class="card-text fs-1">0<small class=" mx-md-1 fs-6 text-secondary  fw-normal">hari</small>
                            </h1>
                            <p class="fs-3">Sakit</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @foreach ($teachers as $teacher)
        {{ $teacher->nama_guru }}</br>
    @endforeach

    </div>
@endsection
