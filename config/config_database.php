<?php
require "config_global.php";


function koneksi($hostname, $username, $password, $db)
{
    $koneksi = new mysqli($hostname, $username, $password, $db);
    return $koneksi;
}