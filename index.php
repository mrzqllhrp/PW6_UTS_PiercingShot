<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>point Blank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.gif" type="image/gif">

  </head>

  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Navbar -->

    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark " data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/NavLogo.png" alt="Bootstrap" width="30" height="24">
            </a>
            <a class="navbar-brand" href="#">POINT BLANK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 navmenu">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Game
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Download</a></li>
                      <li><a class="dropdown-item" href="#">Weapon</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Panduan</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Stat
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Game Profile</a></li>
                      <li><a class="dropdown-item" href="#">Game Attendance</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Rank
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Individual Rank</a></li>
                      <li><a class="dropdown-item" href="#">Clan Rank</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Clan
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Info clan</a></li>
                      <li><a class="dropdown-item" href="#">Clan Media</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Clan Community</a></li>
                    </ul>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Media
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Vidio</a></li>
                    <li><a class="dropdown-item" href="#">Wallpaper</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">ScreenShot</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#E-Sports">E-Sports</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#Berita">Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#PREMIUM SHOP">Premium Shop</a>
                  </li>
              </ul>

    <!-- Navbar Button -->

                <div class="navbarbutton">
                  <a href="crud.php" onclick="switchToRegister()" target="_blank" class="btn btn-outline-danger" role="button">
                    <img src="img/person.svg" alt=""> Admin
                </a>
                  <a href="login.php" target="_blank" class="btn btn-outline-danger" role="button">
                      <img src="img/lock.svg" alt=""> Login
                  </a>
              </div>
            </div>
          </div>
        </nav>
      </div>

    <br><br>
    
    <!-- Carousel -->

    <div class="container">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Cr2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cr1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cr5.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cr4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cr3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  
    <!-- description -->

    <div class="container" id="E-Sports">

      <div class="description">
        <div class="premium">
            <p>E-Sports</p>
        </div>
      </div>
      
    </div>


    <!-- E-Sports -->

    <div class="container">
      <div class="esport-container">
        <div class="esport-content">
  
          <div class="esport-thum">
            <img src="img/esport1.jpg" alt="">
            <h6>PENDAFTARAN LET'S BOWL POINT BLANK BULAN NOVEMBER</h6>
          </div>
          
          <p>01. Nov. 2023</p>
        </div>
  
        <div class="esport-content">
  
          <div class="esport-thum">
            <img src="img/esport2.jpg" alt="">
            <h6>SHOUTCASTER HUNT 2023 </h6>
          </div>
          
          <p>31. Oct. 2023</p>
        </div>
  
        <div class="esport-content">
          <div class="esport-thum">
            <img src="img/esport3.jpeg" alt="">
            <h6>POINT BLANK SUPPORT CAMP</h6>
          </div>
          
          <p>31. Oct. 2023</p>
        </div>
  
        <div class="esport-content">
          <div class="esport-thum">
            <img src="img/esport4.jpg" alt="">
            <h6>HALL OF SHAME (BANNED COMPETITIVE LIST )</h6>
          </div>
          
          <p>31. Oct. 2023</p>
        </div>
  
      </div>
    </div>

    

    <!-- description -->

    <div class="container" id="Berita">

      <div class="description">
        <div class="premium">
            <p>Berita</p>
        </div>
      </div>
      
    </div>

    <!-- Berita -->

    <div class="container">
      <div class="row">
          <!-- Card 1 -->
          <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                  <div class="card-body bg-dark text-white">
                      <h5 class="card-title">Black Mamba</h5>
                      <img src="img/event1.jpg" alt="">
                      <p class="card-text">Hi, Troopers!
                        Pada Update 31 Oktober 2023 Kali ini,
                        Ayo Bertempur di Map BlackMamba karena kalian bisa menikmati EXP Boost 100%! </p>
                      <a href="https://www.pointblank.id/news/view?idx=4362&page=1" target="_blank" class="btn btn-primary">Kunjungi </a>
                  </div>
              </div>
          </div>
          
          <!-- Card 2 -->
          <div class="col-sm-3">
              <div class="card">
                  <div class="card-body bg-dark text-white">
                      <h5 class="card-title">Premium Shop</h5>
                      <img src="img/event2.jpg" alt="">
                      <p class="card-text">Hai Troopers membeli berbagai jenis item spesial yang tidak ada pada in-game shop
                        dan hanya bisa kalian dapatkan melalui Website Premium Shop </p>
                      <a href="https://www.pointblank.id/news/view?idx=4374&page=1" target="_blank" class="btn btn-primary">Kunjungi</a>
                  </div>
              </div>
          </div>
  
          <!-- Card 3 -->
          <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                  <div class="card-body bg-dark text-white">
                      <h5 class="card-title">Ferocious</h5>
                      <img src="img/event3.jpg" alt="">
                      <p class="card-text">Hi Troopers !!
                        Pada Update 31 Oktober 2023 kali ini,
                        Jadi Ganas di Setiap Pertempuran dengan Item Series Terbaru!
                        Segera cek update terbaru.</p>
                      <a href="https://www.pointblank.id/news/view?idx=4360&page=1" target="_blank" class="btn btn-primary">Kunjungi</a>
                  </div>
              </div>
          </div>
          
          <!-- Card 4 -->
          <div class="col-sm-3">
              <div class="card">
                  <div class="card-body bg-dark text-white">
                      <h5 class="card-title">Shoutcaster Hunt</h5>
                      <img src="img/event4.jpg" alt="">
                      <p class="card-text">Hai Troopers,
                        Point Blank Caster Hunt 2023 hadir !! daftarkan diri  dan tunjukkan kemampuan hebatmu dalam menganalisis jalannya pertandingan.</p>
                      <a href="https://www.pointblank.id/esports/news/view?idx=195" target="_blank" class="btn btn-primary">Kunjungi</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <br><br>

  <div class="container">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body bg-dark text-white">
                    <h5 class="card-title">Update Cheat Blocker</h5>
                    <img src="img/event5.png" alt="">
                    <p class="card-text">Hai Troopers, Kami telah melakukan Update 
                      Cheat Blocker pada hari Sabtu, 11 November 2023 Pada Pukul 07:45 WIB </p>
                    <a href="https://www.pointblank.id/news/view?idx=4404&page=1&category=0" target="_blank" class="btn btn-primary">Kunjungi </a>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body bg-dark text-white">
                    <h5 class="card-title">Battle Pass</h5>
                    <img src="img/event6.jpg" alt="">
                    <p class="card-text">Hai Troopers
                      Sudah Punya Premium Battle Pass Belum nih??
                      Karena Kami telah mempersiapkan Berbagai Item 
                      Spesial dengan Harga diskon 50% lho..!! </p>
                    <a href="https://www.pointblank.id/news/view?idx=4385&page=1" target="_blank" class="btn btn-primary">Kunjungi</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body bg-dark text-white">
                    <h5 class="card-title">Samurai Warrior</h5>
                    <img src="img/event7.jpg" alt="">
                    <p class="card-text">Hi Troopers !!
                      Setelah Maintenance 7 November 2023 kali ini
                      Battle Pass akan Segera Hadir Kembali
                      Battle Pass kali ini bertemakan SAMURAI WARRIOR Part 1.</p>
                    <a href="https://www.pointblank.id/news/view?idx=4384&page=1" target="_blank" class="btn btn-primary">Kunjungi</a>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body bg-dark text-white">
                    <h5 class="card-title">Scramble</h5>
                    <img src="img/event8.jpg" alt="">
                    <p class="card-text">Hi Troopers !!
                      Pada Update 7 November 2023 kali ini,
                      Ayo Rebut Area Kekuasaan dengan Item Terbaru!
                      Segera cek update terbaru kali ini yah.</p>
                    <a href="https://www.pointblank.id/news/view?idx=4383&page=1" target="_blank" class="btn btn-primary">Kunjungi</a>
                </div>
            </div>
        </div>
    </div>
</div>
  

    <!-- description -->

    <div class="container" id="PREMIUM SHOP">

      <div class="description">
        <div class="premium">
            <p>PREMIUM SHOP</p>
        </div>
      </div>
      
    </div>

    <!-- Premium Shop -->
    
    <div class="card-container premo">
      
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon9.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Kuasai Pertempuran: Dapatkan senjata hebat kami dan kuasai medan perang dengan kekuatan yang belum pernah Anda rasakan sebelumnya! 🚀"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Tingkatkan Performa Anda: Raih kemenangan dengan senjata kelas atas kami yang didesain untuk meningkatkan kemampuan Anda di setiap pertempuran. 🔥"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Senjata Legendaris: Hadapi tantangan dengan gaya! Temukan senjata legendaris kami yang memberikan keunggulan tak tertandingi di setiap level. ⚔️"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon4.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Gelombang Kekuatan: Dengan senjata kami, Anda bukan hanya bermain, Anda memimpin! Raih kemenangan dan jadilah pahlawan dengan senjata terbaik di tangan Anda. 🏹"</p>
        </div>
      </div>
      

    </div>

    <br>

    <div class="card-container premo">
      
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Kuasai Pertempuran: Dapatkan senjata hebat kami dan kuasai medan perang dengan kekuatan yang belum pernah Anda rasakan sebelumnya! 🚀"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon15.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Tingkatkan Performa Anda: Raih kemenangan dengan senjata kelas atas kami yang didesain untuk meningkatkan kemampuan Anda di setiap pertempuran. 🔥"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon10.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Senjata Legendaris: Hadapi tantangan dengan gaya! Temukan senjata legendaris kami yang memberikan keunggulan tak tertandingi di setiap level. ⚔️"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon11.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Gelombang Kekuatan: Dengan senjata kami, Anda bukan hanya bermain, Anda memimpin! Raih kemenangan dan jadilah pahlawan dengan senjata terbaik di tangan Anda. 🏹"</p>
        </div>
      </div>
      

    </div>

    <br>

    <div class="card-container premo">
      
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon5.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Ketangguhan Tak Terbantahkan: Pertahankan wilayah Anda dengan senjata andalan kami. Ketangguhan dan kehandalan di setiap kali bertempur. 💪"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon6.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Strategi Baru, Senjata Baru: Buka pintu menuju strategi baru dengan senjata inovatif kami. Mengubah permainan, satu tembakan pada satu waktu. 🌐"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon7.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Koleksi Senjata Terkini: Jelajahi koleksi senjata terkini kami, dipenuhi dengan teknologi canggih dan desain futuristik. Jadi yang pertama merasakan kekuatannya! 🚁"

          </p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon8.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Dominasi Tanpa Batas: Dengan senjata unggulan kami, dominasi di tangan Anda. Jelajahi kekuatan yang menghancurkan dan tak terkalahkan. 💣"</p>
        </div>
      </div>

    </div>

    <br>

    <div class="card-container premo">
      
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon13.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Ketangguhan Tak Terbantahkan: Pertahankan wilayah Anda dengan senjata andalan kami. Ketangguhan dan kehandalan di setiap kali bertempur. 💪"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon14.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Strategi Baru, Senjata Baru: Buka pintu menuju strategi baru dengan senjata inovatif kami. Mengubah permainan, satu tembakan pada satu waktu. 🌐"</p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon12.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Koleksi Senjata Terkini: Jelajahi koleksi senjata terkini kami, dipenuhi dengan teknologi canggih dan desain futuristik. Jadi yang pertama merasakan kekuatannya! 🚁"

          </p>
        </div>
      </div>
      <div class="card bg-dark text-white" style="width: 18rem;">
        <img src="img/weapon16.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">"Dominasi Tanpa Batas: Dengan senjata unggulan kami, dominasi di tangan Anda. Jelajahi kekuatan yang menghancurkan dan tak terkalahkan. 💣"</p>
        </div>
      </div>

    </div>

    <br><br><br><br>

    <!-- footer -->

     <div class="footer-container">
        <div class="list-footer">
          <ul class="footer-ul">
            <li>PB E-SPORTS</li>
            <li>PEMBERITAHUAN PRIVASI</li>
            <li>SYARAT LAYANAN</li>
            <li>PEMBERITAHUAN PENGELOLAAN GAME</li>
            <li>VOUCHER RESELLER</li>
          </ul>
        </div>

        <div class="logo-footer">
          <img src="img/logo_zepetto.png" alt="">
        </div>

        <div class="desc-footer">
          <p>JIKA ADA PERTANYAAN SILAHKAN KIRIMKAN TICKET MELALUI WEBSITE <a href="https://www.pointblank.id/ticket/form" target="_blank">https://www.pointblank.id/ticket/form</a></p>
        </div>

        <div class="text-footer">
          <p>copyright &copypt. Zepetto interactive indonesia all rights reserved</p>
        </div>
     </div>
</body>
</html>