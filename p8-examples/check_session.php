
<?php
session_start();
?>

<section>

    <?php
    echo $_SESSION["name"];
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