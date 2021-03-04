@extends('navconfoot/main')

@section('tittle', "Detail Biodata")

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">
                Detail Biodata
            </h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $biodata->nama_bio }}</h5>
                    <p class="card-text">{{ $biodata->umur_bio }}</p>
                    <p class="card-text">{{ $biodata->alamat_bio }}</p>
                    {{-- <p class="card-text">{{ $biodata->created_at }} - {{ $biodata->updated_at }}</p> --}}
                    
                    <a href="{{ $biodata->id }}/edit" class='btn btn-success'>Ubah</a>

                    <form action="/biodata/{{ $biodata->id }}" method="post" class='d-inline'>
                        @method('delete')
                        @csrf
                        <button type='submit' class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="/biodata" class="btn btn-info">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

 