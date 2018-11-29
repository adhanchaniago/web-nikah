<?php

$conn = mysqli_connect('localhost', 'root', '', 'hayu_nikah');

if(!$conn){
    echo 'DataBase Tidak Tersambung';
}