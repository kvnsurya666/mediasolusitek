    <?= $this->extend('layouts/app'); ?>

    <?= $this->section('content'); ?>
    
    <section id="hero" class="d-flex align-items-center">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Welcome to Media Solusi Tek</h1>
            <h2>We are team of talented website developers</h2>
          </div>
        </div>

        
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>About Us</h2>
            <p>Kami adalah sebuah perusahaan yang bergerak di bidang IT.</p>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>Kami berkompeten dalam bidang merancang, mendesain, dan membuat website yang responsive terhadap perangkat desktop dan mobile.</p>
              <p>Kami memiliki Visi dan Misi yaitu</p>
              <ul>
                <li><i class="ri-check-double-line"></i> Berdedikasi tinggi terhadap integritas client</li>
                <li><i class="ri-check-double-line"></i> Bertanggung jawab atas keinginan client</li>
                <li><i class="ri-check-double-line"></i> Tepat waktu pengerjaan pada waktu yang telah ditentukan bersama client</li>
              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                Memiliki cita - cita yaitu menjadikan perusahaan ini terkenal, terdepan, dan terbaik dalam melayani client.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="2" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="2" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="2" class="purecounter"></span>
                <p>Years of experience</p>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- End Counts Section -->

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
              <img src="assets/img/clients/logocjl.png" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-6 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
              <img src="assets/img/clients/logocbmbaru.png" class="img-fluid" alt="" />
            </div>

          </div>
        </div>
      </section>
      <!-- End Clients Section -->

      <!-- ======= Services Section ======= -->
      <!-- <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Services</h2>
            <p>
              Kami melayani berbagai macam paket bundling website.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path
                      stroke="none"
                      stroke-width="0"
                      fill="#f5f5f5"
                      d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"
                    ></path>
                  </svg>
                  <i class="bx bxl-dribbble"></i>
                </div>
                <h4><a href="">Web Design</a></h4>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path
                      stroke="none"
                      stroke-width="0"
                      fill="#f5f5f5"
                      d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"
                    ></path>
                  </svg>
                  <i class="bx bx-file"></i>
                </div>
                <h4><a href="">Web Developer</a></h4>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-pink">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path
                      stroke="none"
                      stroke-width="0"
                      fill="#f5f5f5"
                      d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"
                    ></path>
                  </svg>
                  <i class="bx bx-tachometer"></i>
                </div>
                <h4><a href="">Web Administration</a></h4>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-yellow">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path
                      stroke="none"
                      stroke-width="0"
                      fill="#f5f5f5"
                      d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"
                    ></path>
                  </svg>
                  <i class="bx bx-layer"></i>
                </div>
                <h4><a href="">Website Maintenance</a></h4>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- End Sevices Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Portfolio</h2>
            <p>
              Project yang telah kami selesaikan
            </p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-web">Website</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-6 col-md-6 portfolio-item filter-web justify-content-center">
              <div class="portfolio-wrap">
                <img src="/assets/img/clients/logocbmbaru.png" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Website CNC Tools Surabaya</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="/portfolio-details" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-web justify-content-center">
              <div class="portfolio-wrap">
                <img src="assets/img/clients/logoCJL.png" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Website Cipta Jaya Lestari</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="/portfolio-details" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web justify-content-center">
              <div class="portfolio-wrap">
                <img src="assets/img/clients/logoHCS.png" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4>Website Harapan Cahaya Semesta</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="/portfolio-details" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div> -->

          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Team</h2>
            <p>
              Inilah wajah - wajah kami sebagai Founder dan co-Founder Media Solusi Tek. Kami juga berperan sebagai website developer.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/kevin.jpg" class="img-fluid" alt="" />
                  <div class="social">
                    <a href="https://www.facebook.com/fransiscus.kevin.surya/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/fkvnsurya/"><i class="bi bi-instagram"></i></a>
                    <a href="linkedin.com/in/fransiscus-kevin-surya-perdana-982895155"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Fransiscus Kevin</h4>
                  <span>Founder</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="member-img">
                  <img src="assets/img/team/puji.jpg" class="img-fluid" alt="" />
                  <div class="social">
                    <a href="https://www.instagram.com/pratamapuji.a/"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Pratama Puji</h4>
                  <span>Co-Founder</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->
    
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact</h2>
            <p>
              Anda bisa menghubungi kami melalui kontak yang ada di bawah ini. Silahkan isi formulir di bawah ini apabila anda tertarik untuk menggunakan jasa kami.
            </p>
          </div>

          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.940440788994!2d112.75711615100404!3d-7.360573494662486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e530da65e73f%3A0xaa639237e3ce7cab!2sMEDIA%20SOLUSI%20TEK!5e0!3m2!1sen!2sid!4v1661238697052!5m2!1sen!2sid"
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

          <div class="row mt-5">
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Perum Taman Wisata Tropodo B-26, Waru, Sidoarjo 61256</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><a href="mailto:mediasolusitek@gmail.com">mediasolusitek@gmail.com</a></p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p><a href="tel:0313896920" class="nobor">+62 8565 5513 1099</a></p> 
                </div>
              </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    
<?= $this->endSection(); ?>