@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di website maya')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah komputer yang tersedia di hari ini</p>

    @include('components.card', [
        'imgsrc' => 'images/pic1.jpeg',
        'title' => 'Komputer Asus',
        'description' => 'Komputer dengan Processor sangat cepat.',
    ])
@endsection
