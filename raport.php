<?php
    // tangkap request class_nilaiSantri.php
    require_once 'class_nilaiSantri.php';

    $ns1 = new NilaiSantri();
    $ns1->nama = 'Rio';
    $ns1->nilai = 90;
    echo $ns1->nama .' Kuliah di '.$ns1->sekolah;
    echo '<br>Hasil Ujian : '.$ns1->nilai.' dinyatakan '.$ns1->getHasil();
?>