<?php
$db = mysqli_connect('localhost','root','','bd');

if (!$db){
    echo 'Error database';
    die();
}