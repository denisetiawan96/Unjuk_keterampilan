@extends('template')

@section('main')
<h2>Tambah Barang</h2>
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nama Barang</label>
      <input type="text" class="form-control" name="namabarang">
    </div>
    <div class="mb-3">
      <label class="form-label">Kategori</label>
      <select class="form-control form-select-lg mb-3" aria-label="Large select example" name="kategori_id">
        @foreach ($kategori as $item)
          <option value="{{$item->id}}">{{$item->namakategori}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Foto</label>
            <div class="form-group">
            <label for="exampleFormControlFile1">Pilih Gambar</label>
            <input type="file" class="form-control-file" name="foto">
            </div>
    </div>
    <div class="mb-3">
      <label class="form-label">Harga</label>
      <input type="number" class="form-control" name="harga">
    </div>
    <div class="mb-3">
      <label class="form-label">Deskripsi Barang</label>
      <input type="text" class="form-control" name="descproduk">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
