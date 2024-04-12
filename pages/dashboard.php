<?php
include("conn.php");
    session_start();
       if (!isset($_SESSION["user"])) {
       header("Location: login.php");
    exit();
       }
?>

   <link rel="stylesheet" href="../css/main.css">
<body>
   <?php
    include 'nav.php';
   ?>
   <div class="container-dashboard">
   <div class="container-login ">
    <div class="col-100 justify-center">
        <div class="input ">
            <form action="delete_user_logic.php" name="delete_user_logic" method="POST">
            <label>Id van user:</label>
            <input type="text" name="id_user" placeholder="id van user" required>
                <input type="submit" value="delete user" class="button">
            </div>  
</form>
        </div>
    </div>
    <div class="container-produts">
        <form class='register_form' action='products-logic.php' name='products-logic'method="POST">
        <div class="row55">
                <label>Nieuw product</label>
                <input type="text" name="naam"placeholder="name" >
                <input type="text" name="omschrijving"placeholder="omschrijving" >
                <input type="text" name="prijs"placeholder="price" >
            </div>
            <div class="row">
                <input type="submit" value='Maak product' class="button-produtcs"/>
            </div>
        </div>
        <?php 
    $stmt = $connection->prepare("SELECT * FROM products");
    $stmt->execute();
    $data = $stmt->fetchALL();

    foreach ($data as $row) {
        echo $row['naam'];
        echo "<a href='product_update.php?id=".$row['id']."'>Update</a>";
    }
    ?>
   </div>
</body>