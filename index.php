<!DOCTYPE html>
<html>
  <head>
    <?php
        require('connect.php');
        if(isset($_POST['name'])){
	
	
	        $name = $_POST['name'];
	        $branch = $_POST['branch'];
	        $year = $_POST['year'];
	        $mobile = $_POST['mobile'];
	        $email = $_POST['email'];
	        $portfolio = $_POST['portfolio'];
	        $section = $_POST['section'];

	
	        $query = mysqli_query($connection,"INSERT INTO registrations (`name`, `branch`, `year`, `mobile`, `email`, `portfolio`, `section`) VALUES ('$name','$branch','$year','$mobile','$email','$portfolio','$section')");
	
	        if($query){
	            echo "Thank you!";
	        }
	        else {
	          echo "Error";
	        }
      }       
	
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ACM-Mjcet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
   
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,700%7COpen+Sans:300,400,700">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    <!-- intro-->
    <section id="intro" class="intro image-background">
      <div class="overlay"></div>
      <div class="content">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              <p class="roboto">Welcome to MJCET's ACM</p>
              <h1>We are<br /><span class="bold">ACM</span></h1>
              <p class="roboto">Proceed<a href="http://bootstrapious.com" class="external">acm.mjcet.org</a></p>
            </div>
          </div>
        </div>
      </div><a href="#about" class="icon faa-float animated scroll-to"><i class="fa fa-angle-double-down"></i></a>
    </section>
    <!-- navbar-->
    <header class="header">
      <div class="sticky-wrapper">
        <div role="navigation" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#intro" class="navbar-brand scroll-to"><img src="img/acm_logo1.gif" width="138" height="48" alt="logo"></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About </a></li>
                <li><a href="#services">Events</a></li>
                <li><a href="#portfolio">Snapshots</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#register" data-toggle="modal" data-target="#register">Register</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /.navbar-->
 
   
    
    <!-- about us-->
    <section id="about">
      <div class="container clearfix">
        <div class="row margin-bottom">
          <div class="col-md-4 margin-bottom"> 
            <h2 class="heading">Welcome to MJCET's ACM Student Chapter</h2>
            
            <p>The Association for Computing Machinery is a U.S.-based international learned society for computing. It was founded in 1947 and is the world's largest and most prestigious scientific and educational computing society. ACM is widely recognized as the premier membership organization for computing professionals, delivering resources that advance computing as a science and a profession; enable professional development; and promote policies and research that benefit society.  </p>
            <div class="row">
              <div class="col-sm-4">
                <ul>
                  <li>Lectures and Workshops</li>
                  <li>Student Presentations</li>
                  <li>Exciting Events</li>
                </ul>
              </div>
              <div class="col-sm-4">
                <ul>
                  <li>Competitions</li>
                  <li>Seminars</li>
                  <li>And so much more!</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-8 margin-bottom">
           <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" style="width: 480px height:240px;">
      
        <div class="item active">
          <img src="img/friends.jpg">
           <div class="carousel-caption">
            <h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <img src="http://placehold.it/760x400/999999/cccccc">
           <div class="carousel-caption">
            <h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="http://placehold.it/760x400/dddddd/333333">
           <div class="carousel-caption">
            <h4><a href="#">tempor invidunt ut labore et dolore</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="http://placehold.it/760x400/999999/cccccc">
           <div class="carousel-caption">
            <h4><a href="#">magna aliquyam erat, sed diam voluptua</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->

        <div class="item">
          <img src="http://placehold.it/760x400/dddddd/333333">
           <div class="carousel-caption">
            <h4><a href="#">tempor invidunt ut labore et dolore magna aliquyam erat</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->
                
      </div><!-- End Carousel Inner -->


    <ul class="list-group col-sm-4">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>Lorem ipsum dolor sit amet consetetur sadipscing</h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>consetetur sadipscing elitr, sed diam nonumy eirmod</h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>tempor invidunt ut labore et dolore</h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>magna aliquyam erat, sed diam voluptua</h4></li>
      <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>tempor invidunt ut labore et dolore magna aliquyam erat</h4></li>
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
</div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h5><i class="fa fa-arrows"></i>Discover Your Potential</h5>
            <p>Are you passionate about technology? Do you want to make a difference? Are you looking for employment? Do you enjoy free food? If you answered yes to any of these questions, ACM@MJCET could be the right organization for you.</p>
          </div>
          <div class="col-sm-4">
            <h5> <i class="fa fa-image"></i>Who are we?</h5>
            <p>ACM@MJCET is MJCET's student chapter of the Association for Computing Machinery, the leading premier organization for computing professionals. We are dedicated to promoting interdisciplinary computing and enabling professional development on campus.</p>
          </div>
        </div>

      
    </section>
    <!-- services-->
  
    <!-- portfolio-->
    <section id="portfolio" class="no-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">SNAPSHOTS</h2>
            <p class="text-center">Check these out!</p>
          </div>
        </div>
      </div>
  
<div class="container">
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
        <li data-target="#carousel" data-slide-to="4"></li>
        <li data-target="#carousel" data-slide-to="5"></li>
        <li data-target="#carousel" data-slide-to="6"></li>
        <li data-target="#carousel" data-slide-to="7"></li>
        <li data-target="#carousel" data-slide-to="8"></li>
        <li data-target="#carousel" data-slide-to="9"></li>
        <li data-target="#carousel" data-slide-to="10"></li>
        <li data-target="#carousel" data-slide-to="11"></li>
        <li data-target="#carousel" data-slide-to="12"></li>
        <li data-target="#carousel" data-slide-to="13"></li>
        <li data-target="#carousel" data-slide-to="14"></li>
        <li data-target="#carousel" data-slide-to="15"></li>
        <li data-target="#carousel" data-slide-to="16"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner carousel-zoom">
        <div class="active item"><img class="img-responsive" src="img/1.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <h2>Hackathon@ACM</h2>
            <p>Hackathon conducted by ACM</p>
          </div>
        </div>

        <div class="item"><img class="img-responsive" src="img/2.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <h2>Envisage</h2>
            <p>Envisage competition conducted by ACM</p>
          </div>
        </div>

        <div class="item"><img class="img-responsive" src="img/3.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <h2>Hackathon</h2>
            <p>Hackathon conducted by ACM</p>
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="img/4.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <h2>Envisage 2017-18</h2>
            <p>Participants of the envisage competition!</p>
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="img/5.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <h2>Posters</h2>
            <p>Some posters crafted by ACM Members for awareness programs</p>
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="img/6.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <h2>Anti-ragging campaign</h2>
            <p>The Anti-ragging campaign organised by the ACM Team of 2015-16</p>
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="img/7.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <h2>ACM TEAM 2016-17</h2>
            <p>All the members of ACM 2016-17 combined!</p>
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="img/8.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <h2>Guest Lecture</h2>
            <p>Guest Lecture by Prof P.V. Rama Sharma on MATLAB</p>
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="img/9.jpg" style="width: 100%";>
          <div class="carousel-caption">
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="img/10.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <p>IT Faculty with the guest lecturer/p>
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="img/12.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <h2>Workshop on Soft Computing</h2>
            <p>Two-day National Level workshop conducted in 2012</p>
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="img/13.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <p>One of the meetings of ACM for discussions and planning of events!</p>
          </div>
      </div>
      </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#carousel" data-slide="prev">‹</a>
    <a class="carousel-control right" href="#carousel" data-slide="next">›</a>
</div>
</div>

    </section>
    <!-- text-->
    <section id="text" class="section-gray">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">JOIN US!</h2>
            <div class="row">
              <div class="col-sm-6">
                <p>We guarantee you that when you join ACM you will start loving MJCET even more , the amazing events we host and the social exposure a student obtains after being associated with this enlightening experience is overwhelming to some! </p>
                <p>Potential Employers like Infosys , Wipro , Capgemini , Accenture which come to MJCET for Campus Placements always seek a special X-factor and a potential from a student . We at @ACM make it easier and a realistic task for you to acheive that! With Competitions which involve precise technical and practical knowledge with an exhilerating experience you will be all ready and experienced until the Campus placements take place , and hey you could always mention this in your resume.</p>
              </div>
              <div class="col-sm-6">
                <p>As a member of the ACM Joins and when he/she reaches his 2nd Year , they will be eligible to apply for posts. Now what are posts? The ACM Team contains positions of responsibility from Chairman , General Secretary ,Publicity Head, Marketing Head , Technical Head , Webmaster , Newsletter head and many more!</p>
                <p>When you are selected by our recruitment team YOU are in charge and hold the responsibilities like management of events , recruitment of members , publicity of the events (this one is fun , you get to bunk some classes!)  , and eventually when you reach the Final Year , you can apply for much more attractive positions like the Chaairman , Vice Chairman and so on , based on your past contributions to ACM! There's a ton of opportunities to learn here!  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- team-->
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">Our team</h2>
            <div class="row"></div>
            <!-- team-member-->
            <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/chair.jpg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Shaikh Khaussain</a></h3>
                <p class="role">Chair</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>The Chairman of ACM for the year 2017-18</p>
                </div>
              </div>
            </div>




            <!-- team-member col end-->
            <!-- team-member-->
            <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/vicechair.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Mohammad Abdul Kamran</a></h3>
                <p class="role">Vice Chair</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Our Vice Chair!</p>
                </div>
              </div>
            </div>
            <!-- team-member col end-->
            <!-- team-member-->
            <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/awaiting.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Amtul Shafia</a></h3>
                <p class="role">Associate Sectretary</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
             
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  
                </div>
              </div>
            </div>
            <!-- team-member col end-->
            <!-- team-member-->
            <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/man.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Asgar Mirza</a></h3>
                <p class="role">Secretary</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
              </div>
            </div>

                 <div class="col-md-3 col-sm-6">
                <div class="team-member">
                <div class="image"><a href="#"><img src="img/man.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Mohammad Anas Ansari</a></h3>
                <p class="role">Treasurer</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
              </div>
            </div>

                 <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/mujju.jpeg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Syed Mujtaba</a></h3>
                <p class="role">Joint Treasurer</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>This guy is responsible for handling some serious finances!</p>
                </div>
              </div>
            </div>

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/man.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Khizir</a></h3>
                <p class="role">Marketing Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
              </div>
            </div>

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/hussain.jpeg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Hussain Sadullah</a></h3>
                <p class="role">ACM Care Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> 
                </div>
              </div>
            </div>
</div>
 

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/awaiting.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Fariya Banu</a></h3>
                <p class="role">Newsletter Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
              </div>
            </div>
            

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/abdul.jpg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Abdul Aziz</a></h3>
                <p class="role">Technical Team Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
              </div>
            </div>

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/Vaishnavi.jpeg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Valpureddy Vaishnavi</a></h3>
                <p class="role">Publicity Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>The publicity head for ACM</p>
                </div>
              </div>
            </div>

  <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/awaiting.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Bushra Sehar</a></h3>
                <p class="role">Recruitment Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Our recruitment head, keep in touch with her for details regarding the recruitments!</p>
                </div>
              </div>
            </div>

              <div class="row justify-content-center">
              <div class="col-2">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/rayyan.jpeg" alt="rayyan" class="img-responsive"></a></div>
                <h3><a href="#">Rayyan Shaji</a></h3>
                <p class="role">Web Master</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Contact me on guidance if you want to learn Web Development!</p>
                </div>
              </div>
            </div>
</div>


            
            <!-- team-member col end-->
          </div>
        </div>
      </div>
    </section>
    <!-- map-->
   
    <section id="contact">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">CONTACT US!</h2>
            <div class="row">
              <div class="col-md-6">
                <form id="contact-form" method="post" action="contact.php" class="contact-form form">
                  <div class="controls">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name">Your firstname *</label>
                          <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="surname">Your lastname *</label>
                          <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Your email *</label>
                      <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="message">Your message for us *</label>
                      <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                    </div>
                    <div class="text-center">
                      <input type="submit" value="Send message" class="btn btn-primary btn-block">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-6">
                <p>Let us hear from you! </p>
               
                <p class="social"><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="gplus"><i class="fa fa-google-plus"></i></a><a href="#" title="" class="instagram"><i class="fa fa-instagram"></i></a><a href="#" title="" class="email"><i class="fa fa-envelope"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row copyright">
          <div class="col-md-6">
            <p class="roboto">&copy;ACM@MJCET</p>
          </div>
          <div class="col-md-6">
            <p class="credit roboto"><a href="https://bootstrapious.com/tutorials">mjcet.acm.com</a></p>
            <!-- Please do not remove the backlink to us unless you support the development at https://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :) -->
          </div>
        </div>
      </div>
    </footer>
   <!-- /.modal-->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Registration</h4>
            </div>
           <div class="modal-body">
           <div class="row main">
           <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h4 class="title">Enter your details</h4>
                    <hr/>
                  </div>
                  </div>
              

        <div class="main-login main-center">
        <form class="form-horizontal" role="form" method="POST" action="index.php">
            
            <div class="form-group">
            <label  class="col-sm-2 control-label" for="name">Name</label>
             <div class="col-sm-9">
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Your Full Name"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="email">Email</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="Your Email"/>
                </div>
              </div>
           </div>

            <div class="form-group">
              <label  class="col-sm-2 control-label" for="mobile">Mobile</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Your Mobile"/>
                </div>
              </div>
          </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="branch">Branch</label>
              <div class="col-sm-9">
    
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book" aria-hidden="true"></i></span>
                  <select class="form-control" name="branch" id="branch"  placeholder="Please select your Course">
                                    <option>-select-</option>
                                    <option>IT</option>
                                    <option>CSE</option>
                                    <option>EEE</option>
                                    <option>ECE</option>
                    <option>MECH</option>
                    <option>CIVIL</option>
                    <option>IE</option>
                    <option>PROD</option>
                                    </select>
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <label class="col-sm-2 control-label" for="country">Section</label>
            <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></span>
                  <select class="form-control" name="section" id="section"  placeholder="Section">
                                    <option>-Select-</option>
                                    <option>A</option>
                                    <option>B</option>
                         </select>
                </div>
              </div>
               </div> 





            <div class="form-group">
              <label class="col-sm-2 control-label" for="country" >Year</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></span>
                  <select class="form-control" name="year" id="year"  placeholder="Please select your Year">
                                    <option>-Select-</option>
                                    <option>1st Year</option>
                                    <option>2nd Year</option>
                                    <option>3rd Year</option>
                                    <option>4th Year</option>
                                    </select>
                </div>
              </div>
          </div>
          
           
            <div class="form-group">
            <label class="col-sm-2 control-label" for="country">Portfolio</label>
            <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pawn" aria-hidden="true"></i></span>
                  <select class="form-control" name="portfolio" id="portfolio"  placeholder="Section">
                                    <option>-Select-</option>
                                    <option>Web & Design Team</option>
                                    <option>Publicity Team</option>
                                    <option>Events Team</option>
                                    <option>Creativity Team</option>
                                    <option>Registration Team</option>
                                    <option>Logistics Team</option>
                                    <option>Photography Team</option>
                         </select>
                </div>
              </div>
               </div>       
           
              <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block login-button" >Submit</button>
             </form>

   
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               
                </button>
            </div>
        </div>
    </div>


    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;amp;sensor=false"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/front.js"></script>
    <script src="js/carousel.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>