@extends('navconfoot/main')

@section('tittle', "Biodata")

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-1">
                Daftar Nama
            </h1>
            <a href='/biodata/create' class='btn btn-primary my-1'>
                Tambah Data
            </a>

            @if (session('status'))
                <div class='alert alert-success'>
                    {{ session('status') }}
                </div>
            @endif

            <table class='table'>
                <thead class='thead-dark'> 
                    <tr>
                        <th scope='col' colspan='2'>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $biodata as $bio)
                    <tr>
                        {{-- <th scope='row'>{{ $loop->iteration }}</th> --}}
                        <td>{{ $bio->nama_bio }}</td>
                        {{-- <td>{{ $bio->umur_bio }}</td> --}}
                        {{-- <td>{{ $bio->alamat_bio }}</td> --}}
                        <td align='right'>
                            <a href="/biodata/{{ $bio->id }}" class="btn btn-info">Detail</a>
                            {{-- <a href="" class="badge badge-success">Ubah</a>
                            <a href="" class="badge badge-danger">Hapus</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

 