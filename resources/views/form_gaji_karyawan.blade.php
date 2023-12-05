@extends('main')

@section('container')
<h1>Form Gaji Karyawan PT XYZ</h1>
<table class="table table-bordered">
    <tbody>
      <form action="/input_gaji_karyawan" method="POST">
        @csrf
        <tr>
          <td>NIP Karyawan</td>
          <td><input type="text" class="form-control" id="nip" name="nip" placeholder="NIP Karyawan" required></td>
        </tr>
        <tr>
          <td>Nama Karyawan</td>
          <td><input type="text" class="form-control" id="nama" name="nama" placeholder="Nama karyawan" required></td>
        </tr>
        {{-- Radio Button Jenis Kelamins --}}
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="rjk" id="rjkLaki" value="L" required>
              <label class="form-check-label" for="rjkLaki">
                Laki-Laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="rjk" id="rjkPerempuan" value="P">
              <label class="form-check-label" for="rjkPerempuan">
                Perempuan
              </label>
            </div>
          </td>
        </tr>
        {{-- Radio Button Status --}}
        <tr>
          <td>Status</td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radiostatus" id="rsNikah" value="nikah" required>
              <label class="form-check-label" for="rsNikah">
                Nikah
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radiostatus" id="rsBelumNikah" value="belumnikah">
              <label class="form-check-label" for="rsBelumNikah">
                Belum Nikah
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>Gaji Pokok</td>
          <td><input type="text" class="form-control" id="gajipokok" name="gajipokok" placeholder="Gaji Pokok" required></td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit" class="btn btn-primary">Simpan</button></td>
        </tr>
      </form>
    </tbody>
  </table>
<h6>NIM: 2111500019</h6>
<h6>Nama: Fadhilla Muhammad</h6>
<div class="mt-3">
  <a href="/">Kembali</a>
</div>
@endsection
