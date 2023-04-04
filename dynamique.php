<?php
    include_once "./pages/head_var.inc.php";
    include_once "./pages/head.inc.php";
    include_once "./pages/produit.inc.php"
?>

<body>
    <header>
        <h1>
            <span> 
                <img src="./asset/phone-gift-svgrepo-com.svg" alt="logo" aria-hidden="true">
            </span>
            <?= $produit["titre"] ?>
        </h1>
    </header>
    <main>
        <?php include_once "./pages/section.inc.php" ?>

        <footer>
        <p>
            <?php include_once "./pages/footer.inc.php" ?>
        </p>
        </footer>
    </main>
</body>
</html>