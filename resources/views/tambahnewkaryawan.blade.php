@extends('template')

@section('content')

    <h3>Data Karyawan</h3>

    <a href="/eas"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/eas/storenewkaryawan" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">NIP </label>
            </div>
            <div class="col-6">
                <input type="text" name="namalengkap" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Nama </label>
            </div>
            <div class="col-6">
                <input type="text" name="namalengkap" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Pangkat </label>
            </div>
            <div class="col-6">
                <input type="text" name="divisi" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Gaji </label>
            </div>
            <div class="col-6">
                <input type="text" name="departemen" required="required" class="form-control">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
