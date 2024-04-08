<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<?php
    include 'nav.php';
    ?> 

        <?php
     include 'conn.php';
     ?> 
     <div class="container-menu justify-center">
        <?php
          $stmt = $connection->query("SELECT * FROM products");
          while ($row = $stmt->fetch()) {
   
             echo '<div class="menu-foto">';
             echo '<img class="menu-fotos" src="../foto/lopia.png" alt="">';
                  echo '<div class="text-menu">';
                  echo $row['naam'] ."<br />\n";
                   echo $row['omschrijving'] ."<br />\n";
                   echo '<div class="buton-menu">';
                   echo $row['prijs'] ."<br/>\n";
                   echo '</div>';
                   echo '</div>';
                   echo '</div>';
                }
        ?>
        </div>
        <!-- <div class="col-40">
            <div class="menu-foto">
            <img class="menu-fotos" src="../foto/lopia.png" alt="">
            </div>
            
        </div>
        <div class="col-40">
            <div class="menu-foto">
            <img class="menu-fotos" src="../foto/lopia.png" alt="">
            </div>
            <div class="text-menu">
                <p></p>
            </div>
        </div>
        <div class="col-40">
            <div class="menu-foto">
            <img class="menu-fotos" src="../foto/lopia.png" alt="">
            </div>
            <div class="text-menu">
                <p></p>
            </div>
        </div>
        <div class="col-40">
            <div class="menu-foto">
            <img class="menu-fotos" src="../foto/lopia.png" alt="">
            </div>
            <div class="text-menu">
                <p></p>
            </div>
        </div> -->


 </div>
</body>
</html>