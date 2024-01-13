<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
</head>

<body>

<?php
// Start the session
session_start();

if(!isset($_SESSION['email'])){
    header("location:login.php");
}

// Set session variables
$ver = $_SESSION['email'];
?>


    <!-- menu start -->
    <div class="navbar">
        <button class="menu-icon" onclick="toggleNav()">☰</button>
        <div> <img src="img/logo.png" alt="" class="nevlogo"> </div>
        <div class="nevmenu">
            <ul>
                <li><a href="#">Data Science</a></li>
                <li><a href="#">Full Stack Development</a></li>
                <li><a href="#">Full Stack Development</a></li>
                <li><a href="#">B. Tech in CS & AI</a></li>
                <li><a href="#">Newton Edge</a></li>
                <li><a href="#">Hire From Us</a></li>
                <li><a href="#">More <i class="fa fa-angle-down"></i></a></li>
            </ul>
        </div>
        <div class="nevbtn">
            <a href="logout.php" class="sbtm">Log Out</a>
        </div>
    </div>
    <!-- menu end -->

    <!-- heading section start -->

    <div class="heading">
        <div class="con" style="margin-top: 100px;">
            <p class="headingtxt">LEARN WHAT THE INDUSTRY DEMANDS</p>
            <h1>Unlock your dream tech job</h1>
            <p class="headingtxt">Al-powered, industry-oriented courses in software development and data science to land the tech job of your dreams.</p>

            <button class="hdbtn">Get Started</button>
            <div class="rating">
                <div>
                    <img src="img/img01.png" alt="" class="ratingicon">
                    <img src="img/img02.png" alt="" class="ratingicon">
                    <img src="img/img03.png" alt="" class="ratingicon">
                    <img src="img/img04.png" alt="" class="ratingicon">
                    <img src="img/img05.png" alt="" class="ratingicon">
                </div>
                <div class="review12">
                    <div class="row">
                        <img src="img/5-star.jpg" alt="" style="height: 30px; mix-blend-mode: multiply;">
                        <p>4.9</p>
                    </div>
                    <div class="review">
                        <p class="ratingview">from 1000+ reviews</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="con">
            <div class="con1">
                <form action="#" class="hform">
                    <p class="formheading"> Form </p>
                    <label style="padding: 0px 2px !important;">Full Name<span style>*</span></label> <br>
                    <input type="text" id="name" name="name" value="" required placeholder="Name" class="input">
                    <br>
                    <label style="padding: 0px 2px !important;"> Mobile no.<span style>*</span></label> <br>
                    <input type="number" id="M no." name="Mno." value="" required placeholder="Mobile" class="input">
                    <br>
                    <label style="padding: 0px 2px !important;"> Email <span style>*</span></label> <br>
                    <input type="text" id="mail" name="Em" value="" required placeholder="Email ID" class="input">
                    <br>
                    <label style="padding: 0px 2px !important;"> massage </label> <br>
                    <input type="textaria" id="mail" name="massage" value="" required placeholder="massage" class="ftextaria">
                    <br>
                    <button class="btnform"> submit </button>
                </form>
            </div>
        </div>
    </div>
    <!-- heading section end -->

    <!--2nd section -->

    <div class="row2">
        <div class="row2heading">
            <h2>How will you get hire in 30 Days</h2>
            <p>Enim eu sad tncidunt option how to</p>
        </div>
        <div class="row2itam">
            <div class="row2section">
                <div class="row2num">
                    <h2>01</h2>
                </div>
                <div>
                    <h2 class="row2h2">Get Registerd</h2>
                    <p>Register in a just a view quick step to help us identify the best opportunity for you</p>
                </div>
            </div>

            <div class="row2section">
                <div class="row2num">
                    <h2>02</h2>
                </div>
                <div>
                    <h2 class="row2h2">Take the rest</h2>
                    <p>Register in a just a view quick step to help us identify the best opportunity for you</p>
                </div>
            </div>

            <div class="row2section">
                <div class="row2num">
                    <h2>03</h2>
                </div>
                <div>
                    <h2 class="row2h2">Sign the agreement</h2>
                    <p>Register in a just a view quick step to help us identify the best opportunity for you</p>
                </div>
            </div>

            <div class="row2section">
                <div class="row2num">
                    <h2>04</h2>
                </div>
                <div>
                    <h2 class="row2h2">Get placed</h2>
                    <p>Register in a just a view quick step to help us identify the best opportunity for you</p>
                </div>
            </div>
        </div>
        <div class="row2btn">
            <button class="row2btn1">Fill The Form</button>
        </div>
    </div>
    <!--2nd section -->

    <!--3rd section -->

    <div class="row3">
        <div>
            <h2>1500+ Companies have hired</h2>
            <h2>NxtWave® learners</h2>
        </div>
        <div>
            <img class="alignnone" src="img/1.png" alt="" />
            <img class="alignnone" src="img/2.png" alt="" />
            <img class="alignnone" src="img/3.png" alt="" />
            <img class="alignnone" src="img/4.png" alt="" />
            <img class="alignnone" src="img/5.png" alt="" />
            <img class="alignnone" src="img/6.png" alt="" />
            <img class="alignnone" src="img/7.png" alt="" />
            <img class="alignnone" src="img/8.png" alt="" />
            <img class="alignnone" src="img/9.png" alt="" />
            <img class="alignnone" src="img/10.png" alt="" />
            <img class="alignnone" src="img/11.png" alt="" />
            <img class="alignnone" src="img/12.png" alt="" />
            <img class="alignnone" src="img/13.png" alt="" />
            <img class="alignnone" src="img/14.png" alt="" />
            <img class="alignnone" src="img/8.png" alt="" />
            <img class="alignnone" src="img/9.png" alt="" />
            <img class="alignnone" src="img/10.png" alt="" />
            <img class="alignnone" src="img/11.png" alt="" />
            <img class="alignnone" src="img/12.png" alt="" />
            <img class="alignnone" src="img/13.png" alt="" />
            <img class="alignnone" src="img/14.png" alt="" />

        </div>
    </div>

    <!--3rd section -->

    <!--4th section -->

    <div class="row4">
        <div>
            <h2>Featured Courses</h2>
            <p>The most hands-on, practical, and intensive coding-led courses to fulfill your ambitions</p>
        </div>
        <div>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">All</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Certifications</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Master's Degree</button>

            </div>

            <div id="London" class="tabcontent">
                <div class="tabrow">
                    <div class="tabint">
                        <h3>Certification in Full Stack Data Science and Al 01</h3>
                        <p>Become a job-ready Data Science professional in 30 weeks. Join the largest tech community in India. Pay only after you get a job above 5 LPA</p>
                        <div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#" class="rowlink"> 6 months</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-graduation-cap"></i>
                                    <a href="#" class="rowlink"> For Final year students & Graduates</a>
                                </div>
                            </div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-laptop"></i>
                                    <a href="#" class="rowlink"> Part-time online live classes</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-trophy"></i>
                                    <a href="#" class="rowlink">100% Job Assurance</a>
                                </div>
                            </div>
                        </div>
                        <button class="row4btn">Explore Course</button>
                    </div>

                    <div class="tabint">
                        <h3>Certification in Full Stack Data Science and Al 02</h3>
                        <p>Become a job-ready Data Science professional in 30 weeks. Join the largest tech community in India. Pay only after you get a job above 5 LPA</p>
                        <div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#" class="rowlink"> 6 months</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-graduation-cap"></i>
                                    <a href="#" class="rowlink"> For Final year students & Graduates</a>
                                </div>
                            </div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-laptop"></i>
                                    <a href="#" class="rowlink"> Part-time online live classes</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-trophy"></i>
                                    <a href="#" class="rowlink">100% Job Assurance</a>
                                </div>
                            </div>
                        </div>
                        <button class="row4btn">Explore Course</button>
                    </div>

                    <div class="tabint">
                        <h3>Certification in Full Stack Data Science and Al 03</h3>
                        <p>Become a job-ready Data Science professional in 30 weeks. Join the largest tech community in India. Pay only after you get a job above 5 LPA</p>
                        <div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#" class="rowlink"> 6 months</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-graduation-cap"></i>
                                    <a href="#" class="rowlink"> For Final year students & Graduates</a>
                                </div>
                            </div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-laptop"></i>
                                    <a href="#" class="rowlink"> Part-time online live classes</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-trophy"></i>
                                    <a href="#" class="rowlink">100% Job Assurance</a>
                                </div>
                            </div>
                        </div>
                        <button class="row4btn">Explore Course</button>
                    </div>

                </div>
            </div>

            <div id="Paris" class="tabcontent">
                <div class="tabrow">
                    <div class="tabint">
                        <h3>Certification in Full Stack Data Science and Al 04</h3>
                        <p>Become a job-ready Data Science professional in 30 weeks. Join the largest tech community in India. Pay only after you get a job above 5 LPA</p>
                        <div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#" class="rowlink"> 6 months</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-graduation-cap"></i>
                                    <a href="#" class="rowlink"> For Final year students & Graduates</a>
                                </div>
                            </div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-laptop"></i>
                                    <a href="#" class="rowlink"> Part-time online live classes</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-trophy"></i>
                                    <a href="#" class="rowlink">100% Job Assurance</a>
                                </div>
                            </div>
                        </div>
                        <button class="row4btn">Explore Course</button>
                    </div>

                    <div class="tabint">
                        <h3>Certification in Full Stack Data Science and Al 05</h3>
                        <p>Become a job-ready Data Science professional in 30 weeks. Join the largest tech community in India. Pay only after you get a job above 5 LPA</p>
                        <div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#" class="rowlink"> 6 months</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-graduation-cap"></i>
                                    <a href="#" class="rowlink"> For Final year students & Graduates</a>
                                </div>
                            </div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-laptop"></i>
                                    <a href="#" class="rowlink"> Part-time online live classes</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-trophy"></i>
                                    <a href="#" class="rowlink">100% Job Assurance</a>
                                </div>
                            </div>
                        </div>
                        <button class="row4btn">Explore Course</button>
                    </div>

                    <div class="tabint">
                        <h3>Certification in Full Stack Data Science and Al 06</h3>
                        <p>Become a job-ready Data Science professional in 30 weeks. Join the largest tech community in India. Pay only after you get a job above 5 LPA</p>
                        <div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#" class="rowlink"> 6 months</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-graduation-cap"></i>
                                    <a href="#" class="rowlink"> For Final year students & Graduates</a>
                                </div>
                            </div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-laptop"></i>
                                    <a href="#" class="rowlink"> Part-time online live classes</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-trophy"></i>
                                    <a href="#" class="rowlink">100% Job Assurance</a>
                                </div>
                            </div>
                        </div>
                        <button class="row4btn">Explore Course</button>
                    </div>

                </div>
            </div>

            <div id="Tokyo" class="tabcontent">
                <div class="tabrow">
                    <div class="tabint">
                        <h3>Certification in Full Stack Data Science and Al 07</h3>
                        <p>Become a job-ready Data Science professional in 30 weeks. Join the largest tech community in India. Pay only after you get a job above 5 LPA</p>
                        <div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#" class="rowlink"> 6 months</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-graduation-cap"></i>
                                    <a href="#" class="rowlink"> For Final year students & Graduates</a>
                                </div>
                            </div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-laptop"></i>
                                    <a href="#" class="rowlink"> Part-time online live classes</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-trophy"></i>
                                    <a href="#" class="rowlink">100% Job Assurance</a>
                                </div>
                            </div>
                        </div>
                        <button class="row4btn">Explore Course</button>
                    </div>

                    <div class="tabint">
                        <h3>Certification in Full Stack Data Science and Al 08</h3>
                        <p>Become a job-ready Data Science professional in 30 weeks. Join the largest tech community in India. Pay only after you get a job above 5 LPA</p>
                        <div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#" class="rowlink"> 6 months</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-graduation-cap"></i>
                                    <a href="#" class="rowlink"> For Final year students & Graduates</a>
                                </div>
                            </div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-laptop"></i>
                                    <a href="#" class="rowlink"> Part-time online live classes</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-trophy"></i>
                                    <a href="#" class="rowlink">100% Job Assurance</a>
                                </div>
                            </div>
                        </div>
                        <button class="row4btn">Explore Course</button>
                    </div>

                    <div class="tabint">
                        <h3>Certification in Full Stack Data Science and Al 09</h3>
                        <p>Become a job-ready Data Science professional in 30 weeks. Join the largest tech community in India. Pay only after you get a job above 5 LPA</p>
                        <div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#" class="rowlink"> 6 months</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-graduation-cap"></i>
                                    <a href="#" class="rowlink"> For Final year students & Graduates</a>
                                </div>
                            </div>
                            <div class="row4link">
                                <div class="row4link2">
                                    <i class="fa fa-laptop"></i>
                                    <a href="#" class="rowlink"> Part-time online live classes</a>
                                </div>
                                <div class="row4link2">
                                    <i class="fa fa-trophy"></i>
                                    <a href="#" class="rowlink">100% Job Assurance</a>
                                </div>
                            </div>
                        </div>
                        <button class="row4btn">Explore Course</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--4th section -->

    <!--5th section -->
    <div class="row5">
        <h2>Your recipe for a rockstar career</h2>
        <div class="row5sec1">
            <div class="row5sec2">
                <img src="img/section5.png" alt="" class="row5img">
            </div>
            <div class="row5sec2">
                <div class="row5sec3">
                    <div>
                        <h3>Personal guidance from mentors</h3>
                        <p>Get groomed by experienced software developers who are working in the top companies.</p>
                    </div>
                    <div>
                        <h3>Personal guidance from mentors</h3>
                        <p>Get groomed by experienced software developers who are working in the top companies.</p>
                    </div>
                </div>
                <div class="row5sec3">
                    <div>
                        <h3>Personal guidance from mentors</h3>
                        <p>Get groomed by experienced software developers who are working in the top companies.</p>
                    </div>
                    <div>
                        <h3>Personal guidance from mentors</h3>
                        <p>Get groomed by experienced software developers who are working in the top companies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--5th section -->

    <!--6th section -->

    <div class="row6">
        <p>THE NEWTON FAMILY</p>
        <h2>Be a part of the new-age tech generation</h2>
        <div class="row6sec3">
            <div class="row6sec4">
                <div class="row6sec1">
                    <div>
                        <img src="img/img01.png" alt="" class="row6img">
                    </div>
                    <div class="row6sec2">
                        <h3 class="row6h3">Vini Chimania</h3>
                        <img src="img/review.png" alt="" class="row6img2">
                    </div>
                </div>
                <div>
                    <p class="row6p">Thanks to Newton School, I found my dream job as an Associate Software Engineer at Neustar. The Full Stack Development course was challenging and fun, with great mock interviews and mentor sessions. A must-try for anyone looking to
                        improve their skills!</p>
                </div>
            </div>


            <div class="row6sec4">
                <div class="row6sec1">
                    <div>
                        <img src="img/img01.png" alt="" class="row6img">
                    </div>
                    <div class="row6sec2">
                        <h3 class="row6h3">Vini Chimania</h3>
                        <img src="img/review.png" alt="" class="row6img2">
                    </div>
                </div>
                <div>
                    <p class="row6p">Thanks to Newton School, I found my dream job as an Associate Software Engineer at Neustar. The Full Stack Development course was challenging and fun, with great mock interviews and mentor sessions. A must-try for anyone looking to
                        improve their skills!</p>
                </div>
            </div>


            <div class="row6sec4">
                <div class="row6sec1">
                    <div>
                        <img src="img/img01.png" alt="" class="row6img">
                    </div>
                    <div class="row6sec2">
                        <h3 class="row6h3">Vini Chimania</h3>
                        <img src="img/review.png" alt="" class="row6img2">
                    </div>
                </div>
                <div>
                    <p class="row6p">Thanks to Newton School, I found my dream job as an Associate Software Engineer at Neustar. The Full Stack Development course was challenging and fun, with great mock interviews and mentor sessions. A must-try for anyone looking to
                        improve their skills!</p>
                </div>
            </div>

            <div class="row6sec4">
                <div class="row6sec1">
                    <div>
                        <img src="img/img01.png" alt="" class="row6img">
                    </div>
                    <div class="row6sec2">
                        <h3 class="row6h3">Vini Chimania</h3>
                        <img src="img/review.png" alt="" class="row6img2">
                    </div>
                </div>
                <div>
                    <p class="row6p">Thanks to Newton School, I found my dream job as an Associate Software Engineer at Neustar. The Full Stack Development course was challenging and fun, with great mock interviews and mentor sessions. A must-try for anyone looking to
                        improve their skills!</p>
                </div>
            </div>
        </div>


    </div>


    <!--6th section -->

    <!--7th section -->

    <div class="row7">
        <div>
            <h2>We've been in the news!</h2>
            <p>The media loves us, and more so, our students. Here are some of the clippings of our impactful media footprint.</p>
        </div>
        <div class="row7sec1">
            <img src="img/paper01.png" alt="" class="row7img">
            <img src="img/paper02.png" alt="" class="row7img">
            <img src="img/paper03.png" alt="" class="row7img">
            <img src="img/paper04.png" alt="" class="row7img">
        </div>

    </div>

    <!--7th section -->

    <!-- Footer -->

    <div class="footer">

        <div class="row8">
            <h2>Reach Us</h2>

            <a href="#" class="row8sec1"> <i class="fa fa-whatsapp"></i> 999-999-9999</a> <br> <br>
            <a href="#" class="row8sec1"> <i style="font-size:20px" class="fa">&#xf0e0;</i> abc@gmail.com</a>

        </div>
        <div class="row8">
            <h2>Quick Links</h2>
            <ul class="row8sec2">
                <li class="row8sec4"> <a href="#" class="row8sec3">Full Stack</a> </li>
                <li class="row8sec4"> <a href="#" class="row8sec3">Java</a> </li>
                <li class="row8sec4"> <a href="#" class="row8sec3">Python</a> </li>
                <li class="row8sec4"> <a href="#" class="row8sec3">Digital Marketing</a> </li>
                <li class="row8sec4"> <a href="#" class="row8sec3">Mern</a> </li>
                <li class="row8sec4"> <a href="#" class="row8sec3">Data Science</a> </li>
            </ul>
        </div>
        <div class="row8">
            <h2>Payment Methods</h2>
            <img src="img/payment.png" alt="" class="row8img">
        </div>

    </div>

    <!-- Footer -->




    <script>
        function toggleNav() {
            var navMenu = document.querySelector('.nevmenu');
            navMenu.classList.toggle('active');
        }
    </script>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Call the openCity function with the argument 'London' by default
        openCity({
            currentTarget: document.getElementById('defaultTabLink')
        }, 'London');
    </script>


</body>

</html>