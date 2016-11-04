<?php
function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
 $PublicIP = get_client_ip();
 $json  = file_get_contents("https://freegeoip.net/json/$PublicIP");
 $json  =  json_decode($json ,true);
 $country =  $json['country_name'];
if($country == "France"){
   header( 'Location: https://victorsarda.fr');
}
else{
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Currently in Dublin, I'm looking for a great junior developer job. I like discovering new technologies and frameworks.
I love making APIs and work with some PHP Frameworks like Symfony2 or Laravel 5. I aslo do some mobile app development essentialy with the new Apple language : Swift.">
    <meta name="author" content="Victor Sarda">
    <meta name="keywords" content="victor,sarda,swift,ios,php,framework,symfony2,laravel5,web,design,html,css,html5,development">

    <!-- Facebook -->
    <meta property="og:url" content="https://en.victorsarda.fr/">
    <meta property="og:title" content="Victor Sarda - 20yo - Developer">
    <meta property="og:image" content="https://en.victorsarda.fr/images/bg.jpg">
    <meta property="og:image:width" content="1278">
    <meta property="og:image:height" content="850">
    <meta property="og:description" content="Currently in Dublin, I'm looking for a great junior developer job. I like discovering new technologies and frameworks.
I love making APIs and work with some PHP Frameworks like Symfony2 or Laravel 5. I aslo do some mobile app development essentialy with the new Apple language : Swift.">

    <title>Victor Sarda</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="light">Victor Sarda</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#competences">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#parcours">Professionnal career</a>
                    </li>
                    <!--<li>
                    <a class="page-scroll" href="#real">Réalisations</a>
                </li>-->
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="logo">Victor Sarda</h1>
                        <hr>
                        <p class="intro-text">20 yo - Developer</p>
                        <!-- Single button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-lg btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            See my resume <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="english-resume.pdf" target="_blank">English Resume</a></li>
                            <li><a href="french-resume.pdf" target="_blank">French Resume</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Compéténces -->
    <section id="competences" class="container content-section text-cente competences-bg">
        <div class="container">
            <div class="row">
                <h1 class="titre">My skills</h1>
                <div class="col-md-6">
                    <div class="skillbar clearfix " data-percent="90%">
                        <div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
                        <div class="skillbar-bar" style="background: #e67e22;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div>
                    <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="75%">
                        <div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
                        <div class="skillbar-bar" style="background: #3498db;"></div>
                        <div class="skill-bar-percent">75%</div>
                    </div>
                    <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="60%">
                        <div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
                        <div class="skillbar-bar" style="background: #2c3e50;"></div>
                        <div class="skill-bar-percent">60%</div>
                    </div>
                    <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="70%">
                        <div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
                        <div class="skillbar-bar" style="background: #5a68a5;"></div>
                        <div class="skill-bar-percent">70%</div>
                    </div>
                    <!-- End Skill Bar -->
                </div>

                <div class="col-md-6">
                    <div class="skillbar clearfix " data-percent="55%">
                        <div class="skillbar-title" style="background: #27ae60;"><span>Laravel5</span></div>
                        <div class="skillbar-bar" style="background: #2ecc71;"></div>
                        <div class="skill-bar-percent">50%</div>
                    </div>
                    <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="90%">
                        <div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
                        <div class="skillbar-bar" style="background: #525252;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div>
                    <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="70%">
                        <div class="skillbar-title" style="background: #d37503;"><span>Swift</span></div>
                        <div class="skillbar-bar" style="background: #ff8c25;"></div>
                        <div class="skill-bar-percent">70%</div>
                    </div>
                    <!-- End Skill Bar -->

                    <div class="skillbar clearfix " data-percent="70%">
                        <div class="skillbar-title" style="background: #450009;"><span>Java & C#</span></div>
                        <div class="skillbar-bar" style="background: #7a0010;"></div>
                        <div class="skill-bar-percent">70%</div>
                    </div>
                    <!-- End Skill Bar -->
                </div>
            </div>
            <p class="competences-text">
                Currently in Dublin, I'm looking for a great junior developer job. I like discovering new technologies and frameworks.<br>
                I love making APIs and work with some PHP Frameworks like Symfony2 or Laravel 5. I aslo do some mobile app development essentialy with the new Apple language : Swift.
            </p>
        </div>
    </section>

    <!-- Parcours pro -->
    <section id="parcours" class="container content-section text-center parcours-bg">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1 class="titre">Professionnal career</h1>

                <section class="cd-horizontal-timeline">
                    <div class="timeline">
                        <div class="events-wrapper">
                            <div class="events">
                                <ol>
                                    <li><a href="#0" data-date="01/03/2013" class="selected">May 2011</a></li>
                                    <li><a href="#0" data-date="01/05/2013">July. - 2013</a></li>
                                    <li><a href="#0" data-date="01/09/2013">Sept. - 2013</a></li>
                                    <li><a href="#0" data-date="01/01/2014">May - June 2014</a></li>
                                    <li><a href="#0" data-date="01/06/2014">Jan. - Feb. 2015</a></li>
                                    <li><a href="#0" data-date="01/09/2014">Sept. 2015 - Sept. 2016</a></li>
                                    <li><a href="#0" data-date="01/02/2015">May 2016 - Sept. 2016</a></li>

                                </ol>

                                <span class="filling-line" aria-hidden="true"></span>
                            </div>
                            <!-- .events -->
                        </div>
                        <!-- .events-wrapper -->

                        <ul class="cd-timeline-navigation">
                            <li>
                                <a href="#0" class="prev inactive"></a>
                            </li>
                            <li>
                                <a href="#0" class="next"></a>
                            </li>
                        </ul>
                        <!-- .cd-timeline-navigation -->
                    </div>
                    <!-- .timeline -->

                    <div class="events-content">
                        <ol>
                            <li class="selected" data-date="01/03/2013">
                                <h2>Internship in computer graphics</h2>
                                <em>May 2011</em>
                                <p>I have done this intership during my first secondary school year. It was my first internship in IT domain. I realized that what I loved to do websites and I wanted to go forward in IT and web development. I made my first HTML/CSS web site during this internship.</p>
                                <p>After a couple of weeks It was obivous to me that I should do web development.</p>
                            </li>

                            <li data-date="01/05/2013">
                                <h2>BTEC National Diploma</h2>
                                <em>July 2013</em>
                                <p>I got my BTEC National Diploma because it was related to IT domain. I really started doing IT and development thanks to this diploma.</p>
                                <p>During the last year I made a project all year long. I chose to do an internet connected plug (IoT). It was a really ambitious project but successfully made.</p>
                                <p>So I got this diploma in July 2013.</p>
                            </li>

                            <li data-date="01/09/2013">
                                <h2>Vocational Training Certificate</h2>
                                <em>September 2013 - June 2015</em>
                                <p>In september 2013 I started studing web development during my Vocational Training Certificate in IT.</p>
                                <p>We first started to learn how to make a web server in order to understand how it works.</p>
                                <p>Then I chose to continue in web developement rather than server side. We fist learned to do Object-oriented programming with C# and then OOP with PHP and the Symfony2 framework.</p>
                                <p>I got my Vocational Training Certificate in July 2015</p>
                            </li>

                            <li data-date="01/01/2014">
                                <h2>Web agency internship</h2>
                                <em>May - June 2014</em>
                                <p>During my first year of Vocational Training Certificate I had to do an internship.</p>
                                <p>I have done it in a web agency called Nematis. I made a lot of web integration and newsletters with HTML/CSS and JS. I also did some websites with Wordpress CMS. This internship was rewarding, I really learned how to manage project thanks to Scrum method especially.</p>
                            </li>

                            <li data-date="01/06/2014">
                                <h2>Internship in NCSR</h2>
                                <em>January - February 2015</em>
                                <p>During my second year of Vocational Training Certificate, I had to do a second internship.</p>
                                <p>This time I did it in NCSR (french National Center for Scientific Research). This internship was definitely the most intersting. I had to realize three projects.</p>
                                <p>I used several technologies like the Python language (server side), the Symfony2 framework and an Arduino card with linked to a thermocouple.</p>
                            </li>

                            <li data-date="01/09/2014">
                                <h2>Bachelor Degree</h2>
                                <em>September 2015 - September 2016</em>
                                <p>After my Vocational Training Certificate diploma, I got my Bachelor Degree (three-year university degree in France) in mobile app development with honors and as valedictorian.</p>
                                <p>This training is very rewarding and independent work is very important.</p>
                            </li>

                            <li data-date="01/02/2015">
                                <h2>Internship at Cinquième Dimension</h2>
                                <em>May 2016 - September 2016</em>
                                <p>During my Bachelor degree in mobile app development, I had to do a four month internship. I did it at Cinquieme Dimension (a French web agency) as a web developer.</p>
                                <p>I realized that I prefer web development even if  mobile development is great too.</p>
                            </li>

                        </ol>
                    </div>
                    <!-- .events-content -->
                </section>


            </div>
        </div>

    </section>

    <!-- Contact -->
    <section id="contact" class="container content-section text-center contact-bg">
        <div class="container">
            <h1 class="contact-titre">Feel free to contact me</h1>
            <form action="send.php" id="contact-form" class="form-horizontal" role="form" method="post">
                <div class="form-group" id="name-field">
                    <label class="form-label" for="form-name">Name</label>
                    <input type="text" class="form-input" id="form-name" name="form-name" required>
                </div>
                <div class="form-group" id="email-field">
                    <label class="form-label" for="form-email">E-mail</label>
                    <input type="email" class="form-input" id="form-email" name="form-email" required>
                </div>
                <div class="form-group" id="subject-field">
                    <label class="form-label" for="form-subject">Subject</label>
                    <input type="text" class="form-input" id="form-subject" name="form-subject" required>
                </div>
                <div class="form-group" id="message-field">
                    <label class="form-label" for="form-message">Message</label>
                    <textarea class="form-message" rows="6" id="form-message" name="form-message" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Send</button>
                </div>
            </form>
        </div>
    </section>



    <!-- Footer -->
    <footer id="footer">
        <div class="container text-center">
            <ul class="icons">
                <li><a href="https://facebook.com/sarda.victor" target="_blank"><i class=" fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/victtooorrr" target="_blank"><i class=" fa fa-twitter"></i></a></li>
                <li><a href="https://ie.linkedin.com/in/victor-sarda" target="_blank"><i class=" fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/victor-sarda" target="_blank"><i class=" fa fa-github"></i></a></li>
                <li><a href="mailto:victor.sarda@icloud.com" target="_blank"><i class=" fa fa-envelope"></i></a></li>
            </ul>
        </div>
    </footer>

    <!-- Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-86869859-1', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/timeline.js"></script>
    <script src="assets/js/jquery.mobile.custom.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</body>

</html>
