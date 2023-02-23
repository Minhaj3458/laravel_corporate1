@extends('layouts.frontend.app')
@push('style')
<style>
                    .u-section-1 {
                background-image: none;
                }

                /* .u-section-1 .u-sheet-1 {
                min-height: 1223px;
                } */

                .u-section-1 .u-text-1 {
                --animation-custom_in-translate_x: -300px;
                --animation-custom_in-translate_y: 0px;
                --animation-custom_in-opacity: 0;
                --animation-custom_in-rotate: 0deg;
                --animation-custom_in-scale: 1;
                width: 723px;
                margin: 60px auto 0;
                }

                .u-section-1 .u-text-2 {
                font-size: 1.125rem;
                width: 746px;
                margin: 40px auto 0;
                }

                .u-section-1 .u-list-1 {
                grid-template-rows: repeat(1, auto);
                margin-top: 48px;
                margin-bottom: 0;
                }

                .u-section-1 .u-repeater-1 {
                grid-template-columns: repeat(3, calc(33.3333% - 13.3333px));
                min-height: 770px;
                grid-gap: 20px;
                }

                .u-section-1 .u-image-1 {
                background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("frontend/img/jhjh688.jpg");
                background-position: 50% 50%;
                --animation-custom_in-translate_x: 0px;
                --animation-custom_in-translate_y: 0px;
                --animation-custom_in-opacity: 0;
                --animation-custom_in-rotate: 0deg;
                --animation-custom_in-scale: 0.3;
                }

                .u-section-1 .u-container-layout-1 {
                padding: 0 0 30px;
                }

                .u-section-1 .u-group-1 {
                min-height: 112px;
                margin-top: 270px;
                margin-bottom: -30px;
                height: auto;
                }

                .u-section-1 .u-container-layout-2 {
                padding: 20px 30px;
                }

                .u-section-1 .u-text-3 {
                font-size: 1.625rem;
                margin: 0;
                }

                .u-section-1 .u-image-2 {
                background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("frontend/img/g4.jpg");
                background-position: 50% 50%;
                --animation-custom_in-translate_x: 0px;
                --animation-custom_in-translate_y: 0px;
                --animation-custom_in-opacity: 0;
                --animation-custom_in-rotate: 0deg;
                --animation-custom_in-scale: 0.3;
                }

                .u-section-1 .u-container-layout-3 {
                padding: 0 0 30px;
                }

                .u-section-1 .u-group-2 {
                min-height: 112px;
                margin-top: 270px;
                margin-bottom: -30px;
                height: auto;
                }

                .u-section-1 .u-container-layout-4 {
                padding: 20px 30px;
                }

                .u-section-1 .u-text-4 {
                font-size: 1.625rem;
                margin: 0;
                }

                .u-section-1 .u-image-3 {
                background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("frontend/img/gfgggggggggg.jpg");
                background-position: 50% 50%;
                --animation-custom_in-translate_x: 0px;
                --animation-custom_in-translate_y: 0px;
                --animation-custom_in-opacity: 0;
                --animation-custom_in-rotate: 0deg;
                --animation-custom_in-scale: 0.3;
                }

                .u-section-1 .u-container-layout-5 {
                padding: 0 0 30px;
                }

                .u-section-1 .u-group-3 {
                min-height: 112px;
                margin-top: 270px;
                margin-bottom: -30px;
                height: auto;
                }

                .u-section-1 .u-container-layout-6 {
                padding: 20px 30px;
                }

                .u-section-1 .u-text-5 {
                font-size: 1.625rem;
                margin: 0;
                }

                .u-section-1 .u-image-4 {
                background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("frontend/img/fgfg.jpg");
                background-position: 50% 50%;
                --animation-custom_in-translate_x: 0px;
                --animation-custom_in-translate_y: 0px;
                --animation-custom_in-opacity: 0;
                --animation-custom_in-rotate: 0deg;
                --animation-custom_in-scale: 0.3;
                }

                .u-section-1 .u-container-layout-7 {
                padding: 0 0 30px;
                }

                .u-section-1 .u-group-4 {
                min-height: 112px;
                margin-top: 270px;
                margin-bottom: -30px;
                height: auto;
                }

                .u-section-1 .u-container-layout-8 {
                padding: 20px 30px;
                }

                .u-section-1 .u-text-6 {
                font-size: 1.625rem;
                margin: 0;
                }

                .u-section-1 .u-image-5 {
                background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("frontend/img/PSD_01.jpg");
                background-position: 50% 50%;
                --animation-custom_in-translate_x: 0px;
                --animation-custom_in-translate_y: 0px;
                --animation-custom_in-opacity: 0;
                --animation-custom_in-rotate: 0deg;
                --animation-custom_in-scale: 0.3;
                }

                .u-section-1 .u-container-layout-9 {
                padding: 0 0 30px;
                }

                .u-section-1 .u-group-5 {
                min-height: 112px;
                margin-top: 270px;
                margin-bottom: -30px;
                height: auto;
                }

                .u-section-1 .u-container-layout-10 {
                padding: 20px 30px;
                }

                .u-section-1 .u-text-7 {
                font-size: 1.625rem;
                margin: 0;
                }

                .u-section-1 .u-image-6 {
                background-image: linear-gradient(0deg, rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("frontend/img/fff.jpg");
                background-position: 50% 50%;
                --animation-custom_in-translate_x: 0px;
                --animation-custom_in-translate_y: 0px;
                --animation-custom_in-opacity: 0;
                --animation-custom_in-rotate: 0deg;
                --animation-custom_in-scale: 0.3;
                }

                .u-section-1 .u-container-layout-11 {
                padding: 0 0 30px;
                }

                .u-section-1 .u-group-6 {
                min-height: 112px;
                margin-top: 270px;
                margin-bottom: -30px;
                height: auto;
                }

                .u-section-1 .u-container-layout-12 {
                padding: 20px 30px;
                }

                .u-section-1 .u-text-8 {
                font-size: 1.625rem;
                margin: 0;
                }

                .u-section-1 .u-text-9 {
                --animation-custom_in-translate_x: 300px;
                --animation-custom_in-translate_y: 0px;
                --animation-custom_in-opacity: 0;
                --animation-custom_in-rotate: 0deg;
                --animation-custom_in-scale: 1;
                width: 295px;
                margin: 41px auto 60px;
                }

                .u-section-1 .u-btn-1 {
                padding: 0;
                }

                @media (max-width: 1199px) {
                .u-section-1 .u-repeater-1 {
                    grid-template-columns: repeat(3, calc(33.333333333333336% - 13.3333px));
                    min-height: 634px;
                }

                .u-section-1 .u-group-1 {
                    height: auto;
                }

                .u-section-1 .u-group-2 {
                    height: auto;
                }

                .u-section-1 .u-group-3 {
                    height: auto;
                }

                .u-section-1 .u-group-4 {
                    height: auto;
                }

                .u-section-1 .u-group-5 {
                    height: auto;
                }

                .u-section-1 .u-group-6 {
                    height: auto;
                }
                }

                @media (max-width: 991px) {
                .u-section-1 .u-text-1 {
                    width: 720px;
                }

                .u-section-1 .u-text-2 {
                    width: 720px;
                }

                .u-section-1 .u-repeater-1 {
                    grid-template-columns: repeat(2, calc(50% - 9.999975px));
                    min-height: 1115px;
                }
                }

                @media (max-width: 767px) {
                .u-section-1 .u-text-1 {
                    width: 540px;
                }

                .u-section-1 .u-text-2 {
                    width: 540px;
                }

                .u-section-1 .u-repeater-1 {
                    grid-template-columns: 100%;
                }

                .u-section-1 .u-container-layout-2 {
                    padding-left: 10px;
                    padding-right: 10px;
                }

                .u-section-1 .u-container-layout-4 {
                    padding-left: 10px;
                    padding-right: 10px;
                }

                .u-section-1 .u-container-layout-6 {
                    padding-left: 10px;
                    padding-right: 10px;
                }

                .u-section-1 .u-container-layout-8 {
                    padding-left: 10px;
                    padding-right: 10px;
                }

                .u-section-1 .u-container-layout-10 {
                    padding-left: 10px;
                    padding-right: 10px;
                }

                .u-section-1 .u-container-layout-12 {
                    padding-left: 10px;
                    padding-right: 10px;
                }
                }

                @media (max-width: 575px) {
                .u-section-1 .u-text-1 {
                    width: 340px;
                }

                .u-section-1 .u-text-2 {
                    width: 340px;
                }
                }
</style>
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<link rel="stylesheet" href="{{ asset("frontend/css/service1.css") }}">
<link rel="stylesheet" href="{{ asset("frontend/css/service2.css") }}">
<script src="{{ asset("frontend/js/service.js") }}"></script>
@endpush
@section('content')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Our Services</h1>
            <a href="{{ route('index') }}" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{ route('services') }}" class="h5 text-white">Services</a>
        </div>
    </div>
</div>
</div>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
<div class="modal-dialog modal-fullscreen">
    <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
        <div class="modal-header border-0">
            <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
            <div class="input-group" style="max-width: 600px;">
                <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Full Screen Search End -->



<!-- Our Mission Start -->
<div class="container">
    <section class="u-align-center u-clearfix u-container-align-center u-palette-5-light-3 u-section-1" style="background:#fff;" >
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
          <h2 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">Our Works</h2>
          <p class="u-align-center u-text u-text-2"> Quam quisque id diam vel quam elementum. Vestibulum lectus mauris ultrices eros in cursus turpis massa tincidunt. Pellentesque habitant morbi tristique senectus et netus. </p>
          <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
              <div class="u-align-left u-container-style u-image u-list-item u-repeater-item u-shading u-image-1" src="#" data-image-width="759" data-image-height="759" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-75 u-palette-2-base u-group-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                      <h5 class="u-text u-text-3">Website Design</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-image u-list-item u-repeater-item u-shading u-image-2" src="#" data-image-width="759" data-image-height="759" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-similar-container u-container-layout-3">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-75 u-palette-2-base u-group-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    <div class="u-container-layout u-valign-middle u-container-layout-4">
                      <h5 class="u-text u-text-4">Mobile Application</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-image u-list-item u-repeater-item u-shading u-image-3" src="#" data-image-width="1000" data-image-height="914" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-similar-container u-container-layout-5">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-75 u-palette-2-base u-group-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    <div class="u-container-layout u-valign-middle u-container-layout-6">
                      <h5 class="u-text u-text-5">Corporate Design</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-image u-list-item u-repeater-item u-shading u-image-4" src="#" data-image-width="898" data-image-height="898" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-similar-container u-container-layout-7">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-75 u-palette-2-base u-group-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    <div class="u-container-layout u-valign-middle u-container-layout-8">
                      <h5 class="u-text u-text-6">Mobile Application</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-image u-list-item u-repeater-item u-shading u-image-5" src="#" data-image-width="1355" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-similar-container u-container-layout-9">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-75 u-palette-2-base u-group-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    <div class="u-container-layout u-valign-middle u-container-layout-10">
                      <h5 class="u-text u-text-7"> Responsive Design</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-image u-list-item u-repeater-item u-shading u-image-6" src="#" data-image-width="898" data-image-height="898" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-similar-container u-container-layout-11">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-75 u-palette-2-base u-group-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    <div class="u-container-layout u-valign-middle u-container-layout-12">
                      <h5 class="u-text u-text-8"> Digital Product</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </section>

</div>
<!-- Our Mission End -->



<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
        <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
    </div>
    <div class="row g-5">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
            <div class="team-item bg-light rounded overflow-hidden">
                <div class="team-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/team-1.jpg')}}" alt="">
                    <div class="team-social">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <h4 class="text-primary">Full Name</h4>
                    <p class="text-uppercase m-0">Designation</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
            <div class="team-item bg-light rounded overflow-hidden">
                <div class="team-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/team-2.jpg')}}" alt="">
                    <div class="team-social">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <h4 class="text-primary">Full Name</h4>
                    <p class="text-uppercase m-0">Designation</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
            <div class="team-item bg-light rounded overflow-hidden">
                <div class="team-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/team-3.jpg')}}" alt="">
                    <div class="team-social">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <h4 class="text-primary">Full Name</h4>
                    <p class="text-uppercase m-0">Designation</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team End -->


<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-5 mb-5">
    <div class="bg-white">
        <div class="owl-carousel vendor-carousel">
            <img src="{{ asset('frontend/img/vendor-1.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-2.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-3.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-4.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-5.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-6.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-7.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-8.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-9.jpg')}}" alt="">
        </div>
    </div>
</div>
</div>
<!-- Vendor End -->

@endsection
