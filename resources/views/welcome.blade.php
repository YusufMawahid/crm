<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Blog Page | Raja Ampat</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <!-- <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png"> -->
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
  </header>
  <!-- END HEADER -->

  <!-- START MAIN -->

    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START CONTENT -->
      <section id="content">

        <!--start container-->
        <div class="container">
          <div class="section">
            <!-- start blog list -->
            <div id="blog-posts" class="row">
                <div class="blog-sizer"></div>

                <div class="blog">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="info" target="_blank()"><img src="images/img2.jpg" alt="blog-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                            </li>                            
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">
                            <p class="row">
                              <span class="left"><a href="">Web Design</a></span>
                              <span class="right">
                            <?php 
                            $date = date("d - M - Y"); ?> {{$date}}</span>
                            </p>
                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a>
                            </h4>
                            <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="blog">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#"><img src="images/img4.jpg" alt="blog-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                            </li>                            
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">
                            <p class="row">
                              <span class="left"><a href="">Web Design</a></span>
                              <span class="right">
                            <?php 
                            $date = date("d - M - Y"); ?> {{$date}}</span>
                            </p>
                            

                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a>
                            </h4>
                            <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="blog">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#"><img src="images/img3.jpg" alt="blog-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                            </li>                            
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">
                            <p class="row">
                              <span class="left"><a href="">Web Design</a></span>
                              <span class="right">
                            <?php 
                            $date = date("d - M - Y"); ?> {{$date}}</span>
                            </p>
                            

                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a>
                            </h4>
                            <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="blog">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#"><img src="images/img2.jpg" alt="blog-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                            </li>                            
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">
                            <p class="row">
                              <span class="left"><a href="">Web Design</a></span>
                              <span class="right">
                            <?php 
                            $date = date("d - M - Y"); ?> {{$date}}</span>
                            </p>
                            

                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a>
                            </h4>
                            <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="blog">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#"><img src="images/img4.jpg" alt="blog-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                            </li>                            
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">
                            <p class="row">
                              <span class="left"><a href="">Web Design</a></span>
                              <span class="right">
                            <?php 
                            $date = date("d - M - Y"); ?> {{$date}}</span>
                            </p>
                            

                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a>
                            </h4>
                            <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="blog">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#"><img src="images/img3.jpg" alt="blog-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                            </li>                            
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">
                            <p class="row">
                              <span class="left"><a href="">Web Design</a></span>
                              <span class="right">
                            <?php 
                            $date = date("d - M - Y"); ?> {{$date}}</span>
                            </p>
                            

                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a>
                            </h4>
                            <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="blog">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#"><img src="images/img2.jpg" alt="blog-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                            </li>                            
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">
                            <p class="row">
                              <span class="left"><a href="">Web Design</a></span>
                              <span class="right">
                            <?php 
                            $date = date("d - M - Y"); ?> {{$date}}</span>
                            </p>
                            

                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a>
                            </h4>
                            <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="blog">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#"><img src="images/img4.jpg" alt="blog-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                            </li>                            
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">
                            <p class="row">
                              <span class="left"><a href="">Web Design</a></span>
                              <span class="right">
                            <?php 
                            $date = date("d - M - Y"); ?> {{$date}}</span>
                            </p>
                            

                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a>
                            </h4>
                            <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

                <div class="blog">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <a href="#"><img src="images/img3.jpg" alt="blog-img">
                            </a>
                        </div>
                        <ul class="card-action-buttons">
                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                            </li>                            
                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                            </li>
                        </ul>
                        <div class="card-content">
                            <p class="row">
                              <span class="left"><a href="">Web Design</a></span>
                              <span class="right">
                            <?php 
                            $date = date("d - M - Y"); ?> {{$date}}</span>
                            </p>
                            

                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a>
                            </h4>
                            <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                            <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/ end blog list -->
          </div>
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search</label>
                    </div>
                </form>
            </div>
            </li>
            <li class="li-hover">
                <ul class="chat-collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                    <div class="collapsible-body recent-activity">
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">just now</a>
                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Yesterday</a>
                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Last Week</a>
                                <p>Jessy Jay open a new store at S.G Road.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                    </div>
                </li>
                
                </ul>
            </li>
        </ul>
      </aside>
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>

  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <strong>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="https://www.instagram.com/yusufmawahid__/">Yusuf</a></span>
        </strong>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    <!-- masonry -->
    <script src="js/plugins/masonry.pkgd.min.js"></script>
    <!-- imagesloaded -->
    <script src="js/plugins/imagesloaded.pkgd.min.js"></script>    
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
    /*
     * Masonry container for blog page
     */
    var $containerBlog = $("#blog-posts");
    $containerBlog.imagesLoaded(function() {
      $containerBlog.masonry({
        itemSelector: ".blog",
        columnWidth: ".blog-sizer",
      });
    });
    </script>
    
</body>

</html>