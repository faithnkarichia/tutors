<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.myhomeworkshark.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 01:01:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <link type="text/css" href={{ asset('/cometchat/cometchatcss.css') }} rel="stylesheet" charset="utf-8">
    <script type="text/javascript" src="cometchat/cometchatjs.php" charset="utf-8"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- plugins -->
    <title>Myhomeworkhelp: Homeworkhelp for students</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="UBSFeMdUTqYvBJfxwDJQcZUWQTaZADp2r5EIpw5u">    
    <!--main css file-->
    
    <link href="https://sharkassets.s3.amazonaws.com/public/css/apphome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
</head>    <script>
	    window.Laravel = {"csrfToken":"UBSFeMdUTqYvBJfxwDJQcZUWQTaZADp2r5EIpw5u"};
	</script>
    <body>
        <!-- Static navbar -->
        <nav class="navbar navbar-toggleable-md navbar-light fixed-top  navbar-transparent clearfix">
            <!-- Start Top Search -->
            <div class="top-search clearfix">              
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ion-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="ion-android-close"></i></span>
                    </div>
                </div>
            </div><!-- End Top Search -->
            <div class="clearfix"></div>
            <div class="container">
                

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href='{!! url('/index') !!}'>
                    <img src="https://sharkassets.s3.amazonaws.com/public/img/mshark.png" width="168px" height="42px" alt="" class="logo-default img-responsive">
                    <img src="https://sharkassets.s3.amazonaws.com/public/img/mshark.png" width="84px" height="21px" alt="" class="logo-scroll img-responsive">

                    {{-- <img src={{ asset('/img/img1.jpeg') }} width="168px" height="42px" alt="" class="logo-default img-responsive"> --}}

                </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item"><a class="nav-link" href='{!! url('/contact') !!}'>Contact us</a></li>
                        <li class="nav-item"><a class="nav-link" href='{!! url('/login') !!}'>Login</a></li>
                        <li class="nav-item"><a href='{!! url('/register') !!}' class="btn btn-rounded btn-primary nav-link">Free Signup</a></li>
                    </ul>
                </div>
            </div>
        </nav>        <!--navbar end-->
           


<!-- Start intro -->
        <style>
    .orderformhome{
        /*background-color: #1b4d6e;*/
        background-color: rgba(76, 84, 129, 0.79);
        padding: 15px;
        border-radius: 5px;
        border-color: black;
    }
    .lablesd{
        text-decoration: bold;
        font-size: 16px;
        color: white;
        font-weight: bold;
    }
</style>
<section id="home" class="dzsparallaxer auto-init dzsparallaxer---window-height use-loading" style="position: relative; height: 800px;" data-options='{  mode_scroll: "normal" }'>
    <div class="divimage dzsparallaxer--target " data-src="https://sharkassets.s3.amazonaws.com/public/img/bg1.jpg" style="width: 100%; height: 130%; background-image: url()">
        <div class="hero-parallax">
            <div class="hero-inner">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 hidden-xs">
                                <div class="col-md-10">
                                    <div class="hero-static">
                                        <h1>Give your grades a boost!</h1>
                                        <p class="lead">
                                            Get homework help from professional tutors
                                        </p>
                                        <div class="buttons">
                                            <a href='{!! url('/register') !!}' class="btn btn-xl btn-primary">Click to get instant help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 orderformhome">
                                <h3 style="color: white;">Post project now</h3>
                                <hr>
                                <form action="https://www.myhomeworkshark.com/pages/postproject" method="POST" class="form-horizontal" role="form">
                                    <input type="hidden" name="_token" value="UBSFeMdUTqYvBJfxwDJQcZUWQTaZADp2r5EIpw5u">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="lablesd" for="email">Email Address:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="email" maxlength="30" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="lablesd" for="email">Title:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" maxlength="70" name="title" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="lablesd" for="subject">Subject:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="form-control" name="subject" id="subject">
                                            <option value="">Please select a subject</option>
                                                                                          <option value="Art">Art</option>
                                                                                          <option value="Business">Business</option>
                                                                                          <option value="English">English</option>
                                                                                          <option value="Computer">Computer</option>
                                                                                          <option value="Foregn Language">Foregn Language</option>
                                                                                          <option value="History">History</option>
                                                                                          <option value="Law">Law</option>
                                                                                          <option value="Mathematics">Mathematics</option>
                                                                                          <option value="Medicine">Medicine</option>
                                                                                          <option value="Philosophy">Philosophy</option>
                                                                                          <option value="Science">Science</option>
                                                                                          <option value="General">General</option>
                                                                                        </select>
                                        </select>
                                        </div>                                       
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="lablesd" for="subject">Budget:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="form-control" name="budget" id="budget">
                                            <option value="">Please select budget</option>
                                               <option value="$5-$10">Mini Project ($5-10 USD)</option>
                                                <option value="$10-$30">Micro Project ($10-30 USD)</option>
                                                <option value="$30-$100">Standard Project ($30-100 USD)</option>
                                                <option value="$100-$250">Medium Project ($100-250 USD)</option>
                                                <option value="$250-$500">Large Project ($250-500 USD)</option>
                                                <option value="$500-$1000">Major Project ($500-1000 USD)</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary pull-right">Continue <i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>        <!--intro section end-->
        <section class="features-section border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 margin-b-30">
                        <div class="feature-box-center text-center">
                            <i class="ion-iphone"></i>
                            <h4 class="text-capitalize">Money back guarantee</h4>
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                            </p> -->
                        </div>
                    </div><!--/col-->
                    <div class="col-md-6 col-lg-3  margin-b-30">
                        <div class="feature-box-center text-center">
                            <i class="ion-ios-person-outline"></i>
                            <h4 class="text-capitalize">100% plag free</h4>
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                            </p> -->
                        </div>
                    </div><!--/col-->
                    <div class="col-md-6 col-lg-3  margin-b-30">
                        <div class="feature-box-center text-center">
                            <i class="ion-ios-cog-outline"></i>
                            <h4 class="text-capitalize">Timely delivery</h4>
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                            </p> -->
                        </div>
                    </div><!--/col-->
                    <div class="col-md-6 col-lg-3 margin-b-30">
                        <div class="feature-box-center text-center">
                            <i class="ion-key"></i>
                            <h4 class="text-capitalize">Free profreading</h4>
                            <!-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                            </p> -->
                        </div>
                    </div><!--/col-->
                </div>
            </div>
        </section>        <!--end features section-->
        <!--end showcase section-->
        <section class="testimonials skin-bg">
            <div class="space-90"></div>
            <div class="container">
                <div class="center-title">
                    <h2>True words from the students.</h2>
                    <p>Over 500,000 students worldwide</p>
                </div>

                <div class="row">
                    <div class="col-md-4 margin-b-30">
                        <div class="feedback-box">
                            <p>
                                " I'm an international student, i just came from a bad experience from another website.Since the first time i used MyHomeworkShark, i have never looked back. All my papers have been Well written,easy to follow,Original and great attention to detail.All my grades have been A's. Thank you very much!!!. "
                            </p>
                        </div>
                        <div class="testi-info">
                            <img src="https://sharkassets.s3.amazonaws.com/public/img/avtar-1.jpg" alt="" class="rounded-circle" width="60">
                            <div class="content">
                                <h4>John Miller</h4>
                                <em>Order # 34344</em>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 margin-b-30">
                        <div class="feedback-box">
                            <p>
                                " MyHomeworkShark.com is without a doubt a New hope for working while studying students, Over the times i have used the service it has been a great relief and i get a resounding success for every project i post!  "
                            </p>
                        </div>
                        <div class="testi-info">
                            <img src="https://sharkassets.s3.amazonaws.com/public/img/avtar-2.jpg" alt="" class="rounded-circle" width="60">
                            <div class="content">
                                <h4>Janet Ragur</h4>
                                <em>Order # 34354</em>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 margin-b-30">
                        <div class="feedback-box">
                            <p>
                                " Last minute to turn in my homework and still had no idea where to start, i posted a 1500 words assignment, paid 30$ ,2hrs later the tutor had sent the work my TA graded the paper 92%. That was a great turn around. Impressive! Impressive!"
                            </p>
                        </div>
                        <div class="testi-info">
                            <img src="https://sharkassets.s3.amazonaws.com/public/img/avtar-3.jpg" alt="" class="rounded-circle" width="60">
                            <div class="content">
                                <h4>Emily Howkins</h4>
                                <em>Order # 67701</em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
        </section>        
        <!--end testimonials section-->

        <section class="steps">
            <div class="space-90"></div>
            <div class="container">
                <div class="center-title">
                    <h2>How it works</h2>
                    <p>GET INSTANT HELP IN 3 SIMPLE STEPS</p>
                </div>
                <div class="row">
                    <div class="col-md-4 margin-b-30">
                        <div class="step-box">
                            <h1>01</h1>
                            <h4>CLICK ON “POST HOMEWORK”</h4>
                            <p>
                                Provide correct and necessary details to your Homework. Multiple Scholars will see your work and place their bids in seconds.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 margin-b-30">
                        <div class="step-box">
                            <h1>02</h1>
                            <h4>SELECT SCHOLAR TO WORK ON YOUR PROJECT</h4>
                            <p>
                                Go through scholars’ reviews to select your preferred scholar. Click on “Assign Order” next to the scholars bid to select scholar. Deposit the agreed amount. Scholar gets notified to start working on the project immediately.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 margin-b-30">
                        <div class="step-box">
                            <h1>03</h1>
                            <h4>DOWNLOAD YOUR PAPER</h4>
                            <p>
                                Scholar uploads the solution after completing the work , Download solution & release payment to the scholar. (uploaded solution appears next to the project you posted)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
        </section>        <!--end steps-->
        <section class="features-bg">
            <div class="container">
                <div class="center-title">
                    <h2>Why choose us</h2>
                    <p>Over 100,000 tutors worldwide</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-icon-left clearfix">
                            <div class="icon">
                                <i class="ion-iphone"></i>
                            </div>
                            <div class="content">
                                <h4>Triple guarantee</h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                                </p> -->
                            </div>
                        </div><!--/feature icon-->
                        <div class="feature-icon-left clearfix">
                            <div class="icon">
                                <i class="ion-social-google"></i>
                            </div>
                            <div class="content">
                                <h4>Experienced writers</h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                                </p> -->
                            </div>
                        </div><!--/feature icon-->
                        <div class="feature-icon-left clearfix">
                            <div class="icon">
                                <i class="ion-ios-copy"></i>
                            </div>
                            <div class="content">
                                <h4>Help in all subjects</h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                                </p> -->
                            </div>
                        </div><!--/feature icon-->
                    </div>
                    <div class="col-md-6">
                        <div class="feature-icon-left clearfix">
                            <div class="icon">
                                <i class="ion-social-twitter"></i>
                            </div>
                            <div class="content">
                                <h4>Real time communication</h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                                </p> -->
                            </div>
                        </div><!--/feature icon-->
                        <div class="feature-icon-left clearfix">
                            <div class="icon">
                                <i class="ion-ios-person"></i>
                            </div>
                            <div class="content">
                                <h4>User friendly control panel</h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                                </p> -->
                            </div>
                        </div><!--/feature icon-->
                        <div class="feature-icon-left clearfix">
                            <div class="icon">
                                <i class="ion-ios-cog"></i>
                            </div>
                            <div class="content">
                                <h4>Fair and reasonable price</h4>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
                                </p> -->
                            </div>
                        </div><!--/feature icon-->
                    </div>
                </div>
            </div>
        </section>        <div class="space-70"></div>
        <div class="cta-skin">
            <div class="container text-center">
                <h2>Are you interested in becoming a tutor?</h2>
                <p>Get started now. Easy steps.</p>
                <a href='{!! url('/becomeatutor') !!}' class="btn btn-rounded btn-white-border">Create a tutor account</a>
            </div>
        </div>
        
        <footer class="footer">
            <div class="space-50"></div>
            <div class="container">
                <div class="row vertical-align-child">
                    <div class="col-md-3 margin-b-30">
                        <div class="margin-b-20">
                            <a href='{!! url('index-2') !!}'>
                                <img src="https://sharkassets.s3.amazonaws.com/public/img/logo-light.png" alt="">
                            </a> 
                        </div>
                        <p>
                            Myhomeworkshark. Com  is a fast growing company in the field of Academic Research writing
                        </p>
                    </div>
                    <div class="col-md-2 margin-b-30">
                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 margin-b-30">
                        <ul class="list-unstyled">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 margin-b-30">
                        <ul class="list-inline social">
                            <li class="list-inline-item"><a href='{!! url('index-2') !!}'><i class="ion-social-facebook"></i></a></li>
                            <li class="list-inline-item"><a href='{!! url('index-2') !!}'><i class="ion-social-twitter"></i></a></li>
                            <li class="list-inline-item"><a href='{!! url('index-2') !!}'><i class="ion-social-googleplus"></i></a></li>
                            <li class="list-inline-item"><a href='{!! url('index-2') !!}'><i class="ion-social-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href='{!! url('index-2') !!}'><i class="ion-social-rss"></i></a></li>
                            <li class="list-inline-item"><a href='{!! url('index-2') !!}'><i class="ion-social-youtube"></i></a></li>
                        </ul>
                        <h4>Subscribe to newsletter</h4>
                        <form class="signup-form navbar-form margin-b-20">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                            </div>   
                            <button type="submit" class="btn btn-cta btn-primary btn-lg">Subscribe</button>                                 
                        </form>
                        <span>&copy; Copyright 2017</span>
                    </div>
                </div>
            </div>
            <div class="space-20"></div>
        </footer>        <!-- jQuery plugins-->
        <script src="https://sharkassets.s3.amazonaws.com/public/js/plugins.js"></script>
<script src="https://sharkassets.s3.amazonaws.com/public/js/apphome.js"></script>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
<script>
$(function() {
    $('#homedate').datetimepicker({
        format: 'YYYY-MM-DD hh:mm:ss'
    });
});
</script>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107833194-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107833194-1');
</script>    </body>

<!-- Mirrored from www.myhomeworkshark.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 01:01:43 GMT -->
</html>