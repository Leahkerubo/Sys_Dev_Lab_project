<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Komarock</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
  
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#services">School schedule</a></li>
                          <li class="scroll-to-section"><a href="#courses">School achievements</a></li>
                          <!--<li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="our-services.html">Our Services</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                              </ul>
                          </li>--> 
                          <li class="scroll-to-section"><a href="#testimonials">Rules and regulations</a></li> 
                          <li>
                            @if (Route::has('login'))
                                    
                                        @auth
                                            
                                                <x-app-layout>

                                                </x-app-layout> 
                                            
                                        @else
                                            <li> <a href="{{ route('login') }}" >Log in</a> </li>

                                            @if (Route::has('register'))
                                                <li> <a href="{{ route('register') }}" >Register</a> </li>
                                            @endif
                                        @endauth
                                    
                                @endif
                          </li>

                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      
          <div class="header-text">
            <h6 >Welcome to our school</h6>
            <p >Komarock school is the best choice! </p>
            <p>It is located at Komarock Estate, Rocks stage next to Lakewood preparatory.</p>
            <p>The school boasts of a capacity of over 3000 students and 50 teachers meaning learning occurs very efficiently.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
            
          </div>
        
        <!--<div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/banner-right-image.png" alt="">
          </div>
        </div>-->
      
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    <div class="container">
       @include('user.tableschedule')
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
    </div>
  </section>

  

  <section class="testimonials" id="testimonials">
    <div class="container">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec et, egestas volutpat suscipit elit eget morbi velit. Euismod dolor diam ut ullamcorper commodo. Gravida volutpat sit turpis donec purus ipsum massa augue. Id pretium eros duis eget lectus sed.
Tempus ac mauris sit cras ac, mattis. Mattis gravida pellentesque lectus suspendisse ultrices erat fermentum lacus neque. Viverra sed turpis duis donec egestas neque sed. Velit aenean scelerisque tincidunt et porttitor netus non. Ultrices aliquam in id accumsan morbi interdum interdum. Eros est, aliquam dolor, congue placerat nisl mattis nunc. Nisl auctor nam egestas vestibulum.</p>
    </div>
  </section>

  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>