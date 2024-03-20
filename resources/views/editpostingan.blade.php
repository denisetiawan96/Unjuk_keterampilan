@extends('template')

@section('main')
<h2>Edit Kategori</h2>
<form action="{{ route('postingan.update', $data->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label class="form-label">Judul Postingan</label>
        <input type="text" class="form-control @error('judulpostingan')
        is-invalid @enderror" name="judulpostingan" value="{{$data->judulpostingan}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Penulis</label>
        <input type="text" class="form-control @error('penulis')
        is-invalid @enderror" name="penulis"value="{{$data->penulis}}">
      </div>
      <div class="mb-3">
          <label class="form-label">Isi Postingan</label>
          <input type="text" class="form-control @error('isi')
          is-invalid @enderror" name="descpostingan" value="{{$data->descpostingan}}">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
