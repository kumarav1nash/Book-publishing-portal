
        <!-- footer -->


        <div class="footerv3-w3ls">

              <!-- footerv3-top -->
              <div class="footerv3-top">
                  <div class="container">
                      <div class="col-md-3 col-sm-6 footv3-left">
                          <h3>About Us</h3>
                          <p>BookTube is an Indian Book sharing website where anyone can publish their work such as Books, Notes and can write blogs also. This platform is created by Krishna Nand Maddheshiya also known as <b>Harry Gupta</b> and his friend <b>Avinash Kumar</b>.</p>
                      </div>
                      <div class="col-md-3 col-sm-6 footv3-left">
                          <h3>Get In Touch</h3>
                          <p>call or message us:</p>

                          <div class="fv3-contact">
                              <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                              <p>Dehradun</p>
                          </div>
                          <div class="fv3-contact">
                              <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                              <p>+91 7895344376</p>
                              <div class="fv3-contact">
                              </div>
                              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                              <p>
                                  <a href="mailto:krishnanand8081@gmail.com">krishnanand8081@gmail.com</a>
                              </p>
                          </div>
                          <div class="clearfix"></div>

                      </div>
                      <div class="col-md-3 col-sm-6 footv3-left">
                          <h3>Latest releases</h3>
                          <ul>
                              <li>
                                  <a href="#">
                                      <img src="../images/lt1.jpg" alt="" class="img-responsive">
                                  </a>
                              </li>

                          </ul>
                      </div>
                      <div class="col-md-3 col-sm-6 footv3-left">
                          <h3>Subscribe</h3>
                          <p>Currently subscription service is unavailble, we are working on that.</p>
                          <form action="#" method="post">
                              <input type="text" value="Your Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
                              <input type="submit" value="Subscribe">
                          </form>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <!-- /footerv3-top -->
          </div>


        <!-- copyright footer -->
        <div class="cpy-right">
            <p>© 2018 TheBookTube. All rights reserved <span style="color:transparent;"> | Design by</span>
                <a href="http://w3layouts.com"><span style="color:transparent;">YouthSOft</span></a>
            </p>
        </div>
    </div>
    <!-- //home -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- about bottom grid Numscroller -->
    <script src="js/numscroller-1.0.js"></script>
    <!-- //about bottom grid Numscroller -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>

