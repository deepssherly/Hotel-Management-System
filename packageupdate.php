<?php
include('config.php');
if(isset($_GET['user_id'])){
    $id_to_update = mysqli_real_escape_string($conn, $_GET['user_id']);
}
if(isset($_POST['update'])){
    if(empty($_POST['name']) && empty($_POST['email'])  && empty($_POST['phone']) && empty($_POST['checkin']) && empty($_POST['checkout']) && empty($_POST['pack']) && empty($_POST['address']) && empty($_POST['noofadults']) && empty($_POST['noofchildren'])){
        $errors['other']="Fill all the required fields";
    }
    else{
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $address=mysqli_real_escape_string($conn,$_POST['address']);
        $pack=mysqli_real_escape_string($conn,$_POST['pack']);
        $checkin=mysqli_real_escape_string($conn,$_POST['checkin']);
        $checkout=mysqli_real_escape_string($conn,$_POST['checkout']);
        $noofadults=mysqli_real_escape_string($conn,$_POST['noofadults']);
        $noofchildren=mysqli_real_escape_string($conn,$_POST['noofchildren']);
    }
    $id_to_update = mysqli_real_escape_string($conn, $_GET['user_id']);
    $query="update package set name='$name',email='$email',phone='$phone',address='$address',checkin='$checkin',checkout='$checkout',pack='$pack',noofadults='$noofadults',noofchildren='$noofchildren' where id='$id_to_update'";
    if(mysqli_query($conn,$query)){
        header("Location: home.php");
    }
    else{
        echo mysqli_error($conn);
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
        <div class="col container s10 m8 l6 offset-s1 offset-m2 offset-l3">
            <div class="card z-depth-5  #ffebee red lighten-5">
                <div class="card-content">
                    <div class="card-title brown-text center"><b>UPDATE BOOKING</b></div>
                    <div class="row">
                    <form action= <?php echo "packageupdate.php?user_id=".$id_to_update;?> method="POST" class="col s10 m8 l6 offset-s1 offset-m2 offset-l3">
                            <div class="row">
                                <div class="input-field">
                                    <input type="text" placeholder="Name" name="name">
                                    <label for="name" class="active brown-text"><strong>Name</strong></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="tel" placeholder="Phone no" name="phone">
                                    <label for="phn" class="active brown-text"><strong>Phone no</strong></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="email" placeholder="Email Id" name="email">
                                    <label for="email" class="active brown-text"><strong>Email Id</strong></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <textarea id="address" class="materialize-textarea" placeholder="Address" name="address"></textarea>
                                    <label for="address" class="active brown-text"><strong>Address</strong></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <label for="dropdown" class="active brown-text"><strong>Choose your preferred packages</strong></label>
                                    <select id="dropdown" class="dropdown-content" name="pack">
                                        <option value="" class="brown-text">Choose your option</option>
                                        <option value="package1-15000" data-icon="images/offer1.jpg">Package 1 -- &#8377;15000</option>
                                        <option value="package2-20000" data-icon="images/offer2.jpg">Package 2 -- &#8377;20000</option>
                                        <option value="package3-35000" data-icon="images/offer3.jpg">Package 3 -- &#8377;35000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="date" placeholder="Arrival date" name="checkin">
                                    <label for="date" class="active brown-text"><strong>Check-In Date</strong></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="date" id="date" name="checkout">
                                    <label for="date" class="active brown-text"><strong>Check-Out Date</strong></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="text" id="num" name="noofadults" placeholder="No of Adults">
                                    <label for="num" class="active brown-text"><strong>No of Adults</strong></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="text" id="num" name="noofchildren" placeholder="No of Children">
                                    <label for="num" class="active brown-text"><strong>No of Children</strong></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <textarea id="msg" class="materialize-textarea" placeholder="Any Special Request"></textarea>
                                    <label for="msg" class="active brown-text"><strong>Special Request if any</strong></label>
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
                            <input type="submit" value="submit" class="btn brown waves-effect waves-light z-depth-4 white-text" name="update">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright brown darken-1 ">
        <div class="container center-align white-text">
            <b>&copy;2021 The Grand Resort</b>
        </div>
    </div>
    <script src=" https://code.jquery.com/jquery-3.3.1.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js "></script>
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
        });
    </script>

</body>

</html>