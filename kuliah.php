<?php
    // tangkap request class_nilai.php
    require_once 'class_nilai.php';

    $ns1 = new NilaiSiswa('Rio',85);
    $ns2 = new NilaiSiswa('Bedu',70);
    $ns3 = new NilaiSiswa('Soro',90);
    $ns4 = new NilaiSiswa('Sopo',75);
    $ar_santri = [$ns1,$ns2,$ns3,$ns4];
?>
<table border="2" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($ar_santri as $san) {
                echo '<tr align="center"><td>'.$nomor.'</td><td align="left">'.$san->nama.'</td>';
                echo '<td>'.$san->nilai.'<td>'.$san->getHasil();
            }
        ?>
    </tbody>
</table>