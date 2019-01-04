<?php
 $conn = mysqli_connect('localhost','root','','nhatre');
 //cu phap viet tat cua php
 if(!$conn){
     die('khong the ket noi'.mysqli_connect_error());
 }
//  else{
//      echo 'Ban da ket noi server';
//  }
?>