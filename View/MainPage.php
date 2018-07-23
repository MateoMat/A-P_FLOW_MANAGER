<?php 
include_once './Model/Database.php';
include_once './Model/CycleEntity.php';
$conn = Database::createConnection();
?>


<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

               <div class="col-sm-6">
                   <p>Wybierz cykl promocyjny : </p>
                <?php
                
                
//                $cycle=CycleEntity::LoadCycleById($conn,2);
//                echo $cycle->getCycle_id();
                  $cycles= CycleEntity::Load_All_Cycles($conn);
                  foreach ($cycles as $a) {
                      echo '<button class="btn btn-primary">'.$a->getCycle_name().'</button>';
                  }
                
                ?>
            </div>

                
            </div>
        </div>
    </div>
</div>

