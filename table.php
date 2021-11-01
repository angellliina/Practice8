<?php
require 'db.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       $users[] = [
           'name' => $row['name'],
           'email' => $row['email'],
           'gender' => $row['gender'],
           'path'=> !empty($row['path_to_img'])?$row['path_to_img']:'public/images/test.jpg'
       ];
   }
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<div class="container card-panel">
    <?php

    for($i = 0; $i < count($users); $i++) {
         print_r($users[$i]['name'] . "|" . $users[$i]['email'] . "|" . $users[$i]['gender'] . "|" . "<img height='50px' src='" . $users[$i]['path'] ."'>" ) . "<br>";
         echo "<hr>";
    }
    ?> 
    <a class="btn" href="adduser.php">return back</a>
    <a class="btn-floating btn-large pulse button" href="main.php"><i class="fa fa-home" style="font-size:36px"></i></a>
</div>

<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
        position: relative;
    }

    .container {
        max-width: 600px;
    }

    .button {
        position: absolute;
        bottom: 10%;
        right: 10%;
    }
</style>