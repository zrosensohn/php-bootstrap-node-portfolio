<!doctype html>
<html lang="en" class="h-100"> <!--height 100 to make footer sticky-->
  <head>
    <title>Zachary Rosensohn Bootstrap Portfolio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
    </head>

  <body class="d-flex flex-column h-100 bg-light"> <!--height 100 to make footer sticky using flex properties-->

    <header class="border-bottom flex-shrink-0 bg-white">
        <div class="container">

            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="d-flex flex-grow-1">
                    <span class="w-100 d-md-none d-block"><!-- hidden spacer to center brand on mobile --></span>
                    <a class="navbar-brand-two" href="index.php">
                        <img src="img/zachary-rosensohn.jpg" class="img rounded-circle mr-3" height="40px" width="40px" alt="ZLR">
                    </a>
                    <a class="navbar-brand d-none d-sm-block" href="index.php">
                        Zachary Rosensohn
                    </a>

                    <div class="w-100 text-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link m-2 menu-item nav-active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="portfolio.php" class="nav-link m-2 menu-item">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link m-2 menu-item">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </header><!-- End Header / Navbar -->