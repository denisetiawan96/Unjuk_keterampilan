@extends('template')

@section('main')
<h2>Edit Kategori</h2>
<form action="{{ route('kategori.update', $data->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <input type="text" class="form-control @error('namakategori')
        is-invalid @enderror" name="namakategori" value="{{$data->namakategori}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Deskripsi Kategori</label>
        <input type="text" class="form-control @error('desckategori')
        is-invalid @enderror" name="desckategori" value="{{$data->desckategori}}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
