<?php
require_once "backend/connection.php";
require_once "backend/functions.php";

?>

<div class="container-fluid px-5 ">
                        <h1 class="mt-5 mb-5 text-center text-light" style="font-size: 4rem; font-weight: 700; text-decoration-line: underline; ">Overview</h1>
                        
                       
</div>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="card border-secondary shadow h-100 py-2 rounded-pill">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase mb-1" style="font-size:1rem;">
                                All Orders
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray- 800">
                                <?php
                                Count_number_of_row_orders()

                                ?>

                            </div>
                        </div>

                    </div>

                </div>
               

            </div>
        </div>
</div>
<div class="row">
        <div class="col mt-3">
            <div class="card border-secondary shadow h-100 py-2 rounded-pill">
            <a href="Orders.php" class="text-decoration-none">  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase mb-1" style="font-size:1rem;">
                                Pending Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray -800"><?php Count_number_of_pending_orders() ?></div>
                        </div>
                       
                    </div>
                </div></a> 
            </div>
        </div>
</div>
<div class="row">


        <div class="col mt-3">
            <div class="card border-secondary  shadow h-100 py-2 rounded-pill">
            <a href="Orders.php" class="text-decoration-none">  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase mb-1"  style="font-size:1rem;">
                                Completed Orders</div>
                          <div class="h5 mb-0 font-weight-bold text-gray- 800"><?php Count_number_of_completed_orders() ?></div>
                        </div>
                
                    </div>
                </div>
            </div>
        </div></a>
    </div>
</div>

<div class="container text-center mt-3">
  <div class="row">
    <div class="col">
    <div class="card border-secondary shadow h-100 py-2 rounded-pill">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray text-uppercase mb-1"  style="font-size:1rem;">
                                All Orders
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                Count_number_of_row_orders()

                                ?>

                            </div>
                        </div>
                     
                    </div>

                </div>
                <!-- <button type="button" class="btn btn-outline-secondary">Secondary</button> -->

            </div>
    </div>

  </div>
</div>
