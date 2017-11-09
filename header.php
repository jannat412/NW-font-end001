<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News Portal</title>

        <!-- Bootstrap v3.3.7 -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />

        <!----here css file link hrer --->
        <link rel="stylesheet" href="css/style.css" />
        <!--Font awesome link here-->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- jQuery link here-->
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>


        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="col-lg-12">
                <p id="demo" class="text-center"></p>
                <script>
                    document.getElementById("demo").innerHTML = Date();
                </script>
            </div>
            <div class="container main-content">
                <div class="row">
                    <div class="logo col-lg-6">
                        <a href="index.php">
                            <img src="images/logo3.png" alt="logo" class="img-responsive"/>
                        </a>
                    </div>
                    <div class="date col-lg-6">
                        <div class="add">

                        </div>
                    </div>
                </div>
            </div>
            <!--Navbar start here --->
            <nav class="navbar menu" data-spy = "affix" data-offset-top= "197">
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
                    <div class="collapse navbar-collapse menu-item" id="bs-example-navbar-collapse-1">
                        <ul class="nav nav-justified menu-item-content">
                            <li>
                                <a href="#" class="menu-items">নীড়পাতা</a>
                            </li>
                            <li>
                                <a href="#" class="menu-items">রাজনীতি</a>
                            </li>
                            <li>
                                <a href="#" class="menu-items">সারা বাংলা</a>
                            </li>
                            <li>
                                <a href="#" class="menu-items">অর্থনীতি</a>
                            </li>
                            <li>
                                <a href="#" class="menu-items">আন্তর্জাতিক</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle menu-items" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">খেলা<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdown-content">
                                    <li><a href="#">ক্রিকেট</a></li>
                                    <li><a href="#">ফুটবল</a></li>
                                    <li><a href="#">হকি</a></li>
                                    <li><a href="#">টেনিস</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle menu-items" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">বিনোদন<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdown-content">
                                    <li><a href="#">ঢালিউড</a></li>
                                    <li><a href="#">বলিউড</a></li>
                                    <li><a href="#">হলিউড</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle menu-items" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ফিচার<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdown-content">
                                    <li><a href="#">প্রবাস</a></li>
                                    <li><a href="#">ফেসবুক কথন</a></li>
                                    <li><a href="#">জীবনযাপন</a></li>
                                    <li><a href="#">নারী</a></li>
                                    <li><a href="#">সাহিত্য</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="menu-items">আজব নিউজ</a>
                            </li>
                            <li>
                                <a href="#" class="menu-items">কলাম</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                <script type="text/javascript">
                    $('.dropdown').hover(
                            function () {
                                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
                            },
                            function () {
                                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
                            }
                    );

                    $('.dropdown-menu').hover(
                            function () {
                                $(this).stop(true, true);
                            },
                            function () {
                                $(this).stop(true, true).delay(200).fadeOut();
                            }
                    );
                </script>
            </nav>
        </header>

