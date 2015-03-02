<?php
    header("Cache-Control: private, max-age=10800, pre-check=10800");
    header("Pragma: private");
    header("Expires: " . date(DATE_RFC822,strtotime("30 day")));
    header("Vary: Accept-Encoding");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" dir="ltr" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" dir="ltr" lang="en-US"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hugo Nascimento - Portfolio</title>

        <meta name="description" content="My name is Hugo Nascimento and I'm a Software Engineer with a passion for web development.">
        <meta name="keywords" content="web, designer, front end, developer, ux, ui, design, software, engineer, responsive, rwd, Hugo, Nascimento, technology"/>
        <meta name="author" itemprop="name" content="Hugo Nascimento">
        <meta name="google" value="notranslate">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!--Font Face -->
        <link href='http://fonts.googleapis.com/css?family=Advent+Pro:600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro:700' rel='stylesheet' type='text/css'>

        <!-- build:remove -->
        <link rel="stylesheet" href="css/pgwmodal.min.css">
        <link rel="stylesheet" href="css/slidebars.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/timeline.css">
        <link rel="stylesheet/less" type="text/css" href="css/main.less">
        <!-- endbuild -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       
        <!-- Mobile Menu navbar-->
        <div class="slidebars sb-slidebar sb-width-thin sb-right">
          <nav class="mobile-menu">
                <ul>
                    <li><a href="#aboutme">About Me</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
        
        <!-- website content -->
        <div id="sb-site">
            <div id="menu-container">
                <div class="sb-toggle-right right-mobile-menu">
                    <div class="navicon-line"></div>
                    <div class="navicon-line"></div>
                    <div class="navicon-line"></div>
                </div>
            </div>

            <header>
                <div class="overlayed">
                    <nav>
                        <ul>
                            <li><a href="#aboutme">About Me</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav> 

                    <h1>UX/UI Designer & Front-End Developer</h1>

                    <p class="kicker">I am a Front-End Developer with a strong passion for UX/UI Design.</p>

                </div>
            </header>

            <section class="about-me">
                <div class="body-content-wrapper">
                    <h3 id="aboutme">Portfolio</h3>

                    <div class="profile-box">
                        <div class="container-circle">
                            <div class="circle-years"><span>6+</span></div>
                            <p>Experience Years</p>
                        </div>
                        
                        <div class="container-circle r-l">
                            <div class="circle-projects"><span>5</span></div>
                            <p>Projects Done</p>
                        </div>

                        <div class="profile-image">
                            <img src="images/profile-picture.jpg" alt="">
                        </div>

                        <div class="container-circle r-m">
                            <div class="circle-coffee"><span>780</span></div>
                            <p>Worked Hours</p>
                        </div>
                        
                        <div class="container-circle">
                            <div class="circle-articles"><span>127</span></div>
                            <p>Cups of Coffee</p>
                        </div>
                    </div>
            </section>    

            <footer>
                <div class="f-wrapper">
                    <a href="http://plus.google.com/110736213063051570572" title="Google Plus Profile" class="icon-gplus" rel="me" target="_blank"></a>
                    <a href="http://twitter.com/hugohcn" title="Twitter Profile" class="icon-twitter" target="_blank"></a>
                    <a href="https://br.linkedin.com/in/hugohcn" title="Linkedin Profile" class="icon-linkedin" target="_blank"></a>
                    <a href="https://github.com/hugohcn" title="Github Profile" class="icon-github" target="_blank"></a>
                    
                    <p>&copy; Copyright 2015 - Hugo Nascimento</p>
                </div>
            </footer>
        </div>        
    </body>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/slidebars/0.10.2/slidebars.min.js"></script>
    <script src="js/vendor/pgwmodal.min.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/principal.js"></script>

    <!-- build:remove -->
    <script src="js/vendor/less.js" ></script>
    <!-- endbuild -->

   <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-50800340-1', 'auto');
      ga('send', 'pageview');
    </script>
</html>

<!-- build:css css/style.min.css -->
<!-- endbuild -->