



<?php
               $total_pendings = 0;
               $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
               $select_pendings->execute(['pending']);
               if($select_pendings->rowCount() > 0){
               while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
                  $total_pendings += $fetch_pendings['total_price'];
                     }
                  }
               ?>
               <h3> Order Status</h3>
               <p>Total Spendings: <b>Rs. <?= $total_pendings; ?>/-</b> </p>
   
               <?php
               $total_completes = 0;
               $select_completes = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
               $select_completes->execute(['completed']);
               if($select_completes->rowCount() > 0){
                  while($fetch_completes = $select_completes->fetch(PDO::FETCH_ASSOC)){
                     $total_completes += $fetch_completes['total_price'];
                        }
                  }
               ?>
         
               <p>Completed Orders:
               <b>Rs. </span><?= $total_completes; ?>/-</p></b>
   
                <?php
                    $select_orders = $conn->prepare("SELECT * FROM `orders`");
                    $select_orders->execute();
                    $number_of_orders = $select_orders->rowCount()
                ?>
               <p>Orders Placed: <b> <?=$number_of_orders;?></b></p>
               <a href="placed_orders.php" class="btn">see orders</a>
            