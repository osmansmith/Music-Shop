<?php

class BD{
    
    public $servidor = "localhost";
    public $usuario = "root";
    public $pass = "";
    public $baseDatos = "musicShop";
    public $my;
    public $sql;
    // private $sql ;
    
    function __construct()
    {
       
        $this->conectar();
         
    }  
    public function conectar()
    {
        $this->my = new mysqli($this->servidor, $this->usuario, $this->pass, $this->baseDatos);
        if ($this->my->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->my->connect_errno . ") " . $this->my->connect_error;
        }
    } 

}
?>