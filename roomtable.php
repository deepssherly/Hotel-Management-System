<?php
include('config.php');
$query="select * from book";
$res = mysqli_query($conn, $query);
$records = mysqli_fetch_all($res, MYSQLI_ASSOC);
if(isset($_POST['delete'])){
    $id_to_delete=mysqli_real_escape_string($conn,$_POST['id_to_delete']);
    $sql="delete from book where id=$id_to_delete";
    if(mysqli_query($conn,$sql)){
        header('Location: home.php');
    }
    else{
        echo "error".mysqli_error($conn);
    }
    header('Location: home.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking History</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/table.css">
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
            <img src="images/booking.jpg" class="responsive-img"> </div>
    </div>
    <div>
        <table class="responsive-table highlight z-depth-5 centered #fce4ec pink lighten-5 striped bordered">
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>NAME</th>
                    <th>EMAIL ID</th>
                    <th>PHONE NO</th>
                    <th>ROOM BOOKED</th>
                    <th>CHECK-IN DATE</th>
                    <th>CHECK-OUT DATE</th>
                    <th>COST</th>
                    <th>BOOKED AT</th>
                    <th>TRANSACTION</th>
                    <th>DETAILS</th>
                    <th>UPDATE</th>
                    <th>CANCEL</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($records as $record):?>
                    <?php $rv=explode('-',$record['room']); ?>
                    <tr>
                        <td><?php echo $record['id'];?></td>
                        <td><?php echo $record['name'];?></td>
                        <td><?php echo $record['email'];?></td>
                        <td><?php echo $record['phone'];?></td>
                        <td><?php echo $rv[0];?></td>
                        <td><?php echo $record['checkin'];?></td>
                        <td><?php echo $record['checkout'];?></td>
                        <td><?php echo $rv[1];?></td>
                        <td><?php echo $record['booked_at'];?></td>
                        <td><a href=<?php echo "roompayment.php?user_id=".$record['id'] ?> class="btn-small red waves-effect waves-light z-depth-3" id="paybtn">PAY NOW</a></td>
                        <td><a href="#modal2" class="btn-small red waves-effect waves-light z-depth-3 modal-trigger">DETAILS</a></td>
                        <td><a href=<?php echo "roomupdate.php?user_id=".$record['id'] ?> class="btn-small red waves-effect waves-light z-depth-3">UPDATE BOOKING</a></td>
                        <td><a href="#modal1" class="btn-small red waves-effect waves-light z-depth-3 modal-trigger">CANCEL BOOKING</a></td>
                    </tr>
                    
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center brown-text"><strong>CONFIRMATION</strong></h4>
            <hr>
            <h6 class="center">Do you really want to cancel booking?</h6>
        </div>
        <div class="modal-footer">
            <form action="roomtable.php" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $record['id']?>"> 
                <input type="submit" name="delete" value="delete" class="modal-close waves-effect waves-green btn-small brown">
            </form>
        </div>
    </div>
    <div id="modal2" class="modal">
        <div class="modal-content">
        <h4 class="brown-text center"><i><b>THE GRAND RESORT</b></i></h4><hr>
            <h5 class="center brown-text"><strong>ROOM BOOKING DETAILS</strong></h5>
            <hr>
            <p class="container left-align"><strong>Id </strong>: <?php echo $record['id']; ?>
                <br><strong>Name </strong>: <?php echo $record['name']; ?>
                <br><strong>Phone No</strong>: <?php echo $record['phone']; ?>
                <br><strong>Email Id</strong>: <?php echo $record['email']; ?>
                <br><strong>Address</strong>: <?php echo $record['address']; ?>
                <br><strong>Room Booked</strong>: <?php echo $rv[0]; ?>
                <br><strong>Arrival Date</strong>: <?php echo $record['checkin']; ?>
                <br><strong>Depature Date</strong>: <?php echo $record['checkout']; ?>
                <br><strong>No.of.Adults</strong>: <?php echo $record['noofadults']; ?>
                <br><strong>No.of.Children</strong>: <?php echo $record['noofchildren']; ?>
                <br><strong>Amount</strong>: <?php echo $rv[1]; ?>
                <br><strong>Booked at</strong>: <?php echo $record['booked_at'] ?>
            </p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-small brown"><strong>Close</strong></a>
        </div>
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