<?php
require '../konekcija.php';
require '../model/destinacija.php';

    $id =$_POST['id'];  //post id koji se salje
    $destinacija = new Destinacija($id,null,null,null);
    if($destinacija->delete($conn,$id)){
      echo "Dobro je";
    }else{
      echo "Nije dobro";
    }
 ?>