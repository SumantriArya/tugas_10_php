<?php
require_once 'class_account.php';

class BankAccount extends Account {
    // Tambah data baru customer
    public $customer;    
    public static $biaya_admin = 5000;

    function __construct($no, $saldo_awal, $cust) {
        // panggil constructor parent class
        parent::__construct($no, $saldo_awal);
        $this->customer = $cust;
    }

    // tulis ulang method cetak
    function cetak(){
        parent::cetak();
        echo '<br> Customer: ' . $this->customer;
    }

    function transfer($obj_account, $uang) {
        $obj_account->deposit($uang);
        $this->withdraw($uang);
    }
}
?>
