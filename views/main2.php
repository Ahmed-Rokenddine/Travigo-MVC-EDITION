<?php
require_once('../models/db.php');
require_once('../models/Administrator2.php');



$c = isset($_GET['c']) ? $_GET['c'] : 'administrator';
$m = isset($_GET['m']) ? $_GET['m'] : 'index';
$c .= 'ontroller';

if(file_exists('../controllers/' . $c . '.php')){
    require_once '../controllers/' . $c . '.php';
    if(method_exists($c, $m)){
        $c = new $c;
        call_user_func([$c,$m]);
    }else{
        die("Errori ");
    }    
}else{
    die("Erarr");
}




