<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{nama}" />
    <meta name="description" content="Website {Nama} Dibuat Oleh Ahlinyawebsite.com" />
    <meta name="author" content="{nama}" />
    <title>{Nama}</title>
    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('front_assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
    <!-- End Style -->

    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="../front_assets/assets/img/logo.svg" />

    <!-- Slick JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End Slick Js -->
</head>
<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                <div class="header-bg">
                    <nav class="navbar navbar-marketing navbar-expand-lg">
                        <div class="container">
                            <a class="d-flex justify-content-center align-content-center align-items-center" >
                                <img
                                    alt="Logo {nama}"
                                    class="navbar-brand"
                                    src="{{asset('front_assets/img/Frame.jpg')}}"
                                >
                            </a>
                            <button
                                class="navbar-toggler text-white"
                                type="button"
                                data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                            >
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><img src="{{asset('front_assets/img/Instagram.png')}}" alt=""></li>
                                    <li class="nav-item"><img src="{{asset('front_assets/img/Tiktok.png')}}" alt=""></li>
                                    <li class="nav-item"><img src="{{asset('front_assets/img/Twitter.png')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
    
                    <header class="page-header pt-lg-0 pt-md-0 p-0" id="header">
                        <div class="container px-3 px-md-5">
                            <div class="row">
                                <div class="image-header col-lg-6 col-md-6 col-6">
                                    <img src="{{asset('front_assets/img/header-bg.jpg')}}" alt="Gambar">
                                </div>
                                <div class="deskripsi-header col-lg-6 col-md-6 col-6">
                                    <h1 class="mt-lg-5 mb-lg-5 text-white">Ahlinya Frozen Food</h1>
                                    <p class="text-white body1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non posuere turpis. Orci varius natoque </p>
                                    <button>Pesan Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>

                <section id="keunggulanPerusahaan">
                    <div class="container px-3 px-md-5">
                        <div class="row">
                            <div class="image-keper col-lg-6 col-md-6 col-12">
                                <img src="{{asset('front_assets/img/Image.jpg')}}" alt="">
                            </div>
                            <div class="deskripsi-keper col-lg-6 col-md-6 col-12">
                                <h2 class="mb-5 text-white header1">Mengapa Harus Membeli Di Kami</h2>
                                <div class="d-lg-flex d-md-flex d-flex keper-list p-lg-3 mt-md-3" onclick="eventKeper(this)">
                                    <div class="icon-keper mr-lg-3">
                                        <img src="{{asset('front_assets/img/tick-circle.png')}}" alt="">
                                    </div>
                                    <div class="keper-wrapper-desc">
                                        <h2 class="mb-lg-4 text-white">Menjaga Kualitas Produk</h2>
                                        <p  class="keper-desc d-none text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo ex velit molestiae corporis. Laboriosam consequuntur magni pariatur, possimus amet ea et illum similique repudiandae dolor recusandae inventore incidunt dolorum animi.</p>
                                    </div>
                                </div>

                                <div class="d-lg-flex d-md-flex d-flex keper-list p-lg-3 mt-md-3" onclick="eventKeper(this)">
                                    <div class="icon-keper mr-lg-3">
                                        <img src="{{asset('front_assets/img/truck-fast.png')}}" alt="">
                                    </div>
                                    <div class="keper-wrapper-desc">
                                        <h2 class="mb-lg-4 text-white">Pengiriman Cepat</h2>
                                        <p  class="keper-desc d-none text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo ex velit molestiae corporis. Laboriosam consequuntur magni pariatur, possimus amet ea et illum similique repudiandae dolor recusandae inventore incidunt dolorum animi.</p>

                                    </div>
                                </div>

                                <div class="d-lg-flex d-md-flex d-flex  keper-list p-lg-3 mt-md-3" onclick="eventKeper(this)">
                                    <div class="icon-keper mr-lg-3">
                                        <img src="{{asset('front_assets/img/message-text.png')}}" alt="">
                                    </div>
                                    <div class="keper-wrapper-desc">
                                        <h2 class="text-white">Admin Fast Response</h2>
                                        <p  class="keper-desc d-none text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo ex velit molestiae corporis. Laboriosam consequuntur magni pariatur, possimus amet ea et illum similique repudiandae dolor recusandae inventore incidunt dolorum animi.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>

                <section id="keunggulanProduk">
                    <div class="container px-3 px-md-5">
                        <h1 class="text-white header1">Produk Favorit Kami</h1>
                        <div class="content-kepro row">
                            <div class="item-kepro col-lg-6 col-md-6 col-12">
                                <div class="content-kepro position-relative">
                                    <div class="deskripsi-kepro position-absolute text-white bold">
                                        <p class="mt-2">IDR 15.000</p>
                                        <p> Ikan Segar</p>
                                    </div>
                                    <img class="border border-dark mr-lg-5" src="{{ asset('front_assets/img/image2.jpg')}}" alt="Kepro Image 1">
                                </div>
                            </div>

                            <div class="item-kepro col-lg-6 col-md-6 col-12">
                                <div class="content-kepro position-relative">
                                    <div class="deskripsi-kepro position-absolute text-white bold">
                                        <p class="mt-2">IDR 15.000</p>
                                        <p> Ikan Segar</p>
                                    </div>
                                    <img class="border border-dark mr-lg-5" src="{{ asset('front_assets/img/image2.jpg')}}" alt="Kepro Image 1">
                                </div>
                            </div>

                            <div class="item-kepro col-lg-6 col-md-6 col-12 mt-lg-4 mx-lg-auto mx-md-auto mt-md-4">
                                <div class="content-kepro position-relative">
                                    <div class="deskripsi-kepro position-absolute text-white bold">
                                        <p class="mt-2">IDR 15.000</p>
                                        <p> Ikan Segar</p>
                                    </div>
                                    <img class="border border-dark mr-lg-5" src="{{ asset('front_assets/img/image2.jpg')}}" alt="Kepro Image 1">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="gambarProses">
                    <div class="container px-3 px-md-5">
                        <h1 class="text-white mx-lg-auto text-center header1">Rekomendasi Frozen Food</h1>
                        <div class="d-lg-flex mx-lg-auto">
                            <div class="card-gapro row d-lg-flex mx-lg-auto">
                                <div class="item-gapro col-lg-6 col-md-6 col-6">
                                    <div class="content-gapro position-relative">
                                        <div class="deskripsi-gapro position-absolute text-white bold">
                                            <p class="">IDR 15.000</p>
                                        </div>
                                        <img class="border border-dark mr-lg-5" src="{{ asset('front_assets/img/image5.jpg')}}" alt="gapro Image 1">
                                    </div>
                                </div>
    
                                <div class="item-gapro col-lg-6 col-md-6 col-6">
                                    <div class="content-gapro position-relative">
                                        <div class="deskripsi-gapro position-absolute text-white bold">
                                            <p class="">IDR 15.000</p>
                                        </div>
                                        <img class="border border-dark mr-lg-5" src="{{ asset('front_assets/img/image6.jpg')}}" alt="gapro Image 1">
                                    </div>
                                </div>
    
                                <div class="item-gapro col-lg-6 col-md-6 col-6 mt-lg-4">
                                    <div class="content-gapro position-relative">
                                        <div class="deskripsi-gapro position-absolute text-white bold">
                                            <p class="">IDR 15.000</p>
                                        </div>
                                        <img class="border border-dark mr-lg-5" src="{{ asset('front_assets/img/image7.jpg')}}" alt="gapro Image 1">
                                    </div>
                                </div>
                                <div class="item-gapro col-lg-6 col-md-6 col-6 mt-lg-4">
                                    <div class="content-gapro position-relative">
                                        <div class="deskripsi-gapro position-absolute text-white bold">
                                            <p class="">IDR 15.000</p>
                                        </div>
                                        <img class="border border-dark mr-lg-5" src="{{ asset('front_assets/img/image8.jpg')}}" alt="Kepro Image 1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="tentangKami">
                    <div class="container d-lg-flex  px-3 px-md-5 text-white">
                        <div class="mx-lg-auto p-lg-5">
                            <h1 class="text-white mb-lg-4 header1">Tentang Kami</h1>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="deskripsi-teka">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere felis turpis, a mollis nisi commodo sit amet. Curabitur
                                            ullamcorper, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere felis turpis, a mollis nisi commodo sit amet. 
                                            Curabitur ullamcorper, </p>
                                        <p>Curabitur ullamcorper, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere felis turpis, a mollis nisi commodo sit amet. 
                                            Curabitur ullamcorper, </p>
                                    </div>
                                    <button class="p-2" style="border-radius: 20px" >Selengkapnya</button>
                                </div>
                                <div class="d-flex col-lg-6 col-md-6 mt-3 mt-lg-0 mt-md-0">
                                    <img class="mx-auto" src="{{asset('front_assets/img/image10.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>

                <section id="kenapaHarusBeliKepadaKami">
                    <div class="container px-3 px-md-5">
                        <div class="row text-white">
                            <div class="keha-image col-lg-6 col-md-6 col-12">
                                <img src="{{asset('front_assets/img/image9.jpg')}}" alt="">
                            </div>
                            <div class="list-keha col-lg-6 col-md-6">
                                <h1 class="text-white header1 mb-lg-5 mb-md-4 mb-5">Pesan Sekarang Bayar Nanti</h1>
                                <div class="row">
                                    <div class="col-6 d-lg-flex d-md-flex d-flex flex-md-row">
                                        <div class="mr-md-2">
                                            <img src="{{asset('front_assets/img/love.png')}}" alt="">
                                        </div>
                                        <div class="mb-lg-3 mb-md-3 mb-4">
                                            <p class="body1">Higienis</p>
                                        </div>
                                    </div>

                                    <div class="col-6 d-lg-flex  d-md-flex d-flex flex-md-row">
                                        <div class="mr-md-2">
                                            <img src="{{asset('front_assets/img/like.png')}}" alt="">
                                        </div>
                                        <div class="mb-lg-3 mb-md-3 mb-4">
                                            <p class="body1">Kualitas Terjaga</p>
                                        </div>
                                    </div>


                                    <div class="col-6 d-lg-flex d-md-flex d-flex flex-md-row">
                                        <div class="">
                                            <img src="{{asset('front_assets/img/security.png')}}" alt="">
                                        </div>
                                        <div class="mb-lg-3 mb-md-3">
                                            <p class="body1">Pembayaran Aman</p>
                                        </div>
                                    </div>

                                    <div class="col-6 d-lg-flex d-md-flex d-flex flex-md-row">
                                        <div class="mr-md-2">
                                            <img src="{{asset('front_assets/img/like-shapes.png')}}" alt="">
                                        </div>
                                        <div class="">
                                            <p class="body1">Produk Terjamin Halal</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                </section>

                <section id="testimoni">
                    <div class="container px-3 px-md-5">
                        <div class="card-testimoni row text-white">
                            <div class="col-lg-5">
                                <div class="m-md-auto"> 
                                    <div class="media mt-5">
                                        <img src="{{asset('front_assets/img/foto-testimoni2.png')}}" alt="gambar">
                                        <div class="media-body">
                                            <h5 class="header3 text-white">Miller</h5>
                                            <p class="body2">Pelanggan </p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-testimoni body1">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere felis turpis, a mollis nisi commodo sit amet. Curabitur ullamcorper.”
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="m-md-auto"> 
                                    <div class="media mt-5">
                                        <img src="{{asset('front_assets/img/foto-testimoni1.png')}}" alt="">
                                        <div class="media-body">
                                            <h5 class="header3 text-white">Miller</h5>
                                            <p class="body2">Pelanggan </p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="text-testimoni body1">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere felis turpis, a mollis nisi commodo sit amet. Curabitur ullamcorper.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="daftarProduk">
                    <div class="container px-3 px-md-5">
                        <h1 class="title-dapro text-white">Kamu Harus Miliki Ini</h1>
                        <div class="card-dapro">
                            <div class="daftar-dapro row">
                                <div class="produk-dapro col-lg-4 my-5 text-center">
                                    <img src="../front_assets/img/foto-dapro1.jpg" alt="">
                                    <h2 class="text-white">Ikan Segar 1kg</h2>
                                    <p class="harga-dapro font-weight-bold text-white">RP.100.000</p>
                                </div>
                                <div class="produk-dapro col-lg-4 my-5 text-center">
                                    <img src="../front_assets/img/foto-dapro2.jpg" alt="">
                                    <h2 class="text-white">Reuzel</h2>
                                    <p class="harga-dapro font-weight-bold text-white">RP.100.000</p>
                                </div>
                                <div class="produk-dapro col-lg-4 my-5 text-center">
                                    <img src="../front_assets/img/foto-dapro3.jpg" alt="">
                                    <h2 class="text-white">Reuzel</h2>
                                    <p class="harga-dapro font-weight-bold text-white">RP.100.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                </section>
            </main>
        </div>

        <div id="layoutDefault_footer">
            <footer class="footer footer-bg mt-5 pt-5">
                <div class="container px-3 px-md-5">
                        <div class="row text-white">
                            <div class="col-lg-2 col-md-2 col-6">
                                <img src="{{asset('front_assets/img/Frame.jpg')}}" alt="logo">
                            </div>
    
                            <div class="col-lg-4 col-md-3">
                                <h2 class="text-white">Marketing Office</h2>
                            </div>
    
                            
                            <div class="col-lg-3 col-md-3">
                                <ul class="p-0">
                                    <li><address>jalan kiaracondong gang advent nomor 69</address></li>
                                    <li><address>+62 822 3322 3344</address></li>
                                    <li><address>@email.com</address></li>
                                        
                                </ul>
                            </div>
    
    
                            <div class="icon-footer col-lg-3 col-md-3 d-lg-flex d-flex flex-column">
                                <ul class="d-lg-flex d-md-flex d-flex flex-row p-0"> 
                                    <li class="mr-3"><img src="{{asset('front_assets/img/Facebook.png')}}" alt=""></li>
                                    <li class="mr-3"><img src="{{asset('front_assets/img/Twitter.png')}}" alt=""></li>
                                    <li class="mr-3"><img src="{{asset('front_assets/img/Twitter.png')}}" alt=""></li>
                                    <li class="mr-3"><img src="{{asset('front_assets/img/LinkedIn.png')}}" alt=""></li>
                                    <li class="mr-3"><img src="{{asset('front_assets/img/Telegram.png')}}" alt=""></li>
                                </ul>
    
                                <div class="button-footer">
                                    <button>Hubungi Kami</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="footer-copyright py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <small class="mb-0 d-block text-center font-13px color-white">Copyright © 2021 • All rights reserved • Ahlinya Web</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- End CDN -->

    <!-- Script Js -->
    <script src="../front_assets/js/scripts.js"></script>
    <!-- End script js -->

    <!-- Slick Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom -->
    <script src="../front_assets/js/script.js"></script>
</body>
</html>