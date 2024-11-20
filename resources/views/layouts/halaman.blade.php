<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Selamat Datang di Aplikasi Pengelolaan Data</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('halaman/assets/login.png') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="halaman/css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            
            <!--  navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand">SISWAKU</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
                </div>
            </nav>

            <!-- header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                               
                                <p class="lead fw-normal text-white-50 mb-4">Selamat datang di sekolah kami, tempat di mana potensi Anda akan berkembang
                                     dan impian Anda akan terwujud. Bergabunglah dengan kami dan jadilah bagian dari perjalanan pendidikan yang inspiratif!</p>

                                     <h1 class="display-8 fw-bolder text-white mb-4">Ayo Bergabung Bersama Kami</h1>

                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" img src="{{ asset('halaman/assets/login.png') }}" width="500" alt="..." /></div>
                    </div>
                </div>
            </header>

            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">5 Jurusan Terbaik di SMK NEGERI 2 PURBALINGGA</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-egg-fill"></i></div>
                                    <h2 class="h5">AT</h2>
                                    <p class="mb-0">Jurusan AT (Agribisnis Ternak)</p>
                                    <p>Jurusan Tertua yang ada di SMK N 2 Purbalingga. Jurusan ini bisa mengasah kemampuan dalam bidang ternak</p>
                                </div>

                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-water"></i></div>
                                    <h2 class="h5">AP</h2>
                                    <p class="mb-0">Jurusan AP (Agribisnis Perikanan)</p>
                                    <p> Jurusan Tertua yang ada di SMK N 2 Purbalingga.
                                        Jurusan ini bisa mengasah kemampuan dalam bidang perikanan.</p>
                                </div>

                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-gear"></i></div>
                                    <h2 class="h5">TO</h2>
                                    <p class="mb-0">Jurusan TO (Teknik Otomotif)</p>
                                    <p class="mb-0">Jurusan ini bisa mengasah skill di bidang Otomotif.</p> 
                                </div>

                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-egg-fried"></i></div>
                                    <h2 class="h5">APHP</h2>
                                    <p class="mb-0">Jurusan APHP (Agribisnis Pengolahan Hasil Pertanian)</p>
                                    <p>Jurusan ini bisa mengasah skill di bidang kewirausahaan, karna selain pengolahan 
                                        Jurusan ini juga di latih skill dalam bidang kewirausahaan</p>
                                </div>

                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-laptop"></i></i></div>
                                    <h2 class="h5">PPLG</h2>
                                    <p class="mb-0">Jurusan PPLG ( Pengembangan Perangkat Lunak dan Gim)</p>
                                    <p>Jurusan ini merupakan jurusan baru dan unggulan. Jurusan ini bisa mengasah kemampuan dalam bidang IT. 
                                        Selain IT di Jurusan ini juga di ajarkan Desain Grafis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Jika kamu tidak mengejar apa yang kamu inginkan, maka kamu tidak akan mendapatkannya. 
                                    Jika kamu tidak bertanya maka jawabannya adalah tidak. Jika kamu tidak melangkah maju, 
                                    kamu akan tetap berada di tempat yang sama." - Nora Roberts.</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" img src="{{ asset('halaman/assets/smk.jpg') }}" width="50" alt="..." />
                                    <div class="fw-bold">
                                        SMK BISA-HEBAT
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2024</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="halaman/js/scripts.js"></script>
    </body>
</html>
