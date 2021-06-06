<?php 
include('config.php');
session_start();
$username=$email=$password1=$password2="";
$errors=array('username'=>'','email'=>'','password1'=>'','password2'=>'');
if(isset($_POST['register'])){
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password1=mysqli_real_escape_string($conn,$_POST['password1']);
    $password2=mysqli_real_escape_string($conn,$_POST['password2']);
    if (empty($_POST['username'])) {
        $errors['username'] = "Please enter your username";
    }
    if (empty($_POST['password1'])) {
        $errors['password1'] = "Please enter your password";
    } else if (strlen($password1) < 5) {
        $errors['password1'] = "Password should be >=5 characters";
    }
    if($password1!=$password2){
        $errors['password2']="The two password does not match";

    }
    if(empty($_POST['email'])){
        $errors['email']="Enter the email field";
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']= "Enter a valid email address";
    }
    else{
        $sql = "insert into users(username,email,password) values ('$username','$email','$password1')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: login.php');
        } else {
            echo mysqli_error($conn);
        }
    }
}

?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-image: url("images/login.jpg");
            background-position: center;
            background-size: cover;
        }
        
        .row {
            margin-top: 3vw;
            margin-left: 14vw;
        }
        
        .input-field label {
            font-size: 18px;
            font-weight: 400;
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
                    <a href="index.php"><b>HOME</b></a>
                </li>
            </ul>
            <ul id="link" class="sidenav">
                <li>
                    <a href="index.php"><b>HOME</b></a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="row">
        <div class="col l3 m3 s12"></div>
        <div class="col l4 m6 s12">
                <div class="card-panel z-depth-5">
                    <h4 class="center brown-text"><b>REGISTER</b></h4><br>
                    <form action="register.php" method="POST">
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" placeholder="Name" name="username">
                            <label for="username" class="active brown-text"><strong>Name</strong></label>
                            <div class="red-text">
                                <?php echo $errors['username'];?>
                            </div>
                        </div>
                        <div class="input-field">
                        <i class="material-icons prefix">email</i>
                            <input type="email" placeholder="Phone no" name="email">
                            <label for="email" class="active brown-text"><strong>Email Id</strong></label>
                            <div class="red-text">
                                <?php echo $errors['email'];?>
                            </div>
                        </div>
                        <div class="input-field">
                        <i class="material-icons prefix">vpn_key</i>
                            <input type="password" placeholder="password" name="password1">
                            <label for="password1" class="active brown-text"><strong>Password</strong></label>
                            <div class="red-text">
                                <?php echo $errors['password1'];?>
                            </div>
                        </div>
                        <div class="input-field">
                        <i class="material-icons prefix">lock_open</i>
                            <input type="password" placeholder="password" name="password2">
                            <label for="password2" class="active brown-text"><strong>Confirm Password</strong></label>
                            <div class="red-text">
                                <?php echo $errors['password2'];?>
                            </div>
                        </div>
                    <p class="right">Already have an account? <a href="login.php" class="brown-text">login</a></p>
                    <input type="submit" name="register" value="register" class="btn brown waves-effect waves-light z-depth-3 left col s12">

                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>