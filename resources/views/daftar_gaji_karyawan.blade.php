@extends('main')

@section('container')
    <h1 class="mb-4">Data Gaji Karyawan PT XYZ</h1>
    <table class="table table-bordered table-striped mb-5">
        <thead>
            <tr>
                <th scope="col">NIP</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Status</th>
                <th scope="col">Gaji Pokok</th>
                <th scope="col">Tunjangan Keluarga</th>
                <th scope="col">Pajak</th>
                <th scope="col">Gaji Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $k->nip }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->jeniskelamin }}</td>
                    <td>{{ $k->status }}</td>
                    <td>{{ $k->gapok }}</td>
                    <td>{{ $k->tunjangankeluarga }}</td>
                    <td>{{ $k->pajak }}</td>
                    <td>{{ $k->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h6>NIM: 2111500019</h6>
    <h6>Nama: Fadhilla Muhammad</h6>
    <div class="mt-3">
        <a href="/">Kembali</a>
    </div>
@endsection
