<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- SEO Meta Tags -->
    <meta name="description" content="Sewa Bharti, Hisar"/>
    <meta name="author" content="Sewa Bharti"/>

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
    <title>सेवा भारती</title>

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
    <link rel="icon" href="images/favicon1.png" />

    <!-- Icon Counts  -->
    <link href="css/count.css" rel="stylesheet" />
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

    <!-- start of navbar -->
    <?php include 'navbar.php'; ?>
    <!-- end of navbar -->

    <!-- Header -->
    <header id="header" class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-container">
              <h1>सेवा भारती हिसार</h1>
              <p class="p-large">
               देश हमें देता है सब कुछ, हम भी तो कुछ देना सीखे
              </p>
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
            <?php
              include_once "config.php";

              // Fetch data for the category from the "description" table
              $category = "Slider";
              $query = "SELECT * FROM descp INNER JOIN category ON descp.category_id = category.category_id WHERE category.category_name = '$category'";
              $result = $conn->query($query);

              if ($result->num_rows > 0) {
                  // Loop through each row in the result set
                  while ($row = $result->fetch_assoc()) {
                      // Output HTML for each gallery item
                      echo '<div class="swiper-slide">';
                      $image_src = str_replace('%', '', $row['desc_image']);
                      $image_path = "../sewabharti/admin/" . $image_src; // Adjust the path accordingly
                      echo '<img class="img-fluid" src="' . $image_path . '" alt="' . $row['desc_info'] . '">';
                      echo '</div>';
                  }
              } else {
                  echo '<div class="swiper-slide">';
                  echo '<img class="img-fluid" src="images/details-slide-1.jpg" alt="alternative">';
                  echo '</div>';
              }

              // Close the database connection
              $conn->close();
              ?>
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

    <!-- Info -->
    <div id="register" class="form-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-container">
              <h2>सेवा भारती हिसार शाखा, हरियाणा प्रदेश (पंजी.) </h2>
              <p>
              हरियाणा प्रदेश में 350 सेवा कार्य तथा पुरे देश में लगभग 1,60,000 सेवा कार्य निरंतर गतिमान। 
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
    <!-- end of form-1 -->
    <!-- end of Info -->

    <!-- Leader -->
    <div id="instructor" class="basic-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">

          <img
              class="img-fluid"
              src="images/front.jpg"
              alt="alternative"
            />
          </div>
          <!-- end of col -->
          <div class="col-lg-7">
            <div class="text-container">
              <h2>डॉo सुदर्शन लाल सोनी (नगर अध्यक्ष)</h2>
              <p>
              यह एक गैर-सरकारी संगठन है जो कि भारतीय समाज के आर्थिक रूप से कमजोर वर्गों में सामाजिक आर्थिक रूप से हाशिए वाले, जनजातीय और स्वदेशी समुदायों पर विशेष ध्यान केंद्रित करता है। यह हजारों केंद्रों के अपने देशव्यापी नेटवर्क के माध्यम से मुफ्त चिकित्सा सहायता, शिक्षा, साथ हीं स्वाबलंबन के लिए व्यावसायिक प्रशिक्षण जैसे कई कल्याणकारी और सामाजिक सेवा कार्यक्रमों को शुरू करके शहरी झोपड़पट्टियों और पुनर्वास कॉलोनियों के बीच भी काम करता है।
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
    <!-- end of Leader -->

    <!-- Uddeshya -->
    <div id="description" class="basic-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>उद्देश्य</h2>
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
                  <h4>सेवा</h4>
                  <p>
                  शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">2</i>
                <div class="media-body">
                  <h4>सम्पर्क</h4>
                  <p>
                  शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">3</i>
                <div class="media-body">
                  <h4>संस्कार</h4>
                  <p>
                  शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">4</i>
                <div class="media-body">
                  <h4>समरसता</h4>
                  <p>
                  शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <ul class="list-unstyled li-space-lg second">
              <li class="media">
                <i class="bullet">5</i>
                <div class="media-body">
                  <h4>सहयोग</h4>
                  <p>
                  शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">6</i>
                <div class="media-body">
                  <h4>समृद्धि</h4>
                  <p>
                  शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">7</i>
                <div class="media-body">
                  <h4>समर्पण</h4>
                  <p>
                  शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">8</i>
                <div class="media-body">
                  <h4>स्वावलम्बन</h4>
                  <p>
                  शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
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
    <!-- end of Uddeshya -->

    <!-- Aayam -->
    <div id="aayam" class="cards">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>आयाम </h2>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
          <div class="col-lg-3">
            <!-- Card -->
            <div class="card">
              <div class="card-image">
              <a href="shiksha.php"><i class="fas fa-building"></a></i>
              </div>
              <div class="card-body">
                <h4 class="card-title"><a href="shiksha.php">शिक्षा</a></h4>
                <p>
                शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                </p>
              </div>
            </div>
          </div>
            <!-- end of card -->
            <!-- Card -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-image">
                <a href="swablamban.php"><i class="fas fa-newspaper"></a></i>
              </div>
              <div class="card-body">
                <h4 class="card-title"><a href="swablamban.php">स्वाबलंबन </a></h4>
                <p>
                शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                </p>
              </div>
            </div>
          </div>
            <!-- end of card -->

            <!-- Card -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-image">
                <a href="swasthya.php"><i class="fas fa-user-md"></a></i>
              </div>
              <div class="card-body">
                <h4 class="card-title"><a href="swasthya.php">स्वास्थ्य</a></h4>
                <p>
                शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
                </p>
              </div>
            </div>
          </div>
            <!-- end of card -->

            <!-- Card -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-image">
                <a href="samajik.php"><i class="fas fa-users"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title"><a href="samajik.php">सामाजिक</a></h4>
                <p>
                शिक्षा, संस्कार, सामाजिक जागरूकता, स्वरोजगार धर्म-परिवर्तन से वनवासियों की रक्षा आदि ।
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
    <!-- end of Aayam -->

    <!-- Description -->
    <div id="date" class="basic-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-container">
              <h2>सेवा भारती</h2>
              <p>
              यह एक गैर-सरकारी संगठन है जो कि भारतीय समाज के आर्थिक रूप से कमजोर वर्गों में सामाजिक आर्थिक रूप से हाशिए वाले, जनजातीय और स्वदेशी समुदायों पर विशेष ध्यान केंद्रित करता है। यह हजारों केंद्रों के अपने देशव्यापी नेटवर्क के माध्यम से मुफ्त चिकित्सा सहायता, शिक्षा, साथ हीं स्वाबलंबन के लिए व्यावसायिक प्रशिक्षण जैसे कई कल्याणकारी और सामाजिक सेवा कार्यक्रमों को शुरू करके शहरी झोपड़पट्टियों और पुनर्वास कॉलोनियों के बीच भी काम करता है। यह सैंकड़ों जिलों में साल भर लाखों गतिविधियों को चलाता है। आपदा (बाढ़, भुकम्प, आदि) के समय बढ़-चढ़कर समाज हर हिस्से में सहायता के लिए बिना भेद-भाव तत्पर रहती है।
              </p>
              <a class="btn-solid-lg page-scroll" href="donate.php">DONATE</a>
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
    <!-- end of Description -->

    <!-- Counts -->
    <div class="form-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>
            हमारी उपलब्धियाँ
            </h2>

            <!-- start count stats -->
            <div id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
              <div class="container">
                <div class="row">

                  <div class="col-lg-3 stats">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <div class="counting" data-count="900000">0</div>
                    <h5>Lines of code</h5>
                  </div>

                  <div class="col-lg-3 stats">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <div class="counting" data-count="280">0</div>
                    <h5>Lines of code</h5>
                  </div>

                  <div class="col-lg-3 stats">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <div class="counting" data-count="75">0</div>
                    <h5>Lines of code</h5>
                  </div>

                  <div class="col-lg-3 stats">
                    <i class="fa fa-coffee" aria-hidden="true"></i>
                    <div class="counting" data-count="999">0</div>
                    <h5>Lines of code</h5>
                  </div>


                </div>
                <!-- end row -->
              </div>
              <!-- end container -->

            </section>

            <!-- end cont stats -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of form-2 -->
    <!-- end of Counts -->

    <!-- Contact -->
    <div id="contact" class="form-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-container">
              <h2>Contact Details</h2>
              <!-- <p>
                For donation questions please get in touch using the contact
                details below. For any questions use the form.
              </p> -->
              <!-- <h3>Main Office Location</h3> -->
              <ul class="list-unstyled li-space-lg">
                <li class="media">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="media-body">
                    Guru Jambheshwar University of Science & Technology, Hisar
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-mobile-alt"></i>
                  <div class="media-body">
                    +91 9876543210 &nbsp;&nbsp;
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-envelope"></i>
                  <div class="media-body">
                    <a class="light-gray" href="mailto:gk2004mannu@gmail.com"
                      >contact@gmail.com</a
                    >
                  </div>
                </li>
              </ul>
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of form-3 -->
    <!-- end of contact -->

    <!-- Start Footer -->
    <?php include 'footer.php'?>
    <!-- End Footer -->

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
    <script src="js/count.js"></script>
    <!-- Icon Counting -->
  </body>
</html>
