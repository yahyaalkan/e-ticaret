<?php
include "header.php";

$menusor = $db->prepare("SELECT * FROM menu");
$menusor->execute();

?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Menü Listeleme<small>

                                <?php
                                if ($_GET['sil'] == 'ok') { ?>

                                    <b style="color:green;">İşlem Başarılı..</b>

                                <?php } elseif ($_GET['sil'] == 'no') { ?>

                                    <b style="color:red;">İşlem Başarısız!..</b>
                                <?php } ?>

                            </small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Menüler <small></small></h2>
                                    <div class="clearfix"></div>
                                    <div align="right">
                                        <a href="menu-ekle.php"><button class="btn btn-success">Yeni Ekle</button></a>
                                    </div>
                                </div>
                                <div class="x_content">
                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="20">Menü İD</th>
                                                <th>Menü Adı</th>
                                                <th>Menü URL</th>
                                                <th>Menü Sıra</th>
                                                <th>Menü Durum</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            while ($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) { ?>
                                                <tr>
                                                    <td><?php echo $menucek["menu_id"]; ?></td>
                                                    <td><?php echo $menucek["menu_ad"]; ?></td>
                                                    <td><?php echo $menucek["menu_url"]; ?></td>
                                                    <td><?php echo $menucek["menu_sira"]; ?></td>
                                                    <td align="center">
                                                        <?php
                                                        if ($menucek["menu_durum"] == 1) { ?>
                                                            <button class="btn btn-success btn-xs">Aktif</button>
                                                        <?php } else { ?>
                                                            <button class="btn btn-danger">Pasif</button>
                                                        <?php } ?>
                                                    </td>
                                                    <td align="center"><a href="menu-duzenle.php?menu_id=<?php echo $menucek["menu_id"]; ?>"><button class="btn-primary btn-xs">Düzenle</button></a></td>
                                                    <td align="center"><a href="../netting/islem.php?menu_id=<?php echo $menucek["menu_id"]; ?>&menusil=ok"><button class="btn-danger btn-xs">Sil</button></a></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>