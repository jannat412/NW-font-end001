<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once './header.php';
?>
<!--Breaking news part start here-->
<script type="text/javascript">
    $(document).ready(function () {

        $('#breaking_news').carousel({
            interval: 2000
        });
        var current = $('#playPauseButton').attr('data-status');
        $('#playPauseButton').click(function () {
            if (current == 'pause') {
                current = 'play';
                $('#breaking_news').carousel('cycle');
                $(this).children(".glyphicon").addClass("glyphicon-play");
                $(this).children(".glyphicon").removeClass("glyphicon-pause");
            } else {
                current = 'pause';
                $('#breaking_news').carousel('pause');
                $(this).children(".glyphicon").removeClass("glyphicon-play");
                $(this).children(".glyphicon").addClass("glyphicon-pause");
            }
        })
    });
</script>
<div class="breaking-news">
    <div class="container">
        <div class="row breaking_news-content"> 
            <div class="col-md-12">
                <div class="breaking_news_lbl">Breaking News</div>
                <div id="breaking_news" class="carousel slide breaking_news_slider" data-ride="carousel"> 
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="#">এবার প্যারাডাইজ পেপারস কেলেঙ্কারি</a>
                        </div>
                        <div class="item">
                            <a href="#">‘বিচারপতিরা না চাইলে তিনি কীভাবে বিচার করবেন?’</a> 
                        </div>
                        <div class="item">
                            <a href="#">স্পেন নয়, বেলজিয়ামে আত্মসমর্পণ করলেন পুজেমন</a> 
                        </div>
                        <div class="item">
                            <a href="#">‘বিচারপতিরা না চাইলে তিনি কীভাবে বিচার করবেন?’</a> 
                        </div>
                    </div> 
                </div>
                <div class="slider_controller">
                    <!-- Controls -->
                    <a class="left" href="#breaking_news" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="left" id="playPauseButton" href="javascript:void(0)" data-status="play">
                        <span class="glyphicon glyphicon glyphicon-play" aria-hidden="true"></span>
                        <span class="sr-only">Pause Play</span>
                    </a>
                    <a class="right" href="#breaking_news" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Breaking news part end here-->

<!-- News Content start here -->
<div class="news">
    <div class="container">
        <div class="row">
            <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ News Protal Left Part start here @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
            <div class="news-content col-lg-6">
                <div class="main-news">
                    <h2><a href="#">বন্য প্রাণী পাচারের তালিকায় বাংলাদেশ</a></h2>
                    <a href="#">
                        <img src="images/river.JPG" alt="" class="img-responsive" width="200"/>
                        আজ বৃহস্পতিবার জাতীয় সংসদ অধিবেশনে পয়েন্ট অব অর্ডারে গৃহকর বাড়ানো নিয়ে বক্তব্য দেন তিনজন সাংসদ।
                        রাজধানীতে গৃহকর বাড়ানোর বিষয়টি পুনর্বিবেচনা করার আহ্বান জানিয়ে বাণিজ্যমন্ত্রী তোফায়েল আহমেদ বলেন, গৃহকর হঠাৎ করে নয় গুণ বাড়ানো হলে তা মানুষ গ্রহণ করবে না। এতে বিরূপ প্রতিক্রিয়া দেখা দেবে।
                        বাণিজ্যমন্ত্রী বলেন, কর বাড়বে, এটা অস্বাভাবিক নয়। কিন্তু সংশ্লিষ্ট কর্তৃপক্ষ অনেক বছর ধরে কর বাড়ায়নি। এখন একসঙ্গে নয় গুণ বাড়ানো হলে মানুষ তা গ্রহণ করবে না। গৃহকর ৮ হাজার টাকা থেকে হঠাৎ করে ৭২ হাজার টাকা হলে ব্যাপক প্রতিক্রিয়া হবে। এটি পুনর্বিবেচনা করা প্রয়োজন।
                        তোফায়েল আহমেদ বলেন, ‘জনপ্রতিনিধি হিসেবে আমরা রাজনীতি করি। রাজনীতির কতগুলো সময় থাকে। সেই বিষয়টি তিন-চার বছর আগে করা যেত, সেটা যদি সরকারের শেষ সময় এসে করে, তাহলে প্রতিক্রিয়া হতে বাধ্য। মন্ত্রিসভার সদস্য হিসেবে আমার পক্ষে সবকিছু বলা সম্ভব নয়।’
                    </a>

                </div>
                <!-- Sokaridol birodhidol part start here-->
                <div class="sorkaridol-birodhidol">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sorkaridol-content">
                                <h1>
                                    <a href="#">সরকারী দল</a>
                                </h1>
                                <div class="thumbnail thumbnail-content">
                                    <a href="#">
                                        <img src="images/sekhhasina.jpg" alt="kader">
                                    </a>
                                    <div class="caption text">
                                        <h4><a href="#">খালেদা বিশৃঙ্খলা সৃষ্টির পাঁয়তারা করছেন: কাদের</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sorkaridol-content">
                                <h1>
                                    <a href="#">বিরোধী দল</a>
                                </h1>
                                <div class="thumbnail thumbnail-content">
                                    <a href="#">
                                        <img src="images/bnp.jpg" alt="bnp">
                                    </a>
                                    <div class="caption text">
                                        <h4><a href="#">কক্সবাজারে পৌঁছেছেন খালেদা জিয়া</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sokaridol birodhidol part end here-->
            </div>
            <!--@@@@@@@@@@@@@ News Protal Left Part end here @@@@@@@@@@@@@@@@-->



            <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  News Protal Right part start here $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
            <div class="col-lg-6">
                <div class="row">
                    <!-- Mot-Demot part start here -->
                    <div class="col-lg-6">
                        <div class="mot-dimot">
                            <h2 class="text-center"><a href="#">মত-দ্বিমত</a></h2>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                            <div class="m-contents">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="images/khaleda.jpg" alt="khaleda" class="img-circle"/>
                                    </a>
                                </div>
                                <div class="col-lg-8 m-contents-likha">
                                    <a href="#">রোহিঙ্গাদের দীর্ঘদিন রাখা সম্ভব নয়: খালেদা জিয়া</a>
                                </div>
                            </div>
                        </div>
                        <!--=======Sakhatkar part start here=========-->
                        <div class="sakhatkar">
                            <h2 class="text-center"><a href="#">সাক্ষাৎকার</a></h2>
                            <div class="sakhatar-details">
                                <hr />
                                <div class="sakhtatkar-content">
                                    <div class="col-lg-4">
                                        <a href="#">
                                            <img src="images/noname.jpg" alt="noname" class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 text">
                                        <a href="#">
                                            <h4>পোশাকশিল্পের মালিকেরা অস্বস্তিতে ছিলেন</h4>
                                        </a>
                                    </div>
                                </div>
                                <hr />
                                <div class="sakhtatkar-content">
                                    <div class="col-lg-4">
                                        <a href="#">
                                            <img src="images/noname.jpg" alt="noname" class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 text">
                                        <a href="#">
                                            <h4>পোশাকশিল্পের মালিকেরা অস্বস্তিতে ছিলেন</h4>
                                        </a>
                                    </div>
                                </div>
                                <hr />
                                <div class="sakhtatkar-content">
                                    <div class="col-lg-4">
                                        <a href="#">
                                            <img src="images/noname.jpg" alt="noname" class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 text">
                                        <a href="#">
                                            <h4>পোশাকশিল্পের মালিকেরা অস্বস্তিতে ছিলেন</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=======Sakhatkar part end here=========-->

                    <!--Sorborcho Sorbadhik Part start here-->
                    <div class="col-lg-6">
                        <?php
                        require_once './sorbocho_sorbadhik.php';
                        ?>
                    </div>
                    <!--Sorborcho Sorbadhik Part end here-->
                </div>
            </div>
            <!--$$$$$$$$$$$$$$$  News Protal Right part start here $$$$$$$$$$$$$$$$$$$$-->
        </div>
    </div>
</div>

<!-- Khali Part start here-->
<div class="khali-part">
    <div class="container">
        <div class="row">
            <div class="content">

            </div>
        </div>
    </div>
</div>
<!-- Khali Part end here-->

<!-- jatio news Part start here-->
<div class="jatio-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="jatio-content">
                    <h1><a href="#">জাতীয় খবর</a></h1>
                    <hr />
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tashkin.jpg" alt="taskin"></a>
                            <div class="caption">
                                <a href="#"><h4>নেইমার কেন ফ্রান্সের ফুটবলে, বুঝছেন না ক্যান্টোনা</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tree.jpg" alt="Tree"></a>
                            <div class="caption">
                                <a href="#"><h4>উত্তরা গণভবনের গাছ চুরি</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tashkin.jpg" alt="taskin"></a>
                            <div class="caption">
                                <a href="#"><h4>বিয়ে করলেন তাসকিন</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tree.jpg" alt="Tree"></a>
                            <div class="caption">
                                <a href="#"><h4>উত্তরা গণভবনের গাছ চুরি</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tashkin.jpg" alt="taskin"></a>
                            <div class="caption">
                                <a href="#"><h4>বিয়ে করলেন তাসকিন</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumbnail thumbnail-content">
                            <a href="#"><img src="images/tree.jpg" alt="Tree"></a>
                            <div class="caption">
                                <a href="#"><h4>উত্তরা গণভবনের গাছ চুরি</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- jatio news Part start here-->


            <!-- Facebook like box Part start here-->
            <div class="col-lg-6">
                <div class="row">
                    <div class="facebook-page">
                        <div id="fb-root"></div>
                        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10';
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                        <div style="width: 586px; padding: 0px 0px 0px 50px;" >
                            <div class="fb-page"
                                 data-href="https://www.facebook.com/facebook" 
                                 data-tabs="timeline"
                                 data-width="586" 
                                 data-height="380" 
                                 data-small-header="true" 
                                 data-adapt-container-width="true" 
                                 data-hide-cover="false" 
                                 data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/facebook" 
                                            class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/facebook">Facebook</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Archive part start here -->
                <div class="row">
                    <div class="archive">
                        <h1><a href="#">ফেসবুক কথন</a></h1>
                        <hr />
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail_content">
                                <a href="#"><img src="images/fb1.jpg" alt="facebo"></a>
                                <div class="caption">
                                    <h3>
                                        <a href="#">নতুন আইফোনে যা যা নতুন</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail_content">
                                <a href="#"><img src="images/fb1.jpg" alt="facebo"></a>
                                <div class="caption">
                                    <h3>
                                        <a href="#">নতুন আইফোনে যা যা নতুন</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail_content">
                                <a href="#"><img src="images/fb1.jpg" alt="facebo"></a>
                                <div class="caption">
                                    <h3>
                                        <a href="#">নতুন আইফোনে যা যা নতুন</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Archive part end here -->
            </div>
            <!-- Facebook like box Part end here-->
        </div>
    </div>
</div>

<!--Advertise part start here-->
<div class="advertise">
    <div class="container">
        <div class="row">
            <div class="add-content">

            </div>
        </div>
    </div>
</div>
<!--Advertise part end here-->


<!--Kheladhula part start here-->
<div class="kheladhula-part">
    <div class="container">
        <div class="row">
            <div class="kheladhula-total-contet">
                <a href="#"><h1>খেলাধুলা</h1></a>
                <hr />
                <!--Kheladhula First part start here-->
                <div class= "col-lg-6">
                    <div class="thumbnail kheladhula-thumbnail">
                        <a href="#"><img src="images/a.jpg" alt="Sachin"></a>
                        <div class="caption kheladhula-thumbnail-likha">
                            <a href="#"><h3>রান করার রহস্য—আপেল আর গোসল!</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="images/psg.jpg" alt="PSG">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="images/psg.jpg" alt="PSG">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</a></h4>
                        </div>
                    </div>
                </div>
                <!--Kheladhula First part end here-->

                <!--Kheladhula-2nd-part start here-->
                <div class="kheladhula-2nd-part">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/psg.jpg" alt="PSG"></a>
                                    <div class="caption">
                                        <a href="#"><h3>নেইমারকে ছাপিয়ে নায়ক যখন কুরজাওয়া</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/chan.jpg" alt="Chan"></a>
                                    <div class="caption">
                                        <a href="#"><h3>ঘরের মাঠে রোমার দাপুটে জয়</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/bolt.jpg" alt="Bolt"></a>
                                    <div class="caption">
                                        <a href="#"><h3>ব্যবসায়ী বোল্ট</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/mas.jpg" alt="Mash"></a>
                                    <div class="caption">
                                        <a href="#"><h3>‘...কারণ এরা দক্ষিণ আফ্রিকায় খেলেনি’</h3></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Kheladhula-2nd-part end here-->
        </div>
    </div>
</div>
<!--Kheladhula part end here-->

<!--Rajniti part start here-->
<div class="rajniti-part">
    <div class="container">
        <div class="row">
            <div class="rajniti-part-2">
                <div class="col-lg-8">
                    <div class="total-content">
                        <a href="#"><h1>রাজনীতি</h1></a>
                        <hr />
                        <div class="col-lg-8">
                            <a href="#">
                                <img class="main-image" src="images/mirjjafokrul.jpg" alt="Mirjja Fokrul" />
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <div class="rajniti-content">
                                <a href="#"><h2>কাল সারা দেশে বিএনপির বিক্ষোভ</h2></a>
                                <a href="#"><p>মির্জা ফখরুল ইসলাম আলমগীর বিএনপির চেয়ারপারসন খালেদা জিয়ার গাড়িবহরে হামলার প্রতিবাদে কর্মসূচি ঘোষণা করেছে দলটি। আগামীকাল বৃহস্পতিবার সারা দেশের জেলা সদরে এবং শনিবার ঢাকা মহানগরে সব থানায় বিক্ষোভ কর্মসূচির ডাক দিয়েছে বিএনপি</p></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
                                        <a href="#"><img src="images/rain.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <a href="#"><h3>এই বৃষ্টির দিনে</h3></a>
                                            <a href="#"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
                                        <a href="#"><img src="images/rain.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <a href="#"><h3>এই বৃষ্টির দিনে</h3></a>
                                            <a href="#"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
                                        <a href="#"><img src="images/rain.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <a href="#"><h3>এই বৃষ্টির দিনে</h3></a>
                                            <a href="#"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন </p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
            <!--Rajnit Thumbnail start here-->
            <div class="row">

            </div>
            <!--Rajnit Thumbnail end here-->
        </div>
    </div>
</div>
<!--Rajniti part end here-->


<!--Internation Orthoniti part start here-->
<div class="international">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="total-content">
                    <a href="#"><h1>আন্তর্জাতিক</h1></a>
                    <hr />
                    <div class="col-lg-4">
                        <div class="thumbnail thumbnail-contents">
                            <a href="#"><img src="images/suchi.jpg" alt="Suchi"></a>
                            <div class="caption thumbnail-caption">
                                <a href="#"><h3>রাখাইনে সু চির প্রথম পা</h3></a>
                                <a href="#"><p>মিয়ানমারের উত্তরাঞ্চলে সহিংসতাপূর্ণ রাখাইন রাজ্যে প্রথমবারের মতো গেলেন</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail thumbnail-contents">
                            <a href="#"><img src="images/osama.jpg" alt="Osama"></a>
                            <div class="caption thumbnail-caption">
                                <a href="#"><h3>লাদেনকে নিয়ে নথি</h3></a>
                                <a href="#"><p>ওসামা বিন লাদেন ২০১১ সালের ২ মে দিবাগত রাতে পাকিস্তানের </p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail thumbnail-contents">
                            <a href="#"><img src="images/india.jpg" alt="India"></a>
                            <div class="caption thumbnail-caption">
                                <a href="#"><h3>ভারতে জাতীয় খাবার </h3></a>
                                <a href="#"><p>ভারত ও বাংলাদেশে জনপ্রিয় খাবার খিচুড়ি। ভারতের পশ্চিমবঙ্গ,</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail thumbnail-contents">
                            <a href="#"><img src="images/suchi.jpg" alt="Suchi"></a>
                            <div class="caption thumbnail-caption">
                                <a href="#"><h3>রাখাইনে সু চির পা</h3></a>
                                <a href="#"><p>মিয়ানমারের উত্তরাঞ্চলে সহিংসতাপূর্ণ রাখাইন রাজ্যে প্রথমবারের মতো গেলেন</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail thumbnail-contents">
                            <a href="#"><img src="images/osama.jpg" alt="Osama"></a>
                            <div class="caption thumbnail-caption">
                                <a href="#"><h3>লাদেনকে নিয়ে নথি</h3></a>
                                <a href="#"><p>ওসামা বিন লাদেন ২০১১ সালের ২ মে দিবাগত রাতে পাকিস্তানের </p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail thumbnail-contents">
                            <a href="#"><img src="images/india.jpg" alt="India"></a>
                            <div class="caption thumbnail-caption">
                                <a href="#"><h3>ভারতে জাতীয় খাবার</h3></a>
                                <a href="#"><p>ভারত ও বাংলাদেশে জনপ্রিয় খাবার খিচুড়ি। ভারতের পশ্চিমবঙ্গ,</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Aourthoniti part start here-->
            <div class="aourthoniti">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="aourthoniti-total-content">
                            <a href="#"><h1>অর্থনীতি</h1></a>
                            <hr />
                            <div class="total-content-2">
                                <div class="col-lg-5">
                                    <a href="#">
                                        <img src="images/aourthonit1.jpg" alt="Apurthoniti" />
                                    </a>
                                </div>
                                <div class="col-lg-7">
                                    <div class="details">
                                        <a href="#"><h4>কর মেলা শুরু আজ</h4></a>
                                        <a href="#"><p>দেশব্যাপী আয়কর মেলা শুরু হচ্ছে আজ বুধবার। করদাতারা যাতে সহজে বার্ষিক কর বিবরণী জমা দিতে পারেন,।</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="total-content-2">
                                <div class="col-lg-5">
                                    <a href="#">
                                        <img src="images/aourthonit1.jpg" alt="Apurthoniti" />
                                    </a>
                                </div>
                                <div class="col-lg-7">
                                    <div class="details">
                                        <a href="#"><h4>কর মেলা শুরু আজ</h4></a>
                                        <a href="#"><p>দেশব্যাপী আয়কর মেলা শুরু হচ্ছে আজ বুধবার। করদাতারা যাতে সহজে বার্ষিক কর বিবরণী জমা দিতে পারেন,।</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="total-content-2">
                                <div class="col-lg-5">
                                    <a href="#">
                                        <img src="images/aourthonit1.jpg" alt="Apurthoniti" />
                                    </a>
                                </div>
                                <div class="col-lg-7">
                                    <div class="details">
                                        <a href="#"><h4>কর মেলা শুরু আজ</h4></a>
                                        <a href="#"><p>দেশব্যাপী আয়কর মেলা শুরু হচ্ছে আজ বুধবার। করদাতারা যাতে সহজে বার্ষিক কর বিবরণী জমা দিতে পারেন,।</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="total-content-2">
                                <div class="col-lg-5">
                                    <a href="#">
                                        <img src="images/aourthonit1.jpg" alt="Apurthoniti" />
                                    </a>
                                </div>
                                <div class="col-lg-7">
                                    <div class="details">
                                        <a href="#"><h4>কর মেলা শুরু আজ</h4></a>
                                        <a href="#"><p>দেশব্যাপী আয়কর মেলা শুরু হচ্ছে আজ বুধবার। করদাতারা যাতে সহজে বার্ষিক কর বিবরণী জমা দিতে পারেন,।</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Aourthoniti part end here-->
        </div>
    </div>
</div>
<!--Internation Orthoniti part end here-->


<!--Binodon part start here-->
<div class="kheladhula-part">
    <div class="container">
        <div class="row">
            <div class="kheladhula-total-contet">
                <a href="#"><h1>বিনোদন</h1></a>
                <hr />
                <!--Kheladhula First part start here-->
                <div class= "col-lg-6">
                    <div class="thumbnail kheladhula-thumbnail">
                        <a href="#"><img src="images/binodon1.jpg" alt="jesia"></a>
                        <div class="caption kheladhula-thumbnail-likha">
                            <a href="#"><h3>‘ফাইনাল ফোরটি’ থেকে বাদ জেসিয়া</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="images/salmankhan.jpg" alt="PSG">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">বিপাকে উর্বশী</a></h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="images/shakib.jpg" alt="PSG">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">ছেলেকে রেখে কলকাতায় অপু, শাকিব দেখেন তালা</a></h4>
                        </div>
                    </div>
                </div>
                <!--Kheladhula First part end here-->

                <!--Kheladhula-2nd-part start here-->
                <div class="kheladhula-2nd-part">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/jesia.jpg" alt="PSG"></a>
                                    <div class="caption">
                                        <a href="#"><h3>‘ফাইনাল ফোরটি’ থেকে বাদ জেসিয়া</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/habib.jpg" alt="Chan"></a>
                                    <div class="caption">
                                        <a href="#"><h3>‘সুরসম্রাটের হাত থেকে পুরস্কার পেলাম’</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/tilta.jpg" alt="Bolt"></a>
                                    <div class="caption">
                                        <a href="#"><h3>টিলডার কাছে ঢাকা এক স্মৃতিময় শহর</h3></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="thumbnail kheladhula-2nd-part-thumbnail">
                                    <a href="#"><img src="images/amisa.jpg" alt="Mash"></a>
                                    <div class="caption">
                                        <a href="#"><h3>খোলামেলা ছবি দিয়ে বিতর্কে আমিশা!’</h3></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Kheladhula-2nd-part end here-->
        </div>
    </div>
</div>
<!--Binodon part end here-->

<!--sikhha part start here-->
<div class="rajniti-part">
    <div class="container">
        <div class="row">
            <div class="rajniti-part-2">
                <div class="col-lg-9">
                    <div class="total-content">
                        <a href="#"><h1>সাহিত্য</h1></a>
                        <hr />
                        <div class="col-lg-8">
                            <a href="#">
                                <img class="main-image" src="images/sikhha.jpg" alt="Mirjja Fokrul" />
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <div class="rajniti-content">
                                <a href="#"><h2>ঢাকা বিশ্ববিদ্যালয়কে আর কত নিচে নামাব আমরা?</h2></a>
                                <a href="#"><p>অনেক পণ্ডিত ও বিদগ্ধজন ঢাকা বিশ্ববিদ্যালয়কে ‘বিশ্ববিদ্যালয়ের চেয়ে অধিক কিছু’ বলে থাকেন। কারণটি এই যে প্রতিষ্ঠার পর থেকে এ ভূখণ্ডে শিক্ষার বিস্তার, শি‌ক্ষিত মধ্যবিত্ত শ্রেণির বিকাশ ও বাঙালি জাতি গঠনে অবদান রাখার মধ্য দিয়ে ঢাকা বিশ্ববিদ্যালয় হয়ে ওঠে</p></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
                                        <a href="#"><img src="images/sikhha2.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <a href="#"><h3>এত ‘উচ্চশিক্ষিত’ মানুষের কাজ কী?</h3></a>
                                            <a href="#" class="details"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
                                        <a href="#"><img src="images/sikhha3.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <a href="#"><h3>মেডিকেল পারে, বিশ্ববিদ্যালয় পারে না!</h3></a>
                                            <a href="#" class="details"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail thumbnail-contents">
                                        <a href="#"><img src="images/sikhha4.jpg" alt="Rain"></a>
                                        <div class="caption thumbnail-caption">
                                            <a href="#"><h3> কলম ছেড়ে শাবল কেন?</h3></a>
                                            <a href="#" class="details"><p>নিম্নচাপের প্রভাবে টানা বৃষ্টি হচ্ছে বগুড়ায়। এর মধ্যেই জীবনের প্রয়োজনে ছাতা মাথায় কাজে বের হয়েছেন </p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">

                    </div>
                </div>
            </div>
            <!--Rajnit Thumbnail start here-->
            <div class="row">

            </div>
            <!--Rajnit Thumbnail end here-->
        </div>
    </div>
</div>
<!--sikhha part end here-->


<!--Technology Life-style part start here-->
<div class="technology-lifestyle">
    <div class="international">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="total-content">
                        <a href="#"><h1>তথ্যপ্রযুক্তি</h1></a>
                        <hr />
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech.jpg" alt="Suchi"></a>
                                <div class="caption thumbnail-caption">
                                    <a href="#"><h3>হোয়াটসঅ্যাপে আনসেন্ড</h3></a>
                                    <a href="#"><p>আনসেন্ড’ নামের বিশেষ একটি সুবিধা চালু করেছে খুদে বার্তা পাঠানোরপ।</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech2.jpg" alt="Osama"></a>
                                <div class="caption thumbnail-caption">
                                    <a href="#"><h3>‘সার্চ ইংলিশ’ গ্রুপ নিয়ে</h3></a>
                                    <a href="#"><p>ফেসবুকে বাংলাদেশভিত্তিক ইংরেজি শেখার গ্রুপ সার্চ ইংলিশকে নিয়ে একটি</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech3.jpg" alt="India"></a>
                                <div class="caption thumbnail-caption">
                                    <a href="#"><h3>পাঠাও গাড়িও পাঠাবে</h3></a>
                                    <a href="#"><p>এত দিন পাঠাও অ্যাপ ব্যবহার করে অনেকেই মোটরসাইকেল সেবা নিয়েছেন</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech4.jpg" alt="Suchi"></a>
                                <div class="caption thumbnail-caption">
                                    <a href="#"><h3>বিষণ্নতা বাড়াচ্ছে প্রযুক্তি</h3></a>
                                    <a href="#"><p>ষ্টম শ্রেণির শিক্ষার্থীদের মধ্যে বিষণ্নতার হার ২৭ শতাংশ বৃদ্ধি পায়, যখন তারা</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech5.jpg" alt="Osama"></a>
                                <div class="caption thumbnail-caption">
                                    <a href="#"><h3>বিক্রয়ে অটো-সাইকেল</h3></a>
                                    <a href="#"><p>অনলাইনে বিজ্ঞাপন দিয়ে বিক্রয় ডটকমে পণ্য বিক্রি বা কেনার সুবিধা পান</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="thumbnail thumbnail-contents">
                                <a href="#"><img src="images/tech6.jpg" alt="India"></a>
                                <div class="caption thumbnail-caption">
                                    <a href="#"><h3>র‍্যাবিটহোলের যাত্রা শুরু</h3></a>
                                    <a href="#"><p>আনুষ্ঠানিকভাবে যাত্রা শুরু করেছে লাইভ স্ট্রিমিং অ্যাপ ‘র‍্যাবিটহোল’।</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Aourthoniti part start here-->
                <div class="aourthoniti">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="aourthoniti-total-content">
                                <a href="#"><h1>জীবনযাপন</h1></a>
                                <hr />
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/jibonjapon.jpg" alt="jibonjapon" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <a href="#"><h4>তবু ওজন কমছে না</h4></a>
                                            <a href="#"><p>খুব হিসাব করেই চলছে সব। ডায়েট, ব্যায়াম, ক্যালরির হিসাব—সব ঠিকঠাক।</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/jibonjapon2.jpg" alt="Apurthoniti" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <a href="#"><h4>বয়সের তারতম্য?</h4></a>
                                            <a href="#"><p>বয়সে ছোট কিংবা বড় হলে অধিকারের বেলায়ও কম-বেশি হয়? বিশেষ করে ভাইবোনদের ক্ষেত্রে? অনেক সময়</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/jibonjapon3.jpg" alt="Apurthoniti" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <a href="#"><h4>ব্রণ এড়াতে</h4></a>
                                            <a href="#"><p>১১ থেকে ১৮ বছর বয়সীদের ব্রণের সমস্যা বেশি হয়ে থাকে। ছেলেদের ব্রণের মাত্রা বা তীব্রতা বেশি।</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-content-2">
                                    <div class="col-lg-5">
                                        <a href="#">
                                            <img src="images/jibonjapon4.jpg" alt="Apurthoniti" />
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="details">
                                            <a href="#"><h4>স্কুল থেকেও পারে</h4></a>
                                            <a href="#"><p>একজন শিশুর শিক্ষা শুরু হয় তার মা-বাবার কাছ থেকে। এরপরই আসে স্কুলের নাম। পরিবারের পর</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Aourthoniti part end here-->
            </div>
        </div>
    </div>
</div>
<!--Technology Life-style part end here-->


<!--Nari-Bichitro-khobor-carton part start here-->
<div class="nbck">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="thumbnail total-thumbnail-content">
                    <a href="#"><h1>শিক্ষা</h1></a>
                    <hr />
                    <div class="total-thumbnail-content-2">
                        <a href="#"><img src="images/nari.jpg" alt="Nari"></a>
                        <div class="caption texts">
                            <a href="#"><h3>কোঁকড়া চুলে ঢেউ খেলে</h3></a>
                            <a href="#" class="details"><p>ঢেউখেলানো কালো চুলের সৌন্দর্যই আলাদা। এমন চুল নিয়ে কাব্যও কম হয়নি। প্রাকৃতিকভাবে কোঁকড়া, তাদের অবশ্য একে সামলাতে মাঝেমধ্যে একটু ঝামেলায়ও পড়তে হয়</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="thumbnail total-thumbnail-content">
                    <a href="#"><h1>বিচিত্র খবর</h1></a>
                    <hr />
                    <div class="total-thumbnail-content-2">
                        <a href="#"><img src="images/bichitro.jpg" alt="Bicitro"></a>
                        <div class="caption texts">
                            <a href="#"><h3>ক্যাকটাস কাহন</h3></a>
                            <a href="#" class="details"><p>ক্যাকটাস ‘ক্যাকেটসিয়া’ পরিবারের অন্তর্ভুক্ত উদ্ভিদ। প্রায় দুই হাজার জাতের ক্যাকটাস রয়েছে। ক্যাকটাসের ছবিটি সম্প্রতি রাজধানীর জাতীয় </p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="thumbnail total-thumbnail-content">
                    <a href="#"><h1>কার্টুন</h1></a>
                    <hr />
                    <div class="total-thumbnail-content-2">
                        <a href="#"><img src="images/katrun.jpg" alt="katuron"></a>
                        <div class="caption texts">
                            <a href="#"><h3>জীবন</h3></a>
                            <a href="#" class="details"><p>সদা হাসি-খুশি ছেলেটা হঠাৎ করেই নিষ্প্রভ হয়ে গেল। যে ছেলেটা দুই দিন আগেও হাসি-খুশি থাকত, প্রাণোচ্ছল আড্ডা দিত, বন্ধুদের জ্বালিয়ে মারত, সেই ছেলেটিকে এমন নিষ্প্রভ ।</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Nari-Bichitro-khobor-carton part end here-->

<?php
require_once './footer.php';
?>