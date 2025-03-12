<?php

if(stristr('contact',$_GET['popi'])) {

    require __DIR__ . "/../public/contact.php";
    
} else {

    require __DIR__ . "/../public/index.php";

}
