@extends('main')

@section('container')
    <h1>Hitung Volume dan Keliling Balok</h1>
    <h6>Nim: 2111500019</h6>
    <h6>Nama: Fadhilla Muhammad</h6>
    <form action="/input_vkb" method="POST">
      @csrf
        <div class="form-group">
          <label for="panjang">Panjang</label>
          <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Panjang balok">
          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
          <label for="lebar">Lebar</label>
          <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Lebar balok">
        </div>
        <div class="form-group">
          <label for="tinggi">Tinggi</label>
          <input type="text" class="form-control" id="tinggi" name="tinggi" placeholder="Tinggi balok">
        </div>
        {{-- <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Hitung</button>
      </form>
      @if (session()->has('valid'))
        <div class="mt-4">
          <h1>Hasil Perhitungan</h1>
          {{-- Tampilkan hasil hitung --}}
          <ul>
            <li>Panjang = {{ $panjang }}</li>
            <li>Lebar = {{ $lebar }}</li>
            <li>Tinggi = {{ $tinggi }}</li>
            <li>Volume = {{ $volume }}</li>
            <li>Keliling = {{ $keliling }}</li>
          </ul>
        </div>
      @endif
      <div class="mt-3">
        <a href="/">Kembali</a>
      </div>
@endsection
