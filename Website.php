<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trek the Mountains Travel Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }
        
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        
        .jumbotron {
            background-color: #0000FF;
            color: #fff;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }
        
        .container-fluid {
            padding: 60px 50px;
        }
        
        .bg-grey {
            background-color: #f6f6f6;
        }
        
        .logo-small {
            color: #0000FF;
            font-size: 50px;
        }
        
        .logo {
            color: #0000FF;
            font-size: 200px;
        }
        
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        
        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        
        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
            color: #0000FF;
        }
        
        .carousel-indicators li {
            border-color: #0000FF;
        }
        
        .carousel-indicators li.active {
            background-color: #0000FF;
        }
        
        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        
        .item span {
            font-style: normal;
        }
        
        .panel {
            border: 1px solid #0000FF;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }
        
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }
        
        .panel-footer .btn:hover {
            border: 1px solid #0000FF;
            background-color: #fff !important;
            color: #0000FF;
        }
        
        .panel-heading {
            color: #fff !important;
            background-color: #0000FF !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        
        .panel-footer {
            background-color: white !important;
        }
        
        .panel-footer h3 {
            font-size: 32px;
        }
        
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        
        .panel-footer .btn {
            margin: 15px 0;
            background-color: #0000FF;
            color: #fff;
        }
        
        .navbar {
            margin-bottom: 0;
            background-color: #0000FF;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        
        .navbar li a,
        .navbar .navbar-brand {
            color: #fff !important;
        }
        
        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #0000FF !important;
            background-color: #fff !important;
        }
        
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        
        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #0000FF;
        }
        
        .slideanim {
            visibility: hidden;
        }
        
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        
        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }
        
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="#myPage">HOME</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#services">PRODUCTS AND SERVICES</a></li>
                    <li><a href="#portfolio">NEWS</a></li>
                    <li><a href="#pricing">PRICING</a></li>
                    <li><a href="#contact">CONTACTS</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>Trek the Himalayas Company</h1>
        <p>Enjoy the beauty of Nature</p>
        </form>
    </div>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>About Company Page</h2><br>
                <h4>
                    <Enjoy life. There is plenty of time to be dead./h4><br>
                        <p>We are highly acclaimed trekking company in the world, We provide best trekking experience you will ever have</p>
                        <!--<br><button class="btn btn-default btn-lg">Get in Touch</button>-->
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo"></span>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-globe logo slideanim"></span>
            </div>
            <div class="col-sm-8">
                <h2>Our Values</h2><br>
                <h4><strong>MISSION:</strong> We are a team that creates unique and socially responsible travel experiences, providing services beyond expectations. .
                </h4><br>
                <p><strong>VISION:</strong> To strengthen our position as the leading tourism company providing quality, creative, innovative, competitive and socially responsible services in the region.</p>
                <p><strong>OUR VALUES</strong> Excellence : We distinguish ourselves through our strong commitment to improve and to inspire. Responsibility: We commit to fulfil the needs of the persons, the interested parties and the environment through
                    our work, maximizing the company’s resources. Loyalty: We are reliable and trustworthy in all our relationships. Respect: We encourage harmony and warmth between persons, considering human diversity. Readiness: We are prompt, proactive,
                    careful and impassionate in complying with our tasks.
                </p>
            </div>
        </div>
    </div>

    <!-- Container (Services Section) -->
    <div id="services" class="container-fluid text-center">
        <h2>SERVICES</h2>
        <h4>What we offer</h4>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-off logo-small"></span>
                <h4>Food</h4>
                <p>We also provide Food during your Tour..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-heart logo-small"></span>
                <h4>Airlines</h4>
                <p>We provide the world class airline services from your place..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-lock logo-small"></span>
                <h4>Hotels</h4>
                <p>We arrange the five star hotels during your Trip..</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-leaf logo-small"></span>
                <h4>Package Tours</h4>
                <p>We also provide package tours, Please contact our customer care..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-certificate logo-small"></span>
                <h4>Personalized Service</h4>
                <p>We provide personalized service to our customers..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-wrench logo-small"></span>
                <h4 style="color:#303030;">Bungee Jumping and River Rafting</h4>
                <p>Wonderful experiences you will have through bungee jumping and river rafting..</p>
            </div>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div id="portfolio" class="container-fluid text-center bg-grey">
        <h2>NEWS</h2><br>
        <h4>What we are</h4>
        <div class="row text-center slideanim">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="paris.jpg" alt="Paris" width="400" height="300">
                    <p><strong>The New Yorker</strong></p>
                    <p>Trek the himalayas, The most admired company in the world</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="newyork.jpg" alt="New York" width="400" height="300">
                    <p><strong>Wall Street Journal</strong></p>
                    <p>Most Valued Company in terms of People satisfaction</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
                    <p><strong>Forbes</strong></p>
                    <p>Trek the himalayas, In Forbes top 10 highly respected companies</p>
                </div>
            </div>
        </div><br>

        <h2>What our customers say</h2>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>"This company is the best. I am so happy with the Services!"<br><span style="font-style:normal;">Mark zuckerberg, CEO, Facebook</span></h4>
                </div>
                <div class="item">
                    <h4>"One word... WOW!!"<br><span style="font-style:normal;">Bill gates, CEO, Microsoft Inc</span></h4>
                </div>
                <div class="item">
                    <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Di Caprio, Actor, Hollywood</span></h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Container (Pricing Section) -->
    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>Pricing</h2>
            <h4>Choose a payment plan that works for you</h4>
        </div>
        <div class="row slideanim">
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Basic</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>200</strong> Premium</p>
                        <p><strong>150</strong> Best in Class</p>
                        <p><strong>50</strong> Standard</p>
                        <p><strong>20</strong> Nominal</p>
                        <p><strong>Endless</strong> Economy</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$100</h3>
                        <h4>per month</h4>
                        <!--<button class="btn btn-lg">Sign Up</button>-->
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Pro</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>500</strong> Premium</p>
                        <p><strong>250</strong> Best in Class</p>
                        <p><strong>100</strong> Standard</p>
                        <p><strong>50</strong> Nominal</p>
                        <p><strong>Endless</strong> Economy</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$500</h3>
                        <h4>per month</h4>
                        <!--<button class="btn btn-lg">Sign Up</button>-->
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Premium</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>1000</strong> Premium</p>
                        <p><strong>500</strong> Best in Class</p>
                        <p><strong>250</strong> Standard</p>
                        <p><strong>100</strong> Nominal</p>
                        <p><strong>Endless</strong> Economy</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$1000</h3>
                        <h4>per month</h4>
                        <!--<button class="btn btn-lg">Sign Up</button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p>
                    <?php

$fh = fopen('contact.txt','r');
while ($line = fgets($fh)) {
  // <... Do your work with the line ...>
   echo($line);
}
fclose($fh);
?>
                        <p>
                            <!--<p><span class="glyphicon glyphicon-map-marker"></span> Himalayas, India</p>
                        <p><span class="glyphicon glyphicon-phone"></span> +43897492347</p>
                        <p><span class="glyphicon glyphicon-envelope"></span> myemail@himalayas.com</p>-->
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="googleMap" style="height:400px;width:100%;"></div>

    <!-- Add Google Maps -->
    <!--<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCe30oLPh7uH3vWngw96bjZ0HLPq51Byf8'></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkXqoIUFG1XUbMsV2KfsW2_wxt7m0SivY"></script>
    <script>
        var myCenter = new google.maps.LatLng(12.972442, 77.580643);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 12,
                scrollwheel: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>

    </footer>

    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function() {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>

</body>

</html>