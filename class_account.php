<?php
   class Account{
    public $nomer;
    protected $saldo;

    function __construct($nomer,$saldo){
        $this->nomer = $nomer;
        $this->saldo = $saldo;

    }

    public function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }
    public function withdraw($uang){
        $this->saldo = $this->saldo - $uang;
    }

    public function cetak(){
        echo 'Nomer account : ' .$this->nomer;
        echo '<br/>saldonya : ' .$this->saldo;
    }
   }

?>