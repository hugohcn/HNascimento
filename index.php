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
        <title>Hugo Nascimento</title>

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
                    <h3 id="aboutme">About Me</h3>

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
                    
                    <div class="blurb">
                        <p class="description">
                            <strong>My name is Hugo Nascimento and I'm a Software Engineer with a passion for web development.</strong>
                        </p>
                        <p class="description">
                            I'm obsessed for design and innovative technologies. During my 6+ years of experience, I collaborate with clients to determine user needs, requirements and goals to design positive user experiences and interfaces for both web and mobile applications/sites.
                        
                            I’m constantly learning web technologies and other design related topics. In spare times I like to read, watch movies and be a geek.
                        </p>
                    </div>
            </section>    
            <section class="professional-skills">
                <div class="skills-box">
                    <h3>Professional Skills</h3>
                    <div id="left-skills">
                        <div class="skill-unit">
                            <span class="skill-title">HTML5 / CSS3</span>
                            <progress class="skill-bar" max="100" value="90"></progress>
                        </div>

                        <div class="skill-unit">
                            <span class="skill-title">Javascript / jQuery</span>
                            <progress class="skill-bar" max="100" value="70"></progress>
                        </div>

                         <div class="skill-unit">
                            <span class="skill-title">Responsive Web Design</span>
                            <progress class="skill-bar" max="100" value="80"></progress>
                        </div>

                        <div class="skill-unit">
                            <span class="skill-title">Design Thinking</span>
                            <progress class="skill-bar" max="100" value="60"></progress>
                        </div>
                    </div>
                    <div id="right-skills">
                        <div class="skill-unit">
                            <span class="skill-title">Photoshop / Fireworks</span>
                            <progress class="skill-bar" max="100" value="75"></progress>
                        </div>

                        <div class="skill-unit">
                            <span class="skill-title">PHP</span>
                            <progress class="skill-bar" max="100" value="55"></progress>
                        </div>

                        <div class="skill-unit">
                            <span class="skill-title">MySQL</span>
                            <progress class="skill-bar" max="100" value="70"></progress>
                        </div>

                        <div class="skill-unit">
                            <span class="skill-title">Git / Github</span>
                            <progress class="skill-bar" max="100" value="70"></progress>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="experience-section">
                <div class="experience-box">
                        <h3>Work Experience</h3>
                        <!-- Responsive timeline -->
                        <section id="cd-timeline" class="cd-container">
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-picture"></div> 

                                <div class="cd-timeline-content">
                                    <!-- Job Title and Company Name -->
                                    <h2 id="cit-title">Software Engineer - Ci&T</h2>
                                    <div class="cd-timeline-content-wrapper">
                                        <p>
                                            <!-- Company Shor Description -->
                                            CI&T is a different kind of technology company, taking its name from the founding principles of collaboration, innovation, and transformation using progressive technologies including web, mobile, social, cloud and predictive models.
                                        </p>
                                        <p>
                                            <!-- Brief description of your job responsibilities -->
                                            As Business Analysts, I'm responsible for identifying change needs, assessing the impact of the change, capturing and documenting requirements and then ensuring that those requirements are delivered by IT, delivering effective solutions which provide tangible business benefits often within short timescales.
                                        </p>
                                    </div>
                                    <span class="cd-date">July 2014 - Current</span>
                                </div>
                            </div> 

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-movie"></div>

                                <div class="cd-timeline-content">
                                    <h2 id="accenture-title">Software Engineer / Fron-End Developer - Accenture</h2>
                                    <div class="cd-timeline-content-wrapper content-hidden">
                                        <p>
                                            <!-- Company Shor Description -->
                                            Accenture is one of the world’s leading organizations that provides management consulting, technology and outsourcing services.
                                        </p>
                                        <p>
                                            <!-- Brief description of your job responsibilities -->
                                            As Software Engineer, worked with the customer to improve the production area and to evolve legacy systems of commercial, rail logistics, port logistics and mining areas of Vale (Accenture's Client). I also transfered knowledge about systems for Accenture's customers clients (Omã) and Accenture own teams in another country (Philippines).

                                            As Front-End Developer I create business rules for new systems legacies, mantaining clean code programming style. Also, got success as UX Designer in a project that consisted to increase user experience of a legacy system.
                                        </p>
                                        
                                    </div>
                                    <span class="cd-date">June 2011 - July 2014</span>
                                </div>
                            </div> 

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-picture"></div> 

                                <div class="cd-timeline-content">
                                    <!-- Job Title and Company Name -->
                                    <h2 id="freelancer-title">UX/UI Designer / Front-End Developer - Freelancer</h2>
                                    <div class="cd-timeline-content-wrapper content-hidden">
                                        <p>
                                            <!-- Brief description of your job responsibilities -->
                                            As a freelance Web developer, I collaborate with clients to determine user needs, requirements and goals to design positive user experiences and interfaces for both web and mobile applications/sites.

                                            Writing semantic, modular and intuitive code using HTML5, CSS3 and jQuery , I'm highly encouraged to understanding of the concepts of progressive enhancement, mobile first, future friendly design and responsive web design(RWD) as well.  </p>
                                        </p>
                                    </p>
                                </div>
                                <span class="cd-date">March 2008 - Current</span>
                            </div>
                        </section>
                    </div>
            </section>

            <section class="portfolio">
                <h3 id="portfolio">Portfolio</h3>
                
                <div class="projects-container owl-carousel owl-theme">
                    <div class="item">
                        <a href="" class="project-details-link">
                            <img src="images/portfolio/p1.jpg" alt="Owl Image">    
                        </a>
                        <a href="#" class="project-details-link">
                            <img src="images/portfolio/p5.jpg" alt="Owl Image">    
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="project-details-link">
                            <img src="images/portfolio/p2.jpg" alt="Owl Image">    
                        </a>
                        <a href="#" class="project-details-link">
                            <img src="images/portfolio/p6.jpg" alt="Owl Image">    
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="project-details-link">
                            <img src="images/portfolio/p3.jpg" alt="Owl Image">    
                        </a>
                        <a href="#" class="project-details-link">
                            <img src="images/portfolio/p7.jpg" alt="Owl Image">    
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="project-details-link">
                            <img src="images/portfolio/p4.jpg" alt="Owl Image">    
                        </a>
                        <a href="#" class="project-details-link">
                            <img src="images/portfolio/p8.jpg" alt="Owl Image">    
                        </a>
                    </div>
                </div>
            </section>

            <section class="contact">
                <h3 id="contact">Let's work together</h3>
                
                <div class="contact-container">
                    <form id="frmContact" method="POST" action="//forms.brace.io/hugohcn@gmail.com">
                        <div class="contact-info-group">
                            <div class="contact-status"></div>
                        
                            <input id="txtFirstName" name="firstName" type="text" placeholder="First Name" required>
                            <input id="txtLastName"  name="lastName" type="text" placeholder="Last Name" required>    

                        </div>
                        
                        <div class="contact-info-group">
                            
                            <input id="txtEmailAdress" name="emailAdress" type="email" placeholder="E-mail Adress" required>
                            <input id="txtMessageSubject" name="messageSubject" type="text" placeholder="Message Subject" required>

                        </div>
                        
                        <div class="contact-info-group">
                            <textarea id="txtEmailMessage" name="emailmessage" name="" cols="60" rows="10" placeholder="Tell me more about your project..." required></textarea>
                        </div>

                        <input type="submit" id="btnSend" value="Send">
                    </form>
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

    setTimeout(function(){
        ga(['_trackEvent', 'Control', 'Bounce Rate', '']);
    }, 10000);

    </script>
</html>

<!-- build:css css/style.min.css -->
<!-- endbuild -->