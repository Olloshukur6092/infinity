<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            {{-- <h1 class="m-0"><i class="fa fa-search me-2"></i>INFINITY<span class="fs-5">INNOVATION</span></h1> --}}
             <img src="{{asset('assets/img/infinity.jpg')}}" alt="Logo"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">{{__('lang.Bosh_sahifa')}}</a>
                <a href="{{route('about')}}" class="nav-item nav-link">{{__('lang.Biz_haqimizda')}}</a>
                <a href="" class="nav-item nav-link">{{__('lang.Xizmatlar')}}</a>
                <a href="project.html" class="nav-item nav-link">{{__('lang.Loyihalar')}}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('lang.Sayt_yaratish')}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('team')}}" class="dropdown-item">{{__('lang.Bizning_jamoa')}}</a>
                        <a href="testimonial.html" class="dropdown-item">{{__('lang.Guvohnoma')}}</a>
                        <!--<a href="404.html" class="dropdown-item">404 Page</a>-->
                    </div>
                </div>
                <a href="" class="nav-item nav-link">{{__('lang.Contact')}} </a>
                <div class="input-group for-select mb-3">
                    <select class="form-select h-100" id="inputGroupSelect01" onchange="changeLang(this)">
                      <option value="uz" {{ session()->get('lang') === 'uz' ? 'selected' : '' }}>UZ</option>
                      <option value="ru" {{ session()->get('lang') === 'ru' ? 'selected' : '' }}>RU</option>
                      <option value="en" {{ session()->get('lang') === 'en' ? 'selected' : '' }}>EN</option>
                    </select>     
                  </div>
            </div>

        
            <!-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
           
            <!-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a> -->
        
        </div>
    </nav>

    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">{{__('lang.Biz_bilan_biznesingiz')}}</h1>
                    <p class="text-white pb-3 animated zoomIn">{{__('lang.Professional_jamoamiz')}}</p>
                    <!-- <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free Quote</a>
                    <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a> -->
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid" src="{{asset('assets/img/hero.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        function changeLang(lang) {
            let url = "{{route('changeLang')}}"
            window.location.href = url + '?lang=' + lang.value;
        }
    </script>
@endsection
