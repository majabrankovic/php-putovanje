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

<body class="stranica" 
style="margin-bottom:100px ;
    background-image: url(https://wallpaperaccess.com/full/2601987.jpg); 
    background-repeat: no-repeat;
    background-size: cover;">
   
    <nav class="navbar navbar-expand-lg navbar-light" id="navCont" style="height:80px; background-color: #F4F4E9; ">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <a class="navbar-brand " href="index.php"style="color:#4E7779 ; margin-top:5px ;font-size:29px">Travel Agent</a>
                <div class="navbar-nav p-lg-0 " style="margin-left: 28%; color:white ; ">
                    <li><a id="btn-Pocetna" href="index.php" type="button" class="btn btn-success btn-block" style=" margin-left:25px ; margin-right:50px; background-color: #90C7CA;color:white; font-size:17px; font-weight:bold " ">
                        Home</a></li>
                    <li><a id="btn-Dodaj" type="button" class="btn btn-success btn-block"  data-toggle="modal" data-target="#my" style=" margin-left:50px ; margin-right:80px; background-color:#90C7CA ;color:white; font-size:17px; font-weight:bold">
                        Dodaj </a></li>
                    <li><a id="btn-Prikazi" href="pogledajVina.php" type="button" class="btn btn-success btn-block"style=" margin-left:80px; margin-right:100px; background-color:#90C7CA ;color:white; font-size:17px; font-weight:bold">
                        Destinacije</a></li>
                    <li><a id="btn-Pocetna" href="odjava.php" type="button" class="btn btn-success btn-block" style=" color:white; margin-left:100px; background-color:#b7c098 ;color:white; font-size:17px; font-weight:bold ">
                    Odjava</a> </li>
                </div>
                
            </div>
        </nav>

</body>