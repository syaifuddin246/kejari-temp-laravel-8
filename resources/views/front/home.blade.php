@extends('front/layouts/main')
@section('title','Home')
@section('hero-nav')
     <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Kejaksaan Negri Demak</h1>
            <h2>Selamat Datang di website Kejaksaan Negeri Demak</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Tentang Kami</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->
@endsection
@section('content')
     <!-- ======= About Section ======= -->
     <section id="about" class="about">
        <div class="container-fluid">
  
          <div class="row">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
              <a href="https://www.youtube.com/watch?v=RIqeeN-pGLI" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>
  
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
              <h3>Kejaksaan Negeri Demak membangun Zona Intergritas menuju WBK & WBBM</h3>
              <p>Zona Integritas (ZI) adalah predikat yang diberikan kepada instansi pemerintah yang pimpinan dan jajarannya mempunyai komitmen untuk mewujudkan WBK/WBBM melalui reformasi birokrasi, khususnya dalam hal pencegahan korupsi dan peningkatan kualitas pelayanan publik.</p>
  
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title">Wilayah Bebas Korupsi</h4>
                <p class="description">WBK adalah singkatan dari Wilayah Bebas dari Korupsi (Menuju) WBK adalah predikat yang diberikan kepada suatu unit kerja yang memenuhi sebagian besar program: manajemen perubahan, penataan tata laksana, penataan sistem manajemen SDM, penguatan akuntabilitas kinerja, dan penguatan pengawasan</p>
              </div>
  
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon"><i class="bx bx-gift"></i></div>
                <h4 class="title">WILAYAH BEBAS BERSIH MELAYANI</h4>
                <p class="description">WBBM adalah singkatan dari Wilayah Birokrasi Bersih dan Melayani (Menuju) WBBM adalah predikat yang diberikan kepada suatu unit kerja yang memenuhi sebagian besar kelima program pada WBK di atas ditambah dengan program penguatan kualitas pelayanan publik.</p>
              </div>

  
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
  
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">
              <div class="section-title" data-aos="fade-up">
                <h2>Kejaksaan Negri Demak</h2>
                <p><h3>Capaian Kinerja</h3></p>
              </div>
      
              <div class="row no-gutters" data-aos="fade-left">
      
                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                    <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                      <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                    <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                      <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                    <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                      <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                    <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                      <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                      <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                    <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                      <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                    <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                      <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-4">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                    <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                      <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Gallery Section -->
      
      <!-- ======= Details Section ======= -->
      <section id="details" class="details">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Kejaksaan Negri Demak</h2>
                <p><h3>Ancaman Pidana</h3></p>
              </div>
          <div class="row content">
            <div class="col-md-5" data-aos="fade-right">
              <img src="assets/img/details-1.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-4" data-aos="fade-up">
                <h3>Pasal 14 UU NO.4 TAHUN 1984</h3>
                <p class="font-italic">
                  AYAT(1) <br>
  
                  Barang Siapa yang Menghalangi Pelaksanaan Penanggulangan Wabah Dipidana Penjara Selama-lamanya 1 Tahun Denda Rp.1000.000 <br>
  
                  AYAT(2) <br>
  
                  Karena Kealpaannya Mengakibatkan Terhalangnya Pelaksanaan Penanggulangan Wabah Dipidana Kurungan Se/ama-lamanya 6 Bulan Denda Setinggi-Tingginya Rp. 500.000
                </p>
                <h3>PASAL 93 UU NO. 6 TAHUN 2018 </h3>
                <p class="font-italic">
                  Setiap Orang Yang Tidak Mematuhi Penyelenggaraan Kekarantinaan Kesehatan dan/atau Menghalang-Halangi Penyelenggaraan Kekarantinaan Kesehatan Hingga Menyebabkan Kedaruratan Kesehatan Masyarakat Dipidana Penjara Paling Lama 1 (satu) Tahun Denda Paling Banyak Rp. 100.000.000               </p>
  
                  <h3>PASAL 212 KUHPidana </h3>
                  <p class="font-italic">
  
  
                    Barang Siapa Melawan Seorang Pejabat Yang Sedang Menjalankan Tugas Sah. Dipidana Penjara Paling Lama 1 Tahun 4 Bulan
  
                  </p>
  
                  <h3>PASAL 214 KUHPidana </h3>
                  <p class="font-italic">
  
  
                      Jika Hal Tersebut Dilakukan Oleh Dua Ancaman Pidananya 7 Tahun Penjara
  
                  </p>
  
                  <h3>PASAL 216 Ayat 1 KUHPidana </h3>
                  <p class="font-italic">
  
  
                      Dengan Sengaja Tidak Menuruti Perintah atau Permintaan Yang Dilakukan menurut Undang-Undang Dipidana Penjara Paling Lama 4 Bulan 2 Minggu
  
                  </p>
  
                  <h3> PASAL 218 KUHPidana  </h3>
                  <p class="font-italic">
  
  
                      Barang Siapa Pada Waktu Rakyat Datang Berkerumun Dengan Sengaja Tidak Segera Pergi Setelah Diperintah Tiga Kali Oleh Atau Atas Nama Penguasa yang Berwenang Diancam Karena Ikut Serta Perkelompokan Dengan Pidana Penjara Paling Lama 4 Bulan 2 Minggu
                  </p>
  
  
              </div>
  
            </div>
          </div>
  
          <div class="row content">
            <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
              <img src="assets/img/details-2.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
              <h3>Corporis temporibus maiores provident</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <p>
                Inventore id enim dolor dicta qui et magni molestiae. Mollitia optio officia illum ut cupiditate eos autem. Soluta dolorum repellendus repellat amet autem rerum illum in. Quibusdam occaecati est nisi esse. Saepe aut dignissimos distinctio id enim.
              </p>
            </div>
          </div>
  
          <div class="row content">
            <div class="col-md-4" data-aos="fade-right">
              <img src="assets/img/details-3.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 pt-5" data-aos="fade-up">
              <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
              <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
              <ul>
                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
              </ul>
              <p>
                Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem. Et nihil magni debitis consequatur est.
              </p>
              <p>
                Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum soluta explicabo vel fugiat eum non.
              </p>
            </div>
          </div>
  
          <div class="row content">
            <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
              <img src="assets/img/details-4.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
              <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
              <ul>
                <li><i class="bi bi-check"></i> Et praesentium laboriosam architecto nam .</li>
                <li><i class="bi bi-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
                <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
              </ul>
            </div>
          </div>
  
        </div>
      </section><!-- End Details Section -->
  
    
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container">
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  
   
@endsection    
