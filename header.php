<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News Portal</title>

        <!-- Bootstrap v3.3.7 -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />

        <!----here css file link hrer --->
        <link rel="stylesheet" href="css/style.css" /><!-- jQuery link here-->
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>


        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="container main-content">
                <div class="row">
                    <div class="logo col-lg-6">
                        <a href="index.php">
                            <img src="images/logo2.png" alt="logo" />
                        </a>
                    </div>
                    <div class="date col-lg-6">
                        <p id="demo"></p>
                        <script>
                            document.getElementById("demo").innerHTML = Date();
                        </script>
                        <hr />
                        <div class="add">
                            <h1>Add</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--Navbar start here --->
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">নীড়পাতা<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">রাজনীতি</a></li>
                            <li><a href="#">সারা বাংলা</a></li>
                            <li><a href="#">অর্থনীতি</a></li>
                            <li><a href="#">আন্তর্জাতিক</a></li>
                            <li><a href="#">খেলা</a></li>
                            <li><a href="#">বিনোদন</a></li>
                            <li><a href="#">ফিচার</a></li>
                            <li><a href="#">আজব নিউজ</a></li>
                            <li><a href="#">কলাম</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>

