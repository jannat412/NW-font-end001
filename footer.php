
        <footer>
            <div class="footer-part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul>
                                <li><a href="#">আমাদের সম্পর্কে</a></li>
                                <li><a href="#">শর্তাবলী</a></li>
                                <li><a href="#">বিজ্ঞাপন দিন</a></li>
                                <li><a href="#">যোগাযোগ করুন</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <img src="images/Logo-Simanto.png" alt="Logo" class="img-responsive"/>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <div class="phn_no">
                                <span><i class="fa fa-phone" aria-hidden="true"></i>0170 000 000</span>
                            </div>
                            <div class="email_add">
                                <span><i class="fa fa-envelope-o" aria-hidden="true"></i></i>sample@gmail.com</span>
                            </div>
                            <div class="address">
                                <span><i class="fa fa-location-arrow" aria-hidden="true"></i>যাত্রাবাড়ী পানির ট্যাঙ্ক যাত্রাবাড়ী ঢাকা</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <!--Back to top button-->
                <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
            </div>
        </footer>





        <!-- bootstarp min js link here-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!--Back to top button js work-->
        <script type="text/javascript">
                                    $(document).ready(function () {


                                        $(window).scroll(function () {
                                            if ($(this).scrollTop() > 100) {
                                                $('#back-to-top').fadeIn();
                                            } else {
                                                $('#back-to-top').fadeOut();
                                            }
                                        });
                                        // scroll body to 0px on click
                                        $('#back-to-top').click(function () {
                                            $('#back-to-top').tooltip('hide');
                                            $('body,html').animate({
                                                scrollTop: 0
                                            }, 800);
                                            return false;
                                        });
                                        $('#back-to-top').tooltip('show');
                                    });
        </script>
    </body>
</html>

