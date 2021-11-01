<?php

session_start();

$isRestricted = false;

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
   $isRestricted = true;
}

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   
<div class="container">
    <?php if($isRestricted) : ?>
    <h3>Add New User</h3>
    <form class="card-panel" action="handler.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="field">
                <label>Name: <input type="text" name="name"></label>
            </div>
        </div>
        <div class="row">
            <div class="field">
                <label>E-mail: <input type="email" name="email"><br></label>
            </div>
        </div>
        <div class="row">
            <div class="field">
                <label>
                    <input class="with-gap" type="radio" name="gender" value="female"/>
                    <span>Female</span>
                </label>
            </div>
            <div class="field">
                <label>
                    <input class="with-gap" type="radio" name="gender" value="male"/>
                    <span>Male</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Photo</span>
                    <input type="file" name="photo" accept="image/png, image/gif, image/jpeg, image/jpg">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
        <input type="submit" class="btn" value="Add">
    </form>
    <a class="btn-floating btn-large pulse button" href="main.php"><i class="fa fa-home" style="font-size:36px"></i></a>
    <?php else :?>
    <span style="font-size:1.7rem">
        Content is restricted, please - <a style="color:#000000" href="login.php">Log<span class="teal-text">in</span></a>
    </span>
    <?php endif;?>
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
           width: 400px;
       }

       .button {
           position: absolute;
           bottom: 10%;
           right: 10%;
       }
</style>