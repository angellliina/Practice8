<?php 
session_start();
?>

<section>

    <?php
    $_SESSION["name"] = "Vasia";
    echo "Session variables're set.";
    ?>    

</section>

<style>

    section {
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
    }

</style>