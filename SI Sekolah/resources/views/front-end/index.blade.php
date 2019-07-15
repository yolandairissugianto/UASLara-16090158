@extends('front-end.templates.default')

@section('content')
    <div class="world-catagory-area">
        <ul class="nav nav-tabs" id="myTab2" role="tablist">
            <li class="title">Berita Terkini</li>
        </ul>

        <div class="tab-content" id="myTabContent2">

            <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                <div class="row">
                    @foreach($beritas as $berita)
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ asset('images/' . $berita->gambar) }}" alt="">
                                    <!-- Catagory -->
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="{{ route ('detail', $berita->id)}}" class="headline">
                                        <h5>{{ $berita->judul }}</h5>
                                    </a>
                                    <p>{{ $berita->isi_berita }}</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>
                                            <a href="#" class="post-author">admin</a> on
                                            <a href="#" class="post-date">{{ $berita->created_at }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection