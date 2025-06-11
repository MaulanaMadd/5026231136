@extends('template')

@section('content')
    <h3>Data Situs Web</h3>

    <a href="/situsweb/tambahweb" class="btn btn-info mb-3"> + Tambah Data Web Baru</a>

    <form action="/situsweb/cariweb" method="GET" class="form-inline">
        <label class="form-label mr-3">Cari Data Web :</label>
	<input type="text" name="cari" placeholder="Cari Data Web .." class="form-control">
	<input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br />

    <table class="table table-stripe">
        <tr>
            <th>Nama Web</th>
            <th>URL</th>
            <th>Status Aktif</th>
            <th>Uptime</th>
            <th>Opsi</th>
        </tr>
        @foreach ($situsweb as $s)
            <tr>
                <td>{{ $s->situsweb_nama }}</td>
                <td>{{ $s->situsweb_url }}</td>
                <td>{{ $s->situsweb_aktif }}</td>
                <td>{{ $s->situsweb_uptime }}</td>
                <td>
                    <a href="/situsweb/editweb/{{ $s->situsweb_id }}" class="btn btn-success">Edit</a>
                    |
                    <a href="/situsweb/hapusweb/{{ $s->situsweb_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $situsweb->links() }} <!-- hanya bisa dipakai dengan paginate, saat get() harus dihapus-->
@endsection
