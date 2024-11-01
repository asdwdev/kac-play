@extends('layouts.main')

@section('container')
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-4">Blog & Artikel</h2>
                <p class="lead">
                    Baca artikel dan tips terbaru kami tentang perkembangan anak, ide bermain, dan kegiatan edukatif
                    untuk anak.
                </p>
            </div>
            <div class="col-lg-5">
                <form action="/posts">
                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Cari.." autofocus>
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- Daftar Artikel -->
        <div class="row g-4 my-2">
            @if ($posts->count())
                <div class="card mb-3 p-0">
                    <img src="/img/artikel-img.jpg" class="card-img-top" height="400" style="object-fit: cover">
                    <div class="card-body text-center">
                        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                                class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>

                        <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Baca
                            Selengkapnya</a>
                    </div>
                </div>

                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="/img/artikel-img.jpg" class="card-img-top" alt="Artikel 1">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">
                                    {{ $post->slug }}
                                </p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="fs-4 text-center">Postingan tidak ditemukan.</p>
            @endif

        </div>

        <div class="d-flex justify-content-end mt-3">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
