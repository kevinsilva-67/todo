<?php

$url_page = $_GET['popi'] ?? 'space-kevin';

if(stristr($url_page,'contact')) {

    require __DIR__ . "/../public/contact.php";

} else if(stristr($url_page,'space-kevin')) {

    require __DIR__ . "/../public/space-kevin.php";
    
} else {

    require __DIR__ . "/../public/index.php";

}
