<?php
$db = new mysqli("localhost","root","","customer");
if($db->connect_error){
    echo "Error";
}
