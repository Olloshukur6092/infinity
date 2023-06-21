@extends('layouts.app')
@section('title')
    Home Page
@endsection

@section('content')



<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Bizning jamoa</h6>
            <h2 class="mt-2">Jamoamiz a'zolari bilan tanishing</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/team-1.jpg')}}"  alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Jaxongir</h5>
                        <small>CEO</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/Shixnazar.jpg')}}" alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Shixnazar Dushamov</h5>
                        <small>Project Manager</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.facebook.com/shohruh.zaripov.52"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.instagram.com/shoxruh_8899/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.linkedin.com/in/shohruh-zaripov-2339931b7/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="{{asset('assets/img/Shohruh.jpg')}}" alt="">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Shohruh Zaripov</h5>
                        <small>Full-Stack Developer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@section('scripts')
    <script>
        function changeLang(lang) {
            let url = "{{route('changeLang')}}"
            window.location.href = url + '?lang=' + lang.value;
        }
    </script>
@endsection

@endsection