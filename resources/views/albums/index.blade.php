@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Album</h2>
        <a href="/album/new" class="btn btn-primary mb-2">Tambah Album Baru</a>

        <div class="container">
            <div class="row">
@foreach ($albums as $a )

              <div class="col-sm">
                <div class="card" style="">
                    <div class="card-body">
                      <h5 class="card-title">{{$a->nama_album}}</h5>
                      <p class="card-text">{{$a->deskripsi}}.</p>
                      <a href="/detail/album/{{$a->id}}" class="btn btn-primary">Details</a>

                      <a href="/album/delete/{{$a->id}}"> Delete
                    </a>

                    </div>
                  </div>
              </div>

              @endforeach
            </div>
        </div>

    </div>

@endsection
