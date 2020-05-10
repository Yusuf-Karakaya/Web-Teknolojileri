<?php
  $email=$_POST["email"];
 $sifre=$_POST["sifre"];
 
 
 if($email=="b191210017@sakarya.edu.tr" && $sifre=="Yusuf1")
 {
    echo "  Hoşgeldiniz “b191210017”  ";
 } 
  else
  {
      header("Location:login.html");
  }

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>
 