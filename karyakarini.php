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
    <title>कार्यकारिणी</title>

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
    <link href="css/table.css" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon1.png" />
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
    <header id="header" class="ex-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="white">कार्यकारिणी</h1>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </header>
    <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-12"> -->
            <div class="breadcrumbs">
              <a href="index.php">सेवा भारती</a
              ><i class="fa fa-angle-double-right"></i
              ><span>कार्यकारिणी - जिला हिसार</span>
            </div>
            <!-- end of breadcrumbs -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <!-- Table Content -->
    <div class="ex-basic-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <main class="table" id="customers_table">
      <section class="table__header">
        <h1>कार्यकारिणी - जिला हिसार</h1>
      </section>
      <section class="table__body">
        <table>
          <thead>
            <tr>
              <th>क्र.</th>
              <th>नाम</th>
              <th>कार्यकारिणी</th>
              <th>दायित्व</th>
              <th>सम्पर्क सूत्र</th>
            </tr>
          </thead>
          <?php
      include_once "config.php";
      $sql="SELECT * from karyakarini_data kd, karyakarini k, dayitv d WHERE k.karyakarini_id=kd.karyakarini_id AND kd.dayitv_id=d.dayitv_id ORDER BY kd.karyakarini_id ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?></td>
      <td><?=$row["karyakarini_name"]?></td>
      <td><?=$row["dayitv_name"]?></td>      
      <td><?=$row["mobile"]?></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
        </table>
      </section>
    </main>
          </div>
        </div>
        <a class="btn-solid-reg" href="index.php">BACK</a>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of ex-basic -->
    <!-- end of Table content -->

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
  </body>
</html>
