@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Album Baru</h2>
        <form action="/album/new_" method="POST" >
            @csrf
            @method('POST')
            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
            <div class="form-group">
                <label for="nama_album">Nama Album</label>
                <input type="text" class="form-control" id="nama_album" name="nama_album" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
