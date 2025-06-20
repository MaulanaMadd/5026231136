@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    </form>
    <br />

    <table class="table table-stripe">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
        @foreach ($newkaryawan as $k)
            <tr>
                <td>{{ $k->NIP }}</td>
                <td>{{ $k->nama }}</td>
                <td>{{ $k->pangkat }}</td>
                <td>{{ $k->gaji }}</td>
                <td>
                    <a href="/eas/hapusnewkaryawan/{{ $k->NIP }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/eas/tambahnewkaryawan" class="btn btn-info mb-3"> + Tambah Data Karyawan Baru</a>
@endsection
