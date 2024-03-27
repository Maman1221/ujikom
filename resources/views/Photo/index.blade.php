@extends('layouts/app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body class="bg-light">

    <div>
        {{-- <a href="{{ route('dashboard') }}" class="btn btn-secondary"><-- Back to Dashboard</a> --}}
    </div>
    <div class="container py-5">
      <div class="d-flex align-items-center justify-content-between mb-5">
        <h1>Photo</h1>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">
          Tambah
        </button>
      </div>

      <div class="row">
        @foreach ($Photo as $item)
        <div class="col-md-4">
            <div class="card border-0 md-3">
                <img src="{{asset('storage/' . $item->judul_foto) }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->tanggal_upload }}</h5>
                    <p class="mb-8 text-secondary">{{ $item->deskripsi_foto }}</p>
                </div>

                @foreach ($item->photoComments as $c )
{{$c->content}}
@endforeach

                <!-- Form Komentar -->
                <form method="POST" action="{{ route('komentar.store', ['photo' => $item->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <textarea name="content" rows="3" placeholder="Tambahkan komentar" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Komentar</button>
                </form>

            @if ($item->komentar_photos)
            @foreach ($item->komentar_photos as $comment)
           <p>{{ $comment->user->name }}: {{ $comment->content }}</p>
       @endforeach
     @endif

                <form action="{{ route('delete_photo', ['id' => $item->id]) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Photo ?')">Delete</button>
                </form>

            </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="modal" id="addItem" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Photo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('Photo.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
            @method('POST')
            <input type="hidden" name="tanggal_upload" value="{{now()}}">
            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                    <div class="mb-3">
                      <label for="title">Judul Photo</label>
                      <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="mb-3">
                      <label for="image">Gambar</label>
                      <input type="file" accept="image/*" name="judul_foto" id="image" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="description">Deskripsi</label>
                      <textarea name="deskripsi_foto" id="description" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

@endsection
