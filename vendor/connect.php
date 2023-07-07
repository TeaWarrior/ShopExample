<?php
 $connect =mysqli_connect('localhost','root','','Test');
 if(!$connect){
     die('Error connect to DataBase');
 }