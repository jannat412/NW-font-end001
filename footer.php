
        <footer>
            <div class="footer-part">

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

