<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .carousel {
            height: 480px !important;
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
    <section>
        <div class="carousel carousel-slider" data-indicators="true">
            <a class="carousel-item" href="#one!"><img src="images/imag4.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="images/imag3.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="images/img3.jpg"></a>
            <a class="carousel-item" href="#four!"><img src="images/imag2.jpg"></a>
            <a class="carousel-item" href="#five!"><img src="images/img1.jpg"></a>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="brown-text center"><b>GALLERY</b></h2>
            <div class="row">
                <div class="col s12 m6 l4">
                    <img src="images/img1.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4">
                    <img src="images/img2.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4">
                    <img src="images/img3.jpg" class="card materialboxed" width="320" height="300">
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l4">
                    <img src="images/double.jpg " class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4">
                    <img src="images/deluxe.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4">
                    <img src="images/botique.jpg" class="card materialboxed" width="320" height="300">
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l4">
                    <img src="images/single.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4 ">
                    <img src="images/cottage.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4 ">
                    <img src="images/luxury.jpg" class="card materialboxed" width="320" height="300">
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l4">
                    <img src="images/img4.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4">
                    <img src="images/img5.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4 ">
                    <img src="images/imag1.jpg" class="card materialboxed" width="320" height="300">
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l4">
                    <img src="images/triple.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4 ">
                    <img src="images/imag2.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4 ">
                    <img src="images/imag3.jpg" class="card materialboxed" width="320" height="300">
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l4">
                    <img src="images/garden.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4 ">
                    <img src="images/swimming.jpg" class="card materialboxed" width="320" height="300">
                </div>
                <div class="col s12 m6 l4">
                    <img src="images/swim.jpg" class="card materialboxed" width="320" height="300">
                </div>
            </div>
        </div>
    </section>
    <div class="footer-copyright brown darken-1">
        <div class="container center-align white-text">
            <b>&copy;2021 The Grand Resort</b><br>
            <b>Made with by Deepthi Sherly J</b>
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
            }, 1500);
            $('.materialboxed').materialbox();
        });
    </script>

</body>

</html>