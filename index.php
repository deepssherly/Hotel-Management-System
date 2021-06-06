<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .carousel {
            height: 690px !important;
        }
        .section {
            padding-top: 2vw;
            padding-bottom: 2vw;
        }
        
        h2 {
            font-size: 45px;
            padding-bottom: 2vw;
        }
        
        h3 {
            font-size: 35px;
        }
        
        p {
            font-size: 20px;
            font-weight: 500;
        }
        
        span {
            font-size: 22px;
            font-weight: 600;
        }
        
        .card {
            transition: 0.5s;
        }
        
        .card:hover {
            transform: scale(1.05);
        }
        
        #review {
            width: 25%;
        }
        
        #tab {
            margin-left: 15vw;
        }
        #modal{
            width:40%;
            height:22%;
        }
    </style>
</head>

<body>
    <header>
        <nav class="nav-wrapper brown lighten-1">
            <a href="#" class="brand-logo "><b>THE GRAND RESORT</b></a>
            <a href="#" class="sidenav-trigger" data-target="link"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="#home"><b>HOME</b></a>
                </li>
                <li>
                    <a href="#category"><b>CATEGORIES</b></a>
                </li>
                <li>
                    <a href="#facility"><b>FACILITIES</b></a>
                </li>
                <li>
                    <a href="gallery.php"><b>GALLERY</b></a>
                </li>
                <li>
                    <a href="#modal" class="modal-trigger"><b>BOOKING</b></a>
                    <!--<ul id="dropdown" class="dropdown-content">
                        <li><a href="booking.php" class="brown-text">ROOM BOOKING</a></li>
                        <li class="divider"></li>
                        <li><a href="eventbooking.php" class="brown-text">EVENT BOOKING</a></li>
                        <li class="divider"></li>
                        <li><a href="packagebooking.php" class="brown-text">PACKAGE BOOKING</a></li>
                    </ul>-->
                </li>
                <!--<li>
                    <a href="#" class="dropdown-trigger" data-target="dropdown1"><b>RESERVED</b></a>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="mybooking.php" class="brown-text">ROOM BOOKING DETAILS</a></li>
                        <li class="divider"></li>
                        <li><a href="eventtable.php" class="brown-text">EVENT BOOKING DETAILS</a></li>
                        <li class="divider"></li>
                        <li><a href="packagetable.php" class="brown-text">PACKAGE BOOKING DETAILS</a></li>
                    </ul>
                </li>-->
                <li>
                    <a href="#about"><b>ABOUT</b></a>
                </li>
                <li>
                    <a href="#contact"><b>CONTACT</b></a>
                </li>
                <li>
                    <a href="login.php"><b>LOGIN</b></a>
                </li>
            </ul>
            <ul id="link" class="sidenav">
                <li>
                    <a href="home"><b>HOME</b></a>
                </li>
                <li>
                    <a href="#category"><b>CATEGORIES</b></a>
                </li>
                <li>
                    <a href="#facility"><b>FACILITIES</b></a>
                </li>
                <li>
                    <a href="gallery.php"><b>GALLERY</b></a>
                </li>
                <li>
                    <a href="booking.php"><b>BOOKING</b></a>
                </li>
                <li>
                    <a href="#about"><b>ABOUT</b></a>
                </li>
                <li>
                    <a href="#contact"><b>CONTACT</b></a>
                </li>
                <li>
                    <a href="login.php"><b>LOGIN</b></a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="modal" id="modal">
        <div class="modal-content">
            <h5 class="center">Please register and login for the booking process !!</h5>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close btn brown">Okay</a>
        </div>
    </div>
    <section>
        <div class="carousel carousel-slider" data-indicators="true">
            <a class="carousel-item" href="#one!"><img src="images/img4.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="images/img1.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="images/img2.jpg"></a>
            <a class="carousel-item" href="#four!"><img src="images/service.png"></a>
            <a class="carousel-item" href="#five!"><img src="images/img5.jpg"></a>
        </div>
    </section>
    <section class="container section scrollspy" id="category">
        <h2 class="brown-text center"><b>ACCOMMODATION</b></h2>
        <div class="row conatiner" id="tab">
            <div class="col s12">
                <ul class="tabs center">
                    <li class="tab col s3 brown-text"><a href="#rooms"><strong>ROOMS</strong></a></li>
                    <li class="tab col s3 brown-text"><a href="#events"><strong>EVENTS</strong></a></li>
                    <li class="tab col s3 brown-text"><a href="#offers"><strong>OFFERS & PACKAGES</strong></a></li>
                </ul>
            </div>
        </div>
        <div id="rooms">
            <div class="row">
                <div class="col s12 l4 ">
                    <img src="images/single.jpg " class="materialboxed" width="400" height="300">
                </div>
                <div class="col s12 l6 offset-l1">
                    <h3 class="brown-text text-darken-1"><b>SINGLE</b></h3>
                    <p>These provide you a single accommodation with balcony and provides a comfortable luxury feel.</p>
                    <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;3200</strong></a><br><br>
                    <a href="#modal" class="modal-trigger"><button class="btn brown waves-effect waves-light z-depth-3" type="submit" name="action">Book Now<i class="material-icons right">fast_forward</i></button></a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4 push-l7 offset-l1 ">
                    <img src="images/double.jpg" class="materialboxed" width="400" height="300">
                </div>
                <div class="col s12 l6 pull-l4 right-align ">
                    <h3 class="brown-text text-darken-1 "><b>DOUBLE</b></h3>
                    <p>These provide you a double accommodation with balcony and provides a comfortable luxury feel.
                    </p>
                    <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;3800</strong></a><br><br>
                    <a href="#modal" class="modal-trigger"><button class="btn brown waves-effect waves-light z-depth-3" type="submit" name="action">Book Now<i class="material-icons right">fast_forward</i></button></a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4">
                    <img src="images/triple.jpg" class="materialboxed" width="400" height="300">
                </div>
                <div class="col s12 l6 offset-l1 ">
                    <h3 class="brown-text text-darken-1 "><b>TRIPLE</b></h3>
                    <p>These provide you a triple accommodation with balcony and provides a comfortable luxury feel.</p>
                    <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;4500</strong></a><br><br>
                    <a href="#modal" class="modal-trigger"><button class="btn brown waves-effect waves-light z-depth-3" type="submit" name="action">Book Now<i class="material-icons right">fast_forward</i></button></a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4 push-l7 offset-l1">
                    <img src="images/luxury.jpg" class="materialboxed" width="400" height="300">
                </div>
                <div class="col s12 l6 pull-l4 right-align">
                    <h3 class="brown-text text-darken-1 "><b>LUXURY</b></h3>
                    <p>These premium rooms with a private verandah face the swimming pool and have two inter-connected rooms and a spacious living room perfect for families and friends.</p>
                    <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;5000</strong></a><br><br>
                    <a href="#modal" class="modal-trigger"><button class="btn brown waves-effect waves-light z-depth-3" type="submit" name="action">Book Now<i class="material-icons right">fast_forward</i></button></a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4">
                    <img src="images/botique.jpg" class="materialboxed" width="400" height="300">
                </div>
                <div class="col s12 l6 offset-l1">
                    <h3 class="brown-text text-darken-1 "><b>BOTIQUE</b></h3>
                    <p>These newly refurbished rooms are cute and compact to make your stay comfortable and memorable. They perfectly fuse the traditional with new age modern design. </p>
                    <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;5500</strong></a><br><br>
                    <a href="#modal" class="modal-trigger"><button class="btn brown waves-effect waves-light z-depth-3" type="submit" name="action">Book Now<i class="material-icons right">fast_forward</i></button></a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4 push-l7 offset-l1">
                    <img src="images/deluxe.jpg" class="materialboxed" width="400" height="300">
                </div>
                <div class="col s12 l6 pull-l4 right-align">
                    <h3 class="brown-text text-darken-1 "><b>DELUXE</b></h3>
                    <p>These 350 sq ft studio like rooms are the most spacious with wooden flooring will make your stay as cozy and comfortable. They come with a private balcony leaving you to gaze at the stars all night.</p>
                    <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;6500</strong></a><br><br>
                    <a href="#modal" class="modal-trigger"><button class="btn brown waves-effect waves-light z-depth-3" type="submit" name="action">Book Now<i class="material-icons right">fast_forward</i></button></a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4">
                    <img src="images/cottage.jpg" class="materialboxed" width="400" height="300">
                </div>
                <div class="col s12 l6 offset-l1">
                    <h3 class="brown-text text-darken-1 "><b>COTTAGE</b></h3>
                    <p>Cottage also offers many facilities to enrich your stay . Top features include free Wi-Fi in all rooms, 24-hour security, daily housekeeping, 24-hour front desk, Wi-Fi in public areas.</p>
                    <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;8000</strong></a><br><br>
                    <a href="#modal" class="modal-trigger"><button class="btn brown waves-effect waves-light z-depth-3" type="submit" name="action">Book Now<i class="material-icons right">fast_forward</i></button></a>
                </div>
            </div>
        </div>
        <div id="events">
            <div class="row">
                <div class="col s12 l4 center-align">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/wedding.jpg" width="420" height="250">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons">auto_awesome
                            </i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title brown-text"><strong>WEDDINGS</strong></span>
                            <hr>
                            <p>Looking for a venue for your special day?Look no Further!<br>For more details call us.
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;50000</strong></a><br><br>
                            <a href="#modal" class="modal-trigger btn brown waves-effect waves-light">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 center-align">
                    <div class="card ">
                        <div class="card-image">
                            <img src="images/meeting.jpg" width="420" height="250">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons ">auto_awesome
                            </i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title brown-text"><strong>MEETINGS</strong></span>
                            <hr>
                            <p>Looking to host a Corporate Gathering? Look no Further!<br>For more details call us.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;20000</strong></a><br><br>
                            <a href="#modal" class="modal-trigger btn brown waves-effect waves-light">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 center-align">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/party.jpg" width="420" height="250">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse \"><i class="material-icons">auto_awesome
                            </i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title brown-text"><strong>PARTIES</strong></span>
                            <hr>
                            <p>Looking for a Grand Party Venue? Look no further!<br>For more details call us.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;35000</strong></a><br><br>
                            <a href="#modal" class="modal-trigger btn brown waves-effect waves-light">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="offers">
            <div class="row">
                <h5 class="brown-text center"><strong>GRAB THE SPECIAL PACKAGES AND EXCITING OFFERS</strong></h5>
                <div class="col s12 l4 center-align">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/offer1.jpg" width="420" height="250">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons">auto_awesome
                            </i></a>
                        </div>
                        <div class="card-content ">
                            <span class="card-title brown-text"><strong>OFFER & PACKAGES</strong></span>
                            <hr>
                            <p>3 days accommodation<br>Double room catergory<br>Beach view balcony<br>Complimentary foods
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;15000</strong></a><br><br>
                            <a href="#modal" class="modal-trigger btn brown waves-effect waves-light">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 center-align ">
                    <div class="card ">
                        <div class="card-image ">
                            <img src="images/offer2.jpg" width="420" height="250">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons ">auto_awesome
                            </i></a>
                        </div>
                        <div class="card-content ">
                            <span class="card-title brown-text"><strong>OFFERS & PACKAGES</strong></span>
                            <hr>
                            <p>5 days accommodation<br>Luxury room category<br>Beach view balcony<br>Complimentary foods</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;20000</strong></a><br><br>
                            <a href="#modal" class="modal-trigger btn brown waves-effect waves-light">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 center-align">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/offer3.jpg" width="420" height="250">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse \"><i class="material-icons">auto_awesome
                            </i></a>
                        </div>
                        <div class="card-content ">
                            <span class="card-title brown-text"><strong>OFFERS & PACKAGES</strong></span>
                            <hr>
                            <p>10 days accommodation<br>Luxury+Deluxe room category<br>Beach view balcony<br>Complimentary foods</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-small brown z-depth-2"> <strong>COST : &#8377;35000</strong></a><br><br>
                            <a href="#modal" class="modal-trigger btn brown waves-effect waves-light">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=" parallax-container">
        <div class="parallax "><img src="images/hotel1.jpg " class="responsive-img "> </div>
    </div>
    <section class="section container scrollspy" id="facility">
        <h2 class="brown-text center "><b>FACILITIES</b></h2>
        <div class="row ">
            <div class="col s12 l4 ">
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">wifi</i></a>&nbsp;&nbsp;&nbsp;
                    <span>WiFi Access</span>
                </div> <br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">live_tv</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Cable TV</span>
                </div><br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">pool</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Swimming Pool</span>
                </div><br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">yard</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Garden Area</span>
                </div><br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">elevator</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Elevator/Lift</span>
                </div><br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">games</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Indoor & Outdoor Games</span>
                </div>
            </div>
            <div class="col s12 l5 offset-l3 ">
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">web</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Newspapers</span>
                </div> <br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">local_dining</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Complimentary Breakfast</span>
                </div><br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">local_drink</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Mineral Water</span>
                </div><br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">balcony</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Balcony</span>
                </div><br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">live_tv</i></a>&nbsp;&nbsp;&nbsp;
                    <span>CCTV</span>
                </div><br>
                <div>
                    <a href="# " class="btn-floating btn-large brown pulse "><i class=" material-icons left ">event</i></a>&nbsp;&nbsp;&nbsp;
                    <span>Events</span>
                </div>

            </div>
        </div>
    </section>
    <div class="parallax-container">
        <div class="parallax"><img src="images/hotel2.jpg" class="responsive-img"> </div>
    </div>
    <section class="section container scrollspy" id="about">
        <div class="row ">
            <h2 class="brown-text center "><b>ABOUT THE GRAND RESORT</b></h2>
            <div class="col s12 l4 ">
                <video width="500 " height="550 " autoplay loop>  
                    <source src="images/aboutvideo.mp4 " type="video/mp4"/>   
                 </video>
            </div>
            <div class="col s12 l6 offset-l2 ">
                <p>The GRAND RESORT provides you an amazing luzury facilities,offers and events. Year after year it has been an immovable symbol of national integrity where people from all races and background come together, as one, for wholesome family
                    entertainment.At The GRAND RESORT we are committed to delight our customers with a unique blend of education and entertainment, coupled by an unwavering dedication to world peace, family harmony and spiritual joy. We take great pleasure
                    to share with you the good news that various exciting and promising value additions are being offered by your favourite The GRAND RESORT, exclusively for your enjoyment.You will experience the same luxury as a hotel, yet in a homely
                    and private environment with your family or friends, while waking up to sounds of tropical birds and viewing the landscaped gardens, swimming pool and flowers from the villa windows.</p>
            </div>
        </div>
    </section>
    <div class="parallax-container">
        <div class="parallax"><img src="images/service.webp" class="responsive-img"> </div>
    </div>
    <section id="services" class="container">
        <h4 class="center brown-text"><strong>SERVICES WE PROVIDE...</strong></h4><br>
        <div class="row ">
            <div class="col s12 l4 center-align">
                <div class="card">
                    <div class="card-image">
                        <img src="images/service1.jpg">
                        <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons ">timer
                        </i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title brown-text"><strong>OUR SERVICES</strong></span>
                        <hr>
                        <p><i class="material-icons prefix">check_circle</i>
                            <span>24hrs working hours</span><br>
                            <i class="material-icons prefix">check_circle</i>
                            <span>24hrs room & event bookings</span><br>
                            <i class="material-icons prefix">check_circle</i>
                            <span>Safety Atmosphere</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 center-align">
                <div class="card">
                    <div class="card-image">
                        <img src="images/service1.jpg ">
                        <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons ">payment
                        </i></a>
                    </div>
                    <div class="card-content ">
                        <span class="card-title brown-text"><strong>OUR SERVICES</strong></span>
                        <hr>
                        <p><i class="material-icons prefix ">check_circle</i>
                            <span>Stay first,Pay later</span><br>
                            <i class="material-icons prefix ">check_circle</i>
                            <span>Decorated room, proper facilities</span><br>
                            <i class="material-icons prefix ">check_circle</i>
                            <span>Private Balcony</span></p>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 center-align">
                <div class="card">
                    <div class="card-image">
                        <img src="images/service1.jpg">
                        <a class="btn-floating halfway-fab waves-effect waves-light brown pulse \"><i class="material-icons">auto_awesome
                        </i></a>
                    </div>
                    <div class="card-content ">
                        <span class="card-title brown-text"><strong>OUR SERVICES</strong></span>
                        <hr>
                        <p><i class="material-icons prefix ">check_circle</i>
                            <span>Special Request Accepted</span><br>
                            <i class="material-icons prefix ">check_circle</i>
                            <span>Emergency Precautions available</span><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
        <h4 class="center brown-text"><strong>WHAT OTHER VISITORS EXPERIENCED...</strong></h4><br>
            <div class="row">
                <div class="col s16 m6 l3 center-align" id="review">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/review.png">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons ">star
                                </i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">
                                    REVIEW & RATING
                                </span>
                            <hr>
                            <p>Excellent Services and Best Facilities</p>
                            <p><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_half</i>
                        </div>
                    </div>
                </div>
                <div class="col s16 m6 l3 center-align" id="review">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/review.png">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons ">star
                                </i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">
                                    REVIEW & RATING
                                </span>
                            <hr>
                            <p>Worth to come again,Must visit!</p>
                            <p><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_border</i></p>
                        </div>
                    </div>
                </div>
                <div class="col s16 m6 l3 center-align" id="review">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/review.png">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons ">star
                                </i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">
                                    REVIEW & RATING
                                </span>
                            <hr>
                            <p>Pleasant Stay with Affordable packages</p>
                            <p><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_half</i></p>
                        </div>
                    </div>
                </div>
                <div class="col s16 m6 l3 center-align" id="review">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/review.png">
                            <a class="btn-floating halfway-fab waves-effect waves-light brown pulse "><i class="material-icons ">star
                                </i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">
                                    REVIEW & RATING
                                </span>
                            <hr>
                            <p>Value for money,Excellent stay</p>
                            <p><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_rate</i><i class="material-icons">star_border</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="parallax-container">
        <div class="parallax"><img src="images/hotel3.png" class="responsive-img"> </div>
    </div>
    <section class="section container scrollspy" id="contact">
        <div class="row">
            <div class="col s12 l5 ">
                <h3 class="brown-text ">Get In Touch</h3>
                <p>If you have any queries and service-related details and doubts,please free to drop a line.We'll get back to your queries and doubts as soon as possible.Stay connected!!</p>
            </div>
            <div class="col s12 l5 offset-l2">
                <form action=" ">
                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <input type="email" id="email">
                        <label for="email">Your Name..</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" id="email">
                        <label for="email ">Your Email..</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">message</i>
                        <input id="msg" class="materialize-textarea">
                        <label for="msg">Your Message</label>
                    </div>
                    <div class="input-field ">
                        <p>Services required...</p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in">
                                <span>Room Booking</span>
                        </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in">
                                <span>Event Booking</span>
                            </label>
                        </p>
                    </div>
                    <div class="input-field center">
                        <button class="btn brown">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="page-footer brown lighten-1">
        <div class="container">
            <div class="row">
                <div class="col s12 l6 ">
                    <h4><b>CONTACT INFO</b></h4><br>
                    <a href="# " class="btn-floating brown "><i class="material-icons ">location_on</i></a>&nbsp;&nbsp;
                    <span>Chennai,TamilNadu</span><br><br>
                    <a href="# " class="btn-floating brown "><i class="material-icons ">email</i></a>&nbsp;&nbsp;
                    <span>thegrandresort2021@gmail.com</span>
                </div>
                <div class="col s12 l4 offset-l2 ">
                    <h4><b>CONNECT US..</b></h4><br>
                    <ul>
                        <li>
                            <a href="# " class="btn-floating btn-small brown tooltipped pulse " data-tooltip="Facebook " data-position="padding-bottom ">
                                <i class="fab fa-facebook "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="# " class="btn-floating btn-small brown tooltipped pulse " data-tooltip="Twitter ">
                                <i class=" fab fa-twitter "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="# " class="btn-floating btn-small brown tooltipped pulse " data-tooltip="Twitter ">
                                <i class=" fab fa-linkedin "></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="# " class="btn-floating btn-small brown tooltipped pulse " data-tooltip="Instagram ">
                                <i class="fab fa-instagram "></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright brown darken-1">
            <div class="container center-align">
                <b>&copy;2021 The Grand Resort</b>
            </div>
        </div>
    </section>
    <script src=" https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
            $('.carousel').carousel();
            setInterval(function() {
                $('.carousel').carousel('next');
            }, 2000);
            $('.materialboxed').materialbox();
            $('.parallax').parallax();
            $('.tabs').tabs();
            $('.modal').modal();
            $('.datepicker').datepicker({
                disableWeekends: true
            });
            $('.tooltipped').tooltip();
            $('.scrollspy').scrollSpy();
            $(".dropdown-trigger").dropdown();
        });
    </script>
</body>

</html>