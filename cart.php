<?php require 'inc/head.php'; ?>
<?php
    session_start();
?>
<section class="cookies container-fluid">
    <div class="row">
        
        <?php
            echo 'Up to now here is what you have in your cart : ' .$_SESSION['name']. ',
            for a number of ' .$_SESSION['number'];
        ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
