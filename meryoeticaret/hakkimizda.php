<?php
include "header.php";

$hakkimizdasor = $db->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=:id");
$hakkimizdasor->execute(array(
    'id' => 0
));
$hakkimizdacek = $hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <!--Main content-->
            <div class="title-bg">
                <div class="title"><?php echo $hakkimizdacek["hakkimizda_baslik"]; ?></div>
            </div>
            <div class="page-content">
                <?php echo $hakkimizdacek["hakkimizda_icerik"]; ?>
            </div>
            <div class="title-bg">
      
            </div>

            <div class="title-bg">
                <div class="title">Vizyon</div>
            </div>
            <div class="page-content">
                <?php echo $hakkimizdacek["hakkimizda_vizyon"]; ?>
            </div>
            <div class="title-bg">
                <div class="title">Misyon</div>
            </div>
            <div class="page-content">
                <?php echo $hakkimizdacek["hakkimizda_misyon"]; ?>
            </div>
        </div>
            <!-- BURAYA SİDEBAR GELECEK -->
            <?php include "sidebar.php"; ?>
        </div>
        <div class="spacer"></div>
    </div>

<?php include "footer.php"; ?>