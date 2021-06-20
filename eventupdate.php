<?php
include('config.php');
if(isset($_GET['user_id'])){
    $id_to_update = mysqli_real_escape_string($conn, $_GET['user_id']);
}
if(isset($_POST['update'])){
    if(empty($_POST['name']) && empty($_POST['email'])  && empty($_POST['phone']) && empty($_POST['eventname']) && empty($_POST['date']) && empty($_POST['time'])){
        $errors['other']="Fill all the required fields";
    }
    else{
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $eventname=mysqli_real_escape_string($conn,$_POST['eventname']);
        $date=mysqli_real_escape_string($conn,$_POST['date']);
        $time=mysqli_real_escape_string($conn,$_POST['time']);
    }
    $id_to_update = mysqli_real_escape_string($conn, $_GET['user_id']);
    $query="update event set name='$name',email='$email',phone='$phone',eventname='$eventname',date='$date',time='$time' where id='$id_to_update'";
    $res=mysqli_query($conn,$query);
    if($res){
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
    <title>Event Booking Update</title>
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
                    <form action= <?php echo "eventupdate.php?user_id=".$id_to_update;?> method="POST" class="col s10 m8 l6 offset-s1 offset-m2 offset-l3">
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
                                    <label for="dropdown" class="active brown-text"><strong>Choose your event</strong></label>
                                    <select id="dropdown" class="dropdown-content" name="eventname">
                                        <option value="" class="brown-text">Choose your option</option>
                                        <option value="weddings-50000" data-icon="images/wedding.jpg">Weddings -- &#8377;50000</option>
                                        <option value="meetings-20000" data-icon="images/meeting.jpg">Meetings -- &#8377;20000</option>
                                        <option value="parties-25000" data-icon="images/party.jpg">Parties -- &#8377;25000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input type="date" placeholder="date" name="date">
                                    <label for="date" class="active brown-text"><strong>Date</strong></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <label for="dropdown" class="active brown-text"><strong>Choose your preferred time</strong></label>
                                    <select id="dropdown" class="dropdown-content" name="time">
                                        <option value="" class="brown-text" disabled>Choose your option</option>
                                        <option value="day">Day</option>
                                        <option value="evening">Evening</option>
                                    </select>
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