
                
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
                        <h1 class="mt-1">Edit Category </h1>
                        
</div>


<?php 

include "./backend/Edit_Category.php"

?>
                    <!-- Page Heading -->

                </div>
                <!-- /.container-fluid -->

            <!-- End of Main Content -->

            <?php 

include "layout/footer.php"



?>