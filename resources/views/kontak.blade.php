
@extends('layouts.web')
@section('isi')
    <!-- Contact Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="web/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact__text">
                        <div class="section-title" style="color: white;" >
                            <span>Information</span>
                            <h2 style="color: gold;">Contact Details</h2>
                        </div>
                        <p>As you might expect of a company that began as a high-end interiors contractor, we pay strict
                        attention.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <img src="web/img/contact/ci-1.png" alt="">
                        </div>
                        <div class="contact__widget__item__text text-warning" style="color: white;">
                            <h5>Phone Number</h5>
                            <span style="color: white;">{{$konf->no_hp_setting}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <img src="web/img/contact/ci-2.png" alt="">
                        </div>
                        <div class="contact__widget__item__text">
                            <h5>Email Address</h5>
                            <span style="color: white;">{{$konf->email_setting}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item last__item">
                        <div class="contact__widget__item__icon">
                            <img src="web/img/contact/ci-3.png" alt="">
                        </div>
                        <div class="contact__widget__item__text">
                            <h5>Office Location</h5>
                            <span style="color: white;">{{$konf->alamat_setting}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                src="{{$konf->maps_setting}}"
                height="460" style="border:0;" allowfullscreen=""></iframe>
            </div>
            
        </div>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    @endsection
    