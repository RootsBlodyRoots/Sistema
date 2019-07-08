<?php

$dbHost = "localhost";
$dbuser = "root";
$dbpass =  "";
$dbname = "sistemaDeLogin";


 
$conexao = new mysqli($dbjost, $dbuser, $dbpass, $dbname);

if($conexao->conect_error){
    
   console.log("NÃO FOI POSSÍVEL SE CONECTAR: "); 
    
}else
{
    
    console.log("Burrão: "); 
   
    
}