<?php
include('config.php');
if (isset($_GET['user_id'])) {
    $id =  mysqli_real_escape_string($conn, $_GET["user_id"]);
    $sql = "SELECT * FROM book WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking Payment</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/payment.css">
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
                    <a href="hom.php"><b>HOME</b></a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="parallax-container">
        <div class="parallax">
            <img src="images/pay.jpg" class="responsive-img"> 
        </div>
    </div>
    <div class="card container center z-depth-4">
    <br>
        <div class="card-title">
            <h4 class="brown-text center"><i><b>THE GRAND RESORT</b></i></h4><hr>
            <h5 class="center brown-text"><strong>ROOM BOOKING DETAILS</strong></h5>
            <hr>
        </div>
        <div class="card-content center">
            <?php $rv=explode('-',$user['room']);?>
            <p class="container left-align"><strong>Id </strong>:<?php echo htmlspecialchars($user['id']);?>
                <br><strong>Name </strong>: <?php echo htmlspecialchars($user['name']); ?>
                <br><strong>Phone No</strong>: <?php echo htmlspecialchars($user['phone']); ?>
                <br><strong>Email Id</strong>: <?php echo htmlspecialchars($user['email']); ?>
                <br><strong>Address</strong>: <?php echo htmlspecialchars($user['address']); ?>
                <br><strong>Room Booked</strong>: <?php echo $rv[0]; ?>
                <br><strong>Arrival Date</strong>: <?php echo htmlspecialchars($user['checkin']); ?>
                <br><strong>Depature Date</strong>: <?php echo htmlspecialchars($user['checkout']); ?>
                <br><strong>No.of.Adults</strong>: <?php echo htmlspecialchars($user['noofadults']); ?>
                <br><strong>No.of.Children</strong>: <?php echo htmlspecialchars($user['noofchildren']); ?>
                <br><strong>Amount</strong>: <?php echo $rv[1]; ?>
                <br><strong>Booked at</strong>: <?php echo htmlspecialchars($user['booked_at'] )?>
            </p>
        </div>
        <div class="card-action">
        <div class="red-text">Check your details and proceed for transaction.</div>
        <br>
            <form class="center"><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HJ2OohGtgU9VfX" async></script></form>
        </div>
        <br>
    </div>
        <script src=" https://code.jquery.com/jquery-3.3.1.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js "></script>
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
            $('.parallax').parallax();
            $('#modal1').modal();
            $('#modal2').modal();
        });
    </script>
</body>
</html>