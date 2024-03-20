@extends('template')

@section('main')
<h2>Tambah Kategori</h2>
<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nama Kategori</label>
      <input type="text" class="form-control" name="namakategori" >
    </div>
    <div class="mb-3">
      <label class="form-label">Deskripsi Kategori</label>
      <input type="text" class="form-control" name="desckategori">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
