<?php
include 'konekcija.php';
include 'model/destinacija.php';
include 'model/vrsta.php';


session_start();

$user="";

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
if (isset($_COOKIE["admin"]))
    {
        $user=$_COOKIE["admin"];
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel Agent</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="css/main.css" rel="stylesheet">

</head>

<body class="stranica" style="margin-bottom:100px">
   
    <nav class="navbar navbar-expand-lg navbar-light" id="navCont" style="height:80px; ">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <a class="navbar-brand " href="index.php"style="color:white ; margin-top:10px ;font-size:29px">Travel Agent</a>
                <div class="navbar-nav p-lg-0 " style="margin-left: 54%; color:white ; ">
                    <li><a id="btn-Pocetna" href="index.php" type="button" class="btn btn-success btn-block" style="margin-top:-60px; margin-left:18px ; margin-right:18px ">
                        Home</a></li>
                    <li><a id="btn-Dodaj" type="button" class="btn btn-success btn-block"  data-toggle="modal" data-target="#my" style="margin-top:-60px; margin-left:18px ; margin-right:18px">
                        Dodaj destinaciju</a></li>
                    <li><a id="btn-Prikazi" href="pogledajVina.php" type="button" class="btn btn-success btn-block"style="margin-top:-60px; margin-left:18px; margin-right:18px">
                        Pogledaj destinacije</a></li>
                    <li><a id="btn-Pocetna" href="odjava.php" type="button" class="btn btn-success btn-block" style=" color:white; margin-left:60px; margin-top:-60px">
                    Odjava</a> </li>
                </div>
                
            </div>
        </nav>

</body>