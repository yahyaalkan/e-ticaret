<div class="f-widget">
    <!--footer Widget-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!--footer twitter widget-->
                <div class="title-widget-bg">
                    <div class="title-widget">Twitter Güncellemeleri</div>
                </div>
                <ul class="tweets">
                    <li>Check out this great #themeforest item for you
                        'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
                        <span>2 hours ago</span>
                    </li>
                    <li class="lastone">Check out this great #themeforest item for you
                        'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
                        <span>2 hours ago</span>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <a href="#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i>
                    <div>Bizi Twitter'da    Takip Edin</div>
                </a>
            </div>
            <!--footer twitter widget-->
            <div class="col-md-4">
                <!--footer newsletter widget-->
                <div class="title-widget-bg">
                    <div class="title-widget">Bültene Üye Ol</div>
                </div>
                <div class="newsletter">
                    <p>
                        En güncel indirimlere ve haberlere ulaşmak için bültene üye olun!
                    </p>
                    <form role="form">
                        <div class="form-group">
                            <label>E-mail Adresiniz</label>
                            <input type="email" class="form-control newstler-input" id="exampleInputEmail1" placeholder="Email adresi">
                            <button class="btn btn-default btn-red btn-sm">Giriş Yap</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--footer newsletter widget-->
            <div class="col-md-4">
                <!--footer contact widget-->
                <div class="title-widget-bg">
                    <div class="title-widget-cursive">Shopping</div>
                </div>
                <ul class="contact-widget">
                    <li class="fphone"><?php echo $ayarcek['ayar_tel']; ?><br><?php echo $ayarcek['ayar_faks']; ?></li>
                    <li class="fmobile"><?php echo $ayarcek['ayar_gsm']; ?><br><?php echo $ayarcek['ayar_gsm']; ?></li>
                    <li class="fmail lastone"><?php echo $ayarcek['ayar_mail']; ?><br><?php echo $ayarcek['ayar_mail']; ?></li>
                </ul>
            </div>
            <!--footer contact widget-->
        </div>
        <div class="spacer"></div>
    </div>
</div>
<!--footer Widget-->
<div class="footer">
    <!--footer-->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <ul class="footermenu">
                    <!--footer nav-->
                    <li><a href="index.php">Anasayfa</a></li>
                    <li><a href="cart.htm">Sepetim</a></li>
                    <li><a href="checkout.htm">Checkout</a></li>
                    <li><a href="siparislerim.php">Siparişlerim</a></li>
                    <li><a href="sayfa-iletisim.php">İletişim</a></li>
                </ul>
                <!--footer nav-->
            
                <a href="">
                    <div class="payment visa"></div>
                </a>
                <a href="">
                    <div class="payment paypal"></div>
                </a>
                <a href="">
                    <div class="payment mc"></div>
                </a>
                <a href="">
                    <div class="payment nh"></div>
                </a>
            </div>
            <div class="col-md-3">
                <!--footer Share-->
                <div class="followon">Bizi Takip Edin</div>
                <div class="fsoc">
                    <a href="<?php echo $ayarcek['ayar_twitter']; ?>" class="ftwitter">twitter</a>
                    <a href="<?php echo $ayarcek['ayar_facebook']; ?>" class="ffacebook">facebook</a>
                    <a href="<?php echo $ayarcek['ayar_google']; ?>" class="fflickr">flickr</a>
                    <a href="<?php echo $ayarcek['ayar_youtube']; ?>" class="ffeed">feed</a>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--footer Share-->
        </div>
    </div>
</div>
<!--footer-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap\js\bootstrap.min.js"></script>

<!-- map -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js\jquery.ui.map.js"></script>
<script type="text/javascript" src="js\demo.js"></script>

<!-- owl carousel -->
<script src="js\owl.carousel.min.js"></script>

<!-- rating -->
<script src="js\rate\jquery.raty.js"></script>
<script src="js\labs.js" type="text/javascript"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="js\product\lib\jquery.mousewheel-3.0.6.pack.js"></script>

<!-- fancybox -->
<script type="text/javascript" src="js\product\jquery.fancybox.js?v=2.1.5"></script>

<!-- custom js -->
<script src="js\shop.js"></script>
</div>
</body>

</html>