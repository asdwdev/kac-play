@extends('layouts.main')

@section('container')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-4">{{ $post->title }}</h2>
                <img src="/img/artikel-img.jpg" alt="" class="w-100" style="height: 400px; object-fit: cover">
                <p class="lead">
                    {!! $post->body !!}
                </p>
            </div>
        </div>
    </div>
@endsection
