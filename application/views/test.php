<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <title>LF College Of Engineering</title>

    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 4000
            });
            var counter = 0;
            if (counter === 0) {
                $('div:not(#show-up) ').css('display', 'none');

                $('footer').css('display', 'none');
                $('body').keydown(function() {
                    $('#show-up').slideUp(1400).css('display', 'hidden');
                    // $('#show-up').animate({ opacity :'toggle' }, 'slow').css('display',hidden);
                    $('div:not(#show-up) ').css('display', '');
                });
                counter++;
            }

        });


    </script>

    <link href="css/style.css" rel="stylesheet">
</head>
<body >






    <div class="header">

        <div class="logo">
            <a href="index.html" title="home" ><img src="img/logo_1.png"/></a>

        </div>

        <ul>
            <li>
                <a href="#" class='active' title="Home">Home</a>
            </li>
            <li>
                <a href="academic.html"  title="Academic">Academic</a>
            </li>
            <li>
                <a href="gallery.html"  title="Gallery">Gallery</a>
            </li>
            <li>
                <a href="facilities.html"  title="Facilities">Facilities</a>
            </li>

            <li>
                <a href="about_us.html" title="About">About</a>
            </li>
            <li>
                <a href="contact_us.html" title="Contact">Contact</a>
            </li>
        </ul>

    </div>

    <div id="show-up">
        <h1>OUR GOALS WERE:</h1>
        <p class="simple">SIMPLE</p>
        <p class="clean"> CLEAN</p>
        <p class="effective"> EFFECTIVE</p>
    </div>

    <div id='slider'>
        <div class="row-fluid">
            <div class="span12">
                <div id="myCarousel" class="carousel slide">

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item slider"><img src="img/slide_notice.jpg" alt=""  /></div>
                        <div class="item slider"><img src="img/slide_college.jpg" alt="" /></div>
                        <div class="item slider"><img src="img/slide_libraries.jpg" alt="" /></div>
                        <div class="item slider"><img src="img/slide_lab.jpg" alt=""  /></div>
                        <div class="item slider"><img src="img/slide_cafeteria.jpg" alt=""  /></div>
                        <div class="item slider"><img src="img/slide_basketball.jpg" alt="" /></div>
                        <div class="item slider"><img src="img/slide_graduation.jpg" alt="" width="960px" /></div>



                    </div>

                    <!-- Carousel nav -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>


                    </ol>


                </div>

            </div>
        </div>


    </div>
    <div class="row">
        <div id='main_container' class="span12">

            <div id='principal_message' class="span8">
                <h1>Message From Principal</h1>
                <div id="principal-pic">
                    <img src="img/principal.png"/>
                </div>
                <div id="message-content">
                    <p id="first-para" >
                        Leapfrog College of Engineering maintains a very special place in the academic landscape of Nepal. Our great strength lies in our continuous endeavour to rise above the standards of excellence we continuously redefine for ourselves and for the students in turn. In striving to keep ourselves and our students at the helm of the latest in academics and technology, we do not forget that much of what goes into the making of a successful person is a healthy mindset and strong values. In addition to the holistic grooming of our students, we encourage students to pursue their intellectual curiosity, which could most often overstep the boundaries of the classroom.</p>

                    <p>The upkeep of the brand that the Jesuits have laboriously built over the years is anything but easy. And it isn’t any easier on the students who make up this very brand. However, the strength of an indomitable spirit to constantly rise above ourselves is what propels each of us – students and teachers – to never falter in our vision of excellence.</p>

                    <p>With time, all that you have studied and memorised will fade in its grandeur, but what remains are the virtues of tenacity, heroism and a strong sense of justice, among many, that St. Xavier’s imbues in every Xavierian. After your formation in St. Xavier’s, much is expected of you. You are no longer a student, but a Xaverian leader and the solution to many a challenge that plague the society and country as a whole.</p>

                    <p>Welcome to Leapfrog College of Engineering family.</br></br>

                        God bless you.</br>

                        Mr. Sisir Joshi</br>
                        Principal    </br>
                        Leapfrog College of Engineering   </br>
                        Maitighar, Kathmandu 

                    </p>    
                </div>

            </div>
            <div id='recent_news_event' class="span4">
                <div class="span4">
                    <div class="accordion " id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading accordian-head ">
                                <a class="accordion-toggle events-head accordion-style" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                    <h6>Recent News & Events <i class="icon-plus-sign pull-right"></i></h6>
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">

                                    <li><a href="#">Sports Week</a></li>
                                    <li><a href="#">Prize Distribution</a></li>
                                    <li><a href="#">First Terminal Exam</a></li>
                                    <li><a href="#">Result Published</a></li>
                                    <li>
                                        <a href='#'>Tour</a>
                                        <a href='news_events.html' class='more-info pull-right'>More &raquo;</a>
                                    </li>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-group">

                            <div class="accordion-heading accordian-head">
                                <a class="accordion-toggle events-head" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    <h6>About Us <i class="icon-plus-sign pull-right"></i></h6>
                                </a>
                            </div>

                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">

                                    <li><p>Leapfrog College of Engineering, Kathmandu, is an educational institution of higher learning established in 2013 and managed by Leapfrog Technologies. Jesuits began their work in Nepal in 2010 with the opening of leapfrog Technologies, Kopundole, followed by leapfrog College of Engineering, Kopundole and Leapfrog College of Engineering, Deonia. </p></li>
                                    <li><a href='about_us.html' target="_blank" class='more-info pull-right'>More &raquo;</a>
                                </div>
                            </div>

                        </div>


                        <div class="accordion-group">
                            <div class="accordion-heading accordian-head">
                                <a class="accordion-toggle event-head" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                    <h6>Our Mission<i class="icon-plus-sign pull-right"></i></h6>
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">

                                    <li>A passion for excellence</li>
                                    <li>Compassionate commitment </li>
                                    <li>Innovative Spirit </li>
                                    <li>Ability to accept risks and challenges </li>
                                    <li>Competence </li>
                                    <li>Creativity  </li>


                                </div>
                            </div>
                        </div>


                    </div>
                    <div>
                        <h5>Contact Information</h5>
                        <hr>
                        <div id="contact-info">
                            <p>
                                Leapfrog College of Engineering
                            </p>
                            <p>
                                Kupandol, Lalitpur 
                            </p>
                            <p>
                                www.lfcoe.com
                            </p>

                            <p>
                                www.info@lfcoe.com 
                            </p>

                            <p>
                                +977-01-5534403,5534404 
                            </p>     

                            <p>
                                Notice Board No.: 1618014221365 
                            </p>
                            <p>
                                GPO: 1234 
                            </p>
                        </div>


                    </div>

                </div>

            </div>

        </div>    
    </div>

    <!-- footer -->
    <footer>
        <small>&COPY; LEAPFROG COLLEGE OF ENGINEERING</small>
    </footer>

    <!-- close footer-->

</body>


</html>
