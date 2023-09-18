<?php

 $user ='natha';
 $pass ='natha2023';

 try
 {
 	$mysqlConnection = new PDO('mysql:host=localhost;dbname=tea_shop;charset=utf8', 'natha', 'natha2023');
    //echo"conexion ok";
  
    
 }
 catch (PDOException $e)
 {
     print "Erreur : " .$e->getMessage(). "<br/>" ;
     die;
 }


$sqlQuery = 'SELECT * FROM products';
$showProducts = $mysqlConnection->prepare($sqlQuery);
$showProducts->execute();
$products = $showProducts->fetchAll();

foreach($products  as $product ){
    //echo $product['name'];

}

function rupture_stock($mysqlConnection){

$SQLquery = 'SELECT * FROM products WHERE quantity = 0';
$Statement = $mysqlConnection->prepare($SQLquery);
$Statement->execute();
$Shows = $Statement->fetchAll();


foreach($Shows  as  $Show ){
   echo "Id : ". $Show['id']," ". "Name : ".$Show['name'];
     
}
}

//rupture_stock($mysqlConnection);

function commandes_10derniers_jours($mysqlConnection){

    $SQLquery = 'SELECT * FROM `orders` WHERE date > DATE_SUB(NOW(),INTERVAL 10 DAY)';
    $Statement = $mysqlConnection->prepare($SQLquery);
    $Statement->execute();
    $Shows = $Statement->fetchAll();
    
    
    foreach($Shows  as  $Show ){
       echo "Id : ". $Show['id']," ". "Number : ".$Show['number'];
         
    }
    }

//commandes_10derniers_jours($mysqlConnection); 

function commandes_par_client($mysqlConnection){

    $SQLquery = 'SELECT first_name, last_name, COUNT(orders.id) FROM customers
    LEFT JOIN orders
    ON orders.customer_id = customers.id 
    GROUP BY last_name, first_name
    ORDER BY last_name';
    $Statement = $mysqlConnection->prepare($SQLquery);
    $Statement->execute();
    $Shows = $Statement->fetchAll();
    
    
    foreach($Shows  as  $Show ){

       echo $Show['first_name']," ".$Show['last_name']," ".$Show["COUNT(orders.id)"]."<br/>"; 
         
    }
    }

    //commandes_par_client($mysqlConnection);

    function montants_de_commandes_client($mysqlConnection){

        $SQLquery = 'SELECT first_name, last_name, SUM(orders.total) FROM customers
        LEFT JOIN orders
        ON orders.customer_id = customers.id 
        GROUP BY first_name, last_name';
        $Statement = $mysqlConnection->prepare($SQLquery);
        $Statement->execute();
        $Shows = $Statement->fetchAll();
        
        
        foreach($Shows  as  $Show ){
            echo $Show['first_name']," ".$Show['last_name']," ".$Show["SUM(orders.total)"]."<br/>"; 
             
        }
        }

    //montants_de_commandes_client($mysqlConnection);

    

    function Ajouter_stock($mysqlConnection,int  $quantity, int $id_product){

        $SQLquery = ("UPDATE products SET quantity = (quantity + $quantity ) WHERE products.id = $id_product");
        $Statement = $mysqlConnection->prepare($SQLquery);
        $Statement->execute();
        $Shows = $Statement->fetchAll();
        
        echo "Update Stock";

        }

       // Ajouter_stock($mysqlConnection, 3, 2);

       function Supprimer_article($mysqlConnection,  $Table, int $id_product){

        $SQLquery = ("DELETE FROM $Table WHERE products.id = $id_product");
        $Statement = $mysqlConnection->prepare($SQLquery);
        $Statement->execute();
        $Shows = $Statement->fetchAll();
        
        echo "Item Deleted";

        }

    Supprimer_article($mysqlConnection, 'products', 7 );

?>