@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <form action="/karyawan/carikaryawan" method="GET" class="form-inline">
        <label class="form-label mr-3">Cari Data Karyawan :</label>
	<input type="text" name="cari" placeholder="Cari Data Karyawan .." class="form-control">
	<input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br />

    <table class="table table-stripe">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td class="text-uppercase">{{ $k->namalengkap }}</td>
                <td>{{ $k->divisi }}</td>
                <td class="text-lowercase">{{ $k->departemen }}</td>
                <td>
                    <a href="/karyawan/hapuskaryawan/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/karyawan/tambahkaryawan" class="btn btn-info mb-3"> + Tambah Data Karyawan Baru</a>
    {{ $karyawan->links() }} <!-- hanya bisa dipakai dengan paginate, saat get() harus dihapus-->
@endsection
