@extends('front-end.templates.default')

@section('content')
    <div class="world-catagory-area">
        <ul class="nav nav-tabs" id="myTab2" role="tablist">
            <li class="title">Data Guru</li>
        </ul>

        <div class="tab-content" id="myTabContent2">

            <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                <div class="row">
                    @foreach($gurus as $guru)
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig"
                             data-wow-delay="0.2s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('images/' . $guru->gambar) }}" style="padding: 20px" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>{{ $guru->nama }}</h5>
                                </a>
                                <p>Pengampu : {{ $guru->pengampu }}</p>
                                <div class="post-meta">
                                    <p>
                                        <a href="#" class="post-author">admin</a> on
                                        <a href="#" class="post-date">{{ $guru->created_at }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection