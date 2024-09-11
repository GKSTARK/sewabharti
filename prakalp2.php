<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Sewa Bharti, Hisar"/>
    <meta name="author" content="Sewa Bharti"/>

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>सत्यनगर</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/gallery.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon1.png">
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
                <div class="col-md-12">
                    <h1 class="white">सत्यनगर</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php">सेवा भारती</a><i class="fa fa-angle-double-right"></i><span>सत्यनगर</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container-large">
                        <img class="img-fluid" src="images/article-details-large.jpg" alt="alternative">
                    </div> <!-- end of image-container-large -->
                    <div class="text-container">
                        <h3>सत्यनगर</h3>
                        <p>Corso also automatically collects and receives certain information from your computer or mobile device, including the activities you perform on our Website, the Platforms, and the Applications, the type of hardware and software you are using (for example, your operating system or browser), and information obtained from cookies. For example, each time you visit the Website or otherwise use the Services, we automatically collect your IP address, browser and device type, access times, the web page from which you came, the regions from which you navigate the web page, and the web page(s) you access (as applicable).</p>
                        <p>When you first register for a Corso account, and when you use the Services, we collect some <a href="#your-link">Personal Information</a> about you such as:</p>
                    </div> <!-- end of text-container-->

                    <div class="text-container last">
                        <h2>Recent Photos</h2>
                    </div> <!-- end of text-container -->
                      <?php
                        include_once "config.php";

                        // Fetch data for the category from the "description" table
                        $category = "सेवा भारती माध्यमिक विद्यालय, सत्यनगर";
                        $query = "SELECT * FROM descp INNER JOIN category ON descp.category_id = category.category_id WHERE category.category_name = '$category'";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            echo '<div class="gallery-container">';
                            echo '<ul class="gallery">';
                            
                            // Loop through each row in the result set
                            while ($row = $result->fetch_assoc()) {
                                // Output HTML for each gallery item
                                echo '<li>';
                                echo '<a id="gal">';
                                // Remove percentage encoding from image source
                                $image_src = str_replace('%', '', $row['desc_image']);
                                $image_path = "../sewabharti/admin/" . $image_src; // Adjust the path accordingly
                                echo '<figure>';
                                echo '<img id="gall" src="' . $image_path . '" alt="' . $row['desc_image'] . '">';
                                echo '<figcaption>' . $row['desc_info'] . '</figcaption>';
                                echo '</figure>';
                                echo '</a>';
                                echo '</li>';
                            }
                            
                            echo '</ul>';
                            echo '</div>';
                        } else {
                            echo 'No data available for ' . $category;
                        }

                        // Close the database connection
                        $conn->close();
                        ?>


                        <div class="pagination">
                                <button class="prev">&laquo; Prev</button>
                                <button class="next">Next &raquo;</button>
                        </div>
                    </div>
                    <a class="btn-solid-reg" href="index.php">BACK</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of Content -->

    <!-- Start Footer -->
    <?php include 'footer.php'?>
    <!-- End Footer -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script src="js/gallery.js"></script> <!-- Gallery CSS -->
</body>
</html>