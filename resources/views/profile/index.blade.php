@extends('layout-profile')
@section('title')
My Personal Profile
@endsection

@section('content')
<!-- intro  -->
<section class="hero">
    <h2>HELLO, WELCOME TO MY PROFILE</h2>
    <h1>Halo, Saya <span>Gede Juniada</span></h1>
    <p>Saya merupakan mahasiswa Informatika yang memiliki ketertarikan pada teknologi, pemrograman, dan pengembangan website.</p>
</section>

<!-- profile  -->
<section class="section">
    <h2>Informasi <span>Diri</span></h2>
    <p class="p">Berikut adalah informasi singkat tentang diri saya</p>
    <div class="profile-list">
        @foreach ($profile as $label => $value)
        <div class="profile-card">
            <p>{{ $label }}</p>
            <h3>{{ $value }}</h3>
        </div>
        @endforeach
    </div>
</section>

<!-- fav matkul  -->
<section class="section">
    <h2>Mata Kuliah <span>Favorit</span></h2>
    <p class="p">Lima mata kuliah yang menarik bagi saya</p>
    <div class="matkul-list">
        @foreach ($matakuliah as $i => $matkul)
        <div class="matkul-card">
            <p>{{ $i+1 }}</p>
            <h3>{{ $matkul }}</h3>
        </div>
        @endforeach
    </div>
</section>
@endsection