@extends('template')

@section('main')
<h2>Edit Barang</h2>
<form action="{{ route('barang.update', $data->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" class="form-control @error('namabarang')
        is-invalid @enderror" name="namabarang" value="{{$data->namabarang}}">
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
              <input type="file" class="form-control-file" name="foto" value="{{$data->foto}}">
              </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" class="form-control @error('harga')
        is-invalid @enderror" name="harga" value="{{$data->harga}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Deskripsi Barang</label>
        <input type="text" class="form-control @error('descproduk')
        is-invalid @enderror" name="descproduk" value="{{$data->descproduk}}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


