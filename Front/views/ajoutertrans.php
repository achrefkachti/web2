<?php
session_start();

include "../entities/trans.php";
include "../core/transC.php";


    if(isset($_SESSION['id']) and isset($_SESSION['username']) ){
    $trans=new trans($_SESSION['id'],$_SESSION['username'],$_POST['alo']);
    $transC=new transC();
    $transC->ajouterT($trans);
    echo "<META http-equiv='refresh' content='0;URL=panierFE.php'>";}
    else
    {
    	 echo "<script type='text/javascript'>";
            echo "alert('Please sign in ');";
            echo "</script>";
                echo "<META http-equiv='refresh' content='0;URL=panierFE.php'>";


    }


 
?>