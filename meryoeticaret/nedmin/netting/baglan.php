<?php 
error_reporting(0);

try {

    $db = new PDO("mysql:host=sql305.epizy.com;dbname=epiz_32521983_deneme;charset=utf8", 'epiz_32521983', '4R3po6JOiQ8xjzU');
    //echo "Veritabanı bağlantısı başarılı";

} catch (PDOException $e) {

    echo $e -> getMessage();

}

?>