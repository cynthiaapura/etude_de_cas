<?php include_once "./pages/produit.inc.php" ?>

<section>
    <h2>
        <?php print $produit["produit"] ?>
    </h2>
    <figure>
        <img src="<?php print $produit["url"] ?>" alt="image portable" aria-hidden="true">
        <figcaption>
            <h3>
                <?php print $produit["prix"] ?>
            </h3>
            <p>
                <?php print $produit["description"] ?>
            </p>
            <ul class = "color">
                <?php 
                    foreach ($produit["colors"] as $value) {
                        echo "<li>" .$value. "</li>";
                    }
                ?>
            </ul>
            <p class = "stock">
                <?php print $produit["stock"]; ?> <span class="material-symbols-outlined" aria-hidden="true">shopping_cart</span>
            </p>                    
        </figcaption>
    </figure>
</section>