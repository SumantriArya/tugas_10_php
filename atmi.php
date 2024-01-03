<?php
   require_once 'class_account.php';

   $ac1 = new account("03201",5000000);
   $ac2 = new account("01010",4500000);

   $ac1->cetak();
   echo '<br/>';
   $ac1->deposit(75000);
   echo '<br/>Nabung 75000 <br/>';
   $ac1->cetak();
?>