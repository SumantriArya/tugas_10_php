<?php
   require_once 'BankAccount.php';

   $ab1 = new BankAccount("010",5000000,"messi");
   $ab2 = new BankAccount("070",4500000,"ronaldo");

   $ab1->cetak();
   echo '<hr/>';
   $ab2->cetak();
   echo '<br/>Ronaldo tersfer uang ke messi 1250000 <br/>';
   echo 'biaya admin : '.BankAccount::$biaya_admin.'<br/>';
   $ab2->transfer($ab1,1250000);
   $ab1->cetak();
   echo '<hr/>';
   $ab2->cetak();

   $ar_ab = [$ab1,$ab2];
?>