@extends('template')

@section('content')

    <h3>Data Situs Web</h3>

    <a href="/situsweb"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/situsweb/storeweb" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Nama Web </label>
            </div>
            <div class="col-6">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">URL </label>
            </div>
            <div class="col-6">
                <input type="text" name="url" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
    <div class="col-2">
        <label class="control-label mb-0">Status Aktif</label>
    </div>
    <div class="col-6">
        <!-- ensures "0" is sent when the box is left unchecked -->
        <input type="hidden" name="aktif" value="0">

        <input type="checkbox"
               id="aktif"
               name="aktif"
               value="1"
               {{ old('aktif') == 1 ? 'checked' : '' }}>
        <label for="aktif" class="ms-1">Aktif</label>
    </div>
</div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Uptime </label>
            </div>
            <div class="col-6">
                <textarea name="uptime" required="required" class="form-control"></textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
