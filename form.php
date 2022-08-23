

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form - SRTdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php
        include('sidebar.php');
                ?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <form action="data_submit.php" method="post">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-6 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Employee Details:</h4>
                                            <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Emp_Name</label>
                                            <input class="form-control" name="emp_name" type="text" value="" id="example-text-input">
                                          </div>
                                          <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Father_Name</label>
                                            <input class="form-control" name="father_name" type="text" value="" id="example-text-input">
                                          </div>
                                          <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mother_name</label>
                                            <input class="form-control" name="mother_name" type="text" value="" id="example-text-input">
                                          </div>
                                          <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Birthday</label>
                                            <input class="form-control" type="date" value="" name="birthday" id="example-datetime-local-input">
                                        </div>
                                          <button type="submit" class="btn btn-primary mt-4 pl-4 pr-4">Submit</button>  

                                                                           
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <b class="text-muted mb-3 d-block">Gender</b>
                                                                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="male">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                   Male
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="female" checked>
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Female
                                  </label>
                                </div>
                                          <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Religion</label>
                                            <select class="form-control" name="religion"   id="example-text-input">
                                                <option value="Islam">Islam</option>
                                                 <option value="Hindu">Hindu</option>
                                                 <option value="Cristian">Cristian</option>
                                                 <option value="Buddihs">Buddihs</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <b class="text-muted mb-3 d-block">Marital_status:</b>
                                            <div class="form-check">
                                          <input class="form-check-input" value="married" type="radio" name="marital_status" checked>
                                          <label class="form-check-label" for="flexRadioDefault2">
                                            Marrid
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" value="Unmarried" type="radio" name="marital_status" id="flexRadioDefault2" >
                                          <label class="form-check-label" for="flexRadioDefault2">
                                            Unmarrid
                                          </label>
                                        </div>
                                          </div>


                                          <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mobile</label>
                                            <input class="form-control" name="mobile" type="text" value="" id="example-text-input">
                                          </div>
                                          <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Email</label>
                                            <input class="form-control" name="email" type="text" value="" id="example-text-input">
                                          </div>
                                
                                                                           
                                       
                                    </div>
                                </div>
                            </div>

                            <!-- employee end -->

                            
                            
                            
                        </div>
                    </div>
                </form>
<!--                     <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                                                                  
                                          <div class="form-group">
                                            <b class="text-muted mb-3 d-block">Gender</b>
                                                                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                   Male
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault2" checked>
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Female
                                  </label>
                                </div>
                                          <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Religion</label>
                                            <input class="form-control" name="religion" type="text" value="" id="example-text-input">
                                          </div>

                                          <div class="form-group">
                                            <b class="text-muted mb-3 d-block">Marrital_Status:</b>
                                            <div class="form-check">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1">
                                          <label class="form-check-label" for="flexRadioDefault2">
                                            Marrid
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
                                          <label class="form-check-label" for="flexRadioDefault2">
                                            Unmarrid
                                          </label>
                                        </div>
                                          </div>

                                          <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mobile</label>
                                            <input class="form-control" name="mobile" type="text" value="" id="example-text-input">
                                          </div>
                                          <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Email</label>
                                            <input class="form-control" name="email" type="text" value="" id="example-text-input">
                                          </div>

                                            
                                      
                                                      
                                      
                                       
                                      
                                       
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                           
                            
                        </div>
                    </div> -->






                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
