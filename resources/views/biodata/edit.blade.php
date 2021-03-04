@extends('navconfoot/main')

@section('tittle', "Form Ubah Biodata")

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">
                Form Edit Biodata
            </h1>
            <form method='post' action='/biodata/{{ $biodata->id }}'>
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama_bio') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Lengkap" name='nama_bio' value="{{ $biodata->nama_bio }}">
                    @error('nama_bio')
                        <div class='invalid-feedback'>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group" id='only-number'>
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control @error('umur_bio') is-invalid @enderror" id="umur" placeholder="Masukkan Umur" name='umur_bio' onKeyPress="if(this.value.length==3) return false;" value="{{ $biodata->umur_bio }}">
                    @error('umur_bio')
                        <div class='invalid-feedback'>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control @error('alamat_bio') is-invalid @enderror" id="alamat" rows="3" name='alamat_bio' placeholder='Masukkan Alamat Lengkap'>{{ $biodata->alamat_bio }}</textarea>
                    @error('alamat_bio')
                        <div class='invalid-feedback'>
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </form>
        </div>
    </div>
</div>
@endsection

 