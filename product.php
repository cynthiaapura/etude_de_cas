<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etude de cas 1</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" >
</head>
<body>
    <header>
        <h1>
            <span> 
                <img src="./asset/phone-gift-svgrepo-com.svg" alt="logo" aria-hidden="true">
            </span>
            Smartphone neufs ou reconditionnés
        </h1>
    </header>
    <main>
        <div class="prod" role="region">
            <h2 id="prod">
                Produits disponibles
            </h2>
            <ul class="list-prod">
                <?php include_once "./pages/bdd.inc.php"; ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>
            &copy; Product online - <time datetime="2023-03-04">2023</time>
        </p>
    </footer>
</body>
</html>