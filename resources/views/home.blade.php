@extends('layouts.app')
@section('title')
    Home Page
@endsection
@section('content')
       <!-- About Start -->
       <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">{{__('lang.Biz_haqimizda')}}</h6>
                        <h2 class="mt-2">{{__('lang.10_yillik_tajribaga_ega_mutaxasislar')}}</h2>
                    </div>
                    <p class="mb-4">{{__('lang.Bizni_Jamoamiz_tajribali')}}</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{__('lang.Mukammal_proyektlar')}}</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>{{__('lang.Professional_xodimlar')}} </h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{__('lang.24/7_Qollabquvvatlash')}}</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>{{__('lang.Adolatli_narxlar')}}</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">{{__('lang.koproq_oqish')}}</a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{asset('assets/img/about.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
     <!-- Newsletter Start -->
     <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">{{__('lang.Biz_bilan_oz_loyihangizni_yarating')}} </h3>
                    <small class="text-red"> {{__('lang.biz_bilan_boglanish_uchun_pochta_manzilingizni_qoldiring!')}} </small>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="{{__('lang.Emailingizni_kiriting:')}}" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="height: 250px;" src="{{asset('assets/img/newsletter.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
     <!-- Service Start -->
     <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">{{__('lang.Bizning_xizmatlar')}}</h6>
                <h2 class="mt-2">{{__('lang.Internet Marketing xizmatlari')}}</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{__('lang.SEO optimallashtish')}}</h5>
                        <p>{{__('lang.')}}SEO optimallashtish SEO - bu sizning sayt qidiruv tizimiza yuqori o’rinlarda turishi, raqobatchilardan saytingiz yuqorida bo’lishi.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">{{__('lang.Batafsil')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{__('lang.Sayt_yaratish')}}</h5>
                        <p>{{__('lang.')}}Sayt yaratish Infinity internet marketing agentligi sizning biznesingiz uchun zamonaviy veb-saytlarni, internet-do'konlarni yaratadi.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">{{__('lang.Batafsil')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{__('lang.Googleda_reklama')}}</h5>
                        <p>{{__('lang.Sizga_yangi_mijozlar')}}</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">{{__('lang.Batafsil')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{__('lang.Brend_yaratish')}}</h5>
                        <p>{{__('lang.Kreativ_va_takrorlanmaydigan_brend')}}</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">{{__('lang.Batafsil')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{__('lang.Logotip_yasash')}}</h5>
                        <p>{{__('lang.Logotip_brendga')}}</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">{{__('lang.Batafsil')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">{{__('lang.SMM_xizmati')}}</h5>
                        <p>{{__('lang.SMM_internet_reklama')}}</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">{{__('lang.Batafsil')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->








     <!-- Footer Start -->
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
                    <h5 class="text-white mb-4">{{__('lang.')}}Biz bilan bog'laning</h5>
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
                        &copy; <a class="border-bottom" href="#">InfinityInnovation</a>,{{__('lang.Barcha_huquqlar_himoyalangan.')}} 
                        
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

@endsection