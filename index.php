<?php 
    require_once 'config.php';
 
    if( isset( $_GET['sql_text'] ) )
    {
        $sql_text = $_GET['sql_text'];
    }
    else 
    {
        die('Incomplete request. ver 1.1');
    }
    require "template.php";    
?>    