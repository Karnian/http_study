<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ajouin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>아주인</title>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="./ajouin_main.html">Ajou-In</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./ajouin_class.html">Class <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Board</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="ajouin_notice.html">Notice</a>
                        <a class="dropdown-item" href="ajouin_free">Free</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <!--            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
                <a href="ajouin_join.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Join</a>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <!--            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
                <a href="ajouin_login.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">LogIn</a>
            </form>
        </div>
    </nav>
</div>
<div class="container" id = second_screen>
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>N0.1</h2>
            <p>professor NO.1
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
            <h2>NO.2</h2>
            <p>professor NO.2
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
            <h2>NO.3</h2>
            <p>professor NO.3
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
    </div>

    <hr>

</div>
<footer class="container">
    <p>© Company 2017-2018</p>
</footer>
</body>
</html>