<?php
    require_once("product.php");
    require_once("cdmusic.php");

    $product = new Product();
    $product->set_name("Kaos Kaki");
    $product->set_price(80900);
    $product->set_discount(10);
    echo "Nama Product : ".$product->get_name()."<br/>";
    echo "Harga Product : ".$product->get_price()."<br/>";
    echo "Diskon : ".$product->get_discount()."<br/>";

    echo "CD MUSIC <br/>";
    $cdmusic = new Cdmusic();
    $cdmusic->set_name("CD-R");
    $cdmusic->set_price(87000);
    $cdmusic->set_discount(5);
    echo "Nama Product : ".$cdmusic->get_name()."<br/>";
    echo "Harga Product : ".$cdmusic->get_price()."<br/>";
    echo "Diskon : ".$cdmusic->get_discount()."<br/>";
?>
