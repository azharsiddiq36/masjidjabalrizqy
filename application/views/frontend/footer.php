<!-- TESTIMONIAL -->
<div id="testimonial" class="section">
    <!-- background section -->
    <div class="section-bg" style="background-image: url(<?= base_url()?>assets/charity2/img/background-2.jpg);" data-stellar-background-ratio="0.5"></div>
    <!-- /background section -->

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- Testimonial owl -->
            <div class="col-md-12">
                <div id="testimonial-owl" class="owl-carousel owl-theme">
                    <!-- testimonial -->
                    <?php
                    foreach ($kutipan->result() as $k){
                        ?>
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <div class="testimonial-img">
                                    <img width="70px" height="70px" src="https://www.dakwatuna.com/wp-content/uploads/2014/10/al-quran-hijau.jpg" alt="">
                                </div>
                                <h3><?= ucfirst($k->kutipan_nama)?></h3>
                                <span><?= "Ayat ".$k->kutipan_ayat?></span>
                            </div>
                            <div class="testimonial-quote">
                                <blockquote>
                                    <p><?= $k->kutipan_arti?></p>
                                </blockquote>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
            <!-- /Testimonial owl -->
        </div>
        <!-- /Row -->
    </div>
    <!-- /container -->
</div>
<!-- /TESTIMONIAL -->

<!-- FOOTER -->
<footer id="footer" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- footer contact -->
            <div class="col-md-4">
                <div class="footer">
                    <div class="footer-logo">
                        <a class="logo" href="#"><img src="<?= base_url()?>assets/charity2/img/logo.png" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul class="footer-contact">
                        <li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
                        <li><i class="fa fa-phone"></i> 607-279-9246</li>
                        <li><i class="fa fa-envelope"></i> <a href="#">Charity@email.com</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer contact -->

            <!-- footer galery -->
            <div class="col-md-4">
                <div class="footer">
                    <h3 class="footer-title">Galery</h3>
                    <ul class="footer-galery">
                        <li><a href="#"><img src="<?= base_url()?>assets/charity2/img/galery-1.jpg" alt=""></a></li>
                        <li><a href="#"><img src="<?= base_url()?>assets/charity2/img/galery-2.jpg" alt=""></a></li>
                        <li><a href="#"><img src="<?= base_url()?>assets/charity2/img/galery-3.jpg" alt=""></a></li>
                        <li><a href="#"><img src="<?= base_url()?>assets/charity2/img/galery-4.jpg" alt=""></a></li>
                        <li><a href="#"><img src="<?= base_url()?>assets/charity2/img/galery-5.jpg" alt=""></a></li>
                        <li><a href="#"><img src="<?= base_url()?>assets/charity2/img/galery-6.jpg" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer galery -->

            <!-- footer newsletter -->
            <div class="col-md-4">
                <div class="footer">
                    <h3 class="footer-title">Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <form class="footer-newsletter">
                        <input class="input" type="email" placeholder="Enter your email">
                        <button class="primary-button">Subscribe</button>
                    </form>
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer newsletter -->
        </div>
        <!-- /row -->

        <!-- footer copyright & nav -->
        <div id="footer-bottom" class="row">
            <div class="col-md-6 col-md-push-6">
                <ul class="footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Causes</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-6 col-md-pull-6">
                <div class="footer-copyright">
						<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                </div>
            </div>
        </div>
        <!-- /footer copyright & nav -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="<?= base_url()?>assets/charity2/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/charity2/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/charity2/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>assets/charity2/js/jquery.stellar.min.js"></script>
<script src="<?= base_url()?>assets/charity2/js/main.js"></script>

</body>

</html>
