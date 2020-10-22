@extends('layouts.home')

@section('content')

<div class="row">
    <div class="col-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Buat Berkas
                </h6>
            </div>
            <div class="card-body">
                <form action="{{url('/task/create')}}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Uraian Kegiatan</label>
                        <textarea class="form-control" name="uraian_kegiatan" id="exampleInputPassword1" placeholder="Password"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sumber</label>
                        <select name="sumber" id="" class="form-control col-8">
                            <option value="" selected disabled hidden>Choose here...</option>
                            <option value="LHR">LHR</option>
                            <option value="Instruksi">Instruksi</option>
                            <option value="Nadine">Nadine</option>
                            <option value="Memo">Memo</option>
                            <option value="Agenda">Agenda</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">PIC / Ditujukan ke:</label>
                        <select name="pic" id="" class="form-control col-8">
                            <option value="" selected disabled hidden>Choose here...</option>
                            <option value="Kepala Subbagian Umum dan Kepatuhan Internal">Kepala Subbagian Umum dan Kepatuhan Internal</option>
                            <option value="Kepala Seksi Pengawasan dan Konsultasi I">Kepala Seksi Pengawasan dan Konsultasi I</option>
                            <option value="Kepala Seksi Pengawasan dan Konsultasi II">Kepala Seksi Pengawasan dan Konsultasi II</option>
                            <option value="Kepala Seksi Pengawasan dan Konsultasi III">Kepala Seksi Pengawasan dan Konsultasi III</option>
                            <option value="Kepala Seksi Pengawasan dan Konsultasi IV">Kepala Seksi Pengawasan dan Konsultasi IV</option>
                            <option value="Kepala Seksi Ekstensifikasi dan Penyuluhan">Kepala Seksi Ekstensifikasi dan Penyuluhan</option>
                            <option value="Kepala Seksi Penagihan">Kepala Seksi Penagihan</option>
                            <option value="Kepala Seksi Pelayanan">Kepala Seksi Pelayanan</option>
                            <option value="Kepala Seksi Pemeriksaan">Kepala Seksi Pemeriksaan</option>
                            <option value="Kepala Seksi Pengolahan Data dan Informasi">Kepala Seksi Pengolahan Data dan Informasi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jatuh Tempo</label>
                        <input type="date" name="date" class="form-control col-4">
                    </div>
                    <div class="form-group">
                        <label for="">Upload Berkas</label>
                        <input type="file" name="file" class="form-control-file" >
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
                </div>
            </div>
    </div>
</div>

@endsection