<!DOCTYPE html>
<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once('includes/class-query.php');
    if(!empty($_GET)){
        if(!empty ($_GET['p'])){
        $post= $_GET['p'];
        }
        
        
    }
    if(empty($post)){
      $posts_array = $query->all_posts();
      ?>
      
      <html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>cityRepair</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="plugins/animate.css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <section class="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo/logo3.jpg" class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="#owl-hero" class="page-scroll">ΑΡΧΙΚΗ</a></li>
                            <li><a href="#portfolio" class="page-scroll">ΑΝΑΚΟΙΝΩΣΕΙΣ</a></li>
                            <li><a href="#contact" class="page-scroll">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div id="owl-hero" class="owl-carousel owl-theme">
            
            
            <div class="item" style="background-image: url(img/sliders/city2.jpg)">
                <div class="caption">
                    
                    <h1>Δωσε σημασια στην<span>Πολη σου</span></h1>
                    
                </div>
            </div>
            <div class="item" style="background-image: url(img/sliders/city1.jpg)">
                <div class="caption">
                    
                    <h1>Φροντισε<span>-Ενημερωσε</span></h1>
                    
                </div>
        </div>
    </section>

    <!-- Welcome
	============================================= -->
    <section id="welcome">
        <div class="container">
            <h2>Welcome To <span>City Of Athens</span></h2>
            <hr class="sep">
            <p>Μην αφήνεις την πόλη σου αβοήθητη!</p>
            <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="img/welcome/logo4.jpg" alt="logo">
        </div>
    </section>

    <!-- Services
	============================================= -->
    

    <!-- Portfolio
	============================================= -->
    <section id="portfolio">
        <div class="container-fluid">
            <h2>ΑΝΑΚΟΙΝΩΣΕΙΣ</h2>
            <h2>Τα τελευταια νεα- προβληματα της πολης</h2>
            <hr class="sep">
            
            <div class="row">
             <?php $reversed = array_reverse($posts_array); ?>  
                 <?php foreach($reversed as $post):?>
                
              <div class="col-xs-6 col-sm-8 wow fadeInUp" data-wow-delay=".3s">
                    <a class="portfolio-box" href="?p=<?php echo $post->post_ID;?>" >
                        <img src="admin/uploads/<?php echo $post->post_image; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php echo $post->post_category; ?>
                                </div>
                                <div class="project-name">
                                  <?php echo $post->post_title; ?>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                
             <?php endforeach; ?>
           
        </div>
        </div> 
    </section>
    <!-- Work Process
	============================================= col-xs-6 col-sm-8-->
   
    
    <!-- Some Fune Facts
	============================================= -->
    
    <!-- Testimonials
	============================================= -->
    
    <!-- Contact Us
	============================================= -->
    <section id="contact">
        <div class="container">
            <h2>ΕΠΙΚΟΙΝΩΝΙΑ</h2>
            <hr class="sep">
            <p>Επικοινωνήστε μαζί μας</p>
            <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                <form method="post" action="sendmail.php">
                    <div class="form-group">
                        <input type="text" name="Name" class="form-control" id="Name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Surname" class="form-control" id="Surname" placeholder="Surname">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Telephone" class="form-control" id="Telephone" placeholder="Telephone">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Email" class="form-control" id="Email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea name="Message" class="form-control" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn-block">Send</button>
                    
                </form>
            </div>
        </div>
    </section>
    <!-- Google Map
	============================================= -->
    
    <!-- Footer
	============================================= -->
    <footer>
        <div class="container">
            <h1>City of Athens</h1>
            <div class="social">
                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
            </div>
            
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- JS PLUGINS -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/countTo/jquery.countTo.js"></script>
    <script src="plugins/inview/jquery.inview.min.js"></script>
    <script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="plugins/WOW/dist/wow.min.js"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</body>

</html>

 <?php }elseif(!empty($post)){
 $posts_array = $query->post($post); ?>

  <html lang="en">

<head>
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    
 


    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>cityRepair</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="plugins/animate.css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <section class="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo/logo3.jpg" class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="#owl-hero" class="page-scroll">ΑΡΧΙΚΗ</a></li>
                            <li><a href="#portfolio" class="page-scroll">ΑΝΑΚΟΙΝΩΣΕΙΣ</a></li>
                            <li><a href="#contact" class="page-scroll">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
       
            
            
           
    </section>

    <!-- Welcome
	============================================= -->
    

    <!-- Services
	============================================= -->
     
    <!-- Portfolio
	============================================= -->
    <?php foreach($posts_array as $post):?>
     <section id="portfolio">
        <div class="container-fluid">
             
            <h2> Τιτλος: <?php echo $post->post_title; ?></h2>
            
            <div id="left">
            <p><b> Κατηγορία Προβλήματος:</b> <?php echo $post->post_category; ?> </p>
          
            
            <p><b> Ημερομηνια:</b><?php echo $post->post_date; ?></p>
           
            <p><b> Περιγραφη: </b><?php echo $post->post_content; ?></p>
          
            <img src="admin/uploads/<?php echo $post->post_image; ?>" class="img-responsive" alt="">
             
        </div>
            <br><br><br><br><br><br><br><br>
          <div  id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: <?php echo $post->post_lat; ?>, lng: <?php echo $post->post_lng; ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWMLVNVgNYBnyl_PHQo29x2p1JuudZbBA &callback=initMap">
    </script>

    </div>
     </section>
   
                
     <?php endforeach; ?>  
    
   
            
           
        
   
    <!-- Work Process
	============================================= col-xs-6 col-sm-8-->
   
    
    <!-- Some Fune Facts
	============================================= -->
    
    <!-- Testimonials
	============================================= -->
    
    <!-- Contact Us
	============================================= -->
    
    <!-- Google Map
	============================================= -->
    
    <!-- Footer
	============================================= -->
    <footer>
        <div class="container">
            <h1>City of Athens</h1>
            <div class="social">
                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
            </div>
            
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- JS PLUGINS -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/countTo/jquery.countTo.js"></script>
    <script src="plugins/inview/jquery.inview.min.js"></script>
    <script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="plugins/WOW/dist/wow.min.js"></script>
    
   
</body>

</html>
 <?php } ?> 
