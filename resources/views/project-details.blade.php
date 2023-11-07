@extends('layouts.web')
@section('isi')

<section class="resume-section p-3 p-lg-5 " id="experience">
        <div class="row my-auto">
            <div class="col-12">
                <h2 class="  text-center">{{$proj->nama_project}}</h2>
                <div class="mb-5 heading-border"></div>
            </div>
           
            <div class="resume-item col-md-12 col-sm-12 ">
                <div class="card mx-0 p-4 mb-5" style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                    <div class=" resume-content mr-auto">
                        <h5 class="mb-3"> {{$proj->nama_project}}</h5>
                        <p>{!!$proj->keterangan_project!!}</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <a href="{{$proj->url_project}}"><span class="text-primary"><i class="fa fa-globe mr-3 text-info"></i>Link Project</span></a>
                    </div>
                </div>
            </div>
           
            
            
        </div>
    </section>

@endsection