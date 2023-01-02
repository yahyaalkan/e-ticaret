<?php
ob_start();
session_start();

include "nedmin/netting/baglan.php";
include "nedmin/production/fonksiyon.php";

$ayarsor = $db->prepare("SELECT * FROM ayar WHERE ayar_id=:id");
$ayarsor->execute(array(
    'id' => 0
));
$ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);

$hakkimizdasor = $db->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=:id");
$hakkimizdasor->execute(array(
    'id' => 0
));
$hakkimizdacek = $hakkimizdasor->fetch(PDO::FETCH_ASSOC);


$kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail");
$kullanicisor->execute(array(
    'mail' => $_SESSION['userkullanici_mail']
));
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $ayarcek['ayar_title']; ?></title>
    <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link rel="stylesheet" href="style.css">

    <!-- owl Style -->
    <link rel="stylesheet" href="css\owl.carousel.css">
    <link rel="stylesheet" href="css\owl.transitions.css">

    <!-- fancy Style -->
    <link rel="stylesheet" type="text/css" href="js\product\jquery.fancybox.css?v=2.1.5" media="screen">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
        <div class="header">
            <!--Header -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-4 main-logo">
                        <a href="index.php"><img width="70" src="images/logo-1933884_1280.png" alt="logo" class="logo img-responsive"></a>
                    </div>
                    <div class="col-md-8">
                        <div class="pushright">
                            <div class="top">

                                <?php
                                if (isset($_SESSION['userkullanici_mail'])) { ?>
                                    <a class="btn btn-default btn-dark">Hoşgeldin<span>-- --</span><?php echo $kullanicicek['kullanici_adsoyad']; ?></a>
                                <?php } else { ?>
                                    <a href="#" id="reg" class="btn btn-default btn-dark">Giriş Yap<span>-- yada --</span>Kayıt Ol</a>
                                    <div class="regwrap">
                                        <div class="row">
                                            <div class="col-md-6 regform">
                                                <div class="title-widget-bg">
                                                    <div class="title-widget">Kullanıcı Girişi</div>
                                                </div>

                                                <form role="form" action="nedmin/netting/islem.php" method="POST">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="username" name="kullanici_mail" required placeholder="Kullanıcı Mail">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="password" name="kullanici_password" required placeholder="Şifre">
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-default btn-red btn-sm" type="submit" name="kullanicigiris">Giriş Yap</button>
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="title-widget-bg">
                                                    <div class="title-widget">Kayıt Ol</div>
                                                </div>
                                                <p>
                                                    Yeni kullanıcı mısın? Alışverişe başlamak için hemen kayıt ol! </p>
                                                <a href="register.php"><button class="btn btn-default btn-yellow">Şimdi Kayıt Ol</button></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                ?>

                                <div class="srch-wrap">
                                    <a href="#" id="srch" class="btn btn-default btn-search"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="srchwrap">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <form class="form-horizontal" method="POST" action="arama.php" role="form">
                                                <div class="form-group">
                                                    <button class="btn btn-default" name="arama" type="submit">Ara</button>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="aranan" minlength="3" class="form-control" id="search">
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashed"></div>
        </div>
        <!--Header -->
        <div class="main-nav">
            <!--end main-nav -->
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php" class="active">Anasayfa</a>
                                        <div class="curve"></div>
                                    </li>

                                    <?php
                                    $menusor = $db->prepare("SELECT * FROM menu WHERE menu_durum=:durum ORDER BY menu_sira ASC LIMIT 5");
                                    $menusor->execute(array('durum' => 1));

                                    while ($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <li><a href="
                                        
                                        <?php
                                        if (!empty($menucek['menu_url'])) {

                                            echo $menucek["menu_url"];
                                        } else {

                                            echo "sayfa-" . seo($menucek['menu_ad']);
                                        }
                                        ?>                                   
                                        
                                        <?php echo $vericek["menu_seourl"]; ?>"><?php echo $menucek["menu_ad"]; ?></a></li>

                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 machart">
                            <?php
                            $kullanici_id = $kullanicicek['kullanici_id'];

                            $sepetsor = $db->prepare("SELECT * FROM sepet WHERE kullanici_id=:id");
                            $sepetsor->execute(array(
                                'id' => $kullanici_id
                            ));
                            $sepetcek = $sepetsor->fetch(PDO::FETCH_ASSOC);

                            while ($sepetcek = $sepetsor->fetch(PDO::FETCH_ASSOC)) {
                                $urun_id = $sepetcek['urun_id'];

                                $urunsor = $db->prepare("SELECT * FROM urun WHERE urun_id=:id");
                                $urunsor->execute(array(
                                    'id' => $urun_id
                                ));

                                $uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);

                                $a = $sepetcek['urun_adet'];
                                $b = $uruncek['urun_fiyat'];
                                $c = $a * $b;

                                $toplam += $c;
                            }
                            ?>
                            <button id="popcart" class="btn btn-default btn-chart btn-sm "><span class="mychart">Sepet</span>|<span class="allprice"><?php echo $toplam; ?> TL</span></button>
                            <div class="popcart">
                                <table class="table table-condensed popcart-inner">
                                    <tbody>
                                        <?php
                                        $kullanici_id = $kullanicicek['kullanici_id'];
                                        $sepetsor = $db->prepare("SELECT * FROM sepet WHERE kullanici_id=:id");
                                        $sepetsor->execute(array(
                                            'id' => $kullanici_id
                                        ));
                                        $sepetcek = $sepetsor->fetch(PDO::FETCH_ASSOC);
                                        $toplam = 0;

                                        while ($sepetcek = $sepetsor->fetch(PDO::FETCH_ASSOC)) {
                                            $urun_id = $sepetcek['urun_id'];

                                            $urunsor = $db->prepare("SELECT * FROM urun WHERE urun_id=:id");
                                            $urunsor->execute(array(
                                                'id' => $urun_id
                                            ));

                                            $uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);

                                            $a = $sepetcek['urun_adet'];
                                            $b = $uruncek['urun_fiyat'];
                                            $c = $a * $b;

                                            $toplam += $c;
                                        ?>
                                            <tr>
                                                <td>
                                                    <a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
                                                </td>
                                                <td><a href="product.htm"><?php echo $uruncek['urun_ad']; ?></a><br><span></span></td>
                                                <td><?php echo $sepetcek['urun_adet']; ?></td>
                                                <td><?php echo $uruncek['urun_fiyat']; ?> TL</td>
                                                <!-- <td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td> SİLME BUTONU -->
                                            </tr>

                                        <?php } ?>

                                    </tbody>
                                </table>
                                <br>
                                <div class="btn-popcart">
                                    <a href="odeme.php" class="btn btn-default btn-red btn-sm">Alışverişi Tamamla</a>
                                    <a href="sepet.php" class="btn btn-default btn-red btn-sm">Sepeti Gör</a>
                                </div>
                                <div class="popcart-tot">
                                    <p>
                                        Toplam<br>
                                        <span><?php echo $toplam; ?> TL</span>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_SESSION['userkullanici_mail'])) { ?>
                        <ul class="small-menu">
                            <li><a href="hesabim.php" class="myacc">Hesap Bilgilerim</a></li>
                            <li><a href="siparislerim.php" class="myshop">Siparişlerim</a></li>
                            <li><a href="logout.php" class="mycheck">Güvenli Çıkış</a></li>
                        </ul>

                    <?php } ?>

                </div>
            </div>
        </div>
        <!--end main-nav -->