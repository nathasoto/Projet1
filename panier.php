<?php
include "function/my-function.php";
include "function/articles.php";
include "templates/header.php"; 

session_start();        
?>
             <table class="table table-borderless">
                
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Produit</th>
                    <th scope="col">Prix unitaire</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Total</th>
                    </tr>
                </thead>
                </table>
                <?php 

                if(isset($_SESSION["panier"])): //pregunta si la session existe
                   

                    foreach($_SESSION["panier"] as  $data):
                       
                        $items = get_product($data['id_producto']);
                ?>
                <table class="table table-borderless">
                <thead>
                    <tr>
                    <th scope="col">      </th>
                    <th scope="col">      </th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"></th>
                    <td><?php echo $items[0]?></td>
                    <td><?php echo formatPrice(discountedPrice($items[1], $items[3]))?></td>
                    <td><?php echo $data['cant']?></td>
                    <td><?php echo formatPrice(Total($items, $data['cant']));?></td>
                    </tr> 
                </tbody>
                </table>

       
       
    <?php endforeach ?>
    <?php endif;?>


<a href="produit.php">come back</a>



<?php include "templates/footer.php";?>
