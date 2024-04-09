<header>
    <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <a href="{{ route('anasayfa') }}#bas" class="navbar-brand">
                        <!-- <img src="{{ asset('images/delivery.png') }}" alt="Your Logo" style="height: 50px; color: white"> logo yüksekliğini isteğinize göre ayarlayın -->
                        <a style="color: white">Lüks Harput Taşımacılık</a>
                    </a>
                </div>
                <div class="top-link pe-2">
                    <img src="{{ asset('images/map.png') }}" class="img-fluid rounded" alt="First slide" style="width: 20px; height: 20px; background: none;">
                    <a href="{{route('anasayfa')}}#map" class="text-white"><small class="text-white mx-2" style="margin-right: 5px">Konum     </small></a>
                    <img src="{{ asset('images/clock.png') }}" class="img-fluid rounded" alt="second slide" style="width: 20px; height: 20px; background: none;">

                    <a class="text-white"><small class="text-white mx-2" style="margin-right: 5px">7/24 Hizmet     </small></a>
                    <div class="phone-number-wrapper" style="display: flex; flex-direction: column; align-items: flex-start; margin-right: 5px;">
                        <span style="color: white; font-size: 0.8em; margin-bottom: 8px; margin-left: 25px; text-align: center;">Serdal Çoban</span>
                        <a href="tel:05369974359" class="btn border-secondary rounded-pill" style="color: white; background-color: transparent; padding: 6px 16px; font-size: 0.9em;">0536 997 43 59</a>
                    </div>

                    <div class="phone-number-wrapper" style="display: flex; flex-direction: column; align-items: flex-start;">
                        <span style="color: white; font-size: 0.8em; margin-bottom: 8px; margin-left: 23px; text-align: center;">Miraç Kazancı</span>
                        <a href="tel:05050015167" class="btn border-secondary rounded-pill" style="color: white; background-color: transparent; padding: 6px 16px; font-size: 0.9em;">0505 001 51 67</a>
                    </div>

                </div>
            </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <img src="{{ asset('images/logo.png') }}" alt="Your Logo" style="height: 50px; color: white">
                <a href="{{ route('anasayfa') }}#bas" class="navbar-brand">Lüks Harput Taşımacılık</a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="background: none; border: none;">
                    <img src="{{ asset('images/menu.png') }}" alt="Menu" style="width: 30px; height: 30px;">
                </button>

                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="{{ route('anasayfa') }}#bas" class="nav-item nav-link active">Anasayfa</a>
                        <a href="{{ route('anasayfa') }}#about" class="nav-item nav-link">Hakkımızda</a>
                        <a href="{{ route('anasayfa') }}#fullWidthCarousel" class="nav-item nav-link">Galeri</a>
                        <a href="{{ route('anasayfa') }}#contact" class="nav-item nav-link">İletişim</a>
                        <a href="{{ route('anasayfa') }}#nasil" class="nav-item nav-link">Nasıl Çalışıyoruz</a>

                    </div>
                    <div class="d-flex m-3 me-0">

                        <a href="#" class="my-auto">
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </nav>


        </div>
    </div>
</header>
