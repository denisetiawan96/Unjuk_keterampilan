@extends('template')

@section('main')
<h2>Tambah Postingan</h2>
<form action="{{ route('postingan.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Judul Postingan</label>
      <input type="text" class="form-control @error('judulpostingan')
      is-invalid @enderror" name="judulpostingan" value="{{old('judulpostingan')}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Penulis</label>
      <input type="text" class="form-control @error('penulis')
      is-invalid @enderror" name="penulis" value="{{old('penulis')}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Isi Postingan</label>
        <input type="text" class="form-control @error('descpostingan')
        is-invalid @enderror" name="descpostingan" value="{{old('descpostingan')}}">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
