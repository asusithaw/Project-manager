<?php
require_once("db.php");
require_once("index.php");
$conect = Createdb();

if(isset($_POST['create'])){
    echo "button is created";
}
?>