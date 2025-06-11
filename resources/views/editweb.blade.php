@extends('template')

@section('content')

    <h3>Edit Situs Web</h3>

    <a href="/situsweb"> Kembali</a>

    <br />
    <br />

    @foreach ($situsweb as $s)
        <form action="/situsweb/updateweb" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $s->situsweb_id }}">
            <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Nama Web </label>
            </div>
            <div class="col-6">
                <input type="text" name="nama" required="required" class="form-control" value="{{ $s->situsweb_nama }}">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">URL </label>
            </div>
            <div class="col-6">
                <input type="text" name="url" required="required" class="form-control" value="{{ $s->situsweb_url }}">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Status Aktif </label>
            </div>
            <div class="col-6">
                <input type="checkbox" name="aktif" value="1" {{ $s->situsweb_aktif == 1 ? 'checked' : '' }}>
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Uptime </label>
            </div>
            <div class="col-6">
                <textarea name="uptime" required="required" class="form-control">{{ $s->situsweb_uptime }}</textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach


@endsection
