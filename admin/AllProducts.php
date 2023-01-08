
                
                <?php 

include "layout\head.php";
include "layout\header.php"



?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <?php
require_once "backend/connection.php";
require_once "backend/functions.php";

?>

<div class="container-fluid px-4">
                        <h1 class="mt-1">All Products</h1>
        <hr>
</div>


<?php 

include "./backend/all_products.php"

?>
     

                </div>
            

