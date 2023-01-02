<?php
include "header.php";
?>

<div class="container">  
    <div class="title-bg">
        <div class="title">Sipariş Detay</div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered chart">
            <thead>
                <tr>
                    <th>Ürün NO</th>
                    <th>Ürün Adı</th>
                    <th>Ürün Adet</th>
                    <th>Ürün Fiyat</th>

                </tr>
            </thead>
            <?php
            $siparis_id = $_GET['siparis_id'];

            $siparissor = $db->prepare("SELECT * FROM siparis WHERE siparis_id=:id");
            $siparissor->execute(array(
                'id' => $siparis_id
            ));

            $sipariscek = $siparissor->fetch(PDO::FETCH_ASSOC);

            $siparisdetaysor = $db->prepare("SELECT * FROM siparisdetay WHERE siparis_id=:id");
            $siparisdetaysor->execute(array(
                'id' => $siparis_id
            ));

            while ($siparisdetaycek = $siparisdetaysor->fetch(PDO::FETCH_ASSOC)) {
                $urun_id = $siparisdetaycek['urun_id']; 

                $urunsor = $db->prepare("SELECT * FROM urun WHERE urun_id=:id");
                $urunsor->execute(array(
                    'id' => $urun_id
                ));

                $uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);

                ?>
                <tbody>
                    <tr>
                        <td width="20"><?php echo $sipariscek['siparis_id']; ?></td>
                        <td><?php echo $uruncek['urun_ad']; ?></td>
                        <td><?php echo $siparisdetaycek['urun_adet']; ?></td>
                        <td><?php echo $uruncek['urun_fiyat']; ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
    <div class="spacer"></div>
</div>

<?php include "footer.php"; ?>