<?php
   require_once 'class_account.php';

   $ac1 = new Account("03201",5000000);
   $ac2 = new Account("01010",4500000);

   $ac1->cetak();
?>