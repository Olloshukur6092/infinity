{{-- @extends('layouts.app') --}}
    {{-- @extends('layouts.app')
    @section('title')
        Home Page
    @endsection
    @section('content')

    @endsection --}}
<!-- Footer Start -->
@yield('footer')
<div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">{{__('lang.Aloqa_bolimi')}}</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>{{__('lang.Mirobod_tumani')}}</p>
                <p><i class="fa fa-phone-alt me-3"></i>+998 99 975 66 58</p>
                <p><i class="fa fa-envelope me-3"></i>infinity@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/farkhadoff.b/"><i class="fab fa-instagram"></i></a>
                    <!--<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>-->
                   <!--<a> <span id="boot-icon" class="bi bi-telegram" style="font-size:2"></span> </a>-->
                    <a class="btn btn-outline-light btn-social" href="https://web.telegram.org/z/#1838760500"><i class="fab fa-telegram" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">{{__('lang.Menyu')}}</h5>
                <a class="btn btn-link" href="">{{__('lang.Biz_haqimizda')}}</a>
                <a class="btn btn-link" href="">{{__('lang.Aloqa_uchun')}}</a>
                <!--<a class="btn btn-link" href="">Privacy Policy</a>-->
                <!--<a class="btn btn-link" href="">Terms & Condition</a>-->
                <!--<a class="btn btn-link" href="">Career</a>-->
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">{{__('lang.Loyihalar')}}</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid" src="/assets/img/uzte1.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="/assets/img/uzte1.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="/assets/img/uzinterimpeks.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="/assets/img/portfolio-4.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="/assets/img/portfolio-5.jpg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="/assets/img/portfolio-6.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">{{__('lang.Biz_bilan_boglaning')}}</h5>
                <p>{{__('lang.')}}</p>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Pochta manzilingiz: " style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">InfinityInnovation</a>,{{__('lang.Barcha_huquqlar_himoyalangan')}}. 
                    
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                     <!--Mo'ljallangan-->
                    
                    <a class="border-bottom" href="#">infinityinnovation</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <!--<a href="">Bosh sahifa</a>-->
                        <!--<a href="">Cookies</a>-->
                        <!--<a href="">Help</a>-->
                        <!--<a href="">FQAs</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>  
<!-- Footer End -->

