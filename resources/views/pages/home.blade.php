@extends('layouts.app')


<body>

<!-- Spinner Start -->
<div id="spinner" class="w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->



<!-- navbar-->





<!-- Hero Start -->
<div id="bas"></div>
<!-- Animated Banner Start -->
<div id="bas2" class="container-fluid hero-banner py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12">
                <!-- Animasyonlu Başlık -->
                <div class="animated-heading">
                    <h2 class="animate-text">Lüks Harput Nakliyat: Güvenilir ve Profesyonel Taşımanın Adresi</h2>
                    <h3 class="animate-text">Mobilya Sökümü Ve Ambalajlama</h3>
                    <p class="animate-text">Eşyalarınız Bizim İçin Kıymetli</p>
                    <a href="tel:+905369974359" class="btn animate-button">Fiyat Teklifi Al</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Animated Banner End -->




<!-- Hero End -->

<!-- About Section Start -->
<div id="about" class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mb-4">Hakkımızda</h2>
            <p class="text-justify">
                Lüks Harput Taşımacılık olarak, köklü ve yenilikçi yaklaşımlarımızla taşımacılık sektöründe öncüyüz. Müşterilerimizin beklentilerini her zaman en üst düzeyde tutarak, kalite ve güvenin simgesi haline geldik. Eşyalarınıza en az sizin kadar değer veriyor ve her taşıma işlemini büyük bir özenle gerçekleştiriyoruz. Asansörlü taşımacılıktan ambalajlamaya, her adımı titizlikle planlayarak, eşyalarınızı yeni yuvalarına güvenle ulaştırıyoruz. Modern taşıma ekipmanlarımız ve uzman ekibimizle, "evden eve" deneyimini ayrıcalıklı bir serüvene dönüştürüyoruz.
            </p>
        </div>
    </div>
</div>
<!-- About Section End -->




<!-- Hizmetşlwe start-->

<div id="hizmet" class="container-fluid py-5">
    <div class="container py-5">
        <div class="tab-class text-center">

            <a href="tel:+905369974359" class="back-to-top" style="background: none; border: none;">
                <img src="{{ asset('images/phone-call.png') }}" alt="Ara" style="width: 50px; height: 50px;">
            </a>



            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div id="sehirIci" class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="{{ asset('images/foto/as4b.jpeg') }}" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Asansörlü evden eve taşımacılık</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">

                                            <p>Evinizdeki her eşyanın güvenliğini ve taşınma sürecinin hızını artıran asansörlü taşımacılık hizmetimizle tanışın.</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#a1" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Detay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="sehirlerarasi" class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="{{ asset('images/foto/ar5b.jpeg') }}" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Şehirlerarası taşımacılık</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">

                                            <p>Şehirlerarası yolculuğunuzda, eşyalarınızın güvenliğini ve rahatlığınızı ilk sırada tutuyoruz. <br><br> </p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#a2" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Detay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="paketleme" class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="{{ asset('images/foto/pak7b.jpeg') }}" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Eşya paketleme</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">

                                            <p>Profesyonel eşya paketleme servisimizle, eşyalarınızın taşınma sürecinde zarar görmesini engelliyoruz.</p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <a href="#a2" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Detay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hizmetşlwe End-->

<div class="container my-5">



                        <p>&nbsp;</p>

                        <h3 id="a1"><strong>Asansörlü Evden Eve Taşımacılık</strong></h3>
                        <p> Şehir içi nakliye süreçleri, özen ve dikkat gerektirir; biz de Lüks Harput Taşımacılık olarak bu süreçleri mümkün olan en hassas biçimde yönetiyoruz. Her taşıma görevimizi, sizin ve eşyalarınızın ihtiyaçlarını göz önünde bulundurarak, dikkatli bir zamanlama ve planlama ile gerçekleştiriyoruz. Gece boyunca sessiz sokaklarda dahi faaliyet gösterirken, çevresel etkimizi en aza indirgeyerek, sakin ve gürültüsüz bir taşınma deneyimi sağlıyoruz. Her bir eşyayı Lüks Harput Taşımacılık'ın özeniyle taşırken, çevre bilincine olan duyarlılığımızla da fark yaratıyoruz. Müşterilerimizin çevreyle olan ilişkilerinin zarar görmemesi, firmamız için bir ilkedir. Şehir içi nakliye hizmetlerimizle, kalitemizi geniş bir alana yaymak ve Lüks Harput Taşımacılık markasını daha da büyütmek temel hedeflerimiz arasındadır.</p>
                        <h3 id="a2"><strong>Şehirler Arası Taşımacılık</strong></h3>
                        <p>
                            Şehirlerarası taşımacılık, tecrübeli kadromuz ve güvenilir sürücülerimiz ile müşterilerimize huzurlu bir taşınma deneyimi sunmayı amaçlar. Uzun mesafeli yolculuklarda, her türlü yol koşuluna hazır, deneyimli sürücülerimiz ve bakımlı araç filomuzla hizmet veriyoruz. Her anı planlanmış rotalarımız ve olası arızalara karşı önceden alınmış tedbirlerimizle, taşınmanın her adımında zamanı en etkin biçimde kullanıyoruz. Her bir taşıma işlemimiz, eşyalarınızın güvenliğini teminat altına alacak şekilde özenle sigortalanmaktadır. Lüks Harput Nakliyat olarak, şehirlerarası her seferimizde, asansör kiralamadan paketlemeye kadar her detayı titizlikle ele alıyor ve sizlere sorunsuz bir hizmet vaat ediyoruz.</p>

                        <h3 id="a3"><strong>Eşya Paketleme</strong></h3>
                        <p><strong>Lüks Harput nakliyat</strong> taşıma sürecinin her adımını özenle yönetir. Eşyalarınızı hassasiyetle paketleyerek, zarar görmelerini önleriz. Sessiz, huzurlu ve çevreye duyarlı taşınmanın yanı sıra, müşteri ihtiyaçlarını dikkate alarak planlı bir şekilde hareket ederiz. Çevreyle uyumlu ve kaliteli hizmet anlayışımız, firmamızın temel prensiplerindendir.</p>

                        <hr class="wp-block-separator has-text-color has-background has-luminous-vivid-orange-background-color has-luminous-vivid-orange-color">

                            <div id="faq-question-1627948742933" class="schema-faq-section">
                                <p><strong class="schema-faq-question">Lüks Harput İletişim Telefon Numaraları</strong></p>
                                    <strong>Serdal Çoban: </strong>&nbsp;0531 772 78 04&nbsp;<strong>Miraç Kazancı: </strong>&nbsp;0532 058 77 84</p>
                            </div>

                            <a href="tel:+905369974359"  class="btn btn-info" style="background: lightgreen; border: #2d3748;">
                                Hemen Fiyat Teklifi al
                            </a>
                        </div>


                    <p>

                    </p>
                    </div>
            </div>
            </div>

        </article>

    </div>
</div>

<!-- nasıl start-->


<section id="nasil" class="hizmet-sureci-section">
    <div class="container">
        <div class="section-header">
            <h2>NASIL ÇALIŞIYORUZ</h2>
        </div>
        <div class="row">
            <div class="col">

                <div class="service-step">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="36 20 128 160" viewBox="36 20 128 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img" aria-label="Güvenilir ve Hızlı Ankara Evden Eve Taşımacılık">
                        <g>
                            <path d="M115.867 51.686c0 9.066 7.35 16.416 16.416 16.416H164V68h-.062l-48-48h-.07v31.686z"></path>
                            <path d="M103.867 63.686v-27.27c0-9.066-7.35-16.416-16.416-16.416H52.416C43.35 20 36 27.35 36 36.416v127.168C36 172.65 43.35 180 52.416 180h95.168c9.066 0 16.416-7.35 16.416-16.416V96.517c0-9.066-7.35-16.416-16.416-16.416h-27.301c-9.066.001-16.416-7.349-16.416-16.415z"></path>
                        </g>
                    </svg>
                    <h4>TEKLİF VERİYORUZ</h4>
                    <p>Çalışacak personel ve kullanılacak ekipman ve en nihayetinde fiyat belirlemek için adresinize keşfe geliyoruz.</p>
                </div>
            </div>
            <div class="col">
                <div class="service-step">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 20 159.999 160" viewBox="20 20 159.999 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img" aria-label="Sorunsuz ve Ekonomik Ankara Evden Eve Nakliyat Çözümleri">
                        <g>
                            <path d="M160.062 180H39.938a4.92 4.92 0 0 1-4.921-4.921v-75.08a4.92 4.92 0 1 1 9.842 0v70.158h110.282V99.999a4.92 4.92 0 1 1 9.842 0v75.079a4.92 4.92 0 0 1-4.921 4.922z"></path>
                            <path d="M175.079 104.921H24.921A4.92 4.92 0 0 1 20 100V62.461a4.92 4.92 0 0 1 4.921-4.921h150.157a4.92 4.92 0 0 1 4.921 4.921V100a4.92 4.92 0 0 1-4.92 4.921zM29.843 95.078h140.315V67.382H29.843v27.696z"></path>
                            <path d="M99.999 180a4.92 4.92 0 0 1-4.921-4.921V62.461a4.92 4.92 0 1 1 9.842 0v112.618A4.92 4.92 0 0 1 99.999 180z"></path>
                            <path d="M99.999 67.382H66.215c-13.064 0-23.691-10.628-23.691-23.692C42.524 30.628 53.151 20 66.215 20c29.968 0 38.272 39.801 38.611 41.496a4.92 4.92 0 0 1-4.827 5.886zM66.215 29.843c-7.635 0-13.849 6.212-13.849 13.848 0 7.637 6.213 13.849 13.849 13.849H93.54c-3.142-9.636-11.183-27.697-27.325-27.697z"></path>
                            <path d="M133.785 67.382H99.999a4.92 4.92 0 0 1-4.826-5.887C95.511 59.801 103.818 20 133.785 20c13.064 0 23.691 10.628 23.691 23.691.001 13.064-10.627 23.691-23.691 23.691zM106.46 57.54h27.325c7.635 0 13.849-6.212 13.849-13.849 0-7.636-6.213-13.848-13.849-13.848-16.142 0-24.183 18.061-27.325 27.697z"></path>
                        </g>
                    </svg>
                    <h4>PAKETLEME & TAŞIMA</h4>
                    <p>
                        Eşyalarınızın zarar görmemesi için hassas bir şekilde ambalajlanır, dikkatli bir şekilde araca yüklenir ve yeni evinize taşınır.</p>
                </div>
            </div>
            <div class="col">
                <div class="service-step">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="35.5 45 129.001 110" viewBox="35.5 45 129.001 110" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img" aria-label="Ankara'da Uzman Ekip ve Modern Araçlarla Ev Taşımacılığı"><defs><style>#comp-kb51p4jq svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
                        <g>
                            <path d="M160.95 59.058a2.24 2.24 0 0 0-2.009.61l-11.555 11.545-7.195-1.926-1.927-7.189 11.555-11.545a2.229 2.229 0 0 0 .611-2.007 2.227 2.227 0 0 0-1.331-1.623c-9.379-3.889-20.078-1.774-27.254 5.396-7.566 7.559-9.251 18.8-5.064 28.004l-14.993 13.205-15.182-13.351a16.362 16.362 0 0 0 2.979-7.424c1.199-8.844 5.706-14.768 12.056-15.844 2.579-.438 4.564-2.685 4.621-5.349.057-2.662-1.887-4.985-4.521-5.407-6.649-1.058-19.774-.874-33.008 12.264l-14.645 14.54a5.331 5.331 0 0 0-1.586 3.791 5.329 5.329 0 0 0 1.561 3.801.916.916 0 0 1-.005 1.296L52.895 83a.915.915 0 0 1-1.296-.003 5.331 5.331 0 0 0-3.794-1.585h-.017a5.345 5.345 0 0 0-3.786 1.559l-6.384 6.338a7.063 7.063 0 0 0-.987 8.877 40.175 40.175 0 0 0 5.336 6.696 40.213 40.213 0 0 0 6.669 5.375 7.122 7.122 0 0 0 3.877 1.155 7.099 7.099 0 0 0 5.013-2.084l6.384-6.337a5.331 5.331 0 0 0 1.586-3.791 5.329 5.329 0 0 0-1.561-3.801.914.914 0 0 1 .004-1.294l1.165-1.156a.917.917 0 0 1 1.297.004 5.383 5.383 0 0 0 7.597.025l.254-.252 12.44 14.101L59.017 131.2a13.46 13.46 0 0 0-4.604 9.773 13.46 13.46 0 0 0 3.98 10.044C60.974 153.594 64.371 155 68 155a13.487 13.487 0 0 0 10.228-4.608l23.432-26.597 23.44 26.568A13.576 13.576 0 0 0 135.395 155c3.655 0 7.075-1.414 9.672-4.01a13.554 13.554 0 0 0 4.006-10.11c-.12-3.818-1.767-7.313-4.635-9.841l-27.7-24.362c.015-.016.032-.031.047-.048l12.312-13.973a25.064 25.064 0 0 0 10.413 2.262c6.397 0 12.795-2.433 17.665-7.299 7.176-7.169 9.295-17.859 5.401-27.231a2.23 2.23 0 0 0-1.626-1.33zM69.559 89.814a5.386 5.386 0 0 0-7.597-.025l-1.165 1.158a5.37 5.37 0 0 0-.023 7.59.905.905 0 0 1 .266.648.907.907 0 0 1-.27.646l-6.384 6.338a2.653 2.653 0 0 1-3.328.351 35.6 35.6 0 0 1-5.93-4.778c-1.737-1.745-3.332-3.749-4.742-5.954a2.644 2.644 0 0 1 .372-3.323l6.384-6.337a.912.912 0 0 1 .647-.267h.002c.142 0 .414.036.648.271a5.379 5.379 0 0 0 7.597.023L57.199 85a5.331 5.331 0 0 0 1.586-3.791 5.329 5.329 0 0 0-1.561-3.801.905.905 0 0 1-.266-.648c0-.142.036-.414.27-.646l14.645-14.54C83.712 49.825 95.23 49.62 101.039 50.55c.455.072.778.458.766 1.036-.009.41-.442.855-.909.935-8.248 1.397-14.274 8.922-15.726 19.635-.349 2.572-1.525 4.966-3.312 6.74L70.855 89.819a.916.916 0 0 1-1.296-.005zm5.326 57.635a9.065 9.065 0 0 1-6.58 3.094c-2.568.1-4.956-.868-6.762-2.674a9.06 9.06 0 0 1-2.677-6.756 9.066 9.066 0 0 1 3.096-6.575l27.673-24.374 9.055 10.263-23.805 27.022zm69.733-6.43a9.15 9.15 0 0 1-2.702 6.824c-1.826 1.823-4.252 2.807-6.829 2.7a9.16 9.16 0 0 1-6.645-3.124L77.416 89.582l6.173-6.128 57.903 50.926a9.143 9.143 0 0 1 3.126 6.639zm-31.178-37.331c-.015.017-.025.037-.039.055l-8.242-7.249 13.881-12.225a24.953 24.953 0 0 0 2.805 3.351 25.066 25.066 0 0 0 3.31 2.773l-11.715 13.295zm40.584-19.216c-8.003 7.996-21.027 7.996-29.03 0s-8.003-21.009 0-29.005a20.473 20.473 0 0 1 19.099-5.488l-9.888 9.88a2.222 2.222 0 0 0-.577 2.149l2.593 9.671a2.226 2.226 0 0 0 1.576 1.575l9.679 2.591a2.231 2.231 0 0 0 2.151-.577l9.888-9.88a20.424 20.424 0 0 1-5.491 19.084z" fill="#000000" data-color="1"></path>
                        </g>
                    </svg>
                    <h4>YERLEŞTİRME & MONTAJ</h4>
                    <p>Eşyalarınız bulunması gereken konumlara tek tek yerleştirilir ve mobilyalarınızın montajı yapılır.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- nasıl end-->

<div id="fullWidthCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="margin-bottom: 20px">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div>
                <img src="{{ asset('images/foto/ar1.jpeg') }}" class="d-block w-100" alt="Image 1">
            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/ar2.jpeg') }}" class="d-block w-100" alt="Image 2">
            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/ar3.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>

        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/ar6.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>

        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/as1.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/pak2.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/as3.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>

        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/as5.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>

        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/ar7.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>

        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/pak1.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/as2.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/pak4.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/pak5.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/ar4.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>

        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/pak8.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/as4.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>

        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/pak10.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="{{ asset('images/foto/pak11.jpeg') }}" class="d-block w-100" alt="Image 3">

            </div>
        </div>




    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#fullWidthCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#fullWidthCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- Footer Start -->


    <!-- Google Maps iframe -->
<div id="map" class="google-map">
    <iframe
        width="100%"
        height="400"
        style="border:0;"
        loading="lazy"
        allowfullscreen
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2619.388818397679!2d39.21985793759333!3d38.671964127045214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076c07a03e1d491%3A0x1d284133d858f970!2zQWtwxLFuYXIsIMWeaHQuIFBvbGlzIEthbWlsIEfDtmvDp2VlciBTay4gTm86NCwgMjMxMDAgRWzDonrEscSfIE1lcmtlei9FbGF6xLHEnw!5e0!3m2!1str!2str!4v1712183387240!5m2!1str!2str">
    </iframe>
</div>




<div id="contact" class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">

        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Lüks Harput</h4>
                    <p class="mb-4">Lüks Harput Taşımacılık, güvenli ve hızlı nakliye çözümleriyle eşyalarınızı yeni adresinize sorunsuz taşır.</p>
                    <a href="#bas" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Daha Fazlası</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Hizmetlerimiz</h4>
                    <a class="btn-link" href="#sehirIci">Asansörlü evden eve taşımacılık</a>
                    <a class="btn-link" href="#sehirIci">Şehir içi taşımacılık</a>
                    <a class="btn-link" href="#sehirlerarasi">Şehirlerarası taşımacılık</a>
                    <a class="btn-link" href="#paketleme">Paketleme hizmeti</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Hızlı Menü</h4>
                    <a class="btn-link" href="#bas">Anasayfa</a>
                    <a class="btn-link" href="#about">Hakkımızda</a>
                    <a class="btn-link" href="#fullWidthCarousel">Galeri</a>
                    <a class="btn-link" href="#contact">İletişim</a>
                    <a class="btn-link" href="#nasil">Nasıl Çalışıyoruz</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">İletişim</h4>
                    <p>Adres: Elazığ/Merkes/Nailbey mahallesi/Şehit polis kamil gökçeer sokak/No:4</p>
                    <p>Email: luksharput23@gmail.com</p>
                    <p>Serdal ÇOBAN  0536 997 43 59</p>
                    <p>Miraç KAZANCI 0505 001 5167</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">

            <div class="col-md-6 my-auto text-center text-md-end text-white" style="font-size: 12px;">
                Lüks Harput Nakliyat | Ev & Ofis Taşımacılığı © 2024 Tüm Hakları Saklıdır.
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->




<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Query all links within the navbar
        document.querySelectorAll('#navbarCollapse .nav-link').forEach(function (element) {
            element.addEventListener('click', function () {
                // Check if the navbar is expanded
                var isExpanded = document.querySelector('#navbarCollapse').classList.contains('show');
                // If it is expanded, then toggle the navbar
                if (isExpanded) {
                    var bsCollapse = new bootstrap.Collapse(document.querySelector('#navbarCollapse'), {
                        toggle: true
                    });
                }
            });
        });
    });

</script>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>


<div id="lightboxOverlay" tabindex="-1" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" tabindex="-1" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt=""><div class="lb-nav"><a class="lb-prev" role="button" tabindex="0" aria-label="Previous image" href=""></a><a class="lb-next" role="button" tabindex="0" aria-label="Next image" href=""></a></div><div class="lb-loader"><a class="lb-cancel" role="button" tabindex="0"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close" role="button" tabindex="0"></a></div></div></div></div>

</body>
