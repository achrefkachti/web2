<?php
session_start();

include "../entities/trans.php";
include "../core/transC.php";
include "../core/panierC.php";


    if(isset($_SESSION['id']) and isset($_SESSION['username']) ){
    $trans=new trans($_SESSION['id'],$_SESSION['username'],$_POST['alo']);
    $transC=new transC();
    $transC->ajouterT($trans);
    $panierC=new panierC();
    $panierC->deleteall();
    echo "<META http-equiv='refresh' content='0;URL=cart.php'>";}
    else
    {
    	 echo "<script type='text/javascript'>";
            echo "alert('Please sign in ');";
            echo "</script>";
                echo "<META http-equiv='refresh' content='0;URL=login.html'>";


    }


 
?>