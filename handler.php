<?php

    require 'db.php';
    require 'uploads.php';

    function isError() {
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty(@$_POST["gender"])) {
            echo '<p style="color: #91170c;">Invalid Data</p>';
            return true;
        }
        return false;
    }

    function addData($path, $con) {

        if (!file_exists('database/users.csv')) {
            file_put_contents('database/users.csv', '');
        }
            
        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender = @$_POST["gender"];
        echo "<pre>";
        echo "File path = " . $path;

        $sql = "INSERT INTO users (email, name, gender, password, path_to_img) VALUES ('$email', '$name','$gender', '11111', '$path')";
        echo $sql;
        $res = mysqli_query($con, $sql);
        if ($res) {
           $valid = true;
        }

    }

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<div class="container card-panel">
   <?php

    if(!isError()) {
        echo "User Added: " . $_POST["name"] . "<br>";
        echo "Email: " . $_POST["email"]. "<br>";
        echo "Gender: " . @$_POST["gender"] . "<br>";
        echo "Image path: " . $filePath . "<br>";
    }
    addData($filePath, $conn);
   ?> 
   <hr>
   <a class="btn" href="adduser.php">return back</a>
   <a class="btn" href="table.php">view list</a>
</div>

<style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
        }

       .container {
           max-width: 500px;
       }
   </style>
