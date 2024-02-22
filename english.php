<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- SEO Meta Tags -->
    <meta
      name="description"
      content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form."
    />
    <!-- <meta name="author" content="Inovatik"> -->

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Corso - Training Course Landing Page Template</title>

    <!-- Styles -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap"
      rel="stylesheet"
    />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <link href="css/swiper.css" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png" />
  </head>
  <body data-spy="scroll" data-target=".fixed-top">
    <!-- Preloader -->
    <div class="spinner-wrapper">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- end of preloader -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

      <!-- Image Logo -->
      <a class="navbar-brand logo-image" href="index.html"
        ><img src="images/logo.svg" alt="alternative"
      /></a>

      <!-- Mobile Menu Toggle Button -->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
      </button>
      <!-- end of mobile menu toggle button -->

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#register"
              >REGISTER <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#description">DETAILS</a>
          </li>

          <!-- Dropdown Menu -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle page-scroll"
              href="#date"
              id="navbarDropdown"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
              >DATE</a
            >
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="article-details.html"
                ><span class="item-text">ARTICLE DETAILS</span></a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="terms-conditions.html"
                ><span class="item-text">TERMS CONDITIONS</span></a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="privacy-policy.html"
                ><span class="item-text">PRIVACY POLICY</span></a
              >
            </div>
          </li>
          <!-- end of dropdown menu -->

          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contact">CONTACT</a>
          </li>
        </ul>
        <span class="nav-item social-icons">
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>
        </span>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-container">
              <!-- <div class="countdown">
                <span id="clock"></span>
              </div> -->
              <h1>Sewa Bharti</h1>
              <p class="p-large">Sewa Bharti, Haryana, Hisar</p>
              <!-- <a class="btn-solid-lg page-scroll" href="#register">REGISTER</a>
              <a class="btn-outline-lg page-scroll" href="#instructor"
                >DISCOVER</a
              > -->
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->

      <!-- Image Slider -->
      <div class="outer-container">
        <div class="slider-container">
          <div class="swiper-container image-slider-1">
            <div class="swiper-wrapper">
              <!-- Slide -->
              <div class="swiper-slide">
                <img
                  class="img-fluid"
                  src="images/details-slide-1.jpg"
                  alt="alternative"
                />
              </div>
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <img
                  class="img-fluid"
                  src="images/details-slide-2.jpg"
                  alt="alternative"
                />
              </div>
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <img
                  class="img-fluid"
                  src="images/details-slide-3.jpg"
                  alt="alternative"
                />
              </div>
              <!-- end of slide -->
            </div>
            <!-- end of swiper-wrapper -->

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- end of add arrows -->
          </div>
          <!-- end of swiper-container -->
        </div>
        <!-- end of slider-container -->
      </div>
      <!-- end of outer-container -->
      <!-- end of image slider -->
    </header>
    <!-- end of header -->
    <!-- end of header -->

    <!-- Registration -->
    <div id="register" class="form-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-container">
              <h2>Register Using The Form</h2>
              <p>
                It's easy to register for the course, just fill out the form and
                click submit. Then you will be registered for one of the best
                SEO training courses in the industry
              </p>
              <ul class="list-unstyled li-space-lg">
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <strong>Your information</strong> is required to complete
                    the registration
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <strong>It's safe with us</strong> and will not be used for
                    marketing
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <strong>You will receive</strong> a confirmation email in
                    less than 24h
                  </div>
                </li>
              </ul>
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <!-- Registration Form -->
            <div class="form-container">
              <form
                id="registrationForm"
                data-toggle="validator"
                data-focus="false"
              >
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control-input"
                    id="rname"
                    name="rname"
                    required
                  />
                  <label class="label-control" for="rname">Complete name</label>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control-input"
                    id="remail"
                    name="remail"
                    required
                  />
                  <label class="label-control" for="remail"
                    >Email address</label
                  >
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control-input"
                    id="rphone"
                    name="rphone"
                    required
                  />
                  <label class="label-control" for="rphone">Phone number</label>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group checkbox">
                  <input
                    type="checkbox"
                    id="rterms"
                    value="Agreed-to-Terms"
                    name="rterms"
                    required
                  />I've read and agree to Corso's written
                  <a href="privacy-policy.html">Privacy Policy</a> and
                  <a href="terms-conditions.html">Terms & Conditions</a>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control-submit-button">
                    REGISTER
                  </button>
                </div>
                <div class="form-message">
                  <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                </div>
              </form>
            </div>
            <!-- end of form-container -->
            <!-- end of registration form -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of form-1 -->
    <!-- end of registration -->

    <!-- Partners -->
    <div class="slider-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="p-small">FEATURED IN</p>

            <!-- Image Slider -->
            <div class="slider-container">
              <div class="swiper-container image-slider-2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-1.png"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-2.png"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-3.png"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-4.png"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-5.png"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-6.png"
                      alt="alternative"
                    />
                  </div>
                </div>
                <!-- end of swiper-wrapper -->
              </div>
              <!-- end of swiper container -->
            </div>
            <!-- end of slider-container -->
            <!-- end of image slider -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of partners -->

    <!-- Instructor -->
    <div id="instructor" class="basic-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="images/instructor.jpg"
              alt="alternative"
            />
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <div class="text-container">
              <h2>I’m Garry Your Trainer</h2>
              <p>
                Hi everybody! I am Garry and I will be your main instructor
                durnig the SEO training course. I have more than 10 years
                experience in SEO and I am very passionate about this field.
                Register for the course and let's meet.
              </p>
              <p>
                Teaching students all about the beste SEO techniques is
                something I love to do as a full-time job
              </p>
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-1 -->
    <!-- end of instructor -->

    <!-- Description -->
    <div id="description" class="basic-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>What Will You Learn In Our SEO Focused Training Course</h2>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled li-space-lg first">
              <li class="media">
                <i class="bullet">1</i>
                <div class="media-body">
                  <h4>Optimizing your site for mobile devices</h4>
                  <p>
                    One of the keys of great SEO is having a mobile friendly
                    website which works smoothly on all devices
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">2</i>
                <div class="media-body">
                  <h4>Understand how users search</h4>
                  <p>
                    It's not enough anymore to find relevant industry keywords
                    and write huge amounts of content
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">3</i>
                <div class="media-body">
                  <h4>Write for humans optimize for engines</h4>
                  <p>
                    Write well structured and understandable articles not just a
                    mix of paragraphs that contain keywords
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <ul class="list-unstyled li-space-lg second">
              <li class="media">
                <i class="bullet">4</i>
                <div class="media-body">
                  <h4>Analyse your existing search traffic</h4>
                  <p>
                    A good action plan comes out of understanding where your
                    current position is and the environment
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">5</i>
                <div class="media-body">
                  <h4>Keep updated with the latest changes</h4>
                  <p>
                    Google changes it's search indexing algorithm twice a year
                    so it's important to stay updated with news
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">6</i>
                <div class="media-body">
                  <h4>Learn the most important ranking factors</h4>
                  <p>
                    Learn which are the most important search engine ranking
                    factors and optimize your website accordnigly
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-2 -->
    <!-- end of description -->

    <!-- Students -->
    <div class="basic-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-container">
              <h2>Who Should Attend The SEO Training Course</h2>
              <p>
                This course is for anyone passionate about the web and
                especially fit for those seeking to improve their online
                presence for company websites and blogs
              </p>
              <a
                class="btn-solid-reg popup-with-move-anim"
                href="#details-lightbox"
                >LIGHTBOX</a
              >
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="images/students.jpg"
              alt="alternative"
            />
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-3 -->
    <!-- end of students -->

    <!-- Details Lightbox -->
    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
      <div class="container">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button">
            ×
          </button>
          <div class="col-lg-8">
            <div class="image-container">
              <img
                class="img-fluid"
                src="images/details-lightbox.jpg"
                alt="alternative"
              />
            </div>
            <!-- end of image-container -->
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>SEO Training Course</h3>
            <hr />
            <h5>For everybody</h5>
            <p>
              The training course is dedicates to anyone passionate about the
              web and in need of improving their current online presence.
            </p>
            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Link building framework</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Know your current position</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Partnering with blogs</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Naming your images</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Creating good sitemaps</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Writing for humans</div>
              </li>
            </ul>
            <a class="btn-solid-reg mfp-close page-scroll" href="#register"
              >SIGN UP</a
            >
            <a class="btn-outline-reg mfp-close as-button" href="#screenshots"
              >BACK</a
            >
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of details lightbox -->

    <!-- Video -->
    <div class="basic-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Course Video Presentation</h2>

            <!-- Video Preview -->
            <div class="image-container">
              <div class="video-wrapper">
                <a
                  class="popup-youtube"
                  href="https://www.youtube.com/watch?v=fLCjQJCekTs"
                  data-effect="fadeIn"
                >
                  <img
                    class="img-fluid"
                    src="images/video.jpg"
                    alt="alternative"
                  />
                  <span class="video-play-button">
                    <span></span>
                  </span>
                </a>
              </div>
              <!-- end of video-wrapper -->
            </div>
            <!-- end of image-container -->
            <!-- end of video preview -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-4 -->
    <!-- end of video -->

    <!-- Takeaways -->
    <div class="cards">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Key Takeaways</h2>
            <p class="p-heading">
              Here are the main topics that will be covered in the SEO training
              course. They cover all the basics of SEO and even some advanced
              techniques that will help you along the way
            </p>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
          <div class="col-lg-12">
            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-atom"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Position Analysis</h4>
                <p>
                  Understand where your website is currently positioned in
                  search engine queries
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-key"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Keyword Planning</h4>
                <p>
                  Find the best relevant keywords that fit your website SEO
                  strategy in the long run
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-newspaper"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Writing Articles</h4>
                <p>
                  How to plan your content strategy and write articles that are
                  optimized for SEO
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-link"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Gathering Backlinks</h4>
                <p>
                  Backlinks are vital for SEO and we'll teach you everything
                  there is to know about them
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="far fa-handshake"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Build Partnerships</h4>
                <p>
                  Partnerships will help you establish your website or blog as
                  an authority in your field
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-chart-bar"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Evaluate Actions</h4>
                <p>
                  Learn how to use the right analytics tools to evaluate your
                  SEO actions and improve them
                </p>
              </div>
            </div>
            <!-- end of card -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of cards -->
    <!-- end of takeaways -->

    <!-- Testimonials -->
    <div class="slider-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>
              Check out our attendees testimonials from previous editions of the
              SEO Training
            </h3>

            <!-- Text Slider -->
            <div class="slider-container">
              <div class="swiper-container text-slider">
                <div class="swiper-wrapper">
                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="image-wrapper">
                      <img
                        class="img-fluid"
                        src="images/testimonial-1.jpg"
                        alt="alternative"
                      />
                    </div>
                    <!-- end of image-wrapper -->
                    <div class="text-wrapper">
                      <div class="testimonial-text">
                        I took the SEO training course about a year ago and I am
                        very happy. It taught me all the basics of search engine
                        optimization and some tricks.
                      </div>
                      <div class="testimonial-author">
                        Jude Thorn - Online Marketer
                      </div>
                    </div>
                    <!-- end of text-wrapper -->
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="image-wrapper">
                      <img
                        class="img-fluid"
                        src="images/testimonial-2.jpg"
                        alt="alternative"
                      />
                    </div>
                    <!-- end of image-wrapper -->
                    <div class="text-wrapper">
                      <div class="testimonial-text">
                        Awesome course for the money. I never thought I could
                        learn so much about search engine optimization in such a
                        short amount of time. Highly recommend.
                      </div>
                      <div class="testimonial-author">
                        Roy Smith - Developer
                      </div>
                    </div>
                    <!-- end of text-wrapper -->
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="image-wrapper">
                      <img
                        class="img-fluid"
                        src="images/testimonial-3.jpg"
                        alt="alternative"
                      />
                    </div>
                    <!-- end of image-wrapper -->
                    <div class="text-wrapper">
                      <div class="testimonial-text">
                        Corso is the best SEO training course in the market. It
                        teaches you all the basics but it also adds value with
                        some advanced tips & tricks the are great.
                      </div>
                      <div class="testimonial-author">
                        Martin Singer - Online Marketer
                      </div>
                    </div>
                    <!-- end of text-wrapper -->
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="image-wrapper">
                      <img
                        class="img-fluid"
                        src="images/testimonial-4.jpg"
                        alt="alternative"
                      />
                    </div>
                    <!-- end of image-wrapper -->
                    <div class="text-wrapper">
                      <div class="testimonial-text">
                        Learning SEO can actually be fun. I attended Corso SEO
                        training and I had a great time with my peer students
                        and the instructors. Highly recommended course.
                      </div>
                      <div class="testimonial-author">
                        Ronda Louis - Business Owner
                      </div>
                    </div>
                    <!-- end of text-wrapper -->
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->
                </div>
                <!-- end of swiper-wrapper -->

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- end of add arrows -->
              </div>
              <!-- end of swiper-container -->
            </div>
            <!-- end of slider-container -->
            <!-- end of text slider -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of slider-2 -->
    <!-- end of testimonials -->

    <!-- Date -->
    <div id="date" class="basic-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-container">
              <h2>December 22nd 2020 at Innovation Hub Space</h2>
              <p>
                Our mission is to help people do better SEO. The team is excited
                to invite you to the next SEO Training Course session which
                undoubtedly will provide you with the necessary skills to
                improve your online presence. Fill out the form to register and
                we'll contact you in less than 24h
              </p>
              <a class="btn-solid-lg page-scroll" href="#register">REGISTER</a>
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-5 -->
    <!-- end of date -->

    <!-- Newsletter -->
    <div class="form-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>
              Stay updated with news by subscribing to our newsletter and our
              social channels
            </h3>

            <!-- Newsletter Form -->
            <form
              id="newsletterForm"
              data-toggle="validator"
              data-focus="false"
            >
              <div class="form-group">
                <input
                  type="email"
                  class="form-control-input"
                  id="nemail"
                  required
                />
                <label class="label-control" for="nemail">Email</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group checkbox">
                <input
                  type="checkbox"
                  id="nterms"
                  value="Agreed-to-Terms"
                  required
                />I've read and agree to Corso's written
                <a href="privacy-policy.html">Privacy Policy</a> and
                <a href="terms-conditions.html">Terms Conditions</a>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control-submit-button">
                  SIGN UP
                </button>
              </div>
              <div class="form-message">
                <div id="nmsgSubmit" class="h3 text-center hidden"></div>
              </div>
            </form>
            <!-- end of newsletter form -->

            <!-- Social Links -->
            <div class="icon-container">
              <span class="fa-stack">
                <a href="#your-link">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="#your-link">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="#your-link">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-pinterest-p fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="#your-link">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="#your-link">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-linkedin-in fa-stack-1x"></i>
                </a>
              </span>
            </div>
            <!-- end of icon-container -->
            <!-- end of social icons -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of form-2 -->
    <!-- end of newsletter -->

    <!-- Contact -->
    <div id="contact" class="form-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-container">
              <h2>Contact Details</h2>
              <p>
                For registration questions please get in touch using the contact
                details below. For any questions use the form.
              </p>
              <h3>Main Office Location</h3>
              <ul class="list-unstyled li-space-lg">
                <li class="media">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="media-body">
                    22 Innovative, San Francisco, CA 94043, US
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-mobile-alt"></i>
                  <div class="media-body">
                    +44 68 554 332, &nbsp;&nbsp;<i class="fas fa-mobile-alt"></i
                    >&nbsp; +44 31 276 112
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-envelope"></i>
                  <div class="media-body">
                    <a class="light-gray" href="mailto:contact@zigo.com"
                      >contact@zigo.com</a
                    >
                    <i class="fas fa-globe"></i
                    ><a class="light-gray" href="#your-link">www.zigo.com</a>
                  </div>
                </li>
              </ul>
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <!-- Contact Form -->
            <form id="contactForm" data-toggle="validator" data-focus="false">
              <div class="form-group">
                <input
                  type="text"
                  class="form-control-input"
                  id="cname"
                  required
                />
                <label class="label-control" for="cname">Name</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control-input"
                  id="cemail"
                  required
                />
                <label class="label-control" for="cemail">Email</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control-textarea"
                  id="cmessage"
                  required
                ></textarea>
                <label class="label-control" for="cmessage">Your message</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group checkbox">
                <input
                  type="checkbox"
                  id="cterms"
                  value="Agreed-to-Terms"
                  required
                />I have read and agree to Corso's stated
                <a href="privacy-policy.html">Privacy Policy</a> and
                <a href="terms-conditions.html">Terms Conditions</a>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control-submit-button">
                  SUBMIT
                </button>
              </div>
              <div class="form-message">
                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
              </div>
            </form>
            <!-- end of contact form -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of form-3 -->
    <!-- end of contact -->

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-col first">
              <h5>About Corso</h5>
              <p class="p-small">
                We're passionate about teaching people how to do better SEO for
                their online presence
              </p>
            </div>
          </div>
          <!-- end of col -->
          <div class="col-md-3">
            <div class="footer-col second">
              <h5>Links</h5>
              <ul class="list-unstyled li-space-lg p-small">
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <a href="terms-conditions.html">Terms & Conditions</a>
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <a href="privacy-policy.html">Privacy Policy</a>
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <a href="article-details.html">Article Details</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- end of col -->
          <div class="col-md-3">
            <div class="footer-col third">
              <h5>Links</h5>
              <ul class="list-unstyled li-space-lg p-small">
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <a href="article-details.html">Article Details</a>
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <a href="terms-conditions.html">Terms & Conditions</a>
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <a href="privacy-policy.html">Privacy Policy</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- end of col -->
          <div class="col-md-3">
            <div class="footer-col fourth">
              <h5>Social Media</h5>
              <p class="p-small">For news & updates follow us</p>
              <a href="#your-link">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#your-link">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#your-link">
                <i class="fab fa-pinterest-p"></i>
              </a>
              <a href="#your-link">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#your-link">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#your-link">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="p-small">
              Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All
              rights reserved
            </p>
          </div>
          <!-- end of col -->
        </div>
        <!-- enf of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
  </body>
</html>
