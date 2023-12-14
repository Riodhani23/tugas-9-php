<?php
    // tangkap request class_fruit
    require_once 'class_fruit.php';

    // create instan object fruit : $apple and $banana
    $apple = new fruit();
    $banana = new fruit();

    // call member class
    $apple->set_name('Apple');
    $apple->set_color('Red');
    $banana->set_name('Banana');
    $banana->set_color('Yellow');

    echo 'Nama Buah '.$apple->get_name().' Warna '.$apple->get_color();
    echo '<br>Nama Buah '.$banana->get_name().' warna '.$banana->get_color();
?>