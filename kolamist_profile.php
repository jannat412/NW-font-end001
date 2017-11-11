<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kolamist Profile</title>

        <link rel="stylesheet" href="css/kolamist_profile.css" />
    </head>
    <body>
        <?php
        require_once './header.php';
        ?>

        <div class="kolamist_profile_page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="profile_content">
                            <div class="cover_img">
                                <img src="images/coverpic.jpg" alt="Cover Image" class="img-responsive"/>
                            </div>
                            <div class="profile_pic">
                                <img src="images/bithihok.jpg" alt="Profile Picture" class="img-responsive"/>
                            </div>
                            <div class="ro--w">
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-content">
                                        <div class="caption likha">
                                            <h3>
                                                <a href="#">পোর্টাল বাড়ছে, জনমানুষের নিউজ কমছে</a>
                                            </h3>
                                            <div class="publice_date">
                                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>11-11-2017</span>
                                            </div>
                                            <p>বাংলাদেশে গণনা করা যাবে না এমন অসংখ্য অনলাইন নিউজপেপার আছে। এই হিসেবে এটা কি বলতে পারি যে, সংবাদমাধ্যমের উন্নয়ন</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-content">
                                        <div class="caption likha">
                                            <h3>
                                                <a href="#">পোর্টাল বাড়ছে, জনমানুষের নিউজ কমছে</a>
                                            </h3>
                                            <div class="publice_date">
                                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>11-11-2017</span>
                                            </div>
                                            <p>বাংলাদেশে গণনা করা যাবে না এমন অসংখ্য অনলাইন নিউজপেপার আছে। এই হিসেবে এটা কি বলতে পারি যে, সংবাদমাধ্যমের উন্নয়ন</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-content">
                                        <div class="caption likha">
                                            <h3>
                                                <a href="#">পোর্টাল বাড়ছে, জনমানুষের নিউজ কমছে</a>
                                            </h3>
                                            <div class="publice_date">
                                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>11-11-2017</span>
                                            </div>
                                            <p>বাংলাদেশে গণনা করা যাবে না এমন অসংখ্য অনলাইন নিউজপেপার আছে। এই হিসেবে এটা কি বলতে পারি যে, সংবাদমাধ্যমের উন্নয়ন</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <?php
                                require_once './kolamlist.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <?php
        require_once './footer.php';
        ?>
    </body>
</html>
