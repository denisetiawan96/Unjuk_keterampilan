@extends('template')

@section('main')
<h1>Data Barang</h1>
{{-- <a href="{{ url('barang/create') }}" class="btn btn-primary">Tambah Data URL</a> --}}
<a href="{{ route('barang.create') }}" class="btn btn-primary mb-4">Tambah Data </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Kategori</th>
        <th scope="col">Foto</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi Barang</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
            <th scope="row">{{ $loop->iteration }} </th>
                <td>{{$item->namabarang}}</td>
                <td>{{$item->kategori->namakategori}}</td>
                <td>{{$item->foto}}</td>
                <td>{{$item->harga}}</td>
                <td>{{$item->descproduk}}</td>
                <td><a href="{{ url('barang/'.$item->id.'/edit')}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{ route('barang.destroy', $item->id ) }}" method="POST">
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
