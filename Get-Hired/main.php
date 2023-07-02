<?php

session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: Login1.php");
  }

// echo $_SESSION["user_id"];    show which no. of user has logged in

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Ǥᗴ丅ᕼᎥᖇᗴᗪ</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="flex">
            <div class="logo">
                <h1 style="font-size: 25px; padding: 0px; margin:0px; color: white; font-weight: 600;">  Ǥᗴ丅<span style="color: #FFB320;">ᕼᎥᖇᗴᗪ</span></h1>
            </div>
            <nav>
                <button id="nav-toggle" class="hamburger-menu">
                    <span class="strip"></span>
                    <span class="strip"></span>
                    <span class="strip"></span>
                </button>
                <ul id="nav-menu-container">
                    <li><a href="#">Home</a></li>
                    <li><a href="#recent-games">Popular Jobs</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <li><a href="logout.php">Log Out</a></li>

                </ul>
            </nav>
            <a href="#" id="Contact-Us-button">Contact Us</a>
        </div>
    </header>

    <main>
        <div class="slider">
            <div class="slides">
              <!--radio buttons start-->
              <input type="radio" name="radio-btn" id="radio1">
              <input type="radio" name="radio-btn" id="radio2">
              <input type="radio" name="radio-btn" id="radio3">
              <input type="radio" name="radio-btn" id="radio4">
              <!--radio buttons end-->
              <!--slide images start-->
              <div class="slide first">
                <img src="g1.jpg" alt="">
              </div>
              <div class="slide">
                <img src="g2.jpg" alt="">
              </div>
              <div class="slide">
                <img src="g3.jpg" alt="">
              </div>
              <div class="slide">
                <img src="g4.jpg" alt="">
              </div>
              <!--slide images end-->
              <!--automatic navigation start-->
              <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
              </div>
              <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
              <label for="radio4" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
          </div>
          <!--image slider end-->
      
          <script type="text/javascript">
          var counter = 1;
          setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
              counter = 1;
            }
          }, 5000);
          </script>
      
        
        <section id="latest-news">
            <div class="flex">
                <h5 style="text-align: center; font-size: 22px;">Resume is the basic need..</h5>
                <div id="latest-news-container">
                    <div class="latest-news-item">
                        <span class="badge new"><a href="https://www.resume.com/">Resume Builder</a></span>
                    </div>
                </div>
            </div>
            
        </section>

        <section id="game-types-boxes">
            <div class="flex">
                <div class="box new">
                    <div class="shade"></div>
                    <span class="badge new">Google</span>
                    <div class="contents">
                        <h2 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">SOFTWARE ENGINEER</h2>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;"  >Experience : 0-3yrs<br>Salary : ₹ 10,50,000 - 15,50,000 P.A.<br>Location : Banglore </h5>
                        <a class="apply-btn" href="form.php" id="login-register-button" >Apply</a>
                    </div>
                </div>

                <div class="box strategy">
                    <div class="shade"></div>
                    <span class="badge strategy">Amazon</span>
                    <div class="contents">
                        <h2 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Full Stack web developer</h2>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;" >Experience : 0-3yrs<br>Salary : ₹ 7,00,000 - 10,50,000 P.A.<br>Location : Chandigarh </h5>
                        <a class="apply-btn" href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>

                <div class="box rpg">
                    <div class="shade"></div>
                    <span class="badge rpg">Uber</span>
                    <div class="contents">
                        <h2 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Android Developer</h2>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 3+ yrs<br>Salary : ₹ 2,00,000 - 3,25,000 P.A.<br>Location : Surat </h5>
                        <a class="apply-btn" href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>

                <div class="box racing">
                    <div class="shade"></div>
                    <span class="badge racing">Microsoft</span>
                    <div class="contents">
                        <h2 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px; padding-bottom: 35px;">ML Engineer</h2>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 2-5 yrs<br>Salary : ₹ 10,00,000 - 15,50,000 P.A.<br>Location : Hyderabadh </h5>
                        <a class="apply-btn" href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="recent-games">
            <h1>Popular Jobs</h1>
            <div class="flex">
                <div class="box">
                    <span class="badge new">Google</span>
                    <img src="g9.PNG" />
                    <div class="box-lower-section">
                        <h3 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Data Scientist</h3>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 4+ yrs<br>Salary : ₹ 8,60,000 - 16,50,000 P.A.<br>Location : Dehradun</h5>
                        <a href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge racing">Facebook</span>
                    <img src="g10.png" />
                    <div class="box-lower-section">
                        <h3 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Cloud Engineer</h3>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 3+ yrs<br>Salary : ₹ 8,70,000 - 13,50,000 P.A.<br>Location : Ranchi</h5>
                        <a href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge adventure">Microsoft</span>
                    <img src="g12.png" />
                    <div class="box-lower-section">
                        <h3 style="text-shadow: 0px 0px 12px black; font-family: 'Nunito', sans-serif; font-size: 31px;">Node JS Developer</h3>
                        <h5 style="position: relative; bottom: 10px; border: 2px solid black; border-radius: 10%; box-shadow: 10px 10px 20px -5px black; padding: 10px; font-size: 18px;">Experience : 1+ yrs<br>Salary : ₹ 5,00,000 - 9,50,000 P.A.<br>Location : Mumbai</h5>
                        <a href="form.php" id="login-register-button">Apply</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="tournaments">
            <div class="flex">
                <span class="badge tournaments">Why Both love us </span>
                <div class="box">
                    <span class="badge premium-tournament">Job Seekers</span>
                    <div class="tournaments-image"> 
                    </div>
                    <div class="tournaments-content">
                        <div><label>* </label> <strong>Unique jobs at startups and tech companies you can't find anywhere else..</strong></div>
                        <div><label>* </label> <strong>Everything you need to know to job search - including seeing salary and stock options upfront when looking..</strong></div>
                        <div><label>* </label> <strong>Connect directly with founders at top startups - no third party recruiters allowed..</strong></div>
                        
                    </div>
                </div>

                <div class="box">
                    <span class="badge premium-tournament">Job recruiters</span>
                    <div class="tournaments-image">
                    </div>
                    <div class="tournaments-content">
                        <div><label>* </label> <strong>Popular online job portal..</strong></div>
                        <div><label>* </label> <strong>8 million responsive and startup-ready candidates, with all the information you need to vet them..</strong></div>
                        <div><label>* </label> <strong>Everything you need to kickstart your recruiting - get job posts, company branding, and HR tools set up within 10 minutes, for free..</strong></div>                    
                        
                    </div>
                </div>
            </div>
        </section>
        
        <section id="recent-reviews">
            <h1>Recent Reviews</h1>
            <div class="flex">
                <div class="box">
                    <span class="rating-badge gold">9.8</span>
                    <div class="recent-reviews-image">
                        <img src="t1.jpg">
                    </div>
                    <div>
                        <h4>Deepak Kumar</h4>

                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge purple">9.5</span>
                    <div class="recent-reviews-image">
                        <img src="t2.jpg">
                    </div>
                    <div>
                        <h4>Anant Dev Pandey</h4>
                        
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge green">9.4</span>
                    <div class="recent-reviews-image">
                        <img src="t3.jpg" style="height: 360px;"/>
                    </div>
                    <div>
                        <h4>Prateek Sharma</h4>
                        
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge violet">9.7</span>
                    <div class="recent-reviews-image">
                        <img src="t4.jpg" style="height: 360px;" />
                    </div>
                    <div>
                        <h4>Diksha Bhardwaj</h4>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="team-wrapper"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-light">
                        <div class="section-title">
                            <h2>Our Team</h2>
                            <p>The best teamwork comes from men who are working independently toward one goal in unison..</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
    
                    <!-- Our Team item start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <div class="item-image">
                                <img src="team-member1.jpg" alt="" width="100%" height="395px">
                            </div>
                            <div class="item-meta">
                                <h3 class="item-title">Aman Singh Negi</h3>
                                <h6 class="item-position">20BCS9380</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Our Team item end -->
    
                    <!-- Our Team item start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <div class="item-image">
                                <img src="team-member2.jpg" alt="" width="100%">
                            </div>
                            <div class="item-meta">
                                <h3 class="item-title">Kunwar Vabhav Mishra</h3>
                                <h6 class="item-position">20BCS9361</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Our Team item end -->
    
                    <!-- Our Team item start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <div class="item-image">
                                <img src="team-member4.jpg" alt="" width="100%" height="395px">
                            </div>
                            <div class="item-meta">
                                <h3 class="item-title">Nagendra Singh</h3>
                                <h6 class="item-position">20BCS9395</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Our Team item end -->
    
                    <!-- Our Team item start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="team-item">
                            <div class="item-image">
                                <img src="team-member3.jpg" alt="" width="100%" height="395px">
                            </div>
                            <div class="item-meta">
                                <h3 class="item-title">Keshav</h3>
                                <h6 class="item-position">20BCS9369</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Our Team item end -->
    
                </div>
            </div>
        </section>
        
    
        <!-------- Bootstrap Bundle Js-------->
        <script src="bootstrap.bundle.min.js"></script>
    </main>

    <footer style="width: 100%; background: rgba(0,0,0,0.9);">
        <div class="flex">
            <small>Copyright &copy; 2021 All rights reserved </small>
            <p style="margin: 0px; padding: 0px; position: relative; bottom: 0px;">Contact Us - <span> <a href="#" style="color: #E92159;">hiredget8@gamil.com </a></span> </p>
        </div>
    </footer>
</body>
</html>