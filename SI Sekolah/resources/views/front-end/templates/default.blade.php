<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>SI Sekolah</title>
    @include('front-end.templates._head')
</head>

<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="preload-content">
        <div id="world-load"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('beranda') }}">SI Sekolah</a>
                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav"
                            aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span></button>
                    <!-- Navbar -->
                    <div class="collapse navbar-collapse" id="worldNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('beranda') }}">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('data_guru') }}">Data Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('data_siswa') }}">Data Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('berita_front') }}">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hubungi_kami') }}">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ********** Hero Area Start ********** -->
<div class="hero-area">

    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay"
             style="background-image: url({{ asset('assets2/img/blog-img/sekolah.jpg') }});"></div>
        <!-- Single Slide -->
        <div class="single-hero-slide bg-img background-overlay"
             style="background-image: url({{ asset('assets2/img/blog-img/sekolah2.jpg') }});"></div>
    </div>

</div>
<!-- ********** Hero Area End ********** -->

<div class="main-content-wrapper section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- ============= Post Content Area Start ============= -->
            <div class="col-12 col-lg-8">
                <div class="post-content-area mb-50">

                    @yield('content')

                </div>
            </div>

            <!-- ========== Sidebar Area ========== -->
            <div class="col-12 col-md-8 col-lg-4">
                <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Tentang Sekolah</h5>
                        <div class="widget-content">
                            <p>Kami berharap, website ini bermanfaat sebagai media informasi, komunikasi dan
                                silaturrahim antara keluarga besar SMK Negeri 1 Slawi, orang tua/wali siswa, dan
                                masyarakat umum. Kami juga berharap website ini memberikan sumbangsih bagi dunia
                                pendidikan. Demikian yang dapat saya sampaikan. Selamat Berkunjung dan Terimakasih</p>
                        </div>
                    </div>
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Berita Terkini</h5>
                        <div class="widget-content">
                            @foreach($beritaTerkinis as $beritaTerkini)
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('images/' . $beritaTerkini->gambar) }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="{{ route('detail', $beritaTerkini->id) }}" class="headline">
                                            <h5 class="mb-0">Tiga Siswa SMK N 1 Slawi Menjadi Duta Lingkungan Hidup
                                                Kabupaten Tegal Tahun 2018</h5>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="footer-single-widget">
                    <a href="{{ route('beranda') }}"><h2>SI Sekolah</h2></a>
                    <div class="copywrite-text mt-30">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());
                            </script>
                            This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">@yolanda.yis</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

@include('front-end.templates._scripts')

</body>

</html>