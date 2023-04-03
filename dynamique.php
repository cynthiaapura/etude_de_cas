<?php
    include_once "./pages/head_var.inc.php";
    include_once "./pages/head.inc.php"
?>

<body>
    <header>
        <h1>
            <?php print title_h1 ?>
        </h1>
    </header>
    <main>
        <section>
            <h2>
                Produits disponibles
            </h2>
            <figure>
                <figcaption>
                    <img src="https://img.freepik.com/psd-gratuit/modele-maquette-ecran-pour-telephone-mobile-premium_53876-81688.jpg?w=1060&t=st=1680263822~exp=1680264422~hmac=d33cc205907bdfb0d74e5199cf04b77df68828ae47168f58ac054266466f83f3" alt="telephone portable">
                </figcaption>
            </figure>
            <h3>
                Prix : 60€
            </h3>
            <p>
                Tous les nouveaux produits disponibles dans nos magasins - voici nos coloris
            </p>
            <ul class = "color">
                <li class = "first"> rouge </li>
                <li class = "seconde"> bleu </li>
                <li class = "third"> vert </li>
                <li class = "fourth"> jaune </li>
            </ul>
            <p class = "stock">
                en stock <span class="material-symbols-outlined">shopping_cart</span>
            </p>
        </section>
    </main>
    <?php 
        include_once "./pages/footer.inc.php"
    ?>
</body>
</html>