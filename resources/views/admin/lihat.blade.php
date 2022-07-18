@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Detail Aset'}}
    @endsection
    @section('title')
        {{'Detail Aset'}}
    @endsection

<!-- Content Row -->

    <div class="card shadow mb-3 ">
        <div class="card-header py-2 " style="background-color: #40B9CB;">
            <h6 class="m-0 font-weight-bold text-white text-center">Data Aset</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive" >
                <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Nama Pemilik</td>
                                <td>:</td>
                                <td>{{ $pemilik->nama }}</td>
                                {{-- <td>{{ $pemilik->aset->nama_aset}}</td> --}}
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Keterangan</td>
                                <td>:</td>
                                <td>{{ $pemilik->keterangan }}</td>
                                {{-- <td>{{ $pemilik->aset->nama_aset}}</td> --}}
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>No Sertifikat</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->no_sertifikat }}</td>
                                {{-- <td>{{ $pemilik->aset->nama_aset}}</td> --}}
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Nama Aset</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->nama_aset }}</td>
                                {{-- <td>{{ $pemilik->aset->nama_aset}}</td> --}}
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->alamat_aset }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Luas Aset</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->luas_aset }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Status Aset</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->status_aset }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Kondisi Aset</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->kondisi_aset }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Kondisi Geografis</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->kondisi_geografis }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Asal Aset</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->asalusul_aset }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Tahun Kepemilikan</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->th_kepemilikan }}</td>
                            </tr>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <tr>
                                <td>Tahun Pembangunan</td>
                                <td>:</td>
                                <td>{{ $pemilik->aset->th_pembangunan }}</td>
                            </tr>
                        </div>
                    </div>

                </table>
            </div>
        </div>
    </div>
@endsection