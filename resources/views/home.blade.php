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
                        <h6 class="position-relative text-primary ps-4">Biz haqimizda</h6>
                        <h2 class="mt-2">10 yillik tajribaga ega mutaxasislar</h2>
                    </div>
                    <p class="mb-4">Bizni Jamoamiz tajribali o'z ishing ustalaridan iborat bizga har qanday loyiha bo'yicha murojat qilishingiz mumkin.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Mukammal proyektlar</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i> Professional xodimlar</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Qo'llab-quvvatlash</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Adolatli narxlar</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">Ko'proq o'qish</a>
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
                    <h3 class="text-white">Biz bilan o'z loyihangizni yarating </h3>
                    <small class="text-red"> biz bilan bog'lanish uchun pochta manzilingizni qoldiring! </small>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Emailingizni kiriting:" style="height: 48px;">
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
                <h6 class="position-relative d-inline text-primary ps-4">Bizning xizmatlar</h6>
                <h2 class="mt-2">Internet Marketing xizmatlari</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">SEO optimallashtish</h5>
                        <p>SEO optimallashtish SEO - bu sizning sayt qidiruv tizimiza yuqori o’rinlarda turishi, raqobatchilardan saytingiz yuqorida bo’lishi.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Batafsil</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Sayt yaratish</h5>
                        <p>Sayt yaratish Infinity internet marketing agentligi sizning biznesingiz uchun zamonaviy veb-saytlarni, internet-do'konlarni yaratadi.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Batafsil</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Googleda reklama</h5>
                        <p>Sizga yangi mijozlar, savdo o'sishi, ko'proq foydalanuvchi trafigini hohlaysizmi? Google-da hamyonbob narxlarda professional internet reklama, kontekstli reklama buyurtma qilishni taklif qilamiz.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Batafsil</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Brend yaratish</h5>
                        <p>Kreativ va takrorlanmaydigan brend nomini yaratishga yordam kerakmi ? Oqila Internet marketing agentligi biznesingiz uchun mukammal va kreativ brendlarni taklif etadi.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Batafsil</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Logotip yasash</h5>
                        <p>Logotip brendga kuchli poydevor beradigan qismdir. Infinity internet marketing agentligi logotip ishlab chiqish sohasida Oʻzbekistonda yetakchi hisoblanadi. 20 dan ortiq mamnun mijozlar.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Batafsil</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">SMM xizmati</h5>
                        <p>SMM internet reklama xizmati: Instagram, Youtube, Facebook kabi ommabop ijtimoiy tarmoqlarda savdo hajmini oshirish uchun, auditoriyani qamrab olgan holda mijozlarni jalb qilishdan iborat.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Batafsil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection