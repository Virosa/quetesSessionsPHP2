<?php 
session_start();
require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        
        <?php
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $cookie) {
        echo '<h1>' . $cookie['name'] . '</h1>';
        echo '<p>' . $cookie['description'] . '</p>';
    }
} else {

            echo 'Your cart is empty.';
}
        ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
