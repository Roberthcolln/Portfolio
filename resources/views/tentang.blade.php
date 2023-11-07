
@extends('layouts.web')
@section('isi')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="web/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Page Section Begin -->
    <section class="about-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="about__text about__page__text">
                        <div class="section-title">
                            <span>Siapa Kami</span>
                            <h2>Tentang Kita</h2>
                        </div>
                        <div class="about__para__text">
                            <p>Seperti yang Anda harapkan dari perusahaan yang dimulai sebagai jasa teknologi informasi kelas atas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="about__page__services">
                        <div class="about__page__services__text">
                            <p>{!! $konf->tentang_setting !!}</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Page Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="web/img/call-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="callto__text">
                        <span>Mengapa memilih kami?</span>
                        <h2>KEMAMPUAN KAMI UNTUK MEMBERIKAN HASIL YANG LUAR BIASA KEPADA PELANGGAN KAMI.</h2>
                        <a href="https://api.whatsapp.com/send?phone={{$konf->no_hp_setting}}" class="primary-btn" target="_blank">Hubungi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Tim Kami</span>
                        <h2>Temui tim kami</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    
                </div>
            </div>
            <div class="row">
                @foreach ($founder as $row)
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" data-setbg="{{asset('file/team/'.$row->foto_team)}}">
                        <div class="team__text">
                            <div class="team__title">
                                <h5>{{$row->nama_team}}</h5>
                                <span>{{$row->jabatan_team}}</span>
                            </div>
                            <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                                porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                            <div class="team__social">
                                <a href="{{$row->facebook_team}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$row->instagram_team}}"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    @endsection

    