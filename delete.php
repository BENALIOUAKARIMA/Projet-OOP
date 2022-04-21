<?php
require_once 'operation.php';

$clt = new Clt();

$id = $_GET["id"];
$del = $clt->Delete($id);
if ($clt->Delete($id)) {
    
    header("location: contactliste.php");
    exit();
}

?>