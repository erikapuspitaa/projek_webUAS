@extends('layouts.frontend.master')
@section('content')

 <!-- 
        - #SERVICE
      -->

      <section class = "section service" id="service" aria-label = "service">
        <div class ="container">
          <p class = "section-subtitle text-center">Our Service</p>
          <h2 class = "h2 section-title text-center">What We Provide</h2>
          <ul class = "service-list">
            <li>
              <div class = "service-card">
                <div class = "card-icon">
                  <img src="./assets/images/service-icon-1.png" width = "100" height="100" alt="service icon" class="w-100">   
                </div>
                <div>
                  <h3 class = "h3 card-title">Gum-Lifting</h3>
                  <p class = "card-text">Pengoptimalan estetika gigi dengan mengangkat serta membentuk gusi agar lebih simetris, proporsional, dan natural.</p>
                </div>
              </div>
            </li>

            <li>
              <div class = "service-card">
                <div class = "card-icon">
                  <img src="./assets/images/service-icon-2.png" width = "100" height="100" alt="service icon" class="w-100">   
                </div>
                <div>
                  <h3 class = "h3 card-title">Bleaching (Teeth Whitening )</h3>
                  <p class = "card-text">Perawatan untuk menghilangkan noda dan mencerahkan warna alami gigi</p>
                </div>
              </div>
            </li>

            <li>
              <div class = "service-card">
                <div class = "card-icon">
                  <img src="./assets/images/service-icon-4.png" width = "100" height="100" alt="service icon" class="w-100">   
                </div>
                <div>
                  <h3 class = "h3 card-title">Operasi Gigi Bungsu</h3>
                  <p class = "card-text">Tindakan bedah mulut dapat dilakukan untuk mengobati impaksi</p>
                </div>
              </div>
            </li>

            <!-- gigi service image -->
            <li class = "service-banner"> 
              <figure>
                <img src="./assets/images/service-banner.png" width="409" height: "467" alt="service banner" class = "w-100">
              </figure>
            </li>

            <li>
              <div class = "service-card">
                <div class = "card-icon">
                  <img src="./assets/images/service-icon-5.png" width = "100" height="100" alt="service icon" class="w-100">   
                </div>
                <div>
                  <h3 class = "h3 card-title">Implan dan Penambalan Gigi</h3>
                  <p class = "card-text">Penambalan gigi dan penggantian gigi dengan metode serta teknologi dental terkini</p>
                </div>
              </div>
            </li>

            <li>
              <div class = "service-card">
                <div class = "card-icon">
                  <img src="./assets/images/service-icon-3.png" width = "100" height="100" alt="service icon" class="w-100">   
                </div>
                <div>
                  <h3 class = "h3 card-title">Perawatan Kawat Gigi</h3>
                  <p class = "card-text">Memperbaiki penampilan gigi yang tidak rata atau posisi rahang yang tidak benar</p>
                </div>
              </div>
            </li>

            <li>
              <div class = "service-card">
                <div class = "card-icon">
                  <img src="./assets/images/service-icon-6.png" width = "100" height="100" alt="service icon" class="w-100">   
                </div>
                <div>
                  <h3 class = "h3 card-title">Scalling</h3>
                  <p class = "card-text">Perawatan untuk mengatasi karang gigi yang menumpuk</p>
                </div>
              </div>
            </li>
            
          </ul>
        </div>

      </section>


      <!-- 
        - #ABOUT
      -->

      <section class = "section about" id = "about" aria-label = "about">
        <div class = "container">
          <figure class = "about-banner">
            <img src="./assets/images/about-banner.png" width="470" height="538" alt="about banner" class = "w-100">
          </figure>

          <div class = "about-content">
            <p class = "section-subtitle">About Us</p>
            <h2 class = "h2 section-title">Where Your Perfect Smile Begins</h2>
            <p class = "section-text section-text-1">
              Kami percaya bahwa perfect smile atau senyum yang sempurna diperoleh dari dua aspek pasti 
              yaitu gigi dan mulut yang sehat dengan tampilan yang indah sehingga menunjang kesehatan. 
              Dengan dokter gigi spesialis dan fasilitas yang lengkap di setiap klinik DentCare, pasien tidak lagi 
              harus dirujuk ke rumah sakit atau klinik lain untuk menjalani perawatan tertentu untuk mendapatkan 
              senyum yang sempurna.
            </p>

            <p class = "section-text">
              Berada di bawah PT Dental Mandiri Indonesia, Dentcare menjadi Klinik Praktek Bersama Dokter Gigi Spesialis. DentCare 
              sebagai klinik gigi spesialis terdepan yang expert, profesional, berkualitas, serta up to date dengan teknologi standar 
              internasional untuk memenuhi kebutuhan pelayanan kesehatan gigi. Kepuasan pasien adalah prioritas utama dan tujuan kami.
            </p>

            <a href="#" class = "btn">Read More</a>
          </div>
        </div>
      </section>

     

      <!-- 
        - #DOCTOR
      -->
      <section class = "section doctor" aria-label = "doctor">
        <div class = "container">
          <p class = "section-subtitle text-center">Our Doctor</p>
          <h2 class = "h2 section-title text-center">Best Expert Dentist</h2>
          <ul class = "has-scrollbar">
            <li class = "scrollbar-item">
              <div class = "doctor-card">
                <div class = "card-banner img-holder" style="width: 460; height: 500;">
                  <img src="./assets/images/doctor-1.jpeg" width="460" height="500" alt="Rendi Firmono" class = "img-cover">
                </div>

                <h3 class = "h3">
                  <a href="#" class = "card-title">drg. Rendi Firmono, MARS, Sp.Perio</a>
                </h3>

                <p class = "card-subtitle">Spesialis Scalling</p>
                <ul class = "card-social-list">

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-facebook"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-twitter"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-instagram"></ion-icon>
                  </a>
                  </li>
                </ul>


              </div>
            </li>

            <li class = "scrollbar-item">
              <div class = "doctor-card">
                <div class = "card-banner img-holder" style="width: 460; height: 500;">
                  <img src="./assets/images/doctor-2.jpg" width="460" height="500" alt="Ken Ayu" class = "img-cover">
                </div>

                <h3 class = "h3">
                  <a href="#" class = "card-title">drg. Ken Ayu Miranthy, Sp.BMo</a>
                </h3>

                <p class = "card-subtitle">Spesialis Bedah Mulut</p>
                <ul class = "card-social-list">

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-facebook"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-twitter"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-instagram"></ion-icon>
                  </a>
                  </li>
                </ul>


              </div>
            </li>

            <li class = "scrollbar-item">
              <div class = "doctor-card">
                <div class = "card-banner img-holder" style="width: 460; height: 500;">
                  <img src="./assets/images/doctor-3.jpg" width="460" height="500" alt="Inge Paramitha" class = "img-cover">
                </div>

                <h3 class = "h3">
                  <a href="#" class = "card-title">drg. Inge Paramitha, Sp.Pros</a>
                </h3>

                <p class = "card-subtitle">Spesialis Bleaching Gigi</p>
                <ul class = "card-social-list">

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-facebook"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-twitter"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-instagram"></ion-icon>
                  </a>
                  </li>
                </ul>


              </div>
            </li>

            <li class = "scrollbar-item">
              <div class = "doctor-card">
                <div class = "card-banner img-holder" style="width: 460; height: 500;">
                  <img src="./assets/images/doctor-4.jpg" width="460" height="500" alt="Rani Isfandira" class = "img-cover">
                </div>

                <h3 class = "h3">
                  <a href="#" class = "card-title">drg. Rani Isfandira, Sp.KG</a>
                </h3>

                <p class = "card-subtitle">Spesialis Konservasi Gigi</p>
                <ul class = "card-social-list">

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-facebook"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-twitter"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-instagram"></ion-icon>
                  </a>
                  </li>
                </ul>


              </div>
            </li>

            <li class = "scrollbar-item">
              <div class = "doctor-card">
                <div class = "card-banner img-holder" style="width: 460; height: 500;">
                  <img src="./assets/images/doctor-5.jpg" width="460" height="500" alt="Leo Saputra" class = "img-cover">
                </div>

                <h3 class = "h3">
                  <a href="#" class = "card-title">drg. Leo Saputra, Sp.Pros</a>
                </h3>

                <p class = "card-subtitle">Spesialis Implan Gigi</p>
                <ul class = "card-social-list">

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-facebook"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-twitter"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-instagram"></ion-icon>
                  </a>
                  </li>
                </ul>


              </div>
            </li>

            <li class = "scrollbar-item">
              <div class = "doctor-card">
                <div class = "card-banner img-holder" style="width: 460; height: 500;">
                  <img src="./assets/images/doctor-6.jpg" width="460" height="500" alt="Fransilia" class = "img-cover">
                </div>

                <h3 class = "h3">
                  <a href="#" class = "card-title">drg. Fransilia Poedyaningrum, Sp.KG</a>
                </h3>

                <p class = "card-subtitle">Spesialis Penambalan Gigi</p>
                <ul class = "card-social-list">

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-facebook"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-twitter"></ion-icon>
                  </a>
                  </li>

                  <li><a href="#" class = "card-social-link">
                    <ion-icon name = "logo-instagram"></ion-icon>
                  </a>
                  </li>
                </ul>


              </div>
            </li>

          </ul>
        </div>
      </section>


      <!-- 
        - #CTA
      -->
      <section class = "section cta" aria-label = "cta">
        <div class = "container">

          <figure class = "cta-banner">
            <img src="./assets/images/cta-banner.png" width="1056" height="1076" alt="cta banner" class = "w-100">
          </figure>

          <div class = "cta-content">
            <p class = "section-subtitle">Book Dentail Appointment</p>
            <h2 class = "h2 section-title">We Are Open and Welcoming Patiens</h2>
            <a href="#" class = "btn">Book Appointment</a>
          </div>
        </div>
      </section>

      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">
          <p class="section-subtitle text-center">Our Blog</p>
          <h2 class="h2 section-title text-center">Latest Blog & News</h2>
          <ul class="blog-list">
            <li>
              <div class="blog-card">
                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                  <img src="./assets/images/blog-1.jpeg" width="1180" height="800" loading="lazy"
                    alt="Ingin Bleaching tahan lama?" class="img-cover">

                  <div class="card-badge">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <time class="time" datetime="2022-03-24">8th March 2023</time>
                  </div>
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Ingin Hasil Bleaching Gigi Tahan Lama? Lakukan Beberapa Hal ini!</a>
                  </h3>

                  <p class="card-text">
                    Tanpa disadari, berbagai kebiasaan seperti minum kopi, teh hingga merokok, ternyata dapat merubah warna pada gigi. 
                  </p>

                  <a href="#" class="card-link">Read More</a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                  <img src="./assets/images/blog-2.jpg" width="1180" height="800" loading="lazy"
                    alt="Dras accumsan nulla nec lacus ultricies placerat." class="img-cover">

                  <div class="card-badge">
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time class="time" datetime="2022-03-24">8th March 2023</time>
                  </div>
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Bahan, Prosedur, dan Biaya Tambal Gigi yang Perlu Diketahui</a>
                  </h3>

                  <p class="card-text">
                    Untuk mengatasi gigi berlubang, salah satu pilihan perawatan gigi adalah tambal gigi. Yuk, kenali lebih lanjut septuran prosedur, bahan, dan biaya tambal gigi berikut ini!
                  </p>

                  <a href="#" class="card-link">Read More</a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                  <img src="./assets/images/blog-3.jpg" width="1180" height="800" loading="lazy"
                    alt="Seas accumsan nulla nec lacus ultricies placerat." class="img-cover">

                  <div class="card-badge">
                    <ion-icon name="calendar-outline"></ion-icon>

                    <time class="time" datetime="2022-03-24">8th March 2023</time>
                  </div>
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Cek Kesehatan Gigi Berkala: Proses, Harga, & Klinik Scaling Gigi</a>
                  </h3>

                  <p class="card-text">
                    Sudah bukan hal yang asing jika kita perlu mengecek kesehatan gigi rutin enam bulan sekali ke dokter atau klinik scaling gigi untuk tetap memastikan kesehatan gigi. 
                  </p>

                  <a href="#" class="card-link">Read More</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





@stop