<?php
    // tangkap request class_matematika.php
    require_once 'class_matematika.php';

    // akses static member variabel class Matematika
    Matematika::$counter++;
    Matematika::$counter++;
    Matematika::naikanCounter();
    echo 'counter sekarang : '. Matematika::$counter;
    echo '<hr>';

    // akses static member function class Matematika
    $x = Matematika::tambakan(4,5);
    echo "4 + 5 = $x";
    echo '<hr>';

    // akses constanta class Matematika
    echo 'Nilai PHI : '. Matematika::PHI;
    $luas_lingkaran = Matematika::luaslingkaran(8);
    echo '<br>Luas Lingkaran dengan Jari-jari 8 adalah : '. $luas_lingkaran;

?>