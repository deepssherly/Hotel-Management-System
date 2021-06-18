<?php
include('config.php');
$name=$email=$phone=$address=$checkin=$checkout=$room=$noofadults=$noofchildren='';
$errors=array('name'=>'','email'=>'','phone'=>'','address'=>'','other'=>'');
if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $errors['name']="Enter the name field";
    }
    else{
        $name=$_POST['name'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
            $errors['name']="Name must contain only alphabets ans spaces";
        }
    }
    if(empty($_POST['email'])){
        $errors['email']="Enter the email field";
    }
    else{
        $email=$_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']= "Enter a valid email address";
        }
    }
    if(empty($_POST['phone'])){
        $errors['phone']="Enter the phone number";
    }
    else{
        $phone=$_POST['phone'];
    }
    if(empty($_POST['address'])){
        $errors['address']="Enter the address field";
    }
    else{
        $address=$_POST['address'];
    }
    if(empty($_POST['checkin']) && empty($_POST['checkout']) && empty($_POST['room']) && empty($_POST['address']) && empty($_POST['noofadults']) && empty($_POST['noofchildren'])){
        $errors['other']="Fill all the required fields";
    }
    else{
        $room=$_POST['room'];
        $checkin=$_POST['checkin'];
        $checkout=$_POST['checkout'];
        $address=$_POST['address'];
        $noofadults=$_POST['noofadults'];
        $noofchildren=$_POST['noofchildren'];
    }
    $query = "insert into book(name,email,phone,room,checkin,checkout,address,noofadults,noofchildren) values('$name','$email','$phone','$room','$checkin','$checkout','$address','$noofadults','$noofchildren')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo mysqli_error($conn);
    }
    $rv=explode('-',$room);
    $to =$email;
    $subject = "Your Booking Details at The Grand Resort";
    $txt ="THE GRAND RESORT"."\n"."Room Booking Details"."\n"."Name : ".$name."\n"."Phone No : ".$phone."\n"."Email Id: ".$email."\n"."Address : ".$address."\n"."Room Booked : ".$rv[0]."\n".
    "Arrival Date :  ".$checkin."\n".
    "Depature Date : ".$checkout."\n".
    "No.of.Adults : ".$noofadults."\n".
    "No.of.Children : ".$noofchildren."\n".
    "Amount : ".$rv[1]."\n"."You have successfully submitted your booking details!!"."\n"."You can further proceed for the payment!!"."\n"."Payment option can be viewed under the reserved section!!"."\n"."Thank you!!";
    mail($to,$subject,$txt);
    header('Location: home.php');
  
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/booking.css">
</head>

<body>
    <header>
        <nav class="nav-wrapper brown lighten-1">
            <a href="#" class="brand-logo "><b>THE GRAND RESORT</b></a>
            <a href="#" class="sidenav-trigger" data-target="link"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="home.php"><b>HOME</b></a>
                </li>
            </ul>
            <ul id="link" class="sidenav">
                <li>
                    <a href="home.php"><b>HOME</b></a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="parallax-container">
        <div class="parallax">
            <img src="images/hotel1.jpg" class="responsive-img"> </div>
    </div>
    <div class="row">
        <h5 class="brown-text center"><strong>BOOK YOUR STAY AND ENJOY AMAZING FACILITIES</strong></h5>
        <div class="col container s10 m8 l6 offset-s1 offset-m2 offset-l3">
            <div class="card z-depth-5  #ffebee red lighten-5">
                <div class="card-content">
                    <div class="card-title brown-text center"><b>BOOKING FORM</b></div>
                    <div class="row">
                        <form action="roombooking.php" method="POST" class="col s10 m8 l6 offset-s1 offset-m2 offset-l3">
                            <div class="row">
                                <div class="input-field">
                                    <input type="text" placeholder="Name" name="name">
                                    <label for="name" class="active brown-text"><strong>Name</strong></label>
                                    <div class="red-text"><?php echo $errors['name'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="tel" placeholder="Phone no" name="phone">
                                    <label for="phn" class="active brown-text"><strong>Phone no</strong></label>
                                    <div class="red-text"><?php echo $errors['phone'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="email" placeholder="Email Id" name="email">
                                    <label for="email" class="active brown-text"><strong>Email Id</strong></label>
                                    <div class="red-text"><?php echo $errors['email'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <textarea id="address" class="materialize-textarea" placeholder="Address" name="address"></textarea>
                                    <label for="address" class="active brown-text"><strong>Address</strong></label>
                                    <div class="red-text"><?php echo $errors['address'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <label for="dropdown" class="active brown-text"><strong>Choose your preferred rooms</strong></label>
                                    <select id="dropdown" class="dropdown-content" name="room">
                                        <option value="" class="brown-text">Choose your option</option>
                                        <option value="single-3200" data-icon="images/single.jpg">Single -- &#8377;3200</option>
                                        <option value="double-3800" data-icon="images/double.jpg">Double -- &#8377;3800</option>
                                        <option value="triple-4500" data-icon="images/triple.jpg">Triple -- &#8377;4500</option>
                                        <option value="luxury-5000" data-icon="images/luxury.jpg">Luxury -- &#8377;5000</option>
                                        <option value="botique-5500" data-icon="images/botique.jpg">Botique -- &#8377;5500</option>
                                        <option value="deluxe-6500" data-icon="images/deluxe.jpg">Deluxe -- &#8377;6500</option>
                                        <option value="cottage-8000" data-icon="images/cottage.jpg">Cottage -- &#8377;8000</option>
                                    </select>
                                    <div class="red-text"><?php echo $errors['other'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="date" placeholder="Arrival date" name="checkin">
                                    <label for="date" class="active brown-text"><strong>Check-In Date</strong></label>
                                    <div class="red-text"><?php echo $errors['other'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="date" id="date" name="checkout">
                                    <label for="date" class="active brown-text"><strong>Check-Out Date</strong></label>
                                    <div class="red-text"><?php echo $errors['other'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="text" id="num" name="noofadults" placeholder="No of Adults">
                                    <label for="num" class="active brown-text"><strong>No of Adults</strong></label>
                                    <div class="red-text"><?php echo $errors['other'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="text" id="num" name="noofchildren" placeholder="No of Children">
                                    <label for="num" class="active brown-text"><strong>No of Children</strong></label>
                                    <div class="red-text"><?php echo $errors['other'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <textarea id="msg" class="materialize-textarea" placeholder="Any Special Request"></textarea>
                                    <label for="msg" class="active brown-text"><strong>Special Request if any</strong></label>
                                    <div class="red-text"><?php echo $errors['other'];?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <div class="switch">
                                        <label class="brown-text">Do you want any complimentary food?&nbsp;&nbsp;No<input type="checkbox"><span class="lever"></span>Yes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <div class="check">
                                        <label>
                                            <input type="checkbox"/>
                                            <span class="brown-text"><strong>I agree to the terms and conditions.</strong></span>
                                          </label>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                            <a href="#roombooked" class=""><input type="submit" value="submit" class="btn brown waves-effect waves-light z-depth-4 white-text" name="submit"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright brown darken-1">
        <div class="container center-align white-text">
            <b>&copy;2021 The Grand Resort</b>
        </div>
    </div>
    <div class="modal" id="roombooked">
        <div class="modal-content">
            <h4>Room Booked Successfully!!</h4>
        </div>
        <div class="modal-footer">
            <a href="home.php" class="modal-close btn brown waves-effect waves-light">Okay</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
            $('.carousel').carousel();
            setInterval(function() {
                $('.carousel').carousel('next');
            }, 2000);
            $('.dropdown-trigger').dropdown();
            $('select').formSelect();
            $('.parallax').parallax();
            $('.modal').modal();
        });
    </script>

</body>
</html>