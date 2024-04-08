<!-- <?php
    include 'pages/conn.php';

    $stmt = $connection->query("SELECT * FROM products WHERE id = 1");
    $user = $stmt->fetch();
    // echo $user["naam"];
    // echo $user['omschrijving'] ;
    // echo $user['prijs'] ;

    $stmt = $connection->query("SELECT * FROM products");
    while ($row = $stmt->fetch()) {
    echo $row['naam'] ."<br />\n";
    echo $row['omschrijving'] ."<br />\n";
    echo $row['prijs'] ."<br />\n";
    }
 ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php
    include 'pages/nav.php';
 ?>
 <div class="container-home-page">
    <div class="row">
        <div class="col-40">
            <div class="col-100 text-center">
            <h1>crazy tai bowl</h1>
            </div>
            <div class="home-text row">
                <div class="col-30">
                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                    <div class="tussen-vlak-text"></div>
                    <a>Nunc ultrices, turpis eu eleifend vestibulum.</a>
                </div>
                <div class="col-50 row">
                    <div class="home-text-wepcome">
                        <h2>Welkom bij crazy tai bowl restaurant!</h2>
                        <div class="tussen-vlak-text"></div>
                        <a>Bestel snel en gemaakelijk op onze websiite </a>
                    </div>
                </div>
            </div>
            <div class="bezorgen-home-page justify-between">
                <h3>bezorgen</h3>
                <form action="pages/postcode.php" name="postcode" method="POST">
                <input type="text" name="postcode" placeholder="postcode" required>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
        <div class="col-60">
            <img class="home-page-img" src="./foto/home-page.png" alt="">
        </div>
    </div>
 </div>

</body>
</html>