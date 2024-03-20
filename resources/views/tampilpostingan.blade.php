@extends('template')

@section('main')
<h1>Data Postingan</h1>
{{-- <a href="{{ url('barang/create') }}" class="btn btn-primary">Tambah Data URL</a> --}}
<a href="{{ route('postingan.create') }}" class="btn btn-primary mb-4">Tambah Data </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul Postingan</th>
        <th scope="col">Nama Penulis</th>
        <th scope="col">Isi</th>
        <th scope="col">Waktu</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
            <th scope="row">{{ $loop->iteration }} </th>
                <td>{{$item->judulpostingan}}</td>
                <td>{{$item->penulis}}</td>
                <td>{{$item->descpostingan}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href="{{ url('postingan/'.$item->id.'/edit')}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{ route('postingan.destroy', $item->id ) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
