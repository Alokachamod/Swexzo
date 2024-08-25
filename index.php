<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swexzo</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link rel="icon" href="resources/swexzo logo.jpg">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js"></script>
</head>

<body class="bg-dark ">
  <div class="container-fluid">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg col-10 offset-1 header fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="resources/Swexzo company logo.png" alt="icon" height="50px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 offset-xxl-2 ">
              <li class="nav-item ">
                <a class="nav-link position-relative g-6 m-2 " aria-current="page" href="#sxhome">
                  <p class="htext">Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link position-relative g-6 m-2 " href="#sxservice">
                  <p class="htext">Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link position-relative g-6 m-2 " href="#sxproject">
                  <p class="htext">Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link position-relative g-6 m-2 " href="#sxteam">
                  <p class="htext">Our Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link position-relative g-6 m-2 " href="#sxcontact">
                  <p class="htext">Contact us</p>
                </a>
              </li>

              <button class="rqb" onclick="openForm();">
                Request a Qoute
                <svg fill="currentColor" viewBox="0 0 24 24" class="iconrqb">
                  <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                </svg>
              </button>
            </ul>



          </div>
        </div>
      </nav>
      <div id="form-container" class="form-container">
        <span class="close-btn" onclick="closeForm()">&times;</span>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf0dgKpfU7xR1M2YdZBSDDu964ZDE4gUxrK1_qmfK_qSxHREA/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
      </div>
      <section class="col-12 sxhome h-100" id="sxhome">

        <div class="row">
          <div class="d-flex">
            <div class="col-lg-6 col-12 text-light">
              <div class="col-lg-10 offset-lg-1 col-11  offset-1 hometext  ">
                <img src="resources/Swexzo company logo.png" alt="icon" class="himage offset-2">
                <p class="slogen1 offset-1">Your partner in</p>
                <p class="slogen2 offset-2">Digital Transformation</p>

              </div>
            </div>
            <div class="homeanimation position-absolute offset-6 col-lg-6  d-none d-xl-block">
              <div id="lottie-animation" style="width: 700px; height: 700px;">

              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="col-12 sxservice" id="sxservice">
        <div class="col-12">
          <div class="stitle text-light text-center">Our Services</div>
          <br>
          <div class="container py-4">

            <article class="postcard dark blue">
              <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="RESOURCES/web design.jpg" alt="Image Title" />
              </a>
              <div class="postcard__text g-1">
                <h1 class="postcard__title blue">Web Design</h1>
                <div class="postcard__subtitle small">

                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">
                  <div>
                    <p>Delivering responsive web designs with striking graphics that elevate your brand. We craft visually compelling and brand-focused websites that adapt seamlessly across all devices.</p>
                  </div>

                </div>
                <ul class="postcard__tagbox">
                  <li class="tag__item">Ai</li>
                  <li class="tag__item">Ps</li>
                  <li class="tag__item">
                    Pr
                  </li>
                </ul>
              </div>
            </article>
            <article class="postcard dark red">
              <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="resources/web dev.jpg" alt="Image Title" />
              </a>
              <div class="postcard__text">
                <h1 class="postcard__title red">Web Developing</h1>
                <div class="postcard__subtitle small">

                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">
                  <div>
                    <p>Building robust, responsive websites with integrated graphic design and branding, backed by powerful backend solutions for seamless performance</p>
                  </div>
                </div>
                <ul class="postcard__tagbox">
                  <li class="tag__item">html</li>
                  <li class="tag__item">CSS</li>
                  <li class="tag__item">
                    java Script
                  </li>
                  <li class="tag__item">PHP</li>
                </ul>
              </div>
            </article>

            <article class="postcard dark yellow">
              <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="resources/e-commerce-digital-internet-technology-web-concept.jpg" alt="Image Title" />
              </a>
              <div class="postcard__text">
                <h1 class="postcard__title yellow">E-Commerce</h1>
                <div class="postcard__subtitle small">

                </div>
                <div class="postcard__bar"></div>
                <div>
                  <p>Building responsive, visually engaging websites with strong branding, robust backend systems, and secure payment gateways. We ensure your site is both functional and visually stunning.</p>
                </div>
                <ul class="postcard__tagbox">
                  <li class="tag__item">payhere</li>
                  <li class="tag__item">Stripe</li>

                </ul>
              </div>
            </article>

            <article class="postcard dark yellow">
              <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="resources/iot.jpg" alt="Image Title" />
              </a>
              <div class="postcard__text">
                <h1 class="postcard__title yellow">IOT Solution</h1>
                <div class="postcard__subtitle small">

                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">
                  <div>
                    <p>Empowering innovators with cutting-edge IoT solutions. We help you connect, monitor, and optimize devices seamlessly, driving innovation and transforming ideas into intelligent systems.</p>
                  </div>
                </div>
                <ul class="postcard__tagbox">
                  <li class="tag__item">Arduino</li>
                  <li class="tag__item">ESP 32</li>
                  <li class="tag__item">Magicbit</li>
                  <li class="tag__item">Microbit</li>
                  <li class="tag__item">C++</li>


                </ul>
              </div>
            </article>
          </div>
        </div>
      </section>
      <section class="col-12 sxproject h- " id="sxproject">
        <div class="col-12">
          <div class="stitle text-light text-center">Our Projects</div>
          <div class="col-12">
            <div class="photo-gallery">
              <div class="container">
                <div class="row photos">
                  <div class="col-sm-6 col-md-4 col-lg-4 item "><a href="resources/aloka_nb.png" data-lightbox="photos"><img class="img-fluid" src="resources/aloka_nb.png"></a></div>
                  <div class="col-sm-6 col-md-4 col-lg-4 item "><a href="resources/themiya.png" data-lightbox="photos"><img class="img-fluid" src="resources/themiya.png"></a></div>
                  <div class="col-sm-6 col-md-4 col-lg-4 item "><a href="resources\charithma.png" data-lightbox="photos"><img class="img-fluid" src="resources/charithma.png"></a></div>
                  <div class="col-sm-6 col-md-4 col-lg-4 item "><a href="resources\charithma.png" data-lightbox="photos"><img class="img-fluid" src="resources/givindu.png"></a></div>
                  <div class="col-12">
                    <div class="icons">
                      <div class="icons-slide">
                        <img src="icon/html-5_5968267.png" alt="">
                        <img src="icon/css-3.png" alt="">
                        <img src="icon/js.png" alt="">
                        <img src="icon/php.png" alt="">
                        <img src="icon/bootstrap.png" alt="">
                        <img src="icon/mysql.png" alt="">
                        <img src="icon/python.png" alt="">
                        <img src="icon/java.png" alt="">
                        <img src="icon/c-.png" alt="">

                      </div>
                      <div class="icons-slide">
                        <img src="icon/html-5_5968267.png" alt="">
                        <img src="icon/css-3.png" alt="">
                        <img src="icon/js.png" alt="">
                        <img src="icon/php.png" alt="">
                        <img src="icon/bootstrap.png" alt="">
                        <img src="icon/mysql.png" alt="">
                        <img src="icon/python.png" alt="">
                        <img src="icon/java.png" alt="">
                        <img src="icon/c-.png" alt="">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <section class="col-12 sxteam h-100" id="sxteam">
        <div class="col-12">
          <div class="stitle text-light text-center">Our Team</div>
          <div class="col-12">
            <div class="sxteambody col-12 d-flex flex-wrap justify-content-center align-items-center">
              <div class="person col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center">
                <div class="containert">
                  <div class="conianer-innert">
                    <div class="circle"></div>
                    <img src="profileimg/aloka.png" class="img-fluid">
                  </div>
                </div>
                <div class="divider my-2"></div>
                <h1 class="text-center">Aloka Chamod Champathi</h1>
                <p class="text-center">Founder | Full Stack Developer</p>
              </div>

              <div class="person col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center">
                <div class="containert">
                  <div class="conianer-innert">
                    <div class="circle"></div>
                    <img src="profileimg/themiya.png" class="img-fluid">
                  </div>
                </div>
                <div class="divider my-2"></div>
                <h1 class="text-center">Themiya Ravindu</h1>
                <p class="text-center">Front-End Developer</p>
              </div>

              <div class="person col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center">
                <div class="containert">
                  <div class="conianer-innert">
                    <div class="circle"></div>
                    <img src="profileimg/hashini.png" class="img-fluid">
                  </div>
                </div>
                <div class="divider my-2"></div>
                <h1 class="text-center">Hashini Rathnayaka</h1>
                <p class="text-center">Front-End Developer</p>
              </div>

              <div class="person col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center">
                <div class="containert">
                  <div class="conianer-innert">
                    <div class="circle"></div>
                    <img src="profileimg/givindu.png" class="img-fluid">
                  </div>
                </div>
                <div class="divider my-2"></div>
                <h1 class="text-center">Givindu Liyanage</h1>
                <p class="text-center">Full Stack Developer</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="col-12 sxcontact h-100" id="sxcontact">
        <div class="row justify-content-center">
          <div class="col-12">
            <!-- Animation section for large screens only -->
            <!-- From Uiverse.io by DavidTM96 -->
            <div class="contactanimation position-absolute col-lg-6 d-none d-lg-block">
              <div id="lottie-animationc" style="width: 700px; height: 700px;"></div>
            </div>

            <!-- Form section -->
            <div class="contactform col-12 col-md-8 col-lg-4 offset-lg-7 offset-md-2 justify-content-center">
              <div class="form-card1">
                <div class="form-card2">
                  <form class="form">
                    <p class="form-heading">Contact Us</p>

                    <div class="form-field">
                      <input required="" placeholder="Name" class="input-field" type="text" id="name" />
                    </div>

                    <div class="form-field">
                      <input required="" placeholder="Email" class="input-field" type="email" id="email" />
                    </div>

                    <div class="form-field">
                      <input required="" placeholder="Subject" class="input-field" type="text" id="subject" />
                    </div>

                    <div class="form-field">
                      <textarea required="" placeholder="Message" cols="30" rows="3" class="input-field" id="massage"></textarea>
                    </div>

                    <button class="sendMessage-btn" onclick=" contactProcess();">Send Message</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer  text-white pt-4">
        <div class="container">
          <div class="row">
            <!-- Logo Section -->
            <div class="col-md-4">
              <img src="resources/Swexzo company logo.png" alt="logo" height="70px">
              <p>At Swexzo, we empower businesses to thrive in the digital age.
                As your partner in digital transformation, we blend innovative technology with expert solutions to drive growth and success.
                Together, let's shape the future of your business.</p>
            </div>
            <!-- Quick Links Section -->
            <div class="col-md-4">
              <h5>Quick Links</h5>
              <ul class="list-unstyled">
                <li><a href="#sxhome" class="footer-link">Home</a></li>
                <li><a href="#sxservice" class="footer-link">Services</a></li>
                <li><a href="#sxproject" class="footer-link">Projects</a></li>
                <li><a href="#sxteam" class="footer-link">Team</a></li>
                <li><a href="#sxcontact" class="footer-link">Contact</a></li>
              </ul>
            </div>
            <!-- Services Section -->
            <div class="col-md-4">
              <h5>Services</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="footer-link">Web Development</a></li>
                <li><a href="#" class="footer-link">Web Design</a></li>
                <li><a href="#" class="footer-link">Portfolio site</a></li>
                <li><a href="#" class="footer-link">Web base Education system</a></li>
                <li><a href="#" class="footer-link">E-Commerce web development</a></li>

              </ul>
            </div>
          </div>
          <!-- Social Media Section -->
          <div class="row mt-3">
            <div class="col-md-12 col-lg-12 text-center">
              <h5>Find Us</h5>
              <a href="#" class="social-icon"><img src="icon/icons8-facebook-logo-50.png" alt="Facebook"></a>
              <a href="#" class="social-icon"><img src="icon/icons8-linkedin-logo-50.png" alt="LinkedIn"></a>
              <a href="#" class="social-icon"><img src="icon/icons8-x-logo-50.png" alt="X"></a>
              <a href="#" class="social-icon"><img src="icon/icons8-youtube-logo-50.png" alt="YouTube"></a>
            </div>

          </div>
        </div>
        <div class="text-center mt-4">
          <p>&copy; 2024 Swexzo. All Rights Reserved.</p>
        </div>
      </footer>

    </div>
  </div>
  </div>
  <script>
    var copy = document.querySelector(".logo-slide").cloneNode(true);
    document.querySelector('.logos').appendChild(copy);
  </script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/66c6021a50c10f7a009ee71b/1i5qngecm';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>