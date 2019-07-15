@extends('front-end.templates.default')

@section('content')
<div class="world-catagory-area">
    
    
    <div class="single-blog-content mb-100">
        <!-- Post Meta -->
        <div class="post-meta">
            <b><h2>Tiga Siswa SMK N 1 Slawi Menjadi Duta Lingkungan Hidup Kabupaten Tegal Tahun 2018</h2></b>
        </div>
        <div class="post-thumbnail">
            <img src="{{ asset('images/' . $berita->gambar) }}" alt="">
        </div>
        <!-- Post Content -->
        <div class="post-content">
            <h6>{{ $berita->isi_berita }}</h6>
            <div class="post-meta second-part">
                <p><a href="#" class="post-date">{{ $berita->created_at }}</a></p>
            </div>
        </div>
    </div>
</div>
@endsection