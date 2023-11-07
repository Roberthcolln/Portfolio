@extends('layouts.web')
@section('isi')
<div class="container-fluid p-0">

    <!--====================================================
                    About MODALS
======================================================-->
    <div class="about-modal modal fade" id="aboutModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                                <div class="col-md-12">
                                    <h2 class="text-center">About</h2>
                                    <div class="heading-border"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img-fluid img-centered" src="{{asset('logo/'.$konf->logo_setting)}}" alt="">
                                </div>
                                <div class="col-md-12">
                                    <p>{!!$konf->tentang_setting!!}</p>
                                    <ul class="list-inline item-details">
                                        <li>Name :
                                            <strong>
                                                {{$konf->instansi_setting}}
                                            </strong>
                                        </li>
                                        <li>Birthday :
                                            <strong>
                                                13 September 1997
                                            </strong>
                                        </li>
                                        <li>
                                            <strong>
                                                <a href="web/cv.pdf" target="_blank">Download CV</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                        <i class="fa fa-times"></i> Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================================================
                        ABOUT
    ======================================================-->
    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
            <img src="{{asset('favicon/'.$konf->favicon_setting)}}" style="width: 30%;" class="img-fluid mb-3" alt="">
            <h1 class="mb-0">Roberth
                <span class="text-primary">Pattikawa</span>
            </h1>
            <div class="subheading mb-5">ANAK VESPA BISA NGODING !!
                <a class="about-link" href="#aboutModal1" data-toggle="modal">Tentang Saya </a>
            </div>
            <!-- <p>{!!$konf->tentang_setting!!}</p> -->
            <ul class="list-inline list-social-icons mb-0">
                <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!--====================================================
                        EXPERIENCE
    ======================================================-->
    <section class="resume-section p-3 p-lg-5 " id="experience">
        <div class="row my-auto">
            <div class="col-12">
                <h2 class="  text-center">Experience</h2>
                <div class="mb-5 heading-border"></div>
            </div>
            @foreach ($work as $row)
            <div class="resume-item col-md-6 col-sm-12 ">
                <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                    <div class=" resume-content mr-auto">
                        <h5 class="mb-3"><i class="fa fa-globe mr-3 text-info"></i> {{$row->nama_work}}</h5>
                        <p>{!!$row->keterangan_work!!}</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">{{Carbon\Carbon::parse($row->tanggal_masuk_work)->isoFormat(' MMMM Y')}} - {{Carbon\Carbon::parse($row->tanggal_keluar_work)->isoFormat(' MMMM Y')}}</span>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </section>

    <!--====================================================
                           Education
    ======================================================-->
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="row my-auto">
            <div class="col-12">
                <h2 class="  text-center">Education</h2>
                <div class="mb-5 heading-border"></div>
            </div>
            <div class="main-award" id="award-box">
                @foreach ($education as $row)
                <div class="award">
                    <div class="award-icon"></div>
                    <div class="award-content">
                        <span class="date">{{Carbon\Carbon::parse($row->tanggal_masuk_education)->isoFormat(' MMMM Y')}} - {{Carbon\Carbon::parse($row->tanggal_keluar_education)->isoFormat(' MMMM Y')}}</span>
                        <h5 class="title">{{$row->nama_education}}</h5>
                        <p class="">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                        </p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>

    <!--====================================================
                        PORTFOLIO
    ======================================================-->
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="portfolio">
        <div class="row my-auto">
            <div class="col-12">
                <h2 class="  text-center">Portfolio</h2>
                <div class="mb-5 heading-border"></div>
            </div>
            <!-- <div class="col-md-12">
                <div class="port-head-cont">
                    <button class="btn btn-general btn-green filter-b" data-filter="all">All</button>
                    <button class="btn btn-general btn-green filter-b" data-filter="consulting">Web Design</button>
                    <button class="btn btn-general btn-green filter-b" data-filter="finance">Mobile Apps</button>
                    <button class="btn btn-general btn-green filter-b" data-filter="marketing">Graphics Design</button>
                </div>
            </div> -->
        </div>
        <div class="row my-auto">
            @foreach ($project as $row)
            <div class="col-sm-4 portfolio-item filter finance">
                <a class="portfolio-link" href="{{ url('project-details', $row->slug_project) }}">
                    <div class="caption-port">
                        <div class="caption-port-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('file/project/'.$row->gambar_project)}}" alt="">
                </a>
            </div>
            @endforeach


        </div>
    </section>

    <!--====================================================
                        SKILLS
    ======================================================-->
    <section class=" d-flex flex-column" id="skills">
        <div class="p-lg-5 p-3 skill-cover">
            <h3 class="text-center text-white">Coding Skills</h3>
            <div class="row text-center my-auto ">
                <div class="col-md-3 col-sm-6">
                    <div class="skill-item">
                        <i class="fa fa-html5 fa-5x"></i>
                        <h2><span class="counter"> 80 </span><span>%</span></h2>
                        <p>HTML</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="skill-item">
                        <i class="fa fa-css3 fa-5x"></i>
                        <h2><span class="counter"> 70 </span><span>%</span></h2>
                        <p>CSS</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="skill-item">
                        <i class="fa fa-code fa-5x"></i>
                        <h2><span class="counter"> 50 </span><span>%</span></h2>
                        <p>JS</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="skill-item">
                        <i class="fa fa-globe fa-5x"></i>
                        <h2><span class="counter"> 70 </span><span>%</span></h2>
                        <p>PHP</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--====================================================
                          CONTACT
    ======================================================-->
    <section class="resume-section p-3 p-lg-5 d-flex flex-column">
        <div class="row my-auto" id="contact">
            <div class="col-md-8">
                <div class="contact-cont">
                    <h3>CONTACT Us</h3>
                    <div class="heading-border-light"></div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here.</p>
                </div>
                <div class="row con-form">
                    <div class="col-md-12">
                        <input type="text" name="full-name" placeholder="Full Name" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <input type="text" name="email" placeholder="Email Id" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <input type="text" name="subject" placeholder="Subject" class="form-control">
                    </div>
                    <div class="col-md-12"><textarea name="" id=""></textarea></div>
                    <div class="col-md-12 sub-but"><button class="btn btn-general btn-white" role="button">Send</button></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mt-5">
                <div class="contact-cont2">
                    <div class="contact-add contact-box-desc">
                        <h3><i class="fa fa-map-marker cl-atlantis fa-2x"></i> Address</h3>
                        <p>25, Dist town Street, Logn <br>
                            California, US <br></p>
                    </div>
                    <div class="contact-phone contact-side-desc contact-box-desc">
                        <h3><i class="fa fa-phone cl-atlantis fa-2x"></i> Phone</h3>
                        <p>800 123 3456 <br>900 123 3457</p>
                    </div>
                    <div class="contact-mail contact-side-desc contact-box-desc">
                        <h3><i class="fa fa-envelope-o cl-atlantis fa-2x"></i> Email</h3>
                        <address class="address-details-f">
                            Fax: 800 123 3456 <br>
                            Email: <a href="mailto:info@themsbit.com" class="">info@themsbit.com</a>
                        </address>
                        <ul class="list-inline social-icon-f top-data">
                            <li><a href="#" target="_empty"><i class="fa top-social fa-facebook" style="color: #4267b2; border-color:#4267b2;"></i></a></li>
                            <li><a href="#" target="_empty"><i class="fa top-social fa-twitter" style="color: #4AB3F4; border-color:#4AB3F4;"></i></a></li>
                            <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus" style="color: #e24343; border-color:#e24343;"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" d-flex flex-column" id="maps">
        <div id="map">
            <div class="map-responsive">
                <iframe src="{{$konf->maps_setting}}" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>


</div>

<!--====================================================
                    PORTFOLIO MODALS
======================================================-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered" src="web/img/portfolio/p-1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                            <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                            <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                            <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered" src="web/img/portfolio/p-2.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                            <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                            <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                            <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered" src="web/img/portfolio/p-3.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                            <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                            <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                            <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered" src="web/img/portfolio/p-4.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                            <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                            <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                            <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered" src="web/img/portfolio/p-5.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                            <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                            <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                            <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered" src="web/img/portfolio/p-6.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                            <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                            <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                            <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered" src="web/img/portfolio/p-7.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                            <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                            <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                            <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered" src="web/img/portfolio/p-8.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                            <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                            <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                            <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="modal-body">
                        <div class="title-bar">
                            <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid img-centered" src="web/img/portfolio/p-9.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                            <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                            <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                            <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection