<?php
require 'Model/hoofdstukModel.php';

$index = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
if(isset($index)){

    $hoofdstuk = getHoofdstuk($index);
 }
else{
    $index=22;
    $hoofdstuk = getHoofdstuk(22);
}


include 'View/HoofdstukView.php';
?>