<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link  rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <title>TestORDO</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>

        {{-- navbar --}}

        <nav id="navbar" class="navbar">
            <div class="nav">
                <img class="logo-logo" src=" {{ url('/assets/images/logo_brand.png') }} "/>
                <a href="#">HomePage</a>
                <a href="#">Tentang</a>
                <a href="#">Daftar Hotel</a>
                <a href="#">Bantuan</a>
            </div>
            <div class="nav-flag">
                <button class="button-flag">
                    <img class="flag" src="{{ url('/assets/images/flag.png') }}"> 
                        Indonesia ( ID )             
                    <img src="{{ url('/assets/images/arrowdown.png') }}"> 
                </button>
            </div>
        </nav>

        {{-- hero --}}

        <section class="hero">
            <main class="content-hero">
                <div class="hero-line">
                    <div>
                        <img class="line" src="{{ url('/assets/images/line_main.png') }}" />
                    </div>
                    <p>HOTEL OPERATOR</p>
                </div>
                <img class="hero-image" src="{{ url('/assets/images/heroimage.png') }}" />
                <h1>
                    Membantu Menjalankan <br/> Operasi Bisnis Pariwisata Anda
                </h1>
                <h2>
                    GWA membantu mengoperasikan keseluruhan layanan hotel, <br/>
                    menajadikan mitra lebih percaya diri dalam menjalankan bisnis.
                </h2>
                <button class="cta">
                    <p>Konsultasikan Bisnis Saya</p>
                </button>
                <div class="hero-scroll">
                    <p>Scroll</p>
                    <img class="arrow-down" src="{{ url('/assets/images/arrow_down.png') }}" />
                </div>
            </main>
        </section>

        {{-- workflow --}}

        <section class="workflow" >
            <div class="container">
                <div class="header">
                    <div class="workflow-line">
                        <img class="line" src="{{ url('/assets/images/line_main.png') }}" />
                    </div>
                    <p>OUR WORKFLOW</p>
                </div>
                <h1>
                    Proses Kerja Kami dalam <br/>Meningkatkan kualitas Properti
                </h1>
            </div>
            <div class="content">
                <img class="wave" src="{{ url("/assets/images/workflow_vector.png") }}" />
                <div class="workflow-col c1">
                    <img class="icon1" src="{{ url('/assets/images/icon1.png') }}" />
                    <h1>Tantangan</h1>
                    <p>Setiap property memiliki <br/>tantangan tersendiri dan GWA<br/> sangat memahami hal tersebut.</p>
                </div>
                <div class="workflow-col c2">
                    <img class="icon1" src="{{ url('/assets/images/icon2.png') }}" />
                    <h1>Rumusan</h1>
                    <p>Setiap tantangan akan dirumuskan<br/> menjadi sebuah hal yang harus dicari<br/> jalan keluarnya oleh kami</p>
                </div>
                <div class="workflow-col c3">
                    <img class="icon1" src="{{ url('/assets/images/icon3.png') }}" />
                    <h1>Goal</h1>
                    <p>Dari rumusan masalah, kami memberikan<br/> respon cepat dan jalan keluar jangka<br/> pendek - menengah - panjang.</p>
                </div>
                <div class="workflow-col c4">
                    <img class="icon1" src="{{ url('/assets/images/icon4.png') }}" />
                    <h1>Ideas</h1>
                    <p>Setiap rumusan menjadikan ide-ide<br/> kreatif bagi kami untuk meningkatkan<br/> kualitas property mitra.</p>
                </div>
            </div>
        </section>

        {{-- services --}}

        <section class="services">
            <div class="container">
                <div class="header">
                    <div class="services-line">
                        <img class="line" src="{{ url('/assets/images/line_main.png') }}" />
                    </div>
                    <p>OUR SERVICES</p>
                </div>
                <h1>Apa Saja yang Bisa Kami Bantu ?</h1>
                <div class="services-card">
                    <div class="card">
                        <div class="head-card">
                            <img src=" {{ url('/assets/images/icon_card1.png') }} ">
                            <p class="number">01</p>
                        </div>
                        <div class="card-title">Revenue <br/>Management Service</div>
                        <button>
                            <p>Saya Tertarik</p>
                            <img src=" {{ url('/assets/images/arrow-right.png') }} ">
                        </button>
                    </div>
                    <div class="card">
                        <div class="head-card">
                            <img src=" {{ url('/assets/images/icon_card2.png') }} ">
                            <p class="number">02</p>
                        </div>
                        <div class="card-title">Full Manage <br/> Service</div>
                        <button>
                            <p>Saya Tertarik</p>
                            <img src=" {{ url('/assets/images/arrow-right.png') }} ">
                        </button>
                    </div>
                    <div class="card">
                        <div class="head-card">
                            <img src=" {{ url('/assets/images/icon_card3.png') }} ">
                            <p class="number">03</p>
                        </div>
                        <div class="card-title">Asset Monetize <br/> Service</div>
                        <button>
                            <p>Saya Tertarik</p>
                            <img src=" {{ url('/assets/images/arrow-right.png') }} ">
                        </button>
                    </div>
                </div>
            </div>
        </section>

        {{-- projects --}}

        <section class="projects">
            <div class="container">
                <div class="header">
                    <img class="line" src="{{ url('/assets/images/line_main.png') }}" width="50px" height="4px" />
                    <p>OUR LATEST PROJECTS</p>
                    <img class="line" src="{{ url('/assets/images/line_main.png') }}" width="50px" height="4px" />
                </div>
                <h1>Project Terbaru Kami</h1>
                <div class="content">
                    <div class="wrapper">
                        <div class="item swiper">
                            <div class="item__wrapper swiper-wrapper">
                                <div class="item__slide swiper-slide">
                                    <div class="item__img">
                                        <picture>
                                            <source srcset="{{ url('/assets/images/img-project.png') }}" type="image/webp"><img src="{{ url('/assets/images/project_img.png') }}"  />
                                        </picture>
                                        <div class="description-project">
                                            <div class="wrapper-text">
                                                <h1>1/4 OPERATIONAL PROJECT</h1>
                                                <h2>Townhouse Oak</h2>
                                                <h3>Brand tertinggi di OYO</h3>
                                            </div>
                                            <div class="detail">
                                                <img src="{{ url('/assets/images/btn-arrow-right.png') }}" />
                                                <h1>Lihat Detail</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__slide swiper-slide">
                                    <div class="item__img">
                                        <picture>
                                            <source srcset="{{ url('/assets/images/img-project.png') }}" type="image/webp"><img src="{{ url('/assets/images/project_img.png') }}"  />
                                        </picture>
                                        <div class="description-project">
                                            <div class="wrapper-text">
                                                <h1>2/4 OPERATIONAL PROJECT</h1>
                                                <h2>Townhouse Oak</h2>
                                                <h3>Brand tertinggi di OYO</h3>
                                            </div>
                                            <div class="detail">
                                                <img src="{{ url('/assets/images/btn-arrow-right.png') }}" />
                                                <h1>Lihat Detail</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-swiper">
                                <div class="item__prev swiper-button-prev"></div>
                                <div class="item__next swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- testimonials --}}
        <section class="testimonials">
            <div class="container">
                <div class="header">
                    <div class="testimonials-line">
                        <img class="line" src="{{ url('/assets/images/line_main.png') }}" />
                    </div>
                    <p>OUR TESTIMONIALS</p>
                </div>
                <h1>Yang Klien Kami Katakan</h1>
                <div class="content">
                    <div class="wrapper-word">
                        <div class="word">
                            <img src="{{ url('/assets/images/left_quotes_sign_1.png') }}" />
                            <p>GWA Group membantu hotel<br/> saya untuk menjangkau lebih banyak<br/> client dan memberikan saran<br/> monetisasi yang tidak pernah saya<br/> bayangkan sebelumnya</p>
                        </div>
                        <div class="brand">
                            <img src="{{ url('/assets/images/brand_yello.png') }}" />
                            <div class="name-brand">
                                <h2>Chaim Desmond</h2>
                                <h1>CEO of Yellow Hotel</h1>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-slide">
                        <div class="wrapper">
                            <div class="item swiper">
                                <div class="item__wrapper swiper-wrapper">
                                    <div class="item__slide swiper-slide">
                                        <div class="item__img">
                                            <picture>
                                                <source srcset="{{ url('/assets/images/testimonial-img.png') }}" type="image/webp"><img src="{{ url('/assets/images/testimonial-img.png') }}"  />
                                            </picture>
                                        </div>
                                    </div>
                                    <div class="item__slide swiper-slide">
                                        <div class="item__img">
                                            <picture>
                                                <source srcset="{{ url('/assets/images/testimonial-img.png') }}" type="image/webp"><img src="{{ url('/assets/images/testimonial-img.png') }}"  />
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-swiper">
                                    <div class="item__prev swiper-button-prev"></div>
                                    <div class="item__next swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- contact --}}

        <section class="contact">
            <div class="container">
                <div class="contact-text">
                    <div class="title">
                        <div class="contact-line">
                            <img class="line" src="{{ url('/assets/images/line_main.png') }}" />
                        </div>
                        <p>HUBUNGI KAMI</p>
                    </div>
                    <h1>Ingin Mendiskusikan <br/> Bisnis Pariwisata Anda ?</h1>
                    <hr/>
                    <p>Ada kepentingan bisnismu yang ingin<br/> didikusikan dengan kami, yuk segera isi form<br/> disamping, konsultasinya gratis kok !</p>
                </div>
                <div class="form-wrapper">
                    <form class="form" action="#" method="post">
                        <div>
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div>
                            <label for="perusahaan">Nama Perusahaan</label>
                            <input type="text" id="perusahaan" name="company" placeholder="Masukkan Nama Perusahaan" required>
                        </div>
                        <div>
                            <label for="number">Nomor Whatsapp Aktif</label>
                            <input type="text" id="number" name="phone" placeholder="Masukkan Nomor Whatsapp" required>
                        </div>
                        <button type="submit">
                            Jadwalkan Konsultasi
                            <img src=" {{ url('/assets/images/arrow-right.png') }} ">
                        </button>
                    </form>
                </div>
            </div>
        </section>

        {{-- footer --}}

        <footer class="footer">
            <img src="{{ url('/assets/images/logo_brand.png') }}" />
            <div class="footer-row">
                <div class="footer-col">
                    <h1>Halaman Utama</h1>
                    <a href="#">Homepage</a>
                </div>
                <div class="footer-col">
                    <h1>Perusahaan</h1>
                    <a href="#">Tentang Kami</a>
                    <a href="#">Daftar Hotel</a>
                </div>
                <div class="footer-col">
                    <h1>Temukan Kami</h1>
                    <a href="#">Bantuan</a>
                    <a href="#">Hubungi Kami</a>
                </div>
                <div class="footer-col">    
                    <h1>Social Media</h1>
                    <div class="sosmed-logo">
                        <a href="#"><img src="{{ url('/assets/images/facebook.png') }}" /></a>
                        <a href="#"><img src="{{ url('/assets/images/youtube.png') }}" /></a>
                        <a href="#"><img src="{{ url('/assets/images/instagram.png') }}" /></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bot">
                <div class="row-bot">
                    <a href="#">Pemberitahuan Privasi</a>
                    <a href="#">Syarat dan Ketentuan</a>
                </div>
                <div class="row-bot r2">
                    <img src="{{ url('/assets/images/lang-icon.png') }}" />
                    <div class="btn-language">
                        <button>
                            Bahasa Indonesia
                            <img src="{{ url('/assets/images/arrowdown.png') }}" />
                        </button>
                    </div>
                </div>
            </div>
            <p class="copyright">&copy; 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk.</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        {{-- js --}}
        <script>

        const swiper = new Swiper('.swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });

            let navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (document.documentElement.scrollTop > 20 ) {
                    navbar.classList.add('sticky');
                } else {
                    navbar.classList.remove('sticky');
                }
            });
        </script>
        </body>
</html>

