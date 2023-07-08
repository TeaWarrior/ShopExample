<?php
 $connect =mysqli_connect('mysql','root','root','newdata');
 if(!$connect){
     die('Error connect to DataBase');
 }